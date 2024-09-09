<?php declare(strict_types=1);

    /**
     * Classe per gestire la crittografia e decrittografia di vari tipi di dati,
     * inclusi $_POST, $_GET, e dati arbitrari.
     */
    class SecureData
    {
        /**
         * Istanza della classe Crypto utilizzata per la crittografia e decrittografia dei dati.
         *
         * @var Crypto
         */
        private Crypto $crypto;

        /**
         * Costruttore della classe SecureData.
         *
         * @param Crypto $crypto Un'istanza della classe Crypto per gestire la crittografia.
         */
        public function __construct(Crypto $crypto)
        {
            $this->crypto = $crypto;
        }

        /**
         * Cripta un qualsiasi dato fornito.
         *
         * @param mixed $data Il dato da criptare.
         * @return string I dati criptati in formato base64.
         */
        public function encryptData(mixed $data): string
        {
            return $this->crypto->encrypt($data);
        }

        /**
         * Decripta un dato criptato precedentemente.
         *
         * @param string $encryptedData I dati criptati in formato base64.
         * @return mixed I dati decriptati nel loro tipo originale.
         */
        public function decryptData(string $encryptedData): mixed
        {
            return $this->crypto->decrypt($encryptedData);
        }

        /**
         * Cripta e imposta i dati in $_POST utilizzando la chiave definita in CONFIG['securityConfig']['key'].
         *
         * @param mixed $value I dati da criptare e memorizzare in $_POST.
         * @return void
         */
        public function setPost(mixed $value): void
        {
            $_POST[CONFIG['securityConfig']['key']] = $this->crypto->encrypt($value);
        }

        /**
         * Recupera e decripta i dati da $_POST utilizzando la chiave definita in CONFIG['securityConfig']['key'].
         *
         * @return mixed I dati decriptati nel loro tipo originale, o null se la chiave non esiste.
         */
        public function getPost(): mixed
        {
            return isset($_POST[CONFIG['securityConfig']['key']]) ? $this->crypto->decrypt($_POST[CONFIG['securityConfig']['key']]) : null;
        }

        /**
         * Cripta e imposta i dati in $_GET utilizzando la chiave definita in CONFIG['securityConfig']['key'].
         *
         * @param mixed $value I dati da criptare e memorizzare in $_GET.
         * @return void
         */
        public function setGet(mixed $value): void
        {
            $_GET[CONFIG['securityConfig']['key']] = $this->crypto->encrypt($value);
        }

        /**
         * Recupera e decripta i dati da $_GET utilizzando la chiave definita in CONFIG['securityConfig']['key'].
         *
         * @return mixed I dati decriptati nel loro tipo originale, o null se la chiave non esiste.
         */
        public function getGet(): mixed
        {
            return isset($_GET[CONFIG['securityConfig']['key']]) ? $this->crypto->decrypt($_GET[CONFIG['securityConfig']['key']]) : null;
        }
    }
