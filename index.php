<?php
    $vers = time();//predispongo variabile per il timing

    //se $_GET è settata ed è un array lo copio in $_POST, necessario per la personalizzazione del gestionale
    if( isset($_GET) && is_array($_GET)){
        $_POST = $_GET;
    }

    //controllo sessione
    //se sono già loggato vado in home

    //se non sono già loggato o ho perso la sessione vado in login
    //require_once('app/controller/login.php');
    require_once('app/view/login.html');
?>