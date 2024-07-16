<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/NomiTabelle.php');

	print_r("Sto per stampare var SESSIONE");
	print_r($_SESSION);
	// Preparazione della query per la select
	$params_where = array(
		':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],
	);

	//Recupero le info dell'utente da mostrare a video
	$query = "SELECT * FROM " . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::USERS) . " WHERE id = :id";
	$row = DB->select($query, $params_where);

	//creo se non già create le cartelle dei log dedicate all'utente specifico
	$directories = [
		//creo cartella dedicata allo user specifico
		$basePath. "/" . CONFIG['log']['nome']['user'] . "/" . $_SESSION[CONFIG['session']['keys']['IDUSER']],
	];

	$filesToCreate = [
		//creo i files per la cartella
		$basePath. "/" . CONFIG['log']['nome']['user'] . "/" . $_SESSION[CONFIG['session']['keys']['IDUSER']] . "/error_log." . $extensions,
		$basePath. "/" . CONFIG['log']['nome']['user'] . "/" . $_SESSION[CONFIG['session']['keys']['IDUSER']] . "/info_log." . $extensions,
	];

	createDirectories($directories, $filesToCreate);
?>
