<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php require_once(ROOT . 'app/view/components/template/_head.php'); ?>
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
                    <?php echo $breadcrumb; ?>
                    <!--=====================================-->
                    <!--=         	Table Area Start        =-->
                    <!--=====================================-->
                    <div class="container">
                        <div class="card component-table">
                            <?php require_once(ROOT . "app/view/components/table/data-table.php"); ?>
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
