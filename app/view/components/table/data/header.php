<tr>
    <?php
        echo "<th><a href=\"" . PATH . "app/view/input-form.php?table=" . $type_page . "\" title=\"Aggiungi nuovo\">+</a></th>";
        for ($j = 0; $j < count($tableDataHeader); $j++) {
            echo "<th>" . htmlspecialchars($tableDataHeader[$j]) . "</th>";
        }
    ?>
</tr>
