<?php declare(strict_types=1);
	require_once('lib/libs.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username_form = $_POST["email"];
		$password_form = $_POST["password"];

		$query = "SELECT * FROM "
					. getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERS) . " u "
					. " LEFT JOIN " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PEOPLE) . " p "
					. " 	on p.idUser = u.id "
					. " WHERE
							(
									u." . UsersTable::USERNAME . " = :username
								OR
									p." . PersonTable::EMAIL . " = :username
							)
							AND
								u." . UsersTable::TOKEN . " IS NULL
							AND
								u." . UsersTable::IS_ACTIVE . " = 1";

		// Preparazione della query
		$params = array(
			':username' => $username_form,
		);

		$record = DB->select($query, $params);

		if ($record && password_verify($password_form, $record['password']) ) {

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

				require_once(ROOT . "app/model/session/SessionManager.php");
				$sessionManager = new SessionManager(CONFIG);
				$sessionManager->manageSession($row);
				redirectPath("app/view/home.php");
			}
		} else {
			// Memorizza il messaggio di errore nella sessione
			$_SESSION['login_error'] = "Credenziali non valide.";
			redirectPath("app/view/login.php");
		}
	}
?>
