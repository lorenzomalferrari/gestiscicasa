<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	//ZONA REQUIRE PHP
	require_once("app/controller/lib/_libs.php");
	require_once("app/model/session.php");

	if (!checkUsernameAndId($username, $idUsername)) {
		header('Location: ' . 'app/view/login.php');
	}
	else {
		header('Location: ' . 'app/view/home.php');
	}
?>
