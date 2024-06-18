<?php declare(strict_types=1);

	class CustomExceptionHandler {
		private $language;

		public function __construct($language = 'en') {
			$this->language = $language;
		}

		public function handleException($exception) {
			$errorCode = $exception->getCode();
			$errorMessage = $this->getErrorMessage($errorCode);
			if (empty($errorMessage)) {
				$errorMessage = $exception->getMessage();
			}

			// Log dell'eccezione
			error_log('Exception: ' . $errorMessage);

			// Ritorna il messaggio di errore
			return $errorMessage;
		}

		private function getErrorMessage($errorCode) {
			// Array associativo contenente le traduzioni degli errori
			$errorMessages = array(
				'en' => array(
					404 => 'Resource not found.',
					500 => 'Internal server error.'
				),
				'it' => array(
					404 => 'Risorsa non trovata.',
					500 => 'Errore interno del server.'
				)
				// Aggiungi altre traduzioni secondo necessità
			);

			// Ottieni il messaggio di errore corrispondente al codice di errore e alla lingua
			if (isset($errorMessages[$this->language][$errorCode])) {
				return $errorMessages[$this->language][$errorCode];
			} else {
				return '';
			}
		}
	}

?>
