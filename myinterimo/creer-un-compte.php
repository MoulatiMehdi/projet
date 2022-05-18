<?php

if (!isset($_SESSION)) session_start();

include 'php/user_controller.php';
include 'php/connexion_error.php';
if (isset($_SESSION['user'])) header('Location:' . MAIN_FOLDER . '/index.php');

$error = array();

if (isset($_POST) && !empty($_POST)) {

    $user = array();
    foreach ($_POST as $key => $value) {
        $user[$key] = htmlspecialchars($value);
    }
    $user['user_type'] = "USER";
    $user['mot_de_passe'] = sha1($_POST['mot_de_passe']);
    $user['user_img'] = 'anonyme.svg';

    if (isset($_FILES) && !empty($_FILES['user_img']['name'])) {

        if (!is_dir(USER_IMG_FOLDER))
            mkdir(USER_IMG_FOLDER, 777, true);

        if ($_FILES['user_img']['size']) {
            $extension = strtolower(strrchr($_FILES['user_img']['name'], "."));
            $chemin = USER_IMG_FOLDER . "/" . $user['n_siret'] . $extension;

            $result = move_uploaded_file($_FILES['user_img']['tmp_name'], $chemin);
            if ($result) {
                $user['user_img'] = $user['n_siret'] . strtolower(strrchr($_FILES['user_img']['name'], "."));
            } else {
                $_SESSION['error_photo'] = ERROR_PHOTO;
            }
        }

    }

    $error = saveUser($user);
    if ($error == null) {

        $_POST = array();
        unset($_SESSION['user']);
        $_SESSION['user'] = findUserByEmail($user['email']);
        header('Location:' . MAIN_FOLDER . '/index.php');
    }


}

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte - Myinterimo</title>
    <!-- fonts-->
    <?php include 'php/elem_fonts.php' ?>
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/steps.css">


</head>
<body aria-live="polite" aria-atomic="true" class="position-relative ">
<div class="toast-container position-absolute bottom-0 start-0  p-3 "
     style="z-index:5">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <?php

    if (!empty($_SESSION['error_photo'])) {
        msg_warning_toast($_SESSION['error_photo']);
        unset($_SESSION['error_photo']);
    }
    foreach ($error as $value) {
        msg_error_toast($value);

    }


    ?>
