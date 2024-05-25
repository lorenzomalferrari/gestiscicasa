<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	//ZONA REQUIRE PHP
	require_once("app/controller/lib/_libs.php");
	//require_once("app/model/session.php");

	$username = $_SESSION["USER_SE"];
	$idUsername = $_SESSION["IDUSER_SE"];

	if (!checkUsernameAndId($username, $idUsername)) {
		print_r('Location: ' . 'app/view/login.php');
		//header('Location: ' . 'app/view/login.php');
	}
	else {
		print_r('Location: ' . 'app/view/home.php');
		//header('Location: ' . 'app/view/login.php');
	}
?>
