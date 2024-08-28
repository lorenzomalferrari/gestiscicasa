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
	if (isset($data['tableName'])) {
		$params_insert = [];
		$columns_arr = [];
		$values_arr = [];
		$new_id = null;

		try {
			// Crea un'istanza della classe relativa alla tabella
			$instances = ClassFactory::create($data['tableName']);

			// Cicla su tutte le chiavi dell'array esclusa quella denominata tableName
			foreach ($data as $key => $value) {
				if ($key !== 'tableName') {
					$columns_arr[] = $key;
					$values_arr[] = ":" . $key;
					$params_insert[":" . $key] = $value;
				}
			}

			// Concatenate le colonne e i valori per la query SQL
			$columns_insert = concatenateWithComma($columns_arr);
			$values_insert = concatenateWithComma($values_arr);

			// Crea la query SQL per l'inserimento
			$insert = "INSERT INTO " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::getEnumCaseFromName(strtoupper($data['tableName'])))
				. " (" . $columns_insert . ") "
				. " VALUES (" . $values_insert . ")";

			// Esegui la query di inserimento
			$new_id = DB->insert($insert, $params_insert);

			// Restituisci il risultato dell'inserimento
			echo json_encode(['success' => true, 'id' => $new_id, 'message' => 'Data inserted successfully.']);
		} catch (Exception $e) {
			// Gestione dell'errore in caso di eccezione
			echo json_encode(['success' => false, 'message' => 'Errore: ' . $e->getMessage()]);
			exit;
		}
	} else {
		// Restituisci un errore se manca la chiave tableName
		echo json_encode(['success' => false, 'message' => 'Missing required data.']);
		exit;
	}
