<?php declare(strict_types=1);

/**
 * Class representing the 'PeopleAddress' table, extending BaseTable.
 */
	class PeopleAddressTable extends BaseTable
	{
		const TABLE_NAME = 'PeopleAddress';

		const PERSON_ID = 'person_id';
		const ADDRESS_ID = 'address_id';

	/**
	 * Get the list of columns for the PeopleAddress table.
	 *
	 * @return array List of column names
	 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::PERSON_ID,
				self::ADDRESS_ID
			]);
		}
	}
