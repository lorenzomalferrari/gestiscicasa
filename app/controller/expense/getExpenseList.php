<?php declare(strict_types=1);
    require_once(ROOT . 'app/model/TableNames.php');
    require_once(ROOT . "app/model/Expense.php");

    $arrObj = array();

    $select = "*";

    $query = "
        SELECT $select
        FROM  "
        . getNomeTabella( CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::EXPENSE ) . " AS e "
    ;

    $params_select = [];

    $results = DB->selectAll($query, $params_select);

    foreach ($results as $r) {
        $arrObj[] = new Expense(
            $r[ExpenseTable::ID],
            $r[ExpenseTable::EXPENSE_TYPE_ID],
            $r[ExpenseTable::AMOUNT],
            $r[ExpenseTable::EXPENSE_DATE],
            $r[ExpenseTable::NOTE],
            $r[ExpenseTable::PROPERTY_ID],
            $r[ExpenseTable::COLORE],
        );
    }
