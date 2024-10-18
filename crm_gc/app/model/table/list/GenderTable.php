<?php declare(strict_types=1);

	/**
	 * Class representing the 'Genders' table, extending BaseTable.
	 */
	class GenderTable extends BaseTable
	{
		const TABLE_NAME = 'Genders';

		const GENDER = 'gender';

		/**
		 * Get the list of columns for the Genders table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::GENDER,
			]);
		}
	}
