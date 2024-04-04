<?php
	/**
	 * Classe che rappresenta i Tipi di Proprietà
	 */
	class PropertyTypes {
		public const BUILDING = 0; //Building
		public const APARTMENT = 1; //Apartment
		public const OFFICE = 2; //Office
		public const VILLA = 3; //Villa
		public const WAREHOUSE = 4; //Warehouse
		public const LAND = 5; //Land

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
		public static function toString(): string {
			return implode(', ', self::getPropertyTypes());
		}
	}
?>