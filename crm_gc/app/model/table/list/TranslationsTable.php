<?php declare(strict_types=1);

	/**
	 * Class TranslationsTable
	 *
	 * Represents the structure and columns of the translations table, extending BaseTable.
	 */
	class TranslationsTable extends BaseTable
	{
		const TABLE_NAME = 'translations';

		const LANGUAGE_ID = 'language_id';
		const KEY = 'key';
		const VALUE = 'value';

		/**
		 * Get the list of columns for the translations table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return array_merge(parent::getCommonColumns(), [
				self::LANGUAGE_ID,
				self::KEY,
				self::VALUE
			]);
		}
	}
