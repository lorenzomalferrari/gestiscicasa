<?php

    /**
     * File da richiamare ovunque, il quale conterrà
     * tutti i richiami dei file importati per la gestione del progetto:
     *
     * _config.php: parametri utili per la connessione al database e altri parametri di sicurezza
     * _functions.php: funzioni utili per la gestione di controlli
     * Encryption.php: contiene le funzioni per criptare e descriptare testi
     */

    require_once("_config.php");
    require_once("_functions.php");
    require_once("Encryption.php");
?>
