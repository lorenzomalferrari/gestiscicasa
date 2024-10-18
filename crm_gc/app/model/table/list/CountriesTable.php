<?php declare(strict_types=1);

	/**
	 * Class representing the 'Countries' table, extending BaseTable.
	 */
	class CountriesTable extends BaseTable
	{
		const TABLE_NAME = 'Countries';

		const NAME = 'name';
		const CONTINENT_ID = 'continent_id';

		/**
		 * Get the list of columns for the Countries table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di CountriesTable
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::CONTINENT_ID
			]);
		}
	}
