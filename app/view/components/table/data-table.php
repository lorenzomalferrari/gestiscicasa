<div class="card-body">
    <h3 class="text-body text-center text-md-left text-22 text-bold mb-4"><?php echo $tableName; ?></h3>
    <div class="table-responsive">
        <table id="data-table" class="table table-bordered">
            <thead>
                <?php require_once("data/header.php"); ?>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < count($tableDataRecord); $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < count($tableDataRecord[$i]); $j++) {
                            echo "<td>" . htmlspecialchars($tableDataRecord[$i][$j]) . "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
            <tfoot>
                <?php require_once("data/header.php"); ?>
            </tfoot>
        </table>
    </div>
</div>
