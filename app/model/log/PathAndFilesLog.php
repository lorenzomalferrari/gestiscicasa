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
        public const FOLDER_BASE = CONFIG['log']['path'];
        public const FOLDER_FILE = self::FOLDER_BASE . "/" . CONFIG['log']['nome']['file'];
        public const FOLDER_FILE_ERROR = self::FOLDER_FILE . "/" . CONFIG['log']['sub_path'][0];
        public const FOLDER_FILE_LOG = self::FOLDER_FILE . "/" . CONFIG['log']['sub_path'][1];

        public const FOLDER_DATABASE = self::FOLDER_BASE . "/" . CONFIG['log']['nome']['database'];
        public const FOLDER_DATABASE_ERROR = self::FOLDER_DATABASE . "/" . CONFIG['log']['sub_path'][0];
        public const FOLDER_DATABASE_LOG = self::FOLDER_DATABASE . "/" . CONFIG['log']['sub_path'][1];

        public const FOLDER_IP = self::FOLDER_BASE . "/" . CONFIG['log']['nome']['ip'];
        public const FOLDER_IP_ERROR = self::FOLDER_IP . "/" . CONFIG['log']['sub_path'][0];
        public const FOLDER_IP_LOG = self::FOLDER_IP . "/" . CONFIG['log']['sub_path'][1];

        public const FOLDER_API = self::FOLDER_BASE . "/" . CONFIG['log']['nome']['api'];
        public const FOLDER_API_ERROR = self::FOLDER_API . "/" . CONFIG['log']['sub_path'][0];
        public const FOLDER_API_LOG = self::FOLDER_API . "/" . CONFIG['log']['sub_path'][1];

        public const FOLDER_PERFORMANCE = self::FOLDER_BASE . "/" . CONFIG['log']['nome']['performance'];
        public const FOLDER_PERFORMANCE_ERROR = self::FOLDER_PERFORMANCE . "/" . CONFIG['log']['sub_path'][0];
        public const FOLDER_PERFORMANCE_LOG = self::FOLDER_PERFORMANCE . "/" . CONFIG['log']['sub_path'][1];

        public const FOLDER_USER = self::FOLDER_BASE . "/" . CONFIG['log']['nome']['user'];

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

}
