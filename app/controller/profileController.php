<?php declare(strict_types=1);
    require_once("lib/libs.php");
    require_once(ROOT . "app/model/Profile.php");
    print_r($_SESSION);

    $profile = Profile::getProfile($userId);
    $nome_cognome = $profile->getNominativo();
    $email = $profile->getEmail();
?>
