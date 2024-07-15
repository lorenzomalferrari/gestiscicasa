<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/log/IpLog.php');

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
		 * @param int $action Azione che ha generato il log.
		 * @param string $data Dati recuperati dalla interrogazione al database.
		 * @param mixed $beforeState Stato precedente all'azione.
		 * @param mixed $afterState Stato successivo all'azione.
		 * @param string $customException Tipo di errore generato.
		 * @param string $databaseConnectionInfo Informazione sulla connessione al database.
		 * @param string $ipAddress Indirizzo IP da controllare.
		 * @param string $apiEndpoint Endpoint API chiamato.
		 */
		public function __construct($timestamp, $message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress, $apiEndpoint)
		{
			parent::__construct($timestamp, $message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress);
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

			// Scrivi il log su file api_logs.gc
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

			// Scrivi il log nel database e su file error_ip.gc
			parent::writeToFile();

			// Esempio: log_to_api_monitoring_service($apiLogEntry);
			echo "API Log Entry: $apiLogEntry\n";

			return true; // Simulazione di successo della scrittura del log
		}

		/**
		 * Scrive il log su file api_logs.gc.
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

			$logFile = 'api_logs.gc';
			return file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
		}
	}
