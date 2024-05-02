<?php
	echo "Sono _functions.php";
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
?>
