<?php declare(strict_types=1);
	require_once("../controller/lib/libs.php");

	// Carica il file di configurazione
	$config = include(ROOT . 'public/config/config.php');

	// Recupera i dati POST
	$input = file_get_contents('php://input');
	$data = json_decode($input, true);

	// Verifica che i dati siano stati inviati correttamente
	if (!isset($data['context']) || !isset($data['credentials']) || !isset($data['json'])) {
		die(json_encode(['status' => 'error', 'message' => 'Parametri mancanti.']));
	}

	// Verifica le credenziali
	list($username, $password) = explode(':', $data['credentials']);
	if (!isset($config['allowed_users'][$username]) || $config['allowed_users'][$username] !== $password) {
		die(json_encode(['status' => 'error', 'message' => 'Credenziali non valide.']));
	}

	// Convalida il JSON
	$jsonParams = $data['json'];
	if (!is_array($jsonParams)) {
		die(json_encode(['status' => 'error', 'message' => 'JSON non valido.']));
	}

	// Seleziona la classe da eseguire in base al contesto
	$context = $data['context'];
	$response = [];

	switch ($context) {
		case 'update_db':
			require_once(ROOT . 'app/model/api/UpdateDB.php');
			$dsn = 'mysql:host=localhost;dbname=your_db_name'; // Modifica con il tuo DSN
			$dbUsername = 'db_user'; // Modifica con il tuo username DB
			$dbPassword = 'db_password'; // Modifica con la tua password DB
			$sqlDirectory = '/path/to/sql'; // Sostituisci con il percorso della directory SQL
			$updateDirectory = '/path/to/updates'; // Sostituisci con il percorso della directory di aggiornamento

			$handler = new UpdateDB($dsn, $dbUsername, $dbPassword, $sqlDirectory, $updateDirectory);
			$response = $handler->handle($jsonParams);
			break;
		case 'sends_log':
			require_once(ROOT . 'app/model/api/SendsLog.php');
			$ftpServer = 'ftp.example.com'; // Sostituisci con il tuo server FTP
			$ftpUsername = 'ftp_user'; // Sostituisci con il tuo username FTP
			$ftpPassword = 'ftp_password'; // Sostituisci con la tua password FTP
			$logsDirectory = '/path/to/logs'; // Sostituisci con il percorso della directory dei log

			$handler = new SendsLog($ftpServer, $ftpUsername, $ftpPassword, $logsDirectory);
			$response = $handler->handle($jsonParams);
			break;
		case 'resend_email':
			require_once(ROOT . 'app/model/api/ResendEmail.php');
			$dsn = 'mysql:host=localhost;dbname=your_db_name'; // Modifica con il tuo DSN
			$dbUsername = 'db_user'; // Modifica con il tuo username DB
			$dbPassword = 'db_password'; // Modifica con la tua password DB
			$emailHost = 'smtp.example.com'; // Sostituisci con il tuo server SMTP
			$emailPort = 587; // Porta SMTP, tipicamente 587 per TLS
			$emailUsername = 'email_user'; // Sostituisci con il tuo username email
			$emailPassword = 'email_password'; // Sostituisci con la tua password email

			$handler = new ResendEmail($dsn, $dbUsername, $dbPassword, $emailHost, $emailPort, $emailUsername, $emailPassword);
			$response = $handler->handle($jsonParams);
			break;
		default:
			$response = ['status' => 'error', 'message' => 'Contesto non riconosciuto. Contattare info@lorenzomalferrari.com'];
			break;
	}

	// Restituisce il risultato come JSON
	echo json_encode($response);
?>
