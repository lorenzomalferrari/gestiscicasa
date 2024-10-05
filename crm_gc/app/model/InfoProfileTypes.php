<?php declare(strict_types=1);

    /**
     * Class InfoProfileTypes
     *
     * Represents a record in the `InfoProfileTypes` table.
     */
    class InfoProfileTypes {
        /**
         * @var int|null The unique identifier for the record.
         */
        private $id;

        /**
         * @var int The plan associated with the profile type.
         */
        private $plan;

        /**
         * @var int The profile type identifier.
         */
        private $profileTypeId;

        /**
         * @var string The description of the profile type.
         */
        private $description;

        /**
         * @var string|null Additional notes about the profile type.
         */
        private $notes;

        /**
         * @var string|null The date and time when the record was created.
         */
        private $creationDate;

        /**
         * @var string|null The date and time when the record was last updated.
         */
        private $updateDate;

        /**
         * Constructor for the InfoProfileTypes class.
         *
         * @param int|null $id The unique identifier for the record.
         * @param int|null $plan The plan associated with the profile type.
         * @param int|null $profileTypeId The profile type identifier.
         * @param string $description The description of the profile type.
         * @param string|null $notes Additional notes about the profile type.
         * @param string|null $creationDate The date and time when the record was created.
         * @param string|null $updateDate The date and time when the record was last updated.
         */
        public function __construct($id = null, $plan = null, $profileTypeId = null, $description = '', $notes = '', $creationDate = null, $updateDate = null) {
            $this->id = $id;
            $this->plan = $plan;
            $this->profileTypeId = $profileTypeId;
            $this->description = $description;
            $this->notes = $notes;
            $this->creationDate = $creationDate;
            $this->updateDate = $updateDate;
        }

        /**
         * Gets the unique identifier for the record.
         *
         * @return int|null The unique identifier.
         */
        public function getId() {
            return $this->id;
        }

        /**
         * Sets the unique identifier for the record.
         *
         * @param int $id The unique identifier.
         */
        public function setId($id) {
            $this->id = $id;
        }

        /**
         * Gets the plan associated with the profile type.
         *
         * @return int The plan.
         */
        public function getPlan() {
            return $this->plan;
        }

        /**
         * Sets the plan associated with the profile type.
         *
         * @param int $plan The plan.
         */
        public function setPlan($plan) {
            $this->plan = $plan;
        }

        /**
         * Gets the profile type identifier.
         *
         * @return int The profile type identifier.
         */
        public function getProfileTypeId() {
            return $this->profileTypeId;
        }

        /**
         * Sets the profile type identifier.
         *
         * @param int $profileTypeId The profile type identifier.
         */
        public function setProfileTypeId($profileTypeId) {
            $this->profileTypeId = $profileTypeId;
        }

        /**
         * Gets the description of the profile type.
         *
         * @return string The description.
         */
        public function getDescription() {
            return $this->description;
        }

        /**
         * Sets the description of the profile type.
         *
         * @param string $description The description.
         */
        public function setDescription($description) {
            $this->description = $description;
        }

        /**
         * Gets additional notes about the profile type.
         *
         * @return string|null The notes.
         */
        public function getNotes() {
            return $this->notes;
        }

        /**
         * Sets additional notes about the profile type.
         *
         * @param string $notes The notes.
         */
        public function setNotes($notes) {
            $this->notes = $notes;
        }

        /**
         * Gets the date and time when the record was created.
         *
         * @return string|null The creation date and time.
         */
        public function getCreationDate() {
            return $this->creationDate;
        }

        /**
         * Sets the date and time when the record was created.
         *
         * @param string $creationDate The creation date and time.
         */
        public function setCreationDate($creationDate) {
            $this->creationDate = $creationDate;
        }

        /**
         * Gets the date and time when the record was last updated.
         *
         * @return string|null The update date and time.
         */
        public function getUpdateDate() {
            return $this->updateDate;
        }

        /**
         * Sets the date and time when the record was last updated.
         *
         * @param string $updateDate The update date and time.
         */
        public function setUpdateDate($updateDate) {
            $this->updateDate = $updateDate;
        }

        /**
         * Returns a string representation of the InfoProfileTypes object.
         *
         * @return string A string representation of the object.
         */
        public function __toString() {
            return "InfoProfileTypes { id: $this->id, plan: $this->plan, profileTypeId: $this->profileTypeId, description: '$this->description', notes: '$this->notes', creationDate: '$this->creationDate', updateDate: '$this->updateDate' }";
        }
    }
