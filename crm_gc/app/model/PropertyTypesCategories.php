<?php
    /**
     * Class PropertyTypesCategories
     *
     * This class represents the entity of the table 'lmgc_PropertyTypesCategories'.
     */
    class PropertyTypesCategories
    {
        private int $id;
        private string $category;
        private ?string $notes;
        private string $createDate;
        private string $updateDate;

        /**
         * Constructor for PropertyTypesCategories.
         *
         * @param int $id
         * @param string $category
         * @param string|null $notes
         * @param string $createDate
         * @param string $updateDate
         */
        public function __construct(int $id, string $category, ?string $notes, string $createDate, string $updateDate)
        {
            $this->id = $id;
            $this->category = $category;
            $this->notes = $notes;
            $this->createDate = $createDate;
            $this->updateDate = $updateDate;
        }

        // Getter and setter methods
        public function getId(): int {
            return $this->id;
        }

        public function getCategory(): string {
            return $this->category;
        }
        public function getNotes(): ?string {
            return $this->notes; }
        public function getCreateDate(): string {
            return $this->createDate;
        }
        public function getUpdateDate(): string {
            return $this->updateDate;
        }

        public function setCategory(string $category): void {
            $this->category = $category;
        }

        public function setNotes(?string $notes): void {
            $this->notes = $notes;
        }
    }
