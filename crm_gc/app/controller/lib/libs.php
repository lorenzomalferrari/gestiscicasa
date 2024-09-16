<?php declare(strict_types=1);

    //prime definizioni statiche
    require_once("define/_define.php");
    // funzioni per il controllo e gestione del CRM
    require_once(ROOT . "app/controller/lib/functions/_functions.php");
    require_once(ROOT . "app/controller/lib/global/_global.php");
    require_once(ROOT . "app/controller/lib/session/_session_start.php");
    require_once(ROOT . 'app/controller/formatter_validator/JSonValidator.php');
    require_once(ROOT . 'app/controller/factory/ClassFactory.php');
    require_once(ROOT . 'app/controller/formatter_validator/FormatterInputValidator.php');
    require_once(ROOT . 'app/controller/lib/log/_log.php');
    // caricamento delle classi utili al corretto funzionamento del CRM
    require_once(ROOT . 'app/model/log/PathAndFilesLog.php');
    require_once(ROOT . "app/model/table/Tables.php");
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . 'app/model/token/TokenGenerator.php');
    require_once(ROOT . 'app/model/file/FileManager.php');
    require_once(ROOT . 'app/model/exception/CustomException.php');
    //require classi per la criptazione e uso sicuro dei dati
    require_once(ROOT . "app/model/Crypto.php");
    require_once(ROOT . "app/model/SecureData.php");

    try {
        define('UNIQ_TOKEN_V2', TokenGenerator::generate());
        //echo "Generated Token: $token\n";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }

    //verifico o creo le cartelle dei logs e del backup
    /*require_once(ROOT . 'app/model/file/FileManager.php');
    define('FM', new FileManager());
    $paths = PathAndFilesLog::getAllPaths();
    // Esegui la creazione di directory e file tramite execute
    foreach ($paths['directories'] as $directory) {
        FM->execute($directory, CONFIG['log']['extension']);
    }

    foreach ($paths['files'] as $file) {
        FM->execute($file, CONFIG['log']['extension']);
    }
    */
    //creo connessione unica al DB
    require_once(ROOT . 'app/model/Database.php');

    define('DB', new Database());

    if ( !isset($flag_api) ) { $flag_api = false; }
    if( !$flag_api ) {
        DB->checkDatabaseVersion();//se non vengono generati errori, si prosegue

        require_once(ROOT . "app/controller/lib/functions/_visitedPath.php");
        saveVisitedPath();
    }
