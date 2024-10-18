<?php declare(strict_types=1);

	/**
	 * Class representing the 'PathVisitated' table.
	 */
	class PathVisitatedTable
	{
		const TABLE_NAME = 'PathVisitated';

		const ID = 'id';
		const PATH = 'path';
		const USER_ID = 'user_id';
		const COUNT = 'count';

		/**
		 * Get the list of columns for the PathVisitated table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::PATH,
				self::USER_ID,
				self::COUNT
			];
		}
	}
