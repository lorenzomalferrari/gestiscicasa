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
    require_once("functions/_create_directories.php");
    require_once("global/_global.php");

    require_once("session/_session_start.php");

    require_once(ROOT . "app/model/table/Tables.php");

    require_once(ROOT . 'app/model/file/FileManager.php');

    require_once(ROOT . 'app/controller/lib/log/_log.php');
    require_once(ROOT . 'app/model/exception/CustomException.php');

    //creo connessione unica al DB
    require_once(ROOT . 'app/model/Database.php');

    define('DB', new Database(
        CONFIG_ISTANCE->get('SERVERNAME_DB'),
        CONFIG_ISTANCE->get('USERNAME_DB'),
        CONFIG_ISTANCE->get('PASSWORD_DB'),
        CONFIG_ISTANCE->get('DBNAME')
    ));

    //verifico o creo le cartelle dei logs
    $basePath = CONFIG['log']['path'];
	$extensions = CONFIG['log']['extension'];

    $directories = [
        $basePath,
        //creo cartella file e le due sotto cartelle errors e gen
        $basePath . "/" . CONFIG['log']['nome']['file'],
        $basePath . "/" . CONFIG['log']['nome']['file']. "/" . CONFIG['log']['sub_path'][0],
        $basePath . "/" . CONFIG['log']['nome']['file']. "/" . CONFIG['log']['sub_path'][1],

        //creo cartella database e le due sotto cartelle errors e gen
        $basePath . "/" . CONFIG['log']['nome']['database'],
        $basePath . "/" . CONFIG['log']['nome']['database']. "/" . CONFIG['log']['sub_path'][0],
        $basePath . "/" . CONFIG['log']['nome']['database']. "/" . CONFIG['log']['sub_path'][1],

        //creo cartella id e le due sotto cartelle errors e gen
        $basePath . "/" . CONFIG['log']['nome']['id'],
        $basePath . "/" . CONFIG['log']['nome']['id']. "/" . CONFIG['log']['sub_path'][0],
        $basePath . "/" . CONFIG['log']['nome']['id']. "/" . CONFIG['log']['sub_path'][1],

        //creo cartella api e le due sotto cartelle errors e gen
        $basePath . "/" . CONFIG['log']['nome']['api'],
        $basePath . "/" . CONFIG['log']['nome']['api']. "/" . CONFIG['log']['sub_path'][0],
        $basePath . "/" . CONFIG['log']['nome']['api']. "/" . CONFIG['log']['sub_path'][1],

        //creo cartella performance e le due sotto cartelle errors e gen
        $basePath . "/" . CONFIG['log']['nome']['performance'],
        $basePath . "/" . CONFIG['log']['nome']['performance']. "/" . CONFIG['log']['sub_path'][0],
        $basePath . "/" . CONFIG['log']['nome']['performance']. "/" . CONFIG['log']['sub_path'][1],

        //creo cartella user, al momento solo questa, post login faccio la sotto carte con id e poi le sotto cartelle error e log
        $basePath. "/" . CONFIG['log']['nome']['user'],
    ];

    $filesToCreate = [
        //creo i files per le cartelle
        $basePath . "/" . CONFIG['log']['nome']['file'] . "/" . CONFIG['log']['sub_path'][0] . "/" . YEARNOW . MONTH . DAY . "_error_log" . $extensions,
        $basePath . "/" . CONFIG['log']['nome']['file'] . "/" . CONFIG['log']['sub_path'][1] . "/" . YEARNOW . MONTH . DAY . "_info_log" . $extensions,

        $basePath . "/" . CONFIG['log']['nome']['database'] . "/" . CONFIG['log']['sub_path'][0] . "/" . YEARNOW . MONTH . DAY . "_error_log" . $extensions,
        $basePath . "/" . CONFIG['log']['nome']['database'] . "/" . CONFIG['log']['sub_path'][1] . "/" . YEARNOW . MONTH . DAY . "_info_log" . $extensions,

        $basePath . "/" . CONFIG['log']['nome']['id'] . "/" . CONFIG['log']['sub_path'][0] . "/" . YEARNOW . MONTH . DAY . "_error_log" . $extensions,
        $basePath . "/" . CONFIG['log']['nome']['id'] . "/" . CONFIG['log']['sub_path'][1] . "/" . YEARNOW . MONTH . DAY . "_info_log" . $extensions,

        $basePath . "/" . CONFIG['log']['nome']['api'] . "/" . CONFIG['log']['sub_path'][0] . "/" . YEARNOW . MONTH . DAY . "_error_log" . $extensions,
        $basePath . "/" . CONFIG['log']['nome']['api'] . "/" . CONFIG['log']['sub_path'][1] . "/" . YEARNOW . MONTH . DAY . "_info_log" . $extensions,

        $basePath . "/" . CONFIG['log']['nome']['performance'] . "/" . CONFIG['log']['sub_path'][0] . "/" . YEARNOW . MONTH . DAY . "_error_log" . $extensions,
        $basePath . "/" . CONFIG['log']['nome']['performance'] . "/" . CONFIG['log']['sub_path'][1] . "/" . YEARNOW . MONTH . DAY . "_info_log" . $extensions,
    ];

    createDirectories($directories, $filesToCreate);

    DB->checkDatabaseVersion();//se non vengono generati errori, si prosegue
