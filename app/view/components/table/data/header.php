<tr>
    <?php
        for ($j = 0; $j < count($tableDataHeader); $j++) {
            echo "<th>" . htmlspecialchars($tableDataHeader[$j]) . "</th>";
        }
    ?>
</tr>
