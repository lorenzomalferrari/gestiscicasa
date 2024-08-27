<?php declare(strict_types=1);
    require_once("../../../controller/lib/libs.php");
    getToPost();//funzione che porta tutto da GET a POST

    $page = $_POST['page'];
    $tableName = $_POST['table'];
    $id = isset($_POST['id']) ? $_POST['id'] : "";

    $fields = json_decode(urldecode($_POST['input_fields']), true);

    $subTitle = ( $id > 0 ) ? "Modifica" : "Nuovo";

    //se id è compilato, devo richiamare il customTable.php del contesto che sto trattando
    //e aggiungere in fields la key value con i valori da DB
    if($id > 0){
        $relative_path = convertTableNameToPath($tableName);
        print_r($relative_path);
        require_once(ROOT . "app/controller/$relative_path/customTable.php");
    }

    $fields = FormatterInputValidator::validateAndFormatFields($fields);
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
