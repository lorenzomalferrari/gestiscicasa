<?php
    print_r("Sono in confirm.php<br><br>");
    require_once('app/controller/lib/_libs.php');
    $flagConfirm = TRUE; //per evitare nel destroy il redirect a LOGIN
    require_once('app/controller/lib/session/session_destroy.php');

    require_once(ROOT . 'app/model/database.php');

    $token = $_POST['token'];

    $table =  $TABLEPREFIX . 'Users';
    $table2 =  $TABLEPREFIX . 'Person';

    $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);

    // Preparazione della query per la select
    $params_where = array(
        ':token' => $token
    );
    print_r($params_where);
print_r("<br><br>");

$params_select = "u.id as idUtente, u.username, u.password, p.email, u.token";

    //Controllo prima che token non esista
    $query = "SELECT $params_select FROM $table u LEFT JOIN $table2 p on p.idUser = u.id WHERE u.token = :token AND (u.isActive = 0 OR u.isActive IS NULL)";
print_r($query);
    $row = $database->select($query, $params_where);
    print_r($row);
    if ($row) {
        $update = "UPDATE $table SET token = NULL, isActive = 1 WHERE token = :token";
        $update_id = $database->update($update, $params_where);
        print_r("Numero di righe aggiornate: " . $update_id);

        //ora effettuo auto-login
        //in $row ho tutte le info avendo fatto SELECT ALL
        //compilo $_SESSION
        $_SESSION[$config['session']['keys'][0]] = $row['idUtente'];
        $_SESSION[$config['session']['keys'][1]] = $row['username'];
        $_SESSION[$config['session']['keys'][2]] = $row['password'];
        $_SESSION[$config['session']['keys'][3]] = $row['email'];
        $_SESSION[$config['session']['keys'][4]] = "DA COSTRUIRE"; // da implementare token

        print_r($_SESSION);
        //eseguo Location a Home.php
        echo "Account confermato!<br>";
        //header("Location: " . "../view/home.php");


    }else{
        print_r("Stampare errore");
    }

?>
