<?php declare(strict_types=1);

    $hidden_inputs =
        '<input type="hidden" id="page" name="page" value="'. $titlePage .'">'
        . '<input type="hidden" id="path_key" name="path_key" value="'. $parent_path_key .'">'
        . '<input type="hidden" id="tableName" name="tableName" value="' . $tableName . '">'
        . '<input type="hidden" id="entity" name="entity" value="' . $entity . '">'
        . '<input type="hidden" id="parent_path_key" name="parent_path_key" value="' . $parent_path_key . '">'
        . '<input type="hidden" id="parent" name="parent" value="' . $parent . '">'
        . '<input type="hidden" id="input_fields" name="input_fields" value="' . urlencode(json_encode($fields, JSON_PRETTY_PRINT)) . '">';
