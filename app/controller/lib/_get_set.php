<?php
    if (isset($_GET) && is_array($_GET)) {
        //$_POST = $_GET;
        $_POST = unisciArray($_POST, $_GET);
    }

    //print_r("<br><br><br>GET: ");
    //print_r($_GET);
	//print_r("<br>POST: ");
    //print_r($_POST);
    //print_r("<br><br><br>");
?>
