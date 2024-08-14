<?php

declare(strict_types=1);
require_once("app/controller/lib/libs.php");
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
    <p><?php echo $p2; ?><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
    <div class="footer">
        <?php echo $footer; ?>
    </div>
    <script>
        // Array di classi delle icone di Bootstrap Icons
        const icons = [
            'bi-tools',
            'bi-gear',
            'bi-gear-fill',
            'bi-gear-wide',
            'bi-gear-wide-connected',
            'bi-wrench-adjustable',
            'bi-database-fill-gear',
            'bi-database-gear',
            'bi-database-x',
            'bi-hdd-stack',
            'bi-database-slash',
            'bi-code-slash',
            'bi-code-square',
            'bi-person-fill-exclamation',
            'bi-person-fill-slash',
            'bi-person-fill-x',
            'bi-emoji-expressionless',
            'bi-emoji-expressionless-fill',
            'bi-emoji-neutral',
            'bi-emoji-neutral-fill',
            'bi-emoji-frown',
            'bi-emoji-frown-fill'
        ];

        // Seleziona una classe randomicamente dall'array
        const randomIcon = icons[Math.floor(Math.random() * icons.length)];
        // Imposta la classe selezionata all'elemento i
        document.getElementById('maintenance-icon').classList.add(randomIcon);
    </script>
</body>

</html>
