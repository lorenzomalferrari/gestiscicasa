<?php

    /**
     * Class PropertyTypes
     *
     * This class represents the entity of the table 'lmgc_PropertyTypes'.
     */
    class PropertyTypes
    {
        private int $id;
        private string $typeName;
        private int $categoryId;
        private ?string $notes;
        private string $createDate;
        private string $updateDate;

        /**
         * Constructor for PropertyTypes.
         *
         * @param int $id
         * @param string $typeName
         * @param int $categoryId
         * @param string|null $notes
         * @param string $createDate
         * @param string $updateDate
         */
        public function __construct(int $id, string $typeName, int $categoryId, ?string $notes, string $createDate, string $updateDate)
        {
            $this->id = $id;
            $this->typeName = $typeName;
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
        public function getTypeName(): string
        {
            return $this->typeName;
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

        public function setTypeName(string $typeName): void
        {
            $this->typeName = $typeName;
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
