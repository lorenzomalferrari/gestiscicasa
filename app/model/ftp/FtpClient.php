<?php
    class FtpClient {
        private $ftpServer;
        private $ftpUsername;
        private $ftpPassword;
        private $connection;

        public function __construct() {
            $this->ftpServer = CONFIG['ftp']['server'];
            $this->ftpUsername = CONFIG['ftp']['username'];
            $this->ftpPassword = CONFIG['ftp']['password'];
            $this->connect();
        }

        private function connect() {
            $this->connection = ftp_connect($this->ftpServer);
            if (!$this->connection) {
                throw new Exception('Impossibile connettersi al server FTP.');
            }

            $login = ftp_login($this->connection, $this->ftpUsername, $this->ftpPassword);
            if (!$login) {
                ftp_close($this->connection);
                throw new Exception('Login al server FTP fallito.');
            }
        }

        public function upload($localFilePath, $remoteFilePath) {
            $upload = ftp_put($this->connection, $remoteFilePath, $localFilePath, FTP_BINARY);
            if (!$upload) {
                throw new Exception('Upload del file al server FTP fallito.');
            }
            return true;
        }

        public function close() {
            ftp_close($this->connection);
        }
    }
?>
