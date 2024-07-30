<?php declare(strict_types=1);

    class JSonValidator
    {
        // Costanti per messaggi di errore
        const ERROR_INVALID_JSON = 'JSON non valido.';
        const ERROR_INVALID_STRUCTURE = 'Struttura JSON non valida.';
        const ERROR_INVALID_DATA = 'Dati JSON non validi.';

        // Funzione per validare e sanitizzare il JSON
        public static function validate($jsonString)
        {
            // Decodifica il JSON
            $data = json_decode($jsonString, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception(self::ERROR_INVALID_JSON);
            }

            // Esegui ulteriori controlli sulla struttura e sul contenuto
            if (!self::validateStructure($data)) {
                throw new Exception(self::ERROR_INVALID_STRUCTURE);
            }

            // Sanitizza i dati
            self::sanitizeData($data);

            return $data;
        }

        // Funzione per validare la struttura del JSON
        private static function validateStructure($data)
        {
            if (!is_array($data) || !isset($data['context']) || !isset($data['username']) || !isset($data['password']) || !isset($data['json'])) {
                return false;
            }
            // Ulteriori controlli sulla struttura possono essere aggiunti qui
            return true;
        }

        // Funzione per sanitizzare i dati
        private static function sanitizeData(&$data)
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
