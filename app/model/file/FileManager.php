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
        public static function writeToFile($filename, $data, $append = false)
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
        public static function readFromFile($filename)
        {
            if (file_exists(ROOT . $filename) && is_readable(ROOT . $filename)) {
                //return file_get_contents($filename);
                // Converte i caratteri di nuova linea in <br> per HTML
                return nl2br( file_get_contents($filename) );
            }
            return false;
        }
    }
