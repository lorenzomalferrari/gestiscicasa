<?php declare(strict_types=1);
    class UsageDestination {
        // Instance variables
        private int $id;
        private string $name;
        private string $description;
        private string $notes;
        private string $creationDate;
        private string $updateDate;
        private string $code;
        private int $colorId;

        // Constructor
        public function __construct(int $id, string $name, string $description=null, string $notes=null, string $creationDate, string $updateDate, string $code=null, int $colorId=null) {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->notes = $notes;
            $this->creationDate = $creationDate;
            $this->updateDate = $updateDate;
            $this->code = $code;
            $this->colorId = $colorId;
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
        public function getNotes(): string {
            return $this->notes;
        }

        public function setNotes(string $notes): void {
            $this->notes = $notes;
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

        // Getter and setter methods for code
        public function getCode(): string {
            return $this->code;
        }

        public function setCode(string $code): void {
            $this->code = $code;
        }

        // Getter and setter methods for colorId
        public function getColorId(): int {
            return $this->colorId;
        }

        public function setColorId(int $colorId): void {
            $this->colorId = $colorId;
        }

        // Method for textual representation of the object
        public function toString(): string {
            return
                "Usage Destination id: {$this->id}, Name: {$this->name}, Description: {$this->description}, Notes: {$this->notes}, Creation Date: {$this->creationDate}, Update Date: {$this->updateDate}, Code: {$this->code}, Color ID: {$this->colorId}";
        }
    }

?>