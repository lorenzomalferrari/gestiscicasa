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
	 * @return string Ritorna una stringa se tutte le cartelle e i file sono stati creati o già esistenti la stringa sarà vuota, altrimenti restituisce il messaggio.
	 */
	function createDirectories(array $config): string
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

		foreach ($directories as $dir) {
			if (!file_exists($dir) || !is_dir($dir)) {
				if (!mkdir($dir, 0755, true)) {
					return "Impossibile creare la cartella $dir\n";
				}
				//echo "Creata la cartella $dir\n";
			} else {
				//$msg_error = "La cartella $dir esiste già\n";
			}
		}

		foreach ($filesToCreate as $file) {
			if (!file_exists($file)) {
				if (!touch($file)) {
					return "Impossibile creare il file $file\n";
				}
				//echo "Creato il file $file\n";
			} else {
				//$msg_error = "Il file $file esiste già\n";
			}
		}

		//echo "Tutte le cartelle e i file sono stati controllati o creati correttamente.\n";
		return "";
	}
