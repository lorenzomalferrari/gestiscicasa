<?php declare(strict_types=1);
    require_once("../../controller/lib/libs.php");

    $select = "SELECT " . GenderTable::ID . ", " . GenderTable::GENDER . " FROM " . GenderTable::TABLE_NAME;
    $rows = DB->selectAll($select);

    foreach ($rows as $row) {
        $sesso_options .= "<option value=\"" . $row[GenderTable::ID] . "\">" . $row[GenderTable::GENDER] ."</option>";
    }
