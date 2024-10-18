<?php declare(strict_types=1);

	/**
	 * Class representing the 'Rooms' table, extending BaseTable.
	 */
	class RoomsTable extends BaseTable
	{
		const TABLE_NAME = 'Rooms';

		const NUMBER = 'number';
		const NAME = 'name';
		const USAGE_DESTINATION_ID = 'usage_destination_id';
		const COLOR_ID = 'color_id';
		const PROPERTY_ID = 'property_id';
		const ROOM_TYPE_ID = 'room_type_id';

		/**
		 * Get the list of columns for the Rooms table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di RoomsTable
			return array_merge(parent::getCommonColumns(), [
				self::NUMBER,
				self::NAME,
				self::USAGE_DESTINATION_ID,
				self::COLOR_ID,
				self::PROPERTY_ID,
				self::ROOM_TYPE_ID,
			]);
		}
	}
