<?php declare(strict_types=1);

    //Se ho id del tipo proprietà
    if (isset($id) && $id > 0) {
        //Se ho id della nazionalità
        //if ($obj[PropertyTable::ID_PROPERTY_TYPES] > 0)
            //$property_types_list = FormatterInputValidator::setSelectedOption($property_types_list, $obj[PropertyTable::ID_PROPERTY_TYPES]);

        //Se ho id della città
        //if ($obj[PropertyTable::ID_PROPERTY_TYPES] > 0)
            //$property_types_list = FormatterInputValidator::setSelectedOption($property_types_list, $obj[PropertyTable::ID_PROPERTY_TYPES]);

        //Se ho id della tipologia della proprietà
        if ($obj[PropertyTable::ID_PROPERTY_TYPES] > 0)
            $property_types_list = FormatterInputValidator::setSelectedOption($property_types_list, $obj[PropertyTable::ID_PROPERTY_TYPES]);
    }

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
                            "id" => "name",
                            "name" => "name",
                            "class" => "form-control",
                            "placeholder" => "Nome della proprietà",
                            "required" => "required",
                            "maxlength" => "100"
                        ],
                        "col" => 6
                    ],
                    [
                        "label" => "Price",
                        "type" => "number",
                        "attributes" => [
                            "id" => "price",
                            "class" => "form-control",
                            "name" => "price",
                            "min" => 0,
                            "step" => 0.01,
                        ],
                        "col" => 6
                    ]
                ],
                [
                    [
                        "label" => "Indirizzo",
                        "type" => "text",
                        "attributes" => [
                            "id" => "address",
                            "class" => "form-control",
                            "name" => "address",
                            "placeholder" => "Inserisci l'indirizzo",
                            "required" => "required",
                            "maxlength" => "100"
                        ],
                    ],
                    /*[
                        "label" => "Nazionalità",
                        "type" => "select",
                        "attributes" => [
                            "id" => "nationalities",
                            "class" => "form-control",
                            "name" => "nationalities"
                        ],
                        'options' => $nationalities_list
                    ],
                    [
                        "label" => "Città",
                        "type" => "select",
                        "attributes" => [
                            "id" => "city_id",
                            "class" => "form-control",
                            "name" => "city_id"
                        ],
                        'options' => $cities_list
                    ],*/
                ],
                [
                    [
                        "label" => "Tipo Proprietà",
                        "type" => "select",
                        "attributes" => [
                            "id" => "property_types_id",
                            "class" => "form-control",
                            "name" => "property_types_id"
                        ],
                        'options' => $property_types_list
                    ],
                    [
                        "label" => "Attivo",
                        "type" => "checkbox",
                        "attributes" => [
                            "id" => "active",
                            "class" => "form-control",
                            "name" => "active",
                        ]
                    ]
                ],
                [
                    [
                        "label" => "Note",
                        "type" => "textarea",
                        "attributes" => [
                            "id" => "notes",
                            "class" => "form-control",
                            "name" => "notes",
                        ]
                    ]
                ]
            ]
        ]
    ];
