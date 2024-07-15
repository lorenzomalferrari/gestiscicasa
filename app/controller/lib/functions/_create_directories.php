<?php declare(strict_types=1);

	/**
	 * Crea le cartelle e i file di log specificati nella configurazione.
	 *
	 * La funzione accetta due array di configurazione che specificano i percorsi di base, i nomi delle cartelle
	 * e le estensioni dei file di log. Per ogni elemento della configurazione, la funzione verifica se le
	 * cartelle esistono e, in caso contrario, le crea. Analogamente, crea i file di log se non esistono già.
	 *
	 * @param array $directories Configurazione che include il percorso di base, i nomi delle cartelle.
	 * @param array $filesToCreate Configurazione che include il percorso di base, i nomi dei file e le estensioni dei file.
	 *
	 * @throws CustomException Genera un'eccezione personalizzata in caso di errore.
	 */
	function createDirectories(array $directories, array $filesToCreate): void
	{
		try {
			foreach ($directories as $dir) {
				if (!file_exists($dir) || !is_dir($dir)) {
					if (!mkdir($dir, 0755, true)) {
						throw new CustomException("Impossibile creare la cartella $dir",CustomException::FILE_EXCEPTION);
					}
				}
			}

			foreach ($filesToCreate as $file) {
				if (!file_exists($file)) {
					if (!touch($file)) {
						throw new CustomException("Impossibile creare il file $file",CustomException::DIRECTORY_EXCEPTION);
					}
				}
			}
		} catch (Throwable $e) {
			throw new CustomException($e->getMessage(), $e->getCode(), $e);
		}
	}
