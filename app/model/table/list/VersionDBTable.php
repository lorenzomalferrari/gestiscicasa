<?php declare(strict_types=1);

	/**
	 * Class representing the 'VersionDB' table.
	 */
	class VersionDBTable
	{
		const TABLE_NAME = 'VersionDB';

		const ID = 'id';
		const VERSIONE = 'versione';
		const NOME_VERS_ESTESA = 'nome_vers_estesa';
		const NOTE = 'note';
		const DATA_CREAZIONE = 'data_creazione';
		const DATA_AGGIORNAMENTO = 'data_aggiornamento';

		/**
		 * Get the list of columns for the VersionDB table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::VERSIONE,
				self::NOME_VERS_ESTESA,
				self::NOTE,
				self::DATA_CREAZIONE,
				self::DATA_AGGIORNAMENTO
			];
		}
	}