<?php
    require_once("../controller/lib/_libs.php");
    $titlePage = "Home";
    echo $titlePage;
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashy | Sales Monitoring</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">

    <!-- Dependencies CSS -->
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/flaticon/flaticon.css" type="text/css">
    <link rel="stylesheet" href="dependencies/jvectormap/css/jquery-jvectormap-2.0.3.css" type="text/css">
    <link rel="stylesheet" href="dependencies/fullcalendar/main.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/select2/css/select2.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/bootstrap-colorpicker/bootstrap-colorpicker.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/flatpicker/css/flatpickr.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/quill/quill.core.css" type="text/css">
    <link rel="stylesheet" href="dependencies/quill/quill.snow.css" type="text/css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
    <!-- Page Loader Start -->
    <div id="preloader" class="preloader-wrap">
        <div class="preloader-content">
            <figure class="preloader-logo">
                <img src="media/logo.png" alt="Logo">
            </figure>
            <div class="preloader-text">Dashy</div>
        </div>
    </div>
    <!-- Page Loader End -->
    <a href="#main-wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <div id="main-wrapper" class="dsy-main-wrapper">
        <div class="dsy-page">

            <div class="dsy-page-content vertical-menu">
                <header class="header">
                    <div class="dsy-aside dsy-aside-fixed">
                        <div class="dsy-aside-brand">
                            <div class="dsy-brand-logo">
                                <a href="index.php" class="main-logo">
                                    <img src="media/main-logo.png" alt="logo">
                                </a>
                                <a href="index.php" class="logo-icon">
                                    <img src="media/favicon.png" alt="logo">
                                </a>
                            </div>
                            <div class="nav-toggle-btn d-lg-none">
                                <button class="btn-icon sidebar-toggle-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="dsy-aside-menu-wrapper">
                            <div class="dsy-aside-menu">
                                <ul class="dsy-aside-nav sidebar-toggle-view">
                                    <li class="dsy-menu-label">
                                        <div class="dsy-menu-label-text">MENU</div>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item active">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-1"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Dashboards</span>
                                            <span class="dsy-menu-count">03</span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item active">
                                                <a href="index.php" class="dsy-menu-link">Sales Monitoring</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="index2.php" class="dsy-menu-link">Website Analytics</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="index3.php" class="dsy-menu-link">Cryptocurrency</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-label">
                                        <div class="dsy-menu-label-text">APPLICATIONS</div>
                                    </li>
                                    <li class="dsy-menu-item">
                                        <a href="calender.php" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-2"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="dsy-menu-item">
                                        <a href="chat.php" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-3"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Chat</span>
                                        </a>
                                    </li>
                                    <li class="dsy-menu-item">
                                        <a href="file-manager.php" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-4"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">File Manager</span>
                                        </a>
                                    </li>
                                    <li class="dsy-menu-item">
                                        <a href="contact.php" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-5"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-6"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Mail</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="email.php" class="dsy-menu-link">Inbox</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="email-read.php" class="dsy-menu-link">Read Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-label">
                                        <div class="dsy-menu-label-text">PAGES</div>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-7"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">User Pages</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="registration.php" class="dsy-menu-link">Registration</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="login.php" class="dsy-menu-link">Login</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="passcode-reset.php" class="dsy-menu-link">Password Reset</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="profile.php" class="dsy-menu-link">Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-9"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Other Pages</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="connections.php" class="dsy-menu-link">Connections</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="groups.php" class="dsy-menu-link">Groups</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="events.php" class="dsy-menu-link">Events</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="blog.php" class="dsy-menu-link">Blog</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="pricing.php" class="dsy-menu-link">Pricing Plan</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-label">
                                        <div class="dsy-menu-label-text">COMPONENTS</div>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-11"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">UI Elements</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="alart.php" class="dsy-menu-link">Alart</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="badge.php" class="dsy-menu-link">Badge</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="button.php" class="dsy-menu-link">Button</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-10"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Forms</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="basic-form.php" class="dsy-menu-link">Basic Form</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="advanced-form.php" class="dsy-menu-link">Advanced Form</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-12"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Tables</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="basic-table.php" class="dsy-menu-link">Basic Table</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="data-table.php" class="dsy-menu-link">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-13"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Charts</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="chart-js.php" class="dsy-menu-link">ChartJs</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="apex-chart.php" class="dsy-menu-link">Apex Chart</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-14"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Maps</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="google-map.php" class="dsy-menu-link">Google Map</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="vector-map.php" class="dsy-menu-link">Vector Map</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="navbar navbar-expand nav-top-bar1 nav-bar-fixed">
                        <div class="top-bar-menu collapse navbar-collapse" id="mobile-navbar">
                            <ul class="navbar-nav">
                                <li class="nav-toggle-btn d-none d-lg-block">
                                    <button class="btn-icon" id="dsy-aside-toggler">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="nav-toggle-btn d-lg-none">
                                    <button class="btn-icon sidebar-toggle-mobile">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="nav-search-bar">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search......">
                                        <div class="input-group-append">
                                            <button class="item-btn" type="button"><i class="flaticon-null-15"></i></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="navbar-item dropdown nav-language">
                                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><img src="media/figure/flag.jpg" alt="">En-UK<i class="flaticon-null-16"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item text-13" href="#"><img src="media/figure/flag_6.jpg" alt="Sp">Sp-Sp</a>
                                        <a class="dropdown-item text-13" href="#"><img src="media/figure/flag_7.jpg" alt="Du">Du-Gm</a>
                                        <a class="dropdown-item text-13" href="#"><img src="media/figure/flag_8.jpg" alt="Du">Du-It</a>
                                        <a class="dropdown-item text-13" href="#"><img src="media/figure/flag_9.jpg" alt="Rus">Rus-Rs</a>
                                    </div>
                                </li>
                                <li class="navbar-item dropdown nav-message">
                                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="flaticon-null-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <h5 class="main-heading text-body text-bold mb-1">Messages</h5>
                                        <div class="sub-heading text-12 text-manatee">You have 4 unread messages</div>
                                        <div class="nofify-list">
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_1.jpg" alt="thumb">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="item-title text-14 text-bold mb-1">Thomas Henry</h6>
                                                    <p class="text-13">There many variations dumm more the of available.</p>
                                                    <div class="text-12 text-manatee">Mar 15 3:55 PM</div>
                                                </div>
                                            </a>
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_4.jpg" alt="thumb">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="item-title text-14 text-bold mb-1">Tom Black</h6>
                                                    <p class="text-13">There many variations dumm more the of available.</p>
                                                    <div class="text-12 text-manatee">Mar 17 6:12 PM</div>
                                                </div>
                                            </a>
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/admin.jpg" alt="thumb">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="item-title text-14 text-bold mb-1">Jasmine Roberts</h6>
                                                    <p class="text-13">There many variations dumm more the of available.</p>
                                                    <div class="text-12 text-manatee">Mar 18 2:36 PM</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="view-btn">
                                            <a href="#">VIEW ALL</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="navbar-item dropdown nav-notification">
                                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="flaticon-null-17"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-body text-bold mb-1">Notification</h5>
                                            <a href="#" class="text-12 text-manatee text-bold">Mark All</a>
                                        </div>
                                        <div class="nofify-list">
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_13.jpg" alt="thumb">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="item-title text-13 text-bold mb-1">Requested to Widthdrawl</h6>
                                                    <div class="sub-title text-12 text-manatee">2 Hrs Ago</div>
                                                </div>
                                            </a>
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_14.jpg" alt="thumb">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="item-title text-13 text-bold mb-1">New user registered.</h6>
                                                    <div class="sub-title text-12 text-manatee">5 Hrs Ago</div>
                                                </div>
                                            </a>
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/admin.jpg" alt="thumb">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="item-title text-13 text-bold mb-1">Thomas Henry Added!</h6>
                                                    <div class="sub-title text-12 text-manatee">5 Hrs Ago</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="view-btn">
                                            <a href="#">VIEW ALL</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="navbar-item dropdown nav-admin">
                                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><img src="media/figure/admin.jpg" alt="">Maria Ree<i class="flaticon-null-16"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <h5 class="text-bold text-body mb-0">Maria Ree</h5>
                                        <div class="text-14 text-manatee">Graphic Design</div>
                                        <ul class="settings-list">
                                            <li><a href="#"><i class="far fa-user"></i>View Profile</a></li>
                                            <li><a href="#"><i class="fas fa-edit"></i>Account Setting</a></li>
                                            <li><a href="#"><i class="fas fa-question"></i>Help Center</a></li>
                                            <li><a href="#"><i class="fas fa-lock"></i>Lock screen</a></li>
                                        </ul>
                                        <div class="sign-btn">
                                            <a href="#">SIGN OUT</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                                    <h1>Welcome to Dashboard :)</h1>
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
                                                    <img src="media/figure/img_1.jpg" alt="Girl">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-date">22 Jun. 2020</div>
                                                    <h4 class="item-title">Keith Jensen requested to Widthdrawl.</h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_2.jpg" alt="Girl">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-date">24 Jun. 2020</div>
                                                    <h4 class="item-title">Rrob Riggle contract document for sales.</h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_3.jpg" alt="Girl">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-date">24 Jun. 2020</div>
                                                    <h4 class="item-title">Socrates Itumay got a huge bonus.</h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_4.jpg" alt="Girl">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-date">24 Jun. 2020</div>
                                                    <h4 class="item-title">Kirby Avendula car deposited funds.</h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_5.jpg" alt="Girl">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-date">03 Aug 2020</div>
                                                    <h4 class="item-title">Marianne Audrey placed a Order.</h4>
                                                </div>
                                            </div>
                                            <div class="media d-none d-xxl-flex">
                                                <div class="item-img">
                                                    <img src="media/figure/img_6.jpg" alt="Girl">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-date">15 Aug. 2020</div>
                                                    <h4 class="item-title">Socrates Itumay Has joined the team</h4>
                                                </div>
                                            </div>
                                            <div class="media d-none d-xxl-flex">
                                                <div class="item-img">
                                                    <img src="media/figure/img_5.jpg" alt="Girl">
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
                                                        <td class="d-flex align-items-center"><img src="media/figure/flag_1.jpg" alt="img">
                                                            <div>United States</div>
                                                        </td>
                                                        <td>13,495</td>
                                                        <td class="text-semibold">$170,400.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="d-flex align-items-center"><img src="media/figure/flag_2.jpg" alt="img">
                                                            <div>Netherlands</div>
                                                        </td>
                                                        <td>11,495</td>
                                                        <td class="text-semibold">$125,400.80</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="d-flex align-items-center"><img src="media/figure/flag_3.jpg" alt="img">
                                                            <div>United Kingdom</div>
                                                        </td>
                                                        <td>09,348</td>
                                                        <td class="text-semibold">$90,735.30</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="d-flex align-items-center"><img src="media/figure/flag_4.jpg" alt="img">
                                                            <div>Canada</div>
                                                        </td>
                                                        <td>07,845</td>
                                                        <td class="text-semibold">$84,954.70</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="d-flex align-items-center"><img src="media/figure/flag_5.jpg" alt="img">
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
                                                    <img src="media/figure/notify_1.jpg" alt="Notification">
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
                                                    <img src="media/figure/notify_2.jpg" alt="Notification">
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
                                                    <img src="media/figure/notify_3.jpg" alt="Notification">
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
                                                        <td class="d-flex align-items-center"><img src="media/figure/img_7.jpg" alt="img">
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
                                                        <td class="d-flex align-items-center"><img src="media/figure/img_8.jpg" alt="img">
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
                                                        <td class="d-flex align-items-center"><img src="media/figure/img_9.jpg" alt="img">
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
                                                        <td class="d-flex align-items-center"><img src="media/figure/img_10.jpg" alt="img">
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
                                                        <td class="d-flex align-items-center"><img src="media/figure/img_11.jpg" alt="img">
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
                                                        <td class="d-flex align-items-center"><img src="media/figure/img_12.jpg" alt="img">
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
                <footer class="footer-wrap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="copyright-text">© 2020 <span>Dashy</span>. Template by affixtheme</div>
                            </div>
                            <div class="col-sm-6">
                                <ul class="footer-link">
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>



            </div>
        </div>
    </div>
    <!-- Dependencies Js -->
    <script src="dependencies/jquery/js/jquery.min.js"></script>
    <script src="dependencies/popper.js/js/popper.min.js"></script>
    <script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="dependencies/chart.js/js/Chart.min.js"></script>
    <script src="dependencies/apexchart/apexcharts.min.js"></script>
    <script src="dependencies/apexchart/irregular-data-series.js"></script>
    <script src="dependencies/apexchart/ohlc.js"></script>
    <script src="dependencies/jvectormap/js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="dependencies/jvectormap/js/jquery-jvectormap-world-mill.js"></script>
    <script src="dependencies/jvectormap/js/jquery-jvectormap-us-aea.js"></script>
    <script src="dependencies/jvectormap/js/gdp-data.js"></script>
    <script src="dependencies/fullcalendar/main.min.js"></script>
    <script src="dependencies/select2/js/select2.min.js"></script>
    <script src="dependencies/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="dependencies/flatpicker/js/flatpickr.min.js"></script>
    <script src="dependencies/quill/quill.min.js"></script>
    <script src="assets/js/vector-map.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/apex-chart.js"></script>


    <!-- Preloader Js -->
    <script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/app.js"></script>
</body>

</html>
