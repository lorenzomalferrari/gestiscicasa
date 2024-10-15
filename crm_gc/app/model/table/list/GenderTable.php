<?php declare(strict_types=1);

	/**
	 * Class representing the 'Genders' table.
	 */
	class GenderTable
	{
		const TABLE_NAME = 'Genders';

		const ID = 'id';
		const GENDER = 'gender';
		const NOTES = 'notes';
		const CREATED_AT = 'creation_date';
		const UPDATED_AT = 'update_date';

		/**
		 * Get the list of columns for the Genders table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::GENDER,
				self::NOTES,
				self::CREATED_AT,
				self::UPDATED_AT
			];
		}
	}
