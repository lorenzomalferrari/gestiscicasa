<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/User.php');
    require_once(ROOT . 'app/model/Person.php');

    /**
     * Classe che rappresenta l'utente e la persona combinati
     */
    class Profile
    {
        // Importa le funzionalità di User e Person come trait
        use Person, User {
            //Person::getId as personGetId;
            //Person::setId as personSetId;
            //Person::getCreationDate as personGetCreationDate;
            //Person::getUpdateDate as personGetUpdateDate;

            //User::getId as userGetId;
            //User::setId as userSetId;
            //User::getCreationDate as userGetCreationDate;
            //User::getUpdateDate as userGetUpdateDate;
        }

        /**
         * Metodo per inizializzare la classe, utilizzato per inizializzare il database
         */
        public static function init(): void {}

        /**
         * Costruttore per la classe Profile
         */
        public function __construct(){}

        /**
         * Metodo per ottenere il profilo completo di un utente persona combinato
         *
         * @param int $userId
         * @return Profile
         * @throws Exception
         */
        public static function getProfile(int $userId): Profile
        {
            //self::init();

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
                    " . EnumTableNamesUSERS . " u
                INNER JOIN
                    " . EnumTableNamesPERSON . " p ON u.id = p.idUser
                WHERE
                    u.id = :userId";

            $profileData = DB->select($query, ['userId' => $userId]);

            if (empty($profileData)) {
                throw new Exception("Profile not found");
            }

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
            $profile->setPersonId($profileData['personId']);
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
            $profile->setUserId($profileData['userId']);
            $profile->setUsername($profileData['username']);
            $profile->setPassword($profileData['password']);
            $profile->setToken($profileData['token']);
            $profile->setIsActive($profileData['isActive']);
            // Return Info
            return $profile;
        }

        public function getIds(): array
        {
            return [
                'id_person' => $this->getPersonId(),
                'id_user' => $this->getUserId()
            ];
        }
    }
