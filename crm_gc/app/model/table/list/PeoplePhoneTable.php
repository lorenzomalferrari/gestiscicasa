<?php declare(strict_types=1);

/**
 * Class representing the 'PeoplePhone' table, extending BaseTable.
 */
	class PeoplePhoneTable extends BaseTable
	{
		const TABLE_NAME = 'PeopleAddress';

		const PERSON_ID = 'person_id';
		const PHONE_ID = 'phone_id';

	/**
	 * Get the list of columns for the PeoplePhone table.
	 *
	 * @return array List of column names
	 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::PERSON_ID,
				self::PHONE_ID
			]);
		}
	}
