<?php

require_once(__DIR__."/db/db.php");
require_once(__DIR__."/dal/itemrepository.php");
require_once(__DIR__."/dal/userrepository.php");
require_once(__DIR__."/auth/crypt.php");
require_once(__DIR__."/auth/auth.php");

$auth = new auth($connection);

if(!$auth -> check_loggedIn())
{
   header("Location: ./index-chilli-login.php");
}


$isAdmin = $auth -> check_loggedIn_admin();

$crypt = new crypt();

//$input = array("Firstname" => "Zbyněk", "Surname" => "Mlč", "Email" => "zbynek14692@gmail.com", "Password" => "123456789" );
//$newUserId = $repo -> create($input);

//var_dump($repo -> retrieve("Id = 1"));

//$input = array("FirstName" => "Zbyna");
//$podminka = "Id = 1";

//$repo -> update($input, $podminka);

//$res = $repo -> get_items_by_group(1);
//var_dump($res);

//echo $crypt -> encrypt("krtekkrtek");

//$auth -> logout(); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style-respons.css">
    <link rel="stylesheet" href="styles/style-footer.css">
    <link rel="stylesheet" href="styles/style-chilli-login.css">
    <link rel="stylesheet" href="styles/style-logged.css">
    <link rel="stylesheet" href="styles/style-articles.css">
    <script src="./JS/jquery.JS"></script>
    <script src="./JS/script.JS"></script>
    <script src="./JS/async.JS"></script>
    <script src="./JS/repository.JS"></script>
    <script src="./JS/itemRepository.JS"></script>
    <script src="./JS/itemOperations.JS"></script>
    <script src="./JS/articles.JS"></script>
    <title>Zahradnictví Gypsywagon</title>
</head>

<body>
    <div class="page">
        <?php 
        include "components/header.php"
        ?>
        </header>
        <main>
        <h1 class="main-together" class="main-title-index">Jste Přihlášen <?php echo $_SESSION["email"] ?></h1>
            <div class="main-together">
                <div class="submit-box-lo">
                <form action="auth/logout.php" method="post">
                <input class="Submit-button-lo" name="button-logout" type="submit" value="Odhlásit">
                </form>
                <form action="auth/delete_acc.php" method="post">
                <input class="Submit-button-lo" name="button-delete" type="submit" onclick="return confirm('Opravdu chcete smazat tento účet?');" value="Smazat účet">
                </form>
                <?php if($isAdmin)
                    {
                echo ('<form action="index-napsat-clanek.php" method="post">
                <input class="Submit-button-lo" name="button-admin" type="submit" value="Napsat článek">
                </form>');
                   } else if ($isAdmin)
                   {

                   }    
                ?> 
                </div>
            </div>
            <div id="articles-cont" class="logged-box-text">
                <?php
                $userrepository = new userrepository($connection);
                $itemrepository = new itemrepository($connection);
                $articles = $itemrepository -> get_all_items();    
                foreach ($articles as $article){
                    $user = $userrepository -> get_by_id($article["UserId"]);
                    echo "<div id='article$article[Id]' class='article-cont'>";
                    if($isAdmin && $_SESSION["userId"] == $article["UserId"])
                        {
                        echo "<button onclick='if(confirm(\"Opravdu chcete smazat článek?\"))deleteArticle($article[Id])' class='article-delete'>Smazat</button>";
                        }
                    echo "<p class='article-info'>$user[Email]</p><br> $article[CreatedOn]</p>";
                    echo "<p class='article-text'>$article[Content]</p>";
                    echo "</div>";
                };
                ?>
            </div>
        </main>
    </div>
    <br><br><br>
    <?php
    include "components/footer.php"
    ?>
</body>
</html>