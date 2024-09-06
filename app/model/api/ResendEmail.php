<?php

    class ResendEmail {
        private $pdo;
        private $emailHost;
        private $emailPort;
        private $emailUsername;
        private $emailPassword;

        public function __construct($dsn, $dbUsername, $dbPassword, $emailHost, $emailPort, $emailUsername, $emailPassword) {
            // Connessione al database
            $this->pdo = new PDO($dsn, $dbUsername, $dbPassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Configurazione dell'email
            $this->emailHost = $emailHost;
            $this->emailPort = $emailPort;
            $this->emailUsername = $emailUsername;
            $this->emailPassword = $emailPassword;
        }

        public function handle($params) {
            try {
                // Recupera le email da inviare
                $emails = $this->getEmailsToResend();

                if (empty($emails)) {
                    return ['status' => 'success', 'message' => 'Nessuna email da reinviare.'];
                }

                // Invia le email
                foreach ($emails as $email) {
                    $this->sendEmail($email['to'], $email['subject'], $email['body']);
                    // Segna l'email come inviata
                    $this->markEmailAsSent($email['id']);
                }

                return ['status' => 'success', 'message' => 'Email reinviate con successo.'];

            } catch (Exception $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        private function getEmailsToResend() {
            $stmt = $this->pdo->prepare("SELECT id, `to`, `subject`, `body` FROM emails WHERE sent = false");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        private function sendEmail($to, $subject, $body) {
            // Configura l'email
            $headers = "From: no-reply@example.com\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            // Invia l'email
            if (!mail($to, $subject, $body, $headers)) {
                throw new Exception("Errore durante l'invio dell'email a $to.");
            }
        }

        private function markEmailAsSent($id) {
            $stmt = $this->pdo->prepare("UPDATE emails SET sent = true WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            if (!$stmt->execute()) {
                throw new Exception("Errore durante l'aggiornamento dello stato dell'email con ID $id.");
            }
        }
    }
