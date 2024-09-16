<?php declare(strict_types=1);

    // Classe base per gli errori HTTP
    class HttpErrorCodes
    {
        public const NOT_FOUND = 404;
        public const INTERNAL_SERVER_ERROR = 500;
        public const FORBIDDEN = 403;
        public const UNAUTHORIZED = 401;
        public const BAD_REQUEST = 400;
        public const METHOD_NOT_ALLOWED = 405;
        public const BAD_GATEWAY = 502;
        public const SERVICE_UNAVAILABLE = 503;
    }

    // Classe base per gli errori di database
    class DatabaseErrorCodes
    {
        public const UNKNOWN_DATABASE = 1049;
        public const TABLE_DOES_NOT_EXIST = 1146;
        public const SQL_SYNTAX_ERROR = 1064;
        public const CANT_CONNECT_TO_SERVER = 2002;
        public const ACCESS_DENIED = 1045;
    }

    // Classe base per gli errori di autenticazione
    class AuthErrorCodes
    {
        public const INVALID_PASSWORD = 'ERR_INVALID_PASSWORD';
        public const USER_NOT_FOUND = 'ERR_USER_NOT_FOUND';
        public const ACCOUNT_LOCKED = 'ERR_ACCOUNT_LOCKED';
        public const PERMISSION_DENIED = 'ERR_PERMISSION_DENIED';
    }

    // Classe base per gli errori di file e sistema
    class FileSystemErrorCodes
    {
        public const NO_SPACE_LEFT = 'ENOSPC';
        public const PERMISSION_DENIED = 'EACCES';
        public const NO_SUCH_FILE = 'ENOENT';
        public const FILE_EXISTS = 'EEXIST';
    }

    // Classe base per gli errori di validazione
    class ValidationErrorCodes
    {
        public const REQUIRED = 'VALIDATION_REQUIRED';
        public const INVALID_FORMAT = 'VALIDATION_INVALID_FORMAT';
        public const TOO_SHORT = 'VALIDATION_TOO_SHORT';
        public const TOO_LONG = 'VALIDATION_TOO_LONG';
    }

    // Classe base per gli errori di immagini
    class ImageErrorCodes
    {
        public const IMAGE_TOO_LARGE = 'IMAGE_TOO_LARGE';
        public const INVALID_IMAGE_FORMAT = 'INVALID_IMAGE_FORMAT';
        public const IMAGE_UPLOAD_FAILED = 'IMAGE_UPLOAD_FAILED';
        public const CORRUPT_IMAGE = 'CORRUPT_IMAGE';
    }

    // Classe base per gli errori di file
    class FileErrorCodes
    {
        public const FILE_TOO_LARGE = 'FILE_TOO_LARGE';
        public const INVALID_FILE_TYPE = 'INVALID_FILE_TYPE';
        public const FILE_UPLOAD_FAILED = 'FILE_UPLOAD_FAILED';
        public const FILE_READ_ERROR = 'FILE_READ_ERROR';
        public const FILE_WRITE_ERROR = 'FILE_WRITE_ERROR';
    }

    // Classe base per gli errori di CSV
    class CsvErrorCodes
    {
        public const CSV_FORMAT_ERROR = 'CSV_FORMAT_ERROR';
        public const CSV_HEADER_MISSING = 'CSV_HEADER_MISSING';
        public const CSV_ROW_COUNT_MISMATCH = 'CSV_ROW_COUNT_MISMATCH';
        public const CSV_PARSE_ERROR = 'CSV_PARSE_ERROR';
    }

    // Classe base per gli errori di JSON
    class JsonErrorCodes
    {
        public const JSON_PARSE_ERROR = 'JSON_PARSE_ERROR';
        public const INVALID_JSON_FORMAT = 'INVALID_JSON_FORMAT';
        public const JSON_SCHEMA_VALIDATION_ERROR = 'JSON_SCHEMA_VALIDATION_ERROR';
        public const MISSING_JSON_FIELD = 'MISSING_JSON_FIELD';
    }

    // Classe base per gli errori di Excel
    class ExcelErrorCodes
    {
        public const EXCEL_FORMAT_ERROR = 'EXCEL_FORMAT_ERROR';
        public const EXCEL_SHEET_NOT_FOUND = 'EXCEL_SHEET_NOT_FOUND';
        public const EXCEL_READ_ERROR = 'EXCEL_READ_ERROR';
        public const EXCEL_WRITE_ERROR = 'EXCEL_WRITE_ERROR';
    }

    // Classe base per gli errori di rete
    class NetworkErrorCodes
    {
        public const NETWORK_UNREACHABLE = 'NETWORK_UNREACHABLE';
        public const TIMEOUT = 'TIMEOUT';
        public const CONNECTION_REFUSED = 'CONNECTION_REFUSED';
        public const PROXY_ERROR = 'PROXY_ERROR';
    }

    // Classe base per gli errori di API
    class ApiErrorCodes
    {
        public const API_RATE_LIMIT_EXCEEDED = 'API_RATE_LIMIT_EXCEEDED';
        public const API_AUTH_ERROR = 'API_AUTH_ERROR';
        public const API_NOT_FOUND = 'API_NOT_FOUND';
        public const API_INVALID_RESPONSE = 'API_INVALID_RESPONSE';
    }

    // Classe base per gli errori di sessione e cache
    class SessionCacheErrorCodes
    {
        public const SESSION_EXPIRED = 'SESSION_EXPIRED';
        public const CACHE_MISS = 'CACHE_MISS';
        public const CACHE_WRITE_ERROR = 'CACHE_WRITE_ERROR';
        public const SESSION_WRITE_ERROR = 'SESSION_WRITE_ERROR';
    }

    // Classe base per gli errori di configurazione
    class ConfigErrorCodes
    {
        public const CONFIG_NOT_FOUND = 'CONFIG_NOT_FOUND';
        public const CONFIG_PARSE_ERROR = 'CONFIG_PARSE_ERROR';
        public const CONFIG_INVALID_VALUE = 'CONFIG_INVALID_VALUE';
    }

    // Classe base per gli errori di transazione
    class TransactionErrorCodes
    {
        public const TRANSACTION_FAILED = 'TRANSACTION_FAILED';
        public const TRANSACTION_TIMEOUT = 'TRANSACTION_TIMEOUT';
        public const TRANSACTION_CONFLICT = 'TRANSACTION_CONFLICT';
    }

    // Classe base per gli errori di integrazione
    class IntegrationErrorCodes
    {
        public const INTEGRATION_ERROR = 'INTEGRATION_ERROR';
        public const SERVICE_UNAVAILABLE = 'SERVICE_UNAVAILABLE';
        public const INTEGRATION_TIMEOUT = 'INTEGRATION_TIMEOUT';
    }

    // Classe base per gli errori di performance
    class PerformanceErrorCodes
    {
        public const HIGH_LOAD = 'HIGH_LOAD';
        public const MEMORY_LEAK = 'MEMORY_LEAK';
        public const RESOURCE_LIMIT_EXCEEDED = 'RESOURCE_LIMIT_EXCEEDED';
    }

    // Classe base per gli errori di sicurezza
    class SecurityErrorCodes
    {
        public const SECURITY_VULNERABILITY = 'SECURITY_VULNERABILITY';
        public const ENCRYPTION_ERROR = 'ENCRYPTION_ERROR';
        public const AUTHENTICATION_FAILURE = 'AUTHENTICATION_FAILURE';
    }

    // Classe base per gli errori di modulo o componente
    class ModuleErrorCodes
    {
        public const MODULE_NOT_FOUND = 'MODULE_NOT_FOUND';
        public const COMPONENT_INITIALIZATION_ERROR = 'COMPONENT_INITIALIZATION_ERROR';
        public const MODULE_LOAD_ERROR = 'MODULE_LOAD_ERROR';
    }

    // Classe base per gli errori di logica di applicazione
    class ApplicationLogicErrorCodes
    {
        public const INVALID_STATE = 'INVALID_STATE';
        public const OPERATION_NOT_SUPPORTED = 'OPERATION_NOT_SUPPORTED';
        public const CONCURRENT_MODIFICATION = 'CONCURRENT_MODIFICATION';
    }

    // Classe principale che estende tutte le altre
    class ErrorCodes extends HttpErrorCodes
    {
        use DatabaseErrorCodes, AuthErrorCodes, FileSystemErrorCodes, ValidationErrorCodes;
        use ImageErrorCodes, FileErrorCodes, CsvErrorCodes, JsonErrorCodes, ExcelErrorCodes;
        use NetworkErrorCodes, ApiErrorCodes, SessionCacheErrorCodes, ConfigErrorCodes;
        use TransactionErrorCodes, IntegrationErrorCodes, PerformanceErrorCodes, SecurityErrorCodes;
        use ModuleErrorCodes, ApplicationLogicErrorCodes;
    }

    /*
    // Esempio di utilizzo
    echo ErrorCodes::NOT_FOUND; // 404
    echo ErrorCodes::INVALID_PASSWORD; // ERR_INVALID_PASSWORD
    echo ErrorCodes::IMAGE_TOO_LARGE; // IMAGE_TOO_LARGE
    echo ErrorCodes::CSV_FORMAT_ERROR; // CSV_FORMAT_ERROR
    echo ErrorCodes::NETWORK_UNREACHABLE; // NETWORK_UNREACHABLE
    */
