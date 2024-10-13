<?php declare(strict_types=1);

    define("HTTP_HOST", $_SERVER["HTTP_HOST"]);
    //echo "<br>HTTP_HOST:" . HTTP_HOST;
    define("PROTOCOL", $_SERVER["REQUEST_SCHEME"]); //es. http vs https
    //echo "<br>PROTOCOL:" . PROTOCOL;
    define("EMAIL_SERVER_ADMIN", $_SERVER["SERVER_ADMIN"] . "/");
    //echo "<br>EMAIL_SERVER_ADMIN_" . EMAIL_SERVER_ADMIN;
    define("DOMINIO", $_SERVER["SERVER_NAME"]); //es. gestiscicasa.it
    //echo "<br>DOMINIO:" . DOMINIO;
    define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/" . CONFIG['site']['main_path'] . "/");
    //echo "<br>ROOT:" . ROOT;
    define("PATH", PROTOCOL . "://" . DOMINIO . "/" . CONFIG['site']['main_path'] . "/");
    //echo "<br>PATH:" . PATH;
