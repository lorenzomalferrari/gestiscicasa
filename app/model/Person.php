<?php
	/**
	 * Classe che rappresenta la Persona che andrà a sfruttare il gestionale
	 */
	class Person {
		// Variables
		private int $id;
		private string $name;
		private string $surname;
		private string $email;
		private int $age;
		private string $birthdate;
		private int $city;
		private int $state;
		private int $nationality;
		private int $description;
		private int $idUser;

		// Constants
		public const MIN_AGE = 0;
		public const MAX_AGE = 120;

		// Constructor
		public function __construct(string $name, string $surname, string $email, int $age, string $birthdate, int $city, int $state, int $nationality, string $description = "") {
			$this->setName($name);
			$this->setSurname($surname);
			$this->setAge($age);
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

		// toString function to display the class
		public function __toString(): string {
			return
				"Name: " . $this->name .
				", Surname: " . $this->surname .
				", Age: " . $this->age;
		}
	}
?>