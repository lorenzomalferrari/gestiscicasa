<?php declare(strict_types=1);
    $backgroundTable = "";

    $tableName = PropertyTypesTable::TABLE_NAME;
    $titlePage = "Tipo Proprietà";

    const PARENT_PATH_KEY = PATH . MENU_PATHS['property_types']['path'];

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

    const FIELDS = [
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
