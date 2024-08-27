<?php declare(strict_types=1);
	/**
	 * Classe che rappresenta i Tipi di Proprietà
	 */
	class PropertyTypes {

		// Instance variables
		private int $id;
		private string $description;
		private string $creationDate;
		private string $lastModifiedDate;
		private string $notes;

		public const BUILDING = 0; //Building
		public const APARTMENT = 1; //Apartment
		public const OFFICE = 2; //Office
		public const VILLA = 3; //Villa
		public const WAREHOUSE = 4; //Warehouse
		public const LAND = 5; //Land

		// Constructor
		/*public function __construct(
			int $id,
			string $description,
			string $creationDate,
			string $lastModifiedDate=null,
			string $notes=null
		) {
			$this->id = $id;
			$this->description = $description;
			$this->creationDate = $creationDate;
			$this->lastModifiedDate = $lastModifiedDate;
			$this->notes = $notes;
		}*/

		public function __construct() {
			$this->id = 0;
			$this->description = "";
			$this->creationDate = "";
			$this->lastModifiedDate = "";
			$this->notes = "";
		}

		// Getter and setter methods for 'id'
		public function getId(): int {
			return $this->id;
		}

		public function setId(int $id): void {
			$this->id = $id;
		}

		// Getter and setter methods for 'description'
		public function getDescription(): string {
			return $this->description;
		}

		public function setDescription(string $description): void {
			$this->description = $description;
		}

		// Getter and setter methods for 'creationDate'
		public function getCreationDate(): string {
			return $this->creationDate;
		}

		// Getter and setter methods for 'lastModifiedDate'
		public function getLastModifiedDate(): string {
			return $this->lastModifiedDate;
		}

		// Getter and setter methods for 'notes'
		public function getNotes(): string {
			return $this->notes;
		}

		public function setNotes(string $notes): void {
			$this->notes = $notes;
		}

		// Function to get all property types as an array
		public static function getPropertyTypes(): array {
			return [
				self::BUILDING,
				self::APARTMENT,
				self::OFFICE,
				self::VILLA,
				self::WAREHOUSE,
				self::LAND,
			];
		}

		// toString function to display all property types
		public static function toStringPropertyTypes(): string {
			return implode(', ', self::getPropertyTypes());
		}

		// toString method
		public function toString(): string {
			return
				"ID: " . $this->id .
				", Description: " . $this->description .
				", Creation Date: " . $this->creationDate .
				", Last Modified Date: " . $this->lastModifiedDate .
				", Notes: " . $this->notes;
		}
	}
?>
