<?php
    global $SERVERNAME_DB, $USERNAME_DB, $PASSWORD_DB, $DBNAME, $TABLEPREFIX;

    $SERVERNAME_DB = $config['db']['host'] . ':' . $config['db']['port'];
    $USERNAME_DB = $config['db']['username'];
    $PASSWORD_DB = $config['db']['password'];
    $DBNAME = $config['db']['database'];
    $TABLEPREFIX = $config['db']['tablePrefix'];
?>
