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
        <!-- BLOK REGISTRACE -->
        <main>
        <form class="chilli-main" action="./auth/check_signup.php" method="POST">
            <h1>Registruj se</h1>
            <!-- JMÉNO -->
                <div class="acc-jmeno-box">
                <label for="name">Jméno:</label>
                <input id="jmeno" name="name" type="text" placeholder="Adam" required>
                <br><br>
            </div>
            <!-- PŘÍJMENÍ -->
            <div class="acc-prijmeni-box">
                <label for="surname">Příjmení:</label>
                <input id="příjmení" name="surname" type="text" placeholder="Smith" required>
                <br><br>
            </div>
            <!-- EMAIL -->
                <div class="acc-email-box">
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" placeholder="Vas@email.com" required>
                <br><br>
            </div>
            <!-- HESLO -->
             <div class="acc-heslo-box">
             <label for="password">Heslo:</label>
             <input id="heslo" name="password" type="password" placeholder="Vaše heslo" required>
             </div>
             <div class="acc-heslo2-box">
             <label for="password-2">Potvrzení hesla:</label>
             <input id="heslo-2" name="password_confirm" type="password" placeholder="Vaše heslo" required>
             </div>
             <!-- BUTTON REGISTRACE -->
             <div class="Submit-box-chilli">
                     <input type="submit" name="submit-reg" onclick="validate(this.parentNode.parentNode)" class="Submit-button" value="Registrovat"></input>
             </div>
             <p>Zpět na <a href="./index-chilli-login.php">přihlášení</a></p>
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
<script src="./JS/script-chilli-reg.JS"></script>
</html>