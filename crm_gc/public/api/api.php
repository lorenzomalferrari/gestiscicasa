<?php declare(strict_types=1);

	$flag_api = true;
	require_once("../../app/controller/lib/libs.php");
	require_once(ROOT . "public/api/_functions.php");

	// Recupera i dati POST
	$input = file_get_contents('php://input');

	try {
		$data = JSonValidator::validate($input); // $input è il JSON da validare
	} catch (Exception $e) {
		echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
		exit;
	}

	// Verifica che i dati siano stati inviati correttamente
	if (!isset($data['context']) || !isset($data['username']) || !isset($data['password']) || !isset($data['json'])) {
		die(json_encode(['status' => 'error', 'message' => JSonValidator::ERROR_MISSING_DATA, 'post' => var_dump($data) ]));
	}

	// Verifica le credenziali
	$username = $data['username'];
	$password = $data['password'];
	$auth = null;

	// Cicla attraverso i permessi per verificare le credenziali
	foreach (CONFIG['api'] as $profilo => $creds) {
		if ($creds['username'] === $username && $creds['password'] === $password) {
			$auth = $creds['auth'];
			break; // Esci dal ciclo una volta trovata la corrispondenza
		}
	}

	if ($auth === null) {
		die(json_encode(['status' => 'error', 'message' => JSonValidator::ERROR_API_CRED]));
	}

	// Convalida il JSON
	$jsonParams = $data['json'];
	if (!is_array($jsonParams)) {
		die(json_encode(['status' => 'error', 'message' => JSonValidator::ERROR_INVALID_JSON]));
	}

	// Seleziona la classe da eseguire in base al contesto
	$context = $data['context'];

	// Chiama la funzione per gestire la richiesta
	$response = handleRequest($context, $auth, $jsonParams);

	// Restituisce il risultato come JSON
	echo json_encode($response);
