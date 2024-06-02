<?php
	$config = [
		'site' => [
			'name' => 'Gestisci Casa',
			'name_esteso' => 'CRM Gestisci Casa',
			'autore' => 'Lorenzo Malferrari',
			'azienda' => 'LM Servizi e Consulenze IT',
			'version' => '1.0.1',
		],
		'db' => [
			'tablePrefix' => 'lmgc_',
			'version' => '1.0.0',
			'host' => '81.31.158.38',
			'port' => '3306',
			'username' => 'uij8aoin_gestiscicasa',
			'password' => '20Progetto24',
			'database' => 'uij8aoin_gestiscicasa',
		],
		'session' => [
			'keys'  => [
				'IDUSER',
				'USERNAME',
				'PASSWORD',
				'EMAIL',
				'TOKEN',
				'LAST_ACTIVITY',
			],
			'settings' => [
				'gc_maxlifetime' => 900, //15 minuti
				'cookie_lifetime' => 0,
				'inactivityLimit' => 900, // solitamente uguale a gc_maxlifetime
			],
		],
		'token' => [
			'settings' => [
				'gc_maxlifetime' => 900, //15 minuti
				'cookie_lifetime' => 0,
				'inactivityLimit' => 900, // solitamente uguale a gc_maxlifetime
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
		'lenguage' => [
		],
	];
?>
