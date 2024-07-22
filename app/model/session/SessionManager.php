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
            print_r($row);

            $this->startSessionIfNotStarted();

            print_r("Sessione settata: -" . isset($_SESSION) . "-<br>");
            print_r($_SESSION, true);

            $keys = $this->config['session']['keys'];
            print_r("<br>Stato chiavi in sessione: " . var_export($this->arrayHasAnyKey($_SESSION, $keys)));
            print_r('<br><br><br>');
            print_r($_SESSION);
            print_r('<br><br><br>');

            if ($this->arrayHasAnyKey($_SESSION, $keys)) {
                print_r("dentro a if, quindi ho già le key settate");

                if ($this->isSessionValid()) {
                    print_r('Non faccio niente, sessione ok, andrò in Home');
                } else {
                    print_r('Compilo SESSION con i dati del nuovo utente registrato:');
                    print_r($row);
                    $_SESSION[$this->config['session']['keys']['IDUSER']] = $row['id'];
                    $_SESSION[$this->config['session']['keys']['USERNAME']] = $row['username'];
                    $_SESSION[$this->config['session']['keys']['PASSWORD']] = $row['password'];
                    $_SESSION[$this->config['session']['keys']['EMAIL']] = $row['email'];
                    $_SESSION[$this->config['session']['keys']['TOKEN']] = "";
                    $_SESSION[$this->config['session']['keys']['LAST_ACTIVITY']] = time();
                }
            } else {
                print_r('<br>preparo key utili nel CRM<br>');
                foreach ($keys as $key) {
                    $_SESSION[$key] = "";
                }
            }

            print_r($_SESSION);
            print_r('<br><br><br>');
            print_r('esco da _setSessione.php<br>');
        }

        private function isSessionValid(): bool
        {
            return $this->isNotNullOrEmpty($_SESSION['IDUSER']) &&
                $this->isNotNullOrEmpty($_SESSION['USERNAME']) &&
                $this->isNotNullOrEmpty($_SESSION['PASSWORD']) &&
                $this->isNotNullOrEmpty($_SESSION['EMAIL']);
            //&& $this->isNotNullOrEmpty($_SESSION['TOKEN']);
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
