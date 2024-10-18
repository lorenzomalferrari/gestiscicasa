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
		const NOTES = 'notes';
		const create_date = 'create_date';
		const update_date = 'update_date';

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
				self::NOTES,
				self::create_date,
				self::update_date
			];
		}
	}
