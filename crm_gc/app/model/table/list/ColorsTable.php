<?php declare(strict_types=1);

	/**
	 * Class representing the 'Colors' table.
	 */
	class ColorsTable
	{
		const TABLE_NAME = 'Colors';

		const ID = 'id';
		const NAME = 'name';
		const HEX_CODE = 'hexCode';
		const RGB_CODE = 'rgbCode';
		const RGBA_CODE = 'rgbaCode';
		const HSL_CODE = 'hslCode';
		const NOTE = 'notes';

		/**
		 * Get the list of columns for the Colors table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::HEX_CODE,
				self::RGB_CODE,
				self::RGBA_CODE,
				self::HSL_CODE,
				self::NOTE
			];
		}
	}
