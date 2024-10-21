<?php declare(strict_types=1);

	/**
	 * Class representing the 'VersionDB' table, extending BaseTable.
	 */
	class VersionDBTable extends BaseTable
	{
		const TABLE_NAME = 'VersionDB';

		const VERSION = 'version';
		const EXTENDED_VERS_NAME = 'extended_version_name';

		/**
		 * Get the list of columns for the VersionDB table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di VersionDBTable
			return array_merge(parent::getCommonColumns(), [
				self::VERSION,
				self::EXTENDED_VERS_NAME,
			]);
		}
	}
