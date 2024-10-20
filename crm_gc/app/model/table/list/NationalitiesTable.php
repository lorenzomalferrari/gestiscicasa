<?php declare(strict_types=1);

	/**
	 * Class representing the 'Nationalities' table, extending BaseTable.
	 */
	class NationalitiesTable extends BaseTable
	{
		const TABLE_NAME = 'Nationalities';

		const NAME = 'name';

		/**
		 * Get the list of columns for the Nationalities table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di NationalitiesTable
			return array_merge(parent::getCommonColumns(), [
				self::NAME
			]);
		}
	}
