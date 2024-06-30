<?php declare(strict_types=1);
	require_once('lib/_libs.php');
	require_once(ROOT . 'app/model/database.php');
	require_once(ROOT . 'app/model/NomiTabelle.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username_form = $_POST["email"];
		$password_form = $_POST["password"];

		$database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);
		$query = "SELECT * FROM " . getNomeTabella($TABLEPREFIX, NomiTabella::USERS) . " u LEFT JOIN " . getNomeTabella($TABLEPREFIX, NomiTabella::PERSON) . " p on p.idUser = u.id WHERE ( u.username = :username OR p.email = :username) AND u.password = :password AND u.token IS NULL and u.isActive = 1";
		//echo $query;
		//echo "<br><br>";
		// Preparazione della query
		$params = array(
			':username' => $username_form,
			':password' => $password_form
		);
		//print_r($params);
		//echo "<br><br>";

		$record = $database->select($query, $params);
		//print_r("Record trovato:");
		//print_r($record);
		if ($record) {
			//echo "Record trovato: " . json_encode($record);

			$token = $record['token'];
			if ( $token !== null &&  !checkStringLength($token) ) {
				echo "Devi confermare l'email che ti è stata mandata, per attivare l'account";
			} else {
				//compilo SESSION
				$row = array(
					"id" => $record['id'],
					"username" => $record['username'],
					"password" => $record['password'],
					"email" => $record['email']
				);

				//print_r($row);
				require_once(ROOT . "app/model/session/SessionManager.php");
				$sessionManager = new SessionManager($config);
				$sessionManager->manageSession($row);
				//echo "Login riuscito!<br>";
				//print_r($_SESSION);
				header("Location: " . PATH . "app/view/index.php");
			}
		} else {
			echo "Credenziali non valide.";
		}
	}
?>
