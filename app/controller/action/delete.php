<?php declare(strict_types=1);
	header('Content-Type: application/json');
	require_once('../lib/libs.php');

	// Ricevi i dati JSON inviati in POST
	$data = json_decode(file_get_contents('php://input'), true);

	// Verifica se i dati JSON sono validi
	if (json_last_error() !== JSON_ERROR_NONE) {
		echo json_encode(['success' => false, 'message' => 'Invalid JSON data.']);
		exit;
	}

	// Verifica che i dati necessari siano presenti
	if (isset($data['tableName'], $data['id'])) {

		$params_delete = [
			':id' => $data['id']
		];

		try {
			// Costruzione della query di eliminazione
			$delete_query = "DELETE FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::getEnumCaseFromName(strtoupper($data['tableName'])))
				. " WHERE id = :id";

			// Esecuzione della query di eliminazione
			$delete_result = DB->delete($delete_query, $params_delete);

			// Controllo del risultato dell'eliminazione
			if ($delete_result === false) {
				echo json_encode(['success' => false, 'message' => 'No record was deleted.']);
			} else {
				echo json_encode([
					'success' => true,
					'message' => 'Record deleted successfully.',
					'rows_affected' => $delete_result
				]);
			}

		} catch (Exception $e) {
			echo json_encode(['success' => false, 'message' => 'Errore: ' . $e->getMessage()]);
			exit;
		}
	} else {
		echo json_encode(['success' => false, 'message' => 'Missing required data.']);
		exit;
	}