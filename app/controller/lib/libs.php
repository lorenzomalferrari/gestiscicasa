<?php declare(strict_types=1);
    /**
     * File da richiamare ovunque, il quale conterrà
     * tutti i richiami dei file importati per la gestione del progetto:
     *
     *      _define_lv1.php: Contiene le definizioni utili per la ROOT e PATH
     *      _config.php: Parametri utili per la connessione al database e altri parametri di sicurezza
     *      _define_lv2.php: Contiene ulteriori definizioni, usando info provenienti da _config.php
     *      _functions.php: Funzioni utili per la gestione di controlli
     *      _globals.php: Definisce variabili GLOBALI utili ad esempio al DB
     *      __session_start.php: Gestisce la sessione
     *
     *      Tables.php: Per ogni tabella a DB esiste una classe con costanti per richiamare nome della tabella e i campi, evitando errori di battitura
     *
     */
    require_once("define/_define_lv1.php");
    require_once("config/_config.php");
    require_once("define/_define_lv2.php");
    require_once("functions/_functions.php");
    require_once("global/_global.php");

    require_once("session/_session_start.php");

    require_once(ROOT . "app/model/table/Tables.php");
    require_once(ROOT . 'app/model/log/log.php');
?>
