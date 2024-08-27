<?php declare(strict_types=1);
	/**
	 * Classe che rappresenta un record della tabella lmgc_People e la Persona che utilizza il gestionale.
	 */
	trait Person
	{
		private int $id;
		private string $name;
		private string $surname;
		private string $email;
		private int $age;
		private string $birthdate;
		private int $city;
		private int $state;
		private int $nationality;
		private ?string $description;
		private int $idUser;
		private string $creationDate;
		private string $updateDate;

		// Constants
		private const EMAIL_REGEX = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
		private const TAX_CODE_REGEX = '/^[A-Z]{6}\d{2}[A-Z]\d{2}[A-Z]\d{3}[A-Z]$/';

		public function __construct() {}

		// Getter e setter per 'id'
		public function getPersonId(): int
		{
			return $this->id;
		}

		public function setPersonId(int $id): void
		{
			$this->id = $id;
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
		public function getCity(): int
		{
			return $this->city;
		}

		public function setCity(int $city): void
		{
			$this->city = $city;
		}

		// Getter e setter per 'state'
		public function getState(): int
		{
			return $this->state;
		}

		public function setState(int $state): void
		{
			$this->state = $state;
		}

		// Getter e setter per 'nationality'
		public function getNationality(): int
		{
			return $this->nationality;
		}

		public function setNationality(int $nationality): void
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
		public function getPersonCreationDate(): string
		{
			return $this->creationDate;
		}

		// Getter e setter per 'updateDate'
		public function getPersonUpdateDate(): string
		{
			return $this->updateDate;
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

	}
