<?php declare(strict_types=1);

	/**
	 * Class ProfileType
	 *
	 * Represents a record in the ProfileTypes table.
	 */
	class ProfileType
	{
		private $id;
		private $code;
		private $description;
		private $notes;
		private $creationDate;
		private $updateDate;

		/**
		 * Constructor for the ProfileType class.
		 * Initializes an empty ProfileType object.
		 */
		public function __construct()
		{
			// Optionally initialize default values if needed
			$this->id = null;
			$this->code = '';
			$this->description = '';
			$this->notes = null;
			$this->creationDate = null;
			$this->updateDate = null;
		}

		/**
		 * Gets the ID of the profile type.
		 *
		 * @return int|null The ID of the profile type.
		 */
		public function getId()
		{
			return $this->id;
		}

		/**
		 * Sets the ID of the profile type.
		 *
		 * @param int $id The ID of the profile type.
		 * @return void
		 */
		public function setId($id)
		{
			$this->id = $id;
		}

		/**
		 * Gets the code of the profile type.
		 *
		 * @return string The code of the profile type.
		 */
		public function getCode()
		{
			return $this->code;
		}

		/**
		 * Sets the code of the profile type.
		 *
		 * @param string $code The code of the profile type.
		 * @return void
		 */
		public function setCode($code)
		{
			$this->code = $code;
		}

		/**
		 * Gets the description of the profile type.
		 *
		 * @return string The description of the profile type.
		 */
		public function getDescription()
		{
			return $this->description;
		}

		/**
		 * Sets the description of the profile type.
		 *
		 * @param string $description The description of the profile type.
		 * @return void
		 */
		public function setDescription($description)
		{
			$this->description = $description;
		}

		/**
		 * Gets the notes for the profile type.
		 *
		 * @return string|null The notes for the profile type, or null if not set.
		 */
		public function getNotes()
		{
			return $this->notes;
		}

		/**
		 * Sets the notes for the profile type.
		 *
		 * @param string|null $notes The notes for the profile type.
		 * @return void
		 */
		public function setNotes($notes)
		{
			$this->notes = $notes;
		}

		/**
		 * Gets the creation date of the profile type.
		 *
		 * @return string|null The creation date of the profile type, or null if not set.
		 */
		public function getCreationDate()
		{
			return $this->creationDate;
		}

		/**
		 * Sets the creation date of the profile type.
		 *
		 * @param string $creationDate The creation date of the profile type.
		 * @return void
		 */
		public function setCreationDate($creationDate)
		{
			$this->creationDate = $creationDate;
		}

		/**
		 * Gets the update date of the profile type.
		 *
		 * @return string|null The update date of the profile type, or null if not set.
		 */
		public function getUpdateDate()
		{
			return $this->updateDate;
		}

		/**
		 * Sets the update date of the profile type.
		 *
		 * @param string $updateDate The update date of the profile type.
		 * @return void
		 */
		public function setUpdateDate($updateDate)
		{
			$this->updateDate = $updateDate;
		}

		/**
		 * Converts the ProfileType object to a string representation.
		 *
		 * @return string A string representation of the ProfileType object.
		 */
		public function __toString()
		{
			return sprintf(
				"ProfileType [ID: %s, Code: %s, Description: %s, Notes: %s, Creation Date: %s, Update Date: %s]",
				$this->id,
				$this->code,
				$this->description,
				$this->notes,
				$this->creationDate,
				$this->updateDate
			);
		}
	}
