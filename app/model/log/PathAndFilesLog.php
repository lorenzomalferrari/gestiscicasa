<?php declare(strict_types=1);

    class PathAndFilesLog
    {
        // Percorsi
        public const FOLDER_BASE = CONFIG['log']['baseFolder'];

        public const FOLDER_SUB_BASE_BACKUP = self::FOLDER_BASE . "/" . CONFIG['log']['subFolder'][0];
        public const FOLDER_SUB_BASE = self::FOLDER_BASE . "/" . CONFIG['log']['subFolder'][1];

        public const FOLDER_FILE = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['file'];
        public const FOLDER_FILE_ERROR = self::FOLDER_FILE . "/" . CONFIG['log']['subPath'][0];
        public const FOLDER_FILE_LOG = self::FOLDER_FILE . "/" . CONFIG['log']['subPath'][1];

        public const FOLDER_ERROR = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['error'];
        public const FOLDER_ERROR_ERROR = self::FOLDER_ERROR . "/" . CONFIG['log']['subPath'][0];
        public const FOLDER_ERROR_LOG = self::FOLDER_ERROR . "/" . CONFIG['log']['subPath'][1];

        public const FOLDER_DATABASE = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['database'];
        public const FOLDER_DATABASE_ERROR = self::FOLDER_DATABASE . "/" . CONFIG['log']['subPath'][0];
        public const FOLDER_DATABASE_LOG = self::FOLDER_DATABASE . "/" . CONFIG['log']['subPath'][1];

        public const FOLDER_IP = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['ip'];
        public const FOLDER_IP_ERROR = self::FOLDER_IP . "/" . CONFIG['log']['subPath'][0];
        public const FOLDER_IP_LOG = self::FOLDER_IP . "/" . CONFIG['log']['subPath'][1];

        public const FOLDER_API = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['api'];
        public const FOLDER_API_ERROR = self::FOLDER_API . "/" . CONFIG['log']['subPath'][0];
        public const FOLDER_API_LOG = self::FOLDER_API . "/" . CONFIG['log']['subPath'][1];

        public const FOLDER_PERFORMANCE = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['performance'];
        public const FOLDER_PERFORMANCE_ERROR = self::FOLDER_PERFORMANCE . "/" . CONFIG['log']['subPath'][0];
        public const FOLDER_PERFORMANCE_LOG = self::FOLDER_PERFORMANCE . "/" . CONFIG['log']['subPath'][1];

        public const FOLDER_EMAIL = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['email'];
        public const FOLDER_EMAIL_ERROR = self::FOLDER_EMAIL . "/" . CONFIG['log']['subPath'][0];
        public const FOLDER_EMAIL_LOG = self::FOLDER_EMAIL . "/" . CONFIG['log']['subPath'][1];

        public const FOLDER_USER = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['user'];

        // Estensione dei file di log
        public const FILE_EXTENSION = CONFIG['log']['extension'];

        // File
        public const PATH_FILE_ERROR = self::FOLDER_FILE_ERROR . "/" . YEARNOW . MONTH . DAY . "_error_log" . self::FILE_EXTENSION;
        public const PATH_FILE_LOG = self::FOLDER_FILE_LOG . "/" . YEARNOW . MONTH . DAY . "_info_log" . self::FILE_EXTENSION;

        public const PATH_ERROR_ERROR = self::FOLDER_ERROR_ERROR . "/" . YEARNOW . MONTH . DAY . "_error_log" . self::FILE_EXTENSION;
        public const PATH_ERROR_LOG = self::FOLDER_ERROR_LOG . "/" . YEARNOW . MONTH . DAY . "_info_log" . self::FILE_EXTENSION;

        public const PATH_DATABASE_ERROR = self::FOLDER_DATABASE_ERROR . "/" . YEARNOW . MONTH . DAY . "_error_log" . self::FILE_EXTENSION;
        public const PATH_DATABASE_LOG = self::FOLDER_DATABASE_LOG . "/" . YEARNOW . MONTH . DAY . "_info_log" . self::FILE_EXTENSION;

        public const PATH_IP_ERROR = self::FOLDER_IP_ERROR . "/" . YEARNOW . MONTH . DAY . "_error_log" . self::FILE_EXTENSION;
        public const PATH_IP_LOG = self::FOLDER_IP_LOG . "/" . YEARNOW . MONTH . DAY . "_info_log" . self::FILE_EXTENSION;

        public const PATH_API_ERROR = self::FOLDER_API_ERROR . "/" . YEARNOW . MONTH . DAY . "_error_log" . self::FILE_EXTENSION;
        public const PATH_API_LOG = self::FOLDER_API_LOG . "/" . YEARNOW . MONTH . DAY . "_info_log" . self::FILE_EXTENSION;

        public const PATH_PERFORMANCE_ERROR = self::FOLDER_PERFORMANCE_ERROR . "/" . YEARNOW . MONTH . DAY . "_error_log" . self::FILE_EXTENSION;
        public const PATH_PERFORMANCE_LOG = self::FOLDER_PERFORMANCE_LOG . "/" . YEARNOW . MONTH . DAY . "_info_log" . self::FILE_EXTENSION;

        public const PATH_EMAIL_ERROR = self::FOLDER_EMAIL_ERROR . "/" . YEARNOW . MONTH . DAY . "_error_log" . self::FILE_EXTENSION;
        public const PATH_EMAIL_LOG = self::FOLDER_EMAIL_LOG . "/" . YEARNOW . MONTH . DAY . "_info_log" . self::FILE_EXTENSION;

        /**
         * Restituisce un array associativo contenente tutte le directory e i file.
         *
         * @return array
         */
        public static function getAllPaths(): array
        {
            return [
                'directories' => [
                    self::FOLDER_BASE,
                    self::FOLDER_SUB_BASE_BACKUP,
                    self::FOLDER_SUB_BASE,
                    self::FOLDER_FILE,
                    self::FOLDER_FILE_ERROR,
                    self::FOLDER_FILE_LOG,
                    self::FOLDER_ERROR,
                    self::FOLDER_ERROR_ERROR,
                    self::FOLDER_ERROR_LOG,
                    self::FOLDER_DATABASE,
                    self::FOLDER_DATABASE_ERROR,
                    self::FOLDER_DATABASE_LOG,
                    self::FOLDER_IP,
                    self::FOLDER_IP_ERROR,
                    self::FOLDER_IP_LOG,
                    self::FOLDER_API,
                    self::FOLDER_API_ERROR,
                    self::FOLDER_API_LOG,
                    self::FOLDER_PERFORMANCE,
                    self::FOLDER_PERFORMANCE_ERROR,
                    self::FOLDER_PERFORMANCE_LOG,
                    self::FOLDER_EMAIL,
                    self::FOLDER_EMAIL_ERROR,
                    self::FOLDER_EMAIL_LOG,
                    self::FOLDER_USER,
                ],
                'files' => [
                    self::PATH_FILE_ERROR,
                    self::PATH_FILE_LOG,
                    self::PATH_ERROR_ERROR,
                    self::PATH_ERROR_LOG,
                    self::PATH_DATABASE_ERROR,
                    self::PATH_DATABASE_LOG,
                    self::PATH_IP_ERROR,
                    self::PATH_IP_LOG,
                    self::PATH_API_ERROR,
                    self::PATH_API_LOG,
                    self::PATH_PERFORMANCE_ERROR,
                    self::PATH_PERFORMANCE_LOG,
                    self::PATH_EMAIL_ERROR,
                    self::PATH_EMAIL_LOG,
                ]
            ];
        }
    }
