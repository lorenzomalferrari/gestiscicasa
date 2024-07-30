<?php declare(strict_types=1);

	class FormatterValidator
	{
		/**
		 * Array statico per memorizzare le classi definite dall'utente.
		 *
		 * @var array
		 */
		private static array $userDefinedClasses = [
			'',
			''
		];

		/**
		 * Aggiunge una classe definita dall'utente all'array statico.
		 *
		 * @param string $className Nome della classe da aggiungere.
		 * @return void
		 */
		public static function addUserDefinedClass(string $className): void
		{
			if (!in_array($className, self::$userDefinedClasses, true)) {
				self::$userDefinedClasses[] = $className;
			}
		}

		/**
		 * Restituisce l'elenco delle classi definite dall'utente.
		 *
		 * @return array Elenco delle classi definite dall'utente.
		 */
		public static function getUserDefinedClasses(): array
		{
			return self::$userDefinedClasses;
		}

		/**
		 * Verifica che la stringa non sia vuota.
		 *
		 * @param string $value Stringa da verificare.
		 * @return bool Restituisce true se la stringa non è vuota, altrimenti false.
		 */
		public static function validateNotEmpty(string $value): bool
		{
			return !empty($value);
		}

		/**
		 * Verifica che la lunghezza della stringa sia compresa tra i valori minimi e massimi.
		 *
		 * @param string $value Stringa da verificare.
		 * @param int $minLength Lunghezza minima.
		 * @param int $maxLength Lunghezza massima.
		 * @return bool Restituisce true se la lunghezza è valida, altrimenti false.
		 */
		public static function validateLength(string $value, int $minLength, int $maxLength): bool
		{
			$length = mb_strlen($value, 'UTF-8');
			return $length >= $minLength && $length <= $maxLength;
		}

		/**
		 * Verifica che la stringa contenga solo caratteri alfanumerici.
		 *
		 * @param string $value Stringa da verificare.
		 * @return bool Restituisce true se è alfanumerica, altrimenti false.
		 */
		public static function isAlphaNumeric(string $value): bool
		{
			return ctype_alnum($value);
		}

		/**
		 * Verifica se la stringa è un'email valida.
		 *
		 * @param string $value Stringa da verificare.
		 * @return bool Restituisce true se è una email valida, altrimenti false.
		 */
		public static function isEmail(string $value): bool
		{
			return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
		}

		/**
		 * Verifica se la stringa rappresenta un numero.
		 *
		 * @param string $value Stringa da verificare.
		 * @return bool Restituisce true se è numerica, altrimenti false.
		 */
		public static function isNumeric(string $value): bool
		{
			return is_numeric($value);
		}

		/**
		 * Verifica che la stringa contenga solo lettere.
		 *
		 * @param string $value Stringa da verificare.
		 * @return bool Restituisce true se è alfabetica, altrimenti false.
		 */
		public static function isLetters(string $value): bool
		{
			return ctype_alpha($value);
		}

		/**
		 * Verifica che la stringa contenga caratteri speciali.
		 *
		 * @param string $value Stringa da verificare.
		 * @return bool Restituisce true se contiene caratteri speciali, altrimenti false.
		 */
		public static function isSpecialChars(string $value): bool
		{
			return preg_match('/[\W_]/', $value);
		}

		/**
		 * Formatta una stringa per visualizzare correttamente i caratteri con accenti.
		 *
		 * @param string $value Stringa da formattare.
		 * @return string Stringa formattata.
		 */
		public static function formatStringWithAccents(string $value): string
		{
			return mb_convert_encoding($value, 'UTF-8', 'auto');
		}

		/**
		 * Capitalizza ogni parola nella stringa.
		 *
		 * @param string $value Stringa da formattare.
		 * @return string Stringa capitalizzata.
		 */
		public static function formatCapitalize(string $value): string
		{
			return mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
		}

		/**
		 * Rimuove spazi bianchi all'inizio e alla fine della stringa.
		 *
		 * @param string $value Stringa da formattare.
		 * @return string Stringa senza spazi bianchi.
		 */
		public static function formatTrim(string $value): string
		{
			return trim($value);
		}

		/**
		 * Verifica se un valore è un intero.
		 *
		 * @param mixed $value Valore da verificare.
		 * @return bool Restituisce true se il valore è un intero, altrimenti false.
		 */
		public static function isInteger($value): bool
		{
			return is_int($value);
		}

		/**
		 * Verifica se un valore è un float.
		 *
		 * @param mixed $value Valore da verificare.
		 * @return bool Restituisce true se il valore è un float, altrimenti false.
		 */
		public static function isFloat($value): bool
		{
			return is_float($value);
		}

		/**
		 * Verifica se un valore è una stringa.
		 *
		 * @param mixed $value Valore da verificare.
		 * @return bool Restituisce true se il valore è una stringa, altrimenti false.
		 */
		public static function isString($value): bool
		{
			return is_string($value);
		}

		/**
		 * Verifica se un valore è un booleano.
		 *
		 * @param mixed $value Valore da verificare.
		 * @return bool Restituisce true se il valore è un booleano, altrimenti false.
		 */
		public static function isBoolean($value): bool
		{
			return is_bool($value);
		}

		/**
		 * Verifica se un valore è un array.
		 *
		 * @param mixed $value Valore da verificare.
		 * @return bool Restituisce true se il valore è un array, altrimenti false.
		 */
		public static function isArray($value): bool
		{
			return is_array($value);
		}

		/**
		 * Verifica se un valore è un oggetto e restituisce il nome della classe se definita dall'utente.
		 *
		 * @param mixed $value Valore da verificare.
		 * @return string Nome della classe se è una classe definita dall'utente, altrimenti 'Unknown Object'.
		 */
		public static function isObject($value): string
		{
			if (is_object($value)) {
				foreach (self::$userDefinedClasses as $className) {
					if ($value instanceof $className) {
						return $className;
					}
				}
				return 'Unknown Object';
			}
			return 'Not an Object';
		}

		/**
		 * Verifica se i punti per le migliaia sono posizionati correttamente in un numero formattato.
		 *
		 * @param string $formattedNumber Numero formattato.
		 * @return bool Restituisce true se i punti sono posizionati correttamente, altrimenti false.
		 */
		public static function isThousandsSeparatorCorrect(string $formattedNumber): bool
		{
			// Usa una regex per verificare che i punti siano ogni 3 cifre
			return preg_match('/^(?:\d{1,3}(?:\.\d{3})*|\d+)(,\d+)?$/', $formattedNumber);
		}

		/**
		 * Formattta un numero con separatore delle migliaia e decimali.
		 *
		 * @param float $value Numero da formattare.
		 * @return string Numero formattato.
		 */
		public static function formatNumber(float $value): string
		{
			// Formattazione del numero con punto per migliaia e virgola per decimali
			$formattedNumber = number_format($value, 2, ',', '.');

			// Verifica se il punto per le migliaia è posizionato correttamente
			if (!self::isThousandsSeparatorCorrect($formattedNumber)) {
				throw new \Exception("Errore nella formattazione del numero");
			}

			return $formattedNumber;
		}

		/**
		 * Formattta un valore booleano secondo il formato specificato.
		 *
		 * @param bool $value Valore booleano da formattare.
		 * @param string $format Formato di visualizzazione ('true_false', 't_f', 'si_no', 's_n', 'vero_falso', 'v_f').
		 * @return string Valore booleano formattato.
		 */
		public static function formatBoolean(bool $value, string $format): string
		{
			$formats = [
				'true_false' => ['true' => 'TRUE', 'false' => 'FALSE'],
				't_f' => ['true' => 'T', 'false' => 'F'],
				'si_no' => ['true' => 'SÌ', 'false' => 'NO'],
				's_n' => ['true' => 'S', 'false' => 'N'],
				'vero_falso' => ['true' => 'Vero', 'false' => 'Falso'],
				'v_f' => ['true' => 'V', 'false' => 'F']
			];

			return $formats[$format][$value ? 'true' : 'false'];
		}

		/**
		 * Formattta una data secondo il formato specificato.
		 *
		 * @param string $dateString Data in formato ISO (YYYY-MM-DDTHH:MM:SS).
		 * @param string $format Formato di visualizzazione ('yyyy.mm.dd', 'yyyy.mm.dd HH:MM', 'yyyy.mm.dd HH:MM:SS', 'yyyy.mm.dd HH:MM:SS.mmm', 'dd/mm/yyyy', 'HH:MM dd/mm/yyyy', 'hh:mm AM/PM dd/mm/yyyy').
		 * @return string Data formattata.
		 */
		public static function formatDate(string $dateString, string $format): string
		{
			$date = new \DateTime($dateString);

			switch ($format) {
				case 'yyyy.mm.dd':
					return $date->format('Y.m.d');
				case 'yyyy.mm.dd HH:MM':
					return $date->format('Y.m.d H:i');
				case 'yyyy.mm.dd HH:MM:SS':
					return $date->format('Y.m.d H:i:s');
				case 'yyyy.mm.dd HH:MM:SS.mmm':
					return $date->format('Y.m.d H:i:s.v');
				case 'dd/mm/yyyy':
					return $date->format('d/m/Y');
				case 'HH:MM dd/mm/yyyy':
					return $date->format('H:i d/m/Y');
				case 'hh:mm AM/PM dd/mm/yyyy':
					return $date->format('h:i A d/m/Y');
				default:
					throw new \Exception("Formato di data non riconosciuto");
			}
		}
	}

	?>
