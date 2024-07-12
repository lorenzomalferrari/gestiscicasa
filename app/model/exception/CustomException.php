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

		// Sovrascrivi i messaggi delle eccezioni comuni
		public function __construct($message = "", $code = 0, Throwable $previous = null)
		{
			$exceptionClass = get_class($previous);
			$exceptionMessage = $previous->getMessage();

			switch ($exceptionClass) {
				case 'RuntimeException':
					$message = "Errore di runtime: " . $exceptionMessage;
					break;
				case 'InvalidArgumentException':
					$message = "Argomento non valido: " . $exceptionMessage;
					break;
				case 'OutOfBoundsException':
					$message = "Indice fuori dai limiti: " . $exceptionMessage;
					break;
				case 'LogicException':
					$message = "Errore logico: " . $exceptionMessage;
					break;
				case 'ParseError':
					$message = "Errore di parsing: " . $exceptionMessage;
					break;
				case 'TypeError':
					$message = "Tipo non valido: " . $exceptionMessage;
					break;
				case 'DivisionByZeroError':
					$message = "Divisione per zero: " . $exceptionMessage;
					break;
				case 'Error':
					$message = "Errore generico: " . $exceptionMessage;
					break;
				case 'PDOException':
					$message = "Errore di connessione al database: " . $exceptionMessage;
					break;
				case 'mysqli_sql_exception':
					$message = "Errore MySQLi: " . $exceptionMessage;
					break;
				case 'RedisException':
					$message = "Errore Redis: " . $exceptionMessage;
					break;
				case 'SoapFault':
					$message = "Errore SOAP: " . $exceptionMessage;
					break;
				case 'SimpleXMLElement':
					$message = "Errore XML: " . $exceptionMessage;
					break;
				case 'JsonException':
					$message = "Errore JSON: " . $exceptionMessage;
					break;
				case 'DOMException':
					$message = "Errore DOM: " . $exceptionMessage;
					break;
				case 'ReflectionException':
					$message = "Errore di riflessione: " . $exceptionMessage;
					break;
				case 'BadFunctionCallException':
					$message = "Chiamata di funzione non valida: " . $exceptionMessage;
					break;
				case 'LengthException':
					$message = "Eccezione di lunghezza: " . $exceptionMessage;
					break;
				case 'OutOfBoundsException':
					$message = "Indice fuori dai limiti: " . $exceptionMessage;
					break;
				case 'OutOfRangeException':
					$message = "Valore fuori dall'intervallo: " . $exceptionMessage;
					break;
				case 'UnderflowException':
					$message = "Sottoscarico: " . $exceptionMessage;
					break;
				case 'OverflowException':
					$message = "Overflow: " . $exceptionMessage;
					break;
				case 'UnexpectedValueException':
					$message = "Valore inaspettato: " . $exceptionMessage;
					break;
				case 'FileException':
					$message = "Errore di file: " . $exceptionMessage;
					break;
				case 'DirectoryException':
					$message = "Errore di directory: " . $exceptionMessage;
					break;
				case 'FileNotFoundException':
					$message = "File non trovato: " . $exceptionMessage;
					break;
				case 'FileNotReadableException':
					$message = "File non leggibile: " . $exceptionMessage;
					break;
				case 'FileNotWritableException':
					$message = "File non scrivibile: " . $exceptionMessage;
					break;
				case 'PathException':
					$message = "Errore di path: " . $exceptionMessage;
					break;
				case 'PathNotFoundException':
					$message = "Path non trovato: " . $exceptionMessage;
					break;
				case 'PathPermissionException':
					$message = "Permesso negato per il path: " . $exceptionMessage;
					break;
				default:
					$message = "Errore sconosciuto: " . $exceptionMessage;
					break;
			}

			// Assicurati di chiamare il costruttore della classe base
			parent::__construct($message, $code, $previous);
		}
	}
	/*
	// Esempio di utilizzo
	try {
		// Simula un errore di file non trovato
		throw new FileNotFoundException("Il file non esiste");
	} catch (Throwable $e) {
		// Gestione dell'eccezione con la CustomException che gestisce l'override
		$customException = new CustomException($e->getMessage(), $e->getCode(), $e);
		echo $customException->getMessage() . "\n";
	}
	*/
