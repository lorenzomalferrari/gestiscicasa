<?php declare(strict_types=1);

	/**
	 * Class representing the 'lmgc_Expense' table.
	 */
	class ExpenseTable
	{
		const TABLE_NAME = 'lmgc_Expenses';

		const ID = 'id';
		const EXPENSE_TYPE_ID = 'expense_type_id';
		const AMOUNT = 'amount';
		const EXPENSE_DATE = 'expense_date';
		const NOTE = 'note';
		const PROPERTY_ID = 'property_id';
		const COLORE = 'colore';
		const CREATE_DATE = 'createDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the lmgc_Expense table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::EXPENSE_TYPE_ID,
				self::AMOUNT,
				self::EXPENSE_DATE,
				self::NOTE,
				self::PROPERTY_ID,
				self::COLORE,
				self::CREATE_DATE,
				self::UPDATE_DATE
			];
		}
	}
