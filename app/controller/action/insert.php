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
        $params_insert = [];
        $columns_insert = "";
        $columns_arr = [];
        $values_arr = [];

        try {
            $instances = ClassFactory::create($data['tableName']);
            $instanceClass = $instances['class'];
            $instanceTable = $instances['table'];

            // Cicla su tutte le chiavi dell'array esclusa quella denominata tableName
            foreach ($data as $key => $value) {
                if ($key !== 'tableName') {
                    $columns_arr[] = $key;
                    $values_arr[] = ":" . $key;

                    $params_insert[] = $value;
                }
            }

            print_r("params_insert<br>");
            print_r($params_insert);

            $columns_insert = concatenateWithComma($columns_arr);
            print_r("columns_insert<br>");
            print_r($columns_insert);

            $values_insert = concatenateWithComma($values_arr);
            print_r("values_insert<br>");
            print_r($values_insert);

            $insert = "INSERT INTO " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), $instanceTable::TABLE_NAME)
                . " (" . $columns_insert . ") "
                . " VALUES (" . $values_insert . ")";

            print_r("insert QUERY: <br>");
            print_r($columns_insert);

            $new_id = DB->insert($insert, $params_insert);

        } catch (Exception $e) {
            echo 'Errore: ' . $e->getMessage();
        }
    } else {
        echo json_encode(['success' => false, 'id' => $new_id, 'message' => 'Missing required data.']);
    }