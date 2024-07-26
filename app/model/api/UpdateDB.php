<?php

class UpdateDB {
	private $sqlDirectory;
	private $updateDirectory;

	public function __construct() {
		$this->sqlDirectory = "/public/_dati/db/create_db/";
		$this->updateDirectory = "/public/_dati/db/update_step";
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
		DB->exec($sql);
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
