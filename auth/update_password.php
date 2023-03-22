<?php

require_once(__DIR__."/signer.php");
require_once(__DIR__."/../db/db.php");

if(isset($_POST["submit-forgot"]))
{
    $email = $_POST["username"];
    $password = $_POST["password-forgot"];
    $passwordCon = $_POST["password-con-forgot"];
    if(isset($email) && isset($password) && isset($passwordCon)
    && !empty($email) && !empty($password) && !empty($passwordCon))
    {
        $signer = new signer($connection);
        $signer -> update_password($email, $password, $passwordCon);

        header("Location: ../index-chilli-login.php");
    }
}
header("Location: ../index-chilli-login.php");

?>