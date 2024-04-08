<?php
	class RoomType {
		// Instance variables
		private int $id;
		private string $name;
		private string $description;
		private string $note;

		// Constants
		public const SINGLE = 1; //Single
		public const DOUBLE = 2; //Double
		public const TRIPLE = 3; //Triple

		// Constructor
		public function __construct(int $id, string $name, string $description, string $note) {
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->note = $note;
		}

		// Getter and setter methods for id
		public function getId(): int {
			return $this->id;
		}

		public function setId(int $id): void {
			$this->id = $id;
		}

		// Getter and setter methods for name
		public function getName(): string {
			return $this->name;
		}

		public function setName(string $name): void {
			$this->name = $name;
		}

		// Getter and setter methods for description
		public function getDescription(): string {
			return $this->description;
		}

		public function setDescription(string $description): void {
			$this->description = $description;
		}

		// Getter and setter methods for notes
		public function getNote(): string {
			return $this->note;
		}

		public function setNote(string $note): void {
			$this->note = $note;
		}

		// Method for textual representation of the object
		public function toString(): string {
			return
				"Room Type id: {$this->id}, Name: {$this->name}, Description: {$this->description}, Notes: {$this->note}";
		}
	}
?>