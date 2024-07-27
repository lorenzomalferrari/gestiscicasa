<?php
    require_once("../controller/lib/libs.php");

    //recupero le path più usate
    $params = array(
        ':idUser' => $_SESSION[CONFIG['session']['keys']['IDUSER']],
    );

    $select =
        "SELECT " . PathVisitatedTable::PATH
        . " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::PATHVISITATED)
        . " WHERE " . PathVisitatedTable::ID_USER . " = :idUser "
        . " LIMIT 5 ";

    $results = DB->selectAll($select, $params);

    if( empty($results) ) {
        $select =
            "SELECT " . PathVisitatedTable::PATH
            . " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), NomiTabella::PATHVISITATED)
            . " LIMIT 5 ";
        $results = DB->selectAll($select);
    }

    $list = "";
    foreach ($results as $r) {
        $rel_path = $r[PathVisitatedTable::PATH];
        $voce_menu = strtoupper(getMenuNameByPath($rel_path));
        $list .= 'list
            <li class="dsy-nav-item">
                <a href="' . PATH . $rel_path . '" class="dsy-menu-link">' . $voce_menu . '</a>
            </li>';
    }

    echo  $list;
?>
