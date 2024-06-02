<?php
    /**
     * Classe Token per generare e validare i token.
     */
    class Token
    {
        protected string $prefix;
        protected string $key;

        /**
         * Costruttore della classe Token.
         *
         * @param string $prefix La stringa prefisso (es. 'lmgc_').
         * @param string $key La chiave segreta.
         */
        public function __construct(string $prefix, string $key)
        {
            $this->prefix = $prefix;
            $this->key = $key;
        }
        /**
         * Ottiene il prefisso.
         *
         * @return string Il prefisso.
         */
        public function getPrefix(): string
        {
            return $this->prefix;
        }

        /**
         * Imposta il prefisso.
         *
         * @param string $prefix Il prefisso.
         */
        public function setPrefix(string $prefix): void
        {
            $this->prefix = $prefix;
        }

        /**
         * Ottiene la chiave segreta.
         *
         * @return string La chiave segreta.
         */
        public function getKey(): string
        {
            return $this->key;
        }

        /**
         * Imposta la chiave segreta.
         *
         * @param string $key La chiave segreta.
         */
        public function setKey(string $key): void
        {
            $this->key = $key;
        }

        /**
         * Genera un token basato su tre fattori: una stringa prefisso, una chiave segreta e il timestamp attuale.
         *
         * @return string Il token generato.
         */
        public function generateToken(): string
        {
            $timestamp = time();
            $dateComponents = getdate($timestamp);

            // Creare il token con posizioni fisse per anno, mese, giorno, ora, minuti e secondi
            $token = $this->prefix . $this->key .
                str_pad($dateComponents['year'], 4, '0', STR_PAD_LEFT) .// deve diventare dinamica, valori presi da $config
                str_pad($dateComponents['mon'], 2, '0', STR_PAD_LEFT) .// deve diventare dinamica, valori presi da $config
                str_pad($dateComponents['mday'], 2, '0', STR_PAD_LEFT) .// deve diventare dinamica, valori presi da $config
                str_pad($dateComponents['hours'], 2, '0', STR_PAD_LEFT) .// deve diventare dinamica, valori presi da $config
                str_pad($dateComponents['minutes'], 2, '0', STR_PAD_LEFT) .// deve diventare dinamica, valori presi da $config
                str_pad($dateComponents['seconds'], 2, '0', STR_PAD_LEFT);// deve diventare dinamica, valori presi da $config
            return $token;
        }

        /**
         * Valida un token controllando la stringa prefisso, la chiave segreta e il timestamp.
         *
         * @param string $token Il token da validare.
         * @return bool True se il token è valido, false altrimenti.
         */
        public function validateToken(string $token): bool
        {
            // Estrarre il prefisso, la chiave e il timestamp dal token
            $prefixLength = strlen($this->prefix);
            $keyLength = strlen($this->key);

            $extractedPrefix = substr($token, 0, $prefixLength);
            $extractedKey = substr($token, $prefixLength, $keyLength);
            $extractedTimestamp = substr($token, $prefixLength + $keyLength);

            // Controllare che il prefisso e la chiave siano corretti
            if ($extractedPrefix !== $this->prefix || $extractedKey !== $this->key) {
                return false;
            }

            // Estrarre i componenti del timestamp
            $year = substr($extractedTimestamp, 0, 4);
            $month = substr($extractedTimestamp, 4, 2);
            $day = substr($extractedTimestamp, 6, 2);
            $hours = substr($extractedTimestamp, 8, 2);
            $minutes = substr($extractedTimestamp, 10, 2);
            $seconds = substr($extractedTimestamp, 12, 2);

            // Costruire il timestamp estratto
            $extractedTime = mktime((int)$hours, (int)$minutes, (int)$seconds, (int)$month, (int)$day, (int)$year);

            // Verificare che il timestamp estratto sia valido
            return checkdate((int)$month, (int)$day, (int)$year) && $extractedTime !== false;
        }
    }

    /**
     * Classe TokenSession che estende Token.
     */
    class TokenSession extends Token
    {
        protected string $crmVersion;
        protected string $author;

        /**
         * Costruttore della classe TokenSession.
         *
         * @param string $prefix La stringa prefisso (es. 'lmgc_').
         * @param string $key La chiave segreta.
         * @param string $crmVersion La versione del CRM.
         * @param string $author L'autore del token.
         */
        public function __construct(string $prefix, string $key, string $crmVersion, string $author)
        {
            parent::__construct($prefix, $key);
            $this->crmVersion = $crmVersion;
            $this->author = $author;
            $this->setPrefix(  $this->getPrefix() . $this->crmVersion);
            $this->setKey( $this->getKey() . $this->author);
        }

        /**
         * Genera un token includendo la versione del CRM e l'autore.
         *
         * @return string Il token generato.
         */
        public function generateToken(): string
        {
            $baseToken = parent::generateToken();
            return $baseToken . $this->crmVersion . $this->author;
        }

        /**
         * Valida un token includendo la versione del CRM e l'autore.
         *
         * @param string $token Il token da validare.
         * @return bool True se il token è valido, false altrimenti.
         */
        public function validateToken(string $token): bool
        {
            $baseTokenLength = strlen(parent::generateToken());
            $crmVersionLength = strlen($this->crmVersion);
            $authorLength = strlen($this->author);

            // Estrarre il token base, la versione del CRM e l'autore
            $baseToken = substr($token, 0, $baseTokenLength);
            $extractedCrmVersion = substr($token, $baseTokenLength, $crmVersionLength);
            $extractedAuthor = substr($token, $baseTokenLength + $crmVersionLength, $authorLength);

            // Validare il token base
            if (!parent::validateToken($baseToken)) {
                return false;
            }

            // Controllare che la versione del CRM e l'autore siano corretti
            return $extractedCrmVersion === $this->crmVersion && $extractedAuthor === $this->author;
        }
    }

