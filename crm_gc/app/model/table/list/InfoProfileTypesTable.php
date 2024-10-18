<?php declare(strict_types=1);

	/**
	 * Class InfoProfileTypes
	 *
	 * Represents the structure and columns of the InfoProfileTypes table.
	 */
	class InfoProfileTypesTable
	{
		const TABLE_NAME = 'InfoProfileTypes';

		const ID = 'id';
		const PLAN = 'plan';
		const IDPROFILETYPES = 'idProfileTypes';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const create_date = 'create_date';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the translations table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::PLAN,
				self::IDPROFILETYPES,
				self::DESCRIPTION,
				self::NOTES,
				self::create_date,
				self::UPDATE_DATE
			];
		}
	}