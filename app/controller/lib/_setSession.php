<?php

    // Verifica se la sessione è già stata avviata
    if (!isset($_SESSION)) {
        // Avvia la sessione
        session_start();
    }

    $_SESSION["IDUSER_SE"] = $row["id"];
    $_SESSION["USER_SE"] = $row["username"];
    $_SESSION["PASSWORD_SE"] = $row["password"];
    $_SESSION["EMAIL_SE"] = $row["email"];
?>
