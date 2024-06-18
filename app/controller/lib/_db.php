<?php declare(strict_types=1);
    global $SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME, $TABLEPREFIX;

    $SERVERNAME_DB = $config['db']['test']['host'] . ':' . $config['db']['test']['port'];
    $USERNAME_DB = $config['db']['test']['username'];
    $PASSWORD_DB = $config['db']['test']['password'];
    $DBNAME = $config['db']['test']['database'];
    $TABLEPREFIX = $config['db']['test']['tablePrefix'];
?>
