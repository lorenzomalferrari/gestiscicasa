<?php declare(strict_types=1);

	/**
	 * Class representing the 'ProfileTypes' table, extending BaseTable.
	 */
	class ProfileTypesTable extends BaseTable
	{
		const TABLE_NAME = 'ProfileTypes';

		const CODE = 'code';
		const DESCRIPTION = 'description';

		/**
		 * Get the list of columns for the ProfileTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::CODE,
				self::DESCRIPTION
			]);
		}
	}
