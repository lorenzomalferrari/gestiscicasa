<?php declare(strict_types=1);

    require_once(ROOT . 'app/model/TableNames.php');

    $select = PropertyTypesTable::ID
        . " , " . PropertyTypesTable::NAME
        . " , " . PropertyTypesTable::NOTES;

    $params_select = [];
    $where_select = "";

    if (isset($id)) {
        $where_select = " WHERE " . PropertyTypesTable::ID . " = :id ";
        $params_select = [
            ':id' => $id
        ];
    }

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PROPERTY_TYPES);

    $query .= " $where_select ";
    $arrObj = DB->selectAll($query, $params_select);
