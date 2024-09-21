<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Elenco Brand";
    $tableName = BrandTable::TABLE_NAME;

    $parent_path_key = PATH . MENU_PATHS['brand']['path'];

    $tableDataHeader = BrandTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        //print_r($property);
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getName(),
            $obj->getCountryPfOrigin(),
            $obj->getIndustrySector(),
            $obj->getFoundationYear(),
            $obj->getNote(),
            $obj->getCreationDate(),
            $obj->getUpdateDate()
        ];
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
