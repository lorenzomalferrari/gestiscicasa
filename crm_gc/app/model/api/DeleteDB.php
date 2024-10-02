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

				// Genera SQL per eliminare tutte le tabelle
				$sql_tables = <<<sql
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

				// Genera SQL per eliminare tutte le procedure
				$sql_procedures = <<<sql
						SET GROUP_CONCAT_MAX_LEN=1000000;
						SET @procedures = NULL;
						SELECT GROUP_CONCAT(CONCAT('DROP PROCEDURE IF EXISTS ', ROUTINE_NAME) SEPARATOR '; ')
						INTO @procedures
						FROM INFORMATION_SCHEMA.ROUTINES
						WHERE ROUTINE_TYPE = 'PROCEDURE'
						AND ROUTINE_SCHEMA = '$database';

						-- Se ci sono procedure, esegui il comando per eliminarle
						IF @procedures IS NOT NULL THEN
							PREPARE stmt FROM @procedures;
							EXECUTE stmt;
							DEALLOCATE PREPARE stmt;
						END IF;
	sql;

				// Genera SQL per eliminare tutte le funzioni
				$sql_functions = <<<sql
						SET GROUP_CONCAT_MAX_LEN=1000000;
						SET @functions = NULL;
						SELECT GROUP_CONCAT(CONCAT('DROP FUNCTION IF EXISTS ', ROUTINE_NAME) SEPARATOR '; ')
						INTO @functions
						FROM INFORMATION_SCHEMA.ROUTINES
						WHERE ROUTINE_TYPE = 'FUNCTION'
						AND ROUTINE_SCHEMA = '$database';

						-- Se ci sono funzioni, esegui il comando per eliminarle
						IF @functions IS NOT NULL THEN
							PREPARE stmt FROM @functions;
							EXECUTE stmt;
							DEALLOCATE PREPARE stmt;
						END IF;
	sql;

				// Esegui tutte le query
				DB->exec($sql_tables);
				DB->exec($sql_procedures);
				DB->exec($sql_functions);

				return ['status' => 'success', 'message' => 'Cancellazione avvenuta con successo.'];
			} catch (Exception $e) {
				return ['status' => 'error', 'message' => $e->getMessage()];
			}
		}
	}
