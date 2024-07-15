<?php declare(strict_types=1);
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);

	//ZONA REQUIRE PHP
	require_once("app/controller/lib/libs.php");

	$idUsername = $_SESSION[CONFIG['session']['keys']['IDUSER']];
	$username = $_SESSION[CONFIG['session']['keys']['USERNAME']];

	if (!checkUsernameAndId($username, $idUsername) && confrontaTimestamp(15, time(), $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']])) {
		//creare un log su DB, se vado in login.php non c'è user quindi IpLog
		// Esempio di utilizzo
		$path_log = "";

		$message = "";
		$action = "";
		$data = "";
		$beforeState = "";
		$afterState = "";
		$customException  = null;
		$databaseConnectionInfo = DB;
		$ipAddress = $_SERVER['HTTP_CLIENT_IP'];
		$userId = $idUsername;

		$userLog = new UserLog($message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress, $userId);
		$userLog->writeToFile();

		header('Location: ' . 'app/view/login.php');
	}
	else {
		//creare un log su DB, se vado in home, il log da usare è UserLog
		header('Location: ' . ROOT . 'app/view/home.php');
	}
