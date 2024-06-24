<?php declare(strict_types=1);

    ini_set('session.gc_maxlifetime', $config['session']['settings']['gc_maxlifetime']);  // default 900 - 15 minuti
    ini_set('session.cookie_lifetime', $config['session']['settings']['cookie_lifetime']);  // La sessione scade quando il browser viene chiuso
    session_start();

    $inactivityLimit = $config['session']['settings']['inactivityLimit'];// deafult come gc_maxlifetime

    $_time = time();

    $_SESSION['LAST_ACTIVITY'] = isset($_SESSION['LAST_ACTIVITY']) && !empty($_SESSION['LAST_ACTIVITY']) ? $_SESSION['LAST_ACTIVITY'] : time();

    /*
    print_r("<br>Isset: " .  isset($_SESSION['LAST_ACTIVITY']));
    print_r("<br>time: " .  ($_time));
    print_r("<br>LAST_ACTIVITY: " .  (($_SESSION['LAST_ACTIVITY'])));
    print_r("<br>risultato: " .  (($_time - $_SESSION['LAST_ACTIVITY'])) );
    print_r("<br>Controllo se devo distruggere la sessione ------" . (isset($_SESSION['LAST_ACTIVITY']) && ($_time - $_SESSION['LAST_ACTIVITY']) > $inactivityLimit) . "-----<br>");
    */

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $inactivityLimit) {
        print_r("Distruggo la sessione<br>");
        require_once("session_destroy.php");
    }

    $_SESSION['LAST_ACTIVITY'] = time();
?>
