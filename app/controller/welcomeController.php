<?php declare(strict_types=1);
    require_once('lib/libs.php');
    require_once(ROOT . 'app/model/NomiTabelle.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Preparazione della query per la select
        $params_insert = array(
            ':nome' => $_POST['nome'],
            ':cognome' => $_POST['cognome'],
            ':idGender' => $_POST['sesso'],
            ':email' => $_POST[CONFIG['session']['keys']['EMAIL']],
            ':idUser' => $_POST[CONFIG['session']['keys']['IDUSER']],
        );

        //Gestisco l'inserimento in DB
        $insert = "INSERT INTO "
                    . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'),NomiTabella::PERSON)
                    . " (" . PersonTable::NAME . ", " . PersonTable::SURNAME . ", " . PersonTable::EMAIL . ", " . PersonTable::ID_USER. ", " . PersonTable::ID_GENDER. ") "
                    . " VALUES (:nome, :cognome, :email, :idUser, :idGender)";
        $new_person_id = DB->insert($insert, $params_insert);

        //per portare la persona alla dashboard,
        //devo avere id dalla tabella Persona e idUtente attivo e senza token

        $params_user = array(
            ':id' => $_POST[CONFIG['session']['keys']['IDUSER']],
            ':token' => 'IS NULL',
            ':isActive' => 1,
        );

        $select_user = "SELECT COUNT(*) FROM " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::USERS) . " WHERE id = :id AND token = :token AND isActive = :isActive";
        $count_user = DB->selectAll($select_user, $params_user);

        if ($new_person_id > 0 && $count_user > 0) {
            header("Location: " . PATH . "app/view/home.php");
        } else {
            //capire che messaggio restituire
            print_r("DA IMPLEMENTARE: ERRORE DA RESTITUIRE");
        }
    }
