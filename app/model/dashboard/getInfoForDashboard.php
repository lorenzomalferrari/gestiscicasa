<?php declare(strict_types=1);
    //require_once('../../controller/lib/_libs.php');
    require_once(ROOT . 'app/model/database.php');
    require_once(ROOT . 'app/model/NomiTabelle.php');

    $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);

    print_r("Sto per stampare var SESSIONE");
    print_r($_SESSION);
    // Preparazione della query per la select
    $params_where = array(
        ':id' => ""
    );

    //Controllo prima che Utente non esista già
    $query = "SELECT * FROM " . getNomeTabella($TABLEPREFIX, NomiTabella::USERS) . " WHERE id = :id";
    $row = $database->select($query, $params_where);
?>
