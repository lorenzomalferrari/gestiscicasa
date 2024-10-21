<?php declare(strict_types=1);

	/**
	 * Class representing the 'Events' table, extending BaseTable.
	 */
	class EventsTable extends BaseTable
	{
		const TABLE_NAME = 'Events';

		const ACTION = 'action';

		/**
		 * Get the list of columns for the Events table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::ACTION,
			]);
		}
	}
