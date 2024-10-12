<?php declare(strict_types=1);

	/**
	 * Class representing the 'UsersProperties' table.
	 */
	class UsersPropertyTable
	{
		const TABLE_NAME = 'UsersProperties';

		const ID_PERSON = 'person_id';
		const ID_PROPERTY = 'property_id';
		const ID_ROLE = 'role_id';

		/**
		 * Get the list of columns for the UsersProperties table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID_PERSON,
				self::ID_PROPERTY,
				self::ID_ROLE
			];
		}
	}
