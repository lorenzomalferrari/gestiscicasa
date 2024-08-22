<?php declare(strict_types=1);

    class TableNames {
        public static function getPrefixedName(string $prefisso, string $tableName): string
        {
            return $prefisso . $tableName;
        }
    }

    enum NomiTabelle: string
    {
        case BRAND = BrandTable::TABLE_NAME;
        case CATALOG = CatalogTable::TABLE_NAME;
        case CATEGORY = CategoryTable::TABLE_NAME;
        case COLORS = ColorsTable::TABLE_NAME;
        case CONTINENTS = ContinentsTable::TABLE_NAME;
        case COUNTRIES = CountriesTable::TABLE_NAME;
        case CRUDLOGS = CrudLogsTable::TABLE_NAME;
        case CRUDTYPE = CrudTypeTable::TABLE_NAME;
        case EVENT = EventTable::TABLE_NAME;
        case GENDER = GenderTable::TABLE_NAME;
        case PERSON = PersonTable::TABLE_NAME;
        case PERSON_PROPERTY_ROLES = PersonPropertyRolesTable::TABLE_NAME;
        case PRODUCT = ProductTable::TABLE_NAME;
        case PROPERTY = PropertyTable::TABLE_NAME;
        case PROPERTYTYPE = PropertyTypeTable::TABLE_NAME;
        case ROLES = RolesTable::TABLE_NAME;
        case ROOM = RoomsTable::TABLE_NAME;
        case ROOMTYPE = RoomTypesTable::TABLE_NAME;
        case USAGEDESTINATIONS = UsageDestinationsTable::TABLE_NAME;
        case USERS = UsersTable::TABLE_NAME;
        case USERSPROPERTY = UsersPropertyTable::TABLE_NAME;
        case VERSIONDB = VersionDBTable::TABLE_NAME;
        case PATHVISITATED = PathVisitatedTable::TABLE_NAME;
        case NATIONALITIES = NationalitiesTable::TABLE_NAME;

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

    function getNomeTabella(string $prefisso, NomiTabelle $nomeT): string
    {
        return TableNames::getPrefixedName($prefisso, $nomeT->value);
    }
?>
