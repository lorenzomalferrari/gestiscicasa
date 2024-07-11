<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/NomiTabelle.php');

    /**
     * Class Log
     *
     * Questa classe rappresenta un log di azioni compiute all'interno del sistema CRM.
     */
    class Log
    {
        /**
         * @var string Timestamp del log.
         */
        protected $timestamp;

        /**
         * @var string Messaggio descrittivo del log.
         */
        protected $message;

        /**
         * @var string Azione che ha generato il log.
         */
        protected $action;

        /**
         * @var mixed Stato precedente all'azione.
         */
        protected $beforeState;

        /**
         * @var mixed Stato successivo all'azione.
         */
        protected $afterState;

        /**
         * Log constructor.
         *
         * @param string $timestamp Timestamp del log.
         * @param string $message Messaggio descrittivo del log.
         * @param string $action Azione che ha generato il log.
         * @param mixed $beforeState Stato precedente all'azione.
         * @param mixed $afterState Stato successivo all'azione.
         */
        public function __construct($timestamp, $message, $action, $beforeState, $afterState)
        {
            $this->timestamp = $timestamp;
            $this->message = $message;
            $this->action = $action;
            $this->beforeState = $beforeState;
            $this->afterState = $afterState;
        }

        /**
         * Restituisce il timestamp del log.
         *
         * @return string
         */
        public function getTimestamp()
        {
            return $this->timestamp;
        }

        /**
         * Restituisce il messaggio del log.
         *
         * @return string
         */
        public function getMessage()
        {
            return $this->message;
        }

        /**
         * Restituisce l'azione che ha generato il log.
         *
         * @return string
         */
        public function getAction()
        {
            return $this->action;
        }

        /**
         * Restituisce lo stato precedente all'azione.
         *
         * @return mixed
         */
        public function getBeforeState()
        {
            return $this->beforeState;
        }

        /**
         * Restituisce lo stato successivo all'azione.
         *
         * @return mixed
         */
        public function getAfterState()
        {
            return $this->afterState;
        }
    }
?>
