<?php declare(strict_types=1);

    class SessionManager
    {
        private $config;

        public function __construct(array $config)
        {
            $this->config = $config;
        }

        public function setSessionData(array $data): void
        {
            require_once(ROOT . "app/controller/lib/session/_session_start.php");
            foreach ($data as $key => $value) {
                $_SESSION[$key] = $value;
            }
        }

        public function startSessionIfNotStarted(): void
        {
            if (!isset($_SESSION) || $this->confrontaTimestamp(15, time(), $_SESSION['LAST_ACTIVITY'])) {
                require_once(ROOT . "app/controller/lib/session/_session_start.php");
            }
        }

        public function manageSession(array $row): void
        {
            $this->startSessionIfNotStarted();

            $keys = $this->config['session']['keys'];

            if ($this->arrayHasAnyKey($_SESSION, $keys)) {
                if ( !$this->isSessionValid() ) {
                    $_SESSION[$this->config['session']['keys']['IDUSER']] = $row['id'];
                    $_SESSION[$this->config['session']['keys']['USERNAME']] = $row['username'];
                    $_SESSION[$this->config['session']['keys']['PASSWORD']] = $row['password'];
                    $_SESSION[$this->config['session']['keys']['EMAIL']] = $row['email'];
                    $_SESSION[$this->config['session']['keys']['TOKEN']] = "";
                    $_SESSION[$this->config['session']['keys']['LAST_ACTIVITY']] = time();
                }
            } else {
                foreach ($keys as $key) {
                    $_SESSION[$key] = "";
                }
            }
        }

        private function isSessionValid(): bool
        {
            return $this->isNotNullOrEmpty($_SESSION[$this->config['session']['keys']['IDUSER']]) &&
                $this->isNotNullOrEmpty($_SESSION[$this->config['session']['keys']['USERNAME']]) &&
                $this->isNotNullOrEmpty($_SESSION[$this->config['session']['keys']['PASSWORD']]) &&
                $this->isNotNullOrEmpty($_SESSION[$this->config['session']['keys']['EMAIL']]);
        }

        private function confrontaTimestamp(int $minutes, int $currentTimestamp, int $lastActivity): bool
        {
            return ($currentTimestamp - $lastActivity) > ($minutes * 60);
        }

        private function isNotNullOrEmpty(mixed $value): bool
        {
            return $value !== null && $value !== '';
        }

        private function arrayHasAnyKey(array $array, array $keys): bool
        {
            foreach ($keys as $key) {
                if (array_key_exists($key, $array)) {
                    return true;
                }
            }
            return false;
        }
    }
