<?php
if( isset($id) 
$action = "<button type="button" onclick="action('insert',<?php echo $tableName; ?> )" class="btn btn-primary mr-2">Salva</button>";
else
$action = "<button type="button" onclick="action('update',<?php echo $id . ',' . $tableName; ?> )" class="btn btn-warning mr-2">Modifica</button>";
?>
<!-- Riga per i bottoni -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-start">
        <button type="button" onclick="goBack()" class="btn btn-secondary mr-2">Indietro</button>
        <?php echo $action; ?>
        <button type="button" onclick="action('delete',<?php echo $id . ',' . $tableName; ?> )" class="btn btn-danger">Elimina</button>
    </div>
</div>
