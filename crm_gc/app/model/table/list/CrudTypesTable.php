<?php declare(strict_types=1);

	/**
	 * Class representing the 'CrudTypess' table, extending BaseTable.
	 */
	class CrudTypesTable extends BaseTable
	{
		const TABLE_NAME = 'CrudTypess';

		const NAME = 'nome';
		const ACTION = 'azione';
		const VALUE = 'valore';

		/**
		 * Get the list of columns for the CrudTypess table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::ACTION,
				self::VALUE,
			]);
		}
	}
