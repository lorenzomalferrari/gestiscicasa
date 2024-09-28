<?php declare(strict_types=1);
    require_once(ROOT . "app/controller/brand/getDetailInfo.php");

    $backgroundTable = "";

    $titlePage = "Dettaglio Brand";
    $obj = $arrObj[0];
    //$value_input_1 = $obj->getId();
    $value_input_2 = $obj->getName();

    //Visto che ci arriviamo
    //$fields['body']['rows'][0][0]['attributes']['value'] = $value_input_1;
    $fields['body']['rows'][0][0]['attributes']['value'] = $value_input_2;
