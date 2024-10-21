<?php declare(strict_types=1);

	/**
	 * Class representing the 'UserRolesTable' table.
	 */
	class UserRolesTable extends BaseTable
	{
		const TABLE_NAME = 'UserRolesTable';

		const USER_ID = 'user_id';
		const ROLE_ID = 'role_id';

		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::USER_ID,
				self::ROLE_ID
			]);
		}
	}
