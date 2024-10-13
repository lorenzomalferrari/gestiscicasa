<?php declare(strict_types=1);

	/**
	 * Class TranslationsTable
	 *
	 * Represents the structure and columns of the translations table.
	 */
	class TranslationsTable
	{
		const TABLE_NAME = 'translations';

		const ID = 'id';
		const LANGUAGE_ID = 'language_id';
		const KEY = 'key';
		const VALUE = 'value';
		const CREATED_AT = 'creation_date';
		const UPDATED_AT = 'update_date';
		const NOTES = 'notes';

		/**
		 * Get the list of columns for the translations table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::LANGUAGE_ID,
				self::KEY,
				self::VALUE,
				self::CREATED_AT,
				self::UPDATED_AT,
				self::NOTES
			];
		}
	}