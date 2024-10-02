<?php declare(strict_types=1);

	/**
	 * Class representing the 'lmgc_ExpenseTypes' table.
	 */
	class ExpenseTypesTable
	{
		const TABLE_NAME = 'lmgc_ExpenseTypes';

		const ID = 'id';
		const CODE = 'code';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const COLORE = 'colore';
		const CREATE_DATE = 'createDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the lmgc_ExpenseTypes table.
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
