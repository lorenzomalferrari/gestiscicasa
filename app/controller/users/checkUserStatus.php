<?php declare(strict_types=1);
    header('Content-Type: application/json');
    require_once('../lib/libs.php');

    $idUser = $_POST['idUser'] ?? null;

    $response = ['status' => false, 'message' => 'Utente non trovato'];

    if ($idUser) {
        $params_where = array(
            ':id' => $idUser
        );

        $select = "SELECT " . UsersTable::TOKEN
                . " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::USERS)
                . " WHERE " . UsersTable::ID . " = :id ";
        //applicare log in select
        $row = DB->select($select, $params_where);

        if ($row && $result[UsersTable::TOKEN]) {
            $response = ['status' => true, 'message' => 'L\'utente ha confermato l\'email'];
        } else {
            $response = ['status' => false, 'message' => 'L\'utente non ha ancora confermato l\'email'];
        }
    }

    echo json_encode($response);
