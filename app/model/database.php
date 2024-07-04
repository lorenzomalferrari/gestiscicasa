<?php declare(strict_types=1);

    /**
     * Classe Database
     * Una classe per gestire operazioni di database con PDO.
     */
    class Database
    {
        private $host;
        private $username;
        private $password;
        private $database;
        private $conn;

        /**
         * Costruttore della classe Database.
         *
         * @param string $host Host del database.
         * @param string $username Username del database.
         * @param string $password Password del database.
         * @param string $database Nome del database.
         */
        public function __construct($host, $username, $password, $database)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;

            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connessione al database fallita: " . $e->getMessage();
                //TODO: Salvare nei log l'errore
            }
        }

        /**
         * Esegue una query di selezione sul database e restituisce la prima riga come array associativo.
         *
         * @param string $query La query SQL da eseguire.
         * @param array $params (Opzionale) Parametri da associare alla query.
         * @return array Restituisce un array associativo rappresentante la riga selezionata, o un array vuoto in caso di errore.
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
                    'action' => CONFIG['crudType']['SELECT'],
                    'beforeState' => null,
                    'afterState' => null,
                    'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
                ];

                $this->executeLog($params_log);
                //print_r($params);
                //print_r($stmt);
                return $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query select: " . $e->getMessage();
                return [];
            }
        }

        /**
         * Esegue una query di selezione sul database e restituisce tutte le righe trovate come un array di array associativi.
         *
         * @param string $query La query SQL da eseguire.
         * @param array $params (Opzionale) Parametri da associare alla query.
         * @return array Restituisce un array contenente tutte le righe selezionate, o un array vuoto in caso di errore.
         */
        public function selectAll($query, $params = array()): array
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);

            // Log dell'interrogazione al database
            $params_log = [
                'message' =>
                'Interrogazione al database: QUERY -> ' . $query .
                ' - PARAMETRI -> ' . implode(", ", $params),
                'action' => CONFIG['crudType']['SELECT'],
                'beforeState' => null,
                'afterState' => null,
                'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
            ];

            $this->executeLog($params_log);
            //print_r($params);
            //print_r($stmt);

                return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query selectAll: " . $e->getMessage();
                return [];
            }
        }

        /**
         * Esegue una query di aggiornamento sul database.
         *
         * @param string $query La query SQL da eseguire.
         * @param array $params (Opzionale) Parametri da associare alla query.
         * @return int|false Restituisce il numero di righe interessate dall'aggiornamento, o false in caso di errore.
         */
        public function update($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);

            // Log dell'interrogazione al database
            $params_log = [
                'message' =>
                'Interrogazione al database: QUERY -> ' . $query .
                ' - PARAMETRI -> ' . implode(", ", $params),
                'action' => CONFIG['crudType']['UPDATE'],
                'beforeState' => null,
                'afterState' => null,
                'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
            ];

            $this->executeLog($params_log);
            //print_r($params);
            //print_r($stmt);

            return $stmt->rowCount();
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query update: " . $e->getMessage();
                return false;
            }
        }

        /**
         * Esegue una query di inserimento sul database.
         *
         * @param string $query La query SQL da eseguire.
         * @param array $params (Opzionale) Parametri da associare alla query.
         * @return int|false Restituisce l'ID dell'ultima riga inserita, o false in caso di errore.
         */
        public function insert($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                $new_id = $this->conn->lastInsertId();

                //TODO: Creare log che segnali inserimento
                $params_log = [
                    'message' => 'Creato inserimento: ' . $query,
                    'action' => CONFIG['crudType']['INSERT'],
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
         * Funzione che crea la riga del log all'interno del database.
         *
         * @param string $query La query SQL da eseguire.
         * @param array $params (Opzionale) Parametri da associare alla query.
         * @return int|false Restituisce l'ID dell'ultima riga inserita, o false in caso di errore.
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

        /**
         * Esegue una query di cancellazione sul database.
         *
         * @param string $query La query SQL da eseguire.
         * @param array $params (Opzionale) Parametri da associare alla query.
         * @return int|false Restituisce il numero di righe interessate dalla cancellazione, o false in caso di errore.
         */
        public function delete($query, $params = array())
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);

                // Log dell'interrogazione al database
                $params_log = [
                    'message' =>
                    'Interrogazione al database: QUERY -> ' . $query .
                    ' - PARAMETRI -> ' . implode(", ", $params),
                    'action' => CONFIG['crudType']['DELETE'],
                    'beforeState' => null,
                    'afterState' => null,
                    'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
                ];

                $this->executeLog($params_log);
                //print_r($params);
                //print_r($stmt);

                return $stmt->rowCount();
            } catch (PDOException $e) {
                echo "Errore durante l'esecuzione della query delete: " . $e->getMessage();
                return false;
            }
        }

        /**
         * Funzione privata per eseguire il log delle operazioni CRUD.
         *
         * @param array $params_log Parametri del log.
         * @return void
         */
        private function executeLog($params_log = array()): void
        {
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
