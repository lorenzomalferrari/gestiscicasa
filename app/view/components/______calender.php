<!doctype html>
<html class="no-js" lang="">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashy | Calender</title>
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
                                    <li class="dsy-menu-item active">
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
                                    <h1>Calendar</h1>
                                </div>
                            </div>
                            <div class="col-sm-8 col-12">
                                <div class="breadcrumbs-area text-sm-right">
                                    <ul>
                                        <li>
                                            <a href="index.php">APPS</a>
                                        </li>
                                        <li>Calendar</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=====================================-->
                <!--=         	Calender Start          =-->
                <!--=====================================-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card my-calender">
                                <div class="card-body">
                                    <h3 class="section-title">My Calender</h3>
                                    <div class="calender-img">
                                        <img src="media/figure/calender.png" alt="Calender">
                                    </div>
                                    <div id="fc-calendar-sm" class="fc-calendar-sm"></div>
                                    <div class="event-list">
                                        <h6 class="text-bold text-body">Event List</h6>
                                        <ul>
                                            <li class="pseudo-bg-blueribbon">Calendar Events</li>
                                            <li class="pseudo-bg-eggblue">Birthday Events</li>
                                            <li class="pseudo-bg-apple">Holiday Calendar</li>
                                            <li class="pseudo-bg-e-violet">Discovered Events</li>
                                            <li class="pseudo-bg-redribbon">Meetup Events</li>
                                            <li class="pseudo-bg-tahitigold">Other Events</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card event-calender">
                                <div class="card-body">
                                    <div id="fc-calendar" class="fc-calendar"></div>
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

    <script src="assets/js/calender.js"></script>


    <!-- Preloader Js -->
    <script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/app.js"></script>
</body>

</html>