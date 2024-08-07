<?php

declare(strict_types=1);
require_once("../controller/lib/libs.php");
$titlePage = "Prezzi";
//Gestione di tutte le variabili php da usare a video
require_once(ROOT . "app/model/dashboard/getInfoForPricing.php");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <?php require_once(ROOT . 'app/view/components/template/_head.php'); ?>

    <style>
        .pricing-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .pricing-box .item-icon {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .pricing-box .item-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .pricing-box .item-price {
            font-size: 2em;
            color: #333;
            margin-bottom: 10px;
        }

        .pricing-box .item-btn {
            font-size: 1em;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }

        .pricing-box .item-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Page Loader Start -->
    <?php //require_once("/template/_preloader.php");
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
                    <?php
                    require_once(ROOT . "app/view/components/template/_menu.php");
                    ?>
                    <!-- Fine menù laterale -->
                    <!-- Inizio intestazione -->
                    <?php
                    require_once(ROOT . "app/view/components/template/_navbar.php");
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
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#personale" data-toggle="tab">Personale</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#aziendale" data-toggle="tab">Aziendale</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body tab-content">
                                <!-- Prima Tab -->
                                <div class="tab-pane fade show active" id="personale">
                                    <section class="pricing-plan mt-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="pricing-box">
                                                        <div class="item-icon">
                                                            <i class="flaticon-null-24"></i>
                                                        </div>
                                                        <h2 class="item-title">GRATUITO</h2>
                                                        <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                                        <div class="item-price">$0.00</div>
                                                        <a href="#" class="item-btn">SCEGLI</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="pricing-box">
                                                        <div class="item-icon">
                                                            <i class="flaticon-null-23"></i>
                                                        </div>
                                                        <h2 class="item-title">LIV. 1</h2>
                                                        <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                                        <div class="item-price">$9.99</div>
                                                        <a href="#" class="item-btn">SCEGLI</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="pricing-box">
                                                        <div class="item-icon">
                                                            <i class="flaticon-null-27"></i>
                                                        </div>
                                                        <h2 class="item-title">LIV. 2</h2>
                                                        <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                                        <div class="item-price">$19.99</div>
                                                        <a href="#" class="item-btn">SCEGLI</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <!-- Seconda Tab -->
                                <div class="tab-pane fade" id="aziendale">
                                    <section class="pricing-plan mt-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="pricing-box">
                                                        <div class="item-icon">
                                                            <i class="flaticon-null-24"></i>
                                                        </div>
                                                        <h2 class="item-title">PICCOLA</h2>
                                                        <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                                        <div class="item-price">$49.99</div>
                                                        <a href="#" class="item-btn">SCEGLI</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="pricing-box">
                                                        <div class="item-icon">
                                                            <i class="flaticon-null-23"></i>
                                                        </div>
                                                        <h2 class="item-title">MEDIA</h2>
                                                        <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                                        <div class="item-price">$69.99</div>
                                                        <a href="#" class="item-btn">SCEGLI</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="pricing-box">
                                                        <div class="item-icon">
                                                            <i class="flaticon-null-27"></i>
                                                        </div>
                                                        <h2 class="item-title">GRANDE</h2>
                                                        <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised words which don't look even slightly.</p>
                                                        <div class="item-price">$99.99</div>
                                                        <a href="#" class="item-btn">SCEGLI</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
