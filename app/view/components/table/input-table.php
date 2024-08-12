<?php
    //echo "<pre>"; // Iniziamo il blocco di stampa formattata
    //print_r($fields); // Stampa l'array in formato leggibile
    //echo "</pre>"; // Chiudiamo il blocco di stampa formattata
?>
<div class="container-fluid">
    <?php require(ROOT . "app/view/components/table/buttons/buttons_list.php"); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card basic-form">
                <div class="card-body">
                    <div class="form-group">
                        <?php
                        $html = "";
                        foreach ($fields['body']['rows'] as $row) {
                            $html .= '<div class="row">';
                            foreach ($row as $field) {
                                $label = $field['label'];
                                $type = $field['type'];
                                $attributes = $field['attributes'];
                                $colSize = isset($field['col']) ? $field['col'] : 12;
                                // Aggiungi la colonna
                                $html .= '<div class="col-md-' . $colSize . '">';
                                $html .= '<div class="input-label">';
                                $html .= '<label>' . htmlspecialchars($label) . '</label>';
                                $html .= '</div>';
                                // Aggiungi l'input
                                $html .= FormatterValidator::getInputFieldsModal($field);
                                $html .= '<div class="invalid-feedback">';
                                $html .= 'Please choose a ' . htmlspecialchars($label) . '.';
                                $html .= '</div>';
                                $html .= '</div>'; // Chiudi la colonna
                            }

                            $html .= '</div>'; // Chiudi la riga
                        }
                        echo $html;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require(ROOT . "app/view/components/table/buttons/buttons_list.php"); ?>
</div>
