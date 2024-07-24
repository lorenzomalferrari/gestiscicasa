<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/NomiTabelle.php');
    require_once(ROOT . "app/model/User.php");

    $arrProperties = array();

    $select = "*";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::USERS ) . " AS u "
    ;

    print_r($query);
    print_r("<br>");

    $params_select = array(
        /*':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],*/
    );

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $arrUsers[] = new User(
            $r[UsersTable::ID],
            $r[UsersTable::USERNAME],
            $r[UsersTable::PASSWORD],
            $r[UsersTable::TOKEN],
            $r[UsersTable::CREATION_DATE],
            $r[UsersTable::UPDATE_DATE],
            $r[UsersTable::IS_ACTIVE],
        );
    }
