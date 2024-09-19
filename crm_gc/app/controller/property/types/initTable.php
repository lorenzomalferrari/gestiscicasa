<?php declare(strict_types=1);
    $backgroundTable = "";

    $tableName = PropertyTypesTable::TABLE_NAME;
    $titlePage = "Tipo Proprietà";

    $parent_path_key = PATH . MENU_PATHS['property_types'];

    $tableDataHeader = [
        PropertyTypesTable::ID,
        PropertyTypesTable::NAME,
        PropertyTypesTable::NOTES
    ];

    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getDescription(),
            $obj->getNotes(),
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
                            "name" => PropertyTypesTable::NAME,
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
