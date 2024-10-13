<?php declare(strict_types=1);

	/**
	 * Class representing the 'Genders' table.
	 */
	class GenderTable
	{
		const TABLE_NAME = 'Genders';

		const ID = 'id';
		const GENDER_IT = 'gender_it';
		const GENDER_EN = 'gender_en';
		const GENDER_FR = 'gender_fr';
		const GENDER_ES = 'gender_es';
		const GENDER_DE = 'gender_de';
		const GENDER_PT = 'gender_pt';
		const NOTE = 'note';
		const CREATED_AT = 'creation_date';
		const UPDATED_AT = 'update_date';

		/**
		 * Get the list of columns for the Genders table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::GENDER_IT,
				self::GENDER_EN,
				self::GENDER_FR,
				self::GENDER_ES,
				self::GENDER_DE,
				self::GENDER_PT,
				self::NOTE,
				self::CREATED_AT,
				self::UPDATED_AT
			];
		}
	}