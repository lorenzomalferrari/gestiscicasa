<?php
    if (isset($_GET) && is_array($_GET)) {
        $_POST = unisciArray($_POST, $_GET);
    }
?>
