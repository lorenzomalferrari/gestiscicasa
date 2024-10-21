<?php declare(strict_types=1);

	/**
	 * Class representing the 'IndustrySectors' table, extending BaseTable.
	 */
	class IndustrySectorsTable extends BaseTable
	{
		const TABLE_NAME = 'IndustrySectors';

		const NAME = 'name';

		/**
		 * Get the list of columns for the IndustrySectors table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di IndustrySectorTable
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
			]);
		}
	}
