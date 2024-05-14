<?php
    require_once('lib/_libs.php');
    print_r("<br> fine _libs");
    require_once('../model/database.php');

    print_r($_POST);
    print_r("<br>" . $_SERVER["REQUEST_METHOD"] . "<br>");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r($_POST);

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $table =  $TABLEPREFIX . 'Users';

        $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);

        // Preparazione della query
        $params = array(
            ':  username' => $username,
            /*':email' => $email,*/
            ':password' => $password,
            ':token' => $UNIQ_TOKEN
        );

        //Controllo prima che Utente non esista già
        $query = "SELECT * FROM $table WHERE username = :username";
        $row = $database->select($query, $params);
        if ($row) {
            echo "Utente già presente con questo username: " . json_encode($row);
        }else {
            //Gestisco l'inserimento in DB
            $insert = "INSERT INTO $table (username, password, token) VALUES (:username, :password, :token)";
            $new_user_id = $database->insert($insert, $params);

            if ($new_user_id) {
                echo "Utente creato id: " . $new_user_id;

                //compilo SESSION
                $row = array(
                    "id" => $new_user_id,
                    "username" => $username,
                    "password" => $password,
                    "email" => $email
                );

                require_once("lib/_setSession.php");

                echo "Login riuscito!<br>";
                print_r($_SESSION);

                require_once("sendEmail.php");

                header("Location: " . "../view/welcome.php");
            } else {
                echo "Utente non creato";
            }
        }
    }
?>
