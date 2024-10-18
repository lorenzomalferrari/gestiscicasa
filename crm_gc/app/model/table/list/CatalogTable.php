<?php declare(strict_types=1);

	/**
	 * Class representing the 'Catalogs' table.
	 */
	class CatalogTable
	{
		const TABLE_NAME = 'Catalogs';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTE = 'notes';
		const CREATE_DATE = 'create_date';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the Catalogs table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::NOTE,
				self::CREATE_DATE,
				self::UPDATE_DATE
			];
		}
	}
