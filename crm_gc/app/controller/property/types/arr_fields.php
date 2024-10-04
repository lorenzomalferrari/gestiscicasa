<?php declare(strict_types=1);

    $fields = [
        "head" => [
            "title" => $titlePage
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
                            "name" => PropertyTypesTable::NAME,
                            "class" => "form-control",
                            "placeholder" => "Tipo proprietà",
                            "required" => "required",
                            "maxlength" => "50"
                        ]
                    ]
                ],
                [
                    [
                        "label" => "Note",
                        "type" => "text",
                        "attributes" => [
                            "id" => "",
                            "class" => "form-control",
                            "name" => PropertyTypesTable::NOTES,
                            "placeholder" => "Note",
                            "maxlength" => "100"
                        ],
                    ],
                ]
            ]
        ]
    ];

    if (isset($id) && $id > 0) {
        $fields['body']['rows'][0][0]['attributes']['value'] = $obj[PropertyTypesTable::NAME];
        $fields['body']['rows'][1][0]['attributes']['value'] = $obj[PropertyTypesTable::NOTES];
    }
