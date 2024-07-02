<?php declare(strict_types=1);

    $key = "produzione";
    if( isLocalhost() ){
        $key = "test";
    }

    $SERVERNAME_DB = $config['db'][$key]['host'] . ':' . $config['db'][$key]['port'];
    $USERNAME_DB = $config['db'][$key]['username'];
    $PASSWORD_DB = $config['db'][$key]['password'];
    $DBNAME = $config['db'][$key]['database'];
    $TABLEPREFIX = $config['db']['tablePrefix'];

    print_r("SERVERNAME: " . $SERVERNAME);
    print_r("USERNAME: " . $USERNAME);
    print_r("PASSWORD: " . $PASSWORD);
    print_r("DBNAME: " . $DBNAME);
    print_r("TABLEPREFIX: " . $TABLEPREFIX);

?>
