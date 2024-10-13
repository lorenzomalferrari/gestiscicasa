<?php declare(strict_types=1);

    require_once(CONTROLLER_FOLDER . "_select/property_types.php");

    if ($id > 0) {
        $subTitle = "Modifica";
        $backgroundTable = "";

        require_once(ENTITY_FOLDER . $relative_path . "getDetailInfo.php");

        $titlePage = "Dettaglio Proprietà";
        $obj = $arrObj[0];
    }

    require_once(ENTITY_FOLDER . $relative_path . 'arr_fields.php');
