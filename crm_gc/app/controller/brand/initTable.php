<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Brand";
    $tableName = BrandTable::TABLE_NAME;

    $tableDataHeader = BrandTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        //print_r($property);
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->genName(),
            $obj->getCountryPfOrigin(),
            $obj->getIndustrySector(),
            $obj->getFoundationYear(),
            $obj->getNote(),
            $obj->getCreationDate(),
            $obj->getupdateDate(),
        ];
    }
