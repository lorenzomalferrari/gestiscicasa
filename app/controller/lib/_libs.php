<?php

/**
 * File da richiamare ovunque, il quale conterrà
 * tutti i richiami dei file importati per la gestione del progetto:
 *
 * _config.php: parametri utili per la connessione al database e altri parametri di sicurezza
 * _db.php: parametri utili per la connessione al database
 * _def.php: Contiene le variabili GLOBALI CUSTOM, alcune dipendono dal file _config.php
 * _time.php: Ottengo time per gestire il refresh della cace con le lib css e js
 * _getYear.php: Ottengo l'anno attuale
 * _functions.php: funzioni utili per la gestione di controlli
 * _encryption.php: contiene le funzioni per criptare e descriptare testi
 * _get_set.php: sposta tutti i parametri da GET a SET
 * _getToken.php: genero un token univoco
 * _setSession.php: Configura la Sessione
 * _setStatiCRUD.php: interroga il DB e predisposne le costanti per la gestione delle operazioni CRUD
 */

    require_once("_config.php");
    require_once("_db.php");
    require_once("_def.php");
    require_once("_time.php");
    require_once("_getYear.php");
    require_once("_functions.php");
    require_once("_encryption.php");
    require_once("_get_set.php");
    require_once("_getToken.php");
    require_once("_setSession.php");
    //require_once("_setStatiCRUD.php");
?>
