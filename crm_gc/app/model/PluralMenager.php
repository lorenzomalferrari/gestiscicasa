<?php declare(strict_types=1);

	/**
	 * Class for managing English noun plurals.
	 *
	 * This class provides a static method to convert singular nouns
	 * into their plural forms following English grammatical rules.
	 *
	 */
	class PluralManager
	{
		/**
		 * Converts a singular noun to its plural form.
		 *
		 * @param string $singular Singular noun to convert
		 * @return string Plural form of the noun
		 */
		public static function convertToPlural(string $singular): string
		{
			// Trim any whitespace from the sides
			$singular = trim($singular);

			// Check if the word ends with 'Table'
			if (preg_match('/Table$/i', $singular)) {
				// Extract the part before 'Table'
				$baseWord = preg_replace('/Table$/i', '', $singular);

				// Convert the base word to its plural form
				$pluralBaseWord = self::convertBaseWordToPlural($baseWord);

				// Return the plural form with 'Table'
				return $pluralBaseWord . 'Table';
			}

			// Handle plurals for words not ending with 'Table'
			return self::convertBaseWordToPlural($singular);
		}

		/**
		 * Converts the base word to its plural form.
		 *
		 * @param string $baseWord Base noun to convert
		 * @return string Plural form of the base noun
		 */
		private static function convertBaseWordToPlural(string $baseWord): string
		{
			// Handle plurals for nouns ending in -y after a consonant
			if (preg_match('/[^aeiou]y$/i', $baseWord)) {
				return preg_replace('/y$/i', 'ies', $baseWord);
			}

			// Handle plurals for nouns ending in -s, -ss, -sh, -ch, -x, or -z
			if (preg_match('/(s|ss|sh|ch|x|z)$/i', $baseWord)) {
				return $baseWord . 'es';
			}

			// Handle plurals for all other cases
			return $baseWord . 's';
		}
	}
