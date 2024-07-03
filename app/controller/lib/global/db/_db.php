<?php declare(strict_types=1);

    $key = "produzione";
    if( isLocalhost() ){
        $key = "test";
    }

    $configArray = [
        'SERVERNAME_DB' => $config['db'][$key]['host'] . ':' . $config['db'][$key]['port'],
        'USERNAME_DB' => $config['db'][$key]['username'],
        'PASSWORD_DB' => $config['db'][$key]['password'],
        'DBNAME' => $config['db'][$key]['database'],
        'TABLEPREFIX' => $config['db']['tablePrefix'],
        'VERSTIME' => $VERSTIME,
        'YEARNOW' => $YEARNOW,
        'UNIQ_TOKEN' => $UNIQ_TOKEN,
    ];

    // Inizializza la configurazione una volta
    $configIstance = Config::getInstance($configArray);
?>
