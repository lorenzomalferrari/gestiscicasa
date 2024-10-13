<?php declare(strict_types=1);

	/**
	 * Class SupportedLanguagesTable
	 *
	 * Represents the structure and columns of the supported_languages table.
	 */
	class SupportedLanguagesTable
	{
		const TABLE_NAME = 'supported_languages';

		const ID = 'id';
		const LANGUAGE_ID = 'language_id';
		const NAME = 'name';
		const CREATION_DATE = 'creation_date';
		const UPDATE_DATE = 'update_date';
		const NOTES = 'notes';
		const IS_ACTIVE = 'isActive';

		/**
		 * Get the list of columns for the supported_languages table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::LANGUAGE_ID,
				self::NAME,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::NOTES,
				self::IS_ACTIVE
			];
		}
	}