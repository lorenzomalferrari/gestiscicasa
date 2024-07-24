<?php

class UpdateDB {
	private $pdo;
	private $sqlDirectory;
	private $updateDirectory;

	public function __construct($dsn, $dbUsername, $dbPassword, $sqlDirectory, $updateDirectory) {
		// Connessione al database
		$this->pdo = new PDO($dsn, $dbUsername, $dbPassword);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$this->sqlDirectory = $sqlDirectory;
		$this->updateDirectory = $updateDirectory;
	}

	public function handle($params) {
		try {
			// Esegui i file SQL dalla cartella principale
			$this->executeSqlFiles($this->sqlDirectory);

			// Esegui i file di aggiornamento ordinati
			$this->executeUpdateFiles($this->updateDirectory);

			return ['status' => 'success', 'message' => 'Aggiornamenti eseguiti con successo.'];

		} catch (Exception $e) {
			return ['status' => 'error', 'message' => $e->getMessage()];
		}
	}

	private function executeSqlFiles($directory) {
		$files = glob($directory . '/*.sql');
		foreach ($files as $file) {
			$this->executeSqlFile($file);
		}
	}

	private function executeSqlFile($file) {
		$sql = file_get_contents($file);
		$this->pdo->exec($sql);
	}

	private function executeUpdateFiles($directory) {
		$files = glob($directory . '/*.sql');
		usort($files, function($a, $b) {
			return $this->compareUpdateFiles($a, $b);
		});

		foreach ($files as $file) {
			$this->executeSqlFile($file);
		}
	}

	private function compareUpdateFiles($a, $b) {
		$aVersion = $this->getVersionFromFilename($a);
		$bVersion = $this->getVersionFromFilename($b);

		return version_compare($aVersion, $bVersion);
	}

	private function getVersionFromFilename($filename) {
		// Estrae la versione dalla parte del filename
		$basename = basename($filename);
		$versionPart = str_replace('.sql', '', $basename);
		return $versionPart;
	}
}
?>
