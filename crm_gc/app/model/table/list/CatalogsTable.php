<?php declare(strict_types=1);

	/**
	 * Class representing the 'Catalogs' table, extending BaseTable.
	 */
	class CatalogsTable extends BaseTable
	{
		const TABLE_NAME = 'Catalogs';

		const NAME = 'name';
		const DESCRIPTION = 'description';

		/**
		 * Get the list of columns for the Catalogs table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::DESCRIPTION
			]);
		}
	}
