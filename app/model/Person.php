<?php declare(strict_types=1);
	/**
	 * Classe che rappresenta la Persona che andrà a sfruttare il gestionale
	 */
	class Person {
		// Instance variables
		private int $id;
		private string $name;
		private string $surname;
		private int $age;
		private string $birthdate;
		private int $city;
		private int $state;
		private int $nationality;
		private int $description;
		private int $idUser;

		// Constants
		private const EMAIL_REGEX = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
		private const TAX_CODE_REGEX = '/^[A-Z]{6}\d{2}[A-Z]\d{2}[A-Z]\d{3}[A-Z]$/';

		// Constructor
		public function __construct(
			int $id,
			string $name,
			string $surname,
			int $age,
			string $birthdate,
			int $city,
			int $state,
			int $nationality,
			int $description,
			int $idUser
		) {
			$this->id = $id;
			$this->name = $name;
			$this->surname = $surname;
			$this->age = $age;
			$this->birthdate = $birthdate;
			$this->city = $city;
			$this->state = $state;
			$this->nationality = $nationality;
			$this->description = $description;
			$this->idUser = $idUser;
		}

		// Getter and setter methods for 'id'
		public function getId(): int {
			return $this->id;
		}

		public function setId(int $id): void {
			$this->id = $id;
		}

		// Getter and setter methods for 'name'
		public function getName(): string {
			return $this->name;
		}

		public function setName(string $name): void {
			$this->name = $name;
		}

		// Getter and setter methods for 'surname'
		public function getSurname(): string {
			return $this->surname;
		}

		public function setSurname(string $surname): void {
			$this->surname = $surname;
		}

		// Getter and setter methods for 'age'
		public function getAge(): int {
			return $this->age;
		}

		public function setAge(int $age): void {
			$this->age = $age;
		}

		// Getter and setter methods for 'birthdate'
		public function getBirthdate(): string {
			return $this->birthdate;
		}

		public function setBirthdate(string $birthdate): void {
			$this->birthdate = $birthdate;
		}

		// Getter and setter methods for 'city'
		public function getCity(): int {
			return $this->city;
		}

		public function setCity(int $city): void {
			$this->city = $city;
		}

		// Getter and setter methods for 'state'
		public function getState(): int {
			return $this->state;
		}

		public function setState(int $state): void {
			$this->state = $state;
		}

		// Getter and setter methods for 'nationality'
		public function getNationality(): int {
			return $this->nationality;
		}

		public function setNationality(int $nationality): void {
			$this->nationality = $nationality;
		}

		// Getter and setter methods for 'description'
		public function getDescription(): int {
			return $this->description;
		}

		public function setDescription(int $description): void {
			$this->description = $description;
		}

		// Getter and setter methods for 'idUser'
		public function getIdUser(): int {
			return $this->idUser;
		}

		public function setIdUser(int $idUser): void {
			$this->idUser = $idUser;
		}

		// Email validation function
		public function validateEmail(string $email): bool {
			if (!preg_match(self::EMAIL_REGEX, $email)) {
				throw new Exception('Invalid email format');
			}
			return true;
		}

		// Tax code validation function (for Italian tax code)
		public function validateTaxCode(string $taxCode): bool {
			if (!preg_match(self::TAX_CODE_REGEX, $taxCode)) {
				throw new Exception('Invalid tax code');
			}
			return true;
		}

		// Birth date validation function (in the format year-month-day time)
		public function validateBirthDate(string $birthdate): bool {
			$format = 'Y-m-d H:i:s';
			$dateTime = DateTime::createFromFormat($format, $birthdate);
			if (!$dateTime || $dateTime->format($format) !== $birthdate) {
				throw new Exception('Invalid birth date format');
			}
			return true;
		}

		// toString method
		public function toString(): string {
			return
				"ID: " . $this->id .
				", Name: " . $this->name .
				", Surname: " . $this->surname .
				", Age: " . $this->age .
				", Birthdate: " . $this->birthdate .
				", City: " . $this->city .
				", State: " . $this->state .
				", Nationality: " . $this->nationality .
				", Description: " . $this->description .
				", ID User: " . $this->idUser;
		}
	}
?>