<?php declare(strict_types=1);

	class CreateDB
	{
		private $sqlDirectory;

		public function __construct()
		{
			$this->sqlDirectory = ROOT . CONFIG['db']['update']['create'];
		}

		public function handle($params)
		{
			try {
				// Esegui i file SQL dalla cartella principale
				$this->executeSqlFiles($this->sqlDirectory);
				return ['status' => 'success', 'message' => 'Create prime tabelle.'];
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
	}