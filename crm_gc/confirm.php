<?php declare(strict_types=1);
    require_once('app/controller/lib/libs.php');
    $flagConfirm = TRUE; //per evitare nel destroy il redirect a LOGIN
    require_once(ROOT . 'app/controller/lib/session/_session_destroy.php');

    $titlePage = "Account Confermato";
    /*
    // Crea un'istanza della classe Token
    $tokenModel = new Token(CRYPTO_KEY);
    // Crea un'istanza del TokenController
    $tokenController = new TokenController($tokenModel);
    $isValid = $tokenController->validateToken($_POST['token']);
    */
    $token = $_POST['token'];

    // Preparazione della query per la select
    $params_where = array(
        ':token' => $token
    );

    $params_select = "u." . UsersTable::ID . " as idUtente, u." . UsersTable::USERNAME . ", u." . UsersTable::PASSWORD . ", p." . PersonTable::EMAIL . ", u." . UsersTable::TOKEN;

    //Controllo prima che token non esista
    $query = "SELECT $params_select FROM "
        . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERS) . " u "
        . " LEFT JOIN " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PEOPLE) . " p "
        . " on p." . PersonTable::USER_ID . " = u." . UsersTable::ID . " "
        . " WHERE "
        . "         u." . UsersTable::TOKEN . " = :token
                        AND
                            (
                                    u." . UsersTable::IS_ACTIVE . " = 0
                                OR
                                    u." . UsersTable::IS_ACTIVE . " IS NULL
                            )";
    //applicare log in select
    $row = DB->select($query, $params_where);

    if ($row) {
        $update =
            "UPDATE " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERS)
            . " SET " . UsersTable::TOKEN . " = NULL "
            . " WHERE " . UsersTable::TOKEN . " = :token";
        //applicare log in update
        $update_id = DB->update($update, $params_where);
        //print_r("Numero di righe aggiornate: " . $update_id);

        //ora effettuo auto-login
        //in $row ho tutte le info avendo fatto SELECT ALL
        //compilo $_SESSION
        $_SESSION[CONFIG['session']['keys']['IDUSER']] = $row['idUtente'];
        $_SESSION[CONFIG['session']['keys']['USERNAME']] = $row['username'];
        $_SESSION[CONFIG['session']['keys']['PASSWORD']] = $row['password'];
        $_SESSION[CONFIG['session']['keys']['EMAIL']] = $row['email'];
        $_SESSION[CONFIG['session']['keys']['TOKEN']] = "DA COSTRUIRE"; // da implementare token
        $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']] = time(); // da pensare se al momento del confirm bisogna fare qualcosa
    } else {
        print_r("Stampare errore");
        // applicare eccezione e registrare error log su utente?
    }
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
                        <a href="index.php"><img src="<?php echo PATH . "public/vendor/media/logo-large.png"; ?>" alt="<?php echo CONFIG['site']['name']; ?>"></a>
                    </div>
                    <h3 class="text-body text-bold mb-1 text-22"><?php echo $titlePage; ?></h3>
                    <div class="text-manatee">
                        <p>Ora puoi chiudere questa pagina.</p>
                    </div>
                    <?php require_once(ROOT . "app/view/components/template/_copyright.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <?php require_once(ROOT . "app/view/components/template/_script.php"); ?>
</body>
</html>
