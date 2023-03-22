<?php

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/auth.php");

$auth = new auth($connection);


if(isset($_POST["submit"]))
{
    $userName = $_POST["username"];
    $password = $_POST["password"];

    if(isset($userName) && isset($password) && !empty($userName) && !empty($password)){
        if(isset($_POST["remember"]))
        {
            if(!isset($_COOKIE["remember"])){
                setcookie("remember", 1, time() + 86400 * 10, "/"); 
            }

            if(!isset($_COOKIE["username"])){
                setcookie("username", $userName, time() + 86400 * 10, "/"); 
            }

            if(!isset($_COOKIE["password"])){
                setcookie("password", $password, time() + 86400 * 10,"/"); 
            }
        }
        
        if(!empty($user = $auth -> get_user($userName, $password,)))
        {
            $_SESSION["email"] = $user ["Email"];
            $_SESSION["heslo"] = $user["Password"];
            $_SESSION["userId"] = $user["Id"];
            $_SESSION["admin"] = $user["IfAdmin"];
            
            header("Location: ../index-test.php");
            } 
        else{
            header("Location: ../index-chilli-login.php");
        }
    }
    else{
        header("Location: ../index-chilli-login.php");
    }
}
else{
    header("Location: ../index-chilli-login.php");
}
