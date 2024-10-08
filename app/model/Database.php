<?php declare(strict_types=1);

	/**
	 * Classe Database
	 * Una classe per gestire operazioni di database con PDO.
	 */
	class Database
	{
		private $host;
		private $username;
		private $password;
		private $database;
		private $conn;

		/**
		 * Costruttore della classe Database.
		 *
		 * @param string $host Host del database.
		 * @param string $username Username del database.
		 * @param string $password Password del database.
		 * @param string $database Nome del database.
		 */
		public function __construct($host, $username, $password, $database)
		{
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;

			try {
				$this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				throw new CustomException("Connessione al database fallita", CustomException::PDO_EXCEPTION, $e);
			}
		}

		/**
		 * Inizia una transazione.
		 * Utile per eseguire blocco di operazioni a DB, senza che gli stati cambino
		 *
		 * @return void
		 */
		public function beginTransaction(): void
		{
			$this->conn->beginTransaction();
		}

		/**
		 * Conferma una transazione.
		 *
		 * @return void
		 */
		public function commit(): void
		{
			$this->conn->commit();
		}

		/**
		 * Annulla una transazione.
		 * In caso di errori, non vengono applicate le operazioni
		 *
		 * @return void
		 */
		public function rollBack(): void
		{
			$this->conn->rollBack();
		}

		/**
		 * Esegue una query di selezione sul database e restituisce la prima riga come array associativo.
		 *
		 * @param string $query La query SQL da eseguire.
		 * @param array $params (Opzionale) Parametri da associare alla query.
		 * @return array Restituisce un array associativo rappresentante la riga selezionata, o un array vuoto in caso di errore.
		 */
		public function select($query, $params = array()): array
		{
			try {
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);

				// Log dell'interrogazione al database
				$params_log = [
					'message' => 'Interrogazione al database: QUERY -> ' . $query . ' - PARAMETRI -> ' . implode(", ", $params),
					'action' => CONFIG['db']['CrudTypes']['SELECT'],
					'beforeState' => null,
					'afterState' => null,
					'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
				];

				$this->executeLog($params_log);
				return $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
			} catch (PDOException $e) {
				throw new CustomException("Errore durante l'esecuzione della query select", CustomException::PDO_EXCEPTION, $e);
			}
		}

		/**
		 * Esegue una query di selezione sul database e restituisce tutte le righe trovate come un array di array associativi.
		 *
		 * @param string $query La query SQL da eseguire.
		 * @param array $params (Opzionale) Parametri da associare alla query.
		 * @return array Restituisce un array contenente tutte le righe selezionate, o un array vuoto in caso di errore.
		 */
		public function selectAll($query, $params = array()): array
		{
			try {
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);

				// Log dell'interrogazione al database
				$params_log = [
					'message' => 'Interrogazione al database: QUERY -> ' . $query . ' - PARAMETRI -> ' . implode(", ", $params),
					'action' => CONFIG['db']['CrudTypes']['SELECT'],
					'beforeState' => null,
					'afterState' => null,
					'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
				];

				$this->executeLog($params_log);
				return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
			} catch (PDOException $e) {
				throw new CustomException("Errore durante l'esecuzione della query selectAll", CustomException::PDO_EXCEPTION, $e);
			}
		}

		/**
		 * Esegue una query di aggiornamento sul database.
		 *
		 * @param string $query La query SQL da eseguire.
		 * @param array $params (Opzionale) Parametri da associare alla query.
		 * @return int|false Restituisce il numero di righe interessate dall'aggiornamento, o false in caso di errore.
		 */
		public function update($query, $params = array())
		{
			try {
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);

				// Log dell'interrogazione al database
				$params_log = [
					'message' => 'Interrogazione al database: QUERY -> ' . $query . ' - PARAMETRI -> ' . implode(", ", $params),
					'action' => CONFIG['db']['CrudTypes']['UPDATE'],
					'beforeState' => null,
					'afterState' => null,
					'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
				];

				$this->executeLog($params_log);
				return $stmt->rowCount();
			} catch (PDOException $e) {
				throw new CustomException("Errore durante l'esecuzione della query update", CustomException::PDO_EXCEPTION, $e);
			}
		}

		/**
		 * Esegue una query di inserimento sul database.
		 *
		 * @param string $query La query SQL da eseguire.
		 * @param array $params (Opzionale) Parametri da associare alla query.
		 * @return int|false Restituisce l'ID dell'ultima riga inserita, o false in caso di errore.
		 */
		public function insert($query, $params = array())
		{
			try {
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);
				$new_id = $this->conn->lastInsertId();

				// Log dell'inserimento al database
				$params_log = [
					'message' => 'Creato inserimento: ' . $query,
					'action' => CONFIG['db']['CrudTypes']['INSERT'],
					'beforeState' => '',
					'afterState' => '',
					'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
				];

				$this->executeLog($params_log);
				return $new_id;
			} catch (PDOException $e) {
				throw new CustomException("Errore durante l'esecuzione della query insert", CustomException::PDO_EXCEPTION, $e);
			}
		}

		/**
		 * Esegue una query di cancellazione sul database.
		 *
		 * @param string $query La query SQL da eseguire.
		 * @param array $params (Opzionale) Parametri da associare alla query.
		 * @return int|false Restituisce il numero di righe interessate dalla cancellazione, o false in caso di errore.
		 */
		public function delete($query, $params = array())
		{
			try {
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);

				// Log dell'interrogazione al database
				$params_log = [
					'message' => 'Interrogazione al database: QUERY -> ' . $query . ' - PARAMETRI -> ' . implode(", ", $params),
					'action' => CONFIG['db']['CrudTypes']['DELETE'],
					'beforeState' => null,
					'afterState' => null,
					'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
				];

				$this->executeLog($params_log);
				return $stmt->rowCount();
			} catch (PDOException $e) {
				throw new CustomException("Errore durante l'esecuzione della query delete", CustomException::PDO_EXCEPTION, $e);
			}
		}

		/**
		 * Esegue una query di inserimento dei log nel database.
		 *
		 * @param string $query La query SQL da eseguire.
		 * @param array $params (Opzionale) Parametri da associare alla query.
		 * @return int|false Restituisce l'ID dell'ultima riga inserita, o false in caso di errore.
		 */
		public function insertLogs($query, $params = array())
		{
			try {
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);
				return $this->conn->lastInsertId();
			} catch (PDOException $e) {
				throw new CustomException("Errore durante l'esecuzione della query insertLogs", CustomException::PDO_EXCEPTION, $e);
			}
		}

		/**
		 * Inserisce la nuova versione a DB nella tabella dedicata lmgc_VersionDB
		 */
		public function insertDatabaseVersion($version): void
		{
			try {
				// Inizia la transazione
				DB->beginTransaction();

				$params = [
					':v' => $version,
					':v_e' => $version,
					':n' => "Eseguito tramite API - UpdateDB",
				];

				$insert =
					"INSERT INTO " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::VERSIONDB)
					. " (" . VersionDBTable::VERSIONE. " , " . VersionDBTable::NOME_VERS_ESTESA . " , " . VersionDBTable::NOTE . ")"
					." VALUES (:v, :v_e, :n)";
				DB->insert($insert, $params);

				// Conferma la transazione
				DB->commit();
			} catch (CustomException $e) {
				// Annulla la transazione in caso di errore
				DB->rollBack();
				echo "Operazione fallita: " . $e->getMessage();
			}
		}

		/**
		 * Restituisce la versione del Database salvata
		 * @return mixed Numero della versione. In caso contrario stringa vuota
		 */
		public function getDatabaseVersion(): mixed
		{
			$vers = null;

			// Query per recuperare la versione del database
			$query = "SELECT " . VersionDBTable::VERSIONE
				. " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::VERSIONDB)
				. " ORDER BY " . VersionDBTable::ID . " DESC LIMIT 1";

			$result = $this->select($query);

			if (!empty($result))
				$vers = $result[VersionDBTable::VERSIONE];

			return $vers;
		}

		/**
		 * Controlla la versione del database confrontandola con la versione specificata in configurazione.
		 *
		 * @throws CustomException Se la versione del database non corrisponde a CONFIG['db']['version'].
		 * @return void
		 */
		public function checkDatabaseVersion(): void
		{
			try {
				// Inizia la transazione
				DB->beginTransaction();

				$dbVersion = DB->getDatabaseVersion();

				if (!empty($dbVersion)) {
					$expectedVersion = CONFIG['db']['server'][getEnvironmentKey()]['version'];

					if ($dbVersion !== $expectedVersion) {
						$crypto = new Crypto();
						$secureData = new SecureData($crypto);

						// Parametri da criptare
						$params = [
							'id_message' => CONFIG['message']['key'][0],
							'dbVersion' => $dbVersion,
							'expectedVersion' => $expectedVersion
						];

						// Cripta i parametri
						$encryptedParams = [];
						foreach ($params as $key => $value) {
							$encryptedParams[$key] = $secureData->encryptData($value);
						}

						// Costruisci la query string criptata
						$queryString = http_build_query($encryptedParams);
						$url = "crm_not_working.php?" . $queryString;

						// Passo alla prossima pagina
						redirectPath($url);
					}
				} else {
					throw new CustomException("Impossibile recuperare la versione del database.");
				}

				// Conferma la transazione
				DB->commit();
			} catch (PDOException | CustomException $e) {
				// Annulla la transazione in caso di errore
				DB->rollBack();
				// Log dell'errore
				$message = "Errore durante il controllo della versione del database: " . $e->getMessage();
				error_log($message); // Puoi registrare l'errore in un file di log o nel modo che preferisci
				throw $e; // Rilancia l'eccezione per gestirla più in alto nella tua applicazione, se necessario
			}
		}

        /**
         * Funzione privata per eseguire il log delle operazioni CRUD.
         *
         * @param array $params_log Parametri del log.
         * @return void
         */
        private function executeLog($params_log = array()): void
        {
            // Creazione dell'oggetto DatabaseLog e scrittura del log
            $log = new DatabaseLog($params_log['message'], $params_log['action'], $params_log['beforeState'], $params_log['afterState'], $params_log['user'], $this->toString());
            //$log->writeToFile();
        }

		public function exec($query, $params = array())
		{
			try {
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);

				$params_log = [
					'message' => 'Interrogazione al database: QUERY -> ' . $query . ' - PARAMETRI -> ' . implode(", ", $params),
					'action' => 'EXECUTE', // Puoi cambiare 'EXECUTE' con una stringa appropriata se hai un tipo di log specifico
					'beforeState' => null,
					'afterState' => null,
					'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
				];

				$this->executeLog($params_log);
				return $stmt->rowCount();
			} catch (PDOException $e) {
				print_r($query);
				throw new CustomException("Errore durante l'esecuzione della query exec", CustomException::PDO_EXCEPTION, $e);
			}
		}

		/**
		 * Metodo magico per ottenere una rappresentazione testuale dell'oggetto Database.
		 *
		 * @return string Rappresentazione testuale dell'oggetto Database.
		 */
		public function toString(): string
		{
			return sprintf(
				"Database [host: %s, username: %s, password: %s, database: %s]",
				$this->host,
				$this->username,
				password_hash($this->password, PASSWORD_DEFAULT),
				$this->database
			);
		}

		/**
		 * Verifica se un utente è un amministratore (Super Admin).
		 *
		 * Questa funzione controlla se l'utente con l'ID specificato è un Super Admin.
		 * Un Super Admin è definito come uno sviluppatore del CRM con privilegi speciali.
		 * La verifica viene eseguita cercando il ruolo dell'utente nella tabella degli utenti.
		 *
		 * @param int $id_user L'ID dell'utente da verificare.
		 * @return bool Restituisce true se l'utente è un Super Admin, altrimenti false.
		 */
		public function isAdmin($id_user): bool
		{
			$isAdmin = false;
			$params_select = [
				':id' => $id_user
			];

			//DA implementare col fatto che bisogna recuperare il ruolo dell'utente e DEVE essere un SUPER ADMIN, ovvero solo gli SVILUPPATORI del CRM
			$select = "SELECT COUNT(" . UsersTable::ID . ")"
					. " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERS)
					. "WHERE " . UsersTable::ID . " = :id"
			;
			$result = DB->select($select,$params_select);
			if( $result[UsersTable::ID] > 0 )
				$isAdmin = true;

			return $isAdmin;
		}
	}
