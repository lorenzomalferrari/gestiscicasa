<?php declare(strict_types=1);

	/**
	 * Class representing the 'Nationalities' table.
	 */
	class NationalitiesTable
	{
		const TABLE_NAME = 'Nationalities';

		const ID = 'id';
		const NAME = 'name';
		const NAME_ITALIAN = 'name_italian';
		const NAME_FRENCH = 'name_french';
		const NAME_SPANISH = 'name_spanish';
		const NAME_GERMAN = 'name_german';
		const NAME_PORTUGUESE = 'name_portuguese';
		const NOTE = 'note';
		const CREATION_DATE = 'creation_date';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the Nationalities table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::NAME_ITALIAN,
				self::NAME_FRENCH,
				self::NAME_SPANISH,
				self::NAME_GERMAN,
				self::NAME_PORTUGUESE,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}