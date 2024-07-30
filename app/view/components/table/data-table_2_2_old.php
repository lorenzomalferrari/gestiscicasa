<?php declare(strict_types=1);
    require_once("../../../controller/lib/libs.php");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <?php require_once(ROOT . "app/view/head/_head.php"); ?>
</head>

<body>
    <!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
    <!-- Page Loader Start -->
    <!--<div id="preloader" class="preloader-wrap">
        <div class="preloader-content">
            <figure class="preloader-logo">
                <img src="media/logo.png" alt="Logo">
            </figure>
            <div class="preloader-text">Dashy</div>
        </div>
    </div>-->
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
                                <a href="index.html" class="main-logo">
                                    <img src="media/main-logo.png" alt="logo">
                                </a>
                                <a href="index.html" class="logo-icon">
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
                                                <a href="index.html" class="dsy-menu-link">Sales Monitoring</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="index2.html" class="dsy-menu-link">Website Analytics</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="index3.html" class="dsy-menu-link">Cryptocurrency</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-label">
                                        <div class="dsy-menu-label-text">APPLICATIONS</div>
                                    </li>
                                    <li class="dsy-menu-item">
                                        <a href="calender.html" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-2"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="dsy-menu-item">
                                        <a href="chat.html" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-3"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Chat</span>
                                        </a>
                                    </li>
                                    <li class="dsy-menu-item">
                                        <a href="file-manager.html" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-4"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">File Manager</span>
                                        </a>
                                    </li>
                                    <li class="dsy-menu-item">
                                        <a href="contact.html" class="dsy-menu-link">
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
                                                <a href="email.html" class="dsy-menu-link">Inbox</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="email-read.html" class="dsy-menu-link">Read Mail</a>
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
                                                <a href="registration.html" class="dsy-menu-link">Registration</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="login.html" class="dsy-menu-link">Login</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="passcode-reset.html" class="dsy-menu-link">Password Reset</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="profile.html" class="dsy-menu-link">Profile</a>
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
                                                <a href="connections.html" class="dsy-menu-link">Connections</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="groups.html" class="dsy-menu-link">Groups</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="events.html" class="dsy-menu-link">Events</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="blog.html" class="dsy-menu-link">Blog</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="pricing.html" class="dsy-menu-link">Pricing Plan</a>
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
                                                <a href="alart.html" class="dsy-menu-link">Alart</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="badge.html" class="dsy-menu-link">Badge</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="button.html" class="dsy-menu-link">Button</a>
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
                                                <a href="basic-form.html" class="dsy-menu-link">Basic Form</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="advanced-form.html" class="dsy-menu-link">Advanced Form</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dsy-menu-item sidebar-nav-item active">
                                        <a href="#" class="dsy-menu-link">
                                            <span class="dsy-menu-link-icon">
                                                <i class="flaticon-null-12"></i>
                                            </span>
                                            <span class="dsy-menu-link-text">Tables</span>
                                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                                        </a>
                                        <ul class="dsy-sub-group sub-group-menu">
                                            <li class="dsy-nav-item">
                                                <a href="basic-table.html" class="dsy-menu-link">Basic Table</a>
                                            </li>
                                            <li class="dsy-nav-item active">
                                                <a href="data-table.html" class="dsy-menu-link">Data Table</a>
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
                                                <a href="chart-js.html" class="dsy-menu-link">ChartJs</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="apex-chart.html" class="dsy-menu-link">Apex Chart</a>
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
                                                <a href="google-map.html" class="dsy-menu-link">Google Map</a>
                                            </li>
                                            <li class="dsy-nav-item">
                                                <a href="vector-map.html" class="dsy-menu-link">Vector Map</a>
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
                                    <h1>Data Table</h1>
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
                <!--=         	Button Area Start         =-->
                <!--=====================================-->
                <div class="container-fluid">
                    <div class="card component-table">
                        <div class="card-body">
                            <h3 class="text-body text-center text-md-left text-22 text-bold mb-4">Data Table</h3>
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>POSITION</th>
                                            <th>OFFICE</th>
                                            <th>AGE</th>
                                            <th>START DATE</th>
                                            <th>SALARY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sydney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sydney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NAME</th>
                                            <th>POSITION</th>
                                            <th>OFFICE</th>
                                            <th>AGE</th>
                                            <th>START DATE</th>
                                            <th>SALARY</th>
                                        </tr>
                                    </tfoot>
                                </table>
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
    <?php require_once(ROOT . "app/view/template/_script.php"); ?>
</body>

</html>