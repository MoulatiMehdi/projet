<?php
session_start();
header('Content-type: text/html; charset=UTF-8');

$error = $_SESSION['error'] ?? null;
$_SESSION['menu'] = "edit_profile";

if (!isset($_SESSION['user'])) header('Location:deconnexion.php');

include 'php/user_controller.php';
include 'php/connexion_error.php';
include 'php/region_controller.php';
include 'php/ville_controller.php';


?>
<!doctype html>
<html lang="fr">
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
    <link rel="stylesheet" href="css/steps.css">
    <title>Modifier le Profile - Myinterimo</title>
    <style>

        h5, h3 {
            font-family: "Rubik", sans-serif;
            font-weight: 500;
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
<div class="toast-container position-absolute  top-0 start-50 p-4"
     style="z-index:5; margin-top: 100px">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <?php
    if (isset($error) && !empty($error)) {
        if (!empty($_SESSION['error']['photo'])) {
            msg_warning_toast($_SESSION['error']['photo']);
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
    <section class=" my-3 py-3" style="height: 90px"></section>
    <section class="container col  justify-content-center flex-column w-100 h-100 ">


        <div class="row d-flex  justify-content-center align-items-center  pb-4 m-4 position-relative">

            <div class="col-auto progress w-75 p-0 position-absolute" style="height: 10px; ">
                <div class="progress-bar"></div>
            </div>
            <div class="d-flex position-absolute  w-75 justify-content-evenly align-items-center steps"></div>

        </div>
        <div class="row justify-content-around align-items-center p-4 ">
            <div class="col col-6">
                <form method="post" class="was-validated card  row py-4 px-5 g-3 " id="regForm"
                      style="height: 520px;">
                    <div class="tab row ">
                        <div class="col text-center form-title">
                            Les informations Générales
                            <hr style="opacity: 100%; color: var(--color-main); height: 3px; border-radius: 2px;">
                        </div>
                        <div class="col col-10 mb-3 ">
                            <label for="inputCategory" class="form-label">
                                Type d'Immobilier
                                <span class="text-danger">*</span>
                            </label>
                            <select name="category" id="inputCategory" class="form-select" required>
                                <option disabled class="text-center" value="" selected>
                                    -- TYPE IMMOBILIER --
                                </option>
                                <option value="1">Appartements</option>
                                <option value="2">Maisons et Villas</option>
                                <option value="4">Magasin, Commerces et Locaux industriels</option>
                                <option value="5">Terrains et Fermes</option>
                                <option value="7">Bureaux et Plateaux</option>
                                <option value="8">autre</option>

                            </select>
                        </div>
                        <div class="col col-10 mb-3">
                            <label for="inputTypeTransaction" class="form-label">
                                Type de Transaction
                                <span class="text-danger">*</span>
                            </label>
                            <select name="type" class="form-select col-auto" id="inputTypeTransaction" required>
                                <option value="" disabled selected class="text-center">
                                    -- TYPE DE TRANSACTION --
                                </option>
                                <option value="1">Vente</option>
                                <option value="2">Location (Par Mois)</option>
                                <option value="3">Location de vacances (Par Nuit)</option>
                                <option value="4">Colocation</option>
                                <option value="5">Demande</option>
                                <option value="6">Demande de location</option>
                            </select>
                        </div>
                        <div class="col col-6 mb-3">
                            <label for="inputRegion" class="form-label">
                                Région
                                <span class="text-danger">*</span>
                            </label>
                            <select name="region" class="form-select col-auto" id="inputRegion" required>
                                <option value="" disabled selected class="text-center">-- REGION --</option>
                                <?php printRegionOptions(); ?>
                            </select>
                        </div>
                        <div class="col col-6 mb-3">
                            <label for="inputVille" class="form-label">
                                Ville
                                <span class="text-danger">*</span>
                            </label>
                            <select name="ville" class="form-select col-auto" id="inputVille" required>
                                <option value="" disabled class="text-center" selected>-- VILLE --</option>
                            </select>

                        </div>
                        <div class="col col-10 mb-3">
                            <label for="inputAdresse" class="form-label">
                                Adresse
                            </label>
                            <input name="adresse" type="text" class="form-control col-auto" id="inputAdresse"
                                   placeholder="Numéro et le nom de Rue" disabled>
                        </div>
                    </div>
                    <div class="tab row ">
                        <div class="col col-12 mb-3 text-center form-title">
                            Description de Bien
                            <hr style="opacity: 100%; color: var(--color-main); height: 3px; border-radius: 2px;">
                        </div>
                        <div class="col col-6  mb-3">
                            <label for="titreAnnounce" class="form-label">
                                Titre de l'announce
                                <span class="text-danger">*</span>
                            </label>
                            <input id="titreAnnounce" type="text" name="titre" class="form-control" required>
                        </div>
                        <div class="col col-6 mb-3">
                            <label for="prix" class="form-label">
                                Prix<span class="text-danger">*</span>
                            </label>
                            <div class=" input-group">
                                <input id="prix" type="number" name="prix" class="form-control col col-6"
                                       aria-describedby="dhs" required>
                                <span class="input-group-text" id="dhs">Dhs</span>
                            </div>
                        </div>
                        <div class="col col-12 mb-3">
                            <label for="description" class="form-label">
                                Description Announce
                                <span class="text-danger">*</span>
                            </label>
                            <div class="position-relative">
                                <textarea id="description" class="form-control " maxlength="4000" rows="7" cols="45"
                                          placeholder="Saisir un Texte..." required></textarea>
                                <span id="descriptionLength" class="position-absolute bottom-0 end-0 p-2">0/4000</span>
                            </div>
                        </div>


                    </div>
                    <div class="tab row ">

                    </div>
                    <div class="tab row row-cols-auto justify-content-center">
                        <div class="col col-12 text-center form-title">
                            Images de Bien
                            <hr style="opacity: 100%; color: var(--color-main); height: 3px; border-radius: 2px;">
                        </div>
                        <div class="dropBox position-relative" style="display:none">
                            <canvas class="dropBox0 position-absolute w-100 h-100"></canvas>
                            <button type="button" onclick="removeFromList(0)" class="btn-close btn-close btn-danger ">
                            </button>


                        </div>
                        <div class="dropBox position-relative" style="display:none">
                            <canvas class="dropBox1 position-absolute w-100 h-100"></canvas>
                            <button type="button" onclick=" removeFromList(1)" class="btn btn-close"

                            ></button>

                        </div>
                        <div class="dropBox position-relative" style="display:none">
                            <canvas class="dropBox2 position-absolute w-100 h-100"></canvas>
                            <button type="button" onclick="removeFromList(2)" class="btn btn-close"></button>

                        </div>
                        <div class="dropBox position-relative" style="display:none">
                            <canvas class="dropBox3 position-absolute w-100 h-100"></canvas>
                            <button type="button" onclick="removeFromList(3)" class="btn btn-close"
                            ></button>

                        </div>
                        <div id="addImage" role="button" tabindex="0" class="dropBox col col-5">
                            <input accept="image/*" multiple="" id="inputFile" type="file" tabindex="-1"
                                   style="display: none;">
                            <svg class="av-icon" height="64" width="64" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg" aria-labelledby="ImagesTitleID"
                                 style="fill: rgb(46, 107, 255); stroke: rgb(46, 107, 255); stroke-width: 0;"><title
                                        id="ImagesTitleID">Images Icon</title>
                                <path d="M14.749 8.383a1.434 1.434 0 01-1.738 1.04 1.434 1.434 0 01-1.04-1.737 1.434 1.434 0 011.737-1.04 1.434 1.434 0 011.04 1.737z"></path>
                                <path fill-rule="evenodd"
                                      d="M21.877 5.98L10.54 3.137a1.387 1.387 0 00-1.68 1.005l-.377 1.5c-.1-.01-.202-.007-.307.01l-6.18.976c-.64.1-1.08.7-.983 1.34l1.798 11.934c.1.66.725 1.105 1.38.984l11.98-1.716 2.253.566a1.387 1.387 0 001.682-1.007l2.777-11.067a1.387 1.387 0 00-1.006-1.681zM2.32 7.897l5.829-.921-2.067 8.234a1.387 1.387 0 001.007 1.682l5.743 1.441-8.75 1.254L2.32 7.896zm19.22-.571l-1.476 5.88-1.736-2.703a.862.862 0 00-.514-.375.854.854 0 00-.74.165l-3.542 2.79a.486.486 0 01-.667-.07l-1.42-1.705a1.107 1.107 0 00-.581-.354 1.114 1.114 0 00-.763.069l-1.756.864 1.859-7.406 11.335 2.845z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span>Ajouter</span>
                        </div>

                        <div class="col col-12 infoBox  alert alert-light alert-dismissible fade show"
                             role="alert">
                            <div class="px-0">
                                <h4 class="fw-bolder">
                                    <svg class="m-2" height="32" width="32" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg"
                                         aria-labelledby="ErrorOutlineTitleID"
                                         style="fill: rgb(46, 107, 255); stroke: rgb(46, 107, 255); stroke-width: 0;">
                                        <title
                                                id="ErrorOutlineTitleID">ErrorOutline Icon</title>
                                        <path d="M11 15h2v2h-2v-2zm0-8h2v6h-2V7zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path>
                                    </svg>
                                    Conseils
                                </h4>
                                <ul>
                                    <li>4 image au Maximum</li>
                                    <li>Prenez de belles photos bien éclairées.</li>
                                    <li>C'est la première impression qui compte!</li>
                                </ul>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    </div>
                    <div id="button-collector"
                         class="col col-12 p-4 d-flex justify-content-between position-absolute bottom-0 start-0">
                        <input type="button" style="visibility:hidden" class="rectangle-button " id="prevBtn"
                               onclick="prevTab()" value="Précedent">
                        <input type="button" class="rectangle-button " id="nextBtn" onclick="nextTab()"
                               value="Suivant" disabled>
                    </div>
                </form>

            </div>
            <img src="img/illustrations/imageMyspace.png" class="col col-auto "
                 alt="Myinterimo,house">
        </div>


    </section>
</div>
<?php include 'php/elem_footer.php' ?>

</body>
<script src="js/announceForm.js"></script>
<script src="js/validation.js"></script>
<script src="js/cropImage.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="application/javascript">
    $(document).ready(function () {
        $(' .toast').toast('show');
    });

    cropImage("<?php echo $_SESSION['imgProfile'] ?>", 'canvas');

</script>
<script>


    let regions = [];
    <?php
    $region = array();
    foreach (findAllRegions() as $key => $value) {
        $region[$value['id']] = $value['region'];
    }

    foreach ($region as $key => $value) {
        echo "regions[$key]=[";
        foreach (findVilleByRegion($key) as $regionKey => $ville) {
            echo "\"" . $ville['ville'] . "\",";
        }
        echo "];\n";
    }

    ?>


</script>
<script src="js/region.js"></script>
<script src="js/chooseImages.js"></script>


</html>