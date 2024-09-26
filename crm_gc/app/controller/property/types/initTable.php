<?php declare(strict_types=1);
    $backgroundTable = "";

    $entity = "Tipi Proprietà";
    $tableName = PropertyTypesTable::TABLE_NAME;
    $titlePage = "Elenco $entity";

    $parent_path_key = PATH . MENU_PATHS['property_types']['path'];

    $tableDataHeader = [
        PropertyTypesTable::ID,
        PropertyTypesTable::NAME,
        PropertyTypesTable::NOTES
    ];

    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getDescription(),
            $obj->getNotes(),
        ];
    }

    $breadcrumb_list = [
        'Elenco',
        'Proprietà',
        'Tipi'
    ];

    if (file_exists(ROOT . 'app/view/components/breadcrumb/breadcrumb.php'))
        require_once(ROOT . 'app/view/components/breadcrumb/breadcrumb.php');

    if (file_exists(ROOT . 'app/controller/property/types/arr_fields.php'))
        require_once(ROOT . 'app/controller/property/types/arr_fields.php');
