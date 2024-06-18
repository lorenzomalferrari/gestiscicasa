<?php declare(strict_types=1);
    /**
     * Classe che rappresenta l'Utente
     */
    class User {
        // Instance variables
        private int $id;
        private string $username;
        private string $password;
        private string $email;

        // Constructor
        public function __construct(int $id, string $username, string $password, string $email) {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }

        // Getter and setter methods for 'id'
        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id): void {
            $this->id = $id;
        }

        // Getter and setter methods for 'username'
        public function getUsername(): string {
            return $this->username;
        }

        public function setUsername(string $username): void {
            $this->username = $username;
        }

        // Getter and setter methods for 'password'
        public function getPassword(): string {
            return $this->password;
        }

        public function setPassword(string $password): void {
            $this->password = $password;
        }

        // Getter and setter methods for 'email'
        public function getEmail(): string {
            return $this->email;
        }

        public function setEmail(string $email): void {
            $this->email = $email;
        }

        // toString method
        public function toString(): string {
            return
                "User ID: " . $this->id .
                ", Username: " . $this->username .
                ", Password: " . $this->password .
                ", Email: " . $this->email;
        }
    }
?>