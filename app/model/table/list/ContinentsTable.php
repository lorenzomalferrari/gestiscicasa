<?php declare(strict_types=1);

	/**
	 * Class representing the 'Continents' table.
	 */
	class ContinentsTable
	{
		const TABLE_NAME = 'Continents';

		const ID = 'id';
		const NAME = 'name';
		const POPULATION = 'population';
		const AREA_KM2 = 'area_km2';
		const DESCRIPTION = 'description';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Continents table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::POPULATION,
				self::AREA_KM2,
				self::DESCRIPTION,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}