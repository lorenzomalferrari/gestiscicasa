<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/log/UserLog.php');

    /**
     * Class EmailLog
     *
     * Questa classe estende UserLog e gestisce il logging delle azioni relative alle email.
     */
    class EmailLog extends UserLog
    {
        /**
         * @var string Indirizzo email.
         */
        protected $email;

        /**
         * @var string Oggetto dell'email.
         */
        protected $subject;

        /**
         * @var string Messaggio dell'email.
         */
        protected $emailMessage;

        /**
         * EmailLog constructor.
         *
         * @param string $message Messaggio descrittivo del log.
         * @param int $action Azione che ha generato il log.
         * @param string $data Dati recuperati dalla interrogazione al database.
         * @param mixed $beforeState Stato precedente all'azione.
         * @param mixed $afterState Stato successivo all'azione.
         * @param string $ipAddress Indirizzo IP da controllare.
         * @param int $userId ID dell'utente.
         * @param string $email Indirizzo email.
         * @param string $subject Oggetto dell'email.
         * @param string $emailMessage Messaggio dell'email.
         * @param string|null $customException Tipo di errore generato.
         * @param string|null $databaseConnectionInfo Informazione sulla connessione al database.
         */
        public function __construct($message, $action, $data, $beforeState, $afterState, $ipAddress, $userId, $email, $subject, $emailMessage, $customException = null, $databaseConnectionInfo = null, $logFile = null)
        {
            parent::__construct($message, $action, $data, $beforeState, $afterState, $ipAddress, $userId, $customException, $databaseConnectionInfo, $logFile ?? PathAndFilesLog::PATH_EMAIL_ERROR);
            $this->email = $email;
            $this->subject = $subject;
            $this->emailMessage = $emailMessage;
        }

        /**
         * Restituisce l'indirizzo email.
         *
         * @return string
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * Restituisce l'oggetto dell'email.
         *
         * @return string
         */
        public function getSubject()
        {
            return $this->subject;
        }

        /**
         * Restituisce il messaggio dell'email.
         *
         * @return string
         */
        public function getEmailMessage()
        {
            return $this->emailMessage;
        }

        /**
         * Scrive il log su file error_user.gc, includendo le informazioni aggiuntive sull'email.
         *
         * @return bool True se il log è stato scritto con successo, False altrimenti.
         */
        public function writeToFile()
        {
            $logEntry = sprintf(
                "[%s] User ID: %d, Action: %s, Message: %s, Before State: %s, After State: %s, Exception: %s, Database Info: %s, IP Address: %s, Email: %s, Subject: %s, Email Message: %s\n",
                $this->timestamp,
                $this->userId,
                $this->action,
                $this->message,
                json_encode($this->beforeState),
                json_encode($this->afterState),
                $this->customException,
                $this->databaseConnectionInfo,
                $this->ipAddress,
                $this->email,
                $this->subject,
                $this->emailMessage
            );

            return "";//FileManager::writeToFile($this->logFile, $logEntry, true);
        }
    }
