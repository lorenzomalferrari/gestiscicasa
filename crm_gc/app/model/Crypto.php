<?php declare(strict_types=1);

    /**
     * Classe per criptare e decriptare dati di qualsiasi tipo utilizzando l'algoritmo AES-256-CBC.
     */
    class Crypto
    {
        private string $secretKey = CONFIG['securityConfig']['key'];
        private string $cipher = CONFIG['securityConfig']['cipher'];

        /**
         * Cripta i dati forniti utilizzando l'algoritmo AES-256-CBC.
         *
         * @param mixed $data I dati da criptare. Può essere di qualsiasi tipo.
         * @return string I dati criptati in formato base64.
         * @throws Exception Se si verifica un errore durante la crittografia.
         */
        public function encrypt(mixed $data): string
        {
            $dataString = serialize($data);
            $ivLength = openssl_cipher_iv_length($this->cipher);
            $iv = openssl_random_pseudo_bytes($ivLength);

            $encryptedData = openssl_encrypt($dataString, $this->cipher, $this->secretKey, 0, $iv);

            if ($encryptedData === false) {
                throw new Exception('Errore nella crittografia dei dati');
            }

            return base64_encode($iv . $encryptedData);
        }

        /**
         * Decripta i dati forniti utilizzando l'algoritmo AES-256-CBC.
         *
         * @param string $encryptedData I dati criptati da decriptare.
         * @return mixed I dati decriptati nel loro tipo originale.
         * @throws Exception Se si verifica un errore durante la decrittografia.
         */
        public function decrypt(string $encryptedData): mixed
        {
            $ivLength = openssl_cipher_iv_length($this->cipher);
            $encryptedData = base64_decode($encryptedData);

            $iv = substr($encryptedData, 0, $ivLength);
            $encryptedData = substr($encryptedData, $ivLength);

            $decryptedData = openssl_decrypt($encryptedData, $this->cipher, $this->secretKey, 0, $iv);

            if ($decryptedData === false) {
                throw new Exception('Errore nella decrittografia dei dati');
            }

            return unserialize($decryptedData);
        }
    }
