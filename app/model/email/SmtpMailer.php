<?php declare(strict_types=1);
    /**
     * SMTP Mailer class for sending emails via SMTP without external libraries.
     */
    class SmtpMailer
    {
        private string $smtpServer;
        private int $smtpPort;
        private string $smtpUser;
        private string $smtpPass;
        private string $encryption; // 'tls' or 'ssl'

        /**
         * SmtpMailer constructor.
         *
         * @param string $smtpServer The SMTP server address.
         * @param int $smtpPort The SMTP server port.
         * @param string $smtpUser The SMTP username.
         * @param string $smtpPass The SMTP password.
         * @param string $encryption The encryption method ('tls' or 'ssl').
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
         * Send an email via SMTP.
         *
         * @param string $to The recipient email address.
         * @param string $subject The email subject.
         * @param string $message The email body.
         * @param string $headers The email headers.
         * @return bool True if the email was sent successfully, false otherwise.
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
                echo "Unable to connect to SMTP server: $errstr ($errno)\n";
                return false;
            }

            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '220') {
                echo "Server response error: $response\n";
                return false;
            }

            fwrite($socket, "EHLO " . gethostname() . "\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '250') {
                echo "EHLO command error: $response\n";
                return false;
            }

            if ($this->encryption === 'tls') {
                fwrite($socket, "STARTTLS\r\n");
                $response = fgets($socket, 515);
                if (substr($response, 0, 3) != '220') {
                    echo "STARTTLS command error: $response\n";
                    return false;
                }

                stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);

                fwrite($socket, "EHLO " . gethostname() . "\r\n");
                $response = fgets($socket, 515);
                if (substr($response, 0, 3) != '250') {
                    echo "EHLO command error after STARTTLS: $response\n";
                    return false;
                }
            }

            fwrite($socket, "AUTH LOGIN\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '334') {
                echo "AUTH LOGIN command error: $response\n";
                return false;
            }

            fwrite($socket, base64_encode($this->smtpUser) . "\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '334') {
                echo "Username authentication error: $response\n";
                return false;
            }

            fwrite($socket, base64_encode($this->smtpPass) . "\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '235') {
                echo "Password authentication error: $response\n";
                return false;
            }

            fwrite($socket, "MAIL FROM: <{$this->smtpUser}>\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '250') {
                echo "MAIL FROM command error: $response\n";
                return false;
            }

            fwrite($socket, "RCPT TO: <$to>\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '250') {
                echo "RCPT TO command error: $response\n";
                return false;
            }

            fwrite($socket, "DATA\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '354') {
                echo "DATA command error: $response\n";
                return false;
            }

            fwrite($socket, "Subject: $subject\r\n$headers\r\n\r\n$message\r\n.\r\n");
            $response = fgets($socket, 515);
            if (substr($response, 0, 3) != '250') {
                echo "Message send error: $response\n";
                return false;
            }

            fwrite($socket, "QUIT\r\n");
            fclose($socket);

            return true;
        }
    }
