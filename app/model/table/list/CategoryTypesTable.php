<?php declare(strict_types=1);

    /**
     * Class CategoryTypeTable
     *
     * This class represents the structure of the lmgc_CategoryTypes table.
     */
    class CategoryTypeTable
    {
        /**
         * The name of the table.
         */
        public const TABLE_NAME = 'lmgc_CategoryTypes';

        /**
         * The columns of the table.
         */
        public const COLUMN_ID = 'id';
        public const COLUMN_CODE = 'code';
        public const COLUMN_NAME = 'name';
        public const COLUMN_NOTE = 'note';
        public const COLUMN_CREATE_DATE = 'createDate';
        public const COLUMN_UPDATE_DATE = 'updateDate';

        /**
         * Get the list of columns in the table.
         *
         * @return array
         */
        public static function getColumns(): array
        {
            return [
                self::COLUMN_ID,
                self::COLUMN_CODE,
                self::COLUMN_NAME,
                self::COLUMN_NOTE,
                self::COLUMN_CREATE_DATE,
                self::COLUMN_UPDATE_DATE,
            ];
        }
    }
