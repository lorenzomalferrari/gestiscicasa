<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/PropertyTypes.php");

    $arrObj = array();

    $select = PropertyTypesTable::ID . ", "
        . PropertyTypesTable::NAME . ", "
        . PropertyTypesTable::NOTES;

    // Decodifica i parametri JSON se forniti in $_GET
    $params_select = [];
    $where_select = "";

    if (isset($id)) { //dovrei provenire da /controller/property/types/customTable.php
        $where_select = " WHERE " . PropertyTypesTable::ID . " = :id ";
        $params_select = [
            ':id' => $id
        ];
    }

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PROPERTYTYPES ) . " AS pt "
        . " $where_select "
    ;

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $PropertyTypes = new PropertyTypes();
        //set
        $PropertyTypes->setId($r[PropertyTypesTable::ID]);
        $PropertyTypes->setDescription($r[PropertyTypesTable::NAME]);
        $PropertyTypes->setNotes($r[PropertyTypesTable::NOTES]);
        $arrObj[] = $PropertyTypes;
    }
