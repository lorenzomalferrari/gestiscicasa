<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Elenco Brand";
    const TABLE_NAME = BrandTable::TABLE_NAME;
    const PARENT = "";

    const PARENT_PATH_KEY = PATH . MENU_PATHS['brand']['path'];

    $tableDataHeader = BrandTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        //print_r($property);
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getName(),
            $obj->getCountryPfOrigin(),
            $obj->getIndustrySector(),
            $obj->getFoundationYear(),
            $obj->getNote(),
            $obj->getCreationDate(),
            $obj->getUpdateDate()
        ];
    }

    const BREADCRUMB_LIST = [
        'Elenco',
        'Brand'
    ];

    if (file_exists(ROOT . 'app/view/components/breadcrumb/breadcrumb.php'))
        require_once(ROOT . 'app/view/components/breadcrumb/breadcrumb.php');

    if (file_exists(ROOT . 'app/controller/brand/arr_fields.php'))
        require_once(ROOT . 'app/controller/brand/arr_fields.php');
