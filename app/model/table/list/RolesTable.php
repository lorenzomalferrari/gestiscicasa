<?php declare(strict_types=1);

	/**
	 * Class representing the 'Roles' table.
	 */
	class RolesTable
	{
		const TABLE_NAME = 'Roles';

		const ID = 'id';
		const ROLE_NAME = 'roleName';

		/**
		 * Get the list of columns for the Roles table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::ROLE_NAME
			];
		}
	}