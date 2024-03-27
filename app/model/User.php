<?php
	/**
	 * Classe che rappresenta l'Utente
	 */
	class User {

		// Variable for user ID
		private int $id;
		// Instance variables
		protected $username;
		protected $password;

		// Constructor
		public function __construct($username, $password) {
			$this->username = $username;
			$this->password = $password;
		}

		// Getter for user ID
		public function getId(): int {
			return $this->id;
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

		// Function to print user information
		public function __toString() {
			echo "Id: " . $this->id . "\n";
			echo "Username: " . $this->username . "\n";
			echo "Password: " . $this->password . "\n";
		}
	}
?>