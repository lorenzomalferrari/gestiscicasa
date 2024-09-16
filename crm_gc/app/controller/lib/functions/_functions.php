<?php declare(strict_types=1);

	/**
	 * Funzione che restituisce la lista dei nomi dei file presenti all'interno della cartella fornita
	 */
	function readDirectoryFiles(string $folder): array|string
	{
		// Check if the folder exists
		if (!is_dir($folder)) {
			return "The specified folder does not exist.";
		}

		// Read the file names in the folder
		$files = array_diff(scandir($folder), ['.', '..']);

		// Return the array of file names
		return $files;
	}

	function getToPost(){
		if (isset($_GET) && is_array($_GET)) {
			$_POST = unisciArray($_POST, $_GET);
		}
	}

	/**
	 *
	 */
	function validateUsernameAndId($username, $idUsername)
	{
		// Controlla se entrambi i parametri sono stati compilati
		if (!empty($username) && !empty($idUsername)) {
			return true; // Entrambi i parametri sono compilati
		} else {
			return false; // Almeno uno dei parametri è vuoto
		}
	}

	/**
	 * Funzione che unisce array senza sovrascrivere
	 * @param Il primo parametro è l'array di destinazione, il secondo è l'array che si vuole inglobare
	 */
	function unisciArray($array_destinazione, $array_origine)
	{
		// Itera attraverso ogni elemento dell'array origine
		foreach ($array_origine as $chiave => $valore) {
			// Verifica se la chiave esiste già nell'array destinazione
			if (!array_key_exists($chiave, $array_destinazione)) {
				// Se la chiave non esiste nell'array destinazione, copia l'elemento dall'array origine
				$array_destinazione[$chiave] = $valore;
			}
		}
		// Restituisci l'array destinazione aggiornato
		return $array_destinazione;
	}

	/**
	 *
	 */
	function checkStringLength($string)
	{
		if (strlen($string) > 0) {
			echo "Errore: la stringa ha una lunghezza maggiore di 0.";
			return false;
		} else {
			echo "La stringa è vuota.";
			return true;
		}
	}

	/**
	 * Verifica se un array contiene almeno una delle chiavi specificate.
	 *
	 * @param array $array L'array da verificare.
	 * @param array $keys Le chiavi da cercare nell'array.
	 * @return bool True se almeno una chiave esiste nell'array, false altrimenti.
	 */
	function array_has_any_key(array $array, array $keys): bool
	{
		$flag = true;
		foreach ($keys as $key) {
			if ( array_key_exists($key, $array) == false) {
				$flag = false;
			}
		}
		return $flag;
	}

	/**
	 * Controlla se un array contiene solo valori non nulli e non vuoti.
	 *
	 * Questa funzione scorre tutte le coppie chiave-valore di un array
	 * e verifica se ci sono valori nulli o vuoti. Se almeno una chiave
	 * ha un valore nullo o vuoto, la funzione restituisce false.
	 * Altrimenti, restituisce true.
	 *
	 * @param array $arr L'array da controllare.
	 * @return bool Restituisce true se tutti i valori non sono nulli e non sono vuoti, false altrimenti.
	 */
	function checkArrayValues(array $arr): bool
	{
		foreach ($arr as $key => $value) {
			if (is_null($value) || $value === '') {
				return false;
			}
		}
		return true;
	}

	/**
	 * Verifica se il valore non è nullo o una stringa vuota.
	 *
	 * @param mixed $value Il valore da verificare.
	 * @return bool True se il valore non è nullo o una stringa vuota, false altrimenti.
	 */
	function isNotNullOrEmpty($value): bool
	{
		return $value !== null && $value !== '';
	}

	/**
	 * Confronta due timestamp e determina se la differenza è inferiore o uguale a tot minuti.
	 *
	 * @param int $range Range espresso in minuti.
	 * @param int $timestamp1 Il primo timestamp.
	 * @param int $timestamp2 Il secondo timestamp.
	 * @return bool True se la differenza è inferiore o uguale a tot minuti, altrimenti false.
	 */
	function confrontaTimestamp($range, $timestamp1, $timestamp2): bool
	{
		// Calcola la differenza in secondi tra i due timestamp
		$differenza = abs($timestamp1 - $timestamp2);

		// Converti minuti in secondi
		$range_in_secondi = $range * 60; // X minuti * 60 secondi

		// Confronta la differenza con X minuti in secondi
		if ($differenza <= $range_in_secondi) {
			// La differenza è inferiore o uguale a X minuti
			return true;
		} else {
			// La differenza è superiore a X minuti
			return false;
		}
	}

	/**
	 * Verifica se l'applicazione sta girando su un ambiente locale e restituisce la chiave appropriata.
	 *
	 * Questa funzione controlla l'host corrente confrontandolo con una lista
	 * di host considerati come locali (localhost, 127.0.0.1, ::1).
	 *
	 * @return string Restituisce
	 * 			- "test" se l'applicazione sta girando in locale;
	 * 			- "produzione" altrimenti;
	 */
	function getEnvironmentKey(): string
	{
		$localHosts = ['localhost', '127.0.0.1', '::1'];
		return in_array($_SERVER['HTTP_HOST'], $localHosts) ? "test" : "produzione";
	}

	/**
	 * Data la path viene recuperato il nome della voce da usare nel menù
	 *
	 * @param string $path
	 * @return string|null Percorso che ha un riscontro oppure niente
	 */
	function getMenuNameByPath($path)
	{
		foreach (MENU_PATHS as $key => $value) {
			if ($value === $path) {
				return $key;
			}
		}
		return null; // Path non trovata
	}

	function redirectPath($path){
		header("Location: " . PATH . $path);
		exit();
	}

	/**
	 * Concatena gli elementi di un array, separandoli con una virgola.
	 *
	 * @param array $items L'array di elementi da concatenare.
	 * @return string La stringa risultante dalla concatenazione.
	 */
	function concatenateWithComma(array $items): string
	{
		// Concatena gli elementi dell'array con una virgola
		return implode(', ', $items);
	}

	/**
	 * Converte il nome di una tabella in un percorso stringa.
	 *
	 * Questa funzione riceve il nome di una tabella, lo converte in minuscolo, e lo formatta
	 * in un percorso che sostituisce gli underscore con le barre e aggiunge "/types/" alla fine
	 * se il nome della tabella contiene "Types" o "Type". La parte prima di "Types" viene anche
	 * trattata per rimuovere eventuali underscore e formattare correttamente il percorso.
	 *
	 * @param string $tableName Il nome della tabella da convertire.
	 * @return string Il percorso formattato.
	 */
	function convertTableNameToPath(string $tableName): string
	{
		// Converti il nome della tabella in minuscolo
		$lowerTableName = strtolower($tableName);

		// Dividi il nome della tabella in base alla parola "types"
		$parts = preg_split('/types/i', $lowerTableName);

		// Rimuovi eventuali underscore e aggiungi una barra finale
		$path = str_replace('_', '/', trim($parts[0], '_')) . '/types/';

		// Restituisci il risultato
		return $path;
	}

	/**
	 * Normalize a given URL by applying several transformations:
	 * - Trims leading and trailing spaces.
	 * - Converts the URL to lowercase.
	 * - Removes single quotes (').
	 * - Replaces multiple consecutive slashes (//) with a single slash (/).
	 * - Removes a trailing slash if the URL is not just "/".
	 * - Removes any remaining spaces within the URL.
	 * - Ensures the protocol (http/https) appears only once.
	 *
	 * @param string $url The URL to be normalized.
	 * @return string The normalized URL.
	 */
	function normalizeUrl(string $url): string
	{
		// Rimuovi gli spazi all'inizio e alla fine dell'URL
		$url = trim($url);
		// Converti l'URL in minuscolo
		$url = strtolower($url);
		// Rimuovi eventuali apici singoli
		$url = str_replace("'", '', $url);
		// Sostituisci più di una barra consecutiva con una singola barra
		$url = preg_replace('#/+#', '/', $url);
		// Rimuovi barra finale (se non è solo "/")
		if ($url !== '/') {
			$url = rtrim($url, '/');
		}

		// Controllo ulteriore: Rimuovi eventuali spazi rimanenti
		$url = str_replace(' ', '', $url);
		// Controllo ulteriore: Rimuovi eventuali "http://" o "https://" superflui
		$url = preg_replace('#^(https?://)+#', 'http://', $url);

		return $url;
	}

	/**
	 * Convert a table name into a key by separating words with underscores
	 * and converting the entire string to lowercase. Specifically, if the
	 * table name contains 'Type' or 'Types', these will be separated from
	 * the preceding word with an underscore.
	 *
	 * @param string $tableName The name of the table to be converted into a key.
	 * @return string The formatted key.
	 */
	function convertTableNameToKey(string $tableName): string
	{
		// Aggiungi un underscore prima di 'Type' o 'Types'
		if (strpos($tableName, 'Type') !== false) {
			// Sostituisci 'Type' o 'Types' con '_type' o '_types'
			$tableName = str_replace(['Type', 'Types'], ['_type', '_types'], $tableName);
		}

		// Converti camelCase o PascalCase in snake_case
		$tableName = preg_replace('/(?<!^)[A-Z]/', '_$0', $tableName);
		// Converti il nome della tabella in minuscolo
		$tableName = strtolower($tableName);

		return $tableName;
	}
?>
