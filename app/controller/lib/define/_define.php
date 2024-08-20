<?php declare(strict_types=1);

	/**
	 * File dove definisco alcune VARIABILI GLOBALI CUSTOM
	 */
	define("HTTP_HOST", $_SERVER["HTTP_HOST"]);
	//echo "<br>HTTP_HOST:" . HTTP_HOST;
	define("PROTOCOL", $_SERVER["REQUEST_SCHEME"]); //es. http vs https
	//echo "<br>PROTOCOL:" . PROTOCOL;
	define("EMAIL_SERVER_ADMIN", $_SERVER["SERVER_ADMIN"] . "/");
	//echo "<br>EMAIL_SERVER_ADMIN_" . EMAIL_SERVER_ADMIN;
	define("DOMINIO", $_SERVER["SERVER_NAME"]); //es. gestiscicasa.it
	//echo "<br>DOMINIO:" . DOMINIO;
	define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
	//echo "<br>ROOT:" . ROOT;
	define("PATH", PROTOCOL . "://" . DOMINIO . "/");
	//echo "<br>PATH:" . PATH;

	define('CONFIG', [
		'site' => [
			'name' => 'Gestisci Casa',
			'name_sigla' => 'GC',
			'name_esteso' => 'CRM Gestisci Casa',
			'email' => 'info@gestiscicasa.it',
			'autore' => 'Lorenzo Malferrari',
			'telefono' => '+39 3519325656',
			'azienda' => 'LM Servizi e Consulenze IT',
			'version' => '0.0.1',
		],
		'db' => [
			'tablePrefix' => 'lmgc_',
			'test' => [
				'version' => '1.1.20',
				'host' => '81.31.158.38',
				'port' => '3306',
				'username' => 'uij8aoin_gestiscicasa',
				'password' => '7hnv8MKFDJ7DBnvsXqH5',
				'database' => 'uij8aoin_gestiscicasa',
			],
			'produzione' => [
				'version' => '0.0.1',
				'host' => '127.0.0.1',
				'port' => '3306',
				'username' => 'uij8aoin_gestiscicasa',
				'password' => '7hnv8MKFDJ7DBnvsXqH5',
				'database' => 'uij8aoin_gestiscicasa',
			],
			'crudType' => [
				'INSERT' => 1,
				'SELECT' => 2,
				'UPDATE' => 3,
				'DELETE' => 4,
			],
			'update' => [
				'create' => 'public/_dati/db/create_db/',
				'step' => 'public/_dati/db/update_step',
			],
		],
		'ftp' => [
			'server' => '81.31.158.38',
			'username' => 'uij8aoin',
			'password' => 'pIBqik90',
			'directory' => 'public_ftp/gc/',
		],
		'email' => [
			'smtp' => [
				'server' => 'mail.lorenzomalferrari.com',
				'port' => 465, // 465 o 587
				'user' => 'welcome@lorenzomalferrari.com',
				'pass' => 'M0Eqc_n%,c!0Lw!_5Uhj2}Trv',
				'encryption' => 'ssl', // 'ssl' per SSL, 'tls' per TLS
				'confirm' => '/confirm.php',
			],
		],
		'session' => [
			'keys' => [
				'IDUSER' => 'IDUSER',
				'USERNAME' => 'USERNAME',
				'PASSWORD' => 'PASSWORD',
				'EMAIL' => 'EMAIL',
				'TOKEN' => 'TOKEN',
				'LAST_ACTIVITY' => 'LAST_ACTIVITY',
			],
			'settings' => [
				'gc_maxlifetime' => '900', // 15 minuti
				'cookie_lifetime' => '0',
				'inactivityLimit' => '900', // solitamente uguale a gc_maxlifetime
			],
		],
		'token' => [
			'settings' => [
				'gc_maxlifetime' => '900', // 15 minuti
				'cookie_lifetime' => '0',
				'inactivityLimit' => '900', // solitamente uguale a gc_maxlifetime
			],
		],
		'serverConfig' => [
			'ip' => '127.0.0.1',
			'port' => '8080'
		],
		'applicationConfig' => [
			'baseUrl' => 'https://example.com',
			'language' => 'it-IT'
		],
		'securityConfig' => [
			'key' => 'vqP7WjUJCe58^tS!9YPd2TzL#HfG6@bM',
		],
		'language' => [
			'it' => 'Italiano',
			'en' => 'English',
			'fr' => 'Français',
			'de' => 'Deutsch',
			'es' => 'Español',
			'pt' => 'Português',
		],
		'log' => [
			'baseFolder' => 'gc_logs',
			'subFolder' => [
				0 => 'backup',
				1 => 'logs',
			],
			'subPath' => [
				0 => 'errors',
				1 => 'logs',
			],
			'prefixFile' => [
				0 => 'day_',
				1 => 'week_',
				2 => 'month_',
				3 => 'semester_',
				4 => 'year_',
			],
			'nome' => [
				'file' => 'file',
				'error' => 'error',
				'database' => 'database',
				'ip' => 'ip',
				'api' => 'api',
				'performance' => 'server',
				'user' => 'user',
				'email' => 'email',
			],
			'extension' => '.gc',
		],
	]);

	// Chiave per la crittografia composta da voci interne
	//VEDERE SE AGGIUNGERE ULTERIORI CAMPI
	define(
		'CRYPTO_KEY',
		CONFIG['db']['tablePrefix'] .
			CONFIG['securityConfig']['key']
	); //es. lmgc_1e2wfvdfyku65yt4efbntmyj

	/**
	 * Recupero il time nel momento in cui carico la pagina:
	 *      - utile per js e css;
	 *      - controllo durata sessione (in implementazione)
	 */
	define('VERSTIME', time());

	/**
	 *
	 * Anno, Mese e Giorno salvati in delle definizioni
	 *
	 */
	define('YEARNOW', date('Y'));
	define('MONTH', date('m'));
	define('DAY', date('d'));

	/**
	 * Da migliorare, usando la classe Token che è in sviluppo
	 */
	define('UNIQ_TOKEN', uniqid());

	/**
	 * Percorsi da escludere dal salvataggio delle path visitate in DB
	 */
	define('PATH_ESCLUSE', [
		'/index.php',
		'/confirm.php',
		'/server_in_manutenzione.php',
		'/app/view/login.php',
		'/app/view/home.php',
		'/app/view/pricing.php',
		'/app/view/registration.php',
		'/app/view/reset_psw.php',
		'/app/view/welcome.php',
	]);

	/**
	 * Path delle voci del menu
	 */
	define('MENU_PATHS', [
		'home' => '/app/view/home.php',
		'login' => '/app/view/login.php',
		'pricing' => '/app/view/pricing.php',
		'properties' => '/app/view/lists/properties_list.php',
		'registration' => '/app/view/registration.php',
		'reset_psw' => '/app/view/reset_psw.php',
		'users' => '/app/view/lists/users_list.php',
		'welcome' => '/app/view/welcome.php',
		'nazionalities' => '/app/view/lists/nazionalities_list.php'
	]);

	/**
	 * Contiene le possibili chiamate gestite dal'api
	 */
	define('API', [
		'CREATE_DB' => 'create_db',
		'UPDATE_DB' => 'update_db',
		'DELETE_DB' => 'delete_db',
		'SEND_LOGS' => 'send_log',
		'RESEND_EMAILS' => 'resend_emails',
		'IMPORT_USERS' => 'import_users',
		'IMPORT_PROPERTIES' => 'import_properties',
		'DOWNLOAD_USERS' => 'download_users',
		'DOWNLOAD_PROPERTIES' => 'download_properties',
	]);

	/**
	 * Per ogni tag html che può essere usato per salvare dati, vengono fornite le chiavi che posso essere usate
	 * Se voce non presente in chiave, non può essere usata
	 */
	define('INPUT_TYPE', [
		"input" => [
			"text" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"placeholder",
					"required",
					"readonly",
					"disabled",
					"maxlength",
					"minlength",
					"pattern",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="text" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"password" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"placeholder",
					"required",
					"readonly",
					"disabled",
					"maxlength",
					"minlength",
					"pattern",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="password" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"email" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"placeholder",
					"required",
					"readonly",
					"disabled",
					"maxlength",
					"minlength",
					"pattern",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="email" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"number" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"placeholder",
					"required",
					"readonly",
					"disabled",
					"maxlength",
					"minlength",
					"min",
					"max",
					"step",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="number" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" min="" max="" step="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"range" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"placeholder",
					"required",
					"readonly",
					"disabled",
					"min",
					"max",
					"step",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="range" id="" class="" name="" value="" placeholder="" required readonly disabled min="" max="" step="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"tel" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"placeholder",
					"required",
					"readonly",
					"disabled",
					"maxlength",
					"minlength",
					"pattern",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="tel" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"url" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"placeholder",
					"required",
					"readonly",
					"disabled",
					"maxlength",
					"minlength",
					"pattern",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="url" id="" class="" name="" value="" placeholder="" required readonly disabled maxlength="" minlength="" pattern="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"date" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"required",
					"readonly",
					"disabled",
					"min",
					"max",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="date" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"time" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"required",
					"readonly",
					"disabled",
					"min",
					"max",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="time" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"datetime-local" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"required",
					"readonly",
					"disabled",
					"min",
					"max",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="datetime-local" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"month" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"required",
					"readonly",
					"disabled",
					"min",
					"max",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="month" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"week" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"required",
					"readonly",
					"disabled",
					"min",
					"max",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="week" id="" class="" name="" value="" required readonly disabled min="" max="" autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"color" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"required",
					"readonly",
					"disabled",
					"autocomplete",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange",
					"onfocus",
					"onblur"
				],
				"model" => '<input type="color" id="" class="" name="" value="" required readonly disabled autocomplete="" onclick="" onchange="" onfocus="" onblur="">'
			],
			"checkbox" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"required",
					"readonly",
					"disabled",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange"
				],
				"model" => '<input type="checkbox" id="" class="" name="" value="" required readonly disabled onclick="" onchange="">'
			],
			"radio" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"required",
					"readonly",
					"disabled",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange"
				],
				"model" => '<input type="radio" id="" class="" name="" value="" required readonly disabled onclick="" onchange="">'
			],
			"file" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"required",
					"disabled",
					"multiple",
					"custom" => []
				],
				"js_functions" => [
					"onclick",
					"onchange"
				],
				"model" => '<input type="file" id="" class="" name="" required disabled multiple onclick="" onchange="">'
			],
			"hidden" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"custom" => []
				],
				"model" => '<input type="hidden" id="" class="" name="" value="">'
			]
		],
		"textarea" => [
			"attributes" => [
				"id",
				"name",
				"class",
				"value",
				"placeholder",
				"required",
				"readonly",
				"disabled",
				"maxlength",
				"minlength",
				"custom" => []
			],
			"js_functions" => [
				"onclick",
				"onchange",
				"onfocus",
				"onblur"
			],
			"model" => '<textarea id="" class="" name="" placeholder="" required readonly disabled maxlength="" minlength="" onclick="" onchange="" onfocus="" onblur=""></textarea>'
		],
		"select" => [
			"attributes" => [
				"id",
				"name",
				"class",
				"required",
				"disabled",
				"multiple",
				"custom" => []
			],
			"js_functions" => [
				"onclick",
				"onchange"
			],
			"model" => '<select id="" class="" name="" required disabled multiple onclick="" onchange=""></select>'
		],
		"button" => [
			"submit" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"disabled",
					"custom" => []
				],
				"js_functions" => [
					"onclick"
				],
				"model" => '<button type="submit" id="" class="" name="" value="" disabled onclick=""></button>'
			],
			"reset" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"value",
					"disabled",
					"custom" => []
				],
				"js_functions" => [
					"onclick"
				],
				"model" => '<button type="reset" id="" class="" name="" value="" disabled onclick=""></button>'
			],
			"button" => [
				"attributes" => [
					"id",
					"name",
					"class",
					"type",
					"value",
					"disabled",
					"custom" => []
				],
				"js_functions" => [
					"onclick"
				],
				"model" => '<button type="button" id="" class="" name="" type="" value="" disabled onclick=""></button>'
			]
		],
		"datalist" => [
			"attributes" => [
				"id",
				"class",
				"custom" => []
			],
			"model" => '<datalist id="" class="" onclick="" onchange=""></datalist>'
		],
		"output" => [
			"attributes" => [
				"id",
				"name",
				"class",
				"custom" => []
			],
			"js_functions" => [
				"onclick"
			],
			"model" => '<output id="" class="" name="" onclick=""></output>'
		],
		"meter" => [
			"attributes" => [
				"id",
				"name",
				"class",
				"value",
				"min",
				"max",
				"low",
				"high",
				"optimum",
				"custom" => []
			],
			"js_functions" => [
				"onclick"
			],
			"model" => '<meter id="" class="" name="" value="" min="" max="" low="" high="" optimum="" onclick=""></meter>'
		],
		"progress" => [
			"attributes" => [
				"id",
				"value",
				"class",
				"max",
				"custom" => []
			],
			"js_functions" => [
				"onclick"
			],
			"model" => '<progress id="" class="" value="" max="" onclick=""></progress>'
		]
	]);
?>
