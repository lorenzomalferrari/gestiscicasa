<?php declare(strict_types=1);
    require_once("../../../controller/lib/libs.php");

    $crypto = new Crypto();
    $secureData = new SecureData($crypto);

    parse_str( $_POST['params'], $params );
    parse_str( $_POST['id'], $param_id );

    $decryptedParams = Crypto::decryptParams( $params, $secureData );

    $msg_errore = "";

    $titlePage = $decryptedParams[INPUT_TYPE['edit_key']['page']];
    $entity = $decryptedParams[INPUT_TYPE['edit_key']['entity']];
    $parent_path_key = $decryptedParams[INPUT_TYPE['edit_key']['parent_path_key']];
    $parent_value = $decryptedParams[INPUT_TYPE['edit_key']['parent']];
    $tableName = $decryptedParams[INPUT_TYPE['edit_key']['tableName']];
    $fields = json_decode(urldecode($decryptedParams[INPUT_TYPE['edit_key']['input_fields']]), true);

    $id = null;
    if ( !array_key_exists('', $param_id) ) {
        $decryptedParams[INPUT_TYPE['edit_key']['id']] = Crypto::decryptParams($param_id, $secureData);
        $id = $decryptedParams[INPUT_TYPE['edit_key']['id']][0] ?? null;
    }

    $subTitle = ( $id > 0 ) ? "Modifica" : "Nuovo";

    $fields = FormatterInputValidator::validateAndFormatFields($fields);

    //se id è compilato, devo richiamare il customTable.php del contesto che sto trattando
    //e aggiungere in fields la key value con i valori da DB
    if($id > 0){
        $relative_path = convertTableNameToPath($tableName);
        $url = normalizeUrl(ROOT . "app/controller/" . $relative_path . "customTable.php");
        require_once($url);
    }

    //Ora che tutto è pronto, vanno salvati negli input hidden per essere passati tramite form
    //nel caso di utilizzo con le azioni come insert, update, delete.
    require_once(ROOT . "app/controller/hidden_input.php");

    $breadcrumb_list = [
        $subTitle,
        $entity
    ];

    if (file_exists(ROOT . 'app/view/components/breadcrumb/breadcrumb.php'))
        require_once(ROOT . 'app/view/components/breadcrumb/breadcrumb.php');
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php require_once(ROOT . "app/view/components/template/_head.php"); ?>
    </head>
    <body>
        <!-- Page Loader Start -->
        <?php
            //require_once(ROOT . "app/view/components/template/_preloader.php");
        ?>
        <!-- Page Loader End -->
        <a href="#main-wrapper" data-type="section-switch" class="scrollup">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <div id="main-wrapper" class="dsy-main-wrapper">
            <div class="dsy-page">

                <div class="dsy-page-content vertical-menu">
                    <header class="header">
                        <!-- Inizio menù laterale -->
                        <?php require_once(ROOT . "app/view/components/template/_menu.php"); ?>
                        <!-- Fine menù laterale -->
                        <!-- Inizio intestazione -->
                        <?php require_once(ROOT . "app/view/components/template/_navbar.php"); ?>
                        <!-- Fine intestazione -->
                    </header>

                    <!--=====================================-->
                    <!--=         Breadcrumb Start          =-->
                    <!--=====================================-->
                    <?php echo $breadcrumb; ?>
                    <!--=====================================-->
                    <!--=         	Table Area Start        =-->
                    <!--=====================================-->
                    <div class="container-fluid">
                        <div class="card component-table">
                            <?php include_once(ROOT . "app/view/components/table/input-table.php"); ?>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=       	Footer Start     		=-->
                    <!--=====================================-->
                    <?php require_once(ROOT . "app/view/components/template/_footer.php"); ?>
                </div>
            </div>
        </div>
        <?php require_once(ROOT . "app/view/components/template/_script.php"); ?>
    </body>
</html>
