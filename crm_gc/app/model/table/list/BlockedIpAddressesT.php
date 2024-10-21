<?php declare(strict_types=1);

/**
 * Class representing the 'BlockedIpAddresses' table, extending BaseTable.
 */
class BlockedIpAddressesTable extends BaseTable
{
	const TABLE_NAME = 'BlockedIpAddresses';

	const IP_ADDRESS = 'ip_address';

	/**
	 * Get the list of columns for the BlockedIpAddresses table.
	 *
	 * @return array List of column names
	 */
	public static function getColumns(): array
	{
		return array_merge(parent::getCommonColumns(), [
			self::IP_ADDRESS
		]);
	}
}
