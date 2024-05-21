<?php
    // Verifica se la sessione è già stata avviata
    if (!isset($_SESSION)) {
        //print_r("   sono dentro, devo pulire e riniziare   ---");
        // Pulisci tutte le variabili di sessione
        session_unset();
        // Avvia la sessione
        session_start();
        $_SESSION = array();//al momento funziona solo facendo così
        //print_r($_SESSION);
    }else{
        $_SESSION["IDUSER_SE"] = $row["id"];
        $_SESSION["USER_SE"] = $row["username"];
        $_SESSION["PASSWORD_SE"] = $row["password"];
        $_SESSION["EMAIL_SE"] = $row["email"];
    }

    //print_r($_SESSION);
?>
