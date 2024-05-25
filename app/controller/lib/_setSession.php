<?php
    // Avvia la sessione
    session_start();

    print_r("Sessione settata: -" . isset($_SESSION) . "-<br>");
    print_r($_SESSION);

    $keys = $config['session']['keys'];
print_r(var_export(array_has_any_key($_SESSION, $keys)));
print_r('<br><br><br>');
    // Verifica se la sessione contiene già le key utili nel CRM
    if ( array_has_any_key($_SESSION, $keys)) {
        //se il token è ancora valido
        if(checkArrayValues($_SESSION)){

        }
        else{ //pulire sessione e forzare utente al ritorno su login.php
            print_r("   sono dentro, devo pulire e riniziare   ---");
            // Pulisci tutte le variabili di sessione
            session_unset();
            $_SESSION = array(); //al momento funziona solo facendo così
            header("Location: " . "../view/login.php");
        }
    }else{
        print_r('preparo key utili nel CRM');
        foreach ($keys as $key) {
            $_SESSION[$key] = "";
        }
    }
    print_r('<br><br><br>');
    print_r($_SESSION);
print_r('<br><br><br>');
print_r('esco da _setSessione.php');
?>
