<?php declare(strict_types=1);

    /**
     * File da richiamare ovunque, il quale conterrà
     * tutti i richiami dei file importati per la gestione del progetto:
     *      _define.php: Contiene le definizioni utili per la ROOT e PATH e CONFIG
     *      _functions.php: Funzioni utili per la gestione di controlli
     *      _create_directories.php: Recupera una funzione per creare e gestire file e cartelle
     *      _globals.php: Definisce variabili GLOBALI utili ad esempio al DB
     *      __session_start.php: Gestisce la sessione
     *      Tables.php: Per ogni tabella a DB esiste una classe con costanti per richiamare nome della tabella e i campi, evitando errori di battitura
     *      Database.php: Uso della lib per la connessione al DB
     *      Log.php: Uso della lib per la gestione di tutti i Log del caso
     *      CustomException.php: Uso della lib per la gesione custom delle eccezioni
     */
    require_once("define/_define.php");
    require_once("functions/_functions.php");
    require_once("global/_global.php");
    require_once("session/_session_start.php");
    require_once(ROOT . 'app/model/log/PathAndFilesLog.php');
    require_once(ROOT . "app/model/table/Tables.php");
    require_once(ROOT . 'app/model/file/FileManager.php');
    require_once(ROOT . 'app/controller/lib/log/_log.php');
    require_once(ROOT . 'app/model/exception/CustomException.php');
    //creo connessione unica al DB
    require_once(ROOT . 'app/model/Database.php');

    //verifico o creo le cartelle dei logs
    $basePath = CONFIG['log']['baseFolder'];
    $extensions = CONFIG['log']['extension'];

    $directories = [
        PathAndFilesLog::FOLDER_BASE,
        PathAndFilesLog::FOLDER_SUB_BASE,
        PathAndFilesLog::FOLDER_SUB_BASE_BACKUP,
        //creo cartella file e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_FILE,
        PathAndFilesLog::FOLDER_FILE_ERROR,
        PathAndFilesLog::FOLDER_FILE_LOG,
        //creo cartella error e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_ERROR,
        PathAndFilesLog::FOLDER_ERROR_ERROR,
        PathAndFilesLog::FOLDER_ERROR_LOG,
        //creo cartella database e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_DATABASE,
        PathAndFilesLog::FOLDER_DATABASE_ERROR,
        PathAndFilesLog::FOLDER_DATABASE_LOG,
        //creo cartella id e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_IP,
        PathAndFilesLog::FOLDER_IP_ERROR,
        PathAndFilesLog::FOLDER_IP_LOG,
        //creo cartella api e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_API,
        PathAndFilesLog::FOLDER_API_ERROR,
        PathAndFilesLog::FOLDER_API_LOG,
        //creo cartella performance e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_PERFORMANCE,
        PathAndFilesLog::FOLDER_PERFORMANCE_ERROR,
        PathAndFilesLog::FOLDER_PERFORMANCE_LOG,
        //creo cartella email e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_EMAIL,
        PathAndFilesLog::FOLDER_EMAIL_ERROR,
        PathAndFilesLog::FOLDER_EMAIL_LOG,
        //creo cartella user, al momento solo questa, post login faccio la sotto carte con id e poi le sotto cartelle error e log
        PathAndFilesLog::FOLDER_USER,
    ];

    $filesToCreate = [

        PathAndFilesLog::PATH_FILE_ERROR,
        PathAndFilesLog::PATH_FILE_LOG,

        PathAndFilesLog::PATH_ERROR_ERROR,
        PathAndFilesLog::PATH_ERROR_LOG,

        PathAndFilesLog::PATH_DATABASE_ERROR,
        PathAndFilesLog::PATH_DATABASE_LOG,

        PathAndFilesLog::PATH_IP_ERROR,
        PathAndFilesLog::PATH_IP_LOG,

        PathAndFilesLog::PATH_API_ERROR,
        PathAndFilesLog::PATH_API_LOG,

        PathAndFilesLog::PATH_PERFORMANCE_ERROR,
        PathAndFilesLog::PATH_PERFORMANCE_LOG,

        PathAndFilesLog::PATH_EMAIL_ERROR,
        PathAndFilesLog::PATH_EMAIL_LOG,

    ];

    FileManager::createDirectories($directories, $filesToCreate);

    define('DB', new Database(
        CONFIG_ISTANCE->get('SERVERNAME_DB'),
        CONFIG_ISTANCE->get('USERNAME_DB'),
        CONFIG_ISTANCE->get('PASSWORD_DB'),
        CONFIG_ISTANCE->get('DBNAME')
    ));

    DB->checkDatabaseVersion();//se non vengono generati errori, si prosegue
