<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Brand.php");

    $arrObj = array();

    $select = "*";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::BRAND )
    ;

    $params_select = [];

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $arrObj[] = new Brand(
            $r[BrandTable::ID],
            $r[BrandTable::NAME],
            $r[BrandTable::COUNTRY_OF_ORIGIN],
            $r[BrandTable::INDUSTRY_SECTOR],
            $r[BrandTable::FOUNDATION_YEAR],
            $r[BrandTable::NOTE],
        );
    }
