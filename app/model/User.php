<?php
    /**
     *
     */
    class User {

        // Variable for user ID
        private int $id;
        // Instance variables
        protected $username;
        protected $email;

        // Constructor
        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
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
        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        // Function to print user information
        public function __toString() {
            echo "Id: " . $this->id . "\n";
            echo "Username: " . $this->username . "\n";
            echo "Email: " . $this->email . "\n";
        }
    }
?>