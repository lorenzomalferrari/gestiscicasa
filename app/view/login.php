<?php
    require_once("../controller/lib/_libs.php");
    $titlePage = "Login";
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <?php require_once("head/_head.php"); ?>
</head>

<body>
    <!-- Page Loader Start -->
    <div id="preloader" class="preloader-wrap">
        <div class="preloader-content">
            <figure class="preloader-logo">
                <img src="../../public/assets/media/logo.png" alt="Logo">
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
            <div class="card login-form">
                <div class="card-body">
                    <div class="item-logo">
                        <a href="index.php"><img src="../../public/assets/media/logo-large.png" alt="<?php echo $NOME_PROGETTO; ?>"></a>
                    </div>
                    <h3 class="text-body text-bold mb-1">Login</h3>
                    <div class="text-manatee">Accedi a <?php echo $NOME_PROGETTO; ?> usando usarname o email e la password</div>
                    <form>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Email or Username</label>
                                <a href="#">Bisogno di aiuto?</a>
                            </div>
                            <input type="text" class="form-control" placeholder="Inserire username o email" name="email">
                        </div>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Password</label>
                                <a href="passcode-reset.php">Dimenticata password?</a>
                            </div>
                            <input type="password" class="form-control" placeholder="Inserire la password" name="password">
                        </div>
                        <div class="form-group">
                            <button type="button" class="submit-btn">Login</button>
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
