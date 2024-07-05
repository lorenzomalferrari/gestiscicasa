<?php declare(strict_types=1);
    require_once(ROOT . "app/model/config/Config.php");

    if (isset($_GET) && is_array($_GET)) {
        $_POST = unisciArray($_POST, $_GET);
    }

    require_once("db/_db.php");

    /*
    print_r("<br>SERVERNAME_DB: " .  CONFIG_ISTANCE->get('SERVERNAME_DB'));
    print_r("<br>USERNAME_DB: " .  CONFIG_ISTANCE->get('USERNAME_DB'));
    print_r("<br>PASSWORD_DB: " .  CONFIG_ISTANCE->get('PASSWORD_DB'));
    print_r("<br>DBNAME: " .  CONFIG_ISTANCE->get('DBNAME'));
    print_r("<br>TABLEPREFIX: " .  CONFIG_ISTANCE->get('TABLEPREFIX'));
    print_r("<br>VERSTIME: " .  CONFIG_ISTANCE->get('VERSTIME'));
    print_r("<br>YEARNOW: " .  CONFIG_ISTANCE->get('YEARNOW'));
    print_r("<br>UNIQ_TOKEN: " .  CONFIG_ISTANCE->get('UNIQ_TOKEN'));
    */
