<?php declare(strict_types=1);

    /**
     * Classe che rappresenta l'Utente
     */
    trait User
    {
        // Variabili d'istanza
        private int $id;
        private string $username;
        private string $password;
        private ?string $token; // Aggiunta del token, può essere nullo
        private bool $isActive; // Aggiunta di isActive
        private string $creationDate;
        private string $updateDate;

        public function __construct() {}

        // Getter e setter per 'id'
        public function getUserId(): int
        {
            return $this->id;
        }

        public function setUserId(int $id): void
        {
            $this->id = $id;
        }

        // Getter e setter per 'username'
        public function getUsername(): string
        {
            return $this->username;
        }

        public function setUsername(string $username): void
        {
            $this->username = $username;
        }

        // Getter e setter per 'password'
        public function getPassword(): string
        {
            return $this->password;
        }

        public function setPassword(string $password): void
        {
            $this->password = $password;
        }

        // Getter e setter per 'token'
        public function getToken(): ?string
        {
            return $this->token;
        }

        public function setToken(?string $token): void
        {
            $this->token = $token;
        }

        // Getter e setter per 'isActive'
        public function getIsActive(): bool
        {
            return $this->isActive;
        }

        public function setIsActive(bool $isActive): void
        {
            $this->isActive = $isActive;
        }

        // Getter per 'creationDate'
        public function getUserCreationDate(): string
        {
            return $this->creationDate;
        }

        // Getter per 'update_date'
        public function getUserUpdateDate(): string
        {
            return $this->updateDate;
        }

    }
