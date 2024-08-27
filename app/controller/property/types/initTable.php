<?php declare(strict_types=1);
    $backgroundTable = "";

    $tableName = PropertyTypesTable::TABLE_NAME;
    $titlePage = "Tipo Proprietà";

    $parent_path = ROOT . MENU_PATHS['properties_type'];

    $tableDataHeader = /*PropertyTypesTable::getColumns()*/[
        PropertyTypesTable::ID,
        PropertyTypesTable::DESCRIPTION,
        PropertyTypesTable::NOTES
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
            "title" => $titlePage
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
                            "name" => PropertyTypesTable::DESCRIPTION,
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
                            "name" => PropertyTypesTable::NOTES,
                            "placeholder" => "Note",
                            "maxlength" => "100"
                        ],
                    ],
                ]
            ]
        ]
    ];
