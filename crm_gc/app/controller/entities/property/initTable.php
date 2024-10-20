<?php declare(strict_types=1);
    $backgroundTable = "";

    $entity = "Proprietà";
    $titlePage = "Elenco $entity";
    $tableName = PropertyTable::TABLE_NAME;

    $parent_path_key = PATH . MENU_PATHS['properties']['path'];

    $tableDataHeader = PropertyTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $bj)
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getName(),
            $obj->getDescription(),
            $obj->getPrice(),
            $obj->getAddress(),
            $obj->getIdCity(),
            $obj->getIdState(),
            $obj->getIdPropertyTypes(),
            $obj->is_active(),
            $obj->getNotes(),
            $obj->getCreationDate(),
            $obj->getupdateDate(),
        ];

    $breadcrumb_list = [
        'Elenco',
        $entity
    ];

    require_once(VIEW_PATH . 'components/breadcrumb/breadcrumb.php');
