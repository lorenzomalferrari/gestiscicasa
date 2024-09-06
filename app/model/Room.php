<?php declare(strict_types=1);
	class Room {
		// Instance variables
		private int $id;
		private int $number;
		private string $name;
		private int $idUsageDestination;
		private string $creationDate;
		private string $updateDate;
		private string $note;
		private int $idColor;
		private int $idProperty;
		private int $idRoomTypes;

		// Constructor
		public function __construct(
			int $id,
			int $number=null,
			string $name,
			int $idUsageDestination=null,
			string $creationDate,
			string $updateDate,
			string $note=null,
			int $idColor=null,
			int $idProperty,
			int $idRoomTypes=null
		) {
			$this->id = $id;
			$this->number = $number;
			$this->name = $name;
			$this->idUsageDestination = $idUsageDestination;
			$this->creationDate = $creationDate;
			$this->updateDate = $updateDate;
			$this->note = $note;
			$this->idColor = $idColor;
			$this->idProperty = $idProperty;
			$this->idRoomTypes = $idRoomTypes;
		}

		// Getter and setter methods for id
		public function getId(): int {
			return $this->id;
		}

		public function setId(int $id): void {
			$this->id = $id;
		}

		// Getter and setter methods for number
		public function getNumber(): int {
			return $this->number;
		}

		public function setNumber(int $number): void {
			$this->number = $number;
		}

		// Getter and setter methods for name
		public function getName(): string {
			return $this->name;
		}

		public function setName(string $name): void {
			$this->name = $name;
		}

		// Getter and setter methods for idUsageDestination
		public function getIdUsageDestination(): int {
			return $this->idUsageDestination;
		}

		public function setIdUsageDestination(int $idUsageDestination): void {
			$this->idUsageDestination = $idUsageDestination;
		}

		// Getter and setter methods for creationDate
		public function getCreationDate(): string {
			return $this->creationDate;
		}

		// Getter and setter methods for updateDate
		public function getUpdateDate(): string {
			return $this->updateDate;
		}

		// Getter and setter methods for note
		public function getNote(): string {
			return $this->note;
		}

		public function setNote(string $note): void {
			$this->note = $note;
		}

		// Getter and setter methods for idColor
		public function getIdColor(): int {
			return $this->idColor;
		}

		public function setIdColor(int $idColor): void {
			$this->idColor = $idColor;
		}

		// Getter and setter methods for idProperty
		public function getIdProperty(): int {
			return $this->idProperty;
		}

		public function setIdProperty(int $idProperty): void {
			$this->idProperty = $idProperty;
		}

		// Getter and setter methods for idRoomTypes
		public function getIdRoomTypes(): int {
			return $this->idRoomTypes;
		}

		public function setIdRoomTypes(int $idRoomTypes): void {
			$this->idRoomTypes = $idRoomTypes;
		}

		// Method for textual representation of the object
		public function toString(): string {
			return
				"Room id: ". $this->id .
				", Number: ". $this->number .
				", Name: " .$this->name .
				", Usage Destination Id: " .$this->idUsageDestination .
				", Creation Date: " .$this->creationDate .
				", Update Date: " .$this->updateDate .
				", note: " .$this->note .
				", Color Id: " .$this->idColor .
				", Property Id: " .$this->idProperty .
				", RoomTypes Id: " .$this->idRoomTypes ;
		}
	}