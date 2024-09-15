<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Spese";
    $tableName = ExpenseTable::TABLE_NAME;

    $tableDataHeader = ExpenseTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        //print_r($property);
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getName(),
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
