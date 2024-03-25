<?php
    /**
     *
     */
    class User {

        // Variable for user ID
        private int $id;
        // Instance variables
        private string $code;
        protected $username;
        protected $password;

        // Constructor
        public function __construct($_username, $_password, $_code) {
            $this->username = $_username;
            $this->password = $_password;
            $this->code = $_code;
        }

        // Getter for user ID
        public function getId(): int {
            return $this->id;
        }

        // Setter for user ID
        public function setId(int $id): void {
            $this->id = $id;
        }

        // Getter and Setter for username
        public function getUsername() {
            return $this->username;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        // Getter and Setter for email
        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        // Getter and Setter for code
        public function getCode() {
            return $this->code;
        }

        public function setCode($code) {
            $this->code = $code;
        }

        // Function to print user information
        public function __toString(): string {
            return  "Id: " . $this->id . "\n" .
                    "Code: " . $this->code . "\n" .
                    "Username: " . $this->username . "\n" .
                    "Password: " . $this->password . "\n";
        }
    }
?>