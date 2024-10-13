<?php declare(strict_types=1);

	/**
	 * Class representing the 'Properties' table.
	 */
	class PropertyTable
	{
		const TABLE_NAME = 'Properties';

		const ID = 'id';
		const NAME = 'name';
		const PRICE = 'price';
		const ADDRESS = 'address';
		const ID_CITY = 'IdCity';
		const ID_STATE = 'IdState';
		const ID_PROPERTY_TYPES = 'IdPropertyTypes';
		const ACTIVE = 'active';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Properties table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::PRICE,
				self::ADDRESS,
				self::ID_CITY,
				self::ID_STATE,
				self::ID_PROPERTY_TYPES,
				self::ACTIVE,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}
