<?php declare(strict_types=1);
    print_r("Sono in confirm.php<br><br>");
    require_once(ROOT . 'app/controller/lib/_libs.php');
    $flagConfirm = TRUE; //per evitare nel destroy il redirect a LOGIN
    require_once(ROOT . 'app/controller/lib/session/session_destroy.php');

    require_once(ROOT . 'app/model/database.php');
    require_once(ROOT . 'app/model/NomiTabelle.php');

    $token = $_POST['token'];

    $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);

    // Preparazione della query per la select
    $params_where = array(
        ':token' => $token
    );
    print_r($params_where);
    print_r("<br><br>");

    $params_select = "u.id as idUtente, u.username, u.password, p.email, u.token";

    //Controllo prima che token non esista
    $query = "SELECT $params_select FROM " . getNomeTabella($TABLEPREFIX, NomiTabella::USERS) . " u LEFT JOIN " . getNomeTabella($TABLEPREFIX, NomiTabella::PERSON) . " p on p.idUser = u.id WHERE u.token = :token AND (u.isActive = 0 OR u.isActive IS NULL)";
    print_r($query);
    $row = $database->select($query, $params_where);
    print_r($row);
    if ($row) {
        $update = "UPDATE " . getNomeTabella($TABLEPREFIX, NomiTabella::USERS) . " SET token = NULL, isActive = 1 WHERE token = :token";
        $update_id = $database->update($update, $params_where);
        print_r("Numero di righe aggiornate: " . $update_id);

        //ora effettuo auto-login
        //in $row ho tutte le info avendo fatto SELECT ALL
        //compilo $_SESSION
        $_SESSION[$config['session']['keys']['IDUSER']] = $row['idUtente'];
        $_SESSION[$config['session']['keys']['USERNAME']] = $row['username'];
        $_SESSION[$config['session']['keys']['PASSWORD']] = $row['password'];
        $_SESSION[$config['session']['keys']['EMAIL']] = $row['email'];
        $_SESSION[$config['session']['keys']['TOKEN']] = "DA COSTRUIRE"; // da implementare token
        $_SESSION[$config['session']['keys']['LAST_ACTIVITY']] = "DA PENSARE"; // da pensare se al momento del confirm bisogna fare qualcosa

        print_r($_SESSION);
        //eseguo Location a Home.php
        echo "Account confermato!<br>";
        echo "Ora puoi chiudere questa pagina.<br>";
    }else{
        print_r("Stampare errore");
    }

?>
