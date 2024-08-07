<?php
    require_once("_getInfo.php");
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Privacy Policy - <?php echo $nomeGestionale; ?></title>
        <?php require_once(ROOT . 'app/view/components/template/_head.php'); ?>
    </head>
    <body>

        <div class="container mt-5">
            <h1 class="mb-4">Privacy Policy</h1>

            <p>Benvenuti alla Privacy Policy di <strong><?php echo $nomeGestionale; ?></strong>. Questa Privacy Policy spiega come raccogliamo, utilizziamo, proteggiamo e condividiamo le informazioni personali degli utenti che utilizzano il nostro gestionale.</p>

            <h2 class="mt-4">Informazioni Raccolte</h2>
            <p>Raccogliamo vari tipi di informazioni per fornire e migliorare il nostro servizio:</p>
            <ul>
                <li><strong>Dati Personali:</strong> Nome, indirizzo email, numero di telefono, informazioni di pagamento, ecc.</li>
                <li><strong>Dati Non Personali:</strong> Informazioni tecniche.</li>
            </ul>

            <h2 class="mt-4">Modalità di Raccolta dei Dati</h2>
            <p>Raccogliamo dati in due modi principali:</p>
            <ul>
                <li><strong>Direttamente dagli Utenti:</strong> Quando gli utenti si registrano o utilizzano il gestionale.</li>
                <li><strong>Automaticamente:</strong> Attraverso l'uso del gestionale, inclusi dati tecnici.</li>
            </ul>

            <h2 class="mt-4">Utilizzo delle Informazioni</h2>
            <p>Utilizziamo le informazioni raccolte per:</p>
            <ul>
                <li>Fornire e mantenere il gestionale.</li>
                <li>Comunicare con gli utenti per informazioni importanti.</li>
                <li>Migliorare il gestionale attraverso l'analisi dei dati.</li>
            </ul>

            <h2 class="mt-4">Condivisione delle Informazioni</h2>
            <p>Condividiamo le informazioni degli utenti con:</p>
            <ul>
                <!--<li><strong>Fornitori di Servizi:</strong> Per aiutarci a fornire e mantenere il gestionale.</li>-->
                <li><strong>Motivi Legali:</strong> Quando richiesto dalla legge o per proteggere i nostri diritti.</li>
            </ul>

            <h2 class="mt-4">Protezione delle Informazioni</h2>
            <p>Adottiamo misure di sicurezza appropriate per proteggere le informazioni degli utenti.</p>

            <h2 class="mt-4">Diritti degli Utenti</h2>
            <p>Gli utenti hanno il diritto di:</p>
            <ul>
                <li>Accedere e correggere le loro informazioni personali.</li>
                <li>Richiedere la cancellazione delle loro informazioni.</li>
            </ul>

            <h2 class="mt-4">Modifiche alla Privacy Policy</h2>
            <p>Potremmo aggiornare questa Privacy Policy periodicamente. Notificheremo agli utenti eventuali modifiche attraverso il gestionale. La data di efficacia delle modifiche sarà specificata.</p>
            <p><strong>Data di efficacia:</strong> 1/08/2024</p>

            <h2 class="mt-4">Contatti</h2>
            <p>Per domande o richieste riguardanti questa Privacy Policy, contattaci a:</p>
            <p>
                <strong>Email:</strong><?php echo $email; ?><br>
                <strong>Telefono:</strong><?php echo $telefono; ?><br>
                <!--<strong>Indirizzo:</strong> [Indirizzo Fisico]-->
            </p>
        </div>

        <?php require_once(ROOT . 'app/view/components/template/_script.php'); ?>
    </body>
</html>
