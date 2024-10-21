<?php declare(strict_types=1);

	/**
	 * Class representing the 'Genders' table, extending BaseTable.
	 */
	class GendersTable extends BaseTable
	{
		const TABLE_NAME = 'Genders';

		const GENDER = 'gender';
		const BY_SYSTEM = 'by_system';

		/**
		 * Get the list of columns for the Genders table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::GENDER,
				self::BY_SYSTEM
			]);
		}
	}
