<?php declare(strict_types=1);

    require_once(ROOT . "app/controller/_select/country.php");
    require_once(ROOT . "app/controller/_select/industry.php");

    if($id > 0){
        $subTitle = "Modifica";
        $backgroundTable = "";

        require_once(ROOT . "app/controller/brand/getDetailInfo.php");

        $titlePage = "Dettaglio Brand";
        $obj = $arrObj[0];
    }

    if (file_exists(ROOT . 'app/controller/' . $relative_path . 'arr_fields.php'))
        require_once(ROOT . 'app/controller/' . $relative_path . 'arr_fields.php');
