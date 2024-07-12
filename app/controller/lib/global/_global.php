<?php declare(strict_types=1);
    require_once(ROOT . "app/model/config/Config.php");

    if (isset($_GET) && is_array($_GET)) {
        $_POST = unisciArray($_POST, $_GET);
    }

    require_once("db/_db.php");
