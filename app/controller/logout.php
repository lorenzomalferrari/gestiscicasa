<?php declare(strict_types=1);
    require_once("lib/libs.php");
    // Distruggi la sessione
    require_once(ROOT . "app/controller/lib/session/_session_destroy.php");
    // Reindirizza l'utente alla pagina di accesso o ad un'altra pagina
    header('Location: ' . PATH . 'app/view/login.php');
?>
