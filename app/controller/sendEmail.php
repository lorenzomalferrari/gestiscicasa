<?php

class EmailSender
{
    private $to;
    private $subject;
    private $message;
    private $headers;

    public function __construct($to, $subject, $message, $headers = '')
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->headers = $headers;
    }

    public function send()
    {
        return mail($this->to, $this->subject, $this->message, $this->headers);
    }
}

// Utilizzo della classe per inviare un'email
$to = "destinatario@example.com";
$subject = "Oggetto dell'email";
$message = "Corpo dell'email";
$headers = "From: mittente@example.com\r\n";
$headers .= "Reply-To: mittente@example.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$emailSender = new EmailSender($to, $subject, $message, $headers);

if ($emailSender->send()) {
    echo "Email inviata con successo!";
} else {
    echo "Errore durante l'invio dell'email.";
}
