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
		 */
		public function __construct()
		{
			$this->host = CONFIG_ISTANCE->get('SERVERNAME_DB');
			$this->username = CONFIG_ISTANCE->get('USERNAME_DB');
			$this->password = CONFIG_ISTANCE->get('PASSWORD_DB');
			$this->database = CONFIG_ISTANCE->get('DBNAME');

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
			/*try {
				if ($this->conn !== null && !$this->conn->inTransaction()) {
					$this->conn->beginTransaction();
				}
			} catch (PDOException $e) {
				throw new CustomException(
					"Errore durante l'inizio della transazione",
					CustomException::PDO_EXCEPTION,
					$e
				);
			}*/
		}

		/**
		 * Conferma una transazione e chiude la connessione.
		 *
		 * @return void
		 */
		public function commit(): void
		{
			/*try {
				if ($this->conn !== null && $this->conn->inTransaction()) {
					$this->conn->commit();
				}
			} catch (PDOException $e) {
				throw new CustomException("Errore durante la conferma della transazione", CustomException::PDO_EXCEPTION, $e);
			} finally {
				$this->closeConnection();
			}*/
		}


		/**
		 * Annulla una transazione e chiude la connessione.
		 * In caso di errori, non vengono applicate le operazioni
		 *
		 * @return void
		 */
		public function rollBack(): void
		{
			/*try {
				if ($this->conn !== null && $this->conn->inTransaction()) {
					$this->conn->rollBack();
				}
			} catch (PDOException $e) {
				throw new CustomException(
					"Errore durante l'annullamento della transazione",
					CustomException::PDO_EXCEPTION,
					$e
				);
			} finally {
				$this->closeConnection();
			}*/
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
			$result = [];
			try {
				$this->beginTransaction();
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
				$result = $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
				$this->commit();
			} catch (PDOException $e) {
				$this->rollBack();
				throw new CustomException("Errore durante l'esecuzione della query select", CustomException::PDO_EXCEPTION, $e);
			}
			return $result;
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
			$result = [];
			try {
				$this->beginTransaction();
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
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
				$this->commit();
			} catch (PDOException $e) {
				$this->rollBack();
				throw new CustomException("Errore durante l'esecuzione della query selectAll", CustomException::PDO_EXCEPTION, $e);
			}
			return $result;
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
			$rowsAffected = false;
			try {
				$this->beginTransaction();
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
				$rowsAffected = $stmt->rowCount();
				$this->commit();
			} catch (PDOException $e) {
				$this->rollBack();
				throw new CustomException("Errore durante l'esecuzione della query update", CustomException::PDO_EXCEPTION, $e);
			}
			return $rowsAffected;
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
			$newId = false;
			try {
				$this->beginTransaction();
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);
				$newId = $this->conn->lastInsertId();

				// Log dell'inserimento al database
				$params_log = [
					'message' => 'Creato inserimento: ' . $query,
					'action' => CONFIG['db']['CrudTypes']['INSERT'],
					'beforeState' => '',
					'afterState' => '',
					'user' => !empty($_SESSION["IDUSER_SE"]) ? $_SESSION["IDUSER_SE"] : -1,
				];

				$this->executeLog($params_log);
				$this->commit();
			} catch (PDOException $e) {
				$this->rollBack();
				throw new CustomException("Errore durante l'esecuzione della query insert", CustomException::PDO_EXCEPTION, $e);
			}
			return $newId;
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
			$rowsAffected = false;
			try {
				$this->beginTransaction();
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
				$rowsAffected = $stmt->rowCount();
				$this->commit();
			} catch (PDOException $e) {
				$this->rollBack();
				throw new CustomException("Errore durante l'esecuzione della query delete", CustomException::PDO_EXCEPTION, $e);
			}
			return $rowsAffected;
		}

		/**
		 * Esegue una query di inserimento dei log nel database.
		 *
		 * @param string $query La query SQL da eseguire.
		 * @param array $params (Opzionale) Parametri da associare alla query.
		 * @return void
		 */
		public function insertLogs($query, $params = array())
		{
			$newId = false;
			try {
				$this->beginTransaction();
				$stmt = $this->conn->prepare($query);
				$stmt->execute($params);

				$newId = $this->conn->lastInsertId();
				$this->commit();
			} catch (PDOException $e) {
				$this->rollBack();
				throw new CustomException("Errore durante l'esecuzione della query insertLogs", CustomException::PDO_EXCEPTION, $e);
			}
			return $newId;
		}

		/**
		 * Inserisce la nuova versione a DB nella tabella dedicata lm_VersionDB
		 */
		public function insertDatabaseVersion($version): void
		{
			try {
				$this->beginTransaction();

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
		 * @return mixed Numero della versione. In caso contrario valore nullo
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
				//print_r("dbVersion: " . $dbVersion);

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
						$encryptedParams = Crypto::encryptParams($params, $secureData);

						// Costruisci la query string criptata
						$queryString = http_build_query($encryptedParams);
						$url = "crm_not_working.php?" . $queryString;

						// Conferma la transazione
						DB->commit();

						// Passo alla prossima pagina
						redirectPath($url);
					}
				} else {
					throw new CustomException("Impossibile recuperare la versione del database.");
				}

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
		 * Chiude la connessione al database.
		 */
		public function closeConnection(): void
		{
			//$this->conn = null;
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
            //$log = new DatabaseLog($params_log['message'], $params_log['action'], $params_log['beforeState'], $params_log['afterState'], $params_log['user'], $this->toString());
            //$log->writeToFile();
        }

		/**
		 * Consente l'esecuzione direttamente della query passata, con eventuali parametri
		 * Funzione sviluppata per usarla in model/api ma che potrebbe essere usata in altri contesti
		 * TO DO: Se si vuole usare in altri contesti, serve passare un terzo parametro per classificare il tipo di azione
		 * vedere CONFIG -> DB -> CrudTypes
		 * altre azioni con consentite
		 */
		public function exec($query, $params = array())
		{
			try {
				$this->beginTransaction();
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
				$this->commit();
				return $stmt->rowCount();
			} catch (PDOException $e) {
				//print_r($query);
				$this->rollBack();
				throw new CustomException("Errore durante l'esecuzione della query exec", CustomException::PDO_EXCEPTION, $e);
			}
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
	}
