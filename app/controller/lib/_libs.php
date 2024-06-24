<?php declare(strict_types=1);
    /**
    * File da richiamare ovunque, il quale conterrà
    * tutti i richiami dei file importati per la gestione del progetto:
    *
    *   _config.php: Parametri utili per la connessione al database e altri parametri di sicurezza
    *   _db.php: Parametri utili per la connessione al database
    *   _def.php: Contiene le variabili GLOBALI CUSTOM, alcune dipendono dal file _config.php
    *   _time.php: Ottengo time per gestire il refresh della cace con le lib css e js
    *   _getYear.php: Ottengo l'anno attuale
    *   _functions.php: Funzioni utili per la gestione di controlli
    *   _encryption.php: Contiene le funzioni per criptare e descriptare testi
    *   _get_set.php: Sposta tutti i parametri da GET a SET, sarà utile per mod e personalizzazioni
    *   _getToken.php: Genero un token univoco (in lavorazione vers 2 potenziata)
    *   _setSession.php: Configura la Sessione (problemi da risolvere)
    *   _setStatiCRUD.php: Interroga il DB e predisposne le costanti per la gestione delle operazioni CRUD
    *   -> potrebbe essere utile creare sotto cartella che oltre a StatiCRUD setta altre informazioni utili e necessarie 
    *   (da pensare per bene, infatti al momento il file è commentato)
    *   Tables.php: Ogni tabella è rappresentata da una classe con costanti che rappresentano le colonne.
    *       Usarle per evitare errori di battitura
    *       Nel caso si rinominasse una colonna si cambierà in un posto solo
    */

    require_once(ROOT . "app/controller/lib/_config.php");
    require_once(ROOT . "app/controller/lib/_db.php");
    require_once(ROOT . "app/controller/lib/_def.php");
    require_once(ROOT . "app/controller/lib/_time.php");
    require_once(ROOT . "app/controller/lib/_getYear.php");
    require_once(ROOT . "app/controller/lib/_functions.php");
    require_once(ROOT . "app/controller/lib/_encryption.php");
    require_once(ROOT . "app/controller/lib/_get_set.php");
    require_once(ROOT . "app/controller/lib/_getToken.php");
    require_once(ROOT . "app/controller/lib/session/_setSession.php");
    //require_once("_setStatiCRUD.php");
    require_once(ROOT . "app/model/table/Tables.php");
?>
