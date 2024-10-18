<?php declare(strict_types=1);

	/**
	 * Class representing the 'CrudLogs' table, extending BaseTable.
	 */
	class CrudLogsTable extends BaseTable
	{
		const TABLE_NAME = 'CrudLogs';

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
			// Unisce le colonne comuni ereditate da BaseTable con quelle specifiche di CrudLogsTable
			return array_merge(parent::getCommonColumns(), [
				self::TIMESTAMP,
				self::MESSAGE,
				self::ACTION,
				self::BEFORE_STATE,
				self::AFTER_STATE,
				self::USER_ID
			]);
		}
	}
