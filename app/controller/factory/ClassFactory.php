<?php

declare(strict_types=1);

class ClassFactory
{
    /**
     * Crea un array con le istanze delle classi corrispondenti alla chiave fornita.
     *
     * @param string $classKey La chiave che identifica la classe da istanziare.
     * @return array Un array associativo con due chiavi: 'class' e 'table'.
     *               - 'class' contiene l'istanza della classe associata alla chiave.
     *               - 'table' contiene la classe associata alla chiave se presente, senza istanziarla.
     * @throws Exception Se la chiave fornita non corrisponde a nessuna classe mappata.
     */
    public static function create(string $classKey)
    {
        $maps = self::getClassMaps();
        $classMap = $maps['class'];
        $tableMap = $maps['table'];

        $result = [];

        // Controlla la chiave nella mappa delle classi
        if (isset($classMap[$classKey])) {
            $className = $classMap[$classKey];
            //echo "Trying to instantiate class: $className\n";  // Debugging output
            if (class_exists($className, true)) {
                $result['class'] = new $className();
            } else {
                throw new Exception("Classe non trovata nella mappa 'class': $className");
            }
        } else {
            $result['class'] = null; // No class found
        }

        // Controlla la chiave nella mappa delle tabelle
        if (isset($tableMap[$classKey])) {
            $className = $tableMap[$classKey];
            //echo "Table class found: $className\n";  // Debugging output
            // Non istanziare, solo aggiungere la classe come stringa
            $result['table'] = $className;
        } else {
            $result['table'] = null; // No table class found
        }

        // Se nessuna classe è stata trovata, solleva un'eccezione
        if (empty($result['class']) && empty($result['table'])) {
            throw new Exception("Classe non trovata: $classKey");
        }

        return $result;
    }

    private static function getClassMaps(): array
    {
        $directory = ROOT . 'app/model';
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

                // Debugging output
                //echo "Processing file: $filePath\n";

                // Recupera le classi dichiarate prima dell'inclusione
                $declaredClassesBefore = get_declared_classes();

                // Include il file per accertarsi che la classe sia dichiarata
                include_once $filePath;

                // Recupera le classi dichiarate dopo l'inclusione
                $declaredClassesAfter = get_declared_classes();
                $newClasses = array_diff($declaredClassesAfter, $declaredClassesBefore);

                if (!empty($newClasses)) {
                    foreach ($newClasses as $class) {
                        if (strpos($class, 'Table') === false) {
                            $classMap[$baseName] = $class;
                        }
                    }
                } else {
                    //echo "File $filePath does not contain any class definitions.\n";
                }
            }
        }
    }


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
