<?php declare(strict_types=1);
    $backgroundTable = "";

    $entity = "Proprietà";
    $titlePage = "Elenco $entity";
    $tableName = PropertyTable::TABLE_NAME;

    $parent_path_key = PATH . MENU_PATHS['properties']['path'];

    $tableDataHeader = PropertyTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $bj) {
        //print_r($property);
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getName(),
            $obj->getDescription(),
            $obj->getPrice(),
            $obj->getAddress(),
            $obj->getIdCity(),
            $obj->getIdState(),
            $obj->getIdPropertyTypes(),
            $obj->isActive(),
            $obj->getNotes(),
            $obj->getCreationDate(),
            $obj->getupdateDate(),
        ];
    }

    $breadcrumb_list = [
        'Elenco',
        $entity
    ];

    if (file_exists(ROOT . 'app/view/components/breadcrumb/breadcrumb.php'))
        require_once(ROOT . 'app/view/components/breadcrumb/breadcrumb.php');
