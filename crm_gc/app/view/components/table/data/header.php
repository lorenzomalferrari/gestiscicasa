<tr>
    <?php
        echo "<th><a href=\"" . PATH . "app/view/components/input/input-form.php?"
        . "page=" . $titlePage
        . "&path_key=" . $parent_path_key
        . "&table=" . $tableName
        . "&input_fields=" . $input_fields
        . "\" title=\"Nuovo\">+</a></th>";
        for ($j = 0; $j < count($tableDataHeader); $j++) {
            echo "<th>" . htmlspecialchars($tableDataHeader[$j]) . "</th>";
        }
    ?>
</tr>
