<?php declare(strict_types=1);

	/**
	 * Class representing the 'CrudTypess' table, extending BaseTable.
	 */
	class CrudTypesTable extends BaseTable
	{
		const TABLE_NAME = 'CrudTypes';

		const CODE = 'code';
		const NAME = 'name';
		const ACTION = 'action';
		const VALUE = 'value';
		const BY_SYSTEM = 'by_system';

		/**
		 * Get the list of columns for the CrudTypess table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::CODE,
				self::NAME,
				self::ACTION,
				self::VALUE,
				self::BY_SYSTEM
			]);
		}
	}
