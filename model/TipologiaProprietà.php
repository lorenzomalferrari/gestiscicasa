<?php

	/**
	 *
	 */
	class TipologieProprieta {
		public const EDIFICIO = "Edificio";
		public const APPARTAMENTO = "Appartamento";
		public const UFFICIO = "Ufficio";
		public const VILLA = "Villa";
		public const MAGAZZINO = "Magazzino";
		public const TERRENO = "Terreno";

		// Funzione per ottenere tutte le tipologie come un array
		public static function getTipologie(): array {
			return [
				self::EDIFICIO,
				self::APPARTAMENTO,
				self::UFFICIO,
				self::VILLA,
				self::MAGAZZINO,
				self::TERRENO,
			];
		}

		// Funzione per ottenere tutte le tipologie come un array
		public static function getTipologieProprietà(): array {
			return [
				self::EDIFICIO,
				self::APPARTAMENTO,
				self::UFFICIO,
				self::VILLA,
				self::MAGAZZINO,
				self::TERRENO,
			];
		}

		// Funzione toString per mostrare tutte le tipologie di proprietà
		public static function toString(): string {
			return implode(', ', self::getTipologie());
		}
	}

?>