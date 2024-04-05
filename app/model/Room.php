<?php
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

        // Constructor
        public function __construct(
            int $id,
            int $number,
            string $name,
            int $idUsageDestination,
            string $creationDate,
            string $updateDate,
            string $note,
            int $idColor,
            int $idProperty
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
        public function getidUsageDestination(): int {
            return $this->idUsageDestination;
        }

        public function setidUsageDestination(int $idUsageDestination): void {
            $this->idUsageDestination = $idUsageDestination;
        }

        // Getter and setter methods for creationDate
        public function getCreationDate(): string {
            return $this->creationDate;
        }

        public function setCreationDate(string $creationDate): void {
            $this->creationDate = $creationDate;
        }

        // Getter and setter methods for updateDate
        public function getUpdateDate(): string {
            return $this->updateDate;
        }

        public function setUpdateDate(string $updateDate): void {
            $this->updateDate = $updateDate;
        }

        // Getter and setter methods for note
        public function getnote(): string {
            return $this->note;
        }

        public function setnote(string $note): void {
            $this->note = $note;
        }

        // Getter and setter methods for idColor
        public function getidColor(): int {
            return $this->idColor;
        }

        public function setidColor(int $idColor): void {
            $this->idColor = $idColor;
        }

        // Getter and setter methods for idProperty
        public function getidProperty(): int {
            return $this->idProperty;
        }

        public function setidProperty(int $idProperty): void {
            $this->idProperty = $idProperty;
        }

        // Method for textual representation of the object
        public function toString(): string {
            return "Room id: {$this->id}, Number: {$this->number}, Name: {$this->name}, Usage Destination Id: {$this->idUsageDestination}, Creation Date: {$this->creationDate}, Update Date: {$this->updateDate}, note: {$this->note}, Color Id: {$this->idColor}, Property Id: {$this->idProperty}";
        }
    }
?>
