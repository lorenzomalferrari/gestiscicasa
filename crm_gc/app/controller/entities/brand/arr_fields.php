<?php declare(strict_types=1);

    //Se ho id della entità
    if (isset($id) && $id > 0) {
        //Se ho id dello Stato
        if ($obj[BrandTable::COUNTRY_OF_ORIGIN] > 0)
            $countries_list = FormatterInputValidator::setSelectedOption( $countries_list, $obj[BrandTable::COUNTRY_OF_ORIGIN] );

        //Se ho id del Settore Industriale
        if ($obj[BrandTable::INDUSTRY_SECTOR] > 0)
            $industry_list = FormatterInputValidator::setSelectedOption( $industry_list, $obj[BrandTable::INDUSTRY_SECTOR] );
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
                            "placeholder" => "Inserisci il nome del Brand",
                            "required" => "required",
                            "maxlength" => "100"
                        ],
                    ],
                    [
                        "label" => "Anno fondazione",
                        "type" => "number",
                        "attributes" => [
                            "id" => "foundation_year",
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
                            "id" => "country_of_origin",
                            "class" => "form-control",
                            "name" => "country_of_origin",
                        ],
                        'options' => $countries_list
                    ],
                    [
                        "label" => "Settore Industriale",
                        "type" => "select",
                        "attributes" => [
                            "id" => "industry_sector",
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
                            "id" => "note",
                            "class" => "form-control",
                            "name" => "note",
                        ],
                    ],
                ]
            ]
        ]
    ];

    if (isset($id) && $id > 0) {
        $fields['body']['rows'][0][0]['attributes']['value'] = $obj[BrandTable::NAME];
        $fields['body']['rows'][0][1]['attributes']['value'] = $obj[BrandTable::FOUNDATION_YEAR];
        $fields['body']['rows'][2][0]['attributes']['text'] = $obj[BrandTable::NOTE];
    }
