<?php declare(strict_types=1);
    require_once('../controller/lib/libs.php');
    
    require_once(ROOT . 'app/model/NomiTabelle.php');
    require_once(ROOT . 'app/model/User.php');
    require_once(ROOT . 'app/model/Person.php');

    /**
     * Classe che rappresenta l'utente e la persona combinati
     */
    class Profile
    {
        // Importa le funzionalità di User e Person come trait
        use Person, User {
            Person::__construct as personConstruct;
            Person::getId as personGetId;
            Person::setId as personSetId;
            Person::getCreationDate as personGetCreationDate;

            User::__construct as userConstruct;
            User::getId as userGetId;
            User::setId as userSetId;
            User::getCreationDate as userGetCreationDate;
        }

        private static $db;

        /**
         * Metodo per inizializzare la classe, utilizzato per inizializzare il database
         */
        public static function init(): void
        {
            if (self::$db === null) {
                $configInstance = Config::getInstance();
                self::$db = new Database(
                    $configInstance->get('SERVERNAME_DB'),
                    $configInstance->get('USERNAME_DB'),
                    $configInstance->get('PASSWORD_DB'),
                    $configInstance->get('DBNAME')
                );
            }
        }

        /**
         * Costruttore per la classe Profile
         */
        public function __construct()
        {
            $this->userConstruct();
            $this->personConstruct();
        }

        /**
         * Metodo per ottenere il profilo completo di un utente persona combinato
         *
         * @param int $userId
         * @return Profile
         * @throws Exception
         */
        public static function getProfile(int $userId): Profile
        {
            // Assicurati che il database sia inizializzato
            self::init();

            // Query per ottenere i dati combinati da User e Person
            $query = "SELECT
                    p.id as personId,
                    p.name,
                    p.surname,
                    p.age,
                    p.birthdate,
                    p.city,
                    p.state,
                    p.nationality,
                    p.description,
                    p.email,
                    u.id as userId,
                    u.username,
                    u.password,
                    u.token,
                    u.isActive
                FROM
                    " . NomiTabella::USERS . " u
                INNER JOIN
                    " . NomiTabella::PERSON . " p ON u.id = p.idUser
                WHERE
                    u.id = :userId";

            // Eseguire la query utilizzando il metodo select del database
            $profileData = self::$db->select($query, ['userId' => $userId]);

            if (empty($profileData)) {
                throw new Exception("Profile not found");
            }

            // Creare un oggetto Profile utilizzando il metodo statico
            return self::createFromDatabaseResult($profileData);
        }

        /**
         * Metodo statico per creare un oggetto Profile da un array associativo restituito dal database
         *
         * @param array $profileData
         * @return Profile
         */
        public static function createFromDatabaseResult(array $profileData): Profile
        {
            $profile = new Profile();
            // Info per Person
            $profile->personSetId($profileData['personId']);
            $profile->setName($profileData['name']);
            $profile->setSurname($profileData['surname']);
            $profile->setAge($profileData['age']);
            $profile->setBirthdate($profileData['birthdate']);
            $profile->setCity($profileData['city']);
            $profile->setState($profileData['state']);
            $profile->setNationality($profileData['nationality']);
            $profile->setDescription($profileData['description']);
            $profile->setEmail($profileData['email']);
            // Info per User
            $profile->userSetId($profileData['userId']);
            $profile->setUsername($profileData['username']);
            $profile->setPassword($profileData['password']);
            $profile->setToken($profileData['token']);
            $profile->setIsActive($profileData['isActive']);

            return $profile;
        }

        /**
         * Restituisce il nominativo completo dell'utente (nome e cognome)
         *
         * @return string
         */
        public function getNominativo(): string
        {
            return $this->getName() . ' ' . $this->getSurname();
        }
    }
