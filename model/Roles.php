<?php
	/**
	 *
	 */
	class Roles {
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
	}
?>