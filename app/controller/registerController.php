<?php declare(strict_types=1);
    require_once('lib/_libs.php');
    require_once(ROOT . 'app/model/database.php');
    require_once(ROOT . 'app/model/NomiTabelle.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);

        // Preparazione della query per la select
        $params_where = array(
            ':username' => $username
        );

        //Controllo prima che Utente non esista già
        $query = "SELECT * FROM " . getNomeTabella($TABLEPREFIX, NomiTabella::USERS) . " WHERE username = :username";
        $row = $database->select($query, $params_where);
        if ($row) {
            echo "Utente già presente con questo username: " . json_encode($row);
        }else {
            //prima di effettuare insert, devo verificare che email non sia già stata usata nel portale
            $params_selectP = array(
                ':email' => $email
            );

            $selectPerson = "SELECT COUNT(*) as count FROM " . getNomeTabella($TABLEPREFIX, NomiTabella::PERSON) . " WHERE email = :email";
            $countP = $database->select($selectPerson, $params_selectP)['count'];

            if($countP > 0){
                //bloccare tutto e restituire alert che email già presente
                die("Una utenza con l'email $email è già presente nel portale");
            }else{
                //inserisco utente, poi al welcome farò insert di Person
                // Preparazione della query per la INSERT in Utenti
                $params_insert = array(
                    ':username' => $username,
                    /*':email' => $email,*/
                    ':password' => $password,
                    ':token' => $UNIQ_TOKEN
                );

                //Gestisco l'inserimento in DB
                $insert = "INSERT INTO " . getNomeTabella($TABLEPREFIX, NomiTabella::USERS) . " (username, password, token) VALUES (:username, :password, :token)";
                $new_user_id = $database->insert($insert, $params_insert);
                print_r("Nuovo utente id: " . $new_user_id);

                if ($new_user_id) {
                    //echo "Utente creato id: " . $new_user_id;

                    //compilo SESSION
                    $row = array(
                        "id" => $new_user_id,
                        "username" => $username,
                        "password" => $password,
                        "email" => $email
                    );
                    //print_r($row);
                    //print_r("<br><br><br>");

                    $_SESSION[$config['session']['keys']['IDUSER']] = $row['id'];
                    $_SESSION[$config['session']['keys']['USERNAME']] = $row['username'];
                    $_SESSION[$config['session']['keys']['PASSWORD']] = $row['password'];
                    $_SESSION[$config['session']['keys']['EMAIL']] = $row['email'];
                    $_SESSION[$config['session']['keys']['TOKEN']] = "";// da implementare token

                    //echo "Login riuscito!<br>";
                    //print_r($_SESSION);

                    require_once(ROOT . "app/controller/sendEmail.php");
                    header("Location: " . "../view/welcome.php");
                    //print_r("Location: " . "../view/welcome.php");
                } else {
                    echo "Utente non creato";
                }
            }
        }
    }
?>
