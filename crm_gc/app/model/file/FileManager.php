<?php

namespace YourNamespace;

/**
 * FileManager
 * 
 * Classe responsabile per la gestione dei file e delle cartelle con logica settimanale, mensile, semestrale e annuale.
 */
class FileManager
{
    private string $baseDir;
    private string $zipDir;
    private string $compressionType;
    private string $fileExtension;
    private string $lockFilePath;
    private int $lockWaitInterval; // Intervallo di attesa tra i tentativi di controllo del lock

    /**
     * Costruttore della classe FileManager.
     * 
     * @param string $baseDir Il percorso base per file e cartelle temporanee (di default: 'public/log/').
     * @param string $zipDir Il percorso base per i file compressi (di default: 'public/log/zip/').
     * @param string $compressionType Il tipo di compressione (di default: '.zip').
     * @param string $fileExtension L'estensione dei file creati (di default: '.lmgc').
     * @param int $lockWaitInterval L'intervallo di attesa tra i tentativi di controllo del lock in secondi (di default: 5).
     */
    public function __construct(
        string $baseDir = 'public/log/',
        string $zipDir = 'public/log/zip/',
        string $compressionType = '.zip',
        string $fileExtension = '.lmgc',
        int $lockWaitInterval = 5
    ) {
        $this->baseDir = rtrim($baseDir, '/') . '/';
        $this->zipDir = rtrim($zipDir, '/') . '/';
        $this->compressionType = $compressionType;
        $this->fileExtension = $fileExtension;
        $this->lockFilePath = $this->baseDir . 'process.lock';
        $this->lockWaitInterval = $lockWaitInterval;

        // Creiamo la directory zip se non esiste
        $this->createDirectory($this->zipDir);
    }

    /**
     * Metodo principale per eseguire le operazioni di gestione file.
     */
    public function execute()
    {
        $this->createDailyFile();
        $this->handleWeeklyTask();
        $this->handleMonthlyTask();
        $this->handleSemesterTask();
        $this->handleYearlyTask();
    }

    /**
     * Crea una cartella, se non esiste già.
     *
     * @param string $directoryPath Il percorso completo della cartella.
     * @throws \RuntimeException Se non è possibile creare la cartella.
     */
    public function createDirectory(string $directoryPath): void
    {
        $directoryPath = $this->normalizePath($directoryPath);
        if (!is_dir($directoryPath)) {
            if (!mkdir($directoryPath, 0777, true)) {
                throw new \RuntimeException("Impossibile creare la cartella: " . $directoryPath);
            }
        }
    }

    /**
     * Crea un file, se non esiste già.
     *
     * @param string $filePath Il percorso completo del file.
     * @throws \RuntimeException Se non è possibile creare il file.
     */
    public function createFile(string $filePath): void
    {
        $filePath = $this->normalizePath($filePath);
        if (!file_exists($filePath)) {
            $handle = fopen($filePath, 'w');
            if ($handle === false) {
                throw new \RuntimeException("Impossibile creare il file: " . $filePath);
            }
            fclose($handle);
        }
    }

    /**
     * Crea il file giornaliero `lm_day_{today}` nella directory corrente.
     */
    protected function createDailyFile(): void
    {
        $today = date('Ymd');
        $fileName = CONFIG['db']['tablePrefix'] . "day_$today" . $this->fileExtension;
        $this->createFile($this->baseDir . $fileName);
    }

    /**
     * Gestisce il lavoro settimanale: crea una cartella per la settimana precedente e salva i file giornalieri.
     */
    protected function handleWeeklyTask(): void
    {
        $today = new \DateTime();
        $weekStart = (clone $today)->modify('last saturday -6 days');
        $weekEnd = (clone $today)->modify('last saturday');
        
        $weekFolderName = 'lm_week_' . $weekStart->format('Ymd') . '_to_' . $weekEnd->format('Ymd');
        $weekFolderPath = $this->baseDir . $weekFolderName;
        $this->createDirectory($weekFolderPath);

        for ($i = 0; $i < 7; $i++) {
            $day = (clone $weekStart)->modify("+$i days")->format('Ymd');
            $this->createFile("$weekFolderPath/lm_day_$day" . $this->fileExtension);
        }
    }

    /**
     * Gestisce il lavoro mensile: crea una cartella per il mese precedente e salva le cartelle delle settimane in formato compresso.
     */
    protected function handleMonthlyTask(): void
    {
        $this->waitForProcessCompletion();

        $this->lockProcess();

        try {
            $today = new \DateTime();
            $lastMonth = (clone $today)->modify('first day of last month');

            $monthFolderName = 'lm_month_' . $lastMonth->format('Ym');
            $monthFolderPath = $this->baseDir . $monthFolderName;
            $this->createDirectory($monthFolderPath);

            // Trova tutte le cartelle settimanali del mese precedente e comprimile nel formato scelto
            $weekFolders = glob($this->baseDir . 'lm_week_' . $lastMonth->format('Ym') . '*');
            foreach ($weekFolders as $folder) {
                $zipFile = $this->zipDir . basename($folder) . $this->compressionType;
                if (!file_exists($zipFile)) {
                    $this->zipDirectory($folder, $zipFile);
                }
            }
        } finally {
            $this->unlockProcess();
        }
    }

