<?php declare(strict_types=1);
	require_once("../../controller/lib/libs.php");

		/**
		 * Class Translation
		 *
		 * Gestisce le traduzioni per diverse lingue utilizzando un database.
		 */
		class Translation {
			/**
			 * Array per memorizzare le traduzioni caricate in memoria.
			 *
			 * @var array
			 */
			private static $translations = [];

			/**
			 * ID della lingua di fallback.
			 *
			 * @var int
			 */
			private static $fallbackLanguageId;

			/**
			 * Inizializza la classe impostando l'ID della lingua di fallback.
			 *
			 * @param string $languageCode Codice della lingua di fallback (es. 'en').
			 */
			public static function initialize($languageCode) {
				$params_where = [
					':code' => $languageCode,
					':is_active' => "TRUE",
				];

				$select = "
					SELECT
						sl." . SupportedLanguagesTable::ID . "
					FROM
						" . SupportedLanguagesTable::TABLE_NAME . " sl
						INNER JOIN
							" . LanguagesTable::TABLE_NAME . " l
							ON
								sl." . SupportedLanguagesTable::LANGUAGE_ID . " = l.id
					WHERE
							l." . LanguagesTable::CODE_2 . " = :code
						AND
							sl." . SupportedLanguagesTable::IS_ACTIVE . " = :is_active
				";

				$row = DB->select($select, $params_where);
				self::$fallbackLanguageId = $row[SupportedLanguagesTable::ID];
			}

			/**
			 * Carica le traduzioni dal database per una lingua specifica.
			 *
			 * @param int $languageId ID della lingua per la quale caricare le traduzioni.
			 */
			private static function loadTranslations($languageId) {
				$select = "SELECT `key`, value FROM translations WHERE language_id = ?";
				$rows = DB->select($select);
				self::$translations[$languageId] = [];

				foreach ($rows as $i => $row) {
					foreach ($row as $k => $value) {
						self::$translations[$languageId][$row[$k]] = $row[$value];
					}
				}

				print_r(self::$translations);
			}

			/**
			 * Recupera una traduzione per una chiave specifica e una lingua.
			 *
			 * @param string $key Chiave della traduzione.
			 * @param string $languageCode Codice della lingua (es. 'en').
			 * @return string Valore tradotto o la chiave se non trovato.
			 */
			public static function getTranslation($key, $languageCode) {
				// Recupera l'ID della lingua preferita
				/*$stmt = $pdo->prepare("
					SELECT sl.id
					FROM supported_languages sl
					JOIN languages l ON sl.language_id = l.id
					WHERE l.code_2 = ? AND sl.is_active = TRUE
				");
				$stmt->execute([$languageCode]);
				$languageId = $stmt->fetchColumn();

				if (!isset(self::$translations[$languageId])) {
					self::loadTranslations($pdo, $languageId);
				}
				*/
				//return self::$translations[$languageId][$key] ?? self::$translations[self::$fallbackLanguageId][$key] ?? $key;
			}

			/**
			 * Aggiunge una nuova traduzione.
			 *
			 * @param string $key Chiave della traduzione.
			 * @param string $value Valore tradotto.
			 * @param int $languageId ID della lingua.
			 */
			public static function addTranslation($key, $value, $languageId, $pdo) {
				//$stmt = $pdo->prepare("INSERT INTO translations (`key`, value, language_id) VALUES (?, ?, ?) 
				//					ON DUPLICATE KEY UPDATE value = VALUES(value)");
				//$stmt->execute([$key, $value, $languageId]);
			}

			/**
			 * Rimuove una traduzione.
			 *
			 * @param string $key Chiave della traduzione.
			 * @param int $languageId ID della lingua.
			 * @param PDO $pdo Connessione al database.
			 */
			public static function removeTranslation($key, $languageId, $pdo) {
				//$stmt = $pdo->prepare("DELETE FROM translations WHERE `key` = ? AND language_id = ?");
				//$stmt->execute([$key, $languageId]);
			}
		}
	?>
