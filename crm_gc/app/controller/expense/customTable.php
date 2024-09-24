<?php declare(strict_types=1);
    $backgroundTable = "";

    $titlePage = "Spese";
    $tableName = ExpenseTable::TABLE_NAME;

    $tableDataHeader = ExpenseTable::getColumns();
    $tableDataRecord =  [];

    foreach ($arrObj as $obj) {
        $tableDataRecord[] = [
            $obj->getId(),
            $obj->getExpenseTypeId(),
            $obj->getAmount(),
            $obj->getExpenseDate(),
            $obj->getNote(),
            $obj->getPropertyId(),
            $obj->getColore(),
        ];
    }

    const FIELDS = [
        "head" => [
            "title" => "$titlePage"
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
