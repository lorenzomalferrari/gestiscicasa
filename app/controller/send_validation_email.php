<?php
// Genera un token univoco
$token = bin2hex(random_bytes(16));

// Salva il token nel database insieme all'utente (sostituisci con il tuo codice per l'inserimento dell'utente nel database)

// Messaggio dell'email
$message = "
<!DOCTYPE html>
<html lang='it'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Convalida del profilo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #444444;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
        }
        p {
            margin-bottom: 20px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Convalida del profilo</h1>
        <p>Buongiorno,</p>
        <p>Le diamo il benvenuto nel nostro sistema di gestione immobiliare. Per completare la registrazione, la preghiamo di cliccare sul seguente link per convalidare il suo profilo:</p>
        <p><a href='http://tuosito.com/convalida_profilo.php?token=$token'>Convalida il profilo</a></p>
        <p>Cordiali saluti,<br>Il team di Gestione Immobiliare</p>
    </div>
</body>
</html>
";

// Intestazioni dell'email
$headers = "From: tua_email@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Invia l'email
$to = "email_cliente@example.com";
$subject = "Convalida del profilo";
mail($to, $subject, $message, $headers);
?>