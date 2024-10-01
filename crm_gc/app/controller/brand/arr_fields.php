<?php declare(strict_types=1);

    require_once( ROOT . "app/controller/_select/country.php");
    require_once(ROOT . "app/controller/_select/industry.php");

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
                            "name" => "name",
                            "class" => "form-control",
                            "placeholder" => "Inserisci il nome del Brand",
                            "required" => "required",
                            "maxlength" => "100"
                        ],
                    ],
                    [
                        "label" => "Anno fondazione",
                        "type" => "number",
                        "attributes" => [
                            "id" => "",
                            "name" => "foundation_year",
                            "class" => "form-control",
                            "min" => 1900,
                            "max" => YEARNOW,
                            "step" => 1,
                        ],
                        "col" => 2,
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
                        ],
                        'options' => $countries_list
                    ],
                    [
                        "label" => "Settore Industriale",
                        "type" => "select",
                        "attributes" => [
                            "id" => "",
                            "class" => "form-control",
                            "name" => "industry_sector",
                        ],
                        'options' => $industry_list
                    ],
                ],
                [
                    [
                        "label" => "Note",
                        "type" => "textarea",
                        "attributes" => [
                            "id" => "",
                            "class" => "form-control",
                            "name" => "note",
                        ],
                    ],
                ]
            ]
        ]
    ];
