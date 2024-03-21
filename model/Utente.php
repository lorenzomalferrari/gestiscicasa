<?php
    /**
     *
     */
    class Utente {

        // Variabile per l'ID dell'utente
        private int $id;
        // Variabili di istanza
        protected $username;
        protected $email;

        // Costruttore
        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        // Getter per l'ID dell'utente
        public function getId(): int {
            return $this->id;
        }

        // Setter per l'ID dell'utente
        public function setId(int $id): void {
            $this->id = $id;
        }

        // Getter e Setter per il nome utente
        public function getUsername() {
            return $this->username;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        // Getter e Setter per l'email
        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        // Funzione per stampare le informazioni dell'utente
        public function __toString() {
            echo "Id: " . $this->id . "\n";
            echo "Username: " . $this->username . "\n";
            echo "Email: " . $this->email . "\n";
        }
    }
?>