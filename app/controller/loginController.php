<?php
	require_once('lib/_libs.php');
	require_once('../model/database.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username_form = $_POST["name"];
		$password_form = $_POST["pass"];

		$table =  $TABLEPREFIX . 'Users';

		$database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);
		$query = "SELECT * FROM $table WHERE username = :username AND password = :password ";
		// Preparazione della query
		$params = array(
			':username' => $username_form,
			':password' => $password_form
		);

		$row = $database->select($query, $params);
		if ($row) {
			echo "Record trovato: " . json_encode($row);

			$_SESSION["IDUSER_SE"] = $row["id"];
			$_SESSION["USER_SE"] = $row["username"];
			$_SESSION["PASSWORD_SE"] = $row["password"];
			$_SESSION["EMAIL_SE"] = $row["email"];

			echo "Login riuscito!<br>";
			print_r($_SESSION);
			header("Location: " . "../view/home.php");
		} else {
			echo "Credenziali non valide.";
		}
	}
?>
