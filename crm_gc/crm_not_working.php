<?php declare(strict_types=1);
	$flag_api = true;
	require_once("app/controller/lib/libs.php");

	$crypto = new Crypto();
	$secureData = new SecureData($crypto);

	$encryptedParams = $_GET;

	$decryptedParams = Crypto::decryptParams($_GET, $secureData);

	$msg_errore = "";

	if (isset($decryptedParams['id_message'])) {
		$id_message = $decryptedParams['id_message'];
		if ($id_message === CONFIG['message']['key'][0]) {
			$currentVersion = $decryptedParams['dbVersion'];
			$expectedVersion = $decryptedParams['expectedVersion'];
			// Sostituisci i segnaposto con i valori reali
			$msg_errore = str_replace(
				['{current_version}', '{expected_version}'],
				[$currentVersion, $expectedVersion],
				CONFIG['message']['text'][$id_message]
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
<!doctype html>
<html class="no-js" lang="">

<head>
	<?php require_once(ROOT . 'app/view/components/template/_head.php'); ?>
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
			<div class="card login-form register-form">
				<div class="card-body">
					<div class="item-logo">
						<i id="maintenance-icon" class="icon bi"></i>
					</div>
					<h1><?php echo $h1; ?></h1>
					<div class="text-manatee">
						<p><?php echo $p1; ?></p>
						<p><?php echo $msg_errore; ?></p>
						<p>
							<?php echo $p2; ?>
							<strong><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></strong>
						</p>
					</div>
					<?php require_once(ROOT . "app/view/components/template/_copyright.php"); ?>
				</div>
			</div>
		</div>
	</div>
	<?php require_once(ROOT . "app/view/components/template/_script.php"); ?>
	<script>
		// Array di classi delle icone di Bootstrap Icons
		const icons = <?php echo json_encode(ICONS['crm_not_working']); ?>
		// Seleziona una classe randomicamente dall'array
		const randomIcon = icons[Math.floor(Math.random() * icons.length)];
		// Imposta la classe selezionata all'elemento i
		const icon = document.getElementById('maintenance-icon');
		icon.classList.add(randomIcon);
		// Aggiungi le dimensioni CSS dinamicamente
		icon.style.width = '150px';
		icon.style.height = '150px';
		icon.style.fontSize = '150px';
	</script>
</body>

</html>
