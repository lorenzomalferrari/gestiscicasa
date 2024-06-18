<?php declare(strict_types=1);

    ini_set('session.gc_maxlifetime', $config['session']['settings']['gc_maxlifetime']);  // default 900 - 15 minuti
    ini_set('session.cookie_lifetime', $config['session']['settings']['cookie_lifetime']);  // La sessione scade quando il browser viene chiuso
    session_start();

    $inactivityLimit = $config['session']['settings']['inactivityLimit'];// deafult come gc_maxlifetime

    print_r("------" . (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $inactivityLimit) . "<br>");

    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $inactivityLimit) {
        require_once("session_destroy.php");
    }

    $_SESSION['LAST_ACTIVITY'] = time();
?>
