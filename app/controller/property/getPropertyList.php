<?php declare(strict_types=1);

    require_once('lib/libs.php');
    require_once(ROOT . 'app/model/NomiTabelle.php');
    require_once(ROOT . "app/model/Property.php");

    $arrProperty = array();

    $select = "*";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::PROPERTY ) . " AS p "
        . " INNER JOIN "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::USERSPROPERTY) . " AS up "
        . " ON pe." . UsersPropertyTable::ID_PROPERTY . " = " . PropertyTable::ID
        . " INNER JOIN "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::PERSON) . " AS pe "
        . " ON pe." . PersonTable::ID . " = " . UsersPropertyTable::ID_PERSON
        . " INNER JOIN "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::USERS) . " AS u "
        . " ON u." . UsersTable::ID . " = " . PersonTable::ID_USER
        . " WHERE u." . UsersTable::ID . " = :id "
    ;

    $params_select = array(
        ':id' => "",
    );

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $arrProperty[] = new Property(
            $r[PropertyTable::ID],
            $r[PropertyTable::NAME],
            $r[PropertyTable::DESCRIPTION],
            $r[PropertyTable::PRICE],
            $r[PropertyTable::ADDRESS],
            $r[PropertyTable::ID_CITY],
            $r[PropertyTable::ID_STATE],
            $r[PropertyTable::ID_PROPERTY_TYPE],
            $r[PropertyTable::ACTIVE],
            $r[PropertyTable::NOTES],
            $r[PropertyTable::CREATION_DATE],
            $r[PropertyTable::UPDATE_DATE]
        );
    }
