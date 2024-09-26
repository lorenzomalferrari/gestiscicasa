<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Brand.php");

    $arrObj = [];

    $select = "*";

    $params_select = [];
    $where_select = "";

    if (isset($id)) { //dovrei provenire da /controller/brand/customTable.php
        $where_select = " WHERE " . BrandTable::ID . " = :id ";
        $params_select = [
            ':id' => $id
        ];
    }

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::BRAND ) . " AS b "
        . " $where_select "
    ;

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $arrObj[] = new Brand(
            $r[BrandTable::ID],
            $r[BrandTable::NAME],
            $r[BrandTable::COUNTRY_OF_ORIGIN],
            $r[BrandTable::INDUSTRY_SECTOR],
            $r[BrandTable::FOUNDATION_YEAR],
            $r[BrandTable::NOTE],
            $r[BrandTable::CREATION_DATE],
            $r[BrandTable::UPDATE_DATE],
        );
    }
