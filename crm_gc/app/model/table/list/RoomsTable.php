<?php declare(strict_types=1);

	/**
	 * Class representing the 'Rooms' table.
	 */
	class RoomsTable
	{
		const TABLE_NAME = 'Rooms';

		const ID = 'id';
		const NUMBER = 'number';
		const NAME = 'name';
		const ID_USAGE_DESTINATION = 'idUsageDestination';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'update_date';
		const NOTE = 'note';
		const ID_COLOR = 'idColor';
		const ID_PROPERTY = 'idProperty';
		const ID_ROOM_TYPE = 'idRoomTypes';

		/**
		 * Get the list of columns for the Rooms table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NUMBER,
				self::NAME,
				self::ID_USAGE_DESTINATION,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::NOTE,
				self::ID_COLOR,
				self::ID_PROPERTY,
				self::ID_ROOM_TYPE
			];
		}
	}