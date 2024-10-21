<?php declare(strict_types=1);

	/**
	 * Class representing the 'Roles' table.
	 */
	class RolesTable extends BaseTable
	{
		const TABLE_NAME = 'Roles';

		const NAME = 'name';
		const BY_SYSTEM = 'by_system';

		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::BY_SYSTEM
			]);
		}
	}
