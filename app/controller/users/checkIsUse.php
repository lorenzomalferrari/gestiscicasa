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

    if ($params && $value) {

        if( $params === "username")
            $column = UsersTable::USERNAME;
        else
            $column = PersonTable::EMAIL;

        $key = ":" . $column;
        $params_where = array(
            $key => $value
        );

        $params_select = "COUNT($column) as isUse";

        //Controllo prima che token non esista
        $query = "SELECT $params_select FROM "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::USERS) . " u "
            . " LEFT JOIN " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::PERSON) . " p "
            . " on p." . PersonTable::ID_USER . " = u." . UsersTable::ID . " "
            . " WHERE "
                . " $column = $key ";

        //applicare log in select
        $row = DB->select($query, $params_where);

        if ($row && $row['isUse'] == 1) {
            $response = ['status' => false, 'message' => "$column già in uso del CRM"];
        } else {
            $response = ['status' => true, 'message' => "$column non ancora presente nel CRM"];
        }
    }

    // Restituisci la risposta JSON
    echo json_encode($response);
