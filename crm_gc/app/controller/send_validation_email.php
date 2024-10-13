<?php declare(strict_types=1);

    // Crea un token univoco
    $token = bin2hex(random_bytes(16));

    $nomeProgetto = CONFIG['site']['name'];
    $nomeProgettoEsteso = CONFIG['site']['name_esteso'];

    // Messaggio dell'email con CSS in linea
    $message = "
        <!doctype html>
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
                    .header {
                        background-color: #007bff;
                        color: #ffffff;
                        padding: 10px 20px;
                        border-radius: 5px 5px 0 0;
                    }
                    .header h1 {
                        margin: 0;
                        font-size: 24px;
                    }
                    .content p {
                        margin-bottom: 20px;
                    }
                    .content a {
                        color: #007bff;
                        text-decoration: none;
                    }
                    .content a:hover {
                        text-decoration: underline;
                    }
                    .footer {
                        margin-top: 20px;
                        font-size: 14px;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h1>Conferma l'account</h1>
                    </div>
                    <div class='content'>
                        <p>Buongiorno,</p>
                        <p>
                            Le diamo il benvenuto nel nostro sistema <strong>$nomeProgettoEsteso</strong>.
                            <br>
                            Per completare la registrazione, la preghiamo di cliccare sul seguente link per convalidare il suo profilo:
                        </p>
                        <p>
                            <a href='http://tuosito.com/convalida_profilo.php?token=$token'>Convalida il profilo</a>
                        </p>
                        <p class='footer'>
                            Cordiali saluti,
                            <br>
                            Il team di <strong>$nomeProgetto</strong>
                        </p>
                    </div>
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
