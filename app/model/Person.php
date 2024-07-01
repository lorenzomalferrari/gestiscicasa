<?php declare(strict_types=1);
	/**
	 * Classe che rappresenta un record della tabella lmgc_Person e la Persona che utilizza il gestionale.
	 */
	trait Person
	{
		private int $personId;
		private string $name;
		private string $surname;
		private string $email;
		private int $age;
		private string $birthdate;
		private ?int $city;
		private ?int $state;
		private ?int $nationality;
		private ?string $description;
		private int $idUser;
		private string $creationDate;
		private string $updateDate;

		// Constants
		private const EMAIL_REGEX = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
		private const TAX_CODE_REGEX = '/^[A-Z]{6}\d{2}[A-Z]\d{2}[A-Z]\d{3}[A-Z]$/';

	/**
	 * Costruttore della classe Person.
	 *
	 * @param int $personId
	 * @param string $name
	 * @param string $surname
	 * @param string $email
	 * @param int $age
	 * @param string $birthdate
	 * @param int|null $city
	 * @param int|null $state
	 * @param int|null $nationality
	 * @param string|null $description
	 * @param int $idUser
	 * @param string $creationDate
	 * @param string $updateDate
	 */
		public function __construct(
			int $personId,
			string $name,
			string $surname,
			string $email,
			int $age,
			string $birthdate,
			?int $city,
			?int $state,
			?int $nationality,
			?string $description,
			int $idUser,
			string $creationDate,
			string $updateDate
		) {
			$this->personId = $personId;
			$this->name = $name;
			$this->surname = $surname;
			$this->email = $email;
			$this->age = $age;
			$this->birthdate = $birthdate;
			$this->city = $city;
			$this->state = $state;
			$this->nationality = $nationality;
			$this->description = $description;
			$this->idUser = $idUser;
			$this->creationDate = $creationDate;
			$this->updateDate = $updateDate;
		}

		// Getter e setter per 'personId'
		public function getPersonId(): int
		{
			return $this->PersonId;
		}

		public function setPersonId(int $personId): void
		{
			$this->personId = $personId;
		}

		// Getter e setter per 'name'
		public function getName(): string
		{
			return $this->name;
		}

		public function setName(string $name): void
		{
			$this->name = $name;
		}

		// Getter e setter per 'surname'
		public function getSurname(): string
		{
			return $this->surname;
		}

		public function setSurname(string $surname): void
		{
			$this->surname = $surname;
		}

		// Getter e setter per 'email'
		public function getEmail(): string
		{
			return $this->email;
		}

		public function setEmail(string $email): void
		{
			$this->email = $email;
		}

		// Getter e setter per 'age'
		public function getAge(): int
		{
			return $this->age;
		}

		public function setAge(int $age): void
		{
			$this->age = $age;
		}

		// Getter e setter per 'birthdate'
		public function getBirthdate(): string
		{
			return $this->birthdate;
		}

		public function setBirthdate(string $birthdate): void
		{
			$this->birthdate = $birthdate;
		}

		// Getter e setter per 'city'
		public function getCity(): ?int
		{
			return $this->city;
		}

		public function setCity(?int $city): void
		{
			$this->city = $city;
		}

		// Getter e setter per 'state'
		public function getState(): ?int
		{
			return $this->state;
		}

		public function setState(?int $state): void
		{
			$this->state = $state;
		}

		// Getter e setter per 'nationality'
		public function getNationality(): ?int
		{
			return $this->nationality;
		}

		public function setNationality(?int $nationality): void
		{
			$this->nationality = $nationality;
		}

		// Getter e setter per 'description'
		public function getDescription(): ?string
		{
			return $this->description;
		}

		public function setDescription(?string $description): void
		{
			$this->description = $description;
		}

		// Getter e setter per 'idUser'
		public function getIdUser(): int
		{
			return $this->idUser;
		}

		public function setIdUser(int $idUser): void
		{
			$this->idUser = $idUser;
		}

		// Getter e setter per 'creationDate'
		public function getCreationDate(): string
		{
			return $this->creationDate;
		}

		public function setCreationDate(string $creationDate): void
		{
			$this->creationDate = $creationDate;
		}

		// Getter e setter per 'updateDate'
		public function getUpdateDate(): string
		{
			return $this->updateDate;
		}

		public function setUpdateDate(string $updateDate): void
		{
			$this->updateDate = $updateDate;
		}

		// Email validation function
		public function validateEmail(string $email): bool
		{
			if (!preg_match(self::EMAIL_REGEX, $email)) {
				throw new Exception('Invalid email format');
			}
			return true;
		}

		// Tax code validation function (for Italian tax code)
		public function validateTaxCode(string $taxCode): bool
		{
			if (!preg_match(self::TAX_CODE_REGEX, $taxCode)) {
				throw new Exception('Invalid tax code');
			}
			return true;
		}

		// Birth date validation function (in the format year-month-day time)
		public function validateBirthDate(string $birthdate): bool
		{
			$format = 'Y-m-d H:i:s';
			$dateTime = DateTime::createFromFormat($format, $birthdate);
			if (!$dateTime || $dateTime->format($format) !== $birthdate) {
				throw new Exception('Invalid birth date format');
			}
			return true;
		}

		// toString method
		public function toString(): string
		{
			return
				"Person ID: " . $this->personId .
				", Name: " . $this->name .
				", Surname: " . $this->surname .
				", Age: " . $this->age .
				", Birthdate: " . $this->birthdate .
				", City: " . $this->city .
				", State: " . $this->state .
				", Nationality: " . $this->nationality .
				", Description: " . $this->description .
				", ID User: " . $this->idUser .
				", Creation Date: " . $this->creationDate .
				", Update Date: " . $this->updateDate;
		}
	}
