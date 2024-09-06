<?php
    //recupero le path più usate
    $params = array(
        ':idUser' => $_SESSION[CONFIG['session']['keys']['IDUSER']],
    );

    $where = " WHERE " . PathVisitatedTable::ID_USER . " = :idUser ";

    $select =
        "SELECT " . PathVisitatedTable::PATH
        . " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PATHVISITATED)
        . $where
        . " LIMIT 5 ";

    $results = DB->selectAll($select, $params);

    //se il risultato non ha valori, mostro la top 5 dei più usati da tutti gli utenti
    if( empty($results) ) {
        $select =
            "SELECT " . PathVisitatedTable::PATH
            . " FROM " . getNomeTabella(CONFIG_ISTANCE->get('TABLEPREFIX'), EnumTableNames::PATHVISITATED)
            . " LIMIT 5 ";
        $results = DB->selectAll($select);
    }

    $list = "";
    //se anche così non trova niente, ne mostriamo uno statico (SITUAZIONE INIZIALE DEL CRM)
    if( empty($results) ) {
        $list .= '
                <li class="dsy-nav-item">
                    <a href="' . PATH . "#" . '" class="dsy-menu-link">' . "Proprietà" . '</a>
                </li>
                <li class="dsy-nav-item">
                    <a href="' . PATH . "#" . '" class="dsy-menu-link">' . "Stanze" . '</a>
                </li>
                <li class="dsy-nav-item">
                    <a href="' . PATH . "#" . '" class="dsy-menu-link">' . "Catalogo" . '</a>
                </li>
                <li class="dsy-nav-item">
                    <a href="' . PATH . "#" . '" class="dsy-menu-link">' . "Categorie" . '</a>
                </li>
                <li class="dsy-nav-item">
                    <a href="' . PATH . "#" . '" class="dsy-menu-link">' . "Tipi Proprietà" . '</a>
                </li>';
    }else{
        foreach ($results as $r) {
            $rel_path = $r[PathVisitatedTable::PATH];
            $voce_menu = strtoupper(getMenuNameByPath($rel_path));
            $list .= '
                <li class="dsy-nav-item">
                    <a href="' . PATH . $rel_path . '" class="dsy-menu-link">' . $voce_menu . '</a>
                </li>';
        }
    }
    echo  $list;
