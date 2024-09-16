<?php declare(strict_types=1);

	/**
	 * Class representing the 'PersonPropertyRoles' table.
	 */
	class PersonPropertyRolesTable
	{
		const TABLE_NAME = 'PersonPropertyRoles';

		const PERSON_ID = 'personId';
		const PROPERTY_ID = 'propertyId';
		const ROLE_ID = 'roleId';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the PersonPropertyRoles table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::PEOPLE_ID,
				self::PROPERTY_ID,
				self::ROLE_ID,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}