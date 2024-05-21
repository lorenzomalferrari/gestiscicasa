<?php
	//echo "Sono _functions.php";
	/**
	 * Funzione che restituisce la lista dei nomi dei file presenti all'interno della cartella fornita
	 */
	function readDirectoryFiles(string $folder): array|string {
		// Check if the folder exists
		if (!is_dir($folder)) {
			return "The specified folder does not exist.";
		}

		// Read the file names in the folder
		$files = array_diff(scandir($folder), ['.', '..']);

		// Return the array of file names
		return $files;
	}

	function checkUsernameAndId($username, $idUsername)
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
?>
