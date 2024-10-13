<?php declare(strict_types=1);
	class Brand {
		// Instance variables
		private int $id;
		private string $name;
		private ?int $country_of_origin_id;
		private ?int $industry_sector_id;
		private ?int $foundation_year;
		private ?string $note;
		private string $creationDate;
		private string $updateDate;

		/**
		 * Costruttore della classe Brand
		 */
		public function __construct(int $id, string $name, int $country_of_origin_id=null, int $industry_sector_id=null, int $foundation_year=null, string $note=null, string $creationDate=null, string $updateDate=null) {
			$this->id = $id;
			$this->name = $name;
			$this->country_of_origin_id = $country_of_origin_id;
			$this->industry_sector_id = $industry_sector_id;
			$this->foundation_year = $foundation_year;
			$this->note = $note;
			$this->creationDate = $creationDate;
			$this->updateDate = $updateDate;
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

		public function getCountryOfOrigin() {
			return $this->country_of_origin_id;
		}

		public function setCountryOfOrigin($country_of_origin_id) {
			$this->country_of_origin_id = $country_of_origin_id;
		}

		public function getIndustrySector() {
			return $this->industry_sector_id;
		}

		public function setIndustrySector($industry_sector_id) {
			$this->industry_sector_id = $industry_sector_id;
		}

		public function getFoundationYear() {
			return $this->foundation_year;
		}

		public function setFoundationYear($foundation_year) {
			$this->foundation_year = $foundation_year;
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

		public function getupdateDate() {
			return $this->updateDate;
		}

		// toString method
		public function toString() {
			return
				"ID: " . $this->id .
				", Name: " . $this->name .
				", Country of Origin: " . $this->country_of_origin_id .
				", Industry Sector: " . $this->industry_sector_id .
				", Foundation Year: " . $this->foundation_year .
				", Note: " . $this->note .
				", Creation Date: " . $this->creationDate .
				", Update Data: " . $this->updateDate;
		}
	}
?>
