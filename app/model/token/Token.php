<?php declare(strict_types=1);
/*
    //namespace App\Model;

    /**
     * Classe Token per generare e validare i token.
     */
 /*   class Token
    {
        protected string $token;

        /**
         * Costruttore della classe Token.
         *
         * @param string $token Il token di partenza lmgc_1e2wfvdfyku65yt4efbntmyj
         */
 /*       public function __construct(string $token)
        {
            $this->token = $token;
        }

    /**
     * Ottiene il token.
     *
     * @return string Il token.
     */
 /*       public function getToken(): string
        {
            return $this->token;
        }

        /**
         * Genera un token basato su tre fattori: una stringa prefisso, una chiave segreta e il timestamp attuale.
         *
         * @return string Il token generato.
         */
 /*       public function generateToken(): string
        {
            $timestamp = time();
            $dateComponents = getdate($timestamp);

            // Creare il token con posizioni fisse per anno, mese, giorno, ora, minuti e secondi
            $token = $this->token .
                str_pad($dateComponents['year'], 4, '0', STR_PAD_LEFT) .
                str_pad($dateComponents['mon'], 2, '0', STR_PAD_LEFT) .
                str_pad($dateComponents['mday'], 2, '0', STR_PAD_LEFT) .
                str_pad($dateComponents['hours'], 2, '0', STR_PAD_LEFT) .
                str_pad($dateComponents['minutes'], 2, '0', STR_PAD_LEFT) .
                str_pad($dateComponents['seconds'], 2, '0', STR_PAD_LEFT);
            return $token;
        }

        /**
         * Valida un token controllando la stringa prefisso, la chiave segreta e il timestamp.
         *
         * @param string $token Il token da validare.
         * @return bool True se il token è valido, false altrimenti.
         */
 /*       public function validateToken(string $token): bool
        {
            // Estrarre il prefisso, la chiave e il timestamp dal token
            $tokenLength = strlen($this->token);

            $extractedToken = substr($token, 0, $tokenLength);
            $extractedTimestamp = substr($token, $tokenLength);

            // Controllare che il prefisso e la chiave siano corretti
            if ($extractedToken !== $this->prefix) {
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
*/
