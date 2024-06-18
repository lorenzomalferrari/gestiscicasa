<?php declare(strict_types=1);
    /**
     *
     */
    class Log
    {
        protected $timestamp;
        protected $message;
        protected $action;
        protected $beforeState;
        protected $afterState;

        public function __construct($timestamp, $message, $action, $beforeState, $afterState)
        {
            $this->timestamp = $timestamp;
            $this->message = $message;
            $this->action = $action;
            $this->beforeState = $beforeState;
            $this->afterState = $afterState;
        }

        public function getTimestamp()
        {
            return $this->timestamp;
        }

        public function getMessage()
        {
            return $this->message;
        }

        public function getAction()
        {
            return $this->action;
        }

        public function getBeforeState()
        {
            return $this->beforeState;
        }

        public function getAfterState()
        {
            return $this->afterState;
        }
    }


    /**
     * Classe che gestisce i Log per Utente
     */
    class UserLog extends Log
    {
        protected $userId;

        public function __construct($timestamp, $message, $action, $beforeState, $afterState, $user)
        {
            parent::__construct($timestamp, $message, $action, $beforeState, $afterState);
            $this->userId = $user;
        }

        public function getUserId()
        {
            return $this->userId;
        }
    }

    /**
     * Classe che gestisce la registrazione dei log su Database
     */
    abstract class DatabaseLog extends UserLog
    {
        protected Database $database; // Oggetto per la gestione del database

        public function __construct($timestamp, $message, $action, $beforeState, $afterState, $user, $database)
        {
            parent::__construct($timestamp, $message, $action, $beforeState, $afterState, $user);
            $this->database = $database;
        }

        // Metodo astratto per il logging nel database
        abstract public function execute();
    }


    /**
    * Classe che gestisce la registrazione dei log su File
    */
    abstract class FileLog extends Log
    {
        // Implementazione specifica per il logging su file
    }

    class CrudLog extends DatabaseLog
    {
        protected $table;

        public function __construct($timestamp, $message, $action, $beforeState, $afterState, $user, $database)
        {
            parent::__construct($timestamp, $message, $action, $beforeState, $afterState, $user, $database);
            $this->table = getNomeTabella(NomiTabella::CRUDLOGS);
        }

        public function execute()
        {
            // Implementazione specifica per il logging delle azioni CRUD nel database
            // Esegui qui la query di inserimento nel database
            // Utilizza $this->database per accedere all'oggetto di gestione del database
            // Utilizza $this->getTimestamp(), $this->getMessage(), $this->getAction(), $this->getBeforeState(), $this->getAfterState() e $this->getUser() per ottenere i valori da registrare

            // Preparazione della query
            $params = array(
                ':timestamp' => $this->getTimestamp(),
                ':message' => $this->getMessage(),
                ':action' => $this->getAction(),
                ':before_state' => $this->getBeforeState(),
                ':after_state' => $this->getAfterState(),
                ':user_id' => $this->getUserId(),
            );

            // Query di inserimento
            $insertQuery =
                "INSERT INTO " . $this->table .
                " (timestamp, message, action, before_state, after_state, user_id) " .
                " VALUES (:timestamp, :message, :action, :before_state, :after_state, :user_id)";

            //print_r($insertQuery);
            //print_r($params);
            // Eseguo la query
            $this->database->insertLogs($insertQuery, $params);
        }
    }

    //class NotificationLog extends DatabaseLog
    //{
        // Implementazione specifica per il logging delle notifiche utente
    //}

    class ErrorLog extends FileLog
    {
        // Implementazione specifica per il logging degli errori
    }

    class APILog extends FileLog
    {
        // Implementazione specifica per il logging delle chiamate API
    }

    class PerformanceLog extends FileLog
    {
        // Implementazione specifica per il logging delle prestazioni del server
    }


?>
