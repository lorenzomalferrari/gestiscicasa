<?php
	//recuperare id dell' utente, iterrogare il database e recuperare le informazioni da mostrare a video negli appositi spazi
	$idUtente_se = $_SESSION["idUtente"];

	$getUser_sql = <<<sql
		SELECT
			*
		FROM
			User
		WHERE
			id = ?
sql;
	// Ottieni il nome utente dall'autenticazione (sostituire con il tuo sistema di autenticazione)
	$username = $_SESSION["username"];
	$email = $_SESSION["email"];

	//richiamo la grafica della home
	require_once("../view/home.html");
?>