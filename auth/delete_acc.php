<?php
session_start();
require_once(__DIR__."/signer.php");
require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/auth.php");

if(isset($_POST["button-delete"]))
{
    $signer = new signer($connection);
    $signer -> delete_user($_SESSION["email"]);
    $auth = new auth($connection);
    $auth -> logout();
}

?>