<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/NomiTabelle.php');

    print_r("Sto per stampare var SESSIONE");
    print_r($_SESSION);
    // Preparazione della query per la select
    $params_where = array(
        ':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],
    );

    //Controllo prima che Utente non esista già
    $query = "SELECT * FROM " . getNomeTabella($configIstance->get('TABLEPREFIX'), NomiTabella::USERS) . " WHERE id = :id";
    $row = DB->select($query, $params_where);
?>
