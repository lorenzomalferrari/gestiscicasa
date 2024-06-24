<?php declare(strict_types=1);
    require_once( ROOT . "app/model/SmtpMailer.php");

    // Utilizzo della classe SmtpMailer
    $smtpServer = 'smtp.example.com';
    $smtpPort = 587;
    $smtpUser = 'user@example.com';
    $smtpPass = 'password';

    $mailer = new SmtpMailer($smtpServer, $smtpPort, $smtpUser, $smtpPass);

    $to = $_SESSION[$config['session']['keys']['EMAIL']];
    $subject = 'Test Email';
    $message = 'This is a test email sent from PHP without external libraries.';

    $headers = "From: welcome@lorenzomalferrari.com\r\n";
    $headers .= "Reply-To: welcome@lorenzomalferrari.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $confirmation_link = PATH . '/confirm.php?token='.$UNIQ_TOKEN; // Replace with actual confirmation link

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

    $subject = str_replace(['{{first_name}}', '{{confirmation_link}}', '{{company_name}}'], [$to, $confirmation_link, $company_name], $email_subject);
    $body = str_replace(['{{first_name}}', '{{confirmation_link}}', '{{company_name}}'], [$to, $confirmation_link, $company_name], $email_body);
    print_r($body);
    print_r("<br><br><br>");
    print_r($body);

    if ($mailer->sendMail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
