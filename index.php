<?php
	$vers = time();

	print_r("SESSION: " . $_SESSION);
	print_r("SERVER: " . $_SERVER);

	// Avvia una sessione se non è già stata avviata
	if (!isset($_SESSION)) {
		session_start();
		//andare in login.php
		require_once('app/controller/login.php');
	}
	else {

		if( isset($_GET) && is_array($_GET)){
			$_POST = $_GET;
		}
		//sono loggato quindi andare in
		require_once('app/controller/home.php');
	}
?>