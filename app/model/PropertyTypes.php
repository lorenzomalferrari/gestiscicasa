<?php
	/**
	 *
	 */
	class PropertyTypes {
		public const BUILDING = "Building";
		public const APARTMENT = "Apartment";
		public const OFFICE = "Office";
		public const VILLA = "Villa";
		public const WAREHOUSE = "Warehouse";
		public const LAND = "Land";

		// Function to get all types as an array
		public static function getTypes(): array {
			return [
				self::BUILDING,
				self::APARTMENT,
				self::OFFICE,
				self::VILLA,
				self::WAREHOUSE,
				self::LAND,
			];
		}

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
			return implode(', ', self::getTypes());
		}
	}
?>