<?php declare(strict_types=1);
	/**
	 * Classe che rappresenta la Categoria dei Prodotti presenti nel gestionale
	 */
	class Category {
		// Constants
		public const DEFAULT_CATEGORY_NAME = "Uncategorized";

		// Instance variables
		private int $id;
		private string $name;
		private string $description;
		private string $notes;
		private string $creationDate;
		private string $updateDate;
		private int $IdColor;

		// Constructor
		public function __construct(int $id, string $name, string $description, string $notes=null, string $creationDate, string $updateDate, int $IdColor=null) {
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->notes = $notes;
			$this->creationDate = $creationDate;
			$this->updateDate = $updateDate;
			$this->IdColor = $IdColor;
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

		// Getter and setter methods for 'IdColor'
		public function getIdColor(): int {
			return $this->IdColor;
		}

		public function setIdColor(int $IdColor): void {
			$this->IdColor = $IdColor;
		}

		// toString method
		public function toString(): string {
			return
				"Category ID: " . $this->id .
				", Name: " . $this->name .
				", Description: " . $this->description .
				", Notes: " . $this->notes .
				", Creation Date: " . $this->creationDate .
				", Update Date: " . $this->updateDate .
				", Color ID: " . $this->IdColor;
		}
	}
?>