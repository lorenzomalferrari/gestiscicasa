<?php declare(strict_types=1);
    print_r("<br><br><br><br><br>Sono in _global.php");
    global $SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME, $TABLEPREFIX, $VERSTIME, $YEARNOW, $UNIQ_TOKEN;

    print_r("SERVERNAME: " . $SERVERNAME);
    print_r("USERNAME: " . $USERNAME);
    print_r("PASSWORD: " . $PASSWORD);
    print_r("DBNAME: " . $DBNAME);
    print_r("TABLEPREFIX: " . $TABLEPREFIX);
    print_r("VERSTIME: " . $VERSTIME);
    print_r("YEARNOW: " . $YEARNOW);
    print_r("UNIQ_TOKEN: " . $UNIQ_TOKEN);

    if (isset($_GET) && is_array($_GET)) {
        $_POST = unisciArray($_POST, $_GET);
    }

    require_once("db/_db.php");

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

    print_r("SERVERNAME: " . $SERVERNAME);
    print_r("USERNAME: " . $USERNAME);
    print_r("PASSWORD: " . $PASSWORD);
    print_r("DBNAME: " . $DBNAME);
    print_r("TABLEPREFIX: " . $TABLEPREFIX);
    print_r("VERSTIME: " . $VERSTIME);
    print_r("YEARNOW: " . $YEARNOW);
    print_r("UNIQ_TOKEN: " . $UNIQ_TOKEN);
