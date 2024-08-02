<?php

    // Funzione per generare HTML per i bottoni
    function generateButtonsHTML($buttons) {
        $buttonHTML = '
            <!-- Riga per i bottoni -->
            <div class="row mb-4">
                <div class="col-12 d-flex justify-content-start">';

        foreach ($buttons as $key => $value) {
            // Mappatura dei valori dei bottoni a classi CSS
            $buttonClasses = [
                'cancel' => 'btn btn-secondary mr-2',
                'save' => 'btn btn-primary mr-2',
                'edit' => 'btn btn-warning mr-2',
                'delete' => 'btn btn-danger'
            ];

            // Determina la classe CSS basata sulla chiave del bottone
            $buttonClass = isset($buttonClasses[$key]) ? $buttonClasses[$key] : 'btn btn-secondary';
            // Genera il codice HTML per il bottone
            $buttonHTML .= '<button type="button" class="' . $buttonClass . '">' . htmlspecialchars($value) . '</button>';
        }

        $buttonHTML .= '
                </div>
            </div>';

        return $buttonHTML;
    }

    // Funzione principale che controlla e aggiorna l'array $fields
    function validateAndUpdateFields(&$fields, $id = null) {
        // Controlla che esista la chiave 'head'
        if (!isset($fields['head'])) {
            return "Errore: la chiave 'head' non esiste.";
        }

        // Controlla che esista la chiave 'body'
        if (!isset($fields['body'])) {
            return "Errore: la chiave 'body' non esiste.";
        }

        // Controlla se la chiave 'title' esiste in 'head', se no, la crea con valore vuoto
        if (!isset($fields['head']['title'])) {
            $fields['head']['title'] = '';
        }

        // Imposta il valore di 'title' basato sull'esistenza di $id
        if ($id) {
            $fields['head']['title'] = 'Modifica';
        } else {
            $fields['head']['title'] = 'Nuova';
        }

        // Genera l'HTML per i bottoni se la chiave 'buttons' esiste in 'body'
        if (isset($fields['body']['buttons'])) {
            $buttonHTML = generateButtonsHTML($fields['body']['buttons']);
            $fields['body']['buttonsHTML'] = $buttonHTML; // Aggiunge l'HTML generato a 'body'
        } else {
            $fields['body']['buttonsHTML'] = "Errore: la chiave 'buttons' non esiste.";
        }

        // Controlla che ogni riga in 'rows' abbia la chiave 'col' e ridistribuisce le colonne se necessario
        if (isset($fields['body']['rows'])) {
            foreach ($fields['body']['rows'] as &$row) {
                $totalCols = 0;
                $numElements = count($row);

                // Calcola il numero totale di colonne assegnate
                foreach ($row as &$element) {
                    if (!isset($element['col'])) {
                        $element['col'] = 0;
                    }
                    $totalCols += $element['col'];
                }

                // Ridistribuisce le colonne se il totale è diverso da 12
                if ($totalCols !== 12) {
                    $remainingCols = 12 - $totalCols;
                    $defaultCol = $remainingCols > 0 ? intdiv($remainingCols, $numElements) : 1;
                    $remainingCols -= $defaultCol * $numElements;

                    foreach ($row as &$element) {
                        if ($element['col'] == 0) {
                            $element['col'] = $defaultCol;
                            if ($remainingCols > 0) {
                                $element['col']++;
                                $remainingCols--;
                            }
                        }
                    }
                }
            }
        } else {
            return "Errore: la chiave 'rows' non esiste.";
        }

        // Funzione per convalidare e formattare js_functions
        function validateAndFormatJSFunctions(&$element)
        {

            if (isset($element['type']) && isset($element['js_functions']) && is_array($element['js_functions'])) {
                $type = $element['type'];
                if (isset(INPUT_TYPE[$type])) {
                    $valid_js_functions = INPUT_TYPE[$type]['js_functions'];
                    foreach ($element['js_functions'] as $js_key => $js_value) {
                        if (in_array($js_key, $valid_js_functions)) {
                            if (strlen($js_value) > 0 && preg_match('/\(\)?;?$/', $js_value)) {
                                $element['js_functions'][$js_key] = rtrim($js_value, ';') . '();';
                            } else {
                                return "Errore: Funzione JavaScript non valida per '$js_key' in '$type'.";
                            }
                        } else {
                            return "Errore: '$js_key' non è una funzione JS valida per il tipo '$type'.";
                        }
                    }
                } else {
                    return "Errore: Tipo '$type' non definito in INPUT_TYPE.";
                }
            }
        }

        // Applica la convalida e formattazione delle js_functions
        foreach ($fields['body']['rows'] as &$row) {
            foreach ($row as &$element) {
                $validationError = validateAndFormatJSFunctions($element);
                if ($validationError) {
                    return $validationError;
                }
            }
        }

        return $fields; // Restituisce l'array aggiornato per conferma
    }


























