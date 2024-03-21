<?php
    /**
     *
     */
    class Persona {
        // Variabili
        private string $nome;
        private string $cognome;
        private int $età;

        // Costanti
        public const ETÀ_MINIMA = 0;
        public const ETÀ_MASSIMA = 120;

        // Costruttore
        public function __construct(string $nome, string $cognome, int $età) {
            $this->setNome($nome);
            $this->setCognome($cognome);
            $this->setEtà($età);
        }

        // Getter e Setter per il nome
        public function getNome(): string {
            return $this->nome;
        }

        public function setNome(string $nome): void {
            $this->nome = $nome;
        }

        // Getter e Setter per il cognome
        public function getCognome(): string {
            return $this->cognome;
        }

        public function setCognome(string $cognome): void {
            $this->cognome = $cognome;
        }

        // Getter e Setter per l'età
        public function getEtà(): int {
            return $this->età;
        }

        public function setEtà(int $età): void {
            if ($età < self::ETÀ_MINIMA || $età > self::ETÀ_MASSIMA) {
                throw new InvalidArgumentException("L'età deve essere compresa tra " . self::ETÀ_MINIMA . " e " . self::ETÀ_MASSIMA);
            }
            $this->età = $età;
        }

        // Funzione toString per mostrare la classe
        public function __toString(): string {
            return "Nome: " . $this->nome . ", Cognome: " . $this->cognome . ", Età: " . $this->età;
        }
    }
?>