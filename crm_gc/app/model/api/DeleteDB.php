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
			//DB->checkDatabaseVersion();
		}

		public function handle()
		{
			try {
				$database = CONFIG['db']['server'][getEnvironmentKey()]['database'];
				$sql = <<<sql
					SET FOREIGN_KEY_CHECKS = 0;

					-- Genera un comando SQL per eliminare tutte le tabelle
					SET @tables = NULL;
					SELECT GROUP_CONCAT(table_name) INTO @tables
					FROM information_schema.tables
					WHERE table_schema = '$database';

					-- Se ci sono tabelle, esegui il comando per eliminarle
					SET @tables = CONCAT('DROP TABLE IF EXISTS ', @tables);
					PREPARE stmt FROM @tables;
					EXECUTE stmt;
					DEALLOCATE PREPARE stmt;

					SET FOREIGN_KEY_CHECKS = 1;
sql;
				DB->exec($sql);
				return ['status' => 'success', 'message' => 'Cancellazione avvenuta con successo.'];
			} catch (Exception $e) {
				return ['status' => 'error', 'message' => $e->getMessage()];
			}
		}
	}
?>
