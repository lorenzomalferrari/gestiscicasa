<?php declare(strict_types=1);
    require_once('lib/libs.php');
    require_once(ROOT . "app/model/email/SmtpMailer.php");

    // Configurazione SMTP
    $smtpServer = $config['email']['smtp']['server'];
    $smtpPort = $config['email']['smtp']['port'];
    $smtpUser = $config['email']['smtp']['user'];
    $smtpPass = $config['email']['smtp']['pass'];
    $encryption = $config['email']['smtp']['encryption']; // 'ssl' per SSL, 'tls' per TLS

    // Creazione dell'istanza del mailer
    $mailer = new SmtpMailer($smtpServer, $smtpPort, $smtpUser, $smtpPass, $encryption);

    // Indirizzo email del destinatario dalla sessione
    $to = $_SESSION[$config['session']['keys']['EMAIL']];

    // Headers dell'email
    $headers = "From: " . $config['email']['smtp']['user'] . "\r\n";
    $headers .= "Reply-To: " . $config['email']['smtp']['user'] . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Link di conferma (da generare effettivamente)
    $confirmation_link = PATH . $config['email']['smtp']['confirm'] . '?token=' . $UNIQ_TOKEN;

    // Nome dell'azienda
    $company_name = $config['site']['name'];

    // Soggetto dell'email
    $email_subject = "Benvenuto su {$company_name}! Conferma il tuo account";

    // Corpo dell'email
    $email_body = "
        <html>
            <head>
                <title>Benvenuto su {$company_name}!</title>
            </head>
            <body>
                <p>Buongiorno,</p>
                <p>Grazie per esserti registrato su {$company_name}. Siamo entusiasti di averti con noi!</p>
                <p>Per completare la registrazione e confermare il tuo account, clicca sul link sottostante:</p>
                <p><a href=\"{$confirmation_link}\">Conferma il tuo account</a></p>
                <p>Se non riesci a cliccare sul link, copia e incolla l'URL seguente nel tuo browser:</p>
                <p>{$confirmation_link}</p>
                <p>Grazie e benvenuto ancora una volta su {$company_name}!</p>
                <p>Cordiali saluti,</p>
                <p>Il team di {$company_name}</p>
            </body>
        </html>
    ";

    // Invio dell'email
    if ($mailer->sendMail($to, $email_subject, $email_body, $headers)) {
        echo "Email inviata con successo.";
        //TO DO: Va creato log POSITIVO
    } else {
        echo "Errore durante l'invio dell'email.";
        //TO DO: Va creato log NEGATIVO
    }
