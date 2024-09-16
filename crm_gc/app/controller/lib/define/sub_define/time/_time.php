<?php declare(strict_types=1);

    /**
     * Recupero il time nel momento in cui carico la pagina:
     * - utile per js e css;
     * - controllo durata sessione (in implementazione)
     */
    define('VERSTIME', time());

    /**
    *
    * Anno, Mese e Giorno salvati in delle definizioni
    *
    */
    define('YEARNOW', date('Y'));
    define('MONTH', date('m'));
    define('DAY', date('d'));
    define('HOUR_MINUTE',date('H:i'));