</div>
<section class="container d-flex justify-content-center align-items-center w-100 h-100 ">

    <div class="row  justify-content-around align-items-center">
        <div class="col col-lg-5 col-md-6 col-10">
            <div class="row d-flex  justify-content-center align-items-center mb-5 position-relative">

                <div class="col-auto progress w-100 p-0 position-absolute" style="height: 10px; ">
                    <div class="progress-bar"></div>
                </div>
                <div id="steps" class="d-flex position-absolute  justify-content-evenly align-items-center "></div>

            </div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="regForm"
                  enctype="multipart/form-data" class="was-validated box row g-3 py-3 px-3" novalidate>

                <div class="tab row">

                    <div class="col col-12 mb-3">
                        <h2 class="text-center text-primary my-3 form-title"> Informations Personnelle </h2>
                        <hr>
                    </div>
                    <div class="col col-12 mb-3 d-flex justify-content-center align-items-center flex-column">
                        <label for="fileInput" id="fileDisplayArea" class="circle-icon d-inline-flex"
                               style="cursor: pointer; ">
                            <i class="fa-solid fa-camera fa-xl position-absolute " id="user-image"></i>
                            <canvas class="circle-icon justify-content-center align-items-center position-absolute canvas"
                            ></canvas>


                        </label>
                        <input id="fileInput" value="" type="file" maxlength="4" accept="image/png,image/jpg,image/jpeg"
                               name="user_img"
                               hidden="hidden">
                        <label id="fileInput" class="form-label">Photo de Profil</label>
                    </div>
                    <div class="col col-md-6 mb-3">
                        <label for="inputFirstName" class="form-label">Prénom</label>
                        <input value="<?php if (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']) ?>"
                               type="text" class="form-control" placeholder="Prenom *" name="prenom"
                               pattern="([A-zÀ-ž\s]){2,}" id="inputFirstName" required>
                    </div>
                    <div class="col col-md-6 mb-3">
                        <label for="inputLastName" class="form-label">Nom</label>
                        <input value="<?php if (isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']) ?>"
                               type="text" class="form-control" placeholder="Nom *" name="nom"
                               pattern="([A-zÀ-ž\s-]){2,}" id="inputLastName" required>
                    </div>
                    <div class="col col-6 mb-2 position-relative">
                        <label for="inputDate" class="form-label">Date de Naissance :</label>
                        <input id="inputDate" type="date" class="form-control" name="date_naiss"
                               min="<?php
                               $tomorrow = mktime(0, 0, 0, date("m"), date("d"), date("Y") - 100);
                               echo date("Y-m-d", $tomorrow) ?>"
                               max="<?php
                               $tomorrow = mktime(0, 0, 0, date("m"), date("d"), date("Y") - 18);
                               echo date("Y-m-d", $tomorrow) ?>"
                               required>
                    </div>
                    <div class="col col-6 mb-3 position-relative">
                        <label for="inputPhone" class="form-label">téléphone</label>
                        <input value="<?php if (isset($_POST['telephone']) && empty($error['phone'])) echo htmlspecialchars($_POST['telephone']) ?>"
                               name="telephone" type="text"
                               class="form-control " id="inputPhone"
                               pattern="^\+\d{1,3}[\s.-]\d{3}[\s.-]\d{6}$"
                               placeholder="+212-637-621862" required>
                        <div class="invalid-tooltip">
                            N° ne respect pas la forme
                        </div>
                    </div>
                    <div class="col col-6 mb-2">
                        <label for="inputGender" class="form-label">Civilité :</label>
                        <select name="civilite" class="form-select " aria-label="example" id="inputGender">
                            <option selected>Monsieur</option>
                            <option value="1">Madame</option>
                            <option value="2">Mademoiselle</option>
                        </select>
                    </div>


                </div>
                <div class="tab row">
                    <div class="col col-12 mb-3">
                        <h2 class="text-center text-primary my-3 form-title"> Informations Professionnelle </h2>
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3 position-relative">
                        <label for="inputNomReseau" class="form-label"> Nom de mon reseaux :</label>
                        <input value="<?php if (isset($_POST['nom_reseau'])) echo htmlspecialchars($_POST['nom_reseau']) ?>"
                               name="nom_reseau" type="text" class="form-control" placeholder="Nom Réseau"
                               id="inputNomReseau" required>
                    </div>
                    <div class="col-md-6 mb-3 position-relative">
                        <label for="inputSiteWeb" class="form-label"> Site web :</label>
                        <input value="<?php if (isset($_POST['site_url'])) echo htmlspecialchars($_POST['site_url']) ?>"
                               name="site_url" type="text" class="form-control" placeholder="Nom Réseau"
                               id="inputSiteWeb"
                               required>
                    </div>
                    <div class="col-8 mb-3">
                        <label for="inputEmailPro"> Email Professionnel :</label>
                        <input value="<?php if (isset($_POST['email_pro'])) echo htmlspecialchars($_POST['email_pro']) ?>"
                               name="email_pro" type="Email" class="form-control" id="inputEmailPro"
                               pattern="^\w+(\.[\w]+)?@([\w]+\.)+\w{2,4}$"
                               placeholder="exemple@mail.com" required>
                    </div>
                    <div class="col-md-6 mb-3 position-relative">
                        <label for="inputSIREN" class="form-label"> Numéro de SIREN(9 Chiffres) </label>
                        <input value="<?php if (isset($_POST['n_siren'])) echo htmlspecialchars($_POST['n_siren']) ?>"
                               name="n_siren" type="text" class="form-control" placeholder="N de SIREN"
                               maxlength="9" minlength="9"
                               pattern="^\d{9}$"
                               id="inputSIREN" required>
                    </div>
                    <div class="col-md-6 mb-3 position-relative">
                        <label for="inputSIRET" class="form-label"> Numéro de SIRET(14 Chiffres) :</label>
                        <input value="<?php if (isset($_POST['n_siret']) && empty($error['siret'])) echo htmlspecialchars($_POST['n_siret']); ?>"
                               name="n_siret" type="text" class="form-control" placeholder="N de SIRET" maxlength="14"
                               minlength="14"
                               pattern="^\d{14}$" id="inputSIRET" required>
                        <div class="invalid-tooltip" id="siret_validation">
                            Saisir un valid SIRET
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 position-relative">
                        <label for="inputCarteT" class="form-label"> Carte T de mon réseau :</label>
                        <input value="<?php if (isset($_POST['carte_t_reseau'])) echo htmlspecialchars($_POST['carte_t_reseau']) ?>"
                               name="carte_t_reseau" type="text" class="form-control" placeholder="Carte T de Réseau"
                               id="inputCarteT" required>
                    </div>
                    <div class="col-md-6 mb-3 position-relative">
                        <label for="inputAdresse" class="form-label"> Adresse :</label>
                        <input name="adresse" type="text" class="form-control" placeholder="adresse" id="inputAdresse"
                               value="<?php if (isset($_POST['adresse'])) echo htmlspecialchars($_POST['adresse']) ?>"
                               required>
                    </div>
                </div>
                <div class="tab row">
                    <div class="col col-12 mb-3">
                        <h2 class="text-center text-primary my-3 form-title"> Connexion </h2>
                        <hr>
                    </div>
                    <div class="col col-8 mb-2 position-relative">
                        <label for="inputEmail">Email</label>
                        <input value="<?php if (isset($_POST['email']) && empty($error['email'])) echo htmlspecialchars($_POST['email']) ?>"
                               name="email" type="Email" class="form-control" id="inputEmail"
                               pattern="^\w+(\.[\w]+)?@([\w]+\.)+\w{2,4}$"
                               placeholder="exemple@mail.com" required>
                        <div class="invalid-tooltip">
                            saisir un email valide
                        </div>
                    </div>
                    <div class="col col-8 mb-2 position-relative">
                        <label for="inputPassword">Mot de Passe</label>
                        <input value="<?php if (isset($_POST['mot_de_passe'])) echo htmlspecialchars($_POST['mot_de_passe']) ?>"
                               name="mot_de_passe" type="password" class="form-control" id="inputPassword"
                               pattern="^.{8,32}$" placeholder="Mot de Passe" required>
                        <div class="invalid-tooltip ps-2">
                            enter 8-32 characters.
                        </div>
                    </div>

                    <div class="col col-8 mb-2 position-relative">
                        <label for="inputPasswordConfirm">Confirmation du Mot de Passe :</label>
                        <input value="<?php if (isset($_POST['confirm_mot_de_passe'])) echo htmlspecialchars($_POST['confirm_mot_de_passe']) ?>"
                               type="password" class="form-control" id="inputPasswordConfirm"
                               name="confirm_mot_de_passe" placeholder="Confirmer Mot de Passe" required>
                        <div class="invalid-tooltip ps-2">
                            le mot de passe n'est pas identique .
                        </div>
                    </div>

                </div>
                <div id="button-collector" class="col-12 d-flex justify-content-between ">
                    <input type="button" style="visibility:hidden" class="rectangle-button " id="prevBtn"
                           onclick="nextPrev(-1)" value="Précedent">
                    <input type="button" class="rectangle-button " id="nextBtn" onclick="nextPrev(+1)"
                           value="Suivant">

                </div>
            </form>

            <h6 class="mt-3 text-center"> Vous avez déjà un compte ? <a href="connexion.php"> Se connecter </a></h6>

        </div>
        <img src="img/illustrations/imageMyspace.png" style="width: 400px" class="col col-auto"
             alt="Myinterimo,house">
    </div>

</section>
</body>
<!--JavaScript Bundle with Popper(Boostrap)-->
<script type="javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!--fontAwesome Script-->
<script type="application/javascript" src="./js/fontAwesome.js"></script>
<script type="application/javascript" src="./js/validation.js"></script>
<script type="application/javascript" src="js/multipleForm.js"></script>
<script type="application/javascript" src="js/cropImage.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="application/javascript">
    $(document).ready(function () {
        $('.toast').toast('show');
    });
    cropImage("./img/user_img/anonyme.svg", 'canvas');
    window.onload = function () {
        let fileInput = document.getElementById('fileInput');
        //by default
        if (fileInput !== undefined) {
            fileInput.addEventListener('change', function () {
                let file = fileInput.files[0];
                let imageType = /image.*/;

                if (file.type.match(imageType)) {
                    let reader = new FileReader();


                    reader.onload = function () {
                        cropImage(reader.result.toString(), 'canvas');
                    }

                    reader.readAsDataURL(file);
                }
            });
        }
    }
</script>
</html>
