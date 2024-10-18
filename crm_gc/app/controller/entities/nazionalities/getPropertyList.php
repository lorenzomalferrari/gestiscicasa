<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Nazioni.php");

    $arrNazionalities = array();

    $select = "*";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::NATIONALITIES ) . " AS n "
    ;

    $results = DB->selectAll($query);

    foreach ($results as $r) {
        $arrNazionalities[] = new Nationality(
            $r[NationalitiesTable::ID],
            $r[NationalitiesTable::NAME],
            $r[NationalitiesTable::NAME_ITALIAN],
            $r[NationalitiesTable::NAME_FRENCH],
            $r[NationalitiesTable::NAME_SPANISH],
            $r[NationalitiesTable::NAME_GERMAN],
            $r[NationalitiesTable::NAME_PORTUGUESE],
            $r[NationalitiesTable::NOTES],
            $r[NationalitiesTable::create_date],
            $r[NationalitiesTable::UPDATE_DATE]
        );
    }
