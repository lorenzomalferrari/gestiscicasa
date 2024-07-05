<?php declare(strict_types=1);
    require_once('app/controller/lib/libs.php');
    $flagConfirm = TRUE; //per evitare nel destroy il redirect a LOGIN
    require_once(ROOT . 'app/controller/lib/session/_session_destroy.php');
    
    require_once(ROOT . 'app/model/NomiTabelle.php');

    $token = $_POST['token'];

     

    // Preparazione della query per la select
    $params_where = array(
        ':token' => $token
    );

    $params_select = "u.id as idUtente, u.username, u.password, p.email, u.token";

    //Controllo prima che token non esista
    $query = "SELECT $params_select FROM " . getNomeTabella($configIstance->get('TABLEPREFIX'), NomiTabella::USERS) . " u LEFT JOIN " . getNomeTabella($configIstance->get('TABLEPREFIX'), NomiTabella::PERSON) . " p on p.idUser = u.id WHERE u.token = :token AND (u.isActive = 0 OR u.isActive IS NULL)";
    $row = DB->select($query, $params_where);

    if ($row) {
        $update = "UPDATE " . getNomeTabella($configIstance->get('TABLEPREFIX'), NomiTabella::USERS) . " SET token = NULL, isActive = 1 WHERE token = :token";
        $update_id = DB->update($update, $params_where);
        print_r("Numero di righe aggiornate: " . $update_id);

        //ora effettuo auto-login
        //in $row ho tutte le info avendo fatto SELECT ALL
        //compilo $_SESSION
        $_SESSION[CONFIG['session']['keys']['IDUSER']] = $row['idUtente'];
        $_SESSION[CONFIG['session']['keys']['USERNAME']] = $row['username'];
        $_SESSION[CONFIG['session']['keys']['PASSWORD']] = $row['password'];
        $_SESSION[CONFIG['session']['keys']['EMAIL']] = $row['email'];
        $_SESSION[CONFIG['session']['keys']['TOKEN']] = "DA COSTRUIRE"; // da implementare token
        $_SESSION[CONFIG['session']['keys']['LAST_ACTIVITY']] = "DA PENSARE"; // da pensare se al momento del confirm bisogna fare qualcosa

        //eseguo Location a Index
        echo "Account confermato!<br>";
        echo "Ora puoi chiudere questa pagina.<br>";
    }else{
        print_r("Stampare errore");
    }
