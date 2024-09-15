<?php declare(strict_types=1);

    /**
    * Da migliorare, usando la classe Token che è in sviluppo
    */
    define('UNIQ_TOKEN', uniqid());

    define('UNIQ_TOKEN_v2', [
        'params' => [
            CONFIG['site']['name'],
            CONFIG['site']['version'],
            CONFIG['db']['tablePrefix'],
            CONFIG['language']['it'],
            CONFIG['language']['en'],
        ],
        'config' => [
            'length' => 32, // Lunghezza desiderata del token
            'algorithm' => HASH_ALGORITHMS['sha512']['sha512'], // Algoritmo di hashing da utilizzare
            'splitLength' => 4, // Lunghezza dei pezzi in cui suddividere ciascun valore
            'randomPartLength' => 16 // Lunghezza della parte casuale in byte (default è 16 se non specificato)
        ],
    ]);
