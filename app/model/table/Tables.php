<?php declare(strict_types=1);

	/**
	 * Class representing the 'Users' table.
	 */
	class UsersTable
	{
		const TABLE_NAME = 'Users';

		const ID = 'id';
		const USERNAME = 'username';
		const PASSWORD = 'password';
		const TOKEN = 'TOKEN';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';
		const IS_ACTIVE = 'isActive';

		/**
		 * Get the list of columns for the Users table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
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

	/**
	 * Class representing the 'People' table.
	 */
	class PersonTable
	{
		const TABLE_NAME = 'People';

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
		const UPDATE_DATE = 'updateDate';
		const EMAIL = 'email';
		const ID_GENDER = 'idGender';

		/**
		 * Get the list of columns for the People table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::SURNAME,
				self::AGE,
				self::BIRTHDATE,
				self::CITY,
				self::STATE,
				self::NATIONALITY,
				self::DESCRIPTION,
				self::ID_USER,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::EMAIL,
				self::ID_GENDER
			];
		}
	}

	/**
	 * Class representing the 'Brands' table.
	 */
	class BrandTable
	{
		const TABLE_NAME = 'Brands';

		const ID = 'id';
		const NAME = 'name';
		const COUNTRY_OF_ORIGIN = 'country_of_origin';
		const INDUSTRY_SECTOR = 'industry_sector';
		const FOUNDATION_YEAR = 'foundation_year';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Brands table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::COUNTRY_OF_ORIGIN,
				self::INDUSTRY_SECTOR,
				self::FOUNDATION_YEAR,
				self::NOTE,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class representing the 'Catalogs' table.
	 */
	class CatalogTable
	{
		const TABLE_NAME = 'Catalogs';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Catalogs table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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

	/**
	 * Class representing the 'Categories' table.
	 */
	class CategoryTable
	{
		const TABLE_NAME = 'Categories';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';
		const ID_COLOR = 'IdColor';

		/**
		 * Get the list of columns for the Categories table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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

	/**
	 * Class representing the 'Colors' table.
	 */
	class ColorsTable
	{
		const TABLE_NAME = 'Colors';

		const ID = 'id';
		const NAME = 'name';
		const HEX_CODE = 'hexCode';
		const RGB_CODE = 'rgbCode';
		const RGBA_CODE = 'rgbaCode';
		const HSL_CODE = 'hslCode';
		const NOTE = 'note';

		/**
		 * Get the list of columns for the Colors table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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

	/**
	 * Class representing the 'Continents' table.
	 */
	class ContinentsTable
	{
		const TABLE_NAME = 'Continents';

		const ID = 'id';
		const NAME = 'name';
		const POPULATION = 'population';
		const AREA_KM2 = 'area_km2';
		const DESCRIPTION = 'description';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Continents table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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

	/**
	 * Class representing the 'Countries' table.
	 */
	class CountriesTable
	{
		const TABLE_NAME = 'Countries';

		const ID = 'id';
		const NAME = 'name';
		const CONTINENT_ID = 'continent_id';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Countries table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::CONTINENT_ID,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class representing the 'CrudLogs' table.
	 */
	class CrudLogsTable
	{
		const TABLE_NAME = 'CrudLogs';

		const ID = 'id';
		const TIMESTAMP = 'timestamp';
		const MESSAGE = 'message';
		const ACTION = 'action';
		const BEFORE_STATE = 'before_state';
		const AFTER_STATE = 'after_state';
		const USER_ID = 'user_id';

		/**
		 * Get the list of columns for the CrudLogs table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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

	/**
	 * Class representing the 'Events' table.
	 */
	class EventTable
	{
		const TABLE_NAME = 'Events';

		const ID = 'id';
		const ACTION = 'action';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Events table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::ACTION,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class representing the 'CrudTypes' table.
	 */
	class CrudTypeTable
	{
		const TABLE_NAME = 'CrudTypes';

		const ID = 'id';
		const NAME = 'nome';
		const ACTION = 'azione';
		const VALUE = 'valore';
		const CREATION_DATE = 'data_creazione';
		const UPDATE_DATE = 'data_aggiornamento';
		const NOTE = 'note';

		/**
		 * Get the list of columns for the CrudTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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

	/**
	 * Class representing the 'Genders' table.
	 */
	class GenderTable
	{
		const TABLE_NAME = 'Genders';

		const ID = 'id';
		const GENDER_IT = 'gender_it';
		const GENDER_EN = 'gender_en';
		const GENDER_FR = 'gender_fr';
		const GENDER_ES = 'gender_es';
		const GENDER_DE = 'gender_de';
		const GENDER_PT = 'gender_pt';
		const NOTE = 'note';
		const CREATED_AT = 'created_at';
		const UPDATED_AT = 'updated_at';

		/**
		 * Get the list of columns for the Genders table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::GENDER_IT,
				self::GENDER_EN,
				self::GENDER_FR,
				self::GENDER_ES,
				self::GENDER_DE,
				self::GENDER_PT,
				self::NOTE,
				self::CREATED_AT,
				self::UPDATED_AT
			];
		}
	}

	/**
	 * Class representing the 'PersonPropertyRoles' table.
	 */
	class PersonPropertyRolesTable
	{
		const TABLE_NAME = 'PersonPropertyRoles';

		const PERSON_ID = 'personId';
		const PROPERTY_ID = 'propertyId';
		const ROLE_ID = 'roleId';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the PersonPropertyRoles table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::PERSON_ID,
				self::PROPERTY_ID,
				self::ROLE_ID,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class representing the 'UsageDestinations' table.
	 */
	class UsageDestinationsTable
	{
		const TABLE_NAME = 'UsageDestinations';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';
		const CODE = 'code';
		const COLOR_ID = 'colorId';

		/**
		 * Get the list of columns for the UsageDestinations table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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

	/**
	 * Class representing the 'RoomTypes' table.
	 */
	class RoomTypesTable
	{
		const TABLE_NAME = 'RoomTypes';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the RoomTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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

	/**
	 * Class representing the 'Rooms' table.
	 */
	class RoomsTable
	{
		const TABLE_NAME = 'Rooms';

		const ID = 'id';
		const NUMBER = 'number';
		const NAME = 'name';
		const ID_USAGE_DESTINATION = 'idUsageDestination';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';
		const NOTE = 'note';
		const ID_COLOR = 'idColor';
		const ID_PROPERTY = 'idProperty';
		const ID_ROOM_TYPE = 'idRoomType';

		/**
		 * Get the list of columns for the Rooms table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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
				self::ID_ROOM_TYPE
			];
		}
	}

	/**
	 * Class representing the 'Roles' table.
	 */
	class RolesTable
	{
		const TABLE_NAME = 'Roles';

		const ID = 'id';
		const ROLE_NAME = 'roleName';

		/**
		 * Get the list of columns for the Roles table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::ROLE_NAME
			];
		}
	}

	/**
	 * Class representing the 'Properties' table.
	 */
	class PropertyTable
	{
		const TABLE_NAME = 'Properties';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const PRICE = 'price';
		const ADDRESS = 'address';
		const ID_CITY = 'IdCity';
		const ID_STATE = 'IdState';
		const ID_PROPERTYTYPE = 'IdPropertyType';
		const ACTIVE = 'active';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Properties table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::NAME,
				self::DESCRIPTION,
				self::PRICE,
				self::ADDRESS,
				self::ID_CITY,
				self::ID_STATE,
				self::ID_PROPERTYTYPE,
				self::ACTIVE,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class representing the 'Products' table.
	 */
	class ProductTable
	{
		const TABLE_NAME = 'Products';

		const ID = 'id';
		const NAME = 'name';
		const DESCRIPTION = 'description';
		const PRICE = 'price';
		const BARCODE = 'barcode';
		const ID_BRAND = 'IdBrand';
		const ID_CATEGORY = 'IdCategory';
		const NOTE = 'note';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the Products table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
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
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class representing the 'PropertyTypes' table.
	 */
	class PropertyTypeTable
	{
		const TABLE_NAME = 'PropertyTypes';

		const ID = 'id';
		const DESCRIPTION = 'description';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';
		const NOTES = 'notes';

		/**
		 * Get the list of columns for the PropertyTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::DESCRIPTION,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::NOTES
			];
		}
	}

	/**
	 * Class representing the 'VersionDBs' table.
	 */
	class VersionDBTable
	{
		const TABLE_NAME = 'VersionDBs';

		const ID = 'id';
		const VERSIONE = 'versione';
		const NOME_VERS_ESTESA = 'nome_vers_estesa';
		const NOTE = 'note';
		const DATA_CREAZIONE = 'data_creazione';
		const DATA_AGGIORNAMENTO = 'data_aggiornamento';

		/**
		 * Get the list of columns for the VersionDBs table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::VERSIONE,
				self::NOME_VERS_ESTESA,
				self::NOTE,
				self::DATA_CREAZIONE,
				self::DATA_AGGIORNAMENTO
			];
		}
	}

	/**
	 * Class representing the 'UsersProperties' table.
	 */
	class UsersPropertyTable
	{
		const TABLE_NAME = 'UsersProperties';

		const ID_PERSON = 'idPerson';
		const ID_PROPERTY = 'idProperty';
		const ID_ROLE = 'idRole';

		/**
		 * Get the list of columns for the UsersProperties table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID_PERSON,
				self::ID_PROPERTY,
				self::ID_ROLE
			];
		}
	}

	/**
	 * Class representing the 'PathVisitated' table.
	 */
	class PathVisitatedTable
	{
		const TABLE_NAME = 'PathVisitated';

		const ID = 'id';
		const PATH = 'path';
		const ID_USER = 'idUser';
		const COUNT = 'count';

		/**
		 * Get the list of columns for the PathVisitated table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::PATH,
				self::ID_USER,
				self::COUNT
			];
		}
	}

	/**
	 * Class representing the 'Nationalities' table.
	 */
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

		/**
		 * Get the list of columns for the Nationalities table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
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
				self::UPDATE_DATE
			];
		}
	}