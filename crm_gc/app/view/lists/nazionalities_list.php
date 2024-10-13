<?php declare(strict_types=1);
    require_once("../../controller/lib/libs.php");
    //Richiamare info da mostrare
    require_once(ROOT . "app/controller/nazionnalities/getPropertyList.php");
    //Eventuale personalizzazione
    require_once(ROOT . "app/controller/nazionnalities/initTable.php");
    //Creo la pagina
    require_once(ROOT . "app/view/lists/create/create_list.php");
