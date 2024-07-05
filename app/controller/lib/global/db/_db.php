<?php declare(strict_types=1);

    $key = "produzione";
    if( isLocalhost() ){
        $key = "test";
    }

    $configArray = [
        'SERVERNAME_DB' => CONFIG['db'][$key]['host'] . ':' . CONFIG['db'][$key]['port'],
        'USERNAME_DB' => CONFIG['db'][$key]['username'],
        'PASSWORD_DB' => CONFIG['db'][$key]['password'],
        'DBNAME' => CONFIG['db'][$key]['database'],
        'TABLEPREFIX' => CONFIG['db']['tablePrefix'],
        'VERSTIME' => VERSTIME,
        'YEARNOW' => YEARNOW,
        'UNIQ_TOKEN' => UNIQ_TOKEN,
    ];

    // Inizializza la configurazione una volta
    define('CONFIG_ISTANCE',Config::getInstance($configArray));
?>
