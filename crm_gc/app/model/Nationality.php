<?php declare(strict_types=1);

    /**
     * Class Nationality
     *
     * Rappresenta una riga della tabella `lm_Nationalities`. Contiene metodi per ottenere e impostare i valori delle
     * proprietà e per visualizzare l'oggetto come stringa.
     */
    class Nationality
    {
        private int $id;
        private string $name;
        private string $nameItalian;
        private string $nameFrench;
        private string $nameSpanish;
        private string $nameGerman;
        private string $namePortuguese;
        private ?string $note;
        private \DateTime $creationDate;
        private \DateTime $updateDate;

        /**
         * Costruttore della classe Nationality.
         *
         * @param int $id ID della nazionalità
         * @param string $name Nome della nazionalità
         * @param string $nameItalian Nome in italiano
         * @param string $nameFrench Nome in francese
         * @param string $nameSpanish Nome in spagnolo
         * @param string $nameGerman Nome in tedesco
         * @param string $namePortuguese Nome in portoghese
         * @param ?string $note Nota aggiuntiva
         * @param \DateTime $creationDate Data di creazione
         * @param \DateTime $updateDate Data di aggiornamento
         */
        public function __construct(
            int $id,
            string $name,
            string $nameItalian,
            string $nameFrench,
            string $nameSpanish,
            string $nameGerman,
            string $namePortuguese,
            ?string $note,
            \DateTime $creationDate,
            \DateTime $updateDate
        ) {
            $this->id = $id;
            $this->name = $name;
            $this->nameItalian = $nameItalian;
            $this->nameFrench = $nameFrench;
            $this->nameSpanish = $nameSpanish;
            $this->nameGerman = $nameGerman;
            $this->namePortuguese = $namePortuguese;
            $this->note = $note;
            $this->creationDate = $creationDate;
            $this->updateDate = $updateDate;
        }

        // Getter e Setter per ogni proprietà

        public function getId(): int
        {
            return $this->id;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }

        public function getNameItalian(): string
        {
            return $this->nameItalian;
        }

        public function setNameItalian(string $nameItalian): void
        {
            $this->nameItalian = $nameItalian;
        }

        public function getNameFrench(): string
        {
            return $this->nameFrench;
        }

        public function setNameFrench(string $nameFrench): void
        {
            $this->nameFrench = $nameFrench;
        }

        public function getNameSpanish(): string
        {
            return $this->nameSpanish;
        }

        public function setNameSpanish(string $nameSpanish): void
        {
            $this->nameSpanish = $nameSpanish;
        }

        public function getNameGerman(): string
        {
            return $this->nameGerman;
        }

        public function setNameGerman(string $nameGerman): void
        {
            $this->nameGerman = $nameGerman;
        }

        public function getNamePortuguese(): string
        {
            return $this->namePortuguese;
        }

        public function setNamePortuguese(string $namePortuguese): void
        {
            $this->namePortuguese = $namePortuguese;
        }

        public function getNote(): ?string
        {
            return $this->note;
        }

        public function setNote(?string $note): void
        {
            $this->note = $note;
        }

        public function getCreationDate(): \DateTime
        {
            return $this->creationDate;
        }

        public function setCreationDate(\DateTime $creationDate): void
        {
            $this->creationDate = $creationDate;
        }

        public function getUpdateDate(): \DateTime
        {
            return $this->updateDate;
        }

        public function setUpdateDate(\DateTime $updateDate): void
        {
            $this->updateDate = $updateDate;
        }

        /**
         * Restituisce una rappresentazione in stringa dell'oggetto Nationality.
         *
         * @return string La rappresentazione in stringa dell'oggetto Nationality.
         */
        public function __toString(): string
        {
            return sprintf(
                'Nationality[id=%d, name=%s, nameItalian=%s, nameFrench=%s, nameSpanish=%s, nameGerman=%s, namePortuguese=%s, note=%s, creationDate=%s, updateDate=%s]',
                $this->id,
                $this->name,
                $this->nameItalian,
                $this->nameFrench,
                $this->nameSpanish,
                $this->nameGerman,
                $this->namePortuguese,
                $this->note ?? 'null',
                $this->creationDate->format('Y-m-d H:i:s'),
                $this->updateDate->format('Y-m-d H:i:s')
            );
        }
    }
