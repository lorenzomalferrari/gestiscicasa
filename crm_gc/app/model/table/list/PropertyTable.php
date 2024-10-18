<?php declare(strict_types=1);

	/**
	 * Class representing the 'Properties' table, extending BaseTable.
	 */
	class PropertyTable extends BaseTable
	{
		const TABLE_NAME = 'Properties';

		const NAME = 'name';
		const PRICE = 'price';
		const ADDRESS = 'address';
		const CITY_ID = 'city_id';
		const STATE_ID = 'state_id';
		const PROPERTY_TYPE_ID = 'property_type_id';
		const ACTIVE = 'active';

		/**
		 * Get the list of columns for the Properties table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di PropertyTable
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::PRICE,
				self::ADDRESS,
				self::CITY_ID,
				self::STATE_ID,
				self::PROPERTY_TYPE_ID,
				self::ACTIVE,
			]);
		}
	}
