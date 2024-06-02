<?php
    //DA CORREGGERE E FAR FUNZIONARE ASSOLUTAMENTE
    // Avvia la sessione se non settata
    if(!isset($_SESSION))
        /**
         * Setto la sessione con alcuni parametri per
         * la scadnza della sessione dopo inattività
         */
        require_once("session_start.php");

    //print_r("Sessione settata: -" . isset($_SESSION) . "-<br>");
    //print_r($_SESSION);

    $keys = $config['session']['keys'];
    //print_r(var_export(array_has_any_key($_SESSION, $keys)));
    //print_r('<br><br><br>');
    // Verifica se la sessione contiene già le key utili nel CRM
    if ( array_has_any_key($_SESSION, $keys)) {
        print_r("dentro a if,quindi ho già le key settate");
        //se il token è ancora valido, mantengo sessione
        //si prosegue in pagina interessata
        if(
            isNotNullOrEmpty($_SESSION['IDUSER']) &&
            isNotNullOrEmpty($_SESSION['USERNAME']) &&
            isNotNullOrEmpty($_SESSION['PASSWORD']) &&
            isNotNullOrEmpty($_SESSION['EMAIL']) &&
            isNotNullOrEmpty($_SESSION['TOKEN'])
        ){
            //niente da fare
            print_r('Non faccio niente, sessione ok, andrò in Home');
        }
        else{ // sennò pulire sessione e forzare ritorno al login
            //require_once("session_destroy.php");
        }
    }else{
        print_r('preparo key utili nel CRM');
        foreach ($keys as $key) {
            $_SESSION[$key] = "";
        }
    }
    //print_r('<br><br><br>');
    print_r($_SESSION);
    print_r('<br><br><br>');
    //print_r('esco da _setSessione.php');
?>
