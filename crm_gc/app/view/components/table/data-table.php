<div class="card-body">
    <h3 class="text-body text-center text-md-left text-22 text-bold mb-4"><?php echo $tableName; ?></h3>
    <div class="table-responsive">
        <table id="data-table" class="table table-bordered">
            <thead>
                <?php
                    // Converti l'array in JSON
                    $input_fields = urlencode(json_encode($fields, JSON_PRETTY_PRINT));
                    require(ROOT . "app/view/components/table/data/header.php"); ?>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < count($tableDataRecord); $i++) {
                        $id = $tableDataRecord[$i][0];
                        echo "<tr>";
                        echo "<td><a href=\"" . PATH . "app/view/components/input/input-form.php?"
                            . "page=" . $titlePage
                            . "&path_key=" . $parent_path_key
                            . "&table=" . $tableName
                            . "&input_fields=" . $input_fields
                            . "&id=" . $id
                            . "\" title=\"Modifica\">Modifica</a></td>";
                        for ($j = 0; $j < count($tableDataRecord[$i]); $j++) {
                            echo "<td>" . htmlspecialchars($tableDataRecord[$i][$j]) . "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
            <tfoot>
                <?php
                    require(ROOT . "app/view/components/table/data/header.php");
                ?>
            </tfoot>
        </table>
    </div>
</div>
