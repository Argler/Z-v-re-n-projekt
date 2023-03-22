<?php

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/auth.php");

$auth = new auth($connection);

if(isset($_POST["button-logout"]))
{
    $auth -> logout();
}

?>