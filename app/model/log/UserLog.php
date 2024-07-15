<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/log/IpLog.php');

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
		 * @param int $action Azione che ha generato il log.
		 * @param string $data Dati recuperati dalla interrogazione al database.
		 * @param mixed $beforeState Stato precedente all'azione.
		 * @param mixed $afterState Stato successivo all'azione.
		 * @param string $customException Tipo di errore generato.
		 * @param string $databaseConnectionInfo Informazione sulla connessione al database.
		 * @param string $ipAddress Indirizzo IP da controllare.
		 * @param int $userId ID dell'utente.
		 */
		public function __construct($timestamp, $message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress, $userId)
		{
			parent::__construct($timestamp, $message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress);
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
		//if (!$this->isActive) {
		//    $this->logUserError("Utente non attivo");
		//}

		// Verifica se il token è stato confermato
		//if (!$this->isToken) {
		//    $this->logUserError("Token non confermato");
		//}

		// Scrive il log nel database e su file
		$dbLogWritten = parent::writeLog();

		// Scrive il log su file error_user.gc
		$fileLogWritten = $this->writeToFileUserLogs();

		// Ritorna true se entrambi i log sono stati scritti con successo
		return $dbLogWritten && $fileLogWritten;
	}

	/**
	 * Registra un errore per l'utente e salva il log su file error_user.gc.
	 *
	 * @param string $errorMessage Messaggio di errore da registrare.
	 */
	protected function logUserError($errorMessage)
	{
		$errorMessage = "Errore per l'utente ID {$this->userId}: $errorMessage";

		// Aggiungi informazioni aggiuntive al messaggio di errore
		$errorMessage .= " Azione: {$this->action}, Messaggio: {$this->message}, Database Info: {$this->databaseConnectionInfo}";

		// Scrivi il log su file error_user.gc
		$this->writeToFileUserLogs();

		// Esempio: trigger_error($errorMessage, E_USER_WARNING);
		echo "Errore utente generato: $errorMessage\n";
	}

	/**
	 * Scrive il log su file error_user.gc.
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

		$logFile = 'error_user.gc';
		return file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
	}
}

?>
