<?php declare(strict_types=1);
	/**
	 * Classe per gestire il Colore.
	 * Utile per dare un colore a Proprietà, Prodotti e altro
	 */
	class Color {
		private int $id;
		private string $name;
		private string $hexCode;
		private string $rgbCode;
		private string $rgbaCode;
		private string $hslCode;
		private string $note;

		public function __construct(int $id, string $name, string $hexCode, string $rgbCode, string $rgbaCode, string $hslCode, string $note = "") {
			$this->id = $id;
			$this->name = $name;
			$this->hexCode = $hexCode;
			$this->rgbCode = $rgbCode;
			$this->rgbaCode = $rgbaCode;
			$this->hslCode = $hslCode;
			$this->note = $note;
		}

		public function getId(): int {
			return $this->id;
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

		public function __toString(): string {
			return "ID: {$this->id}, Name: {$this->name}, Hex Code: {$this->hexCode}, RGB Code: {$this->rgbCode}, RGBA Code: {$this->rgbaCode}, HSL Code: {$this->hslCode}, Note: {$this->note}";
		}
	}

?>
