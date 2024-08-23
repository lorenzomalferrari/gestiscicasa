<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Property.php");

    $arrProperties = array();

    $select = "*";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNamesPROPERTY ) . " AS p "
        /*. " INNER JOIN "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNamesUSERSPROPERTY) . " AS up "
        . " ON up." . UsersPropertyTable::ID_PROPERTY . " = p." . PropertyTable::ID
        . " INNER JOIN "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNamesPERSON) . " AS pe "
        . " ON pe." . PersonTable::ID . " = " . UsersPropertyTable::ID_PERSON
        . " INNER JOIN "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNamesUSERS) . " AS u "
        . " ON u." . UsersTable::ID . " = pe." . PersonTable::ID_USER
        . " WHERE u." . UsersTable::ID . " = :id "*/
    ;

    //print_r($query);
    //print_r("<br>");

    $params_select = array(
        /*':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],*/
    );

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $arrProperties[] = new Property(
            $r[PropertyTable::ID],
            $r[PropertyTable::NAME],
            $r[PropertyTable::DESCRIPTION],
            $r[PropertyTable::PRICE],
            $r[PropertyTable::ADDRESS],
            $r[PropertyTable::ID_CITY],
            $r[PropertyTable::ID_STATE],
            $r[PropertyTable::ID_PropertyTypes],
            (bool)$r[PropertyTable::ACTIVE],
            $r[PropertyTable::NOTES],
            $r[PropertyTable::CREATION_DATE],
            $r[PropertyTable::UPDATE_DATE]
        );
    }
