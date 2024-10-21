<?php declare(strict_types=1);

/**
 * Class representing the 'Addresses' table, extending BaseTable.
 */
	class AddressesTable extends BaseTable
	{
		const TABLE_NAME = 'Addresses';

		const TYPE = 'address_line1';
		const BY_SYSTEM = 'address_line2';
		const CITY_ID = 'city_id';
		const STATE_ID = 'state_id';
		const POSTAL_CODE = 'postal_code';
		const COUNTRY_ID = 'country_id';
		const TYPE_ID = 'type_id';

	/**
	 * Get the list of columns for the Addresses table.
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
