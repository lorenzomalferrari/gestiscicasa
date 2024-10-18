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

        // Verifica se la path è nell'elenco delle path escluse
        if (in_array($callerFile, PATH_ESCLUSE)) {
            return;
        }

        foreach (FOLDER_ESCLUSE as $excludedPath) {
            if (strpos($callerFile, $excludedPath) !== false) {
                return;
            }
        }

        // Esegui la query di selezione
        $select =
            "SELECT " . PathVisitatedTable::COUNT
            . " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PATHVISITATED)
            . " WHERE " . PathVisitatedTable::PATH . " = :path AND " . PathVisitatedTable::USER_ID . " = :idUser ";

        $params = array(
            ':path' => $callerFile,
            ':idUser' => $userId,
        );

        $row = DB->select($select, $params);

        if ($row) {
            // Se esiste, aggiorna il contatore
            $update =
                "UPDATE " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PATHVISITATED)
                . " SET " . PathVisitatedTable::COUNT . " = " . PathVisitatedTable::COUNT . " + 1"
                . " WHERE " . PathVisitatedTable::PATH . " = :path AND " . PathVisitatedTable::USER_ID . " = :idUser ";
            DB->update($update, $params);
        } else {
            // Se non esiste, inserisci una nuova riga
            $insert =
                "INSERT INTO " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PATHVISITATED)
                . " (" . PathVisitatedTable::PATH . " , " . PathVisitatedTable::COUNT . " , " . PathVisitatedTable::USER_ID . ")"
                . " VALUES (:path, 1, :idUser)";
            DB->insert($insert, $params);
        }
    }
