<?php
	// Connessione al database (sostituire con le tue credenziali)
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "nomedeldatabase";

	// Creazione della connessione
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Verifica la connessione
	if ($conn->connect_error) {
		die("Connessione fallita: " . $conn->connect_error);
	}

	// Verifica se il form di registrazione è stato inviato
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$confirmPassword = $_POST["confirmPassword"];

		// Verifica se la password e la conferma della password coincidono
		if ($password !== $confirmPassword) {
			echo "Le password non corrispondono.";
			exit;
		}

		// Query per inserire un nuovo utente nel database
		$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
		$stmt = $conn->prepare($sql);
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$stmt->bind_param("ss", $username, $hashedPassword);

		if ($stmt->execute()) {
			echo "Registrazione avvenuta con successo!";
			// Dopo aver completato la registrazione con successo
			echo "<script>window.location.href = 'home.html';</script>";

		} else {
			echo "Errore durante la registrazione: " . $conn->error;
		}
	}

	// Chiusura della connessione
	$conn->close();
?>
