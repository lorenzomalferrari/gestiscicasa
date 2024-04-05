<?php
    class ProductQuantity {
        // Instance variables
        private int $idProduct;
        private int $id;
        private string $description;
        private string $notes;
        private string $creationDate;
        private string $updateDate;
        private int $quantity;

        // Constructor
        public function __construct(int $idProduct, int $id, string $description=null, string $notes=null, string $creationDate, string $updateDate, int $quantity) {
            $this->idProduct = $idProduct;
            $this->id = $id;
            $this->description = $description;
            $this->notes = $notes;
            $this->creationDate = $creationDate;
            $this->updateDate = $updateDate;
            $this->quantity = $quantity;
        }

        // Getter and setter methods for idProduct
        public function getIdProduct(): int {
            return $this->idProduct;
        }

        public function setIdProduct(int $idProduct): void {
            $this->idProduct = $idProduct;
        }

        // Getter and setter methods for id
        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id): void {
            $this->id = $id;
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

        // Getter and setter methods for quantity
        public function getQuantity(): int {
            return $this->quantity;
        }

        public function setQuantity(int $quantity): void {
            $this->quantity = $quantity;
        }

        // Method for textual representation of the object
        public function toString(): string {
            return
                "Product ID: {$this->idProduct}, ID: {$this->id}, Description: {$this->description}, Notes: {$this->notes}, Creation Date: {$this->creationDate}, Update Date: {$this->updateDate}, Quantity: {$this->quantity}";
        }
    }

?>