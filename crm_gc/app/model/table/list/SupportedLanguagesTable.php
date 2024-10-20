<?php declare(strict_types=1);

	/**
	 * Class SupportedLanguagesTable
	 *
	 * Represents the structure and columns of the supported_languages table, extending BaseTable.
	 */
	class SupportedLanguagesTable extends BaseTable
	{
		const TABLE_NAME = 'supported_languages';

		const LANGUAGE_ID = 'language_id';
		const NAME = 'name';
		const IS_ACTIVE = 'is_active';

		/**
		 * Get the list of columns for the supported_languages table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::LANGUAGE_ID,
				self::NAME,
				self::IS_ACTIVE
			]);
		}
	}
