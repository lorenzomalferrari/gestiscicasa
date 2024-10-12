<?php declare(strict_types=1);
    header('Content-Type: application/json');
    require_once('../lib/libs.php');

    // Decodifica il JSON in un array associativo
    $data = json_decode(file_get_contents('php://input'), true);
    // Ottieni il valore di 'idUser' dal JSON decodificato
    $idUser = $data['idUser'] ?? null;
    // Risposta di default
    $response = ['status' => false, 'message' => 'Utente non trovato'];

    if ($idUser) {
        $params_where = array(
            ':id' => $idUser
        );

        $select = "SELECT
                    CASE
                        WHEN " . UsersTable::TOKEN . " IS NULL THEN TRUE
                        ELSE FALSE
                    END AS is_token_null
                    FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERS)
            . " WHERE " . UsersTable::ID . " = :id ";

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
