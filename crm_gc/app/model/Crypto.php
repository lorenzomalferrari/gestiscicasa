<?php

declare(strict_types=1);

/**
 * Classe per criptare e decriptare dati di qualsiasi tipo utilizzando l'algoritmo passato.
 */
class Crypto
{
    private string $secretKey;
    private string $cipher;
    private string $supportString;
    private string $separator;
    private int $ivLength;

    public function __construct()
    {
        $this->secretKey = CONFIG['securityConfig']['key'];
        $this->cipher = CONFIG['securityConfig']['cipher'];
        $this->supportString = TokenGenerator::generate();
        $this->separator = CONFIG['securityConfig']['separator'];
        $this->ivLength = openssl_cipher_iv_length($this->cipher);
    }

    /**
     * Cripta i dati forniti utilizzando l'algoritmo specificato.
     *
     * @param mixed $data I dati da criptare. Può essere di qualsiasi tipo.
     * @return string I dati criptati in formato base64.
     * @throws Exception Se si verifica un errore durante la crittografia.
     */
    public function encrypt(mixed $data): string
    {
        $dataString = serialize($data); // Serializza i dati

        // Se la lunghezza dei dati è inferiore alla lunghezza dell'IV, aggiungi il separatore e la stringa di supporto
        if (strlen($dataString) < $this->ivLength) {
            $dataString .= $this->separator . $this->supportString;
        }

        $iv = openssl_random_pseudo_bytes($this->ivLength); // Genera un IV randomico

        $encryptedData = openssl_encrypt($dataString, $this->cipher, $this->secretKey, 0, $iv);

        if ($encryptedData === false) {
            throw new Exception('Errore nella crittografia dei dati');
        }

        return base64_encode($iv . $encryptedData); // Concateno IV e dati criptati
    }

    /**
     * Decripta i dati forniti utilizzando l'algoritmo specificato.
     *
     * @param string $encryptedData I dati criptati da decriptare.
     * @return mixed I dati decriptati nel loro tipo originale.
     * @throws Exception Se si verifica un errore durante la decrittografia.
     */
    public function decrypt(string $encryptedData): mixed
    {
        $encryptedData = base64_decode($encryptedData);

        // Verifica se i dati decodificati sono validi
        if ($encryptedData === false || strlen($encryptedData) < $this->ivLength) {
            throw new Exception('Dati criptati non validi o troppo corti');
        }

        // Separiamo l'IV dai dati criptati
        $iv = substr($encryptedData, 0, $this->ivLength);
        $encryptedData = substr($encryptedData, $this->ivLength);

        // Decripta i dati
        $decryptedData = openssl_decrypt($encryptedData, $this->cipher, $this->secretKey, 0, $iv);

        if ($decryptedData === false) {
            throw new Exception('Errore nella decrittografia dei dati');
        }

        // Prova a deserializzare
        $originalData = @unserialize($decryptedData);

        // Se unserialize fallisce, controlla se la stringa è in un formato atteso
        if ($originalData === false && $decryptedData !== 'b:0;') {
            // A questo punto possiamo decidere di ritornare i dati come stringa
            $originalData = $decryptedData;
        }

        // Verifica se la stringa decriptata contiene il separatore e la stringa di supporto
        if (is_string($originalData) && strpos($originalData, $this->separator . $this->supportString) !== false) {
            // Rimuoviamo la stringa di supporto
            $originalData = explode($this->separator, $originalData)[0];
        }

        return $originalData; // Restituisci i dati originali
    }

    /**
     * Cripta i parametri forniti in un array.
     *
     * @param array $params I parametri da criptare.
     * @param SecureData $secureData L'istanza di SecureData utilizzata per la crittografia.
     * @return array I parametri criptati.
     */
    public static function encryptParams(array $params, SecureData $secureData): array
    {
        $encryptedParams = [];
        foreach ($params as $key => $value) {
            // Cripta la chiave
            $encryptedKey = $secureData->encryptData($key);

            // Controlla se il valore è un array
            if (is_array($value)) {
                // Se è un array, chiama ricorsivamente la funzione
                $encryptedParams[$encryptedKey] = self::encryptParams($value, $secureData);
            } else {
                // Cripta il valore
                $encryptedParams[$encryptedKey] = $secureData->encryptData($value);
            }
        }
        return $encryptedParams;
    }

    /**
     * Decripta i parametri criptati forniti in un array.
     *
     * @param array $encryptedParams I parametri criptati da decriptare.
     * @param SecureData $secureData L'istanza di SecureData utilizzata per la decrittografia.
     * @return array I parametri decriptati.
     */
    public static function decryptParams(array $encryptedParams, SecureData $secureData): array
    {
        $decryptedParams = [];
        foreach ($encryptedParams as $key => $encryptedValue) {
            // Decripta la chiave
            $decryptedKey = $secureData->decryptData($key);

            // Controlla se il valore è un array
            if (is_array($encryptedValue)) {
                // Se è un array, chiama ricorsivamente la funzione
                $decryptedParams[$decryptedKey] = self::decryptParams($encryptedValue, $secureData);
            } else {
                // Decripta il valore
                $decryptedParams[$decryptedKey] = $secureData->decryptData($encryptedValue);
            }
        }
        return $decryptedParams;
    }

}
