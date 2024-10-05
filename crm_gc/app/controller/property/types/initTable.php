<?php declare(strict_types=1);
    $backgroundTable = "";

    $parent = "Proprietà";
    $entity = "Tipi " . $parent;
    $titlePage = "Elenco $entity";
    $tableName = PropertyTypesTable::TABLE_NAME;

    $parent_path_key = PATH . MENU_PATHS['property_types']['path'];

    $tableDataHeader = [
        PropertyTypesTable::ID,
        PropertyTypesTable::NAME,
        PropertyTypesTable::NOTES
    ];

    $tableDataRecord = $arrObj;

    $breadcrumb_list = [
        'Elenco',
        $parent,
        'Tipi'
    ];

    if (file_exists(ROOT . 'app/view/components/breadcrumb/breadcrumb.php'))
        require_once(ROOT . 'app/view/components/breadcrumb/breadcrumb.php');
