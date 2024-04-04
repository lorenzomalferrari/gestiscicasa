<?php
	// Verifica se l'utente è autenticato (esempio di verifica di sessione)
	session_start();
	if (!isset($_SESSION["username"])) {
		// Se l'utente non è autenticato, reindirizza alla pagina di login
		header("Location: login.html");
		exit();
	}

	// Ottieni il nome utente dall'autenticazione (sostituire con il tuo sistema di autenticazione)
	$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<link rel="stylesheet" href="home.css">
	</head>
	<body>
		<div class="container">
			<h2>Benvenuto <?php echo $username; ?></h2>
			<p>Questa è la tua pagina home.</p>
			<button id="logoutBtn">Logout</button>
		</div>

		<script src="script.js"></script>
	</body>
</html>
