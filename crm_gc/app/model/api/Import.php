<?php

    class Import
    {
        private $table;

        public function __construct($table)
        {
            $this->table = $table;
        }

        public function handle($jsonParams)
        {
            // Implementa la logica per l'importazione dei dati
            if (isset($jsonParams[$this->table])) {
                foreach ($jsonParams[$this->table] as $row) {
                    // Prepara l'inserimento dinamicamente in base alla tabella
                    //$columns = implode(", ", array_keys($row));
                    //$placeholders = implode(", ", array_fill(0, count($row), "?"));
                    //$stmt = $this->pdo->prepare("INSERT INTO {$this->table} ($columns) VALUES ($placeholders)");
                    //$stmt->execute(array_values($row));
                }
            }

            return ['status' => 'success', 'message' => 'Dati importati con successo.'];
        }
    }
