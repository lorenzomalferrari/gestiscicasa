<?php

    class Download
    {
        private $table;

        public function __construct($table)
        {
            $this->table = $table;
        }

        public function handle($jsonParams)
        {
            // Recupera i dati dalla tabella specificata
            $data = DB->select("SELECT * FROM {$this->table}");
            return ['status' => 'success', 'data' => $data];
        }
    }
