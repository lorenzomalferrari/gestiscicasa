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

/**
 * Class FileLog
 *
 * Questa classe estende Log e consente di scrivere i log su un file.
 */
class FileLog extends Log
{
    /**
     * @var string Nome del file di log.
     */
    protected $logFile;

    /**
     * FileLog constructor.
     *
     * @param string $timestamp Timestamp del log.
     * @param string $message Messaggio descrittivo del log.
     * @param string $action Azione che ha generato il log.
     * @param mixed $beforeState Stato precedente all'azione.
     * @param mixed $afterState Stato successivo all'azione.
     * @param string|null $logFile Nome del file di log. Default 'logs.lm' se null.
     */
    public function __construct($timestamp, $message, $action, $beforeState, $afterState, $logFile = null)
    {
        parent::__construct($timestamp, $message, $action, $beforeState, $afterState);
        $this->logFile = $logFile ?? CONFIG['log']['path'] . CONFIG['log']['nome']['file'] . CONFIG['log']['extension'];
    }

    /**
     * Restituisce il nome del file di log.
     *
     * @return string
     */
    public function getLogFile()
    {
        return $this->logFile;
    }

    /**
     * Imposta il nome del file di log.
     *
     * @param string $logFile Nome del file di log.
     */
    public function setLogFile($logFile)
    {
        $this->logFile = $logFile;
    }

    /**
     * Scrive il log nel file.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    public function writeToFile()
    {
        $logEntry = sprintf(
            "[%s] Action: %s, Message: %s, Before State: %s, After State: %s\n",
            $this->timestamp,
            $this->action,
            $this->message,
            json_encode($this->beforeState),
            json_encode($this->afterState)
        );

        return file_put_contents($this->logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
    }
}

/**
 * Class ErrorLog
 *
 * Questa classe estende FileLog e consente di scrivere i log degli errori su un file specifico.
 */
class ErrorLog extends FileLog
{
    /**
     * @var string Tipo di errore generato.
     */
    protected $customException;

    /**
     * ErrorLog constructor.
     *
     * @param string $timestamp Timestamp del log.
     * @param string $message Messaggio descrittivo del log.
     * @param string $action Azione che ha generato il log.
     * @param mixed $beforeState Stato precedente all'azione.
     * @param mixed $afterState Stato successivo all'azione.
     * @param string $customException Tipo di errore generato.
     * @param string|null $logFile Nome del file di log. Default 'error_logs.lm'.
     */
    public function __construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $logFile = 'error_logs.lm')
    {
        parent::__construct($timestamp, $message, $action, $beforeState, $afterState, $logFile);
        $this->customException = $customException;
    }

    /**
     * Restituisce il tipo di errore generato.
     *
     * @return string
     */
    public function getCustomException()
    {
        return $this->customException;
    }

    /**
     * Imposta il tipo di errore generato.
     *
     * @param string $customException Tipo di errore generato.
     */
    public function setCustomException($customException)
    {
        $this->customException = $customException;
    }

    /**
     * Scrive il log degli errori nel file.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    public function writeToFile()
    {
        $logEntry = sprintf(
            "[%s] Action: %s, Message: %s, Before State: %s, After State: %s, Exception: %s\n",
            $this->timestamp,
            $this->action,
            $this->message,
            json_encode($this->beforeState),
            json_encode($this->afterState),
            $this->customException
        );

        return file_put_contents($this->logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
    }
}

/**
 * Class DatabaseLog
 *
 * Questa classe estende ErrorLog e gestisce i log degli errori di connessione al database.
 */
class DatabaseLog extends ErrorLog
{
    /**
     * @var string Informazione sulla connessione al database.
     */
    protected $databaseConnectionInfo;

