<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/database.php');
    require_once(ROOT . 'app/model/CrudType.php');
    require_once(ROOT . 'app/model/NomiTabelle.php');

    // Array che conterrà gli oggetti CrudType
    global $CRUDTYPEOBJ;// vedere se portarlo in _def.php

    $database = new Database($configIstance->get('SERVERNAME_DB'), $configIstance->get('USERNAME_DB'), $configIstance->get('PASSWORD_DB'), $configIstance->get('DBNAME');
    // Preparazione della query
    $params = array();
    //Controllo prima che Utente non esista già
    $query = "SELECT * FROM " . getNomeTabella($TABLEPREFIX, NomiTabella::CRUDTYPE);
    $rows = $database->selectAll($query, $params);

    foreach ($rows as $row) {
        $CRUDTYPEOBJ[$row['azione']] = new CrudType(
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
