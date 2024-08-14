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
    <?php //require_once(ROOT . "app/view/components/template/_preloader.php");
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
                        Benvenuto in <span><?php echo CONFIG['site']['name']; ?></span>
                        <br>
                        Questo progetto nasce privato per gestire le mie esigenze in casa e visto che potrebbero
                        essere le esigenze di tutti l'ho voluto potenziare e rendere disponibile a tutti!!
                        <br>
                        Prima di continuare però ho bisogno di qualche altro dato.
                        <br>
                        Compila i campi sottostanti e conferma l'account tramite il link che troverai nella email inviata
                        a <?php echo $_SESSION["EMAIL"]; ?>
                    </div>
                    <form id="welcome_form" action="../controller/welcomeController.php" method="post">
                        <input type="hidden" name="<?php echo CONFIG['session']['keys']['IDUSER'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['IDUSER']]; ?>">
                        <input type="hidden" name="<?php echo CONFIG['session']['keys']['USERNAME'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['USERNAME']]; ?>">
                        <input type="hidden" name="<?php echo CONFIG['session']['keys']['PASSWORD'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['PASSWORD']]; ?>">
                        <input type="hidden" name="<?php echo CONFIG['session']['keys']['EMAIL'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['EMAIL']]; ?>">
                        <input type="hidden" name="<?php echo CONFIG['session']['keys']['TOKEN'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['TOKEN']]; ?>">

                        <div class="form-group">
                            <div class="input-label">
                                <label>Nome</label>
                            </div>
                            <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" required>
                        </div>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Cognome</label>
                            </div>
                            <input type="text" class="form-control" placeholder="Cognome" name="cognome" id="cognome" required>
                        </div>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Sesso</label>
                            </div>
                            <select class="form-control" name="sesso" id="sesso" required>
                                <?php echo $sesso_options; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="button" class="submit-btn" onclick="checkWelcome()">REGISTRA</button>
                        </div>
                    </form>
                    <?php require_once(ROOT . "app/view/components/template/_copyright.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <?php require_once(ROOT . "app/view/components/template/_script.php"); ?>
</body>

</html>
