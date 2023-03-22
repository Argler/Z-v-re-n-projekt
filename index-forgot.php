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
    <title>Zahradnictví Gypsywagon</title>
</head>

<body>
    <div class="page">
        <?php
        include "./components/header.php"
        ?>
        <div class="chilli-main-toget">
        <!-- BLOK PŘIHLÁŠENÍ -->
        <form action="./auth/update_password.php" method="POST">
        <main class="chilli-main">
            <h1>Nové heslo</h1>
            <!-- EMAIL -->
            <div class="acc-email-box">
            <label for="email">Email:</label>
            <input id="email" name="username" type="email" placeholder="Vas@email.com" required>
            <br><br>
            </div>
            <!-- HESLO -->
            <div class="acc-heslo-box">
            <label for="password">Heslo:</label>
            <input id="password" name="password-forgot" type="password" placeholder="Vaše heslo" required>
            </div>
            <div class="acc-heslo2-box">
            <label for="password">Potvrzení hesla:</label>
            <input id="password" name="password-con-forgot" type="password" placeholder="Vaše heslo" required>
            </div>
            <!-- BUTTON PŘIHLÁŠENÍ -->
            <div class="Submit-box-chilli-login">
                    <input type="submit" name="submit-forgot" onclick="validate(this.parentNode)" class="Submit-button" id="Login" value="Odeslat"></input>
            </div>
            <div>
                <p>Nejsi registrovaný? Registruj se <a href="./index-reg.php">ZDE</a></p>
                <p>Zpět na <a href="./index-chilli-login.php">přihlášení</a></p>
            </div>
        </main>
        </form>
        </div>
     </div>
    </div>
    <br><br><br>
    <?php
    include "./components/footer.php"
    ?>
</body>
<script src="./JS/script-chilli-login.JS"></script> 
</html>