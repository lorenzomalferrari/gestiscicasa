<?php declare(strict_types=1);
	$flag_api = true;
	require_once("../../app/controller/lib/libs.php");

	// Carica il file di configurazione
	$config = include(ROOT . 'public/config/config.php');
	// Recupera i dati POST
	$input = file_get_contents('php://input');

	try {
		$data = JSonValidator::validate($input); // $input è il JSON da validare
	} catch (Exception $e) {
		echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
	}

	// Verifica che i dati siano stati inviati correttamente
	if (!isset($data['context']) || !isset($data['username']) || !isset($data['password']) || !isset($data['json'])) {
		die(json_encode(['status' => 'error', 'message' => 'Parametri mancanti.', 'post' => var_dump($data) ]));
	}

	// Verifica le credenziali
	$username = $data['username'];
	$password = $data['password'];
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
		case API['CREATE_DB']:
			require_once(ROOT . 'app/model/api/CreateDB.php');
			$handler = new CreateDB();
			$response = $handler->handle($jsonParams);
			break;
		case API['UPDATE_DB']:
			require_once(ROOT . 'app/model/api/UpdateDB.php');
			$handler = new UpdateDB();
			$response = $handler->handle($jsonParams);
			break;
		case API['DELETE_DB']:
			require_once(ROOT . 'app/model/api/DeleteDB.php');
			$handler_del = new DeleteDB();
			$response = $handler_del->handle();
			if( !is_array($response) ){
				require_once(ROOT . 'app/model/api/UpdateDB.php');
				$handler = new UpdateDB();
				$response = $handler->handle($jsonParams);
			}
			break;
		case API['SEND_LOGS']:
			require_once(ROOT . 'app/model/api/SendsLog.php');
			$handler = new SendsLog();
			$response = $handler->handle($jsonParams);
			break;
		case API['RESEND_EMAILS']:
			require_once(ROOT . 'app/model/api/ResendEmail.php');
			//$dsn = 'mysql:host=localhost;dbname=your_db_name'; // Modifica con il tuo DSN
			//$dbUsername = 'db_user'; // Modifica con il tuo username DB
			//$dbPassword = 'db_password'; // Modifica con la tua password DB
			//$emailHost = 'smtp.example.com'; // Sostituisci con il tuo server SMTP
			//$emailPort = 587; // Porta SMTP, tipicamente 587 per TLS
			//$emailUsername = 'email_user'; // Sostituisci con il tuo username email
			//$emailPassword = 'email_password'; // Sostituisci con la tua password email

			//$handler = new ResendEmail($dsn, $dbUsername, $dbPassword, $emailHost, $emailPort, $emailUsername, $emailPassword);
			//$response = $handler->handle($jsonParams);
			break;
		case API['IMPORT_USERS']:
		case API['IMPORT_PROPERTIES']:
			require_once(ROOT . 'app/model/api/Import.php');
			$args = explode('_',$context);
			$handler = new Import($args[1]);
			$response = $handler->handle($jsonParams);
			break;
			break;
		case API['DOWNLOAD_USERS']:
		case API['DOWNLOAD_PROPERTIES']:
			require_once(ROOT . 'app/model/api/Download.php');
			$args = explode('_', $context);
			$handler = new Download($args[1]);
			break;
		default:
			$response = ['status' => 'error', 'message' => 'Contesto non riconosciuto. Contattare ' . CONFIG['site']['email']];
			break;
	}

	// Restituisce il risultato come JSON
	echo json_encode($response);
