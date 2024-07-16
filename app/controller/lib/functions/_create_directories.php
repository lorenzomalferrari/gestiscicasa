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
				//print_r("<br>" . ROOT . $dir);
				if (!file_exists(ROOT . $dir) || !is_dir(ROOT . $dir)) {
					if (!mkdir(ROOT . $dir, 0755, true)) {
						//throw new CustomException("Impossibile creare la cartella " . ROOT . $dir,CustomException::FILE_EXCEPTION);
						print_r("-> ERRORE: Impossibile creare la cartella");
					}else{
						//creo log
						$fileLog = new FileLog("",100,"",null,null,null);
						$fileLog->writeToFile();
					}
				}
			}

			foreach ($filesToCreate as $file) {
				//print_r("<br>" . ROOT . $file);
				if (!file_exists(ROOT . $file)) {
					if (!touch(ROOT . $file)) {
						//throw new CustomException("Impossibile creare il file $file",CustomException::DIRECTORY_EXCEPTION);
						print_r("-> ERRORE: Impossibile creare il file " . ROOT . $file);
					}else{
						//creo log
						$fileLog = new FileLog("",102,"",null,null,null);
						$fileLog->writeToFile();
					}
				}
			}
		} catch (Throwable $e) {
			throw new CustomException($e->getMessage(), $e->getCode(), $e);
		}
	}
