<?php declare(strict_types=1);
    require_once('lib/libs.php');

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $sesso = $_POST['sesso'];
    $data_nascita = $_POST['data_nascita'];
    $email = $_POST[CONFIG['session']['keys']['EMAIL']];
    $idUser = $_POST[CONFIG['session']['keys']['IDUSER']];

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Preparazione della query per la select
        $params_insert = array(
            ':nome' => $nome,
            ':cognome' => $cognome,
            ':idGender' => $sesso,
            ':email' => $email,
            ':idUser' => $idUser,
            ':data_nascita' => $data_nascita,
        );

        //Gestisco l'inserimento in DB
        $insert = "INSERT INTO "
                    . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'),NomiTabelle::PERSON)
                    . " ("
                        . PersonTable::NAME . ", "
                        . PersonTable::SURNAME . ", "
                        . PersonTable::EMAIL . ", "
                        . PersonTable::ID_USER. ", "
                        . PersonTable::ID_GENDER. " , "
                        . PersonTable::BIRTHDATE
                    . ") "
                    . " VALUES (:nome, :cognome, :email, :idUser, :idGender, :data_nascita)";

        $new_person_id = DB->insert($insert, $params_insert);

        //per portare la persona alla dashboard,
        //devo avere id dalla tabella Persona e idUtente attivo e senza token

        //aggiorno portando isActive a true
        $update_where = array(
            ':id' => $idUser,
            ':isActive' => 1
        );
        $update_user = "UPDATE " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::USERS)
                    . " SET " . UsersTable::IS_ACTIVE . " = :isActive"
                    . " WHERE " . UsersTable::ID . " = :id";

        $update_id = DB->update($update_user, $update_where);

        $params_user = array(
            ':id' => $idUser,
            ':token' => 'IS NULL',
            ':isActive' => 1,
        );

        $select_user = "SELECT COUNT(*) FROM "
                    . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::USERS)
                    . " WHERE "
                        . UsersTable::ID . " = :id AND "
                        . UsersTable::TOKEN . " = :token AND "
                        . UsersTable::IS_ACTIVE . " = :isActive";

        $count_user = DB->selectAll($select_user, $params_user);

        if ($new_person_id > 0 && $count_user > 0) {
            redirectPath("app/view/home.php");
        } else {
            //capire che messaggio restituire
            print_r("DA IMPLEMENTARE: ERRORE DA RESTITUIRE");
            die("DA IMPLEMENTARE: ERRORE DA RESTITUIRE");
        }
    }
