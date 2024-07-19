<?php declare(strict_types=1);
	require_once(ROOT . 'app/model/NomiTabelle.php');

    //Mostrare tutti gli edifici che mi competono
    $params_where = array(
		':id' => $_SESSION[CONFIG['session']['keys']['IDUSER']],
	);

	//Recupero le info degli edifici sapendo utente

?>
