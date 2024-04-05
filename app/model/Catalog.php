<?php
	/**
	 * Classe che rappresenta il Catalogo dei prodotti
	 */
	class Catalog {
		// Constants
		public const MAX_PRODUCTS = 100;

		// Instance variables
		private int $id;
		private string $name;
		private string $description;
		private string $note;
		private string $creationDate;
		private string $updateDate;

		// Constructor
		public function __construct(int $id, string $name, string $description, string $note, string $creationDate, string $updateDate) {
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->note = $note;
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

		// Getter and setter methods for 'note'
		public function getNote(): string {
			return $this->note;
		}

		public function setNote(string $note): void {
			$this->note = $note;
		}

		// Getter and setter methods for 'creationDate'
		public function getCreationDate(): string {
			return $this->creationDate;
		}

		public function setCreationDate(string $creationDate): void {
			$this->creationDate = $creationDate;
		}

		// Getter and setter methods for 'updateDate'
		public function getUpdateDate(): string {
			return $this->updateDate;
		}

		public function setUpdateDate(string $updateDate): void {
			$this->updateDate = $updateDate;
		}

		// toString method
		public function toString(): string {
			return
				"Catalog ID: " . $this->id .
				", Name: " . $this->name .
				", Description: " . $this->description .
				", Note: " . $this->note .
				", Creation Date: " . $this->creationDate .
				", Update Date: " . $this->updateDate;
		}
	}

?>