<?php declare(strict_types=1);

	/**
	 * Class representing the 'TablesColumnsVisited' table, extending BaseTable.
	 */
	class TablesColumnsVisitedTable extends BaseTable
	{
		const TABLE_NAME = 'TablesColumnsVisited';

		const COLUMN = 'column_name';
		const TABLE = 'table_name';
		const VISIT_COUNT = 'visit_count';
		const USER_ID = 'user_id';

		/**
		 * Get the list of columns for the TablesColumnsVisited table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di VersionDBTable
			return array_merge(parent::getCommonColumns(), [
				self::COLUMN,
				self::TABLE,
				self::VISIT_COUNT,
				self::USER_ID
			]);
		}
	}
