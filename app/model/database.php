<?php
    require_once(ROOT . 'app/model/log/log.php');
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
                //echo "Connessione al database riuscita.";
            } catch (PDOException $e) {
                echo "Connessione al database fallita: " . $e->getMessage();
            }
        }

        public function select($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                //print_r("Ho eseguito la select");
                //TODO: Creare log che segnali select
                $params_log = [
                    'message' =>
                        'Interrogazione al database: QUERY -> ' . $query .
                        ' - PARAMETRI -> ' . implode(", ", $params),
                    'action' => 1,
                    'beforeState' => '',
                    'afterState' => '',
                    'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
                ];

                $this->executeLog($params_log);
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
                //TODO: Creare log che segnali inserimento
                $params_log = [
                    'message' => 'Creato inserimento: ' . $query,
                    'action' => 1,
                    'beforeState' => '',
                    'afterState' => '',
                    'user' => $_SESSION["IDUSER_SE"],
                ];

                $this->executeLog($params_log);
                return $this->conn->lastInsertId();
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query: " . $e->getMessage();
                //TODO: Creare log che segnali errore in inserimento
                return false;
            }
        }

        public function insertLogs($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $this->conn->lastInsertId();
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query: " . $e->getMessage();
                //TODO: Creare log che segnali errore in inserimento
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

        private function executeLog($params_log = array()){
            print_r("Sto per eseguire il Log");
            //database con credenziali messe
            $database = $this;
            //parametri insert -> prendo da params_log
            $timestamp = date('Y-m-d H:i:s', time());
            $message = $params_log['message'];
            $action = $params_log['action'];
            $beforeState = $params_log['beforeState'];
            $afterState = $params_log['afterState'];
            $user = $params_log['user'];

            $log = new CrudLog($timestamp, $message, $action, $beforeState, $afterState, $user, $database);
            $log->execute();
        }
    }
?>
