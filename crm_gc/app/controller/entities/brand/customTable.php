<?php declare(strict_types=1);

    require_once(CONTROLLER_FOLDER . "_select/country.php");
    require_once(CONTROLLER_FOLDER . "_select/industry.php");

    if($id > 0){
        $subTitle = "Modifica";
        $backgroundTable = "";

        require_once(ENTITY_FOLDER . $relative_path . "getDetailInfo.php");

        $titlePage = "Dettaglio Brand";
        $obj = $arrObj[0];
    }

    require_once(ENTITY_FOLDER . $relative_path . 'arr_fields.php');
