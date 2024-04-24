<?php
	//echo "<br>sono in loginController.php";
	//File che contiene le credenziali d'accesso al database
	require_once('_config.php');

	$SERVERNAME = $config['db']['host'].':'.$config['db']['port'];
	$USERNAME = $config['db']['username'];
	$PASSWORD = $config['db']['password'];
	$DBNAME = $config['db']['database'];
	$TABLEPREFIX = $config['db']['tablePrefix'];

	// Creazione della connessione
	$conn = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);

	// Verifica la connessione
	if ($conn->connect_error) {
		die("Connessione fallita: " . $conn->connect_error);
	}
 	//echo "<br>Connessione riuscita";

	// Verifica le credenziali
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username_se = $_POST["username"];
		$password_se = $_POST["password"];

		$table =  $TABLEPREFIX . 'Users';
		// Query SQL con segnaposti ?
		$sql = "SELECT * FROM $table WHERE username = ? AND password = ?";

		// Preparazione della query
		$stmt = $conn->prepare($sql);

		// Binding dei parametri ai segnaposti
		$stmt->bind_param("ss", $username_se, $password_se);

		// Esecuzione della query
		$stmt->execute();

		// Ottenimento dei risultati
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {
			echo "Login riuscito!";
			// Dopo aver verificato le credenziali con successo
			require_once("../view/home.php");
		} else {
			echo "Credenziali non valide.";
		}
	}
	// Chiusura della connessione
	$conn->close();
?>
