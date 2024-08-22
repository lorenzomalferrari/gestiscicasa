<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/NomiTabelle.php');
    require_once(ROOT . "app/model/PropertyType.php");

    $arrProperties = array();

    $select = "*";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::PROPERTY_TYPE ) . " AS pt "
    ;

    //print_r($query);
    //print_r("<br>");

    $params_select = array(
        /*':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],*/
    );

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $arrTypeProperties[] = new PropertyType(
            $r[PropertyTypeTable::ID],
            $r[PropertyTypeTable::DESCRIPTION],
            $r[PropertyTypeTable::CREATION_DATE],
            $r[PropertyTypeTable::UPDATE_DATE],
            $r[PropertyTypeTable::NOTES]
        );
    }
