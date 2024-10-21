<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/IndustrySector.php");

    $select = IndustrySectorsTable::ID . " , " .
            IndustrySectorsTable::NAME;

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::INDUSTRY_SECTORS) . " AS i";

    $results = DB->selectAll( $query, [] );

    foreach ($results as $r) {
        $industry_list[] = [
            $r['id'] => [
                INPUT_TYPE['elements']['select']['options']['value'] => $r[IndustrySectorsTable::ID],
                INPUT_TYPE['elements']['select']['options']['text'] => $r[IndustrySectorsTable::NAME]
            ]
        ];
    }
