<?php declare(strict_types=1);
    require_once("../controller/lib/_libs.php");
    //print_r($_SESSION);
    $titlePage = "Login";
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php require_once("head/_head.php"); ?>
    </head>

    <body>
        <!-- Page Loader Start -->
        <?php //require_once("_preloader.php");
        ?>
        <!-- Page Loader End -->
        <a href="#main-wrapper" data-type="section-switch" class="scrollup">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <div id="main-wrapper" class="dsy-main-wrapper">
            <div class="dsy-page">
                <div class="card login-form">
                    <div class="card-body">
                        <div class="item-logo">
                            <a href="index.php"><img src="../../public/assets/media/logo-large.png" alt="<?php echo $config['site']['name']; ?>"></a>
                        </div>
                        <h3 class="text-body text-bold mb-1"><?php echo $titlePage; ?></h3>
                        <div class="text-manatee">Accedi a <strong><?php echo $config['site']['name']; ?></strong>
                            usando usarname o email e la password
                        </div>
                        <form id="login_form" action="../controller/loginController.php" method="post">
                            <div class=" form-group">
                                <div class="input-label">
                                    <label>Username o email</label>
                                    <a href="#">Bisogno di aiuto?</a>
                                </div>
                                <input type="text" class="form-control" placeholder="Inserire username o email" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <div class="input-label">
                                    <label>Password</label>
                                    <a href="passcode-reset.php">Dimenticata password?</a>
                                </div>
                                <input type="password" class="form-control" placeholder="Inserire la password" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <!-- <button type="submit" class="submit-btn">Login</button> -->
                                <button type="button" class="submit-btn" onclick="checkLogin()">Login</button>
                            </div>
                        </form>
                        <ul class="account-create">
                            <li>Nuovo sulla piattaforma? <a href="registration.php">Registrati</a></li>
                            <!--
                                    <li class="social-icon">
                                        <a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="bg-google"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    -->
                        </ul>
                        <?php require_once("copyright.php"); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("_script.php"); ?>
    </body>
</html>
