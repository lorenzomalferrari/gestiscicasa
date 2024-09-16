<?php declare(strict_types=1);

	/**
	 * Class UpdateDB
	 *
	 * This class handles the execution of database updates.
	 * Executes SQL files from the main folder and applies updates ordered from the update folder.
	 */
	class UpdateDB
	{
		private string $updateDirectory;
		private string $targetVersion;

		/**
		 * Constructor for the UpdateDB class.
		 *
		 * Initializes the paths for SQL files and updates.
		 */
		public function __construct()
		{
			$this->updateDirectory = ROOT . CONFIG['db']['update']['step'];
			$this->targetVersion = CONFIG['db']['server'][getEnvironmentKey()]['version'];
		}

		/**
		 * Handles the database update process.
		 *
		 * Executes SQL files from the main folder and then ordered updates.
		 * Handles exceptions and returns an array with status and message.
		 *
		 * @param array $params Parameters for handling the update.
		 * @return array Returns an associative array with 'status' and 'message'.
		 */
		public function handle(array $params): array
		{
			try {
				$currentVersion = DB->getDatabaseVersion();
				// Verifica se la versione del database è già quella del target
				if (version_compare($currentVersion, $this->targetVersion, '>=')) {
					return ['status' => 'success', 'message' => 'Non ci sono aggiornamenti da fare rispetto al target: ' . $this->targetVersion];
				}

				// Esegui i file di aggiornamento ordinati
				$this->executeUpdateFiles($this->updateDirectory, $currentVersion);
				$newVersion = DB->getDatabaseVersion();
				return ['status' => 'success', 'message' => 'Aggiornamenti eseguiti con successo. Versione DB attuale: ' . $newVersion];
			} catch (Exception $e) {
				return ['status' => 'error', 'message' => $e->getMessage()];
			}
		}


		/**
		 * Executes a single SQL file.
		 *
		 * @param string $file The path of the SQL file to execute.
		 * @return void
		 */
		private function executeSqlFile(string $file): void
		{
			$sql = file_get_contents($file);
			//print_r($sql);
			DB->exec($sql);
		}

		/**
		 * Executes all update files ordered in the directory.
		 *
		 * After executing all files, it inserts the version of the last file into the database.
		 *
		 * @param string $directory The path of the directory containing update files.
		 * @param string $currentVersion The current version of the database.
		 * @return void
		 */
		private function executeUpdateFiles(string $directory, string $currentVersion): void
		{
			// Get all SQL files in the directory
			$files = glob($directory . '/*.sql');
			//print_r("files: " . $files);

			// Sort the files using the compareUpdateFiles function
			usort($files, function ($a, $b) {
				return $this->compareUpdateFiles($a, $b);
			});

			// Formatta la versione corrente senza underscore finale
			$currentVersionFormatted = str_replace('.', '_', $currentVersion);
		//print_r("currentVersionFormatted: " . $currentVersionFormatted);
			// Estrai la parte numerica della versione corrente
			$currentNumericVersion = self::extractNumericVersion($currentVersionFormatted);
		//print_r("currentNumericVersion: " . $currentNumericVersion);

			// Filtra i file per mantenere solo quelli con versioni successive
			$files = array_filter($files, function ($file) use ($currentNumericVersion) {
				$basename = basename($file, '.sql');
				// Rimuovi "update_" dal basename
				$versionPart = substr($basename, strlen('update_'));
				// Estrai la parte numerica della versione dal basename
				$fileNumericVersion = self::extractNumericVersion($versionPart);
				return $fileNumericVersion > $currentNumericVersion;
			});
			//var_dump($files);

			// Execute each SQL file until the target version is reached
			foreach ($files as $file) {
			//print_r("- " . $file);
				$version = $this->getVersionFromFilename($file);
			//print_r(" - versione del file: " . $version);
			//print_r(" ---- " . version_compare($version, $this->targetVersion, '>'));
				if (version_compare($version, $this->targetVersion, '>')) {
					break;
				}
			//print_r(" ____ ");
				$this->executeSqlFile($file);
				DB->insertDatabaseVersion($version);
			}
		}

		private function extractNumericVersion(string $version): string
		{
			return str_replace(['.', '_'], '', $version);
		}

		/**
		 * Compares two update files based on their version in the filename.
		 *
		 * @param string $a The first file to compare.
		 * @param string $b The second file to compare.
		 * @return int Returns an integer indicating the order of the files.
		 */
		private function compareUpdateFiles(string $a, string $b): int
		{
			$aVersion = $this->getVersionFromFilename($a);
			$bVersion = $this->getVersionFromFilename($b);
			return version_compare($aVersion, $bVersion);
		}

		/**
		 * Extracts and formats the version from a filename.
		 *
		 * @param string $filename The filename to extract the version from.
		 * @return string The formatted version as a string.
		 */
		private function getVersionFromFilename(string $filename): string
		{
			// Extract the basename of the file
			$basename = basename($filename, '.sql');
			// Remove "update_" from the basename
			$versionPart = substr($basename, strlen('update_'));
			// Convert underscores to dots in the version
			$versionPart = str_replace('_', '.', $versionPart);
			return $versionPart;
		}
	}
