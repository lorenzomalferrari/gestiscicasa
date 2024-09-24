<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Proprietà";
    $tableName = PropertyTable::TABLE_NAME;

    $tableDataHeader = PropertyTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getName(),
            $obj->getDescription(),
            $obj->getPrice(),
            $obj->getAddress(),
            $obj->getIdCity(),
            $obj->getIdState(),
            $obj->getIdPropertyTypes(),
            $obj->isActive(),
            $obj->getNotes(),
            $obj->getCreationDate(),
            $obj->getupdateDate(),
        ];
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
                            "class" => "form-control",
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
                            "class" => "form-control",
                            "name" => "cognome",
                            "placeholder" => "Inserisci il tuo cognome",
                            "required" => "required",
                            "maxlength" => "100"
                        ],
                        "col" => 6
                    ]
                ],
                [
                    [
                        "label" => "Indirizzo",
                        "type" => "text",
                        "attributes" => [
                            "id" => "",
                            "class" => "form-control",
                            "name" => "indirizzo",
                            "placeholder" => "Inserisci il tuo indirizzo",
                            "required" => "required",
                            "maxlength" => "100"
                        ],
                    ],
                ]
            ]
        ]
    ];
