<?php declare(strict_types=1);

	/**
	 * Class CategoryType
	 *
	 * This class represents a record from the lmgc_CategoryTypes table.
	 */
	class CategoryTypes
	{
		/**
		 * @var int The ID of the category type (primary key).
		 */
		private int $id;

		/**
		 * @var string|null The unique code for the category type (can be null).
		 */
		private ?string $code;

		/**
		 * @var string The name of the category type.
		 */
		private string $name;

		/**
		 * @var string|null Additional notes about the category type.
		 */
		private ?string $note;

		/**
		 * @var DateTime The creation date of the category type.
		 */
		private DateTime $createDate;

		/**
		 * @var DateTime The last update date of the category type.
		 */
		private DateTime $updateDate;

		/**
		 * CategoryType constructor.
		 *
		 * @param int $id
		 * @param string|null $code
		 * @param string $name
		 * @param string|null $note
		 * @param DateTime|null $createDate
		 * @param DateTime|null $updateDate
		 */
		public function __construct(
			int $id = -1,
			?string $code = null,
			string $name = 'Unnamed Category Type',
			?string $note = null,
			?DateTime $createDate = null,
			?DateTime $updateDate = null
		) {
			$this->id = $id;
			$this->code = $code;
			$this->name = $name;
			$this->note = $note;
			$this->createDate = $createDate ?? new DateTime();
			$this->updateDate = $updateDate ?? new DateTime();
		}

		

		/**
		 * Return the string representation of the category type.
		 *
		 * @return string
		 */
		public function __toString(): string
		{
			return sprintf(
				"CategoryType(ID: %d, Code: %s, Name: %s, Note: %s, Create Date: %s, Update Date: %s)",
				$this->id,
				$this->code ?? 'null',
				$this->name,
				$this->note ?? 'null',
				$this->createDate->format('Y-m-d H:i:s'),
				$this->updateDate->format('Y-m-d H:i:s')
			);
		}
	}
