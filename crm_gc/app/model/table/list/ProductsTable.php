<?php declare(strict_types=1);

	/**
	 * Class representing the 'Products' table, extending BaseTable.
	 */
	class ProductsTable extends BaseTable
	{
		const TABLE_NAME = 'Products';

		const NAME = 'name';
		const DESCRIPTION = 'description';
		const PRICE = 'price';
		const BARCODE = 'barcode';
		const BRAND_ID = 'brand_id';
		const CATEGORY_ID = 'category_id';

		/**
		 * Get the list of columns for the Products table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::DESCRIPTION,
				self::PRICE,
				self::BARCODE,
				self::BRAND_ID,
				self::CATEGORY_ID,
			]);
		}
	}
