<div class="card-body">
    <!--
    <h3 class="text-body text-center text-md-left text-22 text-bold mb-4"><?php //echo $titlePage; ?></h3>
    -->
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
                    //dobbiamo criptare i parametri
                    $crypto = new Crypto();
                    $secureData = new SecureData($crypto);

                    for ($i = 0; $i < count($tableDataRecord); $i++) {
                        $id = $tableDataRecord[$i][0];

                        // Parametri da criptare
                        $params = [
                            'page' => $titlePage,
                            'parent_path_key' => $parent_path_key,
                            'parent' => $parent,
                            'tableName' => $tableName,
                            'input_fields' => $input_fields,
                            'breadcrumb_list' => $breadcrumb_list,
                            'id' => $id,
                            'icon' => 'bi-pencil',
                        ];

                        // Cripta i parametri
                        $encryptedParams = [];
                        foreach ($params as $key => $value) {
                            $encryptedParams[$secureData->encryptData($key)] = $secureData->encryptData($value);
                        }

                        // Costruisci la query string criptata
                        $queryString = http_build_query($encryptedParams);

                        echo "<tr>";
                        echo "<td><a href=\"" . PATH . "app/view/components/input/input-form.php?"
                            . $queryString
                            . "\" title=\"Modifica\">"
                            . "<i class=\"icon bi bi-pencil\"></i>"
                            . "</a></td>";
                        for ($j = 0; $j < count($tableDataRecord[$i]); $j++) {
                            echo "<td>" . htmlspecialchars($tableDataRecord[$i][$j]) . "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
            <!--
            <tfoot>
                <?php
                    //require(ROOT . "app/view/components/table/data/header.php");
                ?>
            </tfoot>
            -->
        </table>
    </div>
</div>
