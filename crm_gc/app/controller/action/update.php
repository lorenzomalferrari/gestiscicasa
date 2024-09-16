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

	// Verifica che l'ID e il nome della tabella siano presenti nel JSON
	if (isset($data['table'], $data['id'])) {
		$id = $data['id'];
		$tableName = $data['table'];

		// Rimuovi 'table' e 'id' dai dati per ottenere solo le colonne da aggiornare
		unset($data['table'], $data['id']);
		// Rimuovo anche le chiavi get che portano le infor per ricaricare pagina post lavorazione
		unset($data['page'], $data['path_key'], $data['input_fields']);

		// Verifica che ci siano effettivamente colonne da aggiornare
		if (empty($data)) {
			echo json_encode(['success' => false, 'message' => 'No data to update.']);
			exit;
		}

		// Costruisci la parte SET della query di aggiornamento dinamicamente
		$set_clauses = [];
		$params_update = [':id' => $id];

		foreach ($data as $column => $value) {
			$set_clauses[] = "`$column` = :$column";
			$params_update[":$column"] = $value;
		}

		$set_clause = implode(', ', $set_clauses);

		try {
			// Costruzione della query di aggiornamento
			$update_query = "UPDATE " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::getEnumCaseFromName(strtoupper($tableName)))
				. " SET $set_clause WHERE id = :id";

			// Esecuzione della query di aggiornamento
			$update_result = DB->update($update_query, $params_update);

			// Controllo del risultato dell'aggiornamento
			if ($update_result === false) {
				echo json_encode(['success' => false, 'message' => 'No record was updated.']);
				exit;
			} else {
				echo json_encode([
					'success' => true,
					'message' => 'Record updated successfully.',
					'rows_affected' => $update_result
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
