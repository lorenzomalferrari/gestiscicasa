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

    //print_r($data);

    // Verifica che i dati necessari siano presenti
    if (isset($data['tableName'])) {

        $params_delete = [
            ':id' => $data['id']
        ];

        try {
            $instances = ClassFactory::create($data['tableName']);

            $delete = "DELETE FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNamesgetEnumCaseFromName(strtoupper($data['tableName'])))
                . " WHERE id = :id ";

            $delete = DB->delete($delete, $params_delete);

        } catch (Exception $e) {
            echo 'Errore: ' . $e->getMessage();
        }
    } else {
        echo json_encode(['success' => false, 'id' => $new_id, 'message' => 'Missing required data.']);
    }
