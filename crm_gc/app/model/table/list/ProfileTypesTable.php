<?php declare(strict_types=1);

class ProfileTypesTable
{
	const TABLE_NAME = 'ProfileTypes';

	const ID = 'id';
	const CODE = 'code';
	const DESCRIPTION = 'description';
	const NOTES = 'notes';
	const CREATION_DATE = 'creationDate';
	const UPDATE_DATE = 'updateDate';

	/**
	 * Get the list of columns for the ProfileTypes table.
	 *
	 * @return array List of column names
	 */
	public static function getColumns(): array
	{
		return [
			self::ID,
			self::CODE,
			self::DESCRIPTION,
			self::NOTES,
			self::CREATION_DATE,
			self::UPDATE_DATE
		];
	}
}