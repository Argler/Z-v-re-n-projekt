<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/style-galerie.css">
    <link rel="stylesheet" href="./styles/style-respons.css">
    <link rel="stylesheet" href="./styles/style-footer.css">
    <title>Zahradnictví Gypsywagon</title>
</head>

<body>
    <div class="page">
        <?php 
        include "./components/header.php" 
        ?>
        </header>
        <main class="main-galerie">
            <div class="parent-cont">
            <div class="cont">
                <div class="slide i1 active"></div>
                <div class="slide i2"></div>
                <div class="slide i3"></div>
                <div class="slide i4"></div>
                <div class="slide i5"></div>
            </div>
            </div>
        </main>
    </div>
    <br><br><br>
    <?php
    include "./components/footer.php"
    ?>
</body>
<script src="./JS/script-galery.JS"></script>
</html>