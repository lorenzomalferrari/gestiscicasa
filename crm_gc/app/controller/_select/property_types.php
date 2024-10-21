<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/IndustrySector.php");

    $select = PropertyTypesTable::ID . " , " .
        PropertyTypesTable::NAME;

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PROPERTY_TYPES) . " AS pt";

    $results = DB->selectAll($query, []);

    foreach ($results as $r) {
        $property_types_list[] = [
            $r['id'] => [
                INPUT_TYPE['elements']['select']['options']['value'] => $r[PropertyTypesTable::ID],
                INPUT_TYPE['elements']['select']['options']['text'] => $r[PropertyTypesTable::NAME]
            ]
        ];
    }
