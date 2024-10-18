<?php declare(strict_types=1);

class ProfileTypesTable
{
	const TABLE_NAME = 'ProfileTypes';

	const ID = 'id';
	const CODE = 'code';
	const DESCRIPTION = 'description';
	const NOTES = 'notes';
	const create_date = 'creationDate';
	const UPDATE_DATE = 'update_date';

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
			self::create_date,
			self::UPDATE_DATE
		];
	}
}