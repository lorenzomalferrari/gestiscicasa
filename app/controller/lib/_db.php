<?php declare(strict_types=1);
    global $SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME, $TABLEPREFIX;

    $key = "produzione";
    if( isLocalhost() ){
        $key = "test";
    }

    print_r("key: " . $key);

    $SERVERNAME_DB = $config['db'][$key]['host'] . ':' . $config['db'][$key]['port'];
    $USERNAME_DB = $config['db'][$key]['username'];
    $PASSWORD_DB = $config['db'][$key]['password'];
    $DBNAME = $config['db'][$key]['database'];
    $TABLEPREFIX = $config['db']['tablePrefix'];
?>
