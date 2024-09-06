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
        public function __construct(string $compressionFormat = 'zip', string $fileExtension = 'gc')
        {
            $this->compressionFormat = $compressionFormat;
            $this->fileExtension = "." . $fileExtension;
            $this->lockFilePath = $this->getLockFilePath();
        }

        private function getLockFilePath(): string
        {
            return CONFIG['log']['baseFolder'] . CONFIG['log']['file_lock'];
        }

        public function createDirectory(string $directoryPath): bool
        {
            if (!is_dir($directoryPath)) {
                return mkdir($directoryPath, 0777, true);
            }
            return false;
        }

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
                } else {
                    $this->logError("Impossibile creare il file: $filePath");
                }
            }
            return false;
        }

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

        public static function printDirectoryContents(array $directoryContents, int $indentLevel = 0): void
        {
            foreach ($directoryContents as $name => $info) {
                echo str_repeat(' ', $indentLevel * 4) . $name . PHP_EOL;

                if ($info['type'] === 'directory' && !empty($info['contents'])) {
                    self::printDirectoryContents($info['contents'], $indentLevel + 1);
                }
            }
        }

        private function acquireLock(): void
        {
            while (file_exists($this->lockFilePath)) {
                usleep(500000); // Attende 0.5 secondi prima di riprovare
            }
            file_put_contents($this->lockFilePath, "locked");
        }

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
                // Lock per evitare conflitti
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
                $this->logError("Impossibile creare l'archivio compresso: $outputFilePath");
                throw new \RuntimeException("Impossibile creare l'archivio compresso: $outputFilePath");
            }
        }

        private function logError(string $message): void
        {
            $logFile = CONFIG['log']['baseFolder'] . 'error.log';
            $timestamp = date('Y-m-d H:i:s');
            file_put_contents($logFile, "[$timestamp] $message" . PHP_EOL, FILE_APPEND);
        }
    }
