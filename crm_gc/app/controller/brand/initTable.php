<?php declare(strict_types=1);
    $backgroundTable = "";

    $entity = "Brand";
    $titlePage = "Elenco $entity";
    $tableName = BrandTable::TABLE_NAME;

    $parent_path_key = PATH . MENU_PATHS['brand']['path'];

    $tableDataHeader = BrandTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        //print_r($property);
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getName(),
            $obj->getCountryOfOrigin(),
            $obj->getIndustrySector(),
            $obj->getFoundationYear(),
            $obj->getNote(),
            $obj->getCreationDate(),
            $obj->getUpdateDate()
        ];
    }

    $breadcrumb_list = [
        'Elenco',
        $entity
    ];

    //Gestisco la parte superiore a destra della tabella, con lo scopo di avere:
    // Elento / Entità, se richiamata nel edit/new record allora gestirà similmente
    // una struttura del genere: "Nuovo o Modifica / Brand" o "Nuovo o Modifica / Proprietà / Tipo"
    if (file_exists(ROOT . 'app/view/components/breadcrumb/breadcrumb.php'))
        require_once(ROOT . 'app/view/components/breadcrumb/breadcrumb.php');
