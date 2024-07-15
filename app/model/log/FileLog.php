<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/log/Log.php');

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
		 * @param string $message Messaggio descrittivo del log.
		 * @param int $action Azione che ha generato il log.
		 * @param string $data Dati recuperati dalla interrogazione al database.
		 * @param mixed $beforeState Stato precedente all'azione.
		 * @param mixed $afterState Stato successivo all'azione.
		 * @param string|null $logFile Nome del file di log. Compreso di path. Default 'logs.gc' se null.
		 */
		public function __construct($message, $action, $data, $beforeState, $afterState, $logFile = null)
		{
			parent::__construct($message, $action, $data,  $beforeState, $afterState);
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

			//return file_put_contents($this->logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
			return FileManager::writeToFile($this->logFile, $logEntry, true);
		}
	}
