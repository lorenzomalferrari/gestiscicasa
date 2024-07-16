<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/log/DatabaseLog.php');

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
		 * @param int $action Azione che ha generato il log.
		 * @param string $data Dati recuperati dalla interrogazione al database.
		 * @param mixed $beforeState Stato precedente all'azione.
		 * @param mixed $afterState Stato successivo all'azione.
		 * @param string $customException Tipo di errore generato.
		 * @param string $databaseConnectionInfo Informazione sulla connessione al database.
		 * @param string $ipAddress Indirizzo IP da controllare.
		 */
		public function __construct($message, $action, $data, $beforeState, $afterState, $ipAddress, $customException = null, $databaseConnectionInfo = null, $logFile = null)
		{
			parent::__construct($message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $logFile ?? CONFIG['log']['path'] . CONFIG['log']['nome']['database'] . CONFIG['log']['extension']);
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

			// Scrivi il log su file error_ip.gc
			$fileLogWritten = $this->writeToFile();

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

			// Scrivi il log nel database e su file error_ip.gc
			//parent::writeToFile();
			$this->writeToFile();

			// Esempio: trigger_error($errorMessage, E_USER_WARNING);
			echo "Errore generato: $errorMessage\n";
		}

		/**
		 * Scrive il log su file error_ip.gc.
		 *
		 * @return bool True se il log è stato scritto con successo, False altrimenti.
		 */
		public function writeToFile()
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

			//$logFile = 'error_ip.gc';
			//return file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false;
			return FileManager::writeToFile($this->logFile, $logEntry, true);
		}
	}
