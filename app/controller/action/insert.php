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

    print_r($data);

    // Verifica che i dati necessari siano presenti
    if (isset($data['tableName'])) {
        //$tableName = $conn->real_escape_string($data['tableName']);





        // Esecuzione della query e gestione della risposta
        //if ($conn->query($sql) === TRUE) {
        //    $newId = $conn->insert_id; // Ottieni l'ID del nuovo record inserito
        //    echo json_encode(['success' => true, 'newId' => $newId]);
        //} else {
        //    echo json_encode(['success' => false, 'message' => 'Error during insertion: ' . $conn->error]);
        //}
    } else {
        echo json_encode(['success' => false, 'message' => 'Missing required data.']);
    }

    die();
