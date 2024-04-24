<?php
	$vers = time();

	if( isset($_GET) && is_array($_GET)){
		$_POST = $_GET;
	}

	//print_r("<br>SESSION: " . $_SESSION);
	//print_r("<br>SERVER: " . $_SERVER);
	//print_r("<br>GET: " . $_GET);
	//print_r("<br>POST: " . $_POST);
	//print_r("<br>Sono in index.php, adesso vedremo come andrò");

	// Avvia una sessione se non è già stata avviata
	if (!isset($_SESSION)) {
		session_start();
		//andare in login.php
		require_once('app/view/login.php');
	}
	else {
		//sono loggato quindi andare in
		require_once('app/view/home.php');
	}
?>
