<?php
	class UsersTable {
		const TABLE_NAME = 'Users';

		const ID = 'id';
		const USERNAME = 'username';
		const PASSWORD = 'password';
		const TOKEN = 'TOKEN';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';
		const IS_ACTIVE = 'isActive';

		public static function getColumns()
		{
			return [
				self::ID,
				self::USERNAME,
				self::PASSWORD,
				self::TOKEN,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::IS_ACTIVE
			];
		}
	}

	class PersonTable {
		const TABLE_NAME = 'Person';

		const ID = 'id';
		const NAME = 'name';
		const SURNAME = 'surname';
		const AGE = 'age';
		const BIRTHDATE = 'birthdate';
		const CITY = 'city';
		const STATE = 'state';
		const NATIONALITY = 'nationality';
		const DESCRIPTION = 'description';
		const ID_USER = 'idUser';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';
		const EMAIL = 'email';
	}

	class BrandTable {
		const TABLE_NAME = 'Brand';

		const ID = 'id';
		const NAME = 'name';
		const COUNTRY_OF_ORIGIN = 'country_of_origin';
		const INDUSTRY_SECTOR = 'industry_sector';
		const FOUNDATION_YEAR = 'foundation_year';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';
	}

	class CatalogTable {
		const TABLE_NAME = 'Catalog';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	class CategoryTable {
		const TABLE_NAME = 'Category';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';
		const ID_COLOR = 'IdColor';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::ID_COLOR
			];
		}
	}

	class ColorsTable {
		const TABLE_NAME = 'Colors';

		const ID = 'id';
		const NAME = 'name';
		const HEX_CODE = 'hexCode';
		const RGB_CODE = 'rgbCode';
		const RGBA_CODE = 'rgbaCode';
		const HSL_CODE = 'hslCode';
		const NOTE = 'note';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::HEX_CODE,
				self::RGB_CODE,
				self::RGBA_CODE,
				self::HSL_CODE,
				self::NOTE
			];
		}
	}

	class ContinentsTable {
		const TABLE_NAME = 'Continents';

		const ID = 'id';
		const NAME = 'name';
		const POPULATION = 'population';
		const AREA_KM2 = 'area_km2';
		const DESCRIPTION = 'description';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::POPULATION,
				self::AREA_KM2,
				self::DESCRIPTION,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	class CountriesTable {
		const TABLE_NAME = 'Countries';

		const ID = 'id';
		const NAME = 'name';
		const CONTINENT_ID = 'continent_id';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::CONTINENT_ID,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	class CrudLogsTable {
		const TABLE_NAME = 'CrudLogs';

		const ID = 'id';
		const TIMESTAMP = 'timestamp';
		const MESSAGE = 'message';
		const ACTION = 'action';
		const BEFORE_STATE = 'before_state';
		const AFTER_STATE = 'after_state';
		const USER_ID = 'user_id';

		public static function getColumns() {
			return [
				self::ID,
				self::TIMESTAMP,
				self::MESSAGE,
				self::ACTION,
				self::BEFORE_STATE,
				self::AFTER_STATE,
				self::USER_ID
			];
		}
	}

	class EventTable {
		const TABLE_NAME = 'Event';

		const ID = 'id';
		const ACTION = 'action';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';

		public static function getColumns() {
			return [
				self::ID,
				self::ACTION,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	class CrudTypeTable {
		const TABLE_NAME = 'CrudType';

		const ID = 'id';
		const NAME = 'nome';
		const ACTION = 'azione';
		const VALUE = 'valore';
		const CREATION_DATE = 'data_creazione';
		const UPDATE_DATE = 'data_aggiornamento';
		const NOTE = 'note';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::ACTION,
				self::VALUE,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::NOTE
			];
		}
	}

	class GenderTable {
		const TABLE_NAME = 'Gender';

		const ID = 'id';
		const GENDER = 'gender';
		const GENDER_EN = 'gender_en';
		const GENDER_FR = 'gender_fr';
		const GENDER_ES = 'gender_es';
		const GENDER_DE = 'gender_de';
		const GENDER_PT = 'gender_pt';

		public static function getColumns() {
			return [
				self::ID,
				self::GENDER,
				self::GENDER_EN,
				self::GENDER_FR,
				self::GENDER_ES,
				self::GENDER_DE,
				self::GENDER_PT
			];
		}
	}

	class PersonPropertyRolesTable {
		const TABLE_NAME = 'PersonPropertyRoles';

		const PERSON_ID = 'personId';
		const PROPERTY_ID = 'propertyId';
		const ROLE_ID = 'roleId';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		public static function getColumns() {
			return [
				self::PERSON_ID,
				self::PROPERTY_ID,
				self::ROLE_ID,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	class UsageDestinationsTable {
		const TABLE_NAME = 'UsageDestinations';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';
		const CODE = 'code';
		const COLOR_ID = 'colorId';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::CODE,
				self::COLOR_ID
			];
		}
	}

	class RoomTypesTable {
		const TABLE_NAME = 'RoomTypes';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE,
			];
		}
	}

	class RoomsTable {
		const TABLE_NAME = 'Rooms';

		const ID = 'id';
		const NUMBER = 'number';
		const NAME = 'name';
		const ID_USAGE_DESTINATION = 'idUsageDestination';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';
		const NOTE = 'note';
		const ID_COLOR = 'idColor';
		const ID_PROPERTY = 'idProperty';
		const ID_ROOM_TYPE = 'idRoomType';

		public static function getColumns() {
			return [
				self::ID,
				self::NUMBER,
				self::NAME,
				self::ID_USAGE_DESTINATION,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::NOTE,
				self::ID_COLOR,
				self::ID_PROPERTY,
				self::ID_ROOM_TYPE,
			];
		}
	}

	class RolesTable {
		const TABLE_NAME = 'Roles';

		const ID = 'id';
		const ROLE_NAME = 'roleName';

		public static function getColumns() {
			return [
				self::ID,
				self::ROLE_NAME,
			];
		}
	}

	class PropertyTable {
		const TABLE_NAME = 'Property';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const PRICE = 'price';
		const ADDRESS = 'address';
		const ID_CITY = 'IdCity';
		const ID_STATE = 'IdState';
		const ID_PROPERTY_TYPE = 'IdPropertyType';
		const ACTIVE = 'active';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::PRICE,
				self::ADDRESS,
				self::ID_CITY,
				self::ID_STATE,
				self::ID_PROPERTY_TYPE,
				self::ACTIVE,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE,
			];
		}
	}

	class ProductTable {
		const TABLE_NAME = 'Product';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const PRICE = 'price';
		const BARCODE = 'barcode';
		const ID_BRAND = 'IdBrand';
		const ID_CATEGORY = 'IdCategory';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';

		public static function getColumns() {
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::PRICE,
				self::BARCODE,
				self::ID_BRAND,
				self::ID_CATEGORY,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE,
			];
		}
	}

	class PropertyTypeTable {
		const TABLE_NAME = 'PropertyType';

		const ID = 'id';
		const DESCRIPTION = 'description';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateData';
		const NOTES = 'notes';

		public static function getColumns() {
			return [
				self::ID,
				self::DESCRIPTION,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::NOTES,
			];
		}
	}

	class VersioniDBTable
	{
		const TABLE_NAME = 'VersioniDB';

		const ID = 'id';
		const VERSIONE = 'versione';
		const NOME_VERS_ESTESA = 'nome_vers_estesa';
		const NOTE = 'note';
		const DATA_CREAZIONE = 'data_creazione';
		const DATA_AGGIORNAMENTO = 'data_aggiornamento';

		public static function getColumns()
		{
			return [
				self::ID,
				self::VERSIONE,
				self::NOME_VERS_ESTESA,
				self::NOTE,
				self::DATA_CREAZIONE,
				self::DATA_AGGIORNAMENTO,
			];
		}
	}

	class UsersPropertyTable
	{
		const TABLE_NAME = 'UsersProperty';

		const ID_PERSON = 'idPerson';
		const ID_PROPERTY = 'idProperty';
		const ID_ROLE = 'idRole';

		public static function getColumns()
		{
			return [
				self::ID_PERSON,
				self::ID_PROPERTY,
				self::ID_ROLE,
			];
		}

	}
	class PathVisitatedTable
	{
		const TABLE_NAME = 'PathVisitated';

		const ID = 'id';
		const PATH = 'path';
		const ID_USER = 'idUser';
		const COUNT = 'count';

		public static function getColumns()
		{
			return [
				self::ID,
				self::PATH,
				self::ID_USER,
				self::COUNT,
			];
		}
	}

	class NationalitiesTable
	{
		const TABLE_NAME = 'Nationalities';

		const ID = 'id';
		const NAME = 'name';
		const NAME_ITALIAN = 'name_italian';
		const NAME_FRENCH = 'name_french';
		const NAME_SPANISH = 'name_spanish';
		const NAME_GERMAN = 'name_german';
		const NAME_PORTUGUESE = 'name_portuguese';
		const NOTE = 'note';
		const CREATION_DATE = 'creation_date';
		const UPDATE_DATE = 'update_date';

		public static function getColumns()
		{
			return [
				self::ID,
				self::NAME,
				self::NAME_ITALIAN,
				self::NAME_FRENCH,
				self::NAME_SPANISH,
				self::NAME_GERMAN,
				self::NAME_PORTUGUESE,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE,
			];
		}
	}
?>
