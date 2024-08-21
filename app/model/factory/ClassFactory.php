<?php declare(strict_types=1);

    class ClassFactory
    {
        /**
         * Crea un array con le istanze delle classi corrispondenti alla chiave fornita.
         *
         * @param string $classKey La chiave che identifica la classe da istanziare.
         * @return array Un array associativo con due chiavi: 'class' e 'table'.
         *               - 'class' contiene l'istanza della classe associata alla chiave.
         *               - 'table' contiene l'istanza della classe con suffisso 'Table' associata alla chiave.
         * @throws Exception Se la chiave fornita non corrisponde a nessuna classe mappata.
         */
        public static function create(string $classKey)
        {
            $maps = self::getClassMaps();
            $classMap = $maps['class'];
            $tableMap = $maps['table'];

            // Debugging output
            echo "ClassMap: ";
            print_r($classMap);
            echo "TableMap: ";
            print_r($tableMap);

            if (isset($classMap[$classKey])) {
                $className = $classMap[$classKey];
                echo "Trying to instantiate class: $className\n";  // Debugging output
                if (class_exists($className)) {
                    return new $className();
                } else {
                    throw new Exception("Classe non trovata: $className");
                }
            } elseif (isset($tableMap[$classKey])) {
                $className = $tableMap[$classKey];
                echo "Trying to instantiate class: $className\n";  // Debugging output
                if (class_exists($className)) {
                    return new $className();
                } else {
                    throw new Exception("Classe non trovata: $className");
                }
            } else {
                throw new Exception("Classe non trovata: $classKey");
            }
        }


        /**
         * Legge la cartella 'model' e costruisce due mappe:
         * 1. Una mappa tra i nomi dei file e le rispettive classi.
         * 2. Una mappa tra i nomi delle classi nel file 'Tables.php' e le rispettive classi con suffisso 'Table'.
         * @return array Un array associativo contenente due mappe:
         *               - 'class' con i nomi dei file e le rispettive classi.
         *               - 'table' con i nomi delle classi nel file 'Tables.php' e le rispettive classi con suffisso 'Table'.
         * @throws Exception Se la cartella 'model' non esiste, non può essere letta, o il file 'Tables.php' non è valido.
         */
        private static function getClassMaps(): array
        {
            $directory = ROOT. 'app/model';
            $tablesFile = ROOT . 'app/model/table/Tables.php';

            if (!is_dir($directory)) {
                throw new Exception("Directory 'model' non trovata: $directory");
            }

            $classMap = [];
            $tableMap = [];

            self::scanDirectory($directory, $classMap);
            self::populateTableMapFromFile($tablesFile, $tableMap);

            return [
                'class' => $classMap,
                'table' => $tableMap
            ];
        }

        /**
         * Scansiona una directory e le sue sotto-cartelle per costruire la mappa delle classi.
         *
         * @param string $directory Il percorso della directory da scansionare.
         * @param array &$classMap Mappa da riempire con i nomi dei file e le rispettive classi.
         */
        private static function scanDirectory(string $directory, array &$classMap): void
        {
            $files = scandir($directory);

            foreach ($files as $file) {
                $path = $directory . '/' . $file;
                if ($file === '.' || $file === '..') {
                    continue;
                }

                if (is_dir($path)) {
                    self::scanDirectory($path, $classMap);
                } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                    $baseName = pathinfo($file, PATHINFO_FILENAME);
                    $filePath = $path;

                    // Include the file to make sure the class is declared
                    include_once $filePath;

                    // Check if the class exists and add it to the map
                    if (class_exists($baseName)) {
                        $classMap[$baseName] = $baseName;
                    }
                }
            }
        }


        /**
         * Recupera il namespace dichiarato in un file PHP.
         *
         * @param string $file Il percorso del file PHP.
         * @return string|null Il namespace dichiarato, o null se non è presente.
         */
        private static function getNamespaceFromFile(string $file): ?string
        {
            $contents = file_get_contents($file);
            if (preg_match('/^namespace\s+(.+?);/m', $contents, $matches)) {
                return $matches[1];
            }
            return null; // Ritorna null se non c'è un namespace
        }


        /**
         * Popola la mappa delle classi con suffisso 'Table' utilizzando il file 'Tables.php'.
         *
         * @param string $filePath Il percorso del file 'Tables.php'.
         * @param array &$tableMap Mappa da riempire con i nomi delle classi e le rispettive classi con suffisso 'Table'.
         *
         * @throws Exception Se il file 'Tables.php' non esiste o non può essere letto.
         */
        private static function populateTableMapFromFile(string $filePath, array &$tableMap): void
        {
            if (!file_exists($filePath)) {
                throw new Exception("File 'Tables.php' non trovato: $filePath");
            }

            // Include il file 'Tables.php' per accedere alle dichiarazioni delle classi
            include_once $filePath;

            // Recupera le classi dichiarate nel file 'Tables.php'
            $classes = get_declared_classes();

            foreach ($classes as $class) {
                if (strpos($class, 'Table') !== false) {
                    $baseName = str_replace('Table', '', $class);
                    $tableMap[$baseName] = $class;
                }
            }
        }
    }
