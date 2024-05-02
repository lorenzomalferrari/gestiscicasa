<?php
    //echo "Sono _def.php";
    /**
     * File che contiene tutte le VARIABILI GLOBALI CUSTOM
     */

    define("HTTP_HOST", $_SERVER["HTTP_HOST"]);//es.
    define("PROTOCOL", $_SERVER["REQUEST_SCHEME"]);//es. http vs https
    define("EMAIL_SERVER_ADMIN", $_SERVER["SERVER_ADMIN"] . "/");//es.
    define("DOMINIO", $_SERVER["SERVER_NAME"]); //es.
    define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");//es.
    define("PATH", PROTOCOL ."://" . DOMINIO . "/");//es.
    // Chiave per la crittografia
    define('CRYPTO_KEY', ($config['db']['tablePrefix'] . $config['securityConfig']['key']));//es. lmgc_1e2wfvdfyku65yt4efbntmyj

    //echo "<br>HTTP_HOST:" . HTTP_HOST;
    //echo "<br>PROTOCOL:" . PROTOCOL;
    //echo "<br>EMAIL_SERVER_ADMIN_" . EMAIL_SERVER_ADMIN;
    //echo "<br>DOMINIO:" . DOMINIO;
    //echo "<br>PATH:" . PATH;
    //echo "<br>ROOT:" . ROOT;
    //echo "<br>CRYPTO_KEY:" . CRYPTO_KEY;
?>
