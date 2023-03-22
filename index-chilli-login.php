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
        <main>
        <form class="chilli-main" action="./auth/check_login.php" method="POST">
            <h1>Přihlaš se</h1>
            <!-- EMAIL -->
            <div class="acc-email-box">
            <label for="email">Email:</label>
            <input id="email" name="username" type="email" placeholder="Vas@email.com" required>
            <br><br>
            </div>
            <!-- HESLO -->
            <div class="acc-heslo-box">
            <label for="password">Heslo:</label>
            <input id="password" name="password" type="password" placeholder="Vaše heslo" required>
            </div>
            <!-- BUTTON PŘIHLÁŠENÍ -->
            <div class="Submit-box-chilli-login">
                    <input type="submit" name="submit" onclick="validate(this.parentNode)" class="Submit-button" id="Login" value="Přihlásit se"></input>
            </div>
             <!-- ZAPAMATOVAT -->
            <div class="Remember-box-chilli-login">
            <label for="remember">Zapamatovat</label>
            <input type="checkbox" name="remember" id="remember">
            </div>
            <div>
                <p>Nejsi registrovaný? Registruj se <a href="./index-reg.php">ZDE</a></p>
                <p>Nepamatuji si heslo <a href="./index-forgot.php">ZDE</a></p>
            </div>
        </form>
        </main>
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