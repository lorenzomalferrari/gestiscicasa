<?php declare(strict_types=1);

class FormatterInputValidator
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

    // Funzione per generare HTML per i bottoni
    private static function generateButtonsHTML($buttons)
    {
        $buttonHTML = '
				<!-- Riga per i bottoni -->
				<div class="row mb-4">
					<div class="col-12 d-flex justify-content-start">';

        foreach ($buttons as $key => $value) {
            // Mappatura dei valori dei bottoni a classi CSS
            $buttonClasses = [
                'cancel' => 'btn btn-secondary mr-2',
                'save' => 'btn btn-primary mr-2',
                'edit' => 'btn btn-warning mr-2',
                'delete' => 'btn btn-danger'
            ];

            // Determina la classe CSS basata sulla chiave del bottone
            $buttonClass = isset($buttonClasses[$key]) ? $buttonClasses[$key] : 'btn btn-secondary';
            // Genera il codice HTML per il bottone
            $buttonHTML .= '<button type="button" class="' . $buttonClass . '">' . htmlspecialchars($value) . '</button>';
        }

        $buttonHTML .= '
					</div>
				</div>';

        return $buttonHTML;
    }

    /**
     *
     */
    public static function validateAndFormatFields($fields, $id = null)
    {
        //$btns_fields = [];
        $max_cols = 12;

        // Controlla che esista la chiave 'head'
        if (!isset($fields['head'])) {
            return "Errore: la chiave 'head' non esiste.";
        }

        // Controlla che esista la chiave 'body'
        if (!isset($fields['body'])) {
            return "Errore: la chiave 'body' non esiste.";
        }

        // Controlla se la chiave 'title' esiste in 'head', se no, la crea con valore vuoto
        if (!isset($fields['head']['title'])) {
            $fields['head']['title'] = '';
        }

        // Imposta il valore di 'title' basato sull'esistenza di $id
        if ($id) {
            $fields['head']['title'] = 'Modifica';
        } else {
            $fields['head']['title'] = 'Nuova';
        }

        // Genera l'HTML per i bottoni se la chiave 'buttons' esiste in 'body'
        /*if (isset($fields['body']['buttons']))
				$btns_fields['btns'] = self::generateButtonsHTML($fields['body']['buttons']);
			else
				$btns_fields['btns'] = "Errore: la chiave 'buttons' non esiste.";
			*/

        // Ora passiamo adnanalizzare le rows
        if (isset($fields['body']['rows'])) {
            //$btns_fields['rows'] = [];
            foreach ($fields['body']['rows'] as &$row) {
                $totalCols = 0;
                $numElements = count($row);

                // Calcola il numero totale di colonne assegnate
                foreach ($row as &$element) {
                    if (!isset($element['col'])) {
                        $element['col'] = 0;
                    }
                    $totalCols += $element['col'];
                }

                // Se la somma supera il valore massimo e atteso = 12
                if ($totalCols !== $max_cols) {
                    $remainingCols = $max_cols - $totalCols;
                    $defaultCol = $remainingCols > 0 ? intdiv($remainingCols, $numElements) : 1;
                    $remainingCols -= $defaultCol * $numElements;

                    foreach ($row as &$element) {
                        // Controllo col
                        if ($element['col'] == 0) {
                            $element['col'] = $defaultCol;
                            if ($remainingCols > 0) {
                                $element['col']++;
                                $remainingCols--;
                            }
                        }

                        // Controllo type
                        if (isset($element['type'])) {
                            $type_el = $element['type'];
                            // Controlla il tipo al primo livello
                            if (! in_array($type_el, array_keys(INPUT_TYPE['elements'])) && ! in_array($type_el, array_keys(INPUT_TYPE['elements']['input'])))
                                return "Errore: Tipo o sottotipo '$type_el' non definito in INPUT_TYPE['elements'].";
                        } else {
                            print_r("Chiave type non presente.");
                        }

                        // Controllo js_function
                        if (isset($element['js_functions'])) {
                            foreach ($element['js_functions'] as $event => &$js_function) {
                                $element['js_functions'][$event] = self::verify_semicolons($js_function);
                            }
                        }
                    }
                }

                $errors = self::validateFieldsInAttributes($row);
                print_r($errors);
                if (! empty($errors))
                    echo "Errors found:\n" . implode("\n", $errors);
            }
        } else {
            return "Errore: la chiave 'rows' non esiste.";
        }
        return $fields;
    }

    // Funzione per assicurarsi che le funzioni siano separate da un punto e virgola e che ci sia un punto e virgola finale
    private static function verify_semicolons($code)
    {
        // Rimuove spazi bianchi extra all'inizio e alla fine
        $code = trim($code);
        // Divide la stringa in base ai punti e virgola esistenti e spazi bianchi
        $functions = preg_split('/;\s*/', $code);
        // Rimuovere gli elementi vuoti dall'array
        $functions = array_filter($functions, fn($func) => !empty(trim($func)));
        // Riassembla la stringa con punti e virgola e uno spazio
        $code = implode('; ', $functions) . ';';
        return $code;
    }

    private static function validateFieldsInAttributes($row)
    {
        $errors = [];
        foreach ($row as $field) {
            if (is_array($field) && isset($field['type'], $field['attributes'])) {
                $type = $field['type'];
                if (isset(INPUT_TYPE['elements']['input'][$type])) {
                    $validAttributes = INPUT_TYPE['elements']['input'][$type]['attributes'];
                } elseif (isset(INPUT_TYPE['elements'][$type])) {
                    $validAttributes = INPUT_TYPE['elements'][$type]['attributes'];
                } else {
                    $errors[] = "Unknown input type: $type";
                    continue;
                }
                //$validAttributes = array_keys($validAttributes);
                $error = self::validateAttributes($type, $field['attributes'], $validAttributes);
                if (!empty($error))
                    $errors[] = $error;
            }
        }
        return $errors;
    }

    // Helper function to validate attributes
    private static function validateAttributes($type, $attributes, $validAttributes)
    {
        $invalidAttributes = [];
        foreach ($attributes as $key => $value) {
            if (!in_array($key, $validAttributes)) {
                $invalidAttributes[] = $key;
            }
        }

        if (!empty($invalidAttributes)) {
            return "Invalid attributes for type $type: " . implode(", ", $invalidAttributes);
        }

        return null;
    }

    public static function getInputFieldsModal($element): string
    {
        $modal = "";
        $class = "form-control";

        $type_el = $element['type'];
        $attributes = $element['attributes'];
        $custom = self::addAttributes($element['attributes']);
        // Controlla il tipo al primo livello
        if (in_array($type_el, array_keys(INPUT_TYPE['elements']))) {
            $modal = INPUT_TYPE['elements'][$type_el]['model'];
        } else {
            $modal = INPUT_TYPE['elements']['input'][$type_el]['model'];
        }

        $modal = self::filterAndUpdateHtmlAttributes($modal, $attributes);
        $modal = self::addAttributesToTag($modal, $custom);

        return $modal;
    }

    /**
     * Filtra e aggiorna gli attributi di un tag HTML basandosi su un array di attributi.
     *
     * @param string $element La stringa HTML da analizzare.
     * @param array $attributes L'array contenente le chiavi degli attributi da mantenere e i loro valori.
     * @return string La stringa HTML con solo gli attributi specificati e con i valori aggiornati.
     */
    private static function filterAndUpdateHtmlAttributes(string $element, array $attributes): string
    {
        // Usa una regex per trovare tutti gli attributi nel tag HTML
        $pattern = '/(\w+)\s*=\s*"[^"]*"/';
        // Trova tutte le corrispondenze
        preg_match_all($pattern, $element, $matches);
        // $matches[1] contiene i nomi degli attributi
        $existingAttributes = $matches[1];
        // Filtra l'array di attributi per mantenere solo quelli che devono essere aggiornati
        $filteredAttributes = [];

        foreach ($attributes as $key => $value) {
            if ($key === "type") {
                // Salta l'attributo 'type'
                continue;
            }
            if (in_array($key, $existingAttributes)) {
                // Se l'attributo esiste, aggiungilo con il nuovo valore
                $filteredAttributes[] = $key . '="' . $value . '"';
            }
        }

        // Costruisci una stringa di attributi filtrati
        $filteredAttributesString = implode(' ', $filteredAttributes);
        // Trova il tag di apertura
        $tagPattern = '/<(\w+)([^>]*)>/';
        // Rimuovi gli attributi esistenti nel tag
        $htmlWithoutAttributes = preg_replace($pattern, '', $element);
        // Aggiungi gli attributi aggiornati al tag
        $filteredHtml = preg_replace($tagPattern, '<$1 ' . $filteredAttributesString . '>', $htmlWithoutAttributes);
        // Rimuovi eventuali spazi extra tra gli attributi
        $filteredHtml = preg_replace('/\s+/', ' ', $filteredHtml);
        // Rimuove eventuali spazi in eccesso all'inizio e alla fine
        $filteredHtml = trim($filteredHtml);

        return $filteredHtml;
    }

    /**
     * Crea una stringa di attributi basata su un array specificato.
     * Se l'array contiene la chiave 'custom' con un array come valore, crea una stringa di attributi.
     *
     * @param array $attributes L'array contenente le chiavi e valori degli attributi.
     * @return string La stringa di attributi formattata.
     */
    private static function addAttributes(array $attributes): string
    {
        // Verifica se 'custom' è presente e se il suo valore è un array
        if (isset($attributes['custom']) && is_array($attributes['custom'])) {
            // Crea un array di attributi formattati
            $formattedAttributes = array_map(function ($key, $value) {
                return $key . '="' . $value . '"';
            }, array_keys($attributes['custom']), $attributes['custom']);

            // Combina gli attributi formattati in una stringa separata da spazi
            return implode(' ', $formattedAttributes);
        }

        // Se 'custom' non è presente o non è un array, ritorna una stringa vuota
        return '';
    }

    /**
     * Aggiunge una stringa di attributi a un tag HTML, rispettando la chiusura del tag.
     *
     * @param string $html La stringa HTML del tag.
     * @param string $attributes La stringa di attributi da aggiungere.
     * @return string La stringa HTML con gli attributi aggiunti.
     */
    private static function addAttributesToTag(string $html, string $attributes): string
    {
        // Trova la posizione del primo spazio dopo il nome del tag di apertura
        $position = strpos($html, ' ');

        // Se non ci sono spazi, il tag è chiuso direttamente, quindi non ci sono attributi esistenti
        if ($position === false) {
            $position = strpos($html, '>');
        }

        // Se il tag è un tag auto-chiudente o non ha spazi, si aggiungono gli attributi subito dopo il nome del tag
        if ($position === false) {
            return $html;
        }

        // Inserisci gli attributi prima della chiusura del tag
        $htmlWithAttributes = substr($html, 0, $position) . ' ' . $attributes . substr($html, $position);

        return $htmlWithAttributes;
    }
}
