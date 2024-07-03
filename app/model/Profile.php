<?php declare(strict_types=1);
    require_once('../controller/lib/libs.php');
    require_once(ROOT . 'app/model/database.php');
    require_once(ROOT . 'app/model/NomiTabelle.php');
    require_once(ROOT . 'app/model/User.php');
    require_once(ROOT . 'app/model/Person.php');

    /**
     * Classe che rappresenta l'utente e la persona combinati
     */
    class Profile
    {
        // Importa le funzionalità di User e Person come trait
        use Person, User;

        private static Database $db;

        /**
         * Metodo per inizializzare la classe, utilizzato per inizializzare il database
         */
        public static function init(): void
        {
            self::$db = new Database($configIstance->get('SERVERNAME_DB'), $configIstance->get('USERNAME_DB'), $configIstance->get('PASSWORD_DB'), $configIstance->get('DBNAME'),;
        }

        /**
         * Metodo per ottenere il profilo completo di un utente persona combinato
         *
         * @param int $userId
         * @return array
         * @throws Exception
         */
        public static function getProfile(int $userId): Profile
        {
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
                    " . NomiTabella::USERS. " u
                INNER JOIN
                    " . NomiTabella::PERSON . " p ON u.id = p.idUser
                WHERE
                    u.id = :userId";

            // Eseguire la query utilizzando il metodo select del database
            $profileData = self::$db->select($query, ['userId' => $userId]);

            if (!$profileData) {
                throw new Exception("Profile not found");
            }

            // Creare un oggetto Profile utilizzando il metodo statico
            return self::createFromDatabaseResult($profileData[0]);
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
            //info per Person
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
            //info per User
            $profile->setUserId($profileData['userId']);
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
