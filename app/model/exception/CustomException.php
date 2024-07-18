<?php declare(strict_types=1);

	class CustomException extends Exception
	{
		// Codici degli errori
		public const RUNTIME_ERROR = 1;
		public const INVALID_ARGUMENT = 2;
		public const OUT_OF_BOUNDS = 3;
		public const LOGIC_ERROR = 4;
		public const PARSE_ERROR = 5;
		public const TYPE_ERROR = 6;
		public const DIVISION_BY_ZERO = 7;
		public const GENERIC_ERROR = 8;
		public const PDO_EXCEPTION = 9;
		public const MYSQLI_EXCEPTION = 10;
		public const REDIS_EXCEPTION = 11;
		public const SOAP_FAULT = 12;
		public const XML_ERROR = 13;
		public const JSON_ERROR = 14;
		public const DOM_ERROR = 15;
		public const REFLECTION_ERROR = 16;
		public const BAD_FUNCTION_CALL = 17;
		public const LENGTH_EXCEPTION = 18;
		public const OUT_OF_RANGE = 19;
		public const UNDERFLOW = 20;
		public const OVERFLOW = 21;
		public const UNEXPECTED_VALUE = 22;
		public const FILE_EXCEPTION = 23;
		public const DIRECTORY_EXCEPTION = 24;
		public const FILE_NOT_FOUND_EXCEPTION = 25;
		public const FILE_NOT_READABLE_EXCEPTION = 26;
		public const FILE_NOT_WRITABLE_EXCEPTION = 27;
		public const PATH_EXCEPTION = 28;
		public const PATH_NOT_FOUND_EXCEPTION = 29;
		public const PATH_PERMISSION_EXCEPTION = 30;
		public const UNKNOWN_ERROR = 31;

		private string $fileName = "";
		private string $data = "";
		private string $customMessage = "";
		private string $dateTime = "";

		// Sovrascrivi i messaggi delle eccezioni comuni
		public function __construct($message = "", $code = 0, Throwable $previous = null)
		{
			$exceptionClass = get_class($previous);
			$exceptionMessage = $previous->getMessage();

			print_r("getMessage(): " . $exceptionMessage);
			print_r("get_class(): " . $exceptionClass);
			$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
			$this->dateTime = "[" . date('Y-m-d H:i:s') . "] ";

			switch ($exceptionClass) {
				case 'RuntimeException':
					$this->customMessage .= "Errore di runtime: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'InvalidArgumentException':
					$this->customMessage .= "Argomento non valido: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'OutOfBoundsException':
					$this->customMessage .= "Indice fuori dai limiti: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'LogicException':
					$this->customMessage .= "Errore logico: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'ParseError':
					$this->customMessage .= "Errore di parsing: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'TypeError':
					$this->customMessage .= "Tipo non valido: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'DivisionByZeroError':
					$this->customMessage .= "Divisione per zero: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'Error':
					$this->customMessage .= "Errore generico: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'PDOException':
					$this->customMessage .= "Errore di connessione al database: " . $exceptionMessage;
					break;
				case 'mysqli_sql_exception':
					$this->customMessage .= "Errore MySQLi: " . $exceptionMessage;
					break;
				case 'RedisException':
					$this->customMessage .= "Errore Redis: " . $exceptionMessage;
					break;
				case 'SoapFault':
					$this->customMessage .= "Errore SOAP: " . $exceptionMessage;
					break;
				case 'SimpleXMLElement':
					$this->customMessage .= "Errore XML: " . $exceptionMessage;
					break;
				case 'JsonException':
					$this->customMessage .= "Errore JSON: " . $exceptionMessage;
					break;
				case 'DOMException':
					$this->customMessage .= "Errore DOM: " . $exceptionMessage;
					break;
				case 'ReflectionException':
					$this->customMessage .= "Errore di riflessione: " . $exceptionMessage;
					break;
				case 'BadFunctionCallException':
					$this->customMessage .= "Chiamata di funzione non valida: " . $exceptionMessage;
					break;
				case 'LengthException':
					$this->customMessage .= "Eccezione di lunghezza: " . $exceptionMessage;
					break;
				case 'OutOfBoundsException':
					$this->customMessage .= "Indice fuori dai limiti: " . $exceptionMessage;
					break;
				case 'OutOfRangeException':
					$this->customMessage .= "Valore fuori dall'intervallo: " . $exceptionMessage;
					break;
				case 'UnderflowException':
					$this->customMessage .= "Sottoscarico: " . $exceptionMessage;
					$this->fileName = PathAndFilesLog::PATH_ERROR_ERROR;
					break;
				case 'OverflowException':
					$this->customMessage .= "Overflow: " . $exceptionMessage;
					break;
				case 'UnexpectedValueException':
					$this->customMessage .= "Valore inaspettato: " . $exceptionMessage;
					break;
				case 'FileException':
					$this->customMessage .= "Errore di file: " . $exceptionMessage;
					break;
				case 'DirectoryException':
					$this->customMessage .= "Errore di directory: " . $exceptionMessage;
					break;
				case 'FileNotFoundException':
					$this->customMessage .= "File non trovato: " . $exceptionMessage;
					break;
				case 'FileNotReadableException':
					$this->customMessage .= "File non leggibile: " . $exceptionMessage;
					break;
				case 'FileNotWritableException':
					$this->customMessage .= "File non scrivibile: " . $exceptionMessage;
					break;
				case 'PathException':
					$this->customMessage .= "Errore di path: " . $exceptionMessage;
					break;
				case 'PathNotFoundException':
					$this->customMessage .= "Path non trovato: " . $exceptionMessage;
					break;
				case 'PathPermissionException':
					$this->customMessage .= "Permesso negato per il path: " . $exceptionMessage;
					break;
				default:
					$this->customMessage .= "Errore sconosciuto: " . $exceptionMessage;
					break;
			}

			// Assicurati di chiamare il costruttore della classe base
			parent::__construct($message, $code, $previous);

			// Scrivi l'errore nel file di log
			$this->data = $this->dateTime . ": " . json_encode($this->customMessage, JSON_PRETTY_PRINT) . PHP_EOL;
			FileManager::writeToFile($this->fileName, $this->data, true);
		}
	}
