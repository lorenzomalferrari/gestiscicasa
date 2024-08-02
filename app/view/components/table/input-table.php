<?php
echo "Lorenzo Input Table";
print_r("Devo costruire input generico");
print_r("<br>");
//print_r($_POST);

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
                "label" => "Nome",
                "type" => "text",
                "attributes" => [
                    "id" => "name",
                    "name" => "name",
                    "placeholder" => "Inserisci il tuo nome",
                    "required" => "",
                    "maxlength" => "100"
                ],
                "col" => 6
            ],
            [
                "label" => "Email",
                "type" => "email",
                "attributes" => [
                    "id" => "email",
                    "name" => "email",
                    "placeholder" => "Inserisci la tua email",
                    "required" => ""
                ],
                "col" => 6
            ],
            [
                "label" => "Data di Nascita",
                "type" => "date",
                "attributes" => [
                    "id" => "dob",
                    "name" => "dob",
                    "required" => ""
                ],
                // 'col' non fornito
            ],
            [
                "label" => "Password",
                "type" => "password",
                "attributes" => [
                    "id" => "password",
                    "name" => "password",
                    "placeholder" => "Inserisci la tua password",
                    "required" => ""
                ],
                "col" => 12
            ],
            [
                "label" => "Sesso",
                "type" => "radio",
                "attributes" => [
                    "id" => "male",
                    "name" => "gender",
                    "value" => "male"
                ],
                "options" => [
                    "male" => "Maschio",
                    "female" => "Femmina"
                ],
                // 'col' non fornito
            ],
            [
                "label" => "Biografia",
                "type" => "textarea",
                "attributes" => [
                    "id" => "bio",
                    "name" => "bio",
                    "placeholder" => "Scrivi qualcosa su di te",
                    "maxlength" => "500"
                ],
                // 'col' non fornito
            ]
        ]
    ]
];

var_dump($fields);
print_r("<br>");
$fields = FormatterValidator::validateAndFormatFields($fields);

var_dump($fields);

?>
<h2>Inserimento Dati Persona</h2>
<form method="POST" action="/index.php?action=save">
    <?php
    foreach ($fields as $row) {
        echo '<div class="row">';
        foreach ($row as $field) {
            echo '<div class="col-md-' . $field['col'] . '">';
            echo '<div class="form-group">';
            echo '<label for="' . htmlspecialchars($field['id']) . '">' . htmlspecialchars($field['label']) . '</label>';

            // Ottieni il modello di input per il tipo specificato
            $model = FormatterValidator::getInputModel($field['type'], $input_type, $field['js_functions'] ?? []);

            // Sostituisci i placeholder con i valori effettivi
            $placeholders = [
                '{id}' => htmlspecialchars($field['id'] ?? ''),
                '{name}' => htmlspecialchars($field['id'] ?? ''),
                '{value}' => htmlspecialchars($field['value'] ?? ''),
                '{placeholder}' => htmlspecialchars($field['placeholder'] ?? ''),
                '{required}' => isset($field['required']) && $field['required'] ? 'required' : '',
                '{readonly}' => isset($field['readonly']) && $field['readonly'] ? 'readonly' : '',
                '{disabled}' => isset($field['disabled']) && $field['disabled'] ? 'disabled' : '',
                '{maxlength}' => htmlspecialchars($field['maxlength'] ?? ''),
                '{minlength}' => htmlspecialchars($field['minlength'] ?? ''),
                '{pattern}' => htmlspecialchars($field['pattern'] ?? ''),
                '{autocomplete}' => htmlspecialchars($field['autocomplete'] ?? ''),
                '{js_functions}' => implode(' ', array_map(function ($function) use ($field) {
                    return $function . '="' . htmlspecialchars($field[$function] ?? '') . '"';
                }, $field['js_functions'] ?? []))
            ];

            $input_html = strtr($model, $placeholders);
            echo $input_html;

            if (isset($field['feedback'])) {
                echo '<div id="' . htmlspecialchars($field['id']) . '-feedback" class="invalid-feedback">' . htmlspecialchars($field['feedback']) . '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
    ?>
    <button type="submit" class="btn btn-primary">Invia</button>
</form>
