<?php declare(strict_types=1);

	/**
	 * Class representing the 'ExpenseTypes' table, extending BaseTable.
	 */
	class ExpenseTypesTable extends BaseTable
	{
		const TABLE_NAME = 'ExpenseTypes';

		const CODE = 'code';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const COLORE = 'colore';

		/**
		 * Get the list of columns for the ExpenseTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di ExpenseTypesTable
			return array_merge(parent::getCommonColumns(), [
				self::CODE,
				self::NAME,
				self::DESCRIPTION,
				self::COLORE,
			]);
		}
	}
