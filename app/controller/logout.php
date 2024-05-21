<?php
    // Pulisci tutte le variabili di sessione
    session_unset();

    // Distruggi la sessione
    session_destroy();

    // Reindirizza l'utente alla pagina di accesso o ad un'altra pagina
    header("Location: login.php");
?>
