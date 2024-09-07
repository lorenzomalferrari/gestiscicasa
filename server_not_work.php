<?php declare(strict_types=1);
    require_once("app/controller/lib/libs.php");

    $crypto = new Crypto();
    $secureData = new SecureData($crypto);

    // Recupera i parametri criptati dalla query string
    $encryptedParams = $_GET;

    // Decripta i parametri
    $decryptedParams = [];
    foreach ($encryptedParams as $key => $encryptedValue) {
        $decryptedParams[$key] = $secureData->decryptData($encryptedValue);
    }

    $id_message_key = null;
    $msg_errore = null;

    $id_user = $_SESSION[CONFIG['session']['keys']['IDUSER']];
    if( isset($id_message_key) ){
        $id_message_key = $decryptedParams['id_message_key'];
        if( $id_message_key === CONFIG['message']['key'][0] && DB->isAdmin($id_user)){
            $currentVersion = $decryptedParams['dbVersion'];
            $expectedVersion = $decryptedParams['expectedVersion'];
            // Sostituisci i segnaposto con i valori reali
            $msg_errore = str_replace(
                ['{current_version}', '{expected_version}'],
                [$currentVersion, $expectedVersion],
                CONFIG['message']['text'][$id_message_key]
            );
        }else{
            //non gestito
        }
    }

    $titlePage = "Server in Manutenzione";
    $h1 = "SERVER IN MANUTENZIONE";
    $p1 = "Al momento il servizio non è disponibile";
    $p2 = "Per maggiori informazioni, potete scriverci a ";
    $email = CONFIG['site']['email'];
    $footer = "&copy; 2024 "
        . CONFIG['site']['name']
        . " - Autore: "
        . CONFIG['site']['autore']
        . " - Versione: " . CONFIG['site']['version'];
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titlePage; ?></title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php PATH . "public/my_assets/css/server_man.css" ?>" rel="stylesheet">
    </head>
    <body>
        <!-- Icona di manutenzione -->
        <i id="maintenance-icon" class="icon"></i>
        <h1><?php echo $h1; ?></h1>
        <p><?php echo $p1; ?></p>
        <?php echo $msg_errore; ?>
        <p><?php echo $p2; ?><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <div class="footer">
            <?php echo $footer; ?>
        </div>
        <script>
            // Array di classi delle icone di Bootstrap Icons
            const icons = CONFIG['icons']['server_not_work'];
            // Seleziona una classe randomicamente dall'array
            const randomIcon = icons[Math.floor(Math.random() * icons.length)];
            // Imposta la classe selezionata all'elemento i
            document.getElementById('maintenance-icon').classList.add(randomIcon);
        </script>
    </body>
</html>
