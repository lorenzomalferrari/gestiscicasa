<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	//ZONA REQUIRE PHP
	require_once("app/controller/lib/_libs.php");
	//require_once("app/model/session.php");

	$idUsername = $_SESSION[$config['session']['keys'][0]];
	$username = $_SESSION[$config['session']['keys'][1]];

	if (!checkUsernameAndId($username, $idUsername)) {
		//print_r('Location: ' . 'app/view/login.php');
		header('Location: ' . 'app/view/login.php');
	}
	else {
		print_r('Location: ' . 'app/view/home.php');
		//header('Location: ' . 'app/view/login.php');
	}
?>
