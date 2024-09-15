<?php declare(strict_types=1);

	/**
	 * Classe LmgcRoomType
	 *
	 * Rappresenta un tipo di stanza nella tabella lmgc_RoomTypes.
	 *
	 * @package YourPackageName
	 */
	class RoomTypes
	{
		/**
		 * @var int L'identificatore unico del tipo di stanza.
		 */
		private $id;

		/**
		 * @var string Il codice del tipo di stanza, esattamente due caratteri.
		 */
		private $codice;

		/**
		 * @var string Il nome del tipo di stanza.
		 */
		private $nome;

		/**
		 * @var string|null Il codice colore esadecimale del tipo di stanza, es. #FFFFFF.
		 */
		private $colore;

		/**
		 * @var string|null Note relative al tipo di stanza.
		 */
		private $note;

		/**
		 * @var string La data di creazione del tipo di stanza.
		 */
		private $createDate;

		/**
		 * @var string La data dell'ultimo aggiornamento del tipo di stanza.
		 */
		private $updateDate;

		/**
		 * Ottiene l'ID del tipo di stanza.
		 *
		 * @return int L'ID del tipo di stanza.
		 */
		public function getId(): int
		{
			return $this->id;
		}

		/**
		 * Imposta l'ID del tipo di stanza.
		 *
		 * @param int $id L'ID del tipo di stanza.
		 * @return void
		 */
		public function setId(int $id): void
		{
			$this->id = $id;
		}

		/**
		 * Ottiene il codice del tipo di stanza.
		 *
		 * @return string Il codice del tipo di stanza.
		 */
		public function getCodice(): string
		{
			return $this->codice;
		}

		/**
		 * Imposta il codice del tipo di stanza.
		 *
		 * @param string $codice Il codice del tipo di stanza, esattamente due caratteri.
		 * @return void
		 * @throws InvalidArgumentException Se $codice non è esattamente di due caratteri.
		 */
		public function setCodice(string $codice): void
		{
			if (strlen($codice) !== 2) {
				throw new InvalidArgumentException("Il campo 'codice' deve essere esattamente di due caratteri.");
			}
			$this->codice = $codice;
		}

		/**
		 * Ottiene il nome del tipo di stanza.
		 *
		 * @return string Il nome del tipo di stanza.
		 */
		public function getNome(): string
		{
			return $this->nome;
		}

		/**
		 * Imposta il nome del tipo di stanza.
		 *
		 * @param string $nome Il nome del tipo di stanza.
		 * @return void
		 */
		public function setNome(string $nome): void
		{
			$this->nome = $nome;
		}

		/**
		 * Ottiene il colore del tipo di stanza.
		 *
		 * @return string|null Il codice colore esadecimale del tipo di stanza.
		 */
		public function getColore(): ?string
		{
			return $this->colore;
		}

		/**
		 * Imposta il colore del tipo di stanza.
		 *
		 * @param string|null $colore Il codice colore esadecimale, es. #FFFFFF.
		 * @return void
		 * @throws InvalidArgumentException Se $colore non rispetta il formato esadecimale.
		 */
		public function setColore(?string $colore): void
		{
			if ($colore !== null && !preg_match('/^#[0-9A-Fa-f]{6}$/', $colore)) {
				throw new InvalidArgumentException("Il campo 'colore' deve essere un codice colore esadecimale valido che inizia con '#'.");
			}
			$this->colore = $colore;
		}

		/**
		 * Ottiene le note relative al tipo di stanza.
		 *
		 * @return string|null Le note relative al tipo di stanza.
		 */
		public function getNote(): ?string
		{
			return $this->note;
		}

		/**
		 * Imposta le note relative al tipo di stanza.
		 *
		 * @param string|null $note Le note relative al tipo di stanza.
		 * @return void
		 */
		public function setNote(?string $note): void
		{
			$this->note = $note;
		}

		/**
		 * Ottiene la data di creazione del tipo di stanza.
		 *
		 * @return string La data di creazione.
		 */
		public function getCreateDate(): string
		{
			return $this->createDate;
		}

		/**
		 * Imposta la data di creazione del tipo di stanza.
		 *
		 * @param string $createDate La data di creazione.
		 * @return void
		 */
		public function setCreateDate(string $createDate): void
		{
			$this->createDate = $createDate;
		}

		/**
		 * Ottiene la data dell'ultimo aggiornamento del tipo di stanza.
		 *
		 * @return string La data dell'ultimo aggiornamento.
		 */
		public function getUpdateDate(): string
		{
			return $this->updateDate;
		}

		/**
		 * Imposta la data dell'ultimo aggiornamento del tipo di stanza.
		 *
		 * @param string $updateDate La data dell'ultimo aggiornamento.
		 * @return void
		 */
		public function setUpdateDate(string $updateDate): void
		{
			$this->updateDate = $updateDate;
		}

		/**
		 * Restituisce una rappresentazione in stringa del tipo di stanza.
		 *
		 * @return string La rappresentazione in stringa del tipo di stanza.
		 */
		public function __toString(): string
		{
			return sprintf(
				"LmgcRoomType [id=%d, codice=%s, nome=%s, colore=%s, note=%s, createDate=%s, updateDate=%s]",
				$this->id,
				$this->codice,
				$this->nome,
				$this->colore,
				$this->note,
				$this->createDate,
				$this->updateDate
			);
		}
	}
