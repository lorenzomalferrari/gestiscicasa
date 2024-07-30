<?php declare(strict_types=1);

	/**
     * File dove definisco alcune VARIABILI GLOBALI CUSTOM
     */
    define("HTTP_HOST", $_SERVER["HTTP_HOST"]);
    //echo "<br>HTTP_HOST:" . HTTP_HOST;
    define("PROTOCOL", $_SERVER["REQUEST_SCHEME"]);//es. http vs https
    //echo "<br>PROTOCOL:" . PROTOCOL;
    define("EMAIL_SERVER_ADMIN", $_SERVER["SERVER_ADMIN"] . "/");
    //echo "<br>EMAIL_SERVER_ADMIN_" . EMAIL_SERVER_ADMIN;
    define("DOMINIO", $_SERVER["SERVER_NAME"]); //es. gestiscicasa.it
    //echo "<br>DOMINIO:" . DOMINIO;
    define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
    //echo "<br>ROOT:" . ROOT;
    define("PATH", PROTOCOL ."://" . DOMINIO . "/");
    //echo "<br>PATH:" . PATH;

	define('CONFIG', [
		'site' => [
			'name' => 'Gestisci Casa',
			'name_sigla' => 'GC',
			'name_esteso' => 'CRM Gestisci Casa',
			'autore' => 'Lorenzo Malferrari',
			'azienda' => 'LM Servizi e Consulenze IT',
			'version' => '1.0.1',
		],
		'db' => [
			'tablePrefix' => 'lmgc_',
			'test' => [
				'version' => '1.0.0',
				'host' => '81.31.158.38',
				'port' => '3306',
				'username' => 'uij8aoin_gestiscicasa',
				'password' => '20Progetto24',
				'database' => 'uij8aoin_gestiscicasa',
			],
			'produzione' => [
				'version' => '1.0.0',
				'host' => '127.0.0.1',
				'port' => '3306',
				'username' => 'uij8aoin_gestiscicasa',
				'password' => '20Progetto24',
				'database' => 'uij8aoin_gestiscicasa',
			],
			'crudType' => [
				'INSERT' => 1,
				'SELECT' => 2,
				'UPDATE' => 3,
				'DELETE' => 4,
			]
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
			'en' => 'Inglese'
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
	define('YEARNOW', date("Y"));
	define('MONTH', date('m'));
	define('DAY',date('d'));

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
	 *
	 */
	define('MENU_PATHS', [
		'home' => '/app/view/home.php',
		'login' => '/app/view/login.php',
		'pricing' => '/app/view/pricing.php',
		'properties' => '/app/view/properties_list.php',
		'registration' => '/app/view/registration.php',
		'reset_psw' => '/app/view/reset_psw.php',
		'users' => '/app/view/users_list.php',
		'welcome' => '/app/view/welcome.php',
	]);

	define('API', [
		'UPDATE_DB' => 'update_db',
		'SEND_LOGS' => 'send_log',
		'RESEND_EMAILS' => 'resend_emails',
		'IMPORT_USERS' => 'import_users',
		'IMPORT_PROPERTIES' => 'import_properties',
		'DOWNLOAD_USERS' => 'download_users',
		'DOWNLOAD_PROPERTIES' => 'download_properties',
	]);
?>
