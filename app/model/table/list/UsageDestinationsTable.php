<?php declare(strict_types=1);

	/**
	 * Class representing the 'UsageDestinations' table.
	 */
	class UsageDestinationsTable
	{
		const TABLE_NAME = 'UsageDestinations';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';
		const CODE = 'code';
		const COLOR_ID = 'colorId';

		/**
		 * Get the list of columns for the UsageDestinations table.
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
				self::CODE,
				self::COLOR_ID
			];
		}
	}