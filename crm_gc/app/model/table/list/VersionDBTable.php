<?php declare(strict_types=1);

	/**
	 * Class representing the 'VersionDB' table.
	 */
	class VersionDBTable
	{
		const TABLE_NAME = 'VersionDB';

		const ID = 'id';
		const VERSIONE = 'version';
		const NOME_VERS_ESTESA = 'extended_version_name';
		const NOTE = 'notes';
		const DATA_CREAZIONE = 'creation_date';
		const DATA_AGGIORNAMENTO = 'update_date';

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
