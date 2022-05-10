<?php

include 'const_variable.php';
$error = "";

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


/* Attempt to connect to MySQL database */
try {
    $Myinterimo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $Myinterimo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could Not Connect to DATABASE => " . $e->getMessage());


}
if (isset($_POST['submit'])) {

    $email = htmlspecialchars($_POST['email']);
    $mot_de_passe = sha1($_POST['mot_de_passe']);

    $find_email = $Myinterimo->prepare("SELECT email,mot_de_passe  FROM " . TABLE_USERS . " WHERE email LIKE (?) AND mot_de_passe LIKE (?)");
    $find_email->execute(array($email, $mot_de_passe));

    if ($find_email->rowCount() == 1) {

        header('Location:http://localhost:63342/projet-pfe/myinterimo/index.php');

    } else {
        $error = "L'email ou le mot de passe est incorrect";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Myinterimo</title>
    <!-- fonts-->
    <link rel="stylesheet" id="auxin-fonts-google-css"
          href="//fonts.googleapis.com/css?family=Nunito%3A200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;ver=4.2"
          type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
          href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.9.3"
          type="text/css" media="all">
    <link type="text/css" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93">
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: relative;
            margin: 0;
            padding: 0;
        }

        a {
            font-size: 13px;
        }


        h2 {
            color: #1B2F46;
            font-size: 22px !important;
            font-weight: bold !important;
            font-family: "Montserrat", Helvetica, Arial, serif;

        }

        h6 {
            color: #999999;
            font-size: 10px;
        }

        p {
            font-size: 10px !important;
            color: #70798B;
            font-weight: bold;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="container d-flex justify-content-center align-items-center">
<section class="row row-cols-auto justify-content-around align-items-center w-100 h-100">
    <div class="box container col col-lg-5 col-md-6 col-10">
        <form action="" method="post">
            <div class="row">
                <h2 class="title">Myinterimo</h2>
            </div>
            <div class="row title-description text-left mb-3">
                <h6>Bienvenue dans votre monde immobilier !</h6>
            </div>
            <?php
            if (!empty($error))
                echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                    </svg>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>'.$error.'</div>
                    </div>';
            ?>
            <div class="input-group mb-3 ">
                <i class="fa-solid fa-envelope input-group-text  text-secondary bg-light" id="email-icon"></i>
                <input name="email" type="text" class="form-control" placeholder="Votre e-mail"
                       aria-label="Votre e-mail"
                       aria-describedby="email-icon" required>

            </div>

            <div class="input-group mb-3 ">
                <i class="fa-solid fa-key input-group-text text-secondary bg-light " id="password-icon"></i>
                <input type="password" class="form-control " placeholder="Mot de passe" aria-label="Mot de Passe"
                       name="mot_de_passe" aria-describedby="password-icon" required>
            </div>
            <div>
                <button type="submit" name="submit" class="rectangle-button mb-3 text-center w-100"
                        style="height: 35px;">
                    Se Connecter
                </button>
            </div>

            <div class="row d-flex justify-content-between">
                <a href="#" class="col col-auto mb-3"> Mot de passe oublié?</a>
                <a href="creer-un-compte.php" class="col col-auto mb-3"> Nouveau Compte</a>
            </div>
            <div class="row">
                <p>Les informations de votre compte seront gérées par Myinterimo Sarl Suisse. Pour
                    exercer vos droits conformément au RGPD,
                </p>
            </div>
            <div class="row justify-content-center mb-3">
                <a href="#">cliquer ici</a>
            </div>
            <div class="row">
                <p>COPYRIGHT 2021 MYESPACEO, TOUS DROITS RESERVES.</p>
            </div>
            <div class="row">
                <hr class="w-100">
            </div>
            <div class="row row-cols-auto  justify-content-center mt-3">
                <a href="https://www.facebook.com/myinterimo/" target="_blank">
                    <i class="fa-brands fa-facebook fa-xl"></i>
                </a>
                <a href="https://www.instagram.com/myinterimo/" target="_blank">
                    <i class="fa-brands fa-google fa-xl text-danger"></i>
                </a>
            </div>

        </form>

    </div>
    <img src="img/illustrations/login.png" class="col col-md-6 col-10 img-fluid mt-md-0 mt-5" alt="Myinterimo,house">
</section>
</body>
<!-- JavaScript Bundle with Popper(Boostrap) -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!-- fontAwesome Script -->
<script src="https://kit.fontawesome.com/85c9736486.js" crossorigin="anonymous"></script>
</html>
