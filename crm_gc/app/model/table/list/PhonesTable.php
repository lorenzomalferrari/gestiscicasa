<?php declare(strict_types=1);

/**
 * Class representing the 'Phones' table, extending BaseTable.
 */
	class PhonesTable extends BaseTable
	{
		const TABLE_NAME = 'Phones';

		const PHONE_NUMBER = 'phone_number';
		const TYPE_ID = 'type_id';

	/**
	 * Get the list of columns for the Phones table.
	 *
	 * @return array List of column names
	 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::PHONE_NUMBER,
				self::TYPE_ID
			]);
		}
	}
