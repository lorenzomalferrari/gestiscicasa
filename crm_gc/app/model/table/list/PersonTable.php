<?php declare(strict_types=1);

	/**
	 * Class representing the 'People' table.
	 */
	class PersonTable
	{
		const TABLE_NAME = 'People';

		const ID = 'id';
		const NAME = 'name';
		const SURNAME = 'surname';
		const AGE = 'age';
		const BIRTHDATE = 'birthdate';
		const CITY = 'city';
		const STATE = 'state';
		const NATIONALITY = 'nationality';
		const DESCRIPTION = 'description';
		const ID_USER = 'user_id';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'update_date';
		const EMAIL = 'email';
		const ID_GENDER = 'gender_id';

		/**
		 * Get the list of columns for the People table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::SURNAME,
				self::AGE,
				self::BIRTHDATE,
				self::CITY,
				self::STATE,
				self::NATIONALITY,
				self::DESCRIPTION,
				self::ID_USER,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::EMAIL,
				self::ID_GENDER
			];
		}
	}
