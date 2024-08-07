<?php declare(strict_types=1);

    $configArray = [
        'SERVERNAME_DB' => CONFIG['db'][getenvironmentkey()]['host'] . ':' . CONFIG['db'][getenvironmentkey()]['port'],
        'USERNAME_DB' => CONFIG['db'][getenvironmentkey()]['username'],
        'PASSWORD_DB' => CONFIG['db'][getenvironmentkey()]['password'],
        'DBNAME' => CONFIG['db'][getenvironmentkey()]['database'],
        'TABLEPREFIX' => CONFIG['db']['tablePrefix'],
        'VERSTIME' => VERSTIME,
        'YEARNOW' => YEARNOW,
        'UNIQ_TOKEN' => UNIQ_TOKEN,
    ];

    // Inizializza la configurazione una volta
    define('CONFIG_ISTANCE',Config::getInstance($configArray));
?>
