<?php declare(strict_types=1);
    require_once("define/_define.php");
    require_once(ROOT . "app/controller/lib/functions/_functions.php");
    require_once(ROOT . "app/controller/lib/global/_global.php");
    require_once(ROOT . "app/controller/lib/session/_session_start.php");
    require_once(ROOT . 'app/model/log/PathAndFilesLog.php');
    require_once(ROOT . "app/model/table/Tables.php");
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . 'app/model/file/FileManager.php');
    require_once(ROOT . 'app/controller/formatter_validator/JSonValidator.php');
    require_once(ROOT . 'app/controller/formatter_validator/FormatterInputValidator.php');
    require_once(ROOT . 'app/controller/lib/log/_log.php');
    require_once(ROOT . 'app/model/exception/CustomException.php');

    //require classi per la criptazione e uso sicuro dei dati
    require_once(ROOT . "app/model/Crypto.php");
    require_once(ROOT . "app/model/SecureData.php");

    require_once(ROOT . 'app/controller/factory/ClassFactory.php');

    //verifico o creo le cartelle dei logs e del backup
    require_once(ROOT . 'app/model/file/FileManager.php');
    $fm = new FileManager();
    $paths = PathAndFilesLog::getAllPaths();
    // Esegui la creazione di directory e file tramite execute
    foreach ($paths['directories'] as $directory) {
        $fm->execute($directory, CONFIG['log']['extension']);
    }

    foreach ($paths['files'] as $file) {
        $fm->execute($file, CONFIG['log']['extension']);
    }

    //creo connessione unica al DB
    require_once(ROOT . 'app/model/Database.php');

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
