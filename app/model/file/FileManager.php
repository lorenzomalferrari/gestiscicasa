<?php declare(strict_types=1);

    class FileManager
    {
        private string $compressionFormat;
        private string $fileExtension;
        private string $lockFilePath;

        /**
         * Costruttore della classe FileManager.
         *
         * @param string $compressionFormat Il formato di compressione (default: 'zip').
         * @param string $fileExtension L'estensione del file (default: '.lmgc').
         */
        public function __construct(string $compressionFormat = CONFIG['log']['compression'], string $fileExtension = CONFIG['log']['extension'])
        {
            $this->compressionFormat = $compressionFormat;
            $this->fileExtension = "." . $fileExtension;
            $this->lockFilePath = self::getLockFilePath();
        }

        private function getLockFilePath(): string
        {
            // Usa la directory di lavoro (basePath) per il lock file
            return CONFIG['log']['baseFolder'] . CONFIG['log']['file_lock'];
        }

        /**
         * Crea una directory, inclusa qualsiasi directory intermedia necessaria.
         *
         * @param string $directoryPath Il percorso della directory da creare.
         * @return bool True se la directory è stata creata con successo, false altrimenti.
         */
        public function createDirectory(string $directoryPath): bool
        {
            if (!is_dir($directoryPath)) {
                return mkdir($directoryPath, 0777, true);
            }
            return false;
        }

        /**
         * Crea un file vuoto se non esiste già.
         * Se necessario, crea anche la directory che lo conterrà.
         *
         * @param string $filePath Il percorso completo del file da creare.
         * @return bool True se il file è stato creato con successo, false altrimenti.
         */
        public function createFile(string $filePath): bool
        {
            $directoryPath = dirname($filePath);
            if (!is_dir($directoryPath)) {
                $this->createDirectory($directoryPath);
            }

            if (!file_exists($filePath)) {
                $handle = fopen($filePath, 'w');
                if ($handle) {
                    fclose($handle);
                    return true;
                }
            }
            return false;
        }

        /**
         * Legge il contenuto di una directory.
         *
         * @param string $directoryPath Il percorso della directory da leggere.
         * @return array Un array che rappresenta il contenuto della directory.
         * @throws \RuntimeException Se la directory non esiste o non può essere letta.
         */
        public static function readDirectoryContents(string $directoryPath): array
        {
            $directoryPath = rtrim($directoryPath, '/') . '/';

            if (!is_dir($directoryPath)) {
                throw new \RuntimeException("La directory specificata non esiste: $directoryPath");
            }

            $contents = [];
            $dirHandle = opendir($directoryPath);

            if ($dirHandle === false) {
                throw new \RuntimeException("Impossibile aprire la directory: $directoryPath");
            }

            while (($item = readdir($dirHandle)) !== false) {
                if ($item === '.' || $item === '..') {
                    continue;
                }

                $fullPath = $directoryPath . $item;

                if (is_dir($fullPath)) {
                    $contents[$item] = [
                        'type' => 'directory',
                        'path' => $fullPath,
                        'contents' => self::readDirectoryContents($fullPath)
                    ];
                } else {
                    $contents[$item] = [
                        'type' => 'file',
                        'path' => $fullPath,
                        'size' => filesize($fullPath),
                        'last_modified' => filemtime($fullPath)
                    ];
                }
            }

            closedir($dirHandle);
            return $contents;
        }

        /**
         * Visualizza in modo formattato il contenuto di una directory.
         *
         * @param array $directoryContents L'array contenente il contenuto della directory.
         * @param int $indentLevel Il livello di indentazione corrente (usato per la ricorsione).
         * @return void
         */
        public static function printDirectoryContents(array $directoryContents, int $indentLevel = 0): void
        {
            foreach ($directoryContents as $name => $info) {
                echo str_repeat(' ', $indentLevel * 4) . $name . PHP_EOL;

                if ($info['type'] === 'directory' && !empty($info['contents'])) {
                    self::printDirectoryContents($info['contents'], $indentLevel + 1);
                }
            }
        }

        /**
         * Esegue il lock per evitare conflitti nelle operazioni su file e directory.
         *
         * @return void
         */
        private function acquireLock(): void
        {
            while (file_exists($this->lockFilePath)) {
                usleep(500000); // Attende 0.5 secondi prima di riprovare
            }
            file_put_contents($this->lockFilePath, "locked");
        }

        /**
         * Rilascia il lock dopo aver completato le operazioni su file e directory.
         *
         * @return void
         */
        private function releaseLock(): void
        {
            if (file_exists($this->lockFilePath)) {
                unlink($this->lockFilePath);
            }
        }

        /**
         * Funzione che esegue l'operazione principale e gestisce la logica di creazione file e cartelle.
         *
         * @param string $baseDirectoryPath Il percorso della directory di base.
         * @param string $prefix Il prefisso per il nome del file.
         * @return void
         */
        public function execute(string $baseDirectoryPath, string $prefix): void
        {
            try {
                $this->acquireLock();

                // Creazione del file giornaliero
                $today = date('Y-m-d');
                $dailyFilePath = $baseDirectoryPath . $prefix . CONFIG['log'][0] . $today . $this->fileExtension;
                $this->createFile($dailyFilePath);

                // Gestione settimanale
                if (date('N') === '7' || date('N') === '6') {
                    $startOfWeek = date('Y-m-d', strtotime('last Monday'));
                    $endOfWeek = date('Y-m-d', strtotime('last Sunday'));
                    $weeklyDirectoryPath = $baseDirectoryPath . $prefix . CONFIG['log'][1] . $startOfWeek . '_to_' . $endOfWeek . '/';
                    if ($this->createDirectory($weeklyDirectoryPath)) {
                        $this->createFile($weeklyDirectoryPath . $prefix . CONFIG['log'][0] . $startOfWeek . $this->fileExtension);
                    }
                }

                // Gestione mensile
                if (date('j') === '1') {
                    $lastMonth = date('Y-m', strtotime('first day of last month'));
                    $monthlyDirectoryPath = $baseDirectoryPath . 'zip/' . $prefix . CONFIG['log'][2] . $lastMonth . $this->compressionFormat;
                    $this->createCompressedArchive($baseDirectoryPath, $monthlyDirectoryPath, $prefix . CONFIG['log'][1]);
                }

                // Gestione semestrale
                if (date('n') === '7' || date('n') === '1') {
                    $semester = (date('n') <= 6) ? 'first' : 'second';
                    $semesterDirectoryPath = $baseDirectoryPath . 'zip/' . $prefix . CONFIG['log'][3] . $semester . $this->compressionFormat;
                    $this->createCompressedArchive($baseDirectoryPath . 'zip/', $semesterDirectoryPath, $prefix . CONFIG['log'][2]);
                }

                // Gestione annuale
                if (date('n') === '1' && date('j') === '1') {
                    $lastYear = date('Y', strtotime('last year'));
                    $yearDirectoryPath = $baseDirectoryPath . 'zip/' . $prefix . CONFIG['log'][4] . $lastYear . $this->compressionFormat;
                    $this->createCompressedArchive($baseDirectoryPath . 'zip/', $yearDirectoryPath, $prefix . CONFIG['log'][3]);
                }
            } finally {
                $this->releaseLock();
            }
        }

        /**
         * Crea un archivio compresso (.zip) con i file specificati.
         *
         * @param string $sourceDirectoryPath La directory di origine dei file da comprimere.
         * @param string $outputFilePath Il percorso completo del file di output compresso.
         * @param string $pattern Un pattern per filtrare i file da includere nell'archivio.
         * @return void
         * @throws \RuntimeException Se la creazione dell'archivio fallisce.
         */
        private function createCompressedArchive(string $sourceDirectoryPath, string $outputFilePath, string $pattern): void
        {
            $zip = new \ZipArchive();
            if ($zip->open($outputFilePath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
                $files = scandir($sourceDirectoryPath);

                foreach ($files as $file) {
                    if ($file !== '.' && $file !== '..' && strpos($file, $pattern) === 0) {
                        $filePath = $sourceDirectoryPath . $file;
                        $zip->addFile($filePath, $file);
                    }
                }

                $zip->close();
            } else {
                throw new \RuntimeException("Impossibile creare l'archivio compresso: $outputFilePath");
            }
        }
    }
