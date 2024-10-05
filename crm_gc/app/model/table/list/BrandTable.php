<?php declare(strict_types=1);

	/**
	 * Class representing the 'Brand' table.
	 */
	class BrandTable
	{
		const TABLE_NAME = 'Brand';

		const ID = 'id';
		const NAME = 'name';
		const COUNTRY_OF_ORIGIN = 'country_of_origin';
		const INDUSTRY_SECTOR = 'industry_sector';
		const FOUNDATION_YEAR = 'foundation_year';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Brand table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::COUNTRY_OF_ORIGIN,
				self::INDUSTRY_SECTOR,
				self::FOUNDATION_YEAR,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}
