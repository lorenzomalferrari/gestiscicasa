<?php declare(strict_types=1);
    require_once('../../controller/lib/libs.php');

    $select = "*";

    $query = "SELECT $select FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::INFOPROFILETYPES);

    $params_select = array();

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $InfoProfileTypes = new InfoProfileTypes();
        //set
        $InfoProfileTypes->setId($r[PropertyTypesTable::ID]);
        $InfoProfileTypes->setDescription($r[PropertyTypesTable::DESCRIPTION]);
        $InfoProfileTypes->setNotes($r[PropertyTypesTable::NOTES]);
        $arrInfoProfileTypes[] = $InfoProfileTypes;
    }
