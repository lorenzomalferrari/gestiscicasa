<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/log/ErrorLog.php');

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
		 * @param int $action Azione che ha generato il log.
		 * @param string $data Dati recuperati dalla interrogazione al database.
		 * @param mixed $beforeState Stato precedente all'azione.
		 * @param mixed $afterState Stato successivo all'azione.
		 * @param string $customException Tipo di errore generato.
		 * @param string|null $logFile Nome del file di log. Default 'error_db.gc'.
		 * @param string $databaseConnectionInfo Informazione sulla connessione al database.
		 */
		public function __construct($message, $action, $data, $beforeState, $afterState, $logFile = null, $customException = null, $databaseConnectionInfo = null)
		{
			parent::__construct($message, $action, $data, $beforeState, $afterState, $customException, $logFile ?? PathAndFilesLog::PATH_DATABASE_LOG );
			$this->databaseConnectionInfo = $databaseConnectionInfo ?? DB->toString();
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
			//$logWritten = file_put_contents($this->logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
			return "";//FileManager::writeToFile($this->logFile, $logEntry, true);
		}

	}
