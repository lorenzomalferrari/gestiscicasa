<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/PropertyTypes.php");

    $arrTypeProperties = array();

    $select = PropertyTypesTable::ID . ", "
            . PropertyTypesTable::DESCRIPTION . ", "
            . PropertyTypesTable::NOTES;

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PROFILETYPES ) . " AS pt "
    ;

    $params_select = array(
        /*':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],*/
    );

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $PropertyTypes = new PropertyTypes();
        //set
        $PropertyTypes->setId($r[PropertyTypesTable::ID]);
        $PropertyTypes->setDescription($r[PropertyTypesTable::DESCRIPTION]);
        $PropertyTypes->setNotes($r[PropertyTypesTable::NOTES]);
        $arrTypeProperties[] = $PropertyTypes;
    }
