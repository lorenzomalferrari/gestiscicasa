<?php declare(strict_types=1);

	/**
	 * Class PropertyTypesCategoriesTable
	 *
	 * This class defines the structure of the table 'PropertyTypesCategories' with constants for columns.
	 */
	class PropertyTypesCategoriesTable extends BaseTable
	{
		const TABLE_NAME = 'PropertyTypesCategories';

		const CATEGORY = 'category';

		/**
		 * Get the list of columns for the PropertyTypesCategories table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::CATEGORY
			]);
		}
	}
