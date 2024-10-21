<?php declare(strict_types=1);

    class TableNames
    {
        public static function getPrefixedName(string $prefisso, string $tableName): string
        {
            return $prefisso . $tableName;
        }
    }

    enum EnumTableNames: string
    {
        //A
        //B
        case BLOCKED_IP_ADDRESSES = BlockedIpAddressesTable::TABLE_NAME;
        case BRAND = BrandTable::TABLE_NAME;
        //C
        case CATALOGS = CatalogsTable::TABLE_NAME;
        case CONTINENTS = ContinentsTable::TABLE_NAME;
        case CRUD_TYPES = CrudTypesTable::TABLE_NAME;
        case COUNTRIES = CountriesTable::TABLE_NAME; //DA CONTROLLARE NUOVAMENTE
        case CATEGORIES = CategoriesTable::TABLE_NAME;
        case CRUDLOGS = CrudLogsTable::TABLE_NAME;
        //case CITIES = CitiesTable::TABLE_NAME; //DA CONTROLLARE NUOVAMENTE
        //D
        //E
        case EVENTS = EventsTable::TABLE_NAME;
        //F
        //G
        case GENDERS = GendersTable::TABLE_NAME;
        //H
        //I
        case INDUSTRY_SECTORS = IndustrySectorsTable::TABLE_NAME;
        //J
        //K
        //L
        //M
        //N
        //O
        //P
        case PEOPLE = PeopleTable::TABLE_NAME;
        case PROPERTIES = PropertiesTable::TABLE_NAME;
        case PROPERTY_TYPES = PropertyTypesTable::TABLE_NAME;
        case PEOPLE_PROPERTY = PeoplePropertyTable::TABLE_NAME;
        case PATHVISITATED = PathVisitatedTable::TABLE_NAME;
        case PRODUCTS = ProductsTable::TABLE_NAME;
        case PEOPLE_PROPERTY_ROLES = PeoplePropertyRolesTable::TABLE_NAME;
        
        //Q
        //R
        case ROLES = RolesTable::TABLE_NAME;
        case ROOM_TYPES = RoomTypesTable::TABLE_NAME;
        case ROOMS = RoomsTable::TABLE_NAME;
        //S
        //T
        //U
        case USER_ROLES = UserRolesTable::TABLE_NAME;
        case USERS = UsersTable::TABLE_NAME;
        case USAGEDESTINATIONS = UsageDestinationsTable::TABLE_NAME;
        //V
        case VERSIONDB = VersionDBTable::TABLE_NAME;
        case VISITED_COLUMNS = VisitedColumnsTable::TABLE_NAME;
        //W
        //X
        //Y
        //Z

        
        
        
        
        case USERSPROPERTY = UsersPropertyTable::TABLE_NAME;
        case NATIONALITIES = NationalitiesTable::TABLE_NAME;
        case PROFILETYPES = ProfileTypesTable::TABLE_NAME;
        case LANGUAGES = LanguagesTable::TABLE_NAME;
        case SUPPORTEDLANGUAGE = SupportedLanguagesTable::TABLE_NAME;
        case TRANSLATION = TranslationsTable::TABLE_NAME;
        case INFOPROFILETYPES = InfoProfileTypesTable::TABLE_NAME;
        case EXPENSE = ExpenseTable::TABLE_NAME;
        case EXPENSETYPES = ExpenseTypesTable::TABLE_NAME;

        // Funzione per ottenere il caso dell'enum dal valore della tabella
        private static function getEnumCaseFromValue(string $value): ?self
        {
            foreach (self::cases() as $case) {
                if ($case->value === $value)
                    return $case;
            }
            return null;
        }

        // Funzione pubblica per ottenere il valore della tabella dal nome
        public static function getTableName(string $key): ?string
        {
            foreach (self::cases() as $case) {
                if ($case->name === $key)
                    return $case->value;
            }
            return null;
        }

        // Funzione pubblica per ottenere il caso dell'enum dal nome della tabella
        public static function getEnumCaseFromName(string $key): ?self
        {
            $tableName = self::getTableName($key);
            if ($tableName !== null)
                return self::getEnumCaseFromValue($tableName);

            return null;
        }
    }

    function getNomeTabella(string $prefisso, EnumTableNames $nomeT): string
    {
        return TableNames::getPrefixedName($prefisso, $nomeT->value);
    }
?>
