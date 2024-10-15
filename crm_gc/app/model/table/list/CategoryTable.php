<?php declare(strict_types=1);

	/**
	 * Class representing the 'Categories' table.
	 */
	class CategoryTable
	{
		const TABLE_NAME = 'Categories';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'update_date';
		const ID_COLOR = 'color_id';

		/**
		 * Get the list of columns for the Categories table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::ID_COLOR
			];
		}
	}
