<?php declare(strict_types=1);
	/**
	 * Classe che rappresenta la Proprietà
	 */
	class Property {
		// Instance variables
		private int $id;
		private string $name;
		private string $description;
		private float $price;
		private string $address;
		private int $IdCity;
		private int $IdState;
		private int $IdPropertyTypes;
		private bool $active;
		private string $notes;
		private string $creationDate;
		private string $updateDate;

		// Constructor
		public function __construct(
			int $id,
			string $name,
			string $description,
			float $price,
			string $address,
			int $IdCity,
			int $IdState,
			int $IdPropertyTypes,
			bool $active,
			string $notes,
			string $creationDate,
			string $updateDate
		) {
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->price = $price;
			$this->address = $address;
			$this->IdCity = $IdCity;
			$this->IdState = $IdState;
			$this->IdPropertyTypes = $IdPropertyTypes;
			$this->active = $active;
			$this->notes = $notes;
			$this->creationDate = $creationDate;
			$this->updateDate = $updateDate;
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

		// Getter and setter methods for 'description'
		public function getDescription(): string {
			return $this->description;
		}

		public function setDescription(string $description): void {
			$this->description = $description;
		}

		// Getter and setter methods for 'price'
		public function getPrice(): float {
			return $this->price;
		}

		public function setPrice(float $price): void {
			$this->price = $price;
		}

		// Getter and setter methods for 'address'
		public function getAddress(): string {
			return $this->address;
		}

		public function setAddress(string $address): void {
			$this->address = $address;
		}

		// Getter and setter methods for 'IdCity'
		public function getIdCity(): int {
			return $this->IdCity;
		}

		public function setIdCity(int $IdCity): void {
			$this->IdCity = $IdCity;
		}

		// Getter and setter methods for 'IdState'
		public function getIdState(): int {
			return $this->IdState;
		}

		public function setIdState(int $IdState): void {
			$this->IdState = $IdState;
		}

		// Getter and setter methods for 'IdPropertyTypes'
		public function getIdPropertyTypes(): int {
			return $this->IdPropertyTypes;
		}

		public function setIdPropertyTypes(int $IdPropertyTypes): void {
			$this->IdPropertyTypes = $IdPropertyTypes;
		}

		// Getter and setter methods for 'active'
		public function isActive(): bool {
			return $this->active;
		}

		public function setActive(bool $active): void {
			$this->active = $active;
		}

		// Getter and setter methods for 'notes'
		public function getNotes(): string {
			return $this->notes;
		}

		public function setNotes(string $notes): void {
			$this->notes = $notes;
		}

		// Getter and setter methods for 'creationDate'
		public function getCreationDate(): string {
			return $this->creationDate;
		}

		// Getter and setter methods for 'updateDate'
		public function getupdateDate(): string {
			return $this->updateDate;
		}

		// toString method
		public function toString(): string {
			return
				"ID: " . $this->id .
				", Name: " . $this->name .
				", Description: " . $this->description .
				", Price: " . $this->price .
				", Address: " . $this->address .
				", City ID: " . $this->IdCity .
				", State ID: " . $this->IdState .
				", Property Type ID: " . $this->IdPropertyTypes .
				", Creation Date: " . $this->creationDate .
				", Last Modified Date: " . $this->updateDate;
		}
	}

?>
