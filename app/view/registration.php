<?php

declare(strict_types=1);
require_once("../controller/lib/libs.php");
$titlePage = "Registrazione";
?>
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
            <div class="card login-form register-form">
                <div class="card-body">
                    <div class="item-logo">
                        <a href="index.php"><img src="../../public/vendor/media/logo-large.png" alt="<?php echo CONFIG['site']['name']; ?>"></a>
                    </div>
                    <h3 class="text-body text-bold mb-1 text-22"><?php echo $titlePage; ?></h3>
                    <div class="text-manatee">
                        Crea un nuovo accout su <?php echo CONFIG['site']['name']; ?>
                    </div>
                    <form id="registration_form" action="../controller/registerController.php" method="post">

                        <!-- Feedback per stato utente -->
                        <div id="username-status-feedback" class="feedback"></div>

                        <div class="form-group">
                            <div class="input-label">
                                <label>Username</label>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username"
                                oninput="validateUsername()" onblur="validateUsername()">
                            <div class="invalid-feedback" id="username-error"></div>
                        </div>

                        <!-- Feedback per stato utente -->
                        <div id="email-status-feedback" class="feedback"></div>

                        <div class="form-group">
                            <div class="input-label">
                                <label>Email</label>
                            </div>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email"
                                oninput="validateEmail()" onblur="validateEmail()">
                            <div class="invalid-feedback" id="email-error"></div>
                        </div>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Password</label>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password"
                                oninput="validatePassword()" onblur="validatePassword()">
                            <a href="#" class="passcode-eye"><i class="far fa-eye"></i></a>
                            <div class="invalid-feedback" id="password-error"></div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="privacy_terms" checked>
                                <label class="form-check-label" for="privacy_terms">Sono d'accordo con <?php echo CONFIG['site']['name']; ?> sulla <a href="#">Privacy Policy</a> e sui <a href="#">Termini</a></label>
                            </div>
                            <div class="invalid-feedback" id="privacy-error"></div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="submit-btn" onclick="checkRegistration()">REGISTRA</button>
                        </div>
                    </form>

                    <ul class="account-create">
                        <li>Hai già un account? <a href="login.php">Accedi</a></li>
                        <!--<li class="social-icon">
                                <a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="bg-google"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            -->
                    </ul>
                    <?php require_once(ROOT . "app/view/components/template/_copyright.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <?php require_once(ROOT . "app/view/components/template/_script.php"); ?>
</body>

</html>
