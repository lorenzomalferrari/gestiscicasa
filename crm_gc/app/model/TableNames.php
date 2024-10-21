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
        case ADDRESS_TYPE = AddressTypesTable::TABLE_NAME;
        case ADDRESSES = AddressesTable::TABLE_NAME;
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
        case EXPENSE = ExpenseTable::TABLE_NAME;
        case EXPENSETYPES = ExpenseTypesTable::TABLE_NAME;
        //F
        //G
        case GENDERS = GendersTable::TABLE_NAME;
        //H
        //I
        case INDUSTRY_SECTORS = IndustrySectorsTable::TABLE_NAME;
        case INFOPROFILETYPES = InfoProfileTypesTable::TABLE_NAME;
        //J
        //K
        //L
        case LANGUAGES = LanguagesTable::TABLE_NAME;
        //M
        //N
        case NATIONALITIES = NationalitiesTable::TABLE_NAME;
        //O
        //P
        case PEOPLE = PeopleTable::TABLE_NAME;
        case PROPERTIES = PropertiesTable::TABLE_NAME;
        case PROPERTY_TYPES = PropertyTypesTable::TABLE_NAME;
        case PEOPLE_PROPERTY = PeoplePropertyTable::TABLE_NAME;
        case PATHVISITATED = PathVisitatedTable::TABLE_NAME;
        case PRODUCTS = ProductsTable::TABLE_NAME;
        case PEOPLE_PROPERTY_ROLES = PeoplePropertyRolesTable::TABLE_NAME;
        case PHONE_TYPES = PhoneTypesTable::TABLE_NAME;
        case PHONES = PhonesTable::TABLE_NAME;
        case PEOPLE_ADDRESS = PeopleAddressTable::TABLE_NAME;
        case PEOPLE_PHONE = PeoplePhoneTable::TABLE_NAME;
        case PROFILETYPES = ProfileTypesTable::TABLE_NAME;
        //Q
        //R
        case ROLES = RolesTable::TABLE_NAME;
        case ROOM_TYPES = RoomTypesTable::TABLE_NAME;
        case ROOMS = RoomsTable::TABLE_NAME;
        //S
        case SUPPORTEDLANGUAGE = SupportedLanguagesTable::TABLE_NAME;
        //T
        case TABLES_COLUMNS_VISITED = TablesColumnsVisitedTable::TABLE_NAME;
        case TRANSLATION = TranslationsTable::TABLE_NAME;
        //U
        case USER_ROLES = UserRolesTable::TABLE_NAME;
        case USERS = UsersTable::TABLE_NAME;
        case USAGEDESTINATIONS = UsageDestinationsTable::TABLE_NAME;
        case USERSPROPERTY = UsersPropertyTable::TABLE_NAME;
        //V
        case VERSIONDB = VersionDBTable::TABLE_NAME;
        //W
        //X
        //Y
        //Z

        /**
         * Retrieves the enum case that matches the given value.
         *
         * @param string $value The value to search for within the enum cases.
         * @return self|null The matching enum case, or null if no match is found.
         */
        private static function getEnumCaseFromValue(string $value): ?self
        {
            return array_filter(
                self::cases(),
                fn($case) => $case->value === $value
            )[0] ?? null;
        }

        /**
         * Gets the table name (value) corresponding to the provided key (enum case name).
         *
         * @param string $key The enum case name to look for.
         * @return string|null The corresponding table name (value) or null if no match is found.
         */
        public static function getTableName(string $key): ?string
        {
            return array_filter(
                self::cases(),
                fn($case) => $case->name === $key
            )[0]->value ?? null;
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
