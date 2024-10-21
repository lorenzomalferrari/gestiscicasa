<?php declare(strict_types=1);

	/**
	 * Class representing the 'Continents' table, extending BaseTable.
	 */
	class ContinentsTable extends BaseTable
	{
		const TABLE_NAME = 'Continents';

		const NAME = 'name';
		const POPULATION = 'population';
		const AREA_KM2 = 'area_km2';

		/**
		 * Get the list of columns for the Continents table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di ContinentsTable
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::POPULATION,
				self::AREA_KM2,
			]);
		}
	}
