<?php

declare(strict_types=1);

/**
 * Classe SMTP Mailer per inviare email via SMTP senza librerie esterne.
 */
class SmtpMailer
{
    private string $smtpServer;
    private int $smtpPort;
    private string $smtpUser;
    private string $smtpPass;
    private string $encryption; // 'tls' o 'ssl'

    /**
     * Costruttore della classe SmtpMailer.
     *
     * @param string $smtpServer L'indirizzo del server SMTP.
     * @param int $smtpPort La porta del server SMTP.
     * @param string $smtpUser Il nome utente per l'autenticazione SMTP.
     * @param string $smtpPass La password per l'autenticazione SMTP.
     * @param string $encryption Il metodo di crittografia ('tls' o 'ssl').
     */
    public function __construct(string $smtpServer, int $smtpPort, string $smtpUser, string $smtpPass, string $encryption = 'tls')
    {
        $this->smtpServer = $smtpServer;
        $this->smtpPort = $smtpPort;
        $this->smtpUser = $smtpUser;
        $this->smtpPass = $smtpPass;
        $this->encryption = $encryption;
    }

    /**
     * Invia un'email via SMTP.
     *
     * @param string $to L'indirizzo email del destinatario.
     * @param string $subject L'oggetto dell'email.
     * @param string $message Il corpo dell'email.
     * @param string $headers Gli header dell'email.
     * @return bool True se l'email è stata inviata con successo, false altrimenti.
     */
    public function sendMail(string $to, string $subject, string $message, string $headers): bool
    {
        $contextOptions = [];
        if ($this->encryption === 'ssl') {
            $contextOptions['ssl'] = [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ];
            $socket = stream_socket_client(
                "ssl://{$this->smtpServer}:{$this->smtpPort}",
                $errno,
                $errstr,
                30,
                STREAM_CLIENT_CONNECT,
                stream_context_create($contextOptions)
            );
        } else {
            $socket = fsockopen($this->smtpServer, $this->smtpPort, $errno, $errstr, 30);
        }

        if (!$socket) {
            echo "Impossibile connettersi al server SMTP: $errstr ($errno)\n";
            return false;
        }

        $response = fgets($socket, 515);
        if (substr($response, 0, 3) != '220') {
            echo "Errore nella risposta del server: $response\n";
            return false;
        }

        fwrite($socket, "EHLO " . gethostname() . "\r\n");
        while ($line = fgets($socket, 515)) {
            if (substr($line, 3, 1) != '-' && substr($line, 0, 3) == '250') {
                break;
            }
        }

        if ($this->encryption === 'tls') {
            fwrite($socket, "STARTTLS\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '220') {
                echo "Errore nel comando STARTTLS: $response\n";
                return false;
            }

            stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);

            fwrite($socket, "EHLO " . gethostname() . "\r\n");
            while ($line = fgets($socket, 515)) {
                if (substr($line, 3, 1) != '-' && substr($line, 0, 3) == '250') {
                    break;
                }
            }
        }

        fwrite($socket, "AUTH LOGIN\r\n");
        $response = fgets($socket, 515);
        if (substr($response, 0, 3) != '334') {
            echo "Errore nel comando AUTH LOGIN: $response\n";
            return false;
        }

        fwrite($socket, base64_encode($this->smtpUser) . "\r\n");
        $response = fgets($socket, 515);
        if (substr($response, 0, 3) != '334') {
            echo "Errore nell'autenticazione del nome utente: $response\n";
            return false;
        }

        fwrite($socket, base64_encode($this->smtpPass) . "\r\n");
        $response = fgets($socket, 515);
        if (substr($response, 0, 3) != '235') {
            echo "Errore nell'autenticazione della password: $response\n";
            return false;
        }

        fwrite($socket, "MAIL FROM: <{$this->smtpUser}>\r\n");
        $response = fgets($socket, 515);
        if (substr($response, 0, 3) != '250') {
            echo "Errore nel comando MAIL FROM: $response\n";
            return false;
        }

        fwrite($socket, "RCPT TO: <$to>\r\n");
        $response = fgets($socket, 515);
        if (substr($response, 0, 3) != '250') {
            echo "Errore nel comando RCPT TO: $response\n";
            return false;
        }

        fwrite($socket, "DATA\r\n");
        $response = fgets($socket, 515);
        if (substr($response, 0, 3) != '354') {
            echo "Errore nel comando DATA: $response\n";
            return false;
        }

        fwrite($socket, "Subject: $subject\r\n$headers\r\n\r\n$message\r\n.\r\n");
        $response = fgets($socket, 515);
        if (substr($response, 0, 3) != '250') {
            echo "Errore nell'invio del messaggio: $response\n";
            return false;
        }

        fwrite($socket, "QUIT\r\n");
        fclose($socket);

        return true;
    }
}
