<?php
    $vers = time();

    if( isset($_GET) && is_array($_GET)){
        $_POST = $_GET;
    }

    require_once('app/controller/login.php');
?>