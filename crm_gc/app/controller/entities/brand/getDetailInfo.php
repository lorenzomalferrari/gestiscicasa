<?php declare(strict_types=1);

    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Brand.php");

    $_select =  " , c. " . CountriesTable::NAME . " as c_name"
        . " , i." . IndustrySectorTable::NAME . " as is_name";

    if (isset($id) && $id > 0)
        $_select =  " , b." . BrandTable::COUNTRY_OF_ORIGIN
            . " , b." . BrandTable::INDUSTRY_SECTOR;

    $select = " b." . BrandTable::ID
        . " , b." . BrandTable::NAME
        . $_select
        . " , b." . BrandTable::FOUNDATION_YEAR
        . " , b." . BrandTable::NOTES
        . " , b." . BrandTable::CREATE_DATE
        . " , b." . BrandTable::UPDATE_DATE;

    $params_select = [];
    $where_select = "";

    if (isset($id)) { //dovrei provenire da /controller/entities/brand/customTable.php
        $where_select = " WHERE b." . BrandTable::ID . " = :id ";
        $params_select = [
            ':id' => $id
        ];
    }

    $query = "
        SELECT
            $select
        FROM  "
            . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::BRAND ) . " AS b ";

    if ( !isset($id) ) {
        $query .= " LEFT JOIN " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::COUNTRIES) . " AS c "
                        . " ON c." . CountriesTable::ID . " = b." . BrandTable::COUNTRY_OF_ORIGIN
                . " LEFT JOIN " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::INDUSTRY_SECTOR) . " AS i "
                        . " ON i." . IndustrySectorTable::ID . " = b." . BrandTable::INDUSTRY_SECTOR;
    }

    $query .= " $where_select ";
    $arrObj = DB->selectAll($query, $params_select);
