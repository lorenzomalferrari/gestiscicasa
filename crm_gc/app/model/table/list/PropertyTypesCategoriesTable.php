<?php declare(strict_types=1);

	/**
	 * Class PropertyTypesCategoriesTable
	 *
	 * This class defines the structure of the table 'PropertyTypesCategories' with constants for columns.
	 */
	class PropertyTypesCategoriesTable
	{
		const TABLE_NAME = 'PropertyTypesCategories';

		const ID = 'id';
		const CATEGORY = 'category';
		const NOTES = 'notes';
		const CREATE_DATE = 'createDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the PropertyTypesCategories table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::CATEGORY,
				self::NOTES,
				self::CREATE_DATE,
				self::UPDATE_DATE
			];
		}
	}
