<?php declare(strict_types=1);

    /**
     * Definizioni della cartella app
     */
    define('APP_FOLDER', ROOT . 'app/');

    define('CONTROLLER_FOLDER', APP_FOLDER . 'controller/');
    define('LIB_FOLDER', CONTROLLER_FOLDER . 'lib/');
    define('ENTITY_FOLDER', CONTROLLER_FOLDER . 'entities/');

    //per il controller bisogna anche salvare in array le entità
    require_once(LIB_FOLDER . 'define/sub_define/folder_path/app/controller/path.php');

    define('VIEW_PATH', APP_FOLDER . 'view/');
    define('MODEL_PATH', APP_FOLDER . 'model/');

    /**
     * Definizioni della cartella public
     */
    define('PUBLIC_FOLDER', ROOT . 'public/');

    define('_DATI_PATH', PUBLIC_FOLDER . '_dati/');
    define('API_PATH', PUBLIC_FOLDER . 'api/');
    define('INFO_PATH', PUBLIC_FOLDER . 'info/');
    define('MY_ASSETS_PATH', PUBLIC_FOLDER . 'my_assets/');
    define('TMP_PATH', PUBLIC_FOLDER . 'tmp/');
    define('VENDOR_PATH', PUBLIC_FOLDER . 'vendor/');
