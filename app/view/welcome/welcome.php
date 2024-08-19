<?php declare(strict_types=1);
    require_once("../../controller/lib/libs.php");
    $titlePage = "Benvenuti";
    $sesso_options = "<option value=\"scegli\">Scegli</option>";
    require_once(ROOT . "app/view/welcome/setInputFields.php");
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
                            <a href="index.php"><img src="<?php ROOT . "public/vendor/media/logo-large.png"; ?>" alt="<?php echo CONFIG['site']['name']; ?>"></a>
                        </div>
                        <h3 class="text-body text-bold mb-1 text-22"><?php echo $titlePage; ?></h3>
                        <div class="text-manatee">
                            Benvenuto in <strong><?php echo CONFIG['site']['name']; ?></strong>
                            <br>
                            <!--
                            Questo progetto nasce privato per gestire le mie esigenze in casa e visto che potrebbero
                            essere le esigenze di tutti l'ho voluto potenziare e rendere disponibile a tutti!!
                            -->
                            <br>
                            Prima di continuare abbiamo bisogno di qualche altro dato.
                            <br>
                            Compila i campi sottostanti e conferma l'account tramite il link che troverai nella email appena inviata
                            a <strong><?php echo $_SESSION["EMAIL"]; ?></strong>
                        </div>
                        <?php require_once(ROOT . "app/view/welcome/welcome-form.php"); ?>
                        <?php require_once(ROOT . "app/view/components/template/_copyright.php"); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once(ROOT . "app/view/components/template/_script.php"); ?>
    </body>
</html>
