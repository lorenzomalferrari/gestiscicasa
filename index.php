<?php
	//echo "Sono index.php";
	//ZONA REQUIRE PHP
	require_once("app/controller/lib/_libs.php");

	echo "<br>Sono index.php post _lib<br><br>";
	//echo "<br>" . ROOT;
	echo "<br>" . "app/model/session.php";
	//Resetto la SESSIONE per sicurezza
	require_once("app/model/session.php");
	//A seconda dello stato della sessione, porto utente al Login o alla Home
	//echo "Sono index.php";
	//echo "<br><br>" . ROOT;
	//echo "<br><br>" . PATH . "<br><br>";

	if (!checkUsernameAndId($username, $idUsername)) {
		echo('Location: ' . 'app/view/login.php');
		header('Location: ' . 'app/view/login.php');
	}
	else {
		echo('Location: ' . 'app/view/home.php');
		header('Location: ' . 'app/view/home.php');
	}
?>
