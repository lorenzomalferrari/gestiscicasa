<?php declare(strict_types=1);

    /**
     * Class BaseTable for common columns.
     */
    class BaseTable
    {
        const ID = 'id';
        const NOTES = 'notes';
        const CREATE_DATE = 'create_date';
        const UPDATE_DATE = 'update_date';

        /**
         * Get the common columns for all tables.
         *
         * @return array List of common column names
         */
        public static function getCommonColumns(): array
        {
            return [
                self::ID,
                self::NOTES,
                self::CREATE_DATE,
                self::UPDATE_DATE
            ];
        }
    }
