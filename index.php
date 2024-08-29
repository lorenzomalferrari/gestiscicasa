<?php declare(strict_types=1);
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);

	//ZONA REQUIRE PHP
	require_once("app/controller/lib/libs.php");

	$idUsername = $_SESSION[CONFIG['session']['keys']['IDUSER']] ?? "";
	$username = $_SESSION[CONFIG['session']['keys']['USERNAME']] ?? "";

	if (!validateUsernameAndId($username, $idUsername) && confrontaTimestamp(15, time(), $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']])) {
		redirectPath("app/view/login.php");
	}
	else {
		redirectPath("app/view/home.php");
	}
