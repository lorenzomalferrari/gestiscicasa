<?php declare(strict_types=1);

/**
 * Class representing the 'Brand' table, extending BaseTable.
 */
class BrandTable extends BaseTable
{
	const TABLE_NAME = 'Brand';

	const NAME = 'name';
	const COUNTRY_OF_ORIGIN = 'country_of_origin_id';
	const INDUSTRY_SECTOR = 'industry_sector_id';
	const FOUNDATION_YEAR = 'foundation_year';

	/**
	 * Get the list of columns for the Brand table.
	 *
	 * @return array List of column names
	 */
	public static function getColumns(): array
	{
		// Unisci le colonne comuni ereditate da BaseTable con quelle specifiche della BrandTable
		return array_merge(parent::getCommonColumns(), [
			self::NAME,
			self::COUNTRY_OF_ORIGIN,
			self::INDUSTRY_SECTOR,
			self::FOUNDATION_YEAR
		]);
	}
}
