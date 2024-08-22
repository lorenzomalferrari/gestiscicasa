<?php declare(strict_types=1);
	/**
	 * Classe che rappresenta i ruoli ammessi nel progetto
	 */
	class Role {
		public const PURCHASING_MANAGER = "Purchasing Manager";
		public const SALES_PERSON = "Sales Person";
		public const SUPPLIER = "Supplier";

		// Function to get all roles as an array
		public static function getRoles(): array {
			return [
				self::PURCHASING_MANAGER,
				self::SALES_PERSON,
				self::SUPPLIER
			];
		}

		// toString function to display all roles types
		public static function toString(): string {
			return implode(', ', self::getRoles());
		}
	}
?>