<?php declare(strict_types=1);
    require_once("../controller/lib/libs.php");
    $titlePage = "Prezzi";
    //Gestione di tutte le variabili php da usare a video
    require_once(ROOT . "app/model/dashboard/getInfoForPricing.php");
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <?php require_once(ROOT . 'app/view/components/template/_head.php'); ?>
</head>
<body>
    <!-- Page Loader Start -->
    <?php //require_once("/template/_preloader.php"); ?>
    <!-- Page Loader End -->
    <a href="#main-wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <div id="main-wrapper" class="dsy-main-wrapper">
        <div class="dsy-page">
            <div class="dsy-page-content vertical-menu">
                <header class="header">
                    <!-- Inizio menù laterale -->
                    <?php
                    require_once(ROOT . "app/view/template/_menu.php");
                    ?>
                    <!-- Fine menù laterale -->
                    <!-- Inizio intestazione -->
                    <?php
                    require_once(ROOT . "app/view/template/_navbar.php");
                    ?>
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
                                    <h1>Prezzi</h1>
                                </div>
                            </div>
                            <div class="col-sm-8 col-12">
                                <div class="breadcrumbs-area text-sm-right">
                                    <ul>
                                        <li>
                                            <a href="#">PAGES</a>
                                        </li>
                                        <li>
                                            <a href="#">OTHER PAGES</a>
                                        </li>
                                        <li>Pricing Plan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=====================================-->
                <!--=         Pricing Area Start        =-->
                <!--=====================================-->
                <section class="pricing-plan">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="pricing-box">
                                    <div class="item-icon">
                                        <i class="flaticon-null-24"></i>
                                    </div>
                                    <h2 class="item-title">BASE</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                    <div class="item-price">$19.00</div>
                                    <a href="#" class="item-btn">SCEGLI</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="pricing-box">
                                    <div class="item-icon">
                                        <i class="flaticon-null-23"></i>
                                    </div>
                                    <h2 class="item-title">FAMIGLIA</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                    <div class="item-price">$69.00</div>
                                    <a href="#" class="item-btn">SCEGLI</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="pricing-box">
                                    <div class="item-icon">
                                        <i class="flaticon-null-27"></i>
                                    </div>
                                    <h2 class="item-title">AZIENDA</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                    <div class="item-price">$99.00</div>
                                    <a href="#" class="item-btn">SCEGLI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--=====================================-->
                <!--=       	Footer Start     		=-->
                <!--=====================================-->
                <?php require_once(ROOT . "app/view/template/_footer.php"); ?>
            </div>
        </div>
    </div>
    <?php require_once(ROOT . "app/view/template/_script.php"); ?>
</body>

</html>
