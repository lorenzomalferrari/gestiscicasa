<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Brand";
    $tableName = BrandTable::TABLE_NAME;

    $tableDataHeader = BrandTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrBrand as $brand) {
        $tableDataRecord[] = [
            $brand->getId(),
            $brand->genName(),
            $brand->getCountryPfOrigin(),
            $brand->getIndustrySector(),
            $brand->getFoundationYear(),
            $brand->getNote(),
            $brand->getCreationDate(),
            $brand->getupdateDate(),
        ];
    }

    $fields = [
        "head" => [
            "title" => "Lista Brand"
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
                        "cols" => 8,
                    ],
                    [
                        "label" => "Anno fondazione",
                        "type" => "number",
                        "attributes" => [
                            "id" => "",
                            "name" => "anno_f",
                            "class" => "form-control",
                            "max" => YEARNOW,
                            "min" => 1800
                        ],
                    ],
                ],
                [
                    [
                        "label" => "Stato",
                        "type" => "label",
                        "attributes" => [
                            "id" => "",
                            "class" => "form-control",
                            "name" => "stato",
                        ],
                    ],
                    [
                        "label" => "Settore",
                        "type" => "label",
                        "attributes" => [
                            "id" => "",
                            "class" => "form-control",
                            "name" => "settore",
                        ],
                    ],
                ],
                [
                    [
                        "label" => "Note",
                        "type" => "textarea",
                        "attributes" => [
                            "id" => "",
                            "name" => "note",
                            "class" => "form-control",
                            "placeholder" => "Inserisci le eventuali Note",
                        ],
                    ],
                ],
            ]
        ]
    ];
