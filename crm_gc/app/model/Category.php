<?php declare(strict_types=1);

	/**
	 * Class Category
	 *
	 * This class represents a record from the lmgc_Categories table.
	 */
	class Category
	{
		/**
		 * @var int The ID of the category (primary key).
		 */
		private int $id;

		/**
		 * @var int The ID of the category type.
		 */
		private int $categoryTypeId;

		/**
		 * @var string|null The unique code for the category (can be null).
		 */
		private ?string $code;

		/**
		 * @var string The name of the category.
		 */
		private string $name;

		/**
		 * @var string|null Additional notes about the category.
		 */
		private ?string $note;

		/**
		 * @var DateTime The creation date of the category.
		 */
		private DateTime $createDate;

		/**
		 * @var DateTime The last update date of the category.
		 */
		private DateTime $updateDate;

		/**
		 * Category constructor.
		 *
		 * @param int $id
		 * @param int $categoryTypeId
		 * @param string|null $code
		 * @param string $name
		 * @param string|null $note
		 * @param DateTime|null $createDate
		 * @param DateTime|null $updateDate
		 */
		public function __construct(
			int $id = -1,
			int $categoryTypeId = 0,
			?string $code = null,
			string $name = 'Unnamed Category',
			?string $note = null,
			?DateTime $createDate = null,
			?DateTime $updateDate = null
		) {
			$this->id = $id;
			$this->categoryTypeId = $categoryTypeId;
			$this->code = $code;
			$this->name = $name;
			$this->note = $note;
			$this->createDate = $createDate ?? new DateTime();
			$this->updateDate = $updateDate ?? new DateTime();
		}

		// Getters and setters ...

		/**
		 * Return the string representation of the category.
		 *
		 * @return string
		 */
		public function __toString(): string
		{
			return sprintf(
				"Category(ID: %d, CategoryTypeID: %d, Code: %s, Name: %s, Note: %s, Create Date: %s, Update Date: %s)",
				$this->id,
				$this->categoryTypeId,
				$this->code ?? 'null',
				$this->name,
				$this->note ?? 'null',
				$this->createDate->format('Y-m-d H:i:s'),
				$this->updateDate->format('Y-m-d H:i:s')
			);
		}
	}
