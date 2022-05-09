<?php

const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'myinterimo_db';
const TABLE_USERS = 'myinterimo_users';
$phone_error = "";
$email_error = "";
$n_siret_error = "";

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

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $civilite = htmlspecialchars($_POST['civilite']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $user_type = "user";
    $email = htmlspecialchars($_POST['email']);
    $mot_de_passe = sha1($_POST['mot_de_passe']);
    $nom_reseau = htmlspecialchars($_POST['nom_reseau']);
    $email_pro = htmlspecialchars($_POST['email_pro']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $site_url = htmlspecialchars($_POST['site_url']);
    $carte_t_reseau = htmlspecialchars($_POST['carte_t_reseau']);
    $n_siren = htmlspecialchars($_POST['n_siren']);
    $n_siret = htmlspecialchars($_POST['n_siret']);

    $count_phone = $Myinterimo->prepare("SELECT * FROM " . TABLE_USERS . " WHERE telephone LIKE (?)");
    $count_email = $Myinterimo->prepare("SELECT * FROM " . TABLE_USERS . " WHERE email LIKE (?)");
    $count_siret = $Myinterimo->prepare("SELECT * FROM " . TABLE_USERS . " WHERE n_siret LIKE (?)");

    $count_phone->execute(array($telephone));
    $count_email->execute(array($email));
    $count_siret->execute(array($n_siret));


    if ($count_phone->rowCount() != 0) {
        $phone_error = "numéro téléphone deja utilisée.\n";
    }
    if ($count_email->rowCount() != 0) $email_error .= "email deja utilisée.\n";
    if ($count_siret->rowCount() != 0) $n_siret_error .= "siret deja utilisée.\n";

    if (empty($phone_error) && empty($email_error) && empty($n_siret_error)) {
        $inser_user = $Myinterimo->prepare(
            "INSERT INTO myinterimo_users(
                             nom,prenom,telephone,civilite,user_type,adresse,
                             email,mot_de_passe,email_pro,nom_reseau,carte_t_reseau,
                             n_siren,n_siret,site_url) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $inser_user->execute(array($nom, $prenom, $telephone, $civilite, $user_type, $adresse,
            $email, $mot_de_passe, $email_pro, $nom_reseau, $carte_t_reseau, $n_siren, $n_siret, $site_url));
        header('Location:http://localhost:63342/projet-pfe/myinterimo/index.html');
    }


}

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte - Myinterimo</title>
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
            font-size: 13px;
        }

        p {
            font-size: 10px !important;
            color: #70798B;
            font-weight: bold;
            text-align: center;
        }

        label {
            font-size: small;
        }

        .step {
            padding: 1px 10px;
            color: #FFFFFF;
            background: darkgrey;
            border-radius: 30px;
            text-align: center;
            line-height: 30px;

            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 17px;
            transition: 0.3s ease-in;


        }

        .finish {

            background: dodgerblue;
            transition: 0.3s ease-out;

        }

        .progress-bar {
            background: dodgerblue;

        }

        .progress {
            border-radius: 20px;
        }

        .active {
            outline: 2px solid dodgerblue;
            background: white;
            color: dodgerblue;
            transition: 0.3s ease-out;

        }
    </style>
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="container d-flex justify-content-center align-items-center">
<section class="row  justify-content-around align-items-center">

    <div class="col col-lg-5 col-md-6 col-10">
        <div class="row d-flex  justify-content-center align-items-center mb-5 position-relative">

            <div class="col-auto progress w-100 p-0 position-absolute" style="height: 10px; ">
                <div class="progress-bar"></div>
            </div>
            <div class="d-flex position-absolute  justify-content-evenly align-items-center ">
                <a class="step col-auto" id="step1">1</a>
                <a class="step col-auto " id="step2">2</a>
            </div>

        </div>
        <form method="POST" action="" id="regForm" class="was-validated box row g-3 py-3 px-3">
            <div class="tab row g-3">
                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Prénom</label>
                    <input type="text" class="form-control" placeholder="Prenom" name="prenom"
                           pattern="([A-z0-9À-ž\s-]){2,}"
                           id="inputFirstName" required>
                </div>
                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Nom</label>
                    <input type="text" class="form-control" pattern="([A-z0-9À-ž\s-]){2,}" placeholder="nom"
                           name="nom" id="inputLastName" required>
                </div>
                <div class="col-6">
                    <label for="inputPhone" class="form-label">téléphone</label>
                    <input name="telephone" type="text" class="form-control" id="inputPhone"
                           pattern="^\+\d{1,3}[\s.-]\d{3}[\s.-]\d{6}$"
                           placeholder="+212-637-621862" required>
                </div>
                <div class="col-6">
                    <label for="inputGender" class="form-label">Civilité :</label>
                    <select name="civilite" class="form-select " aria-label="example" id="inputGender">
                        <option selected>Monsieur</option>
                        <option value="1">Madame</option>
                        <option value="2">Mademoiselle</option>
                    </select>
                </div>
                <div class="col-8">
                    <label for="inputEmail">Email</label>
                    <input name="email" type="Email" class="form-control" id="inputEmail"
                           pattern="^\w+(\.[\w]+)?@([\w]+\.)+\w{2,4}$"
                           placeholder="exemple@mail.com" required>
                </div>
                <div class="col-8 position-relative">
                    <label for="inputPassword">Mot de Passe</label>
                    <input name="mot_de_passe" type="password" class="form-control" id="inputPassword"
                           pattern="^[A-Z]+.{7,}$" placeholder="Mot de Passe" required>
                    <div class="invalid-feedback">
                        Au moins 8 characters.
                        <br>Le premier character en Majuscule.
                    </div>
                </div>
                <div class="col-8">
                    <label for="inputPasswordConfirm">Confirmation du Mot de Passe :</label>
                    <input type="password" class="form-control" id="inputPasswordConfirm"
                           placeholder="Confirmer Mot de Passe" required>
                </div>


            </div>
            <div class="tab row g-3">
                <div class="col-md-6">
                    <label for="inputNomReseau" class="form-label">Nom de mon reseaux :</label>
                    <input name="nom_reseau" type="text" class="form-control" placeholder="Nom Réseau"
                           id="inputNomReseau" required>
                </div>
                <div class="col-md-6">
                    <label for="inputSiteWeb" class="form-label">Site web :</label>
                    <input name="site_url" type="text" class="form-control" placeholder="Nom Réseau" id="inputSiteWeb"
                           required>
                </div>
                <div class="col-8">
                    <label for="inputEmailPro">Email Professionnel :</label>
                    <input name="email_pro" type="Email" class="form-control" id="inputEmailPro"
                           pattern="^\w+(\.[\w]+)?@([\w]+\.)+\w{2,4}$"
                           placeholder="exemple@mail.com" required>
                </div>
                <div class="col-md-6">
                    <label for="inputSIREN" class="form-label">Numéro de SIREN (9 Chiffres) </label>
                    <input name="n_siren" type="text" class="form-control" placeholder="N de SIREN"
                           maxlength="9" minlength="9"
                           pattern="^\d{9}$"
                           id="inputSIREN" required>
                </div>
                <div class="col-md-6">
                    <label for="inputSIRET" class="form-label">Numéro de SIRET (14 Chiffres) :</label>
                    <input name="n_siret" type="text" class="form-control" placeholder="N de SIRET" maxlength="14"
                           minlength="14"
                           pattern="^\d{14}$" id="inputSIRET" required>
                </div>
                <div class="col-md-6">
                    <label for="inputCarteT" class="form-label">Carte T de mon réseaux :</label>
                    <input name="carte_t_reseau" type="text" class="form-control" placeholder="Carte T de Réseau"
                           id="inputCarteT" required>
                </div>
                <!--<div class="col-md-6">
                    <label for="inputCCI" class="form-label">CCI :</label>
                    <input name="cii" type="text" class="form-control" placeholder="CCI" id="inputCCI" required>
                </div>-->
                <div class="col-md-6">
                    <label for="inputAdresse" class="form-label">Adresse :</label>
                    <input name="adresse" type="text" class="form-control" placeholder="adresse" id="inputAdresse"
                           required>
                </div>
            </div>
            <div id="button-collector" class="col-12 d-flex justify-content-between ">
                <input type="button" class="rectangle-button " id="prevBtn" onclick="nextPrev(-1)" value="Précedent">
                <input type="button" class="rectangle-button " name="submit" id="nextBtn" onclick="nextPrev(+1)"
                       value="Suivant">

            </div>
        </form>

        <h6 class="mt-3 text-center"> Vous avez déjà un compte? <a href="connexion.php">Se connecter</a></h6>
        <?php

        echo '<div style="color: red">' . $email_error . ' <br></div>';
        echo '<div style="color: red">' . $phone_error . ' <br></div>';
        echo '<div style="color: red">' . $n_siret_error . ' <br></div>';

        $email_error = "";
        $phone_error = "";
        $n_siret_error = "";

        ?>
    </div>
    <img src="img/illustrations/imageMyspace.png" style="width: 400px" class="col col-auto"
         alt="Myinterimo,house">

</section>
<div>

</div>

</body>
<!-- JavaScript Bundle with Popper(Boostrap) -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!-- fontAwesome Script -->
<script src="https://kit.fontawesome.com/85c9736486.js" crossorigin="anonymous"></script>
<script src="js/multipleForm.js"></script>
</html>
