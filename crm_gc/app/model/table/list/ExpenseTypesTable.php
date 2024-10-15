<?php declare(strict_types=1);

	/**
	 * Class representing the 'lm_ExpenseTypes' table.
	 */
	class ExpenseTypesTable
	{
		const TABLE_NAME = 'ExpenseTypes';

		const ID = 'id';
		const CODE = 'code';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const COLORE = 'colore';
		const CREATE_DATE = 'create_date';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the lm_ExpenseTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::CODE,
				self::NAME,
				self::DESCRIPTION,
				self::COLORE,
				self::CREATE_DATE,
				self::UPDATE_DATE
			];
		}
	}
