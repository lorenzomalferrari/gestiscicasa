<?php
    require_once('_libs.php');
    require_once(ROOT . 'app/model/database.php');
    require_once(ROOT . 'app/model/CrudType.php');

    // Array che conterrà gli oggetti CrudType
    global $CRUDTYPEOBJ;

    $table =  $TABLEPREFIX . 'CrudType';

    $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);
    // Preparazione della query
    $params = array();
    //Controllo prima che Utente non esista già
    $query = "SELECT * FROM $table";
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
