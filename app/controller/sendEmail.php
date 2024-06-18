<?php declare(strict_types=1);
    require_once( ROOT . "app/model/emailSender.php");

    $headers = "From: welcome@lorenzomalferrari.com\r\n";
    $headers .= "Reply-To: welcome@lorenzomalferrari.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $to = $email; /*$_SESSION['EMAIL_SE'];*/
    $confirmation_link = PATH . '/confirm.php?token='.$UNIQ_TOKEN; // Replace with actual confirmation link
    print_r($confirmation_link);
    $company_name = $config['site']['name'];

    $email_subject = "Benvenuto su {{company_name}}! Conferma il tuo account";
    $email_body = "
        <html>
            <head>
                <title>Benvenuto su {{company_name}}!</title>
            </head>
            <body>
                <p>Buongiorno {{first_name}},</p>
                <p>Grazie per esserti registrato su {{company_name}}. Siamo entusiasti di averti con noi!</p>
                <p>Per completare la registrazione e confermare il tuo account, clicca sul link sottostante:</p>
                <p><a href=\"{{confirmation_link}}\">Conferma il tuo account</a></p>
                <p>Se non riesci a cliccare sul link, copia e incolla l'URL seguente nel tuo browser:</p>
                <p>{{confirmation_link}}</p>
                <p>Grazie e benvenuto ancora una volta su {{company_name}}!</p>
                <p>Cordiali saluti,</p>
                <p>Il team di {{company_name}}</p>
            </body>
        </html>
        ";

    $email_subject = str_replace(['{{first_name}}', '{{confirmation_link}}', '{{company_name}}'], [$to, $confirmation_link, $company_name], $email_subject);
    $email_body = str_replace(['{{first_name}}', '{{confirmation_link}}', '{{company_name}}'], [$to, $confirmation_link, $company_name], $email_body);

    $emailSender = new EmailSender($to, $email_subject, $email_body, $headers);

    if ($emailSender->send()) {
        echo "Email inviata con successo!";
    } else {
        echo "Errore durante l'invio dell'email.";
    }