    /**
     * Gestisce il lavoro semestrale: crea una cartella per il semestre corrente e salva le cartelle mensili in formato compresso.
     */
    protected function handleSemesterTask(): void
    {
        $this->waitForProcessCompletion();

        $this->lockProcess();

        try {
            $today = new \DateTime();
            $year = $today->format('Y');
            $semester = (int)$today->format('n') <= 6 ? '01' : '02';

            $semesterFolderName = CONFIG['db']['tablePrefix'] . "semester_{$year}_{$semester}";
            $semesterFolderPath = $this->baseDir . $semesterFolderName;
            $this->createDirectory($semesterFolderPath);

            $months = $semester === '01' ? range(1, 6) : range(7, 12);
            foreach ($months as $month) {
                $monthString = $year . str_pad($month, 2, '0', STR_PAD_LEFT);
                $monthFolders = glob($this->baseDir . CONFIG['db']['tablePrefix'] . "month_$monthString*");
                foreach ($monthFolders as $folder) {
                    $zipFile = $this->zipDir . basename($folder) . $this->compressionType;
                    if (!file_exists($zipFile)) {
                        $this->zipDirectory($folder, $zipFile);
                    }
                }
            }
        } finally {
            $this->unlockProcess();
        }
    }

    /**
     * Gestisce il lavoro annuale: crea una cartella per l'anno corrente e salva le cartelle semestrali in formato compresso.
     */
    protected function handleYearlyTask(): void
    {
        $this->waitForProcessCompletion();

        $this->lockProcess();

        try {
            $today = new \DateTime();
            $lastYear = $today->modify('-1 year')->format('Y');

            $yearFolderName = CONFIG['db']['tablePrefix'] . "year_$lastYear";
            $yearFolderPath = $this->baseDir . $yearFolderName;
            $this->createDirectory($yearFolderPath);

            $semesterFolders = glob($this->baseDir . CONFIG['db']['tablePrefix'] . "semester_{$lastYear}_*");
            foreach ($semesterFolders as $folder) {
                $zipFile = $this->zipDir . basename($folder) . $this->compressionType;
                if (!file_exists($zipFile)) {
                    $this->zipDirectory($folder, $zipFile);
                }
            }
        } finally {
            $this->unlockProcess();
        }
    }

    /**
     * Crea un file compresso da una directory.
     *
     * @param string $source La directory da comprimere.
     * @param string $destination Il file compresso di destinazione.
     * @throws \RuntimeException Se non è possibile creare l'archivio.
     */
    protected function zipDirectory(string $source, string $destination): void
    {
        $source = $this->normalizePath($source);
        $destination = $this->normalizePath($destination);

        $zip = new \ZipArchive();
        if ($zip->open($destination, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
            $files = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($source),
                \RecursiveIteratorIterator::LEAVES_ONLY
            );

            foreach ($files as $name => $file) {
                if (!$file->isDir()) {
                    $filePath = $file->getRealPath();
                    $relativePath = substr($filePath, strlen($source) + 1);
                    $zip->addFile($filePath, $relativePath);
                }
            }

            $zip->close();
        } else {
            throw new \RuntimeException("Impossibile creare l'archivio: " . $destination);
        }
    }

    /**
     * Normalizza un percorso per assicurare che utilizzi le barre finali corrette.
     * 
     * @param string $path Il percorso da normalizzare.
     * @return string Il percorso normalizzato.
     */
    private function normalizePath(string $path): string
    {
        return rtrim($path, '/') . '/';
    }

    /**
     * Controlla se il processo è bloccato.
     * 
     * @return bool True se il processo è bloccato, False altrimenti.
     */
    private function isProcessLocked(): bool
    {
        return file_exists($this->lockFilePath);
    }

    /**
     * Blocca il processo creando un file di lock.
     * 
     * @throws \RuntimeException Se non è possibile creare il file di lock.
     */
    private function lockProcess(): void
    {
        if (file_put_contents($this->lockFilePath, 'locked') === false) {
            throw new \RuntimeException("Impossibile creare il file di lock: " . $this->lockFilePath);
        }
    }

    /**
     * Sblocca il processo rimuovendo il file di lock.
     * 
     * @throws \RuntimeException Se non è possibile rimuovere il file di lock.
     */
    private function unlockProcess(): void
    {
        if (!unlink($this->lockFilePath)) {
            throw new \RuntimeException("Impossibile rimuovere il file di lock: " . $this->lockFilePath);
        }
    }

    /**
     * Attende finché il processo non è sbloccato prima di proseguire.
     * 
     * @throws \RuntimeException Se non è possibile attendere o verificare lo stato del lock.
     */
    private function waitForProcessCompletion(): void
    {
        $timeout = 3600; // Timeout massimo in secondi
        $start = time();
        while ($this->isProcessLocked()) {
            if (time() - $start > $timeout) {
                throw new \RuntimeException("Timeout raggiunto mentre si attende il completamento del processo.");
            }
            sleep($this->lockWaitInterval);
        }
    }

    /**
     * Valida se il percorso è un file o una directory esistente.
     * 
     * @param string $path Il percorso del file o della directory da convalidare.
     * @return bool True se il percorso esiste ed è valido, False altrimenti.
     */
    public static function validatePath(string $path): bool
    {
        return file_exists($path);
    }
}
