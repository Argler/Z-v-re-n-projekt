<?php
require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/../auth/auth.php");


$auth = new auth($connection);
// print_r($_SESSION);
$isNotLoggedIn = !$auth -> check_loggedIn()

?>



<header>
    <div class="top">
        <a class="logo" href="index.php"></a>
        <div class="nav">
            <a class="navitem" href="index-tekutemaso.php">TEKUTÉ
                MASO</a>
            <a class="navitem" href="https://www.tekutemaso.cz" target="_blank">LA VIE BISTRO BEEF
                SHOP</a>
            <a class="navitem" href="index-galerie.php">GALERIE</a>
            <a class="navitem" href="index-kontakt.php">KONTAKT</a>
            <?php if(!$isNotLoggedIn){
              echo ("<a class='navitem' href='index-test.php'>MŮJ ÚČET</a>");
            }else{
              echo ("<a class='navitem' href='index-chilli-login.php'>CHILLI CLUB</a>");
            }
            ?> 
        </div>
    </div>
   <div class="garden-img"></div>
</header>