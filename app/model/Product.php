<?php
class Product {
    // Instance variables
    private int $id;
    private string $name;
    private string $description;
    private float $price;
    private int $IdBrand;
    private int $IdCategory;
    private string $note;
    private string $creationDate;
    private string $updateData;

    // Constructor
    public function __construct(int $id, string $name, string $description, float $price, int $IdBrand, int $IdCategory, string $note=null, string $creationDate, string $updateData) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->IdBrand = $IdBrand;
        $this->IdCategory = $IdCategory;
        $this->note = $note;
        $this->creationDate = $creationDate;
        $this->updateData = $updateData;
    }

    // Getter and setter methods
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getIdBrand() {
        return $this->IdBrand;
    }

    public function setIdBrand($IdBrand) {
        $this->IdBrand = $IdBrand;
    }

    public function getIdCategory() {
        return $this->IdCategory;
    }

    public function setIdCategory($IdCategory) {
        $this->IdCategory = $IdCategory;
    }

    public function getNote() {
        return $this->note;
    }

    public function setNote($note) {
        $this->note = $note;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;
    }

    public function getUpdateData() {
        return $this->updateData;
    }

    public function setUpdateData($updateData) {
        $this->updateData = $updateData;
    }

    // toString method
    public function toString() {
        return
        "ID: " . $this->id . "
        , Name: " . $this->name .
        ", Description: " . $this->description .
        ", Price: " . $this->price .
        ", IdBrand: " . $this->IdBrand .
        ", IdCategory: " . $this->IdCategory .
        ", Note: " . $this->note .
        ", Creation Data: " . $this->creationDate .
        ", Update Data: " . $this->updateData;
    }
}
?>
