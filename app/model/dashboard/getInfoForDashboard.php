<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/TableNames.php');

	//print_r("Sto per stampare var SESSIONE");
	//print_r($_SESSION);

	//SE PRIMO ACCESSO ANDIAMO A CREARE QUELLA EMPTY
	if( 1 === 3){
		require_once(ROOT . "app/model/dashboard/createEmptyDashboard.php");
	}else{
		// Preparazione della query per la select
		$params_where = array(
			':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],
		);

		//Recupero le info dell'utente da mostrare a video
		$query = "SELECT * FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::USERS) . " WHERE id = :id";
		$row = DB->select($query, $params_where);

		//creo se non già create le cartelle dei log dedicate all'utente specifico
		$directories = [
			//creo cartella dedicata allo user specifico
			PathAndFilesLog::FOLDER_USER,
			PathAndFilesLog::FOLDER_USER . "/" . $_SESSION[CONFIG['session']['keys']['IDUSER']],
		];

		$filesToCreate = [
			//creo i files per la cartella
			PathAndFilesLog::FOLDER_USER . "/" . $_SESSION[CONFIG['session']['keys']['IDUSER']] . "/" . YEARNOW . "_" . MONTH . "_" . DAY . "_error_log" . CONFIG['log']['extension'],
			PathAndFilesLog::FOLDER_USER . "/" . $_SESSION[CONFIG['session']['keys']['IDUSER']] . "/" . YEARNOW . "_" . MONTH . "_" . DAY . "_info_log" . CONFIG['log']['extension'],
		];

		//FileManager::createDirectories($directories, $filesToCreate);
	}
