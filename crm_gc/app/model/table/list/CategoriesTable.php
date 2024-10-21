<?php declare(strict_types=1);

	/**
	 * Class representing the 'Categories' table, extending BaseTable.
	 */
	class CategoriesTable extends BaseTable
	{
		const TABLE_NAME = 'Categories';

		const NAME = 'name';
		const DESCRIPTION = 'description';
		const BY_SYSTEM = 'by_system';

		/**
		 * Get the list of columns for the Categories table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::DESCRIPTION,
				self::BY_SYSTEM
			]);
		}
	}
