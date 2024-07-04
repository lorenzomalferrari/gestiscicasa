<?php declare(strict_types=1);
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);

	//ZONA REQUIRE PHP
	require_once("app/controller/lib/libs.php");

	$idUsername = $_SESSION[CONFIG['session']['keys']['IDUSER']];
	$username = $_SESSION[CONFIG['session']['keys']['USERNAME']];

	//print_r(15 . "<br>");
	//print_r(time() . "<br>");
	//print_r($_SESSION['LAST_ACTIVITY'] . "<br>");

	if (!checkUsernameAndId($username, $idUsername) && confrontaTimestamp(15, time(), $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']])) {
		//print_r('Location: ' . 'app/view/login.php');
		header('Location: ' . 'app/view/login.php');
	}
	else {
		//print_r('Location: ' . 'app/view/home.php');
		header('Location: ' . 'app/view/home.php');
	}
