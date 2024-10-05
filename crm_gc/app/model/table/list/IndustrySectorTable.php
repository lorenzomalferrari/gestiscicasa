<?php declare(strict_types=1);

	/**
	 * Class representing the 'lmgc_ExpenseTypes' table.
	 */
	class IndustrySectorTable
	{
		const TABLE_NAME = 'IndustrySectors';

		const ID = 'id';
		const NAME = 'name';
		const CREATION_DATE = 'creationDate';
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
				self::NAME,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}
