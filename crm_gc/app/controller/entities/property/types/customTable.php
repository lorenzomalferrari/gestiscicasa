<?php declare(strict_types=1);

    if ($id > 0) {
        $subTitle = "Modifica";
        $backgroundTable = "";

        require_once(ENTITY_FOLDER . $relative_path . "getDetailInfo.php");

        $titlePage = "Dettaglio Tipo Proprietà";
        $obj = $arrObj[0];
    }

    require_once(ENTITY_FOLDER . $relative_path . 'arr_fields.php');
