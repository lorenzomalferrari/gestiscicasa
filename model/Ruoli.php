<?php
	/**
	 *
	 */
	class Ruoli {
		public const RESPONSABILE_ACQUISTI = "Responsabile Acquisti";
		public const VENDITORE = "Venditore";
		public const FORNITORE = "Fornitore";

		// Funzione per ottenere tutti i ruoli come un array
		public static function getRuoli(): array {
			return [
				self::RESPONSABILE_ACQUISTI,
				self::VENDITORE,
				self::FORNITORE
			];
		}
	}
?>