$fields = [
    "head" => [
        "title" => "Titolo Pagina"
    ],
    "body" => [
        "buttons" => [
            "cancel" => "Annulla",
            "save" => "Salva",
            "edit" => "Registra",
            "delete" => "Elimina"
        ],
        "rows" => [
            [
                [
                    "label" => "Nome",
                    "type" => "text",
                    "attributes" => [
                        "id" => "",
                        "name" => "nome",
                        "placeholder" => "Inserisci il tuo nome",
                        "required" => "required",
                        "maxlength" => "100"
                    ],
                    "col" => 6
                ],
                [
                    "label" => "Cognome",
                    "type" => "text",
                    "attributes" => [
                        "id" => "",
                        "name" => "cognome",
                        "placeholder" => "Inserisci il tuo cognome",
                        "required" => "required",
                        "maxlength" => "100"
                    ],
                    "col" => 6
                ]
            ],
            [
                "label" => "Indirizzo",
                "type" => "text",
                "attributes" => [
                    "id" => "",
                    "name" => "indirizzo",
                    "placeholder" => "Inserisci il tuo indirizzo",
                    "required" => "required",
                    "maxlength" => "100"
                ],
            ],
        ]
    ]
];

var_dump($fields);
print_r("<br>");
print_r("<br>");
print_r("<br>");
print_r("<br>");
print_r("<br>");

//deve convalidare chiave head
//deve comvalidare chiave title
//se valore vuoto mette:
// Nuovo se $id non è settato
// Modifica se $id è settato
//deve convalidare chiave body
//ovvero che ha chiave buttons e chiave rows

//convalidare rows


//$fields = FormatterValidator::validateAndFormatFields($fields);

$fields = validateAndUpdateFields($fields);
var_dump($fields);

?>
<h2>
    <?php echo htmlspecialchars($fields['head']['title'] ?? 'Inserimento Dati Persona'); ?>
</h2>

<?php
/*// Verifica se 'buttons' esiste e è un array
    if (isset($fields['body']['buttons']) && is_array($fields['body']['buttons'])) {
        echo '<div class="button-container" style="display: flex; gap: 10px; margin-bottom: 20px;">';
        foreach ($fields['body']['buttons'] as $button_type => $button_label) {
            if (isset(INPUT_TYPE['button'][$button_type])) {
                $button_model = INPUT_TYPE['button'][$button_type]['model'];

                // Sostituisci i placeholder con i valori effettivi
                $placeholders = [
                    '{id}' => htmlspecialchars($button_type),
                    '{name}' => htmlspecialchars($button_type),
                    '{value}' => htmlspecialchars($button_label),
                    '{disabled}' => '', // Gestire se necessario
                    '{onclick}' => '' // Gestire se necessario
                ];

                // Genera il bottone
                $button_html = strtr($button_model, $placeholders);
                echo $button_html;
            }
        }
        echo '</div>';
    }*/
?>

<div class="container-fluid">
    <?php require_once(ROOT . "app/view/components/table/buttons/buttons_list.php.php"); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card basic-form">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-label">
                                    <label>Name</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
                                <div class="invalid-feedback">
                                    Please choose a name.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-label">
                                    <label>Email or Username</label>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter your email address or username" name="email" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-label">
                                    <label>Name</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
                                <div class="invalid-feedback">
                                    Please choose a name.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-label">
                                    <label>Email or Username</label>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter your email address or username" name="email" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once(ROOT . "app/view/components/table/buttons/buttons_list.php.php"); ?>
</div>


<br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<form method="POST" action="/index.php?action=save">
    <?php
    // Verifica se 'rows' esiste e è un array
    if (isset($fields['body']['rows']) && is_array($fields['body']['rows'])) {
        foreach ($fields['body']['rows'] as $row) {
            echo '<div class="row">';
            echo '<div class="col-md-' . ($row['col'] ?? 12) . '">';
            echo '<div class="form-group">';
            echo '<label for="' . htmlspecialchars($row['id'] ?? '') . '">' . htmlspecialchars($row['label'] ?? '') . '</label>';

            // Ottieni il modello di input per il tipo specificato
            $model = FormatterValidator::getInputModel($row['type'] ?? 'text', INPUT_TYPE, $row['js_functions'] ?? []);

            // Sostituisci i placeholder con i valori effettivi
            $placeholders = [
                '{id}' => htmlspecialchars($row['id'] ?? ''),
                '{name}' => htmlspecialchars($row['id'] ?? ''),
                '{value}' => htmlspecialchars($row['value'] ?? ''),
                '{placeholder}' => htmlspecialchars($row['placeholder'] ?? ''),
                '{required}' => isset($row['required']) && $row['required'] ? 'required' : '',
                '{readonly}' => isset($row['readonly']) && $row['readonly'] ? 'readonly' : '',
                '{disabled}' => isset($row['disabled']) && $row['disabled'] ? 'disabled' : '',
                '{maxlength}' => htmlspecialchars($row['maxlength'] ?? ''),
                '{minlength}' => htmlspecialchars($row['minlength'] ?? ''),
                '{pattern}' => htmlspecialchars($row['pattern'] ?? ''),
                '{autocomplete}' => htmlspecialchars($row['autocomplete'] ?? ''),
                '{js_functions}' => implode(' ', array_map(function ($function) use ($row) {
                    return $function . '="' . htmlspecialchars($row[$function] ?? '') . '"';
                }, $row['js_functions'] ?? []))
            ];

            $input_html = strtr($model, $placeholders);
            echo $input_html;

            if (isset($row['feedback'])) {
                echo '<div id="' . htmlspecialchars($row['id'] ?? '') . '-feedback" class="invalid-feedback">' . htmlspecialchars($row['feedback'] ?? '') . '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
    <button type="submit" class="btn btn-primary">Invia</button>
</form>
