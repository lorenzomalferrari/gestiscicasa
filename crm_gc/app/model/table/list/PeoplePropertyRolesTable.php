<?php declare(strict_types=1);

	/**
	 * Class representing the 'PeoplePropertyRoles' table, extending BaseTable.
	 */
	class PeoplePropertyRolesTable extends BaseTable
	{
		const TABLE_NAME = 'PeoplePropertyRoles';

		const PERSON_ID = 'person_id';
		const PROPERTY_ID = 'property_id';
		const ROLE_ID = 'role_id';

		/**
		 * Get the list of columns for the PeoplePropertyRoles table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::PERSON_ID,
				self::PROPERTY_ID,
				self::ROLE_ID,
			]);
		}
	}
