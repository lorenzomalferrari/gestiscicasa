<?php declare(strict_types=1);
    $backgroundTable = "";

    $tableName = PropertyTypeTable::TABLE_NAME;
    $titlePage = "Tipo Proprietà";

    $tableDataHeader = /*PropertyTypeTable::getColumns()*/[
        PropertyTypeTable::ID,
        PropertyTypeTable::DESCRIPTION,
        PropertyTypeTable::NOTES
    ];
    $tableDataRecord =  [];

    foreach ($arrTypeProperties as $typeProperty) {
        $tableDataRecord[] = [
            $typeProperty->getId(),
            $typeProperty->getDescription(),
            $typeProperty->getNotes(),
        ];
    }

    $fields = [
        "head" => [
            "title" => "Tipo Proprietà"
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
                            "name" => PropertyTypeTable::DESCRIPTION,
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
                            "name" => PropertyTypeTable::NOTES,
                            "placeholder" => "Note",
                            "maxlength" => "100"
                        ],
                    ],
                ]
            ]
        ]
    ];
