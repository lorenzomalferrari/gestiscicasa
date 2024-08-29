<?php declare(strict_types=1);
    require_once("../../../controller/lib/libs.php");
    getToPost();//funzione che porta tutto da GET a POST

    print_r($_POST);

    $page = $_POST['page'];
    $parent_path_key = $_POST['path_key'];
    $tableName = $_POST['table'];
    $id = isset($_POST['id']) ? $_POST['id'] : "";

    $fields = json_decode(urldecode($_POST['input_fields']), true);

    $subTitle = ( $id > 0 ) ? "Modifica" : "Nuovo";

    $fields = FormatterInputValidator::validateAndFormatFields($fields);

    //se id è compilato, devo richiamare il customTable.php del contesto che sto trattando
    //e aggiungere in fields la key value con i valori da DB
    if($id > 0){
        print_r($tableName . "<br><br>");
        $relative_path = convertTableNameToPath($tableName);
        print_r($relative_path. "<br><br>");
        $url = normalizeUrl(ROOT . "app/controller/" . $relative_path . "customTable.php");
    print_r($url . "<br><br>");
        require_once($url);
    }

    //Ora che tutto è pronto, vanno salvati negli input hidden per essere passati tramite form
    //nel caso di utilizzo con le azioni come insert, update, delete.
    require_once(ROOT . "app/controller/hidden_input.php");

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php require_once(ROOT . "app/view/components/template/_head.php"); ?>
    </head>
    <body>
        <!-- Page Loader Start -->
        <?php
            //require_once(ROOT . "app/view/components/template/_preloader.php");
        ?>
        <!-- Page Loader End -->
        <a href="#main-wrapper" data-type="section-switch" class="scrollup">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <div id="main-wrapper" class="dsy-main-wrapper">
            <div class="dsy-page">

                <div class="dsy-page-content vertical-menu">
                    <header class="header">
                        <!-- Inizio menù laterale -->
                        <?php require_once(ROOT . "app/view/components/template/_menu.php"); ?>
                        <!-- Fine menù laterale -->
                        <!-- Inizio intestazione -->
                        <?php require_once(ROOT . "app/view/components/template/_navbar.php"); ?>
                        <!-- Fine intestazione -->
                    </header>

                    <!--=====================================-->
                    <!--=         Breadcrumb Start          =-->
                    <!--=====================================-->
                    <div class="breadcrumbs-wrap">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-12">
                                    <div class="breadcrumbs-area">
                                        <h1><?php echo $page; ?></h1>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-12">
                                    <div class="breadcrumbs-area text-sm-right">
                                        <ul>
                                            <li>
                                                <a href="#"><?php echo $page; ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><?php echo $subTitle; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=         	Table Area Start        =-->
                    <!--=====================================-->
                    <div class="container-fluid">
                        <div class="card component-table">
                            <?php include_once(ROOT . "app/view/components/table/input-table.php"); ?>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=       	Footer Start     		=-->
                    <!--=====================================-->
                    <?php require_once(ROOT . "app/view/components/template/_footer.php"); ?>
                </div>
            </div>
        </div>
        <?php require_once(ROOT . "app/view/components/template/_script.php"); ?>
    </body>
</html>
