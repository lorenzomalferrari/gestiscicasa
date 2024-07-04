<?php declare(strict_types=1);

    require_once('lib/libs.php');
    require_once(ROOT . 'app/model/database.php');
    require_once(ROOT . 'app/model/NomiTabelle.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $database = new Database($configIstance->get('SERVERNAME_DB'), $configIstance->get('USERNAME_DB'), $configIstance->get('PASSWORD_DB'), $configIstance->get('DBNAME'));

        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];

        // Preparazione della query per la select
        $params_insert = array(
            ':nome' => $nome,
            ':cognome' => $cognome,
            ':email' => $_SESSION[CONFIG['session']['keys']['EMAIL']],
            ':idUser' => $_SESSION[CONFIG['session']['keys']['IDUSER']],
        );

        print_r("params_insert:<br>");
        print_r($params_insert);

        //Gestisco l'inserimento in DB
        $insert = "INSERT INTO " . getNomeTabella($configIstance->get('TABLEPREFIX'), NomiTabella::PERSON) . " (name, surname, email, idUser) VALUES (:nome, :cognome, :email, :idUser)";
        $new_person_id = $database->insert($insert, $params_insert);
        print_r("Nuova Persona creata - id: " . $new_person_id);

        //per portare la persona alla dashboard,
        //devo avere id dalla tabella Persona e idUtente attivo e senza token

        $params_user = array(
            ':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],
            ':token' => 'IS NULL',
            ':isActive' => 1,
        );

        $select_user = "SELECT COUNT(*) FROM " . getNomeTabella($configIstance->get('TABLEPREFIX'), NomiTabella::USERS) . " WHERE id = :id AND token = :token AND isActive = :isActive";
        $count_user = $database->selectAll($select_user, $params_user);

        if ($new_person_id > 0 && $count_user > 0) {
            //tutto ok
            header("Location: " . "../view/home.php");
        } else {
            //capire che messaggio restituire
            print_r("DA IMPLEMENTARE: ERRORE DA RESTITUIRE");
        }
    }
?>
