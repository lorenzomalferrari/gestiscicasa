<?php declare(strict_types=1);

    class CrudTypes {
        private int $id;
        private string $nome;
        private string $azione;
        private float $valore;
        private string $dataCreazione;
        private string $dataAggiornamento;
        private string $note;

        public function __construct(
            int $id,
            string $nome,
            string $azione,
            float $valore,
            string $dataCreazione,
            string $dataAggiornamento,
            string $note
        ) {
            $this->id = $id;
            $this->nome = $nome;
            $this->azione = $azione;
            $this->valore = $valore;
            $this->dataCreazione = $dataCreazione;
            $this->dataAggiornamento = $dataAggiornamento;
            $this->note = $note;
        }

        public function getId(): int
        {
            return $this->id;
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function getAzione(): string
        {
            return $this->azione;
        }

        public function getValore(): ?float
        {
            return $this->valore;
        }

        public function getDataCreazione(): string
        {
            return $this->dataCreazione;
        }

        public function getDataAggiornamento(): string
        {
            return $this->dataAggiornamento;
        }

        public function getNote(): ?string
        {
            return $this->note;
        }

    }

?>
