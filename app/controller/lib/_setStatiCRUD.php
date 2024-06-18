<?php declare(strict_types=1);
    require_once('_libs.php');
    require_once(ROOT . 'app/model/database.php');
    require_once(ROOT . 'app/model/CrudType.php');

    // Array che conterrà gli oggetti CrudType
    global $CRUDTYPEOBJ;// vedere se portarlo in _def.php

    $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);
    // Preparazione della query
    $params = array();
    //Controllo prima che Utente non esista già
    $query = "SELECT * FROM " . getNomeTabella(NomiTabella::CRUDTYPE);
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
