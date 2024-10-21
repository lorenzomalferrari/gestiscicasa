<?php declare(strict_types=1);

	/**
	 * Class representing the 'People' table, extending BaseTable.
	 */
	class PeopleTable extends BaseTable
	{
		const TABLE_NAME = 'People';

		const NAME = 'name';
		const SURNAME = 'surname';
		const AGE = 'age';
		const BIRTHDATE = 'birthdate';
		const CITY = 'city';
		const STATE = 'state';
		const NATIONALITY = 'nationality';
		const DESCRIPTION = 'description';
		const USER_ID = 'user_id';
		const EMAIL = 'email';
		const GENDER_ID = 'gender_id';

		/**
		 * Get the list of columns for the People table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::SURNAME,
				self::AGE,
				self::BIRTHDATE,
				self::CITY,
				self::STATE,
				self::NATIONALITY,
				self::DESCRIPTION,
				self::USER_ID,
				self::EMAIL,
				self::GENDER_ID
			]);
		}
	}
