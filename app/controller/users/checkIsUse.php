<?php declare(strict_types=1);
    header('Content-Type: application/json');
    require_once('../lib/libs.php');

    // Decodifica il JSON in un array associativo
    $data = json_decode(file_get_contents('php://input'), true);
    // Ottieni il valore di 'params' dal JSON decodificato
    $params = $data['params'] ?? null;
    $value = $data['value'] ?? null;
    // Risposta di default
    $response = ['status' => false, 'message' => 'Utente non trovato'];

    if ($params) {

        if( $params === "username")
            $key = ":" .UsersTable::USERNAME;
        else
            $key = ":" . PersonTable::EMAIL;

        $params_where = array(
            $key => $value
        );

        print_r("key: " . $key);

        $select = "SELECT COUNT(" . UsersTable::ID . ")"
                    . "FORM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::USERS)
                    . "";

        // Esegui la query
        $row = DB->select($select, $params_where);

        if ($row && $row['is_token_null'] == 1) {
            $response = ['status' => true, 'message' => 'Utente ha confermato il link tramite email'];
        } else {
            $response = ['status' => false, 'message' => 'Utente non ha ancora confermato il link nella email'];
        }
    }

    // Restituisci la risposta JSON
    echo json_encode($response);
