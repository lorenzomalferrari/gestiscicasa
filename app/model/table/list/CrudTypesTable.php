<?php declare(strict_types=1);

	/**
	 * Class representing the 'CrudTypess' table.
	 */
	class CrudTypesTable
	{
		const TABLE_NAME = 'CrudTypess';

		const ID = 'id';
		const NAME = 'nome';
		const ACTION = 'azione';
		const VALUE = 'valore';
		const CREATION_DATE = 'data_creazione';
		const UPDATE_DATE = 'data_aggiornamento';
		const NOTE = 'note';

		/**
		 * Get the list of columns for the CrudTypess table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::ACTION,
				self::VALUE,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::NOTE
			];
		}
	}