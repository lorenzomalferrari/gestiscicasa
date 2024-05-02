<?php
    session_start();

    if (isset($_SESSION)) {
        $USER_SE = $_SESSION["USER_SE"];
        $IDUSER_SE = $_SESSION["IDUSER_SE"];
    }

    //echo "<br><br>USER_SE: $USER_SE - IDUSER_SE: $IDUSER_SE<br><br>";
?>
