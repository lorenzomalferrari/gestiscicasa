<tr>
    <?php
        // Cripta i parametri
        $encryptedParams = [];
        foreach ($params as $key => $value) {
            $encryptedParams[$secureData->encryptData($key)] = $secureData->encryptData($value);
        }

        // Costruisci la query string criptata
        $queryString = http_build_query($encryptedParams);

        echo "<th><a href=\"" . PATH . "app/view/components/input/input-form.php?"
        . $queryString
        . "\" title=\"Nuovo\">"
        . "<i class=\"icon bi bi-plus\"></i>"
        . "</a></th>";
        for ($j = 0; $j < count($tableDataHeader); $j++) {
            echo "<th>" . htmlspecialchars($tableDataHeader[$j]) . "</th>";
        }
    ?>
</tr>
