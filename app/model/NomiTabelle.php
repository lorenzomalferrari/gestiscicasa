<?php declare(strict_types=1);

    require_once(ROOT . 'app/controller/lib/_config.php');
    require_once(ROOT . 'app/controller/lib/_db.php');

    class TableNames {
        public static function getPrefixedName(string $prefisso, string $tableName): string
        {
            return $prefisso . $tableName;
        }
    }

    enum NomiTabella: string
    {
        case BRAND = "Brand";
        case CATALOG = "Catalog";
        case CATEGORY = "Category";
        case COLORS = "Colors";
        case CONTINENTS = "Continents";
        case COUNTRIES = "Countries";
        case CRUDLOGS = "CrudLogs";
        case CRUDTYPE = "CrudType";
        case EVENT = "Event";
        case GENDER = "Gender";
        case PERSON = "Person";
        case PERSONPROPERTYROLES = "PersonPropertyRoles";
        case PRODUCT = "Product";
        case PROPERTY = "Property";
        case PROPERTYTYPE = "PropertyType";
        case ROLES = "Roles";
        case ROOM = "Room";
        case ROOMTYPE = "RoomType";
        case USAGEDESTINATIONS = "UsageDestinations";
        case USERS = "Users";
    }

    function getNomeTabella(string $prefisso, NomiTabella $nomeT): string
    {
        return TableNames::getPrefixedName($prefisso, $nomeT->value);
    }

?>
