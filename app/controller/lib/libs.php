<?php declare(strict_types=1);
    /**
     * File da richiamare ovunque, il quale conterrà
     * tutti i richiami dei file importati per la gestione del progetto:
     *
     *      _define.php: Contiene le definizioni utili per la ROOT e PATH e CONFIG
     *      _functions.php: Funzioni utili per la gestione di controlli
     *      _globals.php: Definisce variabili GLOBALI utili ad esempio al DB
     *      __session_start.php: Gestisce la sessione
     *
     *      Tables.php: Per ogni tabella a DB esiste una classe con costanti per richiamare nome della tabella e i campi, evitando errori di battitura
     *
     */
    require_once("define/_define.php");
    require_once("functions/_functions.php");
    require_once("functions/_create_directories.php");
    require_once("global/_global.php");

    require_once("session/_session_start.php");

    require_once(ROOT . "app/model/table/Tables.php");

    //creo connessione unica al DB
    require_once(ROOT . 'app/model/Database.php');

    define('DB', new Database(
         CONFIG_ISTANCE->get('SERVERNAME_DB'),
         CONFIG_ISTANCE->get('USERNAME_DB'),
         CONFIG_ISTANCE->get('PASSWORD_DB'),
         CONFIG_ISTANCE->get('DBNAME')
    ));

    require_once(ROOT . 'app/model/log/Log.php');

    //verifico o creo le cartelle dei logs
    createDirectories(CONFIG);

    DB->checkDatabaseVersion();//se non vengono generati errori, si prosegue

?>
