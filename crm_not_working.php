<?php

declare(strict_types=1);
$flag_api = true;
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

if (isset($id_message_key)) {
    $id_message_key = $decryptedParams['id_message_key'];
    if ($id_message_key === CONFIG['message']['key'][0]) {
        $currentVersion = $decryptedParams['dbVersion'];
        $expectedVersion = $decryptedParams['expectedVersion'];
        // Sostituisci i segnaposto con i valori reali
        $msg_errore = str_replace(
            ['{current_version}', '{expected_version}'],
            [$currentVersion, $expectedVersion],
            CONFIG['message']['text'][$id_message_key]
        );
    } else {
        //non gestito
    }
}

$titlePage = "Server in Manutenzione";
$h1 = "SERVER IN MANUTENZIONE";
$p1 = "Al momento il servizio non è disponibile.";
$p2 = "Per maggiori informazioni, potete scrivere a ";
$email = CONFIG['site']['email_aziendale'];

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <?php require_once(ROOT . 'app/view/components/template/_head.php'); ?>
</head>

<body>
    <!-- Icona di manutenzione -->
    <i id="maintenance-icon" class="icon"></i>
    <h1><?php echo $h1; ?></h1>
    <p><?php echo $p1; ?></p>
    <?php echo $msg_errore; ?>
    <p>
        <?php echo $p2; ?>
        <strong><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></strong>
    </p>
    <!--=====================================-->
    <!--=       	Footer Start     		=-->
    <!--=====================================-->
    <?php require_once(ROOT . "app/view/components/template/_footer.php"); ?>
    <?php require_once(ROOT . "app/view/components/template/_script.php"); ?>
    <script>
        // Array di classi delle icone di Bootstrap Icons
        const icons = CONFIG['icons']['crm_not_working'];
        // Seleziona una classe randomicamente dall'array
        const randomIcon = icons[Math.floor(Math.random() * icons.length)];
        // Imposta la classe selezionata all'elemento i
        document.getElementById('maintenance-icon').classList.add(randomIcon);
    </script>
</body>

</html>
