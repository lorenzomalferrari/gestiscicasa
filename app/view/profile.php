<?php
    require_once("../controller/profileController.php");
    $titlePage = "Profilo";
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
                    <div class="breadcrumbs-wrap">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-12">
                                    <div class="breadcrumbs-area">
                                        <h1>User Profile</h1>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-12">
                                    <div class="breadcrumbs-area text-sm-right">
                                        <ul>
                                            <li>
                                                <a href="#">PAGES</a>
                                            </li>
                                            <li>
                                                <a href="#">USER PAGES</a>
                                            </li>
                                            <li>User Profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=         	Profile Start          	=-->
                    <!--=====================================-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card profile-aside">
                                    <div class="card-body">
                                        <div class="user-heading">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="media/figure/user_1.jpg" alt="User">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="user-title">Keith Jensen</h4>
                                                    <div class="user-email">Simenson@dashy.com</div>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="far fa-user"></i>View Profile</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-edit"></i>Account Setting</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-question"></i>Help</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-power-off"></i>Log Out</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-balance">
                                            <div class="item-title">ACCOUNT BALANCE</div>
                                            <div class="item-amount">12.395769 USD</div>
                                            <div class="item-pending">Pending 26,4851 USD</div>
                                        </div>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#presonal-info" role="tab" aria-selected="true">
                                                    <i class="flaticon-null-7"></i>Personal Infomation
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#notification" role="tab" aria-selected="false">
                                                    <i class="flaticon-null-17"></i>Notifications
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#account-activity" role="tab" aria-selected="false">
                                                    <i class="flaticon-levels"></i>Account Activity
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#security" role="tab" aria-selected="false">
                                                    <i class="flaticon-settings"></i>Security Settings
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card profile-info">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="presonal-info" role="tabpanel">
                                                <div class="profile-personal">
                                                    <div class="item-heading">
                                                        <h4 class="text-xtrabold text-body mb-1">Personal Information</h4>
                                                        <div class="text-gray text-15">Basic info, like your name and address, that you use on Nio Platform</div>
                                                    </div>
                                                    <div class="item-label">Basics Info</div>
                                                    <div class="table-responsive">
                                                        <table class="table basic-info table-borderless">
                                                            <tbody>
                                                                <tr data-toggle="modal" data-target="#info-edit">
                                                                    <td>Full Name</td>
                                                                    <td>Robert Cooper</td>
                                                                    <td><span class="arrow-icon"><i class="fas fa-angle-right"></i></span></td>
                                                                </tr>
                                                                <tr data-toggle="modal" data-target="#info-edit">
                                                                    <td>Display Name</td>
                                                                    <td>Robert</td>
                                                                    <td><span class="arrow-icon"><i class="fas fa-angle-right"></i></span></td>
                                                                </tr>
                                                                <tr data-toggle="modal" data-target="#info-edit">
                                                                    <td>Email</td>
                                                                    <td>Smith@dashy.com</td>
                                                                    <td><span class="arrow-icon"><i class="fas fa-angle-right"></i></span></td>
                                                                </tr>
                                                                <tr data-toggle="modal" data-target="#info-edit">
                                                                    <td>Phone Number</td>
                                                                    <td>Not add yet</td>
                                                                    <td><span class="arrow-icon"><i class="fas fa-angle-right"></i></span></td>
                                                                </tr>
                                                                <tr data-toggle="modal" data-target="#info-edit">
                                                                    <td>Date of Birth</td>
                                                                    <td>29 Feb, 1986</td>
                                                                    <td><span class="arrow-icon"><i class="fas fa-angle-right"></i></span></td>
                                                                </tr>
                                                                <tr data-toggle="modal" data-target="#info-edit">
                                                                    <td>Address</td>
                                                                    <td>Studio 101, 13 Bowden St Alexandria NSW, 2015</td>
                                                                    <td><span class="arrow-icon"><i class="fas fa-angle-right"></i></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="item-label">Preferences</div>
                                                    <div class="table-responsive">
                                                        <table class="table preferences-info table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Language</td>
                                                                    <td>English (United State)</td>
                                                                    <td><span class="arrow-icon"><a href="#" class="chng-btn">Change</a></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date Format</td>
                                                                    <td>M d, YYYY</td>
                                                                    <td><span class="arrow-icon"><a href="#" class="chng-btn">Change</a></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="border-0">Timezone</td>
                                                                    <td class="border-0">Washington, DC, USA (GMT-4)</td>
                                                                    <td class="border-0"><span class="arrow-icon"><a href="#" class="chng-btn">Change</a></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="notification" role="tabpanel">
                                                <div class="notify-setting">
                                                    <div class="item-heading">
                                                        <h3 class="text-xtrabold text-body mb-1">Notification Settings</h3>
                                                        <div class="text-gray text-15">You will get only notification what have enabled.</div>
                                                    </div>
                                                    <div class="security-notify">
                                                        <h5 class="text-body text-15 text-bold mb-1">Security Alerts</h5>
                                                        <div class="text-gray text-15 mb-3">You will get only those email notification what you want.</div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check1">
                                                            <label class="form-check-label" for="check1">Email me whenever encounter unusual activity</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2">
                                                            <label class="form-check-label" for="check2">Email me if new browser is used to sign in</label>
                                                        </div>
                                                    </div>
                                                    <div class="security-notify mb-0">
                                                        <h5 class="text-body text-15 text-bold mb-1">News</h5>
                                                        <div class="text-gray text-15 mb-3">You will get only those email notification what you want.</div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check3">
                                                            <label class="form-check-label" for="check3">Email me whenever encounter unusual activity</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check4">
                                                            <label class="form-check-label" for="check4">Email me if new browser is used to sign in</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="account-activity" role="tabpanel">
                                                <div class="account-activity">
                                                    <div class="item-heading">
                                                        <h3 class="text-xtrabold text-body mb-1">Login Activity</h3>
                                                        <div class="text-gray text-15">Here is your last 20 login activities log</div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless">
                                                            <thead>
                                                                <tr>
                                                                    <th>Browser</th>
                                                                    <th>IP</th>
                                                                    <th>Time</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Chrome on Window</td>
                                                                    <td>192.149.122.128</td>
                                                                    <td>11:34 PM</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mozilla on Window</td>
                                                                    <td>86.188.154.225</td>
                                                                    <td>Nov 20, 2019 10:34 PM <a href="#" class="dismis-btn"><i class="fas fa-times-circle"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Chrome on iMac</td>
                                                                    <td>192.149.122.128</td>
                                                                    <td>Nov 12, 2019 08:56 PM <a href="#" class="dismis-btn"><i class="fas fa-times-circle"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Chrome on Window</td>
                                                                    <td>192.149.122.128</td>
                                                                    <td>Nov 12, 2019 08:56 PM <a href="#" class="dismis-btn"><i class="fas fa-times-circle"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mozilla on Window</td>
                                                                    <td>86.188.154.225</td>
                                                                    <td>Nov 20, 2019 10:34 PM <a href="#" class="dismis-btn"><i class="fas fa-times-circle"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Chrome on iMac</td>
                                                                    <td>192.149.122.128</td>
                                                                    <td>Nov 12, 2019 08:56 PM <a href="#" class="dismis-btn"><i class="fas fa-times-circle"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Chrome on Window</td>
                                                                    <td>192.149.122.128</td>
                                                                    <td>Nov 12, 2019 08:56 PM <a href="#" class="dismis-btn"><i class="fas fa-times-circle"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="security" role="tabpanel">
                                                <div class="security-setting">
                                                    <div class="item-heading">
                                                        <h3 class="text-xtrabold text-body mb-1">Security Settings</h3>
                                                        <div class="text-gray text-15">These settings are helps you keep your account secure.</div>
                                                    </div>
                                                    <div class="security-option">
                                                        <div class="mg-b-40">
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <h6 class="text-body text-13 text-bold mb-1">Save my Activity Logs</h6>
                                                                    <div class="text-gray text-13">You can save your all activity logs including unusual activity detected.</div>
                                                                </div>
                                                                <div class="col-2 d-flex justify-content-end">
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="check5">
                                                                        <label class="form-check-label" for="check5"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mg-b-40">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <h6 class="text-body text-13 text-bold mb-1">Change Password</h6>
                                                                    <div class="text-gray text-13">Set a unique password to protect your account.</div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-right mt-sm-0 mt-2">
                                                                        <label class="text-11 text-gray mb-0 text-w-light mr-2">Last changed: Oct 2, 2019</label>
                                                                        <a href="#" class="item-btn">Change Password</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="row">
                                                                <div class="col-sm-9">
                                                                    <h6 class="text-body text-13 text-bold mb-1">2 Factor Auth <span class="text-blue-ribbon">Enabled</span></h6>
                                                                    <div class="text-gray text-13">Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app.</div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="text-sm-right mt-sm-0 mt-2">
                                                                        <a href="#" class="item-btn px-4">Disable</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Area Start -->
                    <div class="modal fade basic-info-modal" id="info-edit" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <h5 class="item-title">Update Profile</h5>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#presonal-update" role="tab" aria-selected="true">
                                            Personal
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#address-update" role="tab" aria-selected="false">
                                            Address
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active presonal-update" id="presonal-update" role="tabpanel">
                                        <form>
                                            <div class="row gutters-20">
                                                <div class="col-lg-6 form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" placeholder="Robert Copper" name="name">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label>Display Name</label>
                                                    <input type="text" class="form-control" placeholder="Robert" name="name">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" placeholder="+045" name="name">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label>Date of Birth</label>
                                                    <input type="text" class="form-control" placeholder="Date" name="name">
                                                </div>
                                                <div class="col-lg-12 form-group form-check">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="full-name">
                                                        <label class="form-check-label" for="full-name">Use full name to display</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <button type="submit" class="submit-btn">UPDATE PROFILE</button>
                                                    <button type="button" class="cancel-btn" data-dismiss="modal">CANCEL</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade address-update" id="address-update" role="tabpanel">
                                        <form>
                                            <div class="row gutters-20">
                                                <div class="col-lg-6 form-group">
                                                    <label>Address Line 1</label>
                                                    <input type="text" class="form-control" placeholder="2337 Kildeer Drive" name="address">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label>Address Line 1</label>
                                                    <input type="text" class="form-control" placeholder="----------" name="address">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" placeholder="Bowden" name="name">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" placeholder="USA" name="name">
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <button type="submit" class="submit-btn">UPDATE PROFILE</button>
                                                    <button type="button" class="cancel-btn" data-dismiss="modal">CANCEL</button>
                                                </div>
                                            </div>
                                        </form>
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
