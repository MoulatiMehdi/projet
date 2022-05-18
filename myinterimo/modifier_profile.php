<?php
session_start();
$error = $_SESSION['error'] ?? null;
$_SESSION['menu'] = "edit_profile";

include 'php/user_controller.php';
include 'php/connexion_error.php';
if (!isset($_SESSION['user'])) header('Location:deconnexion.php');
?>
<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- fonts-->
    <?php include 'php/elem_fonts.php' ?>
    <!-- icon -->
    <link rel="icon" href="img/logo/cropped-favicon-2.png" sizes="32x32">
    <!-- local CSS file-->
    <link rel="stylesheet" href="css/style.css">
    <title>Modifier le Profile - Myinterimo</title>
    <style>
        .politique section {
            margin: 35px 0;
        }

        a {
            font-size: 15px;
            color: var(--color-main);
        }

        h5, h3 {
            font-family: "Rubik", sans-serif;
            font-weight: 500;
        }

        .card-title {
            font-family: "Rubik", Helvetica, Arial, serif;
            font-size: 20px;
        }

        .card ul .nav-link:hover {
            cursor: pointer !important;
        }

        h1 {
            font-family: "Rubik", sans-serif;
            font-size: 40px;
            font-weight: 700;
        }

        ul li {
            font-size: 15px !important;
            font-weight: 500;
            color: var(--color-text-description);
            /*text-align: center;*/
        }
    </style>
    <script src="./js/fontAwesome.js"></script>

    <!-- JavaScript Bundle with Popper(Boostrap) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

</head>

<body aria-live="polite" aria-atomic="true" class="position-relative ">
<div class="toast-container position-absolute  h-100 top-0 start-50 p-4"
     style="z-index:5; margin-top: 100px">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <?php
    if (isset($error) && !empty($error)) {
        if (!empty($_SESSION['error']['photo'])) {
            msg_warning_toast($_SESSION['error_photo']);
            unset($_SESSION['error']['photo']);
        }
        foreach ($error as $key => $value) {
            msg_error_toast($value);
        }
        unset($_SESSION['error']);
    } else {

        if (isset($_SESSION['success']))
            msg_success_toast($_SESSION['success']['update']);
        unset($_SESSION['success']);

    }

    ?>
