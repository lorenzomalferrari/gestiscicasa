<?php declare(strict_types=1);

	/**
	 * Class representing the 'CrudLogs' table.
	 */
	class CrudLogsTable
	{
		const TABLE_NAME = 'CrudLogs';

		const ID = 'id';
		const TIMESTAMP = 'timestamp';
		const MESSAGE = 'message';
		const ACTION = 'action';
		const BEFORE_STATE = 'before_state';
		const AFTER_STATE = 'after_state';
		const USER_ID = 'user_id';

		/**
		 * Get the list of columns for the CrudLogs table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::TIMESTAMP,
				self::MESSAGE,
				self::ACTION,
				self::BEFORE_STATE,
				self::AFTER_STATE,
				self::USER_ID
			];
		}
	}