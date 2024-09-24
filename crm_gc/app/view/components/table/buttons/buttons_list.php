<?php
    $annulla = "<button type=\"button\" onclick=\"annulla\" class=\"btn btn-primary mr-2\">Annnulla</button>";

    if( !($id > 0) ) {
        $action = "<button type=\"button\" onclick=\"action('insert', null, '$tableName')\" class=\"btn btn-primary mr-2\">Salva</button>";
        $action .= $annulla;
    }
    else {
        $action = "<button type=\"button\" onclick=\"action('update', $id, '$tableName')\" class=\"btn btn-warning mr-2\">Modifica</button>";
        $action .= $annulla;
        $action .= "<button type=\"button\" onclick=\"action('delete', $id, '$tableName')\" class=\"btn btn-danger\">Elimina</button>";
    }
?>
<!-- Riga per i bottoni -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-start">
        <button type="button" onclick="goBack('<?php echo PARENT_PATH_KEY; ?>')" class="btn btn-secondary mr-2">Indietro</button>
        <?php echo $action; ?>
    </div>
</div>
