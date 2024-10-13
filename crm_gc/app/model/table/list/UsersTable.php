<?php declare(strict_types=1);

	/**
	 * Class representing the 'Users' table.
	 */
	class UsersTable
	{
		const TABLE_NAME = 'Users';

		const ID = 'id';
		const USERNAME = 'username';
		const PASSWORD = 'password';
		const TOKEN = 'TOKEN';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';
		const IS_ACTIVE = 'isActive';

		/**
		 * Get the list of columns for the Users table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::USERNAME,
				self::PASSWORD,
				self::TOKEN,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::IS_ACTIVE
			];
		}
	}