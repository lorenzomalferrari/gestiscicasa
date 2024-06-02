<?php
    //DA CORREGGERE E FAR FUNZIONARE ASSOLUTAMENTE
    // Avvia la sessione se non settata
    if(!isset($_SESSION))
        session_start();

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
        if(1 == 3){
            //niente da fare
        }
        else{ // sennò pulire sessione e forzare ritorno al login 
            //pulire sessione e forzare utente al ritorno su login.php
            //print_r("   sono dentro, devo pulire e riniziare   ---");
            // Pulisci tutte le variabili di sessione
            $_SESSION = array(); //al momento funziona solo facendo così
            session_unset();
            //header("Location: " . "../view/login.php");
            print_r("Location: " . "../view/login.php");
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
