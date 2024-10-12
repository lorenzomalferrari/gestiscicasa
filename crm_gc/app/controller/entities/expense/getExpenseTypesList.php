<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/ExpenseTypes.php");

    $arrObj = array();

    $select = ExpenseTypesTable::ID . ", "
        . ExpenseTypesTable::DESCRIPTION . ", "
        . ExpenseTypesTable::COLORE;

    // Decodifica i parametri JSON se forniti in $_GET
    $params_select = array();
    $where_select = "";

    if (isset($id)) { //dovrei provenire da /controller/entities/property/types/customTable.php
        $where_select = " WHERE " . ExpenseTypesTable::ID . " = :id ";
        $params_select = [
            ':id' => $id
        ];
    }

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::EXPENSETYPES ) . " AS et "
        . " $where_select "
    ;

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $obj = new ExpenseTypes();
        //set
        $obj->setId($r[ExpenseTypesTable::ID]);
        $arrObj[] = $obj;
    }
