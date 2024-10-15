<?php declare(strict_types=1);

	/**
	 * Class representing the 'Events' table.
	 */
	class EventTable
	{
		const TABLE_NAME = 'Events';

		const ID = 'id';
		const ACTION = 'action';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the Events table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::ACTION,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}