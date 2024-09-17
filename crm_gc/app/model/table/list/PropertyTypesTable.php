<?php declare(strict_types=1);

	/**
	 * Class PropertyTypesTable
	 *
	 * This class defines the structure of the table 'lmgc_PropertyTypes' with constants for columns.
	 */
	class PropertyTypesTable
	{
		const TABLE_NAME = 'PropertyTypes';

		const ID = 'id';
		const NAME = 'name';
		const CATEGORY_ID = 'category_id';
		const NOTES = 'notes';
		const CREATE_DATE = 'createDate';
		const UPDATE_DATE = 'updateDate';

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
