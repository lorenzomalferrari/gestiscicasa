<?php
    require_once(ROOT . 'app/controller/lib/_config.php');

    enum NomiTabella: string {
        case BRAND = $config['db']['tablePrefix'] . "Brand";
        case CATALOG = $config['db']['tablePrefix'] . "Catalog";
        case CATEGORY = $config['db']['tablePrefix'] . "Category";
        case COLORS = $config['db']['tablePrefix'] . "Colors";
        case CONTINENTS = $config['db']['tablePrefix'] . "Continents";
        case COUNTRIES = $config['db']['tablePrefix'] . "Countries";
        case CRUDLOGS = $config['db']['tablePrefix'] . "CrudLogs";
        case CRUDTYPE = $config['db']['tablePrefix'] . "CrudType";
        case EVENT = $config['db']['tablePrefix'] . "Event";
        case GENDER = $config['db']['tablePrefix'] . "Gender";
        case PERSON = $config['db']['tablePrefix'] . "Person";
        case PERSONPROPERTYROLES = $config['db']['tablePrefix'] . "PersonPropertyRoles";
        case PRODUCT = $config['db']['tablePrefix'] . "Product";
        case PROPERTY = $config['db']['tablePrefix'] . "Property";
        case PROPERTYTYPE = $config['db']['tablePrefix'] . "PropertyType";
        case ROLES = $config['db']['tablePrefix'] . "Roles";
        case ROOM = $config['db']['tablePrefix'] . "Room";
        case ROOMTYPE = $config['db']['tablePrefix'] . "RoomType";
        case USAGEDESTINATIONS = $config['db']['tablePrefix'] . "UsageDestinations";
        case USERS = $config['db']['tablePrefix'] . "Users";
    }

    function getNomeTabella(NomiTabella $nomeT): string {
        return $nomeT->value;
    }
?>
