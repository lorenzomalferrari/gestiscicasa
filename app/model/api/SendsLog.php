<?php
    require_once('FtpClient.php');

    class SendsLog {
        private $ftpClient;
        private $logsDirectory;

        public function __construct($ftpServer, $ftpUsername, $ftpPassword, $logsDirectory) {
            $this->ftpClient = new FtpClient($ftpServer, $ftpUsername, $ftpPassword);
            $this->logsDirectory = $logsDirectory;
        }

        public function handle($params) {
            // Calcola l'anno precedente
            $year = date('Y') - 1;
            $logFolder = $this->logsDirectory . DIRECTORY_SEPARATOR . $year;

            if (!is_dir($logFolder)) {
                return ['status' => 'error', 'message' => 'La cartella dei log per l\'anno precedente non esiste.'];
            }

            // Crea un file ZIP
            $zipFile = $this->createZip($logFolder);

            if (!$zipFile) {
                return ['status' => 'error', 'message' => 'Errore durante la creazione del file ZIP.'];
            }

            // Invia il file ZIP via FTP
            try {
                $ftpResult = $this->ftpClient->upload($zipFile, basename($zipFile));
                $this->ftpClient->close();
            } catch (Exception $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }

            return ['status' => 'success', 'message' => 'File ZIP inviato con successo.'];
        }

        private function createZip($sourceFolder) {
            $zip = new ZipArchive();
            $zipFile = tempnam(sys_get_temp_dir(), 'logs_') . '.zip';

            if ($zip->open($zipFile, ZipArchive::CREATE) !== TRUE) {
                return false;
            }

            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($sourceFolder));
            foreach ($files as $file) {
                if (!$file->isDir()) {
                    $filePath = $file->getRealPath();
                    $relativePath = substr($filePath, strlen($sourceFolder) + 1);
                    $zip->addFile($filePath, $relativePath);
                }
            }

            $zip->close();
            return $zipFile;
        }
    }
?>
