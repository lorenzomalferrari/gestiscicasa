<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Elenco Proprietà";
    const TABLE_NAME = PropertyTable::TABLE_NAME;
    const PARENT_ENTITY = "";

    const PARENT_PATH_KEY = PATH . MENU_PATHS['properties']['path'];

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

    const BREADCRUMB_LIST = [
        'Elenco',
        'Proprietà'
    ];

    if (file_exists(ROOT . 'app/view/components/breadcrumb/breadcrumb.php'))
        require_once(ROOT . 'app/view/components/breadcrumb/breadcrumb.php');

    if (file_exists(ROOT . 'app/controller/property/arr_fields.php'))
        require_once(ROOT . 'app/controller/property/arr_fields.php');
