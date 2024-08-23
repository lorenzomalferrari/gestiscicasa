<?php declare(strict_types=1);
    require_once("define/_define.php");
    require_once("functions/_functions.php");
    require_once("global/_global.php");
    require_once("session/_session_start.php");
    require_once(ROOT . 'app/model/log/PathAndFilesLog.php');
    require_once(ROOT . "app/model/table/Tables.php");
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . 'app/model/file/FileManager.php');
    require_once(ROOT . 'app/controller/formatter_validator/JSonValidator.php');
    require_once(ROOT . 'app/controller/lib/log/_log.php');
    require_once(ROOT . 'app/model/exception/CustomException.php');

    require_once(ROOT . 'app/controller/factory/ClassFactory.php');

    //creo connessione unica al DB
    require_once(ROOT . 'app/model/Database.php');
    //verifico o creo le cartelle dei logs
    require_once(ROOT . 'app/controller/lib/file/create_path_and_file.php');

    define('DB', new Database(
        CONFIG_ISTANCE->get('SERVERNAME_DB'),
        CONFIG_ISTANCE->get('USERNAME_DB'),
        CONFIG_ISTANCE->get('PASSWORD_DB'),
        CONFIG_ISTANCE->get('DBNAME')
    ));

    if ( !isset($flag_api) ) { $flag_api = false; }
    if( !$flag_api ) {
        DB->checkDatabaseVersion();//se non vengono generati errori, si prosegue

        require_once(ROOT . "app/controller/lib/functions/_visitedPath.php");
        saveVisitedPath();
    }
