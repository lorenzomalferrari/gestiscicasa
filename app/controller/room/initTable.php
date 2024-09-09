<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Stanza";
    $tableName = RoomTable::TABLE_NAME;

    $tableDataHeader = RoomTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        //print_r($property);
        $tableDataRecord[] = [
            $property->getId(),
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
                    //riga 1
                ],
                [
                    //riga 2
                ]
            ]
        ]
    ];
