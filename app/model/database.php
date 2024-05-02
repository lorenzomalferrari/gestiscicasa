<?php
    /**
     *
     */
    class Database
    {
        private $host;
        private $username;
        private $password;
        private $database;
        private $conn;

        public function __construct($host, $username, $password, $database)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;

            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connessione al database riuscita.";
            } catch (PDOException $e) {
                echo "Connessione al database fallita: " . $e->getMessage();
            }
        }

        public function select($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query: " . $e->getMessage();
                return false;
            }
        }

        public function selectAll($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query: " . $e->getMessage();
                return false;
            }
        }

        public function update($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $stmt->rowCount();
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query: " . $e->getMessage();
                return false;
            }
        }

        public function insert($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $this->conn->lastInsertId();
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query: " . $e->getMessage();
                return false;
            }
        }

        public function delete($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $stmt->rowCount();
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query: " . $e->getMessage();
                return false;
            }
        }
    }
?>
