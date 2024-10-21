<?php declare(strict_types=1);

	/**
	 * Class representing the 'VersionDB' table, extending BaseTable.
	 */
	class VersionDBTable extends BaseTable
	{
		const TABLE_NAME = 'VersionDB';

		const VERSION = 'column_name';
		const EXTENDED_VERS_NAME = 'table_name';
		const VISIT_COUNT = 'visit_count';
		const USER_ID = 'user_id';

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
				self::VISIT_COUNT,
				self::USER_ID
			]);
		}
	}
