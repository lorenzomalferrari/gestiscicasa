<?php declare(strict_types=1);
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);

	//ZONA REQUIRE PHP
	require_once("app/controller/lib/libs.php");

	print_r("<br><br><br><br>");
	print_r($_SESSION);

	$idUsername = $_SESSION[CONFIG['session']['keys']['IDUSER']] ?? "";
	$username = $_SESSION[CONFIG['session']['keys']['USERNAME']] ?? "";





	$message = "Log generico, test della classe base Log.php";
	$action = 1;
	$data = "{ json composto da dati, presunti dati - TEST }";
	$beforeState = null;
	$afterState = null;

	$testLog = new DatabaseLog($message, $action, $data, $beforeState, $afterState, null, null, DB->toString());
	$testLog->writeToFile();

	$fileManager = new FileManager();
	print_r("<br><br>");
	print_r($testLog->getMessage());
	print_r("<br><br>");
	print_r($testLog->getAction());
	print_r("<br><br>");
	print_r($testLog->getData());
	print_r("<br><br><br><br>");
	print_r($fileManager->readFromFile(ROOT .  PathAndFilesLog::PATH_DATABASE_ERROR));








	if (!checkUsernameAndId($username, $idUsername) && confrontaTimestamp(15, time(), $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']])) {
		//creare un log su DB, se vado in login.php non c'è user quindi IpLog
		// Esempio di utilizzo
		$path_log = "";

		/*$message = "";
		$action = "";
		$data = "";
		$beforeState = "";
		$afterState = "";
		$customException  = null;
		$databaseConnectionInfo = DB;
		$ipAddress = $_SERVER['HTTP_CLIENT_IP'];
		$userId = $idUsername;

		$userLog = new UserLog($message, $action, $data, $beforeState, $afterState, $customException, $databaseConnectionInfo, $ipAddress, $userId);
		$userLog->writeToFile();*/

		print_r("app/view/login.php");
		//header('Location: ' . 'app/view/login.php');
	}
	else {
		//creare un log su DB, se vado in home, il log da usare è UserLog
		print_r("app/view/home.php");
		//header('Location: ' . ROOT . 'app/view/home.php');
	}
