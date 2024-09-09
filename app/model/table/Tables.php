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
	 * Class representing the 'CrudTypess' table.
	 */
	class CrudTypesTable
	{
		const TABLE_NAME = 'CrudTypess';

		const ID = 'id';
		const NAME = 'nome';
		const ACTION = 'azione';
		const VALUE = 'valore';
		const CREATION_DATE = 'data_creazione';
		const UPDATE_DATE = 'data_aggiornamento';
		const NOTE = 'note';

		/**
		 * Get the list of columns for the CrudTypess table.
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
				self::PEOPLE_ID,
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
		const ID_ROOM_TYPE = 'idRoomTypes';

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
		const ID_PropertyTypes = 'IdPropertyTypes';
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
				self::ID_PropertyTypes,
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
	 * Class representing the 'VersionDB' table.
	 */
	class VersionDBTable
	{
		const TABLE_NAME = 'VersionDB';

		const ID = 'id';
		const VERSIONE = 'versione';
		const NOME_VERS_ESTESA = 'nome_vers_estesa';
		const NOTE = 'note';
		const DATA_CREAZIONE = 'data_creazione';
		const DATA_AGGIORNAMENTO = 'data_aggiornamento';

		/**
		 * Get the list of columns for the VersionDB table.
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

	class ProfileTypesTable
	{
		const TABLE_NAME = 'ProfileTypes';

		const ID = 'id';
		const CODE = 'code';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const CREATION_DATE = 'creationDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the ProfileTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::CODE,
				self::DESCRIPTION,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class LanguagesTable
	 *
	 * Represents the structure and columns of the languages table.
	 */
	class LanguagesTable
	{
		const TABLE_NAME = 'languages';

		const ID = 'id';
		const CODE_2 = 'code_2';
		const CODE_3 = 'code_3';
		const CODE_639_3 = 'code_639_3';
		const NAME = 'name';
		const NATIVE_NAME = 'native_name';
		const RTL = 'rtl';
		const REGION = 'region';
		const ISO_3166_ALPHA2 = 'iso_3166_alpha2';
		const ISO_3166_ALPHA3 = 'iso_3166_alpha3';
		const CURRENCY_CODE = 'currency_code';
		const NOTES = 'notes';
		const CREATION_DATE = 'creation_date';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the languages table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::CODE_2,
				self::CODE_3,
				self::CODE_639_3,
				self::NAME,
				self::NATIVE_NAME,
				self::RTL,
				self::REGION,
				self::ISO_3166_ALPHA2,
				self::ISO_3166_ALPHA3,
				self::CURRENCY_CODE,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class SupportedLanguagesTable
	 *
	 * Represents the structure and columns of the supported_languages table.
	 */
	class SupportedLanguagesTable
	{
		const TABLE_NAME = 'supported_languages';

		const ID = 'id';
		const LANGUAGE_ID = 'language_id';
		const NAME = 'name';
		const CREATION_DATE = 'creation_date';
		const UPDATE_DATE = 'update_date';
		const NOTES = 'notes';
		const IS_ACTIVE = 'isActive';

		/**
		 * Get the list of columns for the supported_languages table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::LANGUAGE_ID,
				self::NAME,
				self::CREATION_DATE,
				self::UPDATE_DATE,
				self::NOTES,
				self::IS_ACTIVE
			];
		}
	}

	/**
	 * Class TranslationsTable
	 *
	 * Represents the structure and columns of the translations table.
	 */
	class TranslationsTable
	{
		const TABLE_NAME = 'translations';

		const ID = 'id';
		const LANGUAGE_ID = 'language_id';
		const KEY = 'key';
		const VALUE = 'value';
		const CREATED_AT = 'created_at';
		const UPDATED_AT = 'updated_at';
		const NOTES = 'notes';

		/**
		 * Get the list of columns for the translations table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::LANGUAGE_ID,
				self::KEY,
				self::VALUE,
				self::CREATED_AT,
				self::UPDATED_AT,
				self::NOTES
			];
		}
	}

	/**
	 * Class InfoProfileTypes
	 *
	 * Represents the structure and columns of the InfoProfileTypes table.
	 */
	class InfoProfileTypesTable
	{
		const TABLE_NAME = 'InfoProfileTypes';

		const ID = 'id';
		const PLAN = 'plan';
		const IDPROFILETYPES = 'idProfileTypes';
		const DESCRIPTION = 'description';
		const NOTES = 'notes';
		const CREATION_DATE = 'creation_date';
		const UPDATE_DATE = 'update_date';

		/**
		 * Get the list of columns for the translations table.
		 *
		 * @return array List of column names.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::PLAN,
				self::IDPROFILETYPES,
				self::DESCRIPTION,
				self::NOTES,
				self::CREATION_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class PropertyTypesCategoriesTable
	 *
	 * This class defines the structure of the table 'lmgc_PropertyTypesCategories' with constants for columns.
	 */
	class PropertyTypesCategoriesTable
	{
		const TABLE_NAME = 'lmgc_PropertyTypesCategories';

		const ID = 'id';
		const CATEGORY = 'category';
		const NOTES = 'notes';
		const CREATE_DATE = 'createDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the PropertyTypesCategories table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::CATEGORY,
				self::NOTES,
				self::CREATE_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Class PropertyTypesTable
	 *
	 * This class defines the structure of the table 'lmgc_PropertyTypes' with constants for columns.
	 */
	class PropertyTypesTable
	{
		const TABLE_NAME = 'lmgc_PropertyTypes';

		const ID = 'id';
		const TYPE_NAME = 'type_name';
		const CATEGORY_ID = 'category_id';
		const NOTES = 'notes';
		const CREATE_DATE = 'createDate';
		const UPDATE_DATE = 'updateDate';

		/**
		 * Get the list of columns for the PropertyTypes table.
		 *
		 * @return array List of column names
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::TYPE_NAME,
				self::CATEGORY_ID,
				self::NOTES,
				self::CREATE_DATE,
				self::UPDATE_DATE
			];
		}
	}

	/**
	 * Classe RoomTypesTable
	 *
	 * Rappresenta la tabella 'lmgc_RoomTypes' con le colonne come costanti.
	 */
	class RoomTypesTable
	{
		// Costanti che rappresentano i nomi delle colonne della tabella lmgc_RoomTypes
		public const ID = 'id';
		public const CODICE = 'codice';
		public const NOME = 'nome';
		public const COLORE = 'colore';
		public const NOTE = 'note';
		public const CREATE_DATE = 'createDate';
		public const UPDATE_DATE = 'updateDate';

		/**
		 * Restituisce tutte le colonne della tabella lmgc_RoomTypes.
		 *
		 * @return array Le colonne della tabella.
		 */
		public static function getColumns(): array
		{
			return [
				self::ID,
				self::CODICE,
				self::NOME,
				self::COLORE,
				self::NOTE,
				self::CREATE_DATE,
				self::UPDATE_DATE
			];
		}
	}
