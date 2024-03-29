<?php
	//File che contiene le credenziali d'accesso al database
	require_once('../model/db/Credenziali.php');

	// Creazione della connessione
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Verifica la connessione
	if ($conn->connect_error) {
		die("Connessione fallita: " . $conn->connect_error);
	}

	// Verifica le credenziali
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$password = $_POST["password"];

		// Query SQL con segnaposti ?
		$sql = "SELECT * FROM users WHERE username = ? AND password = ?";

		// Preparazione della query
		$stmt = $conn->prepare($sql);

		// Binding dei parametri ai segnaposti
		$stmt->bind_param("ss", $username, $password);

		// Esecuzione della query
		$stmt->execute();

		// Ottenimento dei risultati
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {
			echo "Login riuscito!";
			// Dopo aver verificato le credenziali con successo
			echo "<script>window.location.href = 'home.html';</script>";

		} else {
			echo "Credenziali non valide.";
		}
	}

	// Chiusura della connessione
	$conn->close();
?>
