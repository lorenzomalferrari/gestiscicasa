<?php
    require_once('lib/_libs.php');
    print_r("<br> fine _libs");
    require_once('../model/database.php');

    print_r($_POST);
    print_r("<br>" . $_SERVER["REQUEST_METHOD"] . "<br>");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r($_POST);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $re_pass = $_POST['re_pass'];
/*
        $userNamePost = $connection->filterEmail($_POST["email"]);
        $passwordPost = $connection->filterString($_POST["password"]);
        $checkPasswordPost = $connection->filterString($_POST["checkPassword"]);

        $users = $connection->querySelect("SELECT userName FROM users WHERE userName = '$userNamePost'");

        if (count($users) <= 0) {
            if ($userNamePost != "" && $passwordPost != "") {

                if (strlen($passwordPost) < 8) {
                    $stringError = "La password deve essere almeno 8 caratteri";
                } else {
                    if ($passwordPost == $checkPasswordPost) {
                        $passwordPostHash = $connection->hackPassword($passwordPost);
                        $keyRegisterGen = $connection->getKeygen(50);
                        $stringError = "";
                        $data = [$userNamePost, $passwordPostHash, $keyRegisterGen];
                        $query = "INSERT INTO users (userName,password,keygen) VALUES (?,?,?)";
                        $connection->querywriteDb($query, $data);
                        $connection->senderEmail($userNamePost, "Register to Bank Satatistic", $keyRegisterGen);
                        //$stringError = "http://localhost/view/auth/authKeyGen.php?keygen=$keyRegisterGen";
                        //Qui controllare che manda email
                        header("Location: " . PATH . "/view/welcome.php");
                    } else {
                        $stringError = "Le password non corrispondono";
                    }
                }
            } else {
                $stringError = "Username o password non corretti. Perfavore riprova. :-(";
            }
        } else {
            $stringError = "Account esistente. Perfavore riprova. :-(";
        }
*/
    }
?>
