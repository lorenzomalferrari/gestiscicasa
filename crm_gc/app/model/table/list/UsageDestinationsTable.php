<?php declare(strict_types=1);

	/**
	 * Class representing the 'UsageDestinations' table, extending BaseTable.
	 */
	class UsageDestinationsTable extends BaseTable
	{
		const TABLE_NAME = 'UsageDestinations';

		const NAME = 'name';
		const DESCRIPTION = 'description';
		const CODE = 'code';
		const COLOR_ID = 'colorId';

		/**
		 * Get the list of columns for the UsageDestinations table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di UsageDestinationsTable
			return array_merge(parent::getCommonColumns(), [
				self::NAME,
				self::DESCRIPTION,
				self::CODE,
				self::COLOR_ID,
			]);
		}
	}
