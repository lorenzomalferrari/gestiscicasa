<?php declare(strict_types=1);
    require_once('../../controller/lib/libs.php');

    $select = "*";

    $query = "SELECT $select FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::INFOPROFILETYPES);

    $params_select = array();

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $PropertyTypes = new PropertyTypes();
        //set
        $PropertyTypes->setId($r[PropertyTypesTable::ID]);
        $PropertyTypes->setDescription($r[PropertyTypesTable::DESCRIPTION]);
        $PropertyTypes->setNotes($r[PropertyTypesTable::NOTES]);
        $arrTypeProperties[] = $PropertyTypes;
    }
