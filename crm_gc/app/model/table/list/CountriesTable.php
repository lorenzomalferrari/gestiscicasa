<?php declare(strict_types=1);

	/**
	 * Class representing the 'Countries' table.
	 */
	class CountriesTable
	{
		const TABLE_NAME = 'Countries';

		const ID = 'id';
		const NAME = 'name';
		const CONTINENT_ID = 'continent_id';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the Countries table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::CONTINENT_ID,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}