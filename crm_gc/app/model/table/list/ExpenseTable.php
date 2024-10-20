<?php declare(strict_types=1);

	/**
	 * Class representing the 'Expenses' table, extending BaseTable.
	 */
	class ExpenseTable extends BaseTable
	{
		const TABLE_NAME = 'Expenses';

		const EXPENSE_TYPE_ID = 'expense_type_id';
		const AMOUNT = 'amount';
		const EXPENSE_DATE = 'expense_date';
		const PROPERTY_ID = 'property_id';
		const COLORE = 'colore';

		/**
		 * Get the list of columns for the Expenses table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di ExpenseTable
			return array_merge(parent::getCommonColumns(), [
				self::EXPENSE_TYPE_ID,
				self::AMOUNT,
				self::EXPENSE_DATE,
				self::PROPERTY_ID,
				self::COLORE,
			]);
		}
	}
