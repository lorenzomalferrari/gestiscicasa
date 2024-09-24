<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Elenco Proprietà";
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
        'Proprietà'
    ];

    if (file_exists(ROOT . 'app/view/components/breadcrumb/breadcrumb.php'))
        require_once(ROOT . 'app/view/components/breadcrumb/breadcrumb.php');

    if (file_exists(ROOT . 'app/controller/property/arr_fields.php'))
        require_once(ROOT . 'app/controller/property/arr_fields.php');
