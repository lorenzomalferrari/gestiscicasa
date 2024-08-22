<?php declare(strict_types=1);

    /**
     * Aggiunge o aggiorna il numero di visite sulla path interrogata.
     * Alcune path non vengono salvate nel conteggio
     *
     * @return void
     */
    function saveVisitedPath()
    {
        // Verifica se la sessione è avviata e l'ID dell'utente è impostato
        if (!isset($_SESSION[CONFIG['session']['keys']['IDUSER']]) || $_SESSION[CONFIG['session']['keys']['IDUSER']] <= 0) {
            return;
        }

        $userId = $_SESSION[CONFIG['session']['keys']['IDUSER']];
        $callerFile = $_SERVER['PHP_SELF'];

        // Verifica se il percorso è nell'elenco delle path escluse
        if (in_array($callerFile, PATH_ESCLUSE)) {
            return;
        }

        $select =
            "SELECT " . PathVisitatedTable::COUNT
            . " FROM " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::PATHV_ISITATED)
            . " WHERE " . PathVisitatedTable::PATH. " = :path and " . PathVisitatedTable::ID_USER. " = :idUser ";

        $params = array(
            ':path' => $callerFile,
            ':idUser' => $userId,
        );

        $row = DB->select($select, $params);

        if( $row ){
            $update =
                "UPDATE " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::PATHV_ISITATED)
                . " SET " . PathVisitatedTable::COUNT . " = ( ( $select ) + 1 )"
                . " WHERE " . PathVisitatedTable::PATH . " = :path and " . PathVisitatedTable::ID_USER . " = :idUser ";
            DB->update($update, $params);
        }else{
            // Se non esiste, inserisci una nuova riga
            $insert =
                "INSERT INTO " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabelle::PATHV_ISITATED)
                . " (" . PathVisitatedTable::PATH. " , " . PathVisitatedTable::COUNT . " , " . PathVisitatedTable::ID_USER. ")"
                ." VALUES (:path, 1, :idUser)";
            DB->insert($insert, $params);
        }
    }
