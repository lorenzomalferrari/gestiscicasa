<!doctype html>
<html class="no-js" lang="">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashy | Email Read</title>
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
                                    <li class="dsy-menu-item sidebar-nav-item">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-1"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Dashboards</span>
                                            <span class="dsy-menu-count">03</span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
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
                                    <li class="dsy-menu-item sidebar-nav-item active">
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
                                            <li class="dsy-nav-item active">
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
                                                <a href="reset_psw.php" class="dsy-menu-link">Password Reset</a>
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
                <div class="breadcrumbs-wrap">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-12">
                                <div class="breadcrumbs-area">
                                    <h1>Inbox</h1>
                                </div>
                            </div>
                            <div class="col-sm-8 col-12">
                                <div class="breadcrumbs-area text-sm-right">
                                    <ul>
                                        <li>
                                            <a href="index.php">APPS</a>
                                        </li>
                                        <li>Email</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=====================================-->
                <!--=         	Email Start          	=-->
                <!--=====================================-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card email-aside">
                                <div class="card-body">
                                    <button id="mail-compose-btn" class="compose-btn">Compose</button>
                                    <div class="side-category">
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#" class="menu-link active">
                                                    <span class="mail-title">
                                                        <i class="flaticon-null-6"></i>Inbox
                                                    </span>
                                                    <span class="mail-count">(15)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <span class="mail-title">
                                                        <i class="flaticon-star"></i>Starred
                                                    </span>
                                                    <span class="mail-count">(7)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <span class="mail-title">
                                                        <i class="flaticon-diamond"></i>Important
                                                    </span>
                                                    <span class="mail-count">(9)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <span class="mail-title">
                                                        <i class="flaticon-folder"></i>Draft
                                                    </span>
                                                    <span class="mail-count">(15)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <span class="mail-title">
                                                        <i class="flaticon-export"></i>Sent Mail
                                                    </span>
                                                    <span class="mail-count">(12)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <span class="mail-title">
                                                        <i class="flaticon-delete"></i>Trash
                                                    </span>
                                                    <span class="mail-count">(8)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="side-category category-label">
                                        <label>LABEL</label>
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <i class="flaticon-folder"></i>
                                                    Social
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <i class="flaticon-folder"></i>
                                                    Promotions
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <i class="flaticon-folder"></i>
                                                    Updates
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <i class="flaticon-folder"></i>
                                                    Business
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="menu-link">
                                                    <i class="flaticon-folder"></i>
                                                    Finance
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="side-category category-chat">
                                        <label>CHAT</label>
                                        <div class="chat-list">
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_7.jpg" alt="Chat">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-content">
                                                        <h6 class="item-title">Keith Jensen</h6>
                                                        <div class="item-subtitle">How are you</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_8.jpg" alt="Chat">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-content">
                                                        <h6 class="item-title">Jacob Hunter</h6>
                                                        <div class="item-subtitle">Fine! &amp; you</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_32.jpg" alt="Chat">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-content">
                                                        <h6 class="item-title">Socrates Itumay</h6>
                                                        <div class="item-subtitle">Hello!</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/img_9.jpg" alt="Chat">
                                                </div>
                                                <div class="media-body">
                                                    <div class="item-content">
                                                        <h6 class="item-title">Keith Jensen</h6>
                                                        <div class="item-subtitle">Yes</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card email-table">
                                <div class="card-body">
                                    <div class="item-heading">
                                        <ul class="action-btn">
                                            <li class="btn-icon">
                                                <a href="#"><i class="fas fa-hdd"></i></a>
                                                <a href="#"><i class="fas fa-info"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </li>
                                            <li>
                                                <div class="dropdown text-right">
                                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-folder-open"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Team Manage</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown text-right">
                                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-tags"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Team Manage</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="more-option">
                                                <div class="dropdown text-right">
                                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                        More
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Mark as Unread</a>
                                                        <a class="dropdown-item" href="#">Mark as Important</a>
                                                        <a class="dropdown-item" href="#">Add to Tasks</a>
                                                        <a class="dropdown-item" href="#">Add Star</a>
                                                        <a class="dropdown-item" href="#">Mute</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single-email">
                                        <div class="mail-author">
                                            <div class="row align-items-center">
                                                <div class="col-sm-9">
                                                    <div class="media">
                                                        <div class="item-img">
                                                            <img src="media/figure/user_1.jpg" alt="author">
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="author-name">Anderson Mark</h6>
                                                            <div class="author-mail">support@domain.com</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 d-flex justify-content-sm-end">
                                                    <div class="mail-date">Mar 8</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-details">
                                            <h4 class="text-xtrabold text-body mb-3">This Week's Top Stories</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered thaat as alteration in that some form by injected humour or randomised words which don't look even slightly that believable. If you are going a to use a passage of Lorem Ipsum you need to be sure there isn't anything as that many more embarrassing.</p>
                                            <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered thaat as alteration in that some form by injected humour or randomised words.</p>
                                            <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered thaat as alteration in that some form by injected humour or randomised words which don't look even slightly that believable. If you are going a to use a passage of Lorem Ipsum you need to be sure there isn't anything as that many more embarrassing.</p>
                                            <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered thaat as alteration in that some form by injected humour or randomised words.</p>
                                            <div class="mail-regard">
                                                <div class="regard-text">Sincerely yours,</div>
                                                <div class="autor-title">Envato Design Team</div>
                                            </div>
                                            <div class="mail-form">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12 form-group">
                                                            <textarea name="message" id="message" class="form-control" placeholder="Type here to Reply or Forward" cols="30" rows="6"></textarea>
                                                        </div>
                                                        <div class="col-sm-6 form-group">
                                                            <div class="form-icon">
                                                                <a href="#"><i class="fas fa-bold"></i></a>
                                                                <a href="#"><i class="fas fa-italic"></i></a>
                                                                <a href="#" class="active"><i class="fas fa-underline"></i></a>
                                                                <a href="#"><i class="fas fa-link"></i></a>
                                                                <a href="#"><i class="fas fa-image"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 form-group d-flex justify-content-sm-end">
                                                            <button type="submit" class="submit-btn">Reply</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mail compose box -->
                <div class="mail-compose-wrap" id="mail-compose">
                    <div class="compose-dialog">
                        <div class="compose-header">
                            <h3 class="compose-heading">New Message</h3>
                            <div class="heading-icon">
                                <button id="compose-minimize" class="action-icon"><i class="fas fa-minus"></i></button>
                                <button id="compose-shrink" class="action-icon"><i class="fas fa-expand-alt"></i></button>
                                <button id="compose-close" class="action-icon"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="compose-body">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2">
                                    <div class="input-label">
                                        <label>Recipient:</label>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" placeholder="Enter Recipient email address">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2">
                                    <div class="input-label">
                                        <label>Subject:</label>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div id="quill-editor" class="quill-text-area"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div id="quill-toolbar" class="ql-toolbar">
                                        <span class="ql-formats">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-link"></button>
                                            <button class="ql-image"></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="btn-area">
                                        <button class="submit-btn">Save Draft</button>
                                        <button class="submit-btn">Send</button>
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
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/apex-chart.js"></script>


    <!-- Preloader Js -->
    <script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/app.js"></script>
</body>

</html>