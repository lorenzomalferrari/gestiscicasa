<?php declare(strict_types=1);

    /**
    * [VERSIONE 1]
    * Creazione di un token univoco usando semplicemente la funzione nativa di php
    */
    define('UNIQ_TOKEN', uniqid());

    /**
     * [PER VERSIONE 2]
     * Parametri necessari per lo sviluppo della nuova versione del token da usare all'interno del CRM
     *
     * - params:
     *      Contiene i valori dinamici da essere usati, possono esserne usati diversi
     * - config:
     *      Contiene i parametri necessari per la generazione del token
     */
    define('TOKEN_PARAMS', [
        'params' => [
            CONFIG['site']['name'],
            CONFIG['site']['version'],
            CONFIG['db']['tablePrefix'],
            CONFIG['language']['it'],
            CONFIG['language']['en'],
        ],
        'config' => [
            'length' => random_int(64, 512), // Lunghezza desiderata del token
            'algorithm' => HASH_ALGORITHMS['sha512']['value'], // Algoritmo di hashing da utilizzare
            'splitLength' => 4, // Lunghezza dei pezzi in cui suddividere ciascun valore
            'randomPartLength' => random_int(128, 256) // Lunghezza della parte casuale in byte (default è 16 se non specificato)
        ],
    ]);
