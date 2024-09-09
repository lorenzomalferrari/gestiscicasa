<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Room.php");

    $arrObj = array();

    $select = "*";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::ROOM ) . " AS r "
    ;

    $params_select = [];

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $obj = new Room();
        $obj->setId($r[RoomTable::ID]);
        $obj->setNome($r[RoomTable::NOME]);
        $obj->setColore($r[RoomTable::COLORE]);
        $obj->setNote($r[RoomTable::NOTE]);

        $arrObj[] = $obj;
    }
