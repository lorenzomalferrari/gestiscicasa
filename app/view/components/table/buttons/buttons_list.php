<!-- Riga per i bottoni -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-start">
        <button type="button" onclick="goBack()" class="btn btn-secondary mr-2">Indietro</button>
        <button type="button" onclick="action('insert',<?php echo $id . ',' . $tableName; ?> )" class="btn btn-primary mr-2">Salva</button>
        <button type="button" onclick="goBack('update',<?php echo $id . ',' . $tableName; ?> )" class="btn btn-warning mr-2">Modifica</button>
        <button type="button" onclick="goBack('delete',<?php echo $id . ',' . $tableName; ?> )" class="btn btn-danger">Elimina</button>
    </div>
</div>
