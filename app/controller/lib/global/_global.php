<?php declare(strict_types=1);
    require_once(ROOT . "app/model/config/Config.php");

    if (isset($_GET) && is_array($_GET)) {
        $_POST = unisciArray($_POST, $_GET);
    }

    /**
     * Recupero il time nel momento in cui carico la pagina:
     *      - utile per js e css;
     *      - controllo durata sessione (in implementazione)
     */
    $VERSTIME = time();

    /**
     *
     * Ottieni l'anno attuale
     *
     */
    $YEARNOW = date("Y");

    /**
     * Da migliorare, usando la classe Token che è in sviluppo
     */
    $UNIQ_TOKEN = uniqid();

    require_once("db/_db.php");

    /*
    print_r("<br>SERVERNAME_DB: " . $configIstance->get('SERVERNAME_DB'));
    print_r("<br>USERNAME_DB: " . $configIstance->get('USERNAME_DB'));
    print_r("<br>PASSWORD_DB: " . $configIstance->get('PASSWORD_DB'));
    print_r("<br>DBNAME: " . $configIstance->get('DBNAME'));
    print_r("<br>TABLEPREFIX: " . $configIstance->get('TABLEPREFIX'));
    print_r("<br>VERSTIME: " . $configIstance->get('VERSTIME'));
    print_r("<br>YEARNOW: " . $configIstance->get('YEARNOW'));
    print_r("<br>UNIQ_TOKEN: " . $configIstance->get('UNIQ_TOKEN'));
    */