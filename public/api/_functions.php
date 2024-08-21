<?php
    // Funzione per gestire le richieste basate su contesto e permessi
	function handleRequest(string $context, string $auth, array $jsonParams): array {
		$response = [];
		switch ($context) {
			case API['CREATE_DB']:
				if ($auth === '2') {
					return ['status' => 'error', 'message' => 'Permesso negato per CREATE_DB.'];
				}
				require_once(ROOT . 'app/model/api/CreateDB.php');
				$handler = new CreateDB();
				$response = $handler->handle($jsonParams);
				break;
			case API['UPDATE_DB']:
				if ($auth === '2') {
					return ['status' => 'error', 'message' => 'Permesso negato per UPDATE_DB.'];
				}
				require_once(ROOT . 'app/model/api/UpdateDB.php');
				$handler = new UpdateDB();
				$response = $handler->handle($jsonParams);
				break;
			case API['DELETE_DB']:
				if ($auth === '1' || $auth === '2') {
					return ['status' => 'error', 'message' => 'Permesso negato per DELETE_DB.'];
				}
				require_once(ROOT . 'app/model/api/DeleteDB.php');
				$handler_del = new DeleteDB();
				$response = $handler_del->handle();
				if (!is_array($response)) {
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
				// Gestisci i parametri e esegui il handler
				break;
			case API['IMPORT_USERS']:
			case API['IMPORT_PROPERTIES']:
				require_once(ROOT . 'app/model/api/Import.php');
				$args = explode('_', $context);
				$handler = new Import($args[1]);
				$response = $handler->handle($jsonParams);
				break;
			case API['DOWNLOAD_USERS']:
			case API['DOWNLOAD_PROPERTIES']:
				require_once(ROOT . 'app/model/api/Download.php');
				$args = explode('_', $context);
				$handler = new Download($args[1]);
				$response = $handler->handle($jsonParams);
				break;
			default:
				$response = ['status' => 'error', 'message' => 'Contesto non riconosciuto. Contattare ' . CONFIG['site']['email']];
				break;
		}
		return $response;
	}
?>