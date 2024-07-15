<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/log/FileLog.php');

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
		 * @param string $message Messaggio descrittivo del log.
		 * @param int $action Azione che ha generato il log.
		 * @param string $data Dati recuperati dalla interrogazione al database.
		 * @param mixed $beforeState Stato precedente all'azione.
		 * @param mixed $afterState Stato successivo all'azione.
		 * @param string $customException Tipo di errore generato.
		 * @param string|null $logFile Nome del file di log. Default 'error_logs.gc'.
		 */
		public function __construct($message, $action, $data, $beforeState, $afterState, $logFile = null, $customException = null)
		{
			parent::__construct($message, $action,  $data, $beforeState, $afterState, $logFile ?? CONFIG['log']['path'] . CONFIG['log']['nome']['error'] . CONFIG['log']['extension'] );
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

			//return file_put_contents($this->logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
			return FileManager::writeToFile($this->logFile, $logEntry, true);
		}
	}
