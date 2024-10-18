<?php declare(strict_types=1);

    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Property.php");

    $_select = " , pt." . PropertyTypesTable::NAME;

    if (isset($id) && $id > 0)
        $_select =  /*" , p." . PropertyTable::ID_CITY
                . " , p." . PropertyTable::ID_STATE
                .*/ " , p." . PropertyTable::ID_PROPERTY_TYPES;

    $select = " p." . PropertyTable::ID
        . " , p." . PropertyTable::NAME
        . " , p." . PropertyTable::PRICE
        . " , p." . PropertyTable::ADDRESS
        . $_select
        . " , p." . PropertyTable::ACTIVE
        . " , p." . PropertyTable::NOTES
    ;

    $params_select = [];
    $where_select = "";

    if (isset($id)) { //dovrei provenire da /controller/entities/property/customTable.php
        $where_select = " WHERE p." . PropertyTable::ID . " = :id ";
        $params_select = [
            ':id' => $id
        ];
    }

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PROPERTIES ) . " AS p ";

    if (!isset($id)) {
        $query .= " LEFT JOIN ". getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERSPROPERTY) . " AS up "
                        . " ON up." . UsersPropertyTable::ID_PROPERTY . " = p." . PropertyTable::ID
                . " LEFT JOIN "
                        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PEOPLE) . " AS pe "
                        . " ON pe." . PersonTable::ID . " = " . UsersPropertyTable::ID_PERSON
                . " LEFT JOIN "
                        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PROPERTYTYPES) . " AS pt "
                        . " ON pt." . PropertyTypesTable::ID . " = p." . PropertyTable::ID
                . " LEFT JOIN "
                        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERS) . " AS u "
                        . " ON u." . UsersTable::ID . " = pe." . PersonTable::USER_ID;
    }

    $query .= " $where_select ";
    $arrObj = DB->selectAll($query, $params_select);
