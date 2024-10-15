<?php

    /**
     * Class PropertyTypes
     *
     * This class represents the entity of the table 'lm_PropertyTypes'.
     */
    class PropertyTypes
    {
        private int $id;
        private string $name;
        private int $categoryId;
        private ?string $notes;
        private string $createDate;
        private string $updateDate;

        /**
         * Constructor for PropertyTypes.
         *
         * @param int $id
         * @param string $name
         * @param int $categoryId
         * @param string|null $notes
         * @param string $createDate
         * @param string $updateDate
         */
        public function __construct(int $id, string $name, int $categoryId, ?string $notes, string $createDate, string $updateDate)
        {
            $this->id = $id;
            $this->name = $name;
            $this->categoryId = $categoryId;
            $this->notes = $notes;
            $this->createDate = $createDate;
            $this->updateDate = $updateDate;
        }

        // Getter and setter methods
        public function getId(): int
        {
            return $this->id;
        }
        public function getName(): string
        {
            return $this->name;
        }
        public function getCategoryId(): int
        {
            return $this->categoryId;
        }
        public function getNotes(): ?string
        {
            return $this->notes;
        }
        public function getCreateDate(): string
        {
            return $this->createDate;
        }
        public function getUpdateDate(): string
        {
            return $this->updateDate;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }
        public function setCategoryId(int $categoryId): void
        {
            $this->categoryId = $categoryId;
        }
        public function setNotes(?string $notes): void
        {
            $this->notes = $notes;
        }
    }
