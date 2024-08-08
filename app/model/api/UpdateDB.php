<?php declare(strict_types=1);

	/**
	 * Classe UpdateDB
	 *
	 * Questa classe gestisce l'esecuzione di aggiornamenti del database.
	 * Esegue i file SQL dalla cartella principale e applica gli aggiornamenti ordinati dalla cartella di aggiornamento.
	 */
	class UpdateDB
	{
		private $sqlDirectory;
		private $updateDirectory;

		/**
		 * Costruttore della classe UpdateDB.
		 *
		 * Inizializza i percorsi delle directory dei file SQL e degli aggiornamenti.
		 */
		public function __construct()
		{
			$this->sqlDirectory = ROOT . CONFIG['db']['update']['create'];
			$this->updateDirectory = ROOT . CONFIG['db']['update']['step'];

			DB->checkDatabaseVersion();
		}

		/**
		 * Gestisce il processo di aggiornamento del database.
		 *
		 * Esegue i file SQL dalla cartella principale e poi gli aggiornamenti ordinati.
		 * Gestisce le eccezioni e restituisce un array con lo stato e un messaggio.
		 *
		 * @param array $params Parametri per la gestione dell'aggiornamento.
		 * @return array Restituisce un array associativo con 'status' e 'message'.
		 */
		public function handle($params)
		{
			try {
				$vers = DB->getDatabaseVersion();
				if(empty($vers)){
					// Esegui i file SQL dalla cartella principale
					$this->executeSqlFiles($this->sqlDirectory);
				}
				// Esegui i file di aggiornamento ordinati
				$this->executeUpdateFiles($this->updateDirectory, $vers);
				return ['status' => 'success', 'message' => 'Aggiornamenti eseguiti con successo.'];
			} catch (Exception $e) {
				return ['status' => 'error', 'message' => $e->getMessage()];
			}
		}

		/**
		 * Esegue tutti i file SQL in una directory.
		 *
		 * @param string $directory Il percorso della directory contenente i file SQL.
		 * @return void
		 */
		private function executeSqlFiles($directory)
		{
			$files = glob($directory . '/*.sql');
			foreach ($files as $file) {
				$this->executeSqlFile($file);
			}
		}

		/**
		 * Esegue un singolo file SQL.
		 *
		 * @param string $file Il percorso del file SQL da eseguire.
		 * @return void
		 */
		private function executeSqlFile($file)
		{
			$sql = file_get_contents($file);
			DB->exec($sql);
		}

		/**
		 * Esegue tutti i file di aggiornamento ordinati nella directory.
		 *
		 * Dopo aver eseguito tutti i file, inserisce la versione dell'ultimo file nel database.
		 *
		 * @param string $directory Il percorso della directory contenente i file di aggiornamento.
		 * @param mixed $versione Il numero della versione (+1) dalla quale bisogna partire con gli update
		 * @return void
		 */
		private function executeUpdateFiles($directory, $versione = null)
		{
			// Get all SQL files in the directory
			$files = glob($directory . '/*.sql');

			// Sort the files using the compareUpdateFiles function
			usort($files, function ($a, $b) {
				return $this->compareUpdateFiles($a, $b);
			});

			// If a version is provided, filter the files to start from the next version
			if (!empty($versione)) {
				$versioneFormatted = str_replace('.', '_', $versione) . '_';
				$files = array_filter($files, function ($file) use ($versioneFormatted) {
					$basename = basename($file, '.sql');
					return strcmp($basename, $versioneFormatted) > 0;
				});
			}

			// Execute each SQL file
			foreach ($files as $index => $file) {
				print_r($file,true);
				$this->executeSqlFile($file);
				if ($index === count($files) - 1) {
					// Get the version from the filename and insert it into the database
					$version = $this->getVersionFromFilename($file);
					DB->insertDatabaseVersion($version);
				}
			}
		}

		/**
		 * Confronta due file di aggiornamento basandosi sulla versione nel loro nome.
		 *
		 * @param string $a Il primo file da confrontare.
		 * @param string $b Il secondo file da confrontare.
		 * @return int Restituisce un intero che indica l'ordinamento dei file.
		 */
		private function compareUpdateFiles($a, $b)
		{
			$aVersion = $this->getVersionFromFilename($a);
			$bVersion = $this->getVersionFromFilename($b);
			return version_compare($aVersion, $bVersion, '>');
		}

		/**
		 * Estrae e formatta la versione da un nome di file.
		 *
		 * @param string $filename Il nome del file da cui estrarre la versione.
		 * @return string La versione formattata come stringa.
		 */
		private function getVersionFromFilename($filename)
		{
			// Estrae il basename del file
			$basename = basename($filename, '.sql');
			// Rimuove "update_" dal basename
			$versionPart = substr($basename, strlen('update_'));
			// Converti gli underscore in punti nella versione
			$versionPart = str_replace('_', '.', $versionPart);
			return $versionPart;
		}
	}
?>