    /**
     * DatabaseLog constructor.
     *
     * @param string $timestamp Timestamp del log.
     * @param string $message Messaggio descrittivo del log.
     * @param string $action Azione che ha generato il log.
     * @param mixed $beforeState Stato precedente all'azione.
     * @param mixed $afterState Stato successivo all'azione.
     * @param string $customException Tipo di errore generato.
     * @param string|null $logFile Nome del file di log. Default 'error_db.lm'.
     * @param string $databaseConnectionInfo Informazione sulla connessione al database.
     */
    public function __construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo, $logFile = 'error_db.lm')
    {
        parent::__construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $logFile);
        $this->databaseConnectionInfo = $databaseConnectionInfo;
    }

    /**
     * Restituisce l'informazione sulla connessione al database.
     *
     * @return string
     */
    public function getDatabaseConnectionInfo()
    {
        return $this->databaseConnectionInfo;
    }

    /**
     * Imposta l'informazione sulla connessione al database.
     *
     * @param string $databaseConnectionInfo Informazione sulla connessione al database.
     */
    public function setDatabaseConnectionInfo($databaseConnectionInfo)
    {
        $this->databaseConnectionInfo = $databaseConnectionInfo;
    }

    /**
     * Scrive il log degli errori nel file e gestisce gli errori di versione del database.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    public function writeToFile()
    {
        $logEntry = sprintf(
            "[%s] Action: %s, Message: %s, Before State: %s, After State: %s, Exception: %s, Database Info: %s\n",
            $this->timestamp,
            $this->action,
            $this->message,
            json_encode($this->beforeState),
            json_encode($this->afterState),
            $this->customException,
            $this->databaseConnectionInfo
        );

        // Scrivi il log nel file specificato
        $logWritten = file_put_contents($this->logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;

        // Verifica la versione del database
        if ($this->checkDatabaseVersion()) {
            // Reindirizza a una pagina di manutenzione
            $this->redirectMaintenancePage();
        }

        return $logWritten;
    }

    /**
     * Verifica se la versione del database corrisponde con quella salvata nel sistema.
     *
     * @return bool True se la versione corrisponde, False altrimenti.
     */
    protected function checkDatabaseVersion()
    {
        global $CONFIG; // Assumi che $CONFIG sia definito o includi il file di configurazione necessario

        // Simulazione di controllo della versione del database
        $databaseVersion = '1.0'; // Da sostituire con il metodo effettivo per ottenere la versione del database

        return $databaseVersion !== $CONFIG['db']['vers'];
    }

    /**
     * Reindirizza l'utente a una pagina di manutenzione in caso di versione del database non corrispondente.
     */
    protected function redirectMaintenancePage()
    {
        header("Location: manutenzione.php");
        exit;
    }
}

/**
 * Class IpLog
 *
 * Questa classe estende DatabaseLog e gestisce i log degli errori basati su indirizzi IP bloccati.
 */
class IpLog extends DatabaseLog
{
    /**
     * @var string Indirizzo IP da controllare.
     */
    protected $ipAddress;

    /**
     * IpLog constructor.
     *
     * @param string $timestamp Timestamp del log.
     * @param string $message Messaggio descrittivo del log.
     * @param string $action Azione che ha generato il log.
     * @param mixed $beforeState Stato precedente all'azione.
     * @param mixed $afterState Stato successivo all'azione.
     * @param string $customException Tipo di errore generato.
     * @param string $databaseConnectionInfo Informazione sulla connessione al database.
     * @param string $ipAddress Indirizzo IP da controllare.
     */
    public function __construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress)
    {
        parent::__construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo);
        $this->ipAddress = $ipAddress;
    }

    /**
     * Restituisce l'indirizzo IP da controllare.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Imposta l'indirizzo IP da controllare.
     *
     * @param string $ipAddress Indirizzo IP da controllare.
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Scrive il log degli errori nel database e su file e gestisce gli IP bloccati.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    public function writeLog()
    {
        // Controlla se l'IP è bloccato
        if ($this->isIpBlocked()) {
            // Genera un errore e salva il log sia nel database che su file
            $this->logIpBlockedError();
            return true; // Ritorna true perché il log è stato scritto con successo
        }

        // Scrivi il log nel database e su file
        $dbLogWritten = parent::writeToFile();

        // Scrivi il log su file error_ip.lm
        $fileLogWritten = $this->writeToFileToFile();

        // Ritorna true se entrambi i log sono stati scritti con successo
        return $dbLogWritten && $fileLogWritten;
    }

    /**
     * Controlla se l'indirizzo IP è presente nella tabella IPBloccati.
     *
     * @return bool True se l'IP è bloccato, False altrimenti.
     */
    protected function isIpBlocked()
    {
        // Simulazione del controllo se l'IP è bloccato
        $blockedIps = ['192.168.1.1', '10.0.0.1']; // Esempio di indirizzi IP bloccati

        return in_array($this->ipAddress, $blockedIps);
    }

    /**
     * Genera un errore e salva il log sia nel database che su file se l'IP è bloccato.
     */
    protected function logIpBlockedError()
    {
        $errorMessage = "Accesso bloccato per l'indirizzo IP {$this->ipAddress}.";

        // Aggiungi informazioni aggiuntive al messaggio di errore
        $errorMessage .= " Azione: {$this->action}, Messaggio: {$this->message}, Database Info: {$this->databaseConnectionInfo}";

        // Scrivi il log nel database e su file error_ip.lm
        parent::writeToFile();
        $this->writeToFileToFile();

        // Esempio: trigger_error($errorMessage, E_USER_WARNING);
        echo "Errore generato: $errorMessage\n";
    }

    /**
     * Scrive il log su file error_ip.lm.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    protected function writeToFileToFile()
    {
        $logEntry = sprintf(
            "[%s] Action: %s, Message: %s, Before State: %s, After State: %s, Exception: %s, Database Info: %s, IP Address: %s\n",
            $this->timestamp,
            $this->action,
            $this->message,
            json_encode($this->beforeState),
            json_encode($this->afterState),
            $this->customException,
            $this->databaseConnectionInfo,
            $this->ipAddress
        );

        $logFile = 'error_ip.lm';
        return file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
    }
}

/**
 * Class ApiLog
 *
 * Questa classe estende IpLog e gestisce il logging delle chiamate API e degli eventuali errori.
 */
