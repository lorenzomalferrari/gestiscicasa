<?php declare(strict_types=1);

	/**
	 * Class InfoProfileTypesTable
	 *
	 * Represents the structure and columns of the InfoProfileTypes table, extending BaseTable.
	 */
	class InfoProfileTypesTable extends BaseTable
	{
		const TABLE_NAME = 'InfoProfileTypes';

		const PLAN = 'plan';
		const IDPROFILETYPES = 'idProfileTypes';
		const DESCRIPTION = 'description';

		/**
		 * Get the list of columns for the InfoProfileTypes table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::PLAN,
				self::IDPROFILETYPES,
				self::DESCRIPTION
			]);
		}
	}
