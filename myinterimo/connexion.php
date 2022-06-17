<?php
session_start();

include 'php/controller_user.php';
include 'php/messages.php';
$error = "";
if (isset($_SESSION['user'])) header('Location:' . MAIN_FOLDER . '/index.php');
if (isset($_POST['submit'])) {

    $email = htmlspecialchars($_POST['email']);
    $mot_de_passe = sha1($_POST['mot_de_passe']);

    $user = findUserByEmail($email);
    unset($_SESSION['user']);
    if ($user != null && $user['mot_de_passe'] === $mot_de_passe) {
        $_SESSION['user'] = $user;
        header('Location:' . MAIN_FOLDER . '/index.php');

    } else {
        $error = ERROR_EMAIL_OR_PASSWORD;
    }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Myinterimo</title>
    <!-- fonts-->
    <?php include 'php/elem_fonts.php' ?>
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html,body {
            width: 100%;
            height: 100%;
            top: 0 !important;
            left: 0 !important;
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
    <!-- JavaScript Bundle with Popper(Boostrap) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <!-- fontAwesome Script -->
    <script src="./js/fontAwesome.js"></script>

</head>
<body class="container d-flex justify-content-center align-items-center">
<section
        class="row row-cols-auto justify-content-around align-items-center ">
    <div class="box container col col-lg-5 col-md-6 col-10">
        <form action="" method="post">
            <div class="row">
                <h2 class="title">Myinterimo</h2>
            </div>
            <div class="row title-description text-left mb-3">
                <h6>Bienvenue dans votre monde immobilier !</h6>
            </div>
            <?php if (!empty($error)) msg_error_alert($error); ?>
            <div class="input-group mb-3 " style="height: 40px">
                <i class="fa-solid fa-envelope input-group-text  text-secondary bg-light" id="email-icon"></i>
                <input value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" name="email" type="text"
                       class="form-control" placeholder="Votre e-mail"
                       aria-label="Votre e-mail"
                       aria-describedby="email-icon" required>

            </div>

            <div class="input-group mb-3" style=" height: 40px">
                <i class="fa-solid fa-key input-group-text text-secondary bg-light " id="password-icon"></i>
                <input type="password" class="form-control " placeholder="Mot de passe" aria-label="Mot de Passe"
                       name="mot_de_passe" aria-describedby="password-icon" required>
            </div>
            <div>
                <button type="submit" name="submit" class="rectangle-button mb-3 text-center w-100"
                        style="height: 35px;">
                    S'inscrire
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
                <a href="./politique-de-confidentialite.php">cliquer ici</a>
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

</html>