class ApiLog extends IpLog
{
    /**
     * @var string Endpoint API chiamato.
     */
    protected $apiEndpoint;

    /**
     * ApiLog constructor.
     *
     * @param string $timestamp Timestamp del log.
     * @param string $message Messaggio descrittivo del log.
     * @param string $action Azione che ha generato il log.
     * @param mixed $beforeState Stato precedente all'azione.
     * @param mixed $afterState Stato successivo all'azione.
     * @param string $customException Tipo di errore generato.
     * @param string $databaseConnectionInfo Informazione sulla connessione al database.
     * @param string $ipAddress Indirizzo IP da controllare.
     * @param string $apiEndpoint Endpoint API chiamato.
     */
    public function __construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress, $apiEndpoint)
    {
        parent::__construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress);
        $this->apiEndpoint = $apiEndpoint;
    }

    /**
     * Restituisce l'endpoint API chiamato.
     *
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->apiEndpoint;
    }

    /**
     * Imposta l'endpoint API chiamato.
     *
     * @param string $apiEndpoint Endpoint API chiamato.
     */
    public function setApiEndpoint($apiEndpoint)
    {
        $this->apiEndpoint = $apiEndpoint;
    }

    /**
     * Scrive il log delle chiamate API ricevute ed effettuate e gestisce gli errori.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    public function writeLog()
    {
        // Scrivi il log delle chiamate API e gestisci gli errori
        $apiLogWritten = $this->logApiCall();

        // Scrivi il log su file api_logs.lm
        $fileLogWritten = $this->writeToFileApiLogs();

        // Ritorna true se entrambi i log sono stati scritti con successo
        return $apiLogWritten && $fileLogWritten;
    }

    /**
     * Registra il log della chiamata API ricevuta o effettuata e gestisce gli errori.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    protected function logApiCall()
    {
        // Simulazione di registrazione della chiamata API
        $apiLogEntry = sprintf(
            "[%s] API Call: %s, Action: %s, Message: %s, Before State: %s, After State: %s, Exception: %s, Database Info: %s, IP Address: %s\n",
            $this->timestamp,
            $this->apiEndpoint,
            $this->action,
            $this->message,
            json_encode($this->beforeState),
            json_encode($this->afterState),
            $this->customException,
            $this->databaseConnectionInfo,
            $this->ipAddress
        );

        // Simulazione di gestione degli errori API
        $errorOccurred = rand(0, 1); // Simulazione di errore casuale

        if ($errorOccurred) {
            // Se si verifica un errore, aggiungi informazioni aggiuntive al log
            $apiLogEntry .= "Error occurred during API call.";
        }

        // Scrivi il log nel database e su file error_ip.lm
        parent::writeToFile();

        // Esempio: log_to_api_monitoring_service($apiLogEntry);
        echo "API Log Entry: $apiLogEntry\n";

        return true; // Simulazione di successo della scrittura del log
    }

    /**
     * Scrive il log su file api_logs.lm.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    protected function writeToFileApiLogs()
    {
        $logEntry = sprintf(
            "[%s] API Call: %s, Action: %s, Message: %s, Before State: %s, After State: %s, Exception: %s, Database Info: %s, IP Address: %s\n",
            $this->timestamp,
            $this->apiEndpoint,
            $this->action,
            $this->message,
            json_encode($this->beforeState),
            json_encode($this->afterState),
            $this->customException,
            $this->databaseConnectionInfo,
            $this->ipAddress
        );

        $logFile = 'api_logs.lm';
        return file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
    }
}

/**
 * Class PerformanceLog
 *
 * Questa classe estende IpLog e gestisce il logging delle performance del server.
 */
class PerformanceLog extends IpLog
{
    /**
     * @var float Tempo di esecuzione della richiesta.
     */
    protected $executionTime;

