<?php declare(strict_types=1);

	/**
	 * Class representing the 'Products' table.
	 */
	class ProductTable
	{
		const TABLE_NAME = 'Products';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const PRICE = 'price';
		const BARCODE = 'barcode';
		const ID_BRAND = 'IdBrand';
		const ID_CATEGORY = 'IdCategory';
		const NOTE = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the Products table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::PRICE,
				self::BARCODE,
				self::ID_BRAND,
				self::ID_CATEGORY,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}
