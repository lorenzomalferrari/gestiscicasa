<?php

/**
 * Class UserActivity
 *
 * Questa classe estende UserLog e gestisce le azioni dell'utente, inclusi i logging degli errori
 * e l'interazione con la tabella UserActivity nel database.
 */
class UserActivity extends UserLog
{
    /**
     * Scrive il log delle azioni dell'utente, gestendo la registrazione degli errori e le interazioni con il database.
     *
     * @return bool True se il log è stato scritto con successo, False altrimenti.
     */
    public function writeUserLog()
    {
        // Scrive il log delle azioni dell'utente
        $dbLogWritten = parent::writeUserLog();

        // Verifica se l'errore è dovuto a una path sbagliata
        if ($this->customException === 'PathErrorException') {
            $this->logToUserActivityTable();
        }

        // Ritorna true se entrambi i log sono stati scritti con successo
        return $dbLogWritten;
    }

    /**
     * Registra l'azione dell'utente nella tabella UserActivity del database.
     */
    protected function logToUserActivityTable()
    {
        // Simulazione dell'azione nel database (es. inserimento, aggiornamento, eliminazione)
        $actionType = 'Delete Attempt'; // Tipo di azione eseguita nel database
        $relatedRecordId = 456; // ID del record relazionato che impedisce l'eliminazione

        // Simulazione di un errore generato dal database
        $dbError = "Cannot delete record due to existing relationships.";

        // Salvataggio dell'azione nella tabella UserActivity
        $this->saveToUserActivityTable($actionType, $relatedRecordId, $dbError);
    }

    /**
     * Salva l'azione dell'utente nella tabella UserActivity del database.
     *
     * @param string $actionType Tipo di azione eseguita nel database.
     * @param int $relatedRecordId ID del record relazionato.
     * @param string $dbError Errore generato dal database (opzionale).
     * @return bool True se l'azione è stata salvata con successo, False altrimenti.
     */
    protected function saveToUserActivityTable($actionType, $relatedRecordId, $dbError = '')
    {
        // Simulazione di inserimento nella tabella UserActivity del database
        $logEntry = sprintf(
            "[%s] User ID: %d, Action Type: %s, Related Record ID: %d, Database Error: %s\n",
            $this->timestamp,
            $this->userId,
            $actionType,
            $relatedRecordId,
            $dbError
        );

        // Scrivi il log nel database
        $dbLogWritten = $this->writeToDatabase($logEntry);

        return $dbLogWritten;
    }

    /**
     * Simula la scrittura nel database (sostituire con il codice reale per l'accesso al database).
     *
     * @param string $logEntry Dati da salvare nel database.
     * @return bool True se la scrittura nel database è avvenuta con successo, False altrimenti.
     */
    protected function writeToDatabase($logEntry)
    {
        // Simulazione di scrittura nel database
        // Esempio: $query = "INSERT INTO UserActivity (log_entry) VALUES ('$logEntry')";
        // Esegui la query e gestisci l'eventuale errore

        // Ritorna true se la scrittura nel database è avvenuta con successo
        return true;
    }
}
