<?php declare(strict_types=1);

	/**
	 *
	 * File che contiene tutte le definizioni utili nello sviluppo del Gestionale
	 *
	 * La mole di dati ha reso necessario la suddivisione in sotto-cartelle.
	 *
	 * File aggiornato il 15/07/2024
	 */

	/**
	 * Definizione CONFIG, contiene le maggiori informazioni necessari nel CRM
	 */
	define('CONFIG', [
		'site' => [
			'name' => 'Gestisci Casa',
			'name_sigla' => 'GC',
			'name_esteso' => 'CRM Gestisci Casa',
			'email_aziendale' => 'info@gestiscicasa.it',
			'email_privata' => 'malfe.lore@gmail.com',
			'autore' => 'Lorenzo Malferrari',
			'telefono' => '+39 3519325656',
			'azienda' => 'LM Servizi e Consulenze IT',
			'version' => '1.1.7',
		],
		'db' => [
			'tablePrefix' => 'lmgc_',
			'server' => [
				'locale' => [
					'version' => '1.1.34',
					'host' => '81.31.158.38',
					'port' => '3306',
					'username' => 'uij8aoin_gestiscicasa',
					'password' => '7hnv8MKFDJ7DBnvsXqH5',
					'database' => 'uij8aoin_gestiscicasa',
				],
				'test' => [
					'version' => '2.0.1',
					'host' => '81.31.158.38',
					'port' => '3306',
					'username' => 'uij8aoin_gestiscicasa',
					'password' => '7hnv8MKFDJ7DBnvsXqH5',
					'database' => 'uij8aoin_gestiscicasa',
				],
				'produzione' => [
					'version' => '2.0.1',
					'host' => '127.0.0.1',
					'port' => '3306',
					'username' => 'uij8aoin_gestiscicasa',
					'password' => '7hnv8MKFDJ7DBnvsXqH5',
					'database' => 'uij8aoin_gestiscicasa',
				],
			],
			'CrudTypes' => [
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
			'localhost' => [
				'server' => '81.31.158.38',
				'username' => 'uij8aoin',
				'password' => 'pIBqik90',
				'directory' => 'public_ftp/gc/',
			],
			'gestiscicasa.lorenzomalferrari' => [
				'server' => '81.31.158.38',
				'username' => 'uij8aoin',
				'password' => 'pIBqik90',
				'directory' => 'public_ftp/gc/',
			],
			'gestiscicasa' => [
				'server' => '81.31.158.38',
				'username' => 'uij8aoin',
				'password' => 'pIBqik90',
				'directory' => 'public_ftp/gc/',
			],
		],
		'api' => [
			'super_admin' => [
				'auth' => '0',
				'username' => 'super',
				'password' => 'LU=yA3K-#08^mFIdt;4QZaGU)',
			],
			'admin' => [
				'auth' => '1',
				'username' => 'admin',
				'password' => 'd<dW~1;2zZ@S,;7Kh#?!Lg9km',
			],
			'user_lorenzo' => [
				'auth' => '2',
				'username' => 'lorenzo',
				'password' => 'KTZF*AX_pD:3Tg[-JLlFP8c-p',
			],
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
		'role' => [
		'profile_type' => [
				1 => 'Personale',
				2 => 'Aziendale'
			],
			'role' => [],
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
			'positions' => [
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
			],
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
			'cipher' => 'aes-256-cbc',
		],
		'helpdesk' => [
			'link' => 'https://gestiscicasa.atlassian.net/jira/servicedesk/projects/AS/queues/custom/1',
		],
		'language' => [
			'it' => 'Italiano',
			'en' => 'English',
			'fr' => 'Français',
			'de' => 'Deutsch',
			'es' => 'Español',
			'pt' => 'Português',
		],
		'message' => [
			"key" => [
				'diff_vers',
			],
			"text" => [
				'diff_vers' => "Versione del database non corrispondente:<br>- Versione attuale: <strong>{current_version}</strong>.<br>- Versione attesa: <strong>{expected_version}</strong>",
			],
		],
		'log' => [
			'baseFolder' => 'public/gc_logs/',
			'subFolder' => [
				0 => 'backup',
				1 => 'logs',
			],
			'subPath' => [
				0 => 'errors',
				1 => 'logs',
			],
			'prefixFile' => [
				0 => '_day_',
				1 => '_week_',
				2 => '_month_',
				3 => '_semester_',
				4 => '_year_',
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
			'compression' => '.zip',
			'file_lock' => 'filemanager.lock',
		],
		'icons' => [
			'crm_not_working' => [
				'bi-tools',
                'bi-gear',
                'bi-gear-fill',
                'bi-gear-wide',
                'bi-gear-wide-connected',
                'bi-wrench-adjustable',
                'bi-database-fill-gear',
                'bi-database-gear',
                'bi-database-x',
                'bi-hdd-stack',
                'bi-database-slash',
                'bi-code-slash',
                'bi-code-square',
                'bi-person-fill-exclamation',
                'bi-person-fill-slash',
                'bi-person-fill-x',
                'bi-emoji-expressionless',
                'bi-emoji-expressionless-fill',
                'bi-emoji-neutral',
                'bi-emoji-neutral-fill',
                'bi-emoji-frown',
                'bi-emoji-frown-fill'
			],
		],
	]);

	//aggiunte le tipologie di hash
	require_once('sub_define/hash/_hash.php');

	//definizioni provenienti da _SERVER
	require_once('sub_define/server/_server.php');

	// DA MIGLIORARE ASSOLUTAMENTE, non per la revisione attuale
	define(
		'CRYPTO_KEY',
		CONFIG['db']['tablePrefix'] .
			CONFIG['securityConfig']['key']
	); //es. lmgc_1e2wfvdfyku65yt4efbntmyj

	/**
	 * definizioni relative al tempo come giorno, mese, anno, time()
	 */
	require_once('sub_define/time/_time.php');
	/**
	 * definizione del token CUSTOM
	 */
	require_once('sub_define/token/_token.php');

	/**
	 * Percorsi da escludere dal salvataggio delle path visitate in DB
	 */
	require_once('sub_define/folder_path/_path_escluse.php');

	/**
	 * File delle cartelle da escludere dal salvataggio delle path visitate in DB
	 */
	require_once('sub_define/folder_path/_folder_escluse.php');

	/**
	 * Le path del menù che posso essere salvate e usate per il menù "Più Usati"
	 */
	require_once('sub_define/menu_paths/_menu_paths.php');
	/**
	 * Contiene le possibili chiamate che possono essere effettuati tramite API
	 */
	require_once('sub_define/api/_api.php');

	/**
	 * Per ogni tag html 5 che può essere usato per salvare dati, vengono fornite le chiavi che posso essere usate
	 * Se la voce non presente nella definizione, non può essere usata.
	 * TO DO: Controllare che venga attivata una CUSTOM EXCEPTION dedicata
	 */
	require_once('input_type/_input_type.php');
