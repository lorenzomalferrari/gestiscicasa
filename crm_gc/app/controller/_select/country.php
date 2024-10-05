<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Country.php");

    $select = "id, name ";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::COUNTRIES) . " AS c";

    $results = DB->selectAll( $query, [] );

    foreach ($results as $r) {
        $countries_list[] = [
            $r['id'] => [
                INPUT_TYPE['elements']['select']['options']['value'] => $r['id'],
                INPUT_TYPE['elements']['select']['options']['text'] => $r['name']
            ]
        ];
    }
