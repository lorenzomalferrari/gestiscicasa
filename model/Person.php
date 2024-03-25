<?php
	/**
	 *
	 */
	class Person {
		/**
		 * Roba da aggiungere:
		 * - città;
		 * - nazionalità;
		 * - sesso;
		 * - email;
		 * -numero di telefono;
		 * -codice fisclae
		 */
		// Variables
		private string $id;
		private string $name;
		private string $surname;
		private int $age;
		private string $city;
		private string $nationality;
		private string $gender;
		private string $email;
		private string $phoneNumber;

		// Constants
		public const MIN_AGE = 0;
		public const MAX_AGE = 120;

		// Constructor
		public function __construct(string $_id, string $_name, string $_surname) {
			$id = $_id;
			$this->setName($_name);
			$this->setSurname($_surname);
		}

		// Getter for id
		public function getId(): string {
			return $this->id;
		}

		// Getter and Setter for name
		public function getName(): string {
			return $this->name;
		}

		public function setName(string $name): void {
			$this->name = $name;
		}

		// Getter and Setter for surname
		public function getSurname(): string {
			return $this->surname;
		}

		public function setSurname(string $surname): void {
			$this->surname = $surname;
		}

		// Getter and Setter for age
		public function getAge(): int {
			return $this->age;
		}

		public function setAge(int $age): void {
			if ($age < self::MIN_AGE || $age > self::MAX_AGE) {
				throw new InvalidArgumentException("Age must be between " . self::MIN_AGE . " and " . self::MAX_AGE);
			}
			$this->age = $age;
		}

		// Getter e Setter per la città
		public function getCity(): string {
			return $this->city;
		}

		public function setCity(string $city): void {
			$this->city = $city;
		}

		// Getter e Setter per la nazionalità
		public function getNationality(): string {
			return $this->nationality;
		}

		public function setNationality(string $nationality): void {
			$this->nationality = $nationality;
		}

		// Getter e Setter per il sesso
		public function getGender(): string {
			return $this->gender;
		}

		public function setGender(string $gender): void {
			$this->gender = $gender;
		}

		// Getter e Setter per l'email
		public function getEmail(): string {
			return $this->email;
		}

		public function setEmail(string $email): void {
			$this->email = $email;
		}

		// Getter e Setter per il numero di telefono
		public function getPhoneNumber(): string {
			return $this->phoneNumber;
		}

		public function setPhoneNumber(string $phoneNumber): void {
			$this->phoneNumber = $phoneNumber;
		}

		// toString function to display the class
		public function __toString(): string {
			return "Id: " . $this->id . "\n" .
				"Name: " . $this->name . "\n" .
				"Surname: " . $this->surname . "\n" .
				"Age: " . $this->age . "\n" .
				"City: " . $this->city . "\n" .
				"Nationality: " . $this->nationality . "\n" .
				"Gender: " . $this->gender . "\n" .
				"Email: " . $this->email . "\n" .
				"Phone Number: " . $this->phoneNumber . "\n";
		}

	}
?>