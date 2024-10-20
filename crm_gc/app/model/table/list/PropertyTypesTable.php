<?php declare(strict_types=1);

	/**
	 * Class PropertyTypesTable
	 *
	 * This class defines the structure of the table 'PropertyTypes' with constants for columns.
	 */
	class PropertyTypesTable extends BaseTable
	{
		const TABLE_NAME = 'PropertyTypes';

		const NAME = 'name';
		const CATEGORY_ID = 'category_id';

		/**
		 * Get the list of columns for the PropertyTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::CATEGORY_ID
			]);
		}
	}
