<?php declare(strict_types=1);
	require_once('lib/libs.php');
	//recuperare id dell' utente, iterrogare il database e recuperare le informazioni da mostrare a video negli appositi spazi
	$idUtente_se = $_SESSION["idUtente"];

	$getUser_sql = "SELECT * FROM " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERS) . " WHERE " . UsersTable::ID . " = ?";

	// Ottieni il nome utente dall'autenticazione (sostituire con il tuo sistema di autenticazione)
	$username = $_SESSION["username"];
	$email = $_SESSION["email"];
	//richiamo la grafica della home
	require_once(ROOT . "app/view/inex.php");
?>
