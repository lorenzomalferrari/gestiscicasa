<?php declare(strict_types=1);

	/**
	 * Crea le cartelle e i file di log specificati nella configurazione.
	 *
	 * La funzione accetta un array di configurazione che specifica il percorso di base, i nomi delle cartelle
	 * e le estensioni dei file di log. Per ogni elemento della configurazione, la funzione verifica se le
	 * cartelle esistono e, in caso contrario, le crea. Analogamente, crea i file di log se non esistono già.
	 *
	 * @param array $config Configurazione che include il percorso di base, i nomi delle cartelle e le estensioni dei file.
	 *
	 * @throws CustomException Genera un'eccezione personalizzata in caso di errore.
	 */
	function createDirectories(array $config): void
	{
		$basePath = $config['log']['path'];
		$extensions = $config['log']['extension'];
		$directories = [
			$basePath,
			//creo cartella file e le due sotto cartelle errors e gen
			"{$basePath}/{$config['log']['nome']['file']}/{$config['log']['sub_path'][0]}",
			"{$basePath}/{$config['log']['nome']['file']}/{$config['log']['sub_path'][1]}",

			//creo cartella database e le due sotto cartelle errors e gen
			"{$basePath}/{$config['log']['nome']['database']}/{$config['log']['sub_path'][0]}",
			"{$basePath}/{$config['log']['nome']['database']}/{$config['log']['sub_path'][1]}",

			//creo cartella id e le due sotto cartelle errors e gen
			"{$basePath}/{$config['log']['nome']['id']}/{$config['log']['sub_path'][0]}",
			"{$basePath}/{$config['log']['nome']['id']}/{$config['log']['sub_path'][1]}",

			//creo cartella api e le due sotto cartelle errors e gen
			"{$basePath}/{$config['log']['nome']['api']}/{$config['log']['sub_path'][0]}",
			"{$basePath}/{$config['log']['nome']['api']}/{$config['log']['sub_path'][1]}",

			//creo cartella performance e le due sotto cartelle errors e gen
			"{$basePath}/{$config['log']['nome']['performance']}/{$config['log']['sub_path'][0]}",
			"{$basePath}/{$config['log']['nome']['performance']}/{$config['log']['sub_path'][1]}",

			//creo cartella user, al momento solo questa, post login faccio la sotto carte con id e poi le sotto cartelle error e log
			"{$basePath}/{$config['log']['nome']['user']}",
		];

		$filesToCreate = [
			//creo i files per le cartelle
			"{$basePath}/{$config['log']['nome']['file']}/{$config['log']['sub_path'][0]}/error_log.{$extensions}",
			"{$basePath}/{$config['log']['nome']['file']}/{$config['log']['sub_path'][1]}/info_log.{$extensions}",

			"{$basePath}/{$config['log']['nome']['database']}/{$config['log']['sub_path'][0]}/error_log.{$extensions}",
			"{$basePath}/{$config['log']['nome']['database']}/{$config['log']['sub_path'][1]}/info_log.{$extensions}",

			"{$basePath}/{$config['log']['nome']['id']}/{$config['log']['sub_path'][0]}/error_log.{$extensions}",
			"{$basePath}/{$config['log']['nome']['id']}/{$config['log']['sub_path'][1]}/info_log.{$extensions}",

			"{$basePath}/{$config['log']['nome']['api']}/{$config['log']['sub_path'][0]}/error_log.{$extensions}",
			"{$basePath}/{$config['log']['nome']['api']}/{$config['log']['sub_path'][1]}/info_log.{$extensions}",

			"{$basePath}/{$config['log']['nome']['performance']}/{$config['log']['sub_path'][0]}/error_log.{$extensions}",
			"{$basePath}/{$config['log']['nome']['performance']}/{$config['log']['sub_path'][1]}/info_log.{$extensions}",
		];

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
