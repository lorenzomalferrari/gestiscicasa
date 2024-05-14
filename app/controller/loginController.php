<?php
	require_once('lib/_libs.php');
	require_once('../model/database.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username_form = $_POST["email"];
		$password_form = $_POST["password"];

		$table =  $TABLEPREFIX . 'Users';

		$database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);
		$query = "SELECT * FROM $table WHERE ( username = :username OR email = :username) AND password = :password ";
		echo $query;
		// Preparazione della query
		$params = array(
			':username' => $username_form,
			':password' => $password_form
		);

		$record = $database->select($query, $params);
		if ($record) {
			echo "Record trovato: " . json_encode($record);

			//compilo SESSION
			$row = array(
				"id" => $record['id'],
				"username" => $record['username'],
				"password" => $record['password'],
				"email" => $record['email']
			);

			require_once("lib/_setSession.php");

			echo "Login riuscito!<br>";
			//print_r($_SESSION);

			header("Location: " . "../view/index.php");
		} else {
			echo "Credenziali non valide.";
		}
	}
?>
