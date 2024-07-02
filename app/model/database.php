<?php declare(strict_types=1);
    require_once('log/log.php');
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

        /**
         * Esegue una query di selezione sul database e restituisce la prima riga come array associativo.
         *
         * @param string $query La query SQL da eseguire.
         * @param array $params (Opzionale) Parametri da associare alla query.
         * @return array|false Restituisce un array associativo rappresentante la riga selezionata, o false in caso di errore.
         */
        public function select($query, $params = array()): array
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);

                // Log dell'interrogazione al database
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
            print_r($params);
            print_r($stmt);
                return $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query select: " . $e->getMessage();
                return false;
            }
        }

        /**
         * Esegue una query di selezione sul database e restituisce tutte le righe trovate come un array di array associativi.
         *
         * @param string $query La query SQL da eseguire.
         * @param array $params (Opzionale) Parametri da associare alla query.
         * @return array|false Restituisce un array contenente tutte le righe selezionate, o false in caso di errore.
         */
        public function selectAll($query, $params = array()): array
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query selectAll: " . $e->getMessage();
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
                echo "Errore durante l'esecuzione della query update: " . $e->getMessage();
                return false;
            }
        }

        public function insert($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                $new_id = $this->conn->lastInsertId();

                //TODO: Creare log che segnali inserimento
                $params_log = [
                    'message' => 'Creato inserimento: ' . $query,
                    'action' => 1,
                    'beforeState' => '',
                    'afterState' => '',
                    'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
                ];

                $this->executeLog($params_log);
                return $new_id;
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query insert: " . $e->getMessage();
                //TODO: Creare log che segnali errore in inserimento
                return false;
            }
        }

        /**
         * Funzione che crea la riga del log all'interno del database
         */
        public function insertLogs($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $this->conn->lastInsertId();
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query insertLogs: " . $e->getMessage();
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
                echo "Errore durante l'esecuzione della query delete: " . $e->getMessage();
                return false;
            }
        }

        private function executeLog($params_log = array()){
            //print_r("Sto per eseguire il Log<br>");
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
