<?php
    require_once("_getInfo.php");
?>
<!doctype html>
<html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Termini e Condizioni d'Uso - <?php echo $nomeGestionale; ?></title>
        <?php require_once(ROOT . 'app/view/components/template/_head.php'); ?>
    </head>

    <body>

        <div class="container mt-5">
            <h1 class="mb-4">Termini e Condizioni d'Uso</h1>

            <p>Benvenuti ai Termini e Condizioni d'Uso di <strong><?php echo $nomeGestionale; ?></strong>. Utilizzando il nostro gestionale, accetti questi termini. Se non sei d'accordo con questi termini, ti preghiamo di non utilizzare il nostro servizio.</p>

            <h2 class="mt-4">Uso del Gestionale</h2>
            <p>Ti concediamo una licenza limitata, non esclusiva e revocabile per utilizzare il gestionale secondo questi termini. Non è consentito:</p>
            <ul>
                <li>Usare il gestionale per scopi illegali o non autorizzati.</li>
                <li>Distribuire virus, malware o qualsiasi altro codice dannoso.</li>
                <li>Compromettere la sicurezza del gestionale o tentare di accedere a dati non autorizzati.</li>
                <li>Usare il gestionale per spamming o invio di comunicazioni indesiderate.</li>
                <li>Raccogliere informazioni personali di altri utenti senza il loro consenso.</li>
            </ul>

            <h2 class="mt-4">Account Utente</h2>
            <p>Per utilizzare alcune funzionalità del gestionale, potrebbe essere necessario creare un account. Durante la registrazione, dovrai fornire informazioni accurate e complete. Sei responsabile di mantenere la sicurezza del tuo account e delle tue credenziali di accesso. In caso di accesso non autorizzato al tuo account, sei tenuto a informare immediatamente il supporto tecnico.</p>
            <p>Non è consentito:</p>
            <ul>
                <li>Condividere il proprio account con altri.</li>
                <li>Utilizzare l'account di un altro utente senza autorizzazione.</li>
            </ul>

            <h2 class="mt-4">Contenuti</h2>
            <p>Gli utenti possono pubblicare contenuti sul gestionale, inclusi ma non limitati a, testi, immagini, documenti e altre informazioni. Mantieni tutti i diritti sui contenuti che pubblichi, ma concedi a noi una licenza non esclusiva, trasferibile, sub-licenziabile, royalty-free e globale per utilizzare, modificare, distribuire e visualizzare tali contenuti in relazione alla fornitura del servizio.</p>
            <p>Non è consentito pubblicare contenuti che:</p>
            <ul>
                <li>Siano illegali, offensivi, diffamatori o che violino i diritti di terzi.</li>
                <li>Contengano virus o altri software dannosi.</li>
            </ul>
            <p>Tutti i diritti di proprietà intellettuale del gestionale appartengono a noi o ai nostri licenziatari. Non è consentito utilizzare i nostri marchi, loghi o altri materiali protetti senza il nostro permesso scritto.</p>

            <h2 class="mt-4">Pagamento e Fatturazione</h2>
            <p>Se il gestionale prevede pagamenti, i prezzi e i termini di pagamento saranno specificati sul nostro sito web o durante il processo di acquisto. I pagamenti devono essere effettuati nei termini stabiliti. In caso di mancato pagamento, ci riserviamo il diritto di sospendere o terminare l'accesso al gestionale.</p>
            <p>Le richieste di rimborso saranno gestite caso per caso, in conformità con la nostra politica di rimborso. Per richiedere un rimborso, contattaci entro [numero] giorni dall'acquisto.</p>

            <h2 class="mt-4">Limitazione di Responsabilità</h2>
            <p>Il gestionale è fornito "così com'è" senza garanzie di alcun tipo, espresse o implicite, incluse ma non limitate a, garanzie implicite di commerciabilità, idoneità per uno scopo particolare, o non violazione. Non garantiamo che il gestionale sarà disponibile ininterrottamente o privo di errori.</p>
            <p>In nessun caso saremo responsabili per danni diretti, indiretti, incidentali, speciali, consequenziali o punitivi, inclusi ma non limitati a, perdita di profitti, dati, uso, avviamento, o altre perdite intangibili risultanti da (i) l'uso o l'incapacità di usare il gestionale; (ii) qualsiasi accesso non autorizzato o alterazione delle tue trasmissioni o dati; (iii) dichiarazioni o condotta di terzi sul gestionale; o (iv) qualsiasi altra questione relativa al gestionale.</p>

            <h2 class="mt-4">Modifiche ai Termini</h2>
            <p>Ci riserviamo il diritto di modificare questi termini in qualsiasi momento. Gli utenti saranno notificati delle modifiche attraverso il gestionale o tramite email. Le modifiche entreranno in vigore immediatamente dopo la pubblicazione. L'uso continuato del gestionale costituisce accettazione delle modifiche.</p>

            <h2 class="mt-4">Legge Applicabile</h2>
            <p>Questi termini saranno regolati e interpretati secondo le leggi italiane, senza riguardo ai principi di conflitto di leggi. Qualsiasi controversia derivante da o relativa a questi termini sarà sottoposta alla giurisdizione esclusiva dei tribunali italiani.</p>

            <h2 class="mt-4">Contatti</h2>
            <p>Per domande o richieste riguardanti questi Termini e Condizioni, contattaci a:</p>
            <p>
            <strong>Email:</strong><?php echo $email; ?><br>
                <strong>Telefono:</strong><?php echo $telefono; ?><br>
                <!--<strong>Indirizzo:</strong> [Indirizzo Fisico]-->
            </p>
        </div>

        <?php require_once(ROOT . 'app/view/components/template/_script.php'); ?>
    </body>

</html>
