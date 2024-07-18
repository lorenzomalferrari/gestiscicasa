<?php declare(strict_types=1);

    /**
     * Class FileManager
     *
     * Classe per la gestione della scrittura e lettura da file.
     */
    class FileManager
    {
        /**
         * Scrive dei dati in un file.
         *
         * @param string $filename Nome del file in cui scrivere i dati.
         * @param string $data Dati da scrivere nel file.
         * @param bool $append True se si desidera aggiungere i dati al file esistente, False per sovrascrivere il file.
         * @return bool True se la scrittura è avvenuta con successo, False altrimenti.
         */
        public static function writeToFile(string $filename, string $data, bool $append = false): bool
        {
            $flags = $append ? FILE_APPEND | LOCK_EX : LOCK_EX;
            return file_put_contents(ROOT . $filename, $data, $flags) !== false;
        }

        /**
         * Legge i dati da un file.
         *
         * @param string $filename Nome del file da cui leggere i dati.
         * @return string|false Contenuto del file letto, oppure False in caso di errore.
         */
        public static function readFromFile(string $filename)
        {
            if (file_exists(ROOT . $filename) && is_readable(ROOT . $filename)) {
                // Converte i caratteri di nuova linea in <br> per HTML
                return nl2br(file_get_contents(ROOT . $filename));
            }
            return false;
        }

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
        public static function createDirectories(array $directories, array $filesToCreate): void
        {
            try {
                foreach ($directories as $dir) {
                    if (!file_exists(ROOT . $dir) || !is_dir(ROOT . $dir)) {
                        if (!mkdir(ROOT . $dir, 0755, true)) {
                            print_r("-> ERRORE: Impossibile creare la cartella " . ROOT . $dir);
                        } else {
                            // Creo log
                            $fileLog = new FileLog("", 100, "", null, null, null);
                            $fileLog->writeToFile();
                        }
                    }
                }

                foreach ($filesToCreate as $file) {
                    if (!file_exists(ROOT . $file)) {
                        if (!touch(ROOT . $file)) {
                            print_r("-> ERRORE: Impossibile creare il file " . ROOT . $file);
                        } else {
                            // Creo log
                            $fileLog = new FileLog("", 102, "", null, null, null);
                            $fileLog->writeToFile();
                        }
                    }
                }
            } catch (Throwable $e) {
                throw new CustomException($e->getMessage(), $e->getCode(), $e);
            }
        }
    }
