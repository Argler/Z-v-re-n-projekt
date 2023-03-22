
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/style-respons.css">
    <link rel="stylesheet" href="./styles/style-footer.css">
    <link rel="stylesheet" href="./styles/style-chilli-login.css">
    <link rel="stylesheet" href="./styles/style-articles.css">
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
        include "./components/header.php" 
        ?>
        </header>
        <main class="napsat-clanek">
        <textarea class="admin-text" name="clanek" id="textarea"></textarea>
        <input type="hidden" name="userId" id="userId" value="<?php echo $_SESSION["userId"]?>">
        <button onclick="sendArticle()" class="admin-send" type="button" name="submit-clanek">Odeslat</button>
        </main>
    </div>
    <br><br><br>
    <?php
    include "./components/footer.php"
    ?>
</body>

</html>