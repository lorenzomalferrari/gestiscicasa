<?php
	require_once "_config.php";
	// Chiave per la crittografia
	define('CRYPTO_KEY', ($config['db']['tablePrefix'] . 'vqP7WjUJCe58^tS!9YPd2TzL#HfG6@bM'));
	/**
	 * Classe che mi consentirà di gestire la criptazione e decriptazione di stringhe
	 * Funzione pensata inizialmente per la gestione delle password
	 */
	class Encryption {
		// Funzione per criptare una stringa
		public static function encryptString($plaintext) {
			// Genera un vettore di inizializzazione casuale
			$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
			// Cripta la stringa utilizzando AES-256-CBC e la chiave segreta
			$ciphertext = openssl_encrypt($plaintext, 'aes-256-cbc', CRYPTO_KEY, 0, $iv);
			// Combina il vettore di inizializzazione con il testo cifrato
			$encrypted_string = base64_encode($iv . $ciphertext);
			return $encrypted_string;
		}

		// Funzione per decriptare una stringa
		public static function decryptString($encrypted_string) {
			// Decodifica la stringa cifrata da base64
			$data = base64_decode($encrypted_string);
			// Estrae il vettore di inizializzazione e il testo cifrato
			$iv_length = openssl_cipher_iv_length('aes-256-cbc');
			$iv = substr($data, 0, $iv_length);
			$ciphertext = substr($data, $iv_length);
			// Decripta la stringa utilizzando AES-256-CBC e la chiave segreta
			$plaintext = openssl_decrypt($ciphertext, 'aes-256-cbc', CRYPTO_KEY, 0, $iv);
			return $plaintext;
		}

	}

?>
