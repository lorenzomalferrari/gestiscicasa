<?php declare(strict_types=1);
    session_unset();     // Elimina tutte le variabili di sessione
    session_destroy();   // Distruggi la sessione
    if((! isset($flagConfirm)) || $flagConfirm == FALSE ) {
        header("Location: " . PATH . "app/view/login.php?timeout=true");  // Reindirizza alla pagina di login con un messaggio di timeout
        exit();
    }
?>
