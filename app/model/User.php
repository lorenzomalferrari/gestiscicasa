<?php declare(strict_types=1);

    /**
     * Classe che rappresenta l'Utente
     */
    trait User
    {
        // Variabili d'istanza
        private int $userId;
        private string $username;
        private string $password;
        private ?string $token; // Aggiunta del token, può essere nullo
        private bool $isActive; // Aggiunta di isActive
        private string $creationDate;
        private string $updateDate;

        /**
         * Costruttore della classe User.
         *
         * @param int $userId
         * @param string $username
         * @param string $password
         * @param ?string $token
         * @param bool $isActive
         * @param string $creationDate
         * @param string $updateDate
         */
        public function __construct(
            int $userId,
            string $username,
            string $password,
            ?string $token,
            bool $isActive,
            string $creationDate,
            string $updateDate
        ) {
            $this->userId = $userId;
            $this->username = $username;
            $this->password = $password;
            $this->token = $token;
            $this->isActive = $isActive;
            $this->creationDate = $creationDate;
            $this->updateDate = $updateDate;
        }

        // Getter e setter per 'userId'
        public function getUserId(): int
        {
            return $this->userId;
        }

        public function setUserId(int $userId): void
        {
            $this->userId = $userId;
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
        public function getCreationDate(): string
        {
            return $this->creationDate;
        }

        // Getter per 'updateDate'
        public function getUpdateDate(): string
        {
            return $this->updateDate;
        }

    }
