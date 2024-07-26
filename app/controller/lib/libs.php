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
    require_once(ROOT . 'app/controller/lib/file/create_path_and_file.php');

    define('DB', new Database(
        CONFIG_ISTANCE->get('SERVERNAME_DB'),
        CONFIG_ISTANCE->get('USERNAME_DB'),
        CONFIG_ISTANCE->get('PASSWORD_DB'),
        CONFIG_ISTANCE->get('DBNAME')
    ));

    DB->checkDatabaseVersion();//se non vengono generati errori, si prosegue

    require_once(ROOT . "app/controller/lib/functions/_visitedPath.php");
    saveVisitedPath();
