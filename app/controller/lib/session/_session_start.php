<?php declare(strict_types=1);

    ini_set('session.gc_maxlifetime', CONFIG['session']['settings']['gc_maxlifetime']);  // default 900 - 15 minuti
    ini_set('session.cookie_lifetime', CONFIG['session']['settings']['cookie_lifetime']);  // La sessione scade quando il browser viene chiuso
    session_start();

    $inactivityLimit = CONFIG['session']['settings']['inactivityLimit'];// deafult come gc_maxlifetime

    $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']] = isset($_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']]) && !empty($_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']]) ? $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']] : time();

    if (isset($_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']]) && (time() - $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']]) > $inactivityLimit) {
        print_r("Distruggo la sessione<br>");
        require_once("_session_destroy.php");
    }

    $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']] = time();
?>
