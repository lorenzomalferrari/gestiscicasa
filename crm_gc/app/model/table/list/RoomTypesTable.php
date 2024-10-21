<?php declare(strict_types=1);

	/**
	 * Class representing the 'RoomTypes' table, extending BaseTable.
	 */
	class RoomTypesTable extends BaseTable
	{
		const TABLE_NAME = 'RoomTypes';

		const NAME = 'name';
		const DESCRIPTION = 'description';
		const BY_SYSTEM = 'by_system';

		/**
		 * Get the list of columns for the RoomTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::DESCRIPTION,
				self::BY_SYSTEM
			]);
		}
	}
