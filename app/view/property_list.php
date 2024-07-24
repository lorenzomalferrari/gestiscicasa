<?php declare(strict_types=1);
    require_once("../controller/lib/libs.php");
    //Richiamare info da mostrare
    require_once(ROOT . "app/controller/property/getPropertyList.php");
    //Eventuale personalizzazione
    require_once(ROOT . "app/controller/property/customTable.php");

    $titlePage = "Elenco Proprietà";

    $tableName = $titlePage;
    $tableDataHeader = PropertyTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrProperty as $property) {
        //print_r($property);
        $tableDataRecord[] = [
            $property->getId(),
            $property->getName(),
            $property->getDescription(),
            $property->getPrice(),
            $property->getAddress(),
            $property->getIdCity(),
            $property->getIdState(),
            $property->getIdPropertyType(),
            $property->isActive(),
            $property->getNotes(),
            $property->getCreationDate(),
            $property->getupdateDate(),
        ];
    }
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php require_once("head/_head.php"); ?>
    </head>
    <body>
        <!-- Page Loader Start -->
        <?php
        //require_once("template/_preloader.php");
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
                        <?php require_once("template/_menu.php"); ?>
                        <!-- Fine menù laterale -->
                        <!-- Inizio intestazione -->
                        <?php require_once("template/_navbar.php"); ?>
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
                                        <h1><?php echo $titlePage; ?></h1>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-12">
                                    <div class="breadcrumbs-area text-sm-right">
                                        <ul>
                                            <li>
                                                <a href="#">COMPONENTS</a>
                                            </li>
                                            <li>
                                                <a href="#">TABLE</a>
                                            </li>
                                            <li>Data Table</li>
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
                            <?php require_once(ROOT . "app/view/components/table/data-table.php"); ?>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=       	Footer Start     		=-->
                    <!--=====================================-->
                    <?php require_once("template/_footer.php"); ?>
                </div>
            </div>
        </div>
        <?php require_once("template/_script.php"); ?>
    </body>
</html>
