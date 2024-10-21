<?php declare(strict_types=1);
    require_once("../../controller/lib/libs.php");

    $select = "SELECT " . GendersTable::ID . ", " . GendersTable::GENDER
    . " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::GENDERS);

    $rows = DB->selectAll($select);

    foreach ($rows as $row) {
        $sesso_options .= "<option value=\"" . $row[GendersTable::ID] . "\">" . $row[GendersTable::GENDER] ."</option>";
    }
