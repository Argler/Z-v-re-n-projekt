<?php

require_once(__DIR__."/signer.php");
require_once(__DIR__."/../db/db.php");

if(isset($_POST["submit-reg"]))
{
    $firstname = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordCon = $_POST["password_confirm"];

    if(isset($firstname) && isset($surname) && isset($email) && isset($password) && isset($passwordCon)
    && !empty($firstname) && !empty($surname) && !empty($email) && !empty($password) && !empty($passwordCon))
    {
        $signer = new signer($connection);
        $signer -> add_user($firstname, $surname, $email, $password, $passwordCon);
    }
}
header("Location: ../index-chilli-login.php");

?>