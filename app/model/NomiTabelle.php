<?php
    require_once(ROOT . 'app/controller/lib/_config.php');
    require_once(ROOT . 'app/controller/lib/_db.php');

    enum NomiTabella: string {
        case BRAND = $TABLEPREFIX . "Brand";
        case CATALOG = $TABLEPREFIX . "Catalog";
        case CATEGORY = $TABLEPREFIX . "Category";
        case COLORS = $TABLEPREFIX . "Colors";
        case CONTINENTS = $TABLEPREFIX . "Continents";
        case COUNTRIES = $TABLEPREFIX . "Countries";
        case CRUDLOGS = $TABLEPREFIX . "CrudLogs";
        case CRUDTYPE = $TABLEPREFIX . "CrudType";
        case EVENT = $TABLEPREFIX . "Event";
        case GENDER = $TABLEPREFIX . "Gender";
        case PERSON = $TABLEPREFIX . "Person";
        case PERSONPROPERTYROLES = $TABLEPREFIX . "PersonPropertyRoles";
        case PRODUCT = $TABLEPREFIX . "Product";
        case PROPERTY = $TABLEPREFIX . "Property";
        case PROPERTYTYPE = $TABLEPREFIX . "PropertyType";
        case ROLES = $TABLEPREFIX . "Roles";
        case ROOM = $TABLEPREFIX . "Room";
        case ROOMTYPE = $TABLEPREFIX . "RoomType";
        case USAGEDESTINATIONS = $TABLEPREFIX . "UsageDestinations";
        case USERS = $TABLEPREFIX . "Users";
    }

    function getNomeTabella(NomiTabella $nomeT): string {
        return $nomeT->value;
    }
?>
