<?php declare(strict_types=1);
	// Funzione per gestire le richieste basate su contesto e permessi
	function handleRequest(string $context, string $auth, array $jsonParams): array
	{

		// Funzione privata per gestire DELETE_DB
		function handleDeleteDB(): array
		{
			require_once(ROOT . 'app/model/api/DeleteDB.php');
			$handler = new DeleteDB();
			return $handler->handle();
		}

		// Funzione privata per gestire CREATE_DB
		function handleCreateDB(array $jsonParams): array
		{
			require_once(ROOT . 'app/model/api/CreateDB.php');
			$handler = new CreateDB();
			return $handler->handle($jsonParams);
		}

		// Funzione privata per gestire UPDATE_DB
		function handleUpdateDB(array $jsonParams): array
		{
			require_once(ROOT . 'app/model/api/UpdateDB.php');
			$handler = new UpdateDB();
			return $handler->handle($jsonParams);
		}

		// Funzione privata per gestire INIT_DB (esegue DELETE_DB, CREATE_DB, UPDATE_DB)
		function handleInitDB(array $jsonParams): array
		{
			// Esegui DELETE_DB
			$responseDelete = handleDeleteDB();
			if ($responseDelete['status'] === 'error') {
				return $responseDelete;
			}

			// Esegui CREATE_DB
			$responseCreate = handleCreateDB($jsonParams);
			if ($responseCreate['status'] === 'error') {
				return $responseCreate;
			}

			// Esegui UPDATE_DB
			$responseUpdate = handleUpdateDB($jsonParams);
			if ($responseUpdate['status'] === 'error') {
				return $responseUpdate;
			}

			// Restituisce un messaggio per ogni delle tre funzioni eseguite
			return [
				'status' => 'success',
				'message' => 'Inizializzazione del database completata con successo.',
				'details' => [
					'delete' => $responseDelete,
					'create' => $responseCreate,
					'update' => $responseUpdate
				]
			];
		}

		// Funzione privata per gestire SEND_LOGS
		function handleSendLogs(array $jsonParams): array
		{
			require_once(ROOT . 'app/model/api/SendsLog.php');
			$handler = new SendsLog();
			return $handler->handle($jsonParams);
		}

		// Funzione privata per gestire RESEND_EMAILS
		function handleResendEmails(array $jsonParams): array
		{
			//DA SISTEMARE
			require_once(ROOT . 'app/model/api/ResendEmail.php');
			//$handler = new ResendEmail();
			return $handler->handle($jsonParams);
		}

		// Funzione privata per gestire IMPORT_USERS e IMPORT_PROPERTIES
		function handleImport(string $type, array $jsonParams): array
		{
			require_once(ROOT . 'app/model/api/Import.php');
			$handler = new Import($type);
			return $handler->handle($jsonParams);
		}

		// Funzione privata per gestire DOWNLOAD_USERS e DOWNLOAD_PROPERTIES
		function handleDownload(string $type, array $jsonParams): array
		{
			require_once(ROOT . 'app/model/api/Download.php');
			$handler = new Download($type);
			return $handler->handle($jsonParams);
		}

		// Funzione privata per gestire il messaggio di errore
		function returnError($context): array
		{
			return ['status' => 'error', 'message' => JSonValidator::PERMISSION_DENIED . " $context."];
		}

		$response = [];
		switch ($context) {
			case API['CREATE_DB']:
				if ($auth === '2') {
					return returnError($context);
				}
				$response = handleCreateDB($jsonParams);
				break;
			case API['UPDATE_DB']:
				if ($auth === '2') {
					return returnError($context);
				}
				$response = handleUpdateDB($jsonParams);
				break;
			case API['DELETE_DB']:
				if ($auth === '1' || $auth === '2') {
					return returnError($context);
				}
				$response = handleDeleteDB();
				break;
			case API['INIT_DB']:
				if ($auth === '1' || $auth === '2') {
					return returnError($context);
				}
				$response = handleInitDB($jsonParams);
				break;
			case API['SEND_LOGS']:
				$response = handleSendLogs($jsonParams);
				break;
			case API['RESEND_EMAILS']:
				$response = handleResendEmails($jsonParams);
				break;
			case API['IMPORT_USERS']:
			case API['IMPORT_PROPERTIES']:
				$args = explode('_', $context);
				$response = handleImport($args[1], $jsonParams);
				break;
			case API['DOWNLOAD_USERS']:
			case API['DOWNLOAD_PROPERTIES']:
				require_once(ROOT . 'app/model/api/Download.php');
				$args = explode('_', $context);
				$response = handleDownload($args[1], $jsonParams);
				break;
			default:
				$response = ['status' => 'error', 'message' => 'Contesto non riconosciuto. Contattare ' . CONFIG['site']['email']];
				break;
		}
		return $response;
	}
