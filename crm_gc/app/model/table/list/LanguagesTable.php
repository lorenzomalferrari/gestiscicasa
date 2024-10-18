<?php declare(strict_types=1);

	/**
	 * Class LanguagesTable
	 *
	 * Represents the structure and columns of the languages table.
	 */
	class LanguagesTable
	{
		const TABLE_NAME = 'languages';

		const ID = 'id';
		const CODE_2 = 'code_2';
		const CODE_3 = 'code_3';
		const CODE_639_3 = 'code_639_3';
		const NAME = 'name';
		const NATIVE_NAME = 'native_name';
		const RTL = 'rtl';
		const REGION = 'region';
		const ISO_3166_ALPHA2 = 'iso_3166_alpha2';
		const ISO_3166_ALPHA3 = 'iso_3166_alpha3';
		const CURRENCY_CODE = 'currency_code';
		const NOTES = 'notes';
		const create_date = 'create_date';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the languages table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::CODE_2,
				self::CODE_3,
				self::CODE_639_3,
				self::NAME,
				self::NATIVE_NAME,
				self::RTL,
				self::REGION,
				self::ISO_3166_ALPHA2,
				self::ISO_3166_ALPHA3,
				self::CURRENCY_CODE,
				self::NOTES,
				self::create_date,
				self::UPDATE_DATE
			];
		}
	}