/**
 * Classe TokenDb che estende Token.
 */
class TokenDb extends Token
{

    protected string $dbVersion;
    protected string $dbName;

    /**
     * Costruttore della classe TokenDb.
     *
     * @param string $prefix La stringa prefisso (es. 'lmgc_').
     * @param string $key La chiave segreta.
     * @param string $dbVersion La versione del database.
     * @param string $dbName Il nome del database.
     */
    public function __construct(string $prefix, string $key, string $dbVersion, string $dbName)
    {
        parent::__construct($prefix, $key);
        $this->dbVersion = $dbVersion;
        $this->dbName = $dbName;
        $this->setPrefix($this->getPrefix() . $this->dbVersion);
        $this->setKey($this->getKey() . $this->dbName);
    }

    /**
     * Genera un token includendo la versione del database e il nome del database.
     *
     * @return string Il token generato.
     */
    public function generateToken(): string
    {
        $baseToken = parent::generateToken();
        return $baseToken . $this->dbVersion . $this->dbName;
    }

    /**
     * Valida un token includendo la versione del database e il nome del database.
     *
     * @param string $token Il token da validare.
     * @return bool True se il token è valido, false altrimenti.
     */
    public function validateToken(string $token): bool
    {
        $baseTokenLength = strlen(parent::generateToken());
        $dbVersionLength = strlen($this->dbVersion);
        $dbNameLength = strlen($this->dbName);

        // Estrarre il token base, la versione del database e il nome del database
        $baseToken = substr($token, 0, $baseTokenLength);
        $extractedDbVersion = substr($token, $baseTokenLength, $dbVersionLength);
        $extractedDbName = substr($token, $baseTokenLength + $dbVersionLength, $dbNameLength);

        // Validare il token base
        if (!parent::validateToken($baseToken)) {
            return false;
        }

        // Controllare che la versione del database e il nome del database siano corretti
        return $extractedDbVersion === $this->dbVersion && $extractedDbName === $this->dbName;
    }
}

/*
// Esempio di utilizzo
$prefix = 'lmgc_';
$key = 'vqP7WjUJCe58^tS!9YPd2TzL#HfG6@bM';

$tokenClass = new Token($prefix, $key);
$token = $tokenClass->generateToken();
echo "Generated Token: " . $token . "\n";

$isValid = $tokenClass->validateToken($token);
echo "Is Token Valid? " . ($isValid ? 'true' : 'false') . "\n";

$tokenSession = new TokenSession($prefix, $key, '1.0.4', 'Lorenzo Malferrari');
$token = $tokenSession->generateToken();
echo "Generated Token: " . $token . "\n";

$isValid = $tokenSession->validateToken($token);
echo "Is Token Valid? " . ($isValid ? 'true' : 'false') . "\n";

$tokenDb = new TokenDb($prefix, $key, '1.0.9', 'gestioneCasa');
$tokenDbToken = $tokenDb->generateToken();
echo "Generated DB Token: " . $tokenDbToken . "\n";

$isValidDbToken = $tokenDb->validateToken($tokenDbToken);
echo "Is DB Token Valid? " . ($isValidDbToken ? 'true' : 'false') . "\n";
*/
