<?php declare(strict_types=1);
    $backgroundTable = "";

    $tableName = PropertyTypeTable::TABLE_NAME;
    $titlePage = "Tipo Proprietà";

    $tableDataHeader = PropertyTypeTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrTypeProperties as $typeProperty) {
        //print_r($property);
        $tableDataRecord[] = [
            $typeProperty->getId(),
            $typeProperty->getDescription,
            $typeProperty->getCreationDate,
            $typeProperty->getLastModifiedDate,
            $typeProperty->getNotes,
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
