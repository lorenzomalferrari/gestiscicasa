<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/NomiTabelle.php');
    require_once(ROOT . "app/model/PropertyType.php");

    $arrTypeProperties = array();

    $select = PropertyTypeTable::ID . ", "
            . PropertyTypeTable::DESCRIPTION . ", "
            . PropertyTypeTable::NOTES;

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::PROPERTYTYPE ) . " AS pt "
    ;

    $params_select = array(
        /*':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],*/
    );

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $propertyType = new PropertyType();
        //set
        $propertyType->setId($r[PropertyTypeTable::ID]);
        $propertyType->setDescription($r[PropertyTypeTable::DESCRIPTION]);
        $propertyType->setNotes($r[PropertyTypeTable::NOTES]);
        $arrTypeProperties[] = $propertyType;
    }
