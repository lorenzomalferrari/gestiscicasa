<?php declare(strict_types=1);

    class TableNames {
        public static function getPrefixedName(string $prefisso, string $tableName): string
        {
            return $prefisso . $tableName;
        }
    }

    enum NomiTabella: string
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
        case PROPERTY_TYPE = PropertyTypeTable::TABLE_NAME;
        case ROLES = RolesTable::TABLE_NAME;
        case ROOM = RoomsTable::TABLE_NAME;
        case ROOMTYPE = RoomTypesTable::TABLE_NAME;
        case USAGE_DESTINATIONS = UsageDestinationsTable::TABLE_NAME;
        case USERS = UsersTable::TABLE_NAME;
        case USERS_PROPERTY = UsersPropertyTable::TABLE_NAME;
        case VERSIONDB = VersioniDBTable::TABLE_NAME;
        case PATHV_ISITATED = PathVisitatedTable::TABLE_NAME;
        case NATIONALITIES = NationalitiesTable::TABLE_NAME;
    }

    function getNomeTabella(string $prefisso, NomiTabella $nomeT): string
    {
        return TableNames::getPrefixedName($prefisso, $nomeT->value);
    }

?>