</div>
<?php include 'php/elem_menu_deconnexion.php' ?>
<div class="container ">

    <!-- grab some space to replace the fixed navbar -->
    <section class=" my-3 py-3"></section>
    <form method="POST" action="php/update_user.php" enctype="multipart/form-data"
          class="was-validated py-3">
        <section class="d-flex justify-content-center align-items-start my-5 ">

            <div class="col card col-3  me-5 justify-content-center align-items-center">
                <div class="row justify-content-center align-items-center mt-5">

                    <div class="col col-auto py-1 d-flex align-items-center flex-column ">
                        <div class="fw-bold text-center text-dark fs-5 p-1"><?php echo ucfirst($_SESSION['user']['nom']) . " " . ucfirst($_SESSION['user']['prenom']) ?></div>

                        <canvas id="user-image" class=" circle-icon canvas "
                                style="width: 125px !important; height: 125px !important;"></canvas>

                    </div>
                </div>
                <div class="row align-items-center justify-content-center pb-4">
                    <input type="button" id="buttonId" class="col rectangle-button col-auto"
                           value="Changer l'image">
                    <input id="fileId" value="" type="file"
                           accept="image/png,image/jpg,image/jpeg"
                           name="update_user_img"
                           hidden="hidden">
                    <script type="text/javascript">
                        document.getElementById('buttonId').addEventListener('click', openDialog);

                        function openDialog() {
                            document.getElementById('fileId').click();
                        }
                    </script>
                </div>
                <h6 class=" card col  col-8 p-3  text-center text-muted"
                    style="font-size: 13px;   background-color:  #F1F4FD;  border: 3px #00000011 solid ;">
                    l'image doit être de forme jpeg, jpg ou png.
                    <br/><br/> la taille maximale est 2Mo.
                </h6>
                <h6 class="text-muted p-3" style="font-size:14px;">
                    <b>inscrit depuis</b>
                    : <?php echo date("d M Y", $_SESSION['user']['date_inscrit']) ?></h6>


            </div>
            <div class="col card col-7 " style="min-height:581px ">
                <div class="card-header">
                    <ul class=" nav nav-tabs card-header-tabs">
                        <li class="nav-item step">
                            <a class="nav-link active" onclick="displayTab(0)" aria-current="page" href="#">Information
                                Générale</a>
                        </li>
                        <li class="nav-item step">
                            <a class="nav-link" aria-current="page" onclick="displayTab(1)" href="#">Coordonnées</a>
                        </li>
                        <li class="nav-item step">
                            <a class="nav-link" aria-current="page" onclick="displayTab(2)" href="#">Information
                                Professional</a>
                        </li>
                        <li class="nav-item step">
                            <a class="nav-link" aria-current="page" onclick="displayTab(3)" href="#">Changer le Mot de
                                Passe</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body  px-5 me-5 ">
                    <div class="tab row">
                        <div class="col  col-12 mb-3">
                            <h3 class="text-center text-primary my-3 card-title"> Informations générales </h3>
                        </div>
                        <div class="col col-md-6 mb-3">
                            <label for="inputFirstName" class="form-label">Prénom</label>
                            <input value="<?php if (isset($_SESSION['user']['prenom'])) echo htmlspecialchars($_SESSION['user']['prenom']) ?>"
                                   type="text" class="form-control" placeholder="Prenom *" name="update_prenom"
                                   pattern="([A-zÀ-ž\s]){2,}" id="inputFirstName" required>
                        </div>
                        <div class="col col-md-6 mb-3">
                            <label for="inputLastName" class="form-label">Nom</label>
                            <input value="<?php if (isset($_SESSION['user']['nom'])) echo htmlspecialchars($_SESSION['user']['nom']) ?>"
                                   type="text" class="form-control" placeholder="Nom *" name="update_nom"
                                   pattern="([A-zÀ-ž\s-]){2,}" id="inputLastName" required>
                        </div>

                        <div class="col col-6 mb-2">
                            <label for="inputGender" class="form-label">Civilité :</label>
                            <select name="update_civilite" class="form-select " aria-label="example"
                                    id="inputGender">
                                <option selected>Monsieur</option>
                                <option value="1">Madame</option>
                                <option value="2">Mademoiselle</option>
                            </select>
                        </div>
                        <div class="col col-6 mb-2">
                            <label for="inputDate" class="form-label">Date de Naissance :</label>
                            <input id="inputDate" type="date" class="form-control" name="date_naiss"
                                   value="<?php echo $_SESSION['user']['date_naiss']; ?>" min="<?php
                            $tomorrow = mktime(0, 0, 0, date("m"), date("d"), date("Y") - 100);
                            echo date("Y-m-d", $tomorrow) ?>"
                                   max="<?php
                                   $tomorrow = mktime(0, 0, 0, date("m"), date("d"), date("Y") - 18);
                                   echo date("Y-m-d", $tomorrow) ?>"
                                   required></div>
                    </div>
                    <div class="tab row">
                        <div class="col col-12 mb-3">
                            <h3 class="text-center text-primary my-3 card-title"> Coordonnées </h3>
                        </div>
                        <div class="col col-6 mb-3 position-relative">
                            <label for="inputPhone" class="form-label">téléphone</label>
                            <input value="<?php if (isset($_SESSION['user']['telephone']) && empty($error['phone'])) echo htmlspecialchars($_SESSION['user']['telephone']) ?>"
                                   name="update_telephone" type="text"
                                   class="form-control " id="inputPhone"
                                   pattern="^\+\d{1,3}[\s.-]\d{3}[\s.-]\d{6}$"
                                   placeholder="+212-637-621862" required>
                            <div class="invalid-tooltip">
                                N° ne respect pas la forme
                            </div>
                        </div>
                        <div class="col col-8 mb-2 position-relative">
                            <label for="inputEmail">Email</label>
                            <input value="<?php if (isset($_SESSION['user']['email']) && empty($error['email'])) echo htmlspecialchars($_SESSION['user']['email']) ?>"
                                   name="update_email" type="Email" class="form-control" id="inputEmail"
                                   pattern="^\w+(\.[\w]+)?@([\w]+\.)+\w{2,4}$"
                                   placeholder="exemple@mail.com" required>
                            <div class="invalid-tooltip">
                                saisir un email valide
                            </div>
                        </div>
                    </div>
                    <div class="tab row">
                        <div class="col col-12 mb-3">
                            <h3 class="text-center text-primary my-3 card-title"> Information Professionnel </h3>
                        </div>
                        <div class="col-8 mb-3">
                            <label for="inputEmailPro"> Email Professionnel :</label>
                            <input value="<?php if (isset($_SESSION['user']['email_pro'])) echo htmlspecialchars($_SESSION['user']['email_pro']) ?>"
                                   name="update_email_pro" type="Email" class="form-control" id="inputEmailPro"
                                   pattern="^\w+(\.[\w]+)?@([\w]+\.)+\w{2,4}$"
                                   placeholder="exemple@mail.com" required>
                        </div>

                        <div class="col-md-6 mb-3 position-relative">
                            <label for="inputNomReseau" class="form-label"> Nom de mon reseaux :</label>
                            <input value="<?php if (isset($_SESSION['user']['nom_reseau'])) echo htmlspecialchars($_SESSION['user']['nom_reseau']) ?>"
                                   name="update_nom_reseau" type="text" class="form-control"
                                   placeholder="Nom Réseau"
                                   id="inputNomReseau" required>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                            <label for="inputSiteWeb" class="form-label"> Site web :</label>
                            <input value="<?php if (isset($_SESSION['user']['site_url'])) echo htmlspecialchars($_SESSION['user']['site_url']) ?>"
                                   name="update_site_url" type="text" class="form-control" placeholder="Nom Réseau"
                                   id="inputSiteWeb">
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                            <label for="inputSIREN" class="form-label"> Numéro de SIREN(9 Chiffres) </label>
                            <input value="<?php if (isset($_SESSION['user']['n_siren'])) echo htmlspecialchars($_SESSION['user']['n_siren']) ?>"
                                   name="update_n_siren" type="text" class="form-control" placeholder="N de SIREN"
                                   maxlength="9" minlength="9"
                                   pattern="^\d{9}$"
                                   id="inputSIREN" required>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                            <label for="inputSIRET" class="form-label"> Numéro de SIRET(14 Chiffres) :</label>
                            <input value="<?php if (isset($_SESSION['user']['n_siret']) && empty($error['siret'])) echo htmlspecialchars($_SESSION['user']['n_siret']); ?>"
                                   name="update_n_siret" type="text" class="form-control" placeholder="N de SIRET"
                                   maxlength="14"
                                   minlength="14"
                                   pattern="^\d{14}$" id="inputSIRET" required>
                            <div class="invalid-tooltip" id="siret_validation">
                                Saisir un valid SIRET
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                            <label for="inputCarteT" class="form-label"> Carte T de mon réseau :</label>
                            <input value="<?php if (isset($_SESSION['user']['carte_t_reseau'])) echo htmlspecialchars($_SESSION['user']['carte_t_reseau']) ?>"
                                   name="update_carte_t_reseau" type="text" class="form-control"
                                   placeholder="Carte T de Réseau"
                                   id="inputCarteT" required>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                            <label for="inputAdresse" class="form-label"> Adresse :</label>
                            <input name="update_adresse" type="text" class="form-control" placeholder="adresse"
                                   id="inputAdresse"
                                   value="<?php if (isset($_SESSION['user']['adresse'])) echo htmlspecialchars($_SESSION['user']['adresse']) ?>"
                                   required>
                        </div>
                    </div>
                    <div class="tab row ">
                        <div class="col col-12 mb-5">
                            <h3 class="text-center text-primary my-3 card-title"> Changer Mot de Passe </h3>
                        </div>
                        <div class="col col-8 mb-3 position-relative">
                            <label for="inputCurrentPassword">Mot de Passe</label>
                            <input value="" name="current_mot_de_passe" type="password" class="form-control"
                                   id="inputCurrentPassword" pattern="^.{8,32}$" placeholder="Mot de Passe">
                            <div class="invalid-tooltip ps-2">
                                saisir entre 8-32 characters.
                            </div>
                        </div>
                        <div class="col col-8 mb-3 position-relative">
                            <label for="inputPassword">Nouvelle Mot de Passe</label>
                            <input value=""
                                   name="update_mot_de_passe" type="password" class="form-control"
                                   id="inputPassword"
                                   pattern="^.{8,32}$" placeholder="Mot de Passe">
                            <div class="invalid-tooltip ps-2">
                                saisir entre 8-32 characters.
                            </div>
                        </div>
                        <div class="col col-8 mb-3 position-relative">

                            <label for="inputConfirmPassword">Confirmer Mot de Passe</label>
                            <input value="" type="password" class="form-control" id="inputConfirmPassword"
                                   pattern="^.{8,32}$" placeholder="Mot de Passe">
                            <div class="invalid-tooltip ps-2" id="tooltipEditConfirmPassword">
                                saisir entre 8-32 characters.
                            </div>
                        </div>
                    </div>


                </div>
                <div id="button-collector" class="card-footer d-flex justify-content-end ">
                    <input type="submit" class="rectangle-button my-2" name="update_user"
                           value="Enregistrer">
                </div>
            </div>

        </section>
    </form>
</div>
<?php include 'php/elem_footer.php' ?>

</body>
<script src="js/editForm.js"></script>
<script src="js/validation.js"></script>
<script src="js/cropImage.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="application/javascript">
    $(document).ready(function () {
        $('.toast').toast('show');
    });

    cropImage("<?php echo $_SESSION['imgProfile'] ?>", 'canvas');
    window.onload = function () {
        let fileInput = document.getElementById('fileId');

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
