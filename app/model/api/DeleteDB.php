<?php declare(strict_types=1);

	/**
	 * Classe DeleteDB
	 *
	 * Questa classe gestisce il reset dell'intero DATABASE
	 * Effettua un DROP del DATABASE e successivamente UpdateDB.
	 */
	class DeleteDB
	{
		public function __construct()
		{
			DB->checkDatabaseVersion();
		}

		public function handle()
		{
			try {
				$sql = "DROP DATABASE " . CONFIG['db'][getEnvironmentKey()]['database'];
				DB->exec($sql);
				$sql = "CREATE DATABASE nome_database " . CONFIG['db'][getEnvironmentKey()]['database'];
				DB->exec($sql);
			} catch (Exception $e) {
				return ['status' => 'error', 'message' => $e->getMessage()];
			}
		}
	}
?>
