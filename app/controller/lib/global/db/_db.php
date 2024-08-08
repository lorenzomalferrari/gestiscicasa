<?php declare(strict_types=1);

    $configArray = [
        'SERVERNAME_DB' => CONFIG['db'][getEnvironmentKey()]['host'] . ':' . CONFIG['db'][getEnvironmentKey()]['port'],
        'USERNAME_DB' => CONFIG['db'][getEnvironmentKey()]['username'],
        'PASSWORD_DB' => CONFIG['db'][getEnvironmentKey()]['password'],
        'DBNAME' => CONFIG['db'][getEnvironmentKey()]['database'],
        'TABLEPREFIX' => CONFIG['db']['tablePrefix'],
        'VERSTIME' => VERSTIME,
        'YEARNOW' => YEARNOW,
        'UNIQ_TOKEN' => UNIQ_TOKEN,
    ];

    // Inizializza la configurazione una volta
    define('CONFIG_ISTANCE',Config::getInstance($configArray));
?>
