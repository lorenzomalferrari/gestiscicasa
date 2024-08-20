<?php declare(strict_types=1);
    session_unset();     // Elimina tutte le variabili di sessione
    session_destroy();   // Distruggi la sessione
    if((! isset($flagConfirm)) || $flagConfirm == FALSE ) {
        redirectPath("app/view/login.php?timeout=true");
    }
?>
