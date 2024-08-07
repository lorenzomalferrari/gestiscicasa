<?php

declare(strict_types=1);
require_once("../controller/lib/libs.php");
$titlePage = "Reset password";
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <?php require_once(ROOT . 'app/view/components/template/_head.php'); ?>
</head>

<body>
    <!-- Page Loader Start -->
    <?php //require_once("template/_preloader.php"); ?>
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
                    require_once("template/_menu.php");
                    ?>
                    <!-- Fine menù laterale -->
                    <!-- Inizio intestazione -->
                    <?php
                    require_once("template/_navbar.php");
                    ?>
                    <!-- Fine intestazione -->
                </header>

                <!--=====================================-->
                <!--=         	Email Start          	=-->
                <!--=====================================-->
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card login-form reset_psw">
                                <div class="card-body">
                                    <div class="item-logo">
                                        <img src="media/logo-large.png" alt="Dashy">
                                    </div>
                                    <h3 class="text-body text-bold mb-1">Reset password</h3>
                                    <div class="text-manatee">If you forgot your password, well, then we’ll email you instructions to
                                        reset your password.</div>
                                    <form>
                                        <div class="form-group">
                                            <div class="input-label">
                                                <label>Email</label>
                                                <a href="#">Bisogno di aiuto?</a>
                                            </div>
                                            <input id="email" type="email" class="form-control" placeholder="Enter your email address or username" name="email">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="submit-btn">SEND RESET LINK</button>
                                        </div>
                                    </form>
                                    <a href="login.php" class="login-back">Ritorna al login</a>
                                    <?php require_once("template/_copyright.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("template/_script.php"); ?>
</body>

</html>
