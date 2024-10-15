<?php declare(strict_types=1);

	/**
	 * Class PropertyTypesTable
	 *
	 * This class defines the structure of the table 'PropertyTypes' with constants for columns.
	 */
	class PropertyTypesTable
	{
		const TABLE_NAME = 'PropertyTypes';

		const ID = 'id';
		const NAME = 'name';
		const CATEGORY_ID = 'category_id';
		const NOTES = 'notes';
		const CREATE_DATE = 'create_date';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the PropertyTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::CATEGORY_ID,
				self::NOTES,
				self::CREATE_DATE,
				self::UPDATE_DATE
			];
		}
	}
