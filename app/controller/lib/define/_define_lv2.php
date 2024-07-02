<?php declare(strict_types=1);
    /**
     * File dove definisco alcune VARIABILI GLOBALI CUSTOM
     * Livello 2: Definizioni di variabili che sfruttano altri parametri
     */

    // Chiave per la crittografia composta da voci interne
    //VEDERE SE AGGIUNGERE ULTERIORI CAMPI
    define(
        'CRYPTO_KEY',
        (
            $config['db']['tablePrefix'] .
            $config['securityConfig']['key']
        )
    );//es. lmgc_1e2wfvdfyku65yt4efbntmyj
    //echo "<br>CRYPTO_KEY:" . CRYPTO_KEY;
?>
