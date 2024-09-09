<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/RoomTypes.php");

    $arrObj = array();

    $select = RoomTypesTable::ID . ", "
        . RoomTypesTable::CODICE . ", "
        . RoomTypesTable::NOME . ", "
        . RoomTypesTable::COLORE;

    // Decodifica i parametri JSON se forniti in $_GET
    $params_select = [];
    $where_select = "";

    if (isset($id)) { //dovrei provenire da /controller/room/types/customTable.php
        $where_select = " WHERE " . RoomTypesTable::ID . " = :id ";
        $params_select = [
            ':id' => $id
        ];
    }

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::ROOMTYPES ) . " AS rt "
        . " $where_select "
    ;

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $obj = new RoomTypes();
        //set
        $obj->setId($r[RoomTypesTable::ID]);
        $obj->setCodice($r[RoomTypesTable::CODICE]);
        $obj->setNome($r[RoomTypesTable::NOME]);
        $obj->setColore($r[RoomTypesTable::COLORE]);
        $arrObj[] = $obj;
    }
