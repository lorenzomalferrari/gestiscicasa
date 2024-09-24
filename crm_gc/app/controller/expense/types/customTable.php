<?php declare(strict_types=1);
    require_once(ROOT . "app/controller/property/getPropertyTypesList.php");

    $propertyType = $arrObj[0];
    $value_input_1 = $propertyType->getDescription();
    $value_input_2 = $propertyType->getNotes();

    //Visto che ci arriviamo
    $fields['body']['rows'][0][0]['attributes']['value'] = $value_input_1;
    $fields['body']['rows'][1][0]['attributes']['value'] = $value_input_2;
