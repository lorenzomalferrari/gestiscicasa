<?php
    require_once('lib/_libs.php');
    require_once('../model/database.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r($_POST);

        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $email = $_SESSION['EMAIL'];
        $idUser = $_SESSION['IDUSER'];

        $database = new Database($SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME);

        // Preparazione della query per la select
        $params_insert = array(
            ':nome' => $nome,
            ':cognome' => $cognome,
            ':email' => $email,
            ':idUser' => $idUser,
        );

        print_r($params_insert);

        //Gestisco l'inserimento in DB
        $insert = "INSERT INTO " . getNomeTabella(NomiTabella::PERSON) . " (nome, cognome, email, idUser) VALUES (:nome, :cognome, :email, :idUser)";
        $new_person_id = $database->insert($insert, $params_insert);
        print_r("Nuova Persona creata - id: " . $new_person_id);

    //per portare la persona alla dashboard,
    //devo avere id dalla tabella Persona e idUtente attivo e senza token

        $params_user = array(
            ':id' => $idUser,
            ':token' => 'IS NULL',
            ':isActive' => 1,
        );

        $select_user = "SELECT COUNT(*) FROM " . getNomeTabella(NomiTabella::USERS) . " WHERE id = :id AND token = :token AND isActive = : isActive";
        $count_user = $database->selectAll($select_user,$params_user);

        if($new_person_id > 0 && $count_user > 0){
            //tutto ok
        }
        else{
            //capire che messaggio restituire

        }
    }
?>
