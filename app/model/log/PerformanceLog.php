<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/log/IpLog.php');

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
		 * @param int $action Azione che ha generato il log.
		 * @param string $data Dati recuperati dalla interrogazione al database.
		 * @param mixed $beforeState Stato precedente all'azione.
		 * @param mixed $afterState Stato successivo all'azione.
		 * @param string $customException Tipo di errore generato.
		 * @param string $databaseConnectionInfo Informazione sulla connessione al database.
		 * @param string $ipAddress Indirizzo IP da controllare.
		 * @param float $executionTime Tempo di esecuzione della richiesta.
		 */
		public function __construct($timestamp, $message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress, $executionTime)
		{
			parent::__construct($timestamp, $message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress);
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
		 * Scrive il log delle performance del server nel file performance/logs.gc.
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

			$logFile = 'performance/logs.gc';
			return file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
		}
	}
