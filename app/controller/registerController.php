<?php
    print_r("Sono in loginController<br><br>");
    print_r($_SESSION);
    print_r("<br><br>");
    print_r($_SERVER);
    require_once('lib/_libs.php');
    require_once(ROOT . 'app/model/database.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $table =  $TABLEPREFIX . 'Users';

        $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);

        // Preparazione della query per la select
        $params_select = array(
            ':username' => $username
        );

        //Controllo prima che Utente non esista già
        $query = "SELECT * FROM $table WHERE username = :username";
        $row = $database->select($query, $params_select);
        if ($row) {
            echo "Utente già presente con questo username: " . json_encode($row);
        }else {
            // Preparazione della query per la select
            $params_insert = array(
                ':username' => $username,
                /*':email' => $email,*/
                ':password' => $password,
                ':token' => $UNIQ_TOKEN,
            );

            //Gestisco l'inserimento in DB
            $insert = "INSERT INTO $table (username, password, token) VALUES (:username, :password, :token)";
            $new_user_id = $database->insert($insert, $params_insert);

            if ($new_user_id) {
                //echo "Utente creato id: " . $new_user_id;

                //compilo SESSION
                $row = array(
                    "id" => $new_user_id,
                    "username" => $username,
                    "password" => $password,
                    "email" => $email
                );
                print_r($row);
                print_r("<br><br><br>");
                require_once("lib/_setSession.php");

                echo "Login riuscito!<br>";
                print_r($_SESSION);

                require_once("sendEmail.php");

                //header("Location: " . "../view/welcome.php");
            } else {
                echo "Utente non creato";
            }
        }
    }
?>
