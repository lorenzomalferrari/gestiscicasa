<?php
	/**
	 * Classe per gestire il Colore.
	 * Utile per dare un colore a Proprietà, Prodotti e altro
	 */
	class Colors {
		private int $id;
		private string $code;
		private string $name;
		private string $hexCode;
		private string $rgbCode;
		private string $rgbaCode;
		private string $hslCode;
		private string $note;
		private string $creationDate;
		private string $updateDate;
	
		public function __construct(int $id, string $code, string $name, string $hexCode, string $rgbCode, string $rgbaCode, string $hslCode, string $creationDate, string $updateDate, string $note=null) {
			$this->id = $id;
			$this->code = $code;
			$this->name = $name;
			$this->hexCode = $hexCode;
			$this->rgbCode = $rgbCode;
			$this->rgbaCode = $rgbaCode;
			$this->hslCode = $hslCode;
			$this->note = $note;
			$this->creationDate = $creationDate;
			$this->updateDate = $updateDate;
		}
	
		public function getId(): int {
			return $this->id;
		}
	
		public function getCode(): string {
			return $this->code;
		}
	
		public function setCode(string $code): void {
			$this->code = $code;
		}
	
		public function getName(): string {
			return $this->name;
		}
	
		public function setName(string $name): void {
			$this->name = $name;
		}
	
		public function getHexCode(): string {
			return $this->hexCode;
		}
	
		public function setHexCode(string $hexCode): void {
			$this->hexCode = $hexCode;
		}
	
		public function getRgbCode(): string {
			return $this->rgbCode;
		}
	
		public function setRgbCode(string $rgbCode): void {
			$this->rgbCode = $rgbCode;
		}
	
		public function getRgbaCode(): string {
			return $this->rgbaCode;
		}
	
		public function setRgbaCode(string $rgbaCode): void {
			$this->rgbaCode = $rgbaCode;
		}
	
		public function getHslCode(): string {
			return $this->hslCode;
		}
	
		public function setHslCode(string $hslCode): void {
			$this->hslCode = $hslCode;
		}
	
		public function getNote(): string {
			return $this->note;
		}
	
		public function setNote(string $note): void {
			$this->note = $note;
		}
	
		public function getCreationDate(): string {
			return $this->creationDate;
		}
	
		public function setCreationDate(string $creationDate): void {
			$this->creationDate = $creationDate;
		}
	
		public function getUpdateDate(): string {
			return $this->updateDate;
		}
	
		public function setUpdateDate(string $updateDate): void {
			$this->updateDate = $updateDate;
		}
	
		public function __toString(): string {
			return "ID: {$this->id}, Code: {$this->code}, Name: {$this->name}, Hex Code: {$this->hexCode}, RGB Code: {$this->rgbCode}, RGBA Code: {$this->rgbaCode}, HSL Code: {$this->hslCode}, Note: {$this->note}, Creation Date: {$this->creationDate}, Update Date: {$this->updateDate}";
		}
	}
	

?>
