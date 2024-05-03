<?php
    require_once('lib/_libs.php');
    print_r("<br> fine _libs");
    require_once('../model/database.php');

    print_r($_POST);
    print_r("<br>" . $_SERVER["REQUEST_METHOD"] . "<br>");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r($_POST);

        $name_form = $_POST['name'];
        $email_form = $_POST['email'];
        $pass_form = $_POST['pass'];
        $re_pass_form = $_POST['re_pass'];

        $table =  $TABLEPREFIX . 'Users';

        $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);

        // Preparazione della query
        $params = array(
            ':name' => $name_form,
            ':email' => $email_form,
            ':pass' => $pass_form
        );

        //Controllo prima che Utente non esista già
        $query = "SELECT * FROM $table WHERE username = :name AND email = :email AND password = :pass";
        $row = $database->select($query, $params);
        if ($row) {
            echo "Utente già presente: " . json_encode($row);
        }else {
            //Gestisco l'inserimento in DB
            $insert = "INSERT INTO $table (username, email, password) VALUES (:name, :email, :pass)";
            $new_user_id = $database->insert($insert, $params);

            if ($new_user_id) {
                echo "Utente creato id: " . $new_user_id;

                $_SESSION["IDUSER_SE"] = $new_user;
                $_SESSION["USER_SE"] = $name_form;
                $_SESSION["PASSWORD_SE"] = $pass_form;
                $_SESSION["EMAIL_SE"] = $email_form;

                echo "Login riuscito!<br>";
                print_r($_SESSION);
                header("Location: " . "../view/home.php");
            } else {
                echo "Utente non creato";
            }
        }
    }
?>
