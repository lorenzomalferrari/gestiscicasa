<?php declare(strict_types=1);

    //namespace App\Controller;

    //use App\Model\Token;

    /**
     * Controller per gestire i token.
     */
    class TokenController
    {
        private Token $tokenModel;

        /**
         * Costruttore del controller.
         *
         * @param Token $tokenModel Istanza della classe Token.
         */
        public function __construct(Token $tokenModel)
        {
            $this->tokenModel = $tokenModel;
        }

        /**
         * Genera un token e lo restituisce.
         *
         * @return string Il token generato.
         */
        public function generateToken(): string
        {
            return $this->tokenModel->generateToken();
        }

        /**
         * Valida un token fornito e restituisce il risultato.
         *
         * @param string $token Il token da validare.
         * @return bool True se il token è valido, false altrimenti.
         */
        public function validateToken(string $token): bool
        {
            return $this->tokenModel->validateToken($token);
        }
    }
