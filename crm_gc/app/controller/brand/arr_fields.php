<?php declare(strict_types=1);

    $fields = [
        "head" => [
            "title" => $titlePage,
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
                            "class" => "form-control",
                            "placeholder" => "Inserisci il nome del Brand",
                            "required" => "required",
                            "maxlength" => "100"
                        ],
                        "col" => 12
                    ]
                ],
                [
                    [
                        "label" => "Stato",
                        "type" => "select",
                        "attributes" => [
                            "id" => "",
                            "class" => "form-control",
                            "name" => "country_of_origin",
                            "required" => "required",
                            "disabled" => "disabled"
                        ],
                    ],
                ]
            ]
        ]
    ];
