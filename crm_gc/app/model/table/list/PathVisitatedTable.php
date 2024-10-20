<?php declare(strict_types=1);

	/**
	 * Class representing the 'PathVisitated' table, extending BaseTable.
	 */
	class PathVisitatedTable extends BaseTable
	{
		const TABLE_NAME = 'PathVisitated';

		const ID = 'id';
		const PATH = 'path';
		const USER_ID = 'user_id';
		const COUNT = 'count';

		/**
		 * Get the list of columns for the PathVisitated table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di PathVisitatedTable
			return array_merge(parent::getCommonColumns(), [
				self::ID,
				self::PATH,
				self::USER_ID,
				self::COUNT
			]);
		}
	}
