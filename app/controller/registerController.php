<?php declare(strict_types=1);
    require_once('lib/libs.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Preparazione della query per la select
        $params_where = array(
            ':username' => $username
        );

        //Controllo prima che Utente non esista già
        $query = "SELECT * FROM " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::USERS) . " WHERE " . UsersTable::USERNAME . " = :username";
        $row = DB->select($query, $params_where);
        if ($row) {
            echo "Utente già presente con questo username: " . json_encode($row);
        }else {
            //prima di effettuare insert, devo verificare che email non sia già stata usata nel portale
            $params_selectP = array(
                ':email' => $email
            );

            $selectPerson = "SELECT COUNT(*) as count FROM " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::PERSON) . " WHERE " . PersonTable::EMAIL . " = :email";
            $countP = DB->select($selectPerson, $params_selectP)['count'];

            if($countP > 0){
                //bloccare tutto e restituire alert che email già presente
                die("Una utenza con l'email $email è già presente nel portale");
            }else{
                //inserisco utente, poi al welcome farò insert di Person
                // Preparazione della query per la INSERT in Utenti
                $params_insert = array(
                    ':username' => $username,
                    ':password' => password_hash($password, PASSWORD_DEFAULT),
                    ':token' => UNIQ_TOKEN
                );

                //Gestisco l'inserimento in DB
                $insert = "INSERT INTO " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::USERS)
                                . " (" . UsersTable::USERNAME. ","  . UsersTable::PASSWORD . ", " . UsersTable::TOKEN . ") "
                                . " VALUES (:username, :password, :token)";

                $new_user_id = DB->insert($insert, $params_insert);
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

                    $_SESSION[CONFIG['session']['keys']['IDUSER']] = $row['id'];
                    $_SESSION[CONFIG['session']['keys']['USERNAME']] = $row['username'];
                    $_SESSION[CONFIG['session']['keys']['PASSWORD']] = $row['password'];
                    $_SESSION[CONFIG['session']['keys']['EMAIL']] = $row['email'];
                    $_SESSION[CONFIG['session']['keys']['TOKEN']] = "";// da implementare token

                    require_once(ROOT . "app/controller/sendEmail.php");
                    redirectPath("app/view/welcome/welcome.php");
                } else {
                    echo "Utente non creato";
                    //TODO: Salvare un log con Utente non creato
                    redirectPath("server_not_work.php");
                }
            }
        }
    }
?>
