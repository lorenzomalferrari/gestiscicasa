<?php declare(strict_types=1);

    /**
     * Classe PathAndFilesLog
     *
     * Questa classe contiene costanti per i percorsi e i nomi dei file di log.
     * Le costanti definite in questa classe non devono essere modificate.
     */
    class PathAndFilesLog
    {
        //Percorsi
        public const FOLDER_BASE = CONFIG['log']['baseFolder'];

        public const FOLDER_SUB_BASE_BACKUP = self::FOLDER_BASE . "/" . CONFIG['log']['subFolder'][0];
        public const FOLDER_SUB_BASE = self::FOLDER_BASE . "/" . CONFIG['log']['subFolder'][1];

        public const FOLDER_FILE = self::FOLDER_SUB_BASE . "/" . CONFIG['log']['nome']['file'];
        public const FOLDER_FILE_ERROR = self::FOLDER_FILE . "/" . CONFIG['log']['subPath'][0];
        public const FOLDER_FILE_LOG = self::FOLDER_FILE . "/" . CONFIG['log']['subPath'][1];

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

        //File
        public const PATH_FILE_ERROR = self::FOLDER_FILE_ERROR . "/" . YEARNOW . MONTH . DAY . "_error_log" . self::FILE_EXTENSION;
        public const PATH_FILE_LOG = self::FOLDER_FILE_LOG. "/" . YEARNOW . MONTH . DAY . "_info_log" . self::FILE_EXTENSION;

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

}
