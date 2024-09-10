<?php declare(strict_types=1);

	/**
	 * Class representing the 'RoomTypess' table.
	 */
	class RoomTypesTable
	{
		const TABLE_NAME = 'RoomTypess';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the RoomTypess table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}