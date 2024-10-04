<?php declare(strict_types=1);
    if ($id > 0) {
        $subTitle = "Modifica";
        $backgroundTable = "";

        require_once(ROOT . "app/controller/property/types/getDetailInfo.php");

        $titlePage = "Dettaglio Tipo Proprietà";
        $obj = $arrObj[0];
    }

    if (file_exists(ROOT . 'app/controller/' . $relative_path . 'arr_fields.php'))
        require_once(ROOT . 'app/controller/' . $relative_path . 'arr_fields.php');
