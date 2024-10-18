<?php declare(strict_types=1);

	/**
	 * Class representing the 'Users' table, extending BaseTable.
	 */
	class UsersTable extends BaseTable
	{
		const TABLE_NAME = 'Users';

		const USERNAME = 'username';
		const PASSWORD = 'password';
		const TOKEN = 'token';
		const IS_ACTIVE = 'is_active';

		/**
		 * Get the list of columns for the Users table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisci le colonne comuni ereditate da BaseTable con quelle specifiche della UsersTable
			return array_merge(parent::getCommonColumns(), [
				self::USERNAME,
				self::PASSWORD,
				self::TOKEN,
				self::IS_ACTIVE
			]);
		}
	}
