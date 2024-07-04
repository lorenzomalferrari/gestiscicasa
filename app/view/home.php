<?php declare(strict_types=1);
    require_once("../controller/lib/libs.php");
    $titlePage = "Home";
    //Gestione di tutte le variabili php da usare a video. Es. nominativo del profilo loggato
    require_once(ROOT . "app/model/dashboard/getInfoForDashboard.php");
    $nome_cognome = ucwords("Lorenzo Malferrari");
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php require_once("head/_head.php"); ?>
    </head>
    <body>
        <!-- Page Loader Start -->
        <?php
        //require_once("_preloader.php");
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
                            require_once("_menu.php");
                        ?>
                        <!-- Fine menù laterale -->
                        <!-- Inizio intestazione -->
                        <?php
                            require_once("_navbar.php");
                        ?>
                        <!-- Fine intestazione -->
                    </header>

                    <!--=====================================-->
                    <!--=         Breadcrumb Start          =-->
                    <!--=====================================-->
                    <div class="breadcrumbs-wrap breadcrumb-home">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="breadcrumbs-area">
                                        <ul>
                                            <li>
                                                <a href="index.php">DASHBOARD</a>
                                            </li>
                                            <li>Sales Monitoring</li>
                                        </ul>
                                        <h1>Welcome to <? echo CONFIG['site']['name']; ?> :)</h1>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="breadcrumbs-btn">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-null-21"></i>RELOAD DATA</a></li>
                                            <li><a href="#"><i class="flaticon-null-19"></i>LAST 30 DAYS</a></li>
                                            <li><a href="#"><i class="flaticon-null-20"></i>REPORTS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=        summery Start      =-->
                    <!--=====================================-->
                    <div class="summery-wrap">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card summery-box">
                                        <div class="card-body">
                                            <div class="growth-rate text-mountain-meadow">0.7% <i class="flaticon-null-22"></i></div>
                                            <div class="summery-line">
                                                <div id="summery-line1"></div>
                                            </div>
                                            <div class="media">
                                                <div class="item-icon bg-blue-ribbon">
                                                    <i class="flaticon-null-24"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="item-title">Total Product Sale</h3>
                                                    <div class="item-currency">15,54</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card summery-box">
                                        <div class="card-body">
                                            <div class="growth-rate text-mountain-meadow">0.5% <i class="flaticon-null-22"></i></div>
                                            <div class="summery-line">
                                                <div id="summery-line2"></div>
                                            </div>
                                            <div class="media">
                                                <div class="item-icon bg-brink-pink">
                                                    <i class="flaticon-null-23"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="item-title">Total Earnings</h3>
                                                    <div class="item-currency">$7,20,175</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card summery-box">
                                        <div class="card-body">
                                            <div class="growth-rate text-brink-pink">-0.3% <i class="flaticon-null-25"></i></div>
                                            <div class="summery-line">
                                                <div id="summery-line3"></div>
                                            </div>
                                            <div class="media">
                                                <div class="item-icon bg-mountain-meadow">
                                                    <i class="flaticon-null-27"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="item-title">Total Product Order</h3>
                                                    <div class="item-currency">1845</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card summery-box">
                                        <div class="card-body">
                                            <div class="growth-rate text-mountain-meadow">0.7% <i class="flaticon-null-22"></i></div>
                                            <div class="summery-line">
                                                <div id="summery-line4"></div>
                                            </div>
                                            <div class="media">
                                                <div class="item-icon bg-carrot-orange">
                                                    <i class="flaticon-null-26"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="item-title">Order Quantity</h3>
                                                    <div class="item-currency">13,415</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=        	Chart Area Start     	=-->
                    <!--=====================================-->
                    <div class="sales-chart-area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xxl-8 col-12">
                                    <div class="card sales-chart">
                                        <div class="card-body">
                                            <h3 class="section-title">Revenue Growth</h3>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="item-number">38,4k</div>
                                                    <div class="item-text text-blue-ribbon">Specs average rate</div>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <ul>
                                                        <li class="pseudo-bg-minsk">Actual Growth</li>
                                                        <li class="pseudo-bg-blueribbon">Prev Month</li>
                                                        <li class="pseudo-bg-selago">Actual Plan</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="revenue-chart">
                                                <div id="stacked-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6">
                                    <div class="card sales-chart">
                                        <div class="card-body">
                                            <h3 class="section-title">Account Retention</h3>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="item-number">$2,548</div>
                                                    <div class="item-text text-brink-pink">Total Expansions</div>
                                                </div>
                                                <div class="col-6 d-flex flex-column justify-content-start">
                                                    <div class="item-number">$1,987</div>
                                                    <div class="item-text text-mountain-meadow">Total Collection</div>
                                                </div>
                                            </div>
                                            <div class="bar-chart mt-4">
                                                <canvas id="bar-chart" width="100" height="200"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 col-12">
                                    <div class="card recent-activity">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h3 class="section-title">Recent Activities</h3>
                                                <a href="#" class="view-btn">View All</a>
                                            </div>
                                            <div class="activity-list">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/img_1.jpg" alt="Girl">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="item-date">22 Jun. 2020</div>
                                                        <h4 class="item-title">Keith Jensen requested to Widthdrawl.</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/img_2.jpg" alt="Girl">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="item-date">24 Jun. 2020</div>
                                                        <h4 class="item-title">Rrob Riggle contract document for sales.</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/img_3.jpg" alt="Girl">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="item-date">24 Jun. 2020</div>
                                                        <h4 class="item-title">Socrates Itumay got a huge bonus.</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/img_4.jpg" alt="Girl">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="item-date">24 Jun. 2020</div>
                                                        <h4 class="item-title">Kirby Avendula car deposited funds.</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/img_5.jpg" alt="Girl">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="item-date">03 Aug 2020</div>
                                                        <h4 class="item-title">Marianne Audrey placed a Order.</h4>
                                                    </div>
                                                </div>
                                                <div class="media d-none d-xxl-flex">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/img_6.jpg" alt="Girl">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="item-date">15 Aug. 2020</div>
                                                        <h4 class="item-title">Socrates Itumay Has joined the team</h4>
                                                    </div>
                                                </div>
                                                <div class="media d-none d-xxl-flex">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/img_5.jpg" alt="Girl">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="item-date">03 Aug 2020</div>
                                                        <h4 class="item-title">Marianne Audrey placed a Order.</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 col-12">
                                    <div class="card sales-chart">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h3 class="section-title">Real-Time Sales</h3>
                                                </div>
                                                <div class="col-5 d-flex justify-content-end">
                                                    <ul>
                                                        <li class="pseudo-bg-blueribbon">Today</li>
                                                        <li class="pseudo-bg-selago">Yesterday</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="item-number">$21,425</div>
                                                    <div class="item-text text-brink-pink">Total Sales</div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="item-number">$2,203</div>
                                                    <div class="item-text text-mountain-meadow">Avg. Sales Per Day</div>
                                                </div>
                                            </div>
                                            <div class="bar-chart mt-4">
                                                <canvas id="horizontal-chart" width="100" height="310"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 col-12">
                                    <div class="card sales-table sales-revenue">
                                        <div class="card-body">
                                            <div class="heading-item">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h3 class="section-title">Sales Revenue</h3>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="dropdown section-dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Year: 2020<i class="flaticon-null-16"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Year: 2019</a>
                                                                <a class="dropdown-item" href="#">Year: 2018</a>
                                                                <a class="dropdown-item" href="#">Year: 2017</a>
                                                                <a class="dropdown-item" href="#">Year: 2016</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sales-vmap" id="world-map" style="width: 100%; height: 150px"></div>
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-blue-ribbon">Countries</th>
                                                            <th scope="col" class="text-brink-pink">Orders</th>
                                                            <th scope="col" class="text-mountain-meadow">Earnings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/flag_1.jpg" alt="img">
                                                                <div>United States</div>
                                                            </td>
                                                            <td>13,495</td>
                                                            <td class="text-semibold">$170,400.50</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/flag_2.jpg" alt="img">
                                                                <div>Netherlands</div>
                                                            </td>
                                                            <td>11,495</td>
                                                            <td class="text-semibold">$125,400.80</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/flag_3.jpg" alt="img">
                                                                <div>United Kingdom</div>
                                                            </td>
                                                            <td>09,348</td>
                                                            <td class="text-semibold">$90,735.30</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/flag_4.jpg" alt="img">
                                                                <div>Canada</div>
                                                            </td>
                                                            <td>07,845</td>
                                                            <td class="text-semibold">$84,954.70</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/flag_5.jpg" alt="img">
                                                                <div>Australia</div>
                                                            </td>
                                                            <td>05,945</td>
                                                            <td class="text-semibold">$79,345.50</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=        Revenue Table Start     	=-->
                    <!--=====================================-->
                    <div class="sales-table-area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xxl-8 col-12">
                                    <div class="card sales-table recent-revenue">
                                        <div class="card-body">
                                            <div class="heading-item">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h3 class="section-title">Your Most Recent Earnings</h3>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="heading-btn">
                                                            <li><a href="#">RANGE</a></li>
                                                            <li><a href="#">PERIOD</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row gutters-20">
                                                    <div class="col-md-4">
                                                        <div class="media">
                                                            <div class="item-icon bg-blue-ribbon">
                                                                <i class="flaticon-null-28"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="item-title">Gross Earnings</h4>
                                                                <div class="item-currency">$1,958,104</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="media">
                                                            <div class="item-icon bg-brink-pink">
                                                                <i class="flaticon-null-29"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="item-title">Tax Withheld</h4>
                                                                <div class="item-currency">$2,34,769.50</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="media">
                                                            <div class="item-icon bg-mountain-meadow">
                                                                <i class="flaticon-null-30"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="item-title">Net Earnings</h4>
                                                                <div class="item-currency">$6,08,469.50</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Sales Count</th>
                                                            <th scope="col">Gross Earnings</th>
                                                            <th scope="col">Tax Withheld</th>
                                                            <th scope="col">Net Earnings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-regent-gray">03/05/2020</td>
                                                            <td class="text-body font-weight-bold">1,050</td>
                                                            <td class="text-yellow">+ $30,065.10</td>
                                                            <td class="text-brink-pink">- $3,023.10</td>
                                                            <td class="text-blue-ribbon">$28,670.90 <span class="text-mountain-meadow">( + 4.5%)</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-regent-gray">07/06/2020</td>
                                                            <td class="text-body font-weight-bold">2,245</td>
                                                            <td class="text-yellow">+ $42,248.85</td>
                                                            <td class="text-brink-pink">- $5,548.60</td>
                                                            <td class="text-blue-ribbon">$45,383.30 <span class="text-mountain-meadow">( + 0.7%)</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-regent-gray">15/07/2020</td>
                                                            <td class="text-body font-weight-bold">875</td>
                                                            <td class="text-yellow">+ $27,845.35</td>
                                                            <td class="text-brink-pink">- $2,154.80</td>
                                                            <td class="text-blue-ribbon">$24,378.40 <span class="text-red">( - 0.7%)</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-regent-gray">15/07/2020</td>
                                                            <td class="text-body font-weight-bold">875</td>
                                                            <td class="text-yellow">+ $27,845.35</td>
                                                            <td class="text-brink-pink">- $2,154.80</td>
                                                            <td class="text-blue-ribbon">$24,378.40 <span class="text-red">( - 0.7%)</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-regent-gray">15/07/2020</td>
                                                            <td class="text-body font-weight-bold">875</td>
                                                            <td class="text-yellow">+ $27,845.35</td>
                                                            <td class="text-brink-pink">- $2,154.80</td>
                                                            <td class="text-blue-ribbon">$24,378.40 <span class="text-red">( - 0.7%)</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-regent-gray">15/07/2020</td>
                                                            <td class="text-body font-weight-bold">875</td>
                                                            <td class="text-yellow">+ $27,845.35</td>
                                                            <td class="text-brink-pink">- $2,154.80</td>
                                                            <td class="text-blue-ribbon">$24,378.40 <span class="text-red">( - 0.7%)</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-regent-gray">15/07/2020</td>
                                                            <td class="text-body font-weight-bold">875</td>
                                                            <td class="text-yellow">+ $27,845.35</td>
                                                            <td class="text-brink-pink">- $2,154.80</td>
                                                            <td class="text-blue-ribbon">$24,378.40 <span class="text-red">( - 0.7%)</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-12">
                                    <div class="card crypto-card crypto-notify">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h3 class="section-title">Notifications</h3>
                                                </div>
                                                <div class="col-4">
                                                    <div class="dropdown section-dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">30 Days<i class="flaticon-null-16"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">15 Days</a>
                                                            <a class="dropdown-item" href="#">7 Days</a>
                                                            <a class="dropdown-item" href="#">1 Days</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notify-list">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/notify_1.jpg" alt="Notification">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="item-title"><a href="#">Triangle Concrete House</a></h5>
                                                        <p>There are many variations that any passages but majority.</p>
                                                        <ul class="entry-meta">
                                                            <li><i class="far fa-calendar-alt"></i>12 Mar, 2020</li>
                                                            <li><i class="far fa-user"></i>John Frick</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/notify_2.jpg" alt="Notification">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="item-title"><a href="#">Modern concepts and designs</a></h5>
                                                        <p>There are many variations that any passages but majority.</p>
                                                        <ul class="entry-meta">
                                                            <li><i class="far fa-calendar-alt"></i>12 Mar, 2020</li>
                                                            <li><i class="far fa-user"></i>Adam Stone</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="../../public/assets/media/figure/notify_3.jpg" alt="Notification">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="item-title"><a href="#">Architecture Awards</a></h5>
                                                        <p>There are many variations that any passages but majority.</p>
                                                        <ul class="entry-meta">
                                                            <li><i class="far fa-calendar-alt"></i>12 Mar, 2020</li>
                                                            <li><i class="far fa-user"></i>John Frick</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card sales-table transaction-latest">
                                        <div class="card-body">
                                            <div class="heading-item">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h3 class="section-title">Latest Transaction</h3>
                                                    </div>
                                                    <div class="col-5 d-flex justify-content-end">
                                                        <a href="#" class="view-btn">See History</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Billing Name</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Total</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Payment Method</th>
                                                            <th scope="col">View Details</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="transaction-id">#AB3054</td>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/img_7.jpg" alt="img">
                                                                <h6 class="mb-0 text-semibold">Keith Jensen</h6>
                                                            </td>
                                                            <td class="transaction-date">07 Oct, 2019</td>
                                                            <td>$400</td>
                                                            <td><span class="badge bg-pink text-mandy">Paid</span></td>
                                                            <td class="transaction-method">Mastercard</td>
                                                            <td><a href="#" class="item-btn">Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="transaction-id">#AB3055</td>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/img_8.jpg" alt="img">
                                                                <h6 class="mb-0 text-semibold">Jacob Hunter</h6>
                                                            </td>
                                                            <td class="transaction-date">07 Oct, 2019</td>
                                                            <td>$260</td>
                                                            <td><span class="badge bg-magic-mint text-mountain-meadow">Chargeback</span></td>
                                                            <td class="transaction-method">Visa</td>
                                                            <td><a href="#" class="item-btn">Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="transaction-id">#AB3056</td>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/img_9.jpg" alt="img">
                                                                <h6 class="mb-0 text-semibold">Juan Mitchell</h6>
                                                            </td>
                                                            <td class="transaction-date">07 Oct, 2019</td>
                                                            <td>$175</td>
                                                            <td><span class="badge bg-pink text-mandy">Paid</span></td>
                                                            <td class="transaction-method">Paypal</td>
                                                            <td><a href="#" class="item-btn">Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="transaction-id">#AB3057</td>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/img_10.jpg" alt="img">
                                                                <h6 class="mb-0 text-semibold">Keith Jensen</h6>
                                                            </td>
                                                            <td class="transaction-date">07 Oct, 2019</td>
                                                            <td>$700</td>
                                                            <td><span class="badge bg-oasis text-fire-bush">Refund</span></td>
                                                            <td class="transaction-method">Mastercard</td>
                                                            <td><a href="#" class="item-btn">Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="transaction-id">#AB3058</td>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/img_11.jpg" alt="img">
                                                                <h6 class="mb-0 text-semibold">Juan Mitchell</h6>
                                                            </td>
                                                            <td class="transaction-date">07 Oct, 2019</td>
                                                            <td>$900</td>
                                                            <td><span class="badge bg-hawkes-blue text-corn-blue">Canceled</span></td>
                                                            <td class="transaction-method">Visa</td>
                                                            <td><a href="#" class="item-btn">Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="transaction-id">#AB3059</td>
                                                            <td class="d-flex align-items-center"><img src="../../public/assets/media/figure/img_12.jpg" alt="img">
                                                                <h6 class="mb-0 text-semibold">Ronald Taylor</h6>
                                                            </td>
                                                            <td class="transaction-date">04 Oct, 2019</td>
                                                            <td>$820</td>
                                                            <td><span class="badge bg-pink text-mandy">Paid</span></td>
                                                            <td class="transaction-method">Paypal</td>
                                                            <td><a href="#" class="item-btn">Details</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=       	Footer Start     		=-->
                    <!--=====================================-->
                    <?php require_once("footer.php"); ?>
                </div>
            </div>
        </div>
        <?php require_once("_script.php"); ?>
    </body>
</html>
