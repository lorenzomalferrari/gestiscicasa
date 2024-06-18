<?php declare(strict_types=1);
    /**
     * File dove definisco alcune VARIABILI GLOBALI CUSTOM
     */

    define("HTTP_HOST", $_SERVER["HTTP_HOST"]);
    //echo "<br>HTTP_HOST:" . HTTP_HOST;
    define("PROTOCOL", $_SERVER["REQUEST_SCHEME"]);//es. http vs https
    //echo "<br>PROTOCOL:" . PROTOCOL;
    define("EMAIL_SERVER_ADMIN", $_SERVER["SERVER_ADMIN"] . "/");
    //echo "<br>EMAIL_SERVER_ADMIN_" . EMAIL_SERVER_ADMIN;
    define("DOMINIO", $_SERVER["SERVER_NAME"]); //es. gestiscicasa.it
    //echo "<br>DOMINIO:" . DOMINIO;
    define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
    //echo "<br>ROOT:" . ROOT;
    define("PATH", PROTOCOL ."://" . DOMINIO . "/");
    //echo "<br>PATH:" . PATH;
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
