<?php declare(strict_types=1);

    /**
     * Classe per la validazione e la sanitizzazione di JSON.
     */
    class JSonValidator
    {
        /**
         * Messaggio di errore per JSON non valido.
         */
        public const ERROR_INVALID_JSON = 'JSON non valido.';

        /**
         * Messaggio di errore per struttura JSON non valida.
         */
        public const ERROR_INVALID_STRUCTURE = 'Struttura JSON non valida.';

        /**
         * Messaggio di errore per dati JSON non validi.
         */
        public const ERROR_INVALID_DATA = 'Dati JSON non validi.';

        /**
         * Messaggio di errore per parametri mancanti.
         */
        public const ERROR_MISSING_DATA = 'Parametri mancanti.';

        /**
         * Messaggio di errore per credenziali API non valide.
         */
        public const ERROR_API_CRED = 'Credenziali API non valide.';

        /**
         * Messaggio di errore per permesso negato.
         */
        public const PERMISSION_DENIED = 'Permesso negato per';

        /**
         * Valida e sanitizza una stringa JSON.
         *
         * @param string $jsonString La stringa JSON da validare e sanitizzare.
         *
         * @return array I dati JSON validati e sanitizzati.
         *
         * @throws \Exception Se il JSON non è valido o se la struttura non è corretta.
         */
        public static function validate(string $jsonString): array
        {
            // Decodifica il JSON
            $data = json_decode($jsonString, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception(self::ERROR_INVALID_JSON);
            }

            // Esegui ulteriori controlli sulla struttura e sul contenuto
            if (!self::validateStructure($data)) {
                throw new \Exception(self::ERROR_INVALID_STRUCTURE);
            }

            // Sanitizza i dati
            self::sanitizeData($data);

            return $data;
        }

        /**
         * Valida la struttura dei dati JSON.
         *
         * @param array $data I dati JSON da verificare.
         *
         * @return bool True se la struttura è valida, false altrimenti.
         */
        private static function validateStructure(array $data): bool
        {
            if (!isset($data['context']) || !isset($data['username']) || !isset($data['password']) || !isset($data['json'])) {
                return false;
            }
            // Ulteriori controlli sulla struttura possono essere aggiunti qui
            return true;
        }

        /**
         * Sanitizza i dati JSON.
         *
         * @param array $data I dati JSON da sanitizzare (passati per riferimento).
         *
         * @return void
         */
        private static function sanitizeData(array &$data): void
        {
            // Esempio di sanitizzazione
            array_walk_recursive($data, function (&$value) {
                if (is_string($value)) {
                    // Rimuovi script malevoli
                    $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                    // Rimuovi caratteri non validi (es: accenti strani)
                    $value = preg_replace('/[^\x20-\x7E]/', '', $value);
                }
            });
        }
    }