    /**
     * PerformanceLog constructor.
     *
     * @param string $timestamp Timestamp del log.
     * @param string $message Messaggio descrittivo del log.
     * @param string $action Azione che ha generato il log.
     * @param mixed $beforeState Stato precedente all'azione.
     * @param mixed $afterState Stato successivo all'azione.
     * @param string $customException Tipo di errore generato.
     * @param string $databaseConnectionInfo Informazione sulla connessione al database.
     * @param string $ipAddress Indirizzo IP da controllare.
     * @param float $executionTime Tempo di esecuzione della richiesta.
     */
    public function __construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress, $executionTime)
    {
        parent::__construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress);
        $this->executionTime = $executionTime;
    }

    /**
     * Restituisce il tempo di esecuzione della richiesta.
     *
     * @return float
     */
    public function getExecutionTime()
    {
        return $this->executionTime;
    }

    /**
     * Imposta il tempo di esecuzione della richiesta.
     *
     * @param float $executionTime Tempo di esecuzione della richiesta.
     */
    public function setExecutionTime($executionTime)
    {
        $this->executionTime = $executionTime;
    }

    /**
     * Scrive il log delle performance del server nel file performance/logs.lm.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    public function writePerformanceLog()
    {
        $logEntry = sprintf(
            "[%s] Action: %s, Message: %s, Before State: %s, After State: %s, Exception: %s, Database Info: %s, IP Address: %s, Execution Time: %.2f seconds\n",
            $this->timestamp,
            $this->action,
            $this->message,
            json_encode($this->beforeState),
            json_encode($this->afterState),
            $this->customException,
            $this->databaseConnectionInfo,
            $this->ipAddress,
            $this->executionTime
        );

        $logFile = 'performance/logs.lm';
        return file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
    }
}

/**
 * Class UserLog
 *
 * Questa classe estende IpLog e gestisce il logging delle azioni degli utenti.
 */
class UserLog extends IpLog
{
    /**
     * @var int ID dell'utente.
     */
    protected $userId;

    /**
     * UserLog constructor.
     *
     * @param string $timestamp Timestamp del log.
     * @param string $message Messaggio descrittivo del log.
     * @param string $action Azione che ha generato il log.
     * @param mixed $beforeState Stato precedente all'azione.
     * @param mixed $afterState Stato successivo all'azione.
     * @param string $customException Tipo di errore generato.
     * @param string $databaseConnectionInfo Informazione sulla connessione al database.
     * @param string $ipAddress Indirizzo IP da controllare.
     * @param int $userId ID dell'utente.
     */
    public function __construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress, $userId)
    {
        parent::__construct($timestamp, $message, $action, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress);
        $this->userId = $userId;
    }

    /**
     * Restituisce l'ID dell'utente.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Imposta l'ID dell'utente.
     *
     * @param int $userId ID dell'utente.
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Scrive il log delle azioni degli utenti, gestendo la registrazione degli errori
     * quando l'utenza non è attiva o il token non è confermato.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    public function writeUserLog()
    {
        // Verifica se l'utente è attivo
        if (!$this->isActive) {
            $this->logUserError("Utente non attivo");
        }

        // Verifica se il token è stato confermato
        if (!$this->isToken) {
            $this->logUserError("Token non confermato");
        }

        // Scrive il log nel database e su file
        $dbLogWritten = parent::writeLog();

        // Scrive il log su file error_user.lm
        $fileLogWritten = $this->writeToFileUserLogs();

        // Ritorna true se entrambi i log sono stati scritti con successo
        return $dbLogWritten && $fileLogWritten;
    }

    /**
     * Registra un errore per l'utente e salva il log su file error_user.lm.
     *
     * @param string $errorMessage Messaggio di errore da registrare.
     */
    protected function logUserError($errorMessage)
    {
        $errorMessage = "Errore per l'utente ID {$this->userId}: $errorMessage";

        // Aggiungi informazioni aggiuntive al messaggio di errore
        $errorMessage .= " Azione: {$this->action}, Messaggio: {$this->message}, Database Info: {$this->databaseConnectionInfo}";

        // Scrivi il log su file error_user.lm
        $this->writeToFileUserLogs();

        // Esempio: trigger_error($errorMessage, E_USER_WARNING);
        echo "Errore utente generato: $errorMessage\n";
    }

    /**
     * Scrive il log su file error_user.lm.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    protected function writeToFileUserLogs()
    {
        $logEntry = sprintf(
            "[%s] User ID: %d, Action: %s, Message: %s, Before State: %s, After State: %s, Exception: %s, Database Info: %s, IP Address: %s\n",
            $this->timestamp,
            $this->userId,
            $this->action,
            $this->message,
            json_encode($this->beforeState),
            json_encode($this->afterState),
            $this->customException,
            $this->databaseConnectionInfo,
            $this->ipAddress
        );

        $logFile = 'error_user.lm';
        return file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
    }
}

?>
