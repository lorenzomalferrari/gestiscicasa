<?php declare(strict_types=1);

/**
 * Class representing the 'AddressTypes' table, extending BaseTable.
 */
	class AddressTypesTable extends BaseTable
	{
		const TABLE_NAME = 'AddressTypes';

		const TYPE = 'type';
		const BY_SYSTEM = 'by_system';

	/**
	 * Get the list of columns for the AddressTypes table.
	 *
	 * @return array List of column names
	 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::TYPE,
				self::BY_SYSTEM
			]);
		}
	}
