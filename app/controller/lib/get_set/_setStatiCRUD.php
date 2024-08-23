<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/CrudTypes.php');
    require_once(ROOT . 'app/model/TableNames.php');

    // Array che conterrà gli oggetti CrudTypes
    global $CrudTypesOBJ;// vedere se portarlo in _def.php

    // Preparazione della query
    $params = array();
    //Controllo prima che Utente non esista già
    $query = "SELECT * FROM " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), TableNames::CrudTypes);
    $rows = DB->selectAll($query, $params);

    foreach ($rows as $row) {
        $CrudTypesOBJ[$row['azione']] = new CrudTypes(
            $row['id'],
            $row['nome'],
            $row['azione'],
            $row['valore'],
            $row['data_creazione'],
            $row['data_aggiornamento'],
            $row['note']
        );
    }
?>
