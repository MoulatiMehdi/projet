<?php
session_start();
header('Content-type: text/html; charset=UTF-8');

$error = $_SESSION['error'] ?? null;
$_SESSION['menu'] = "edit_profile";

if (!isset($_SESSION['user'])) header('Location:deconnexion.php');

include 'php/user_controller.php';
include 'php/connexion_error.php';
include 'php/region_controller.php';
include 'php/province_controller.php';
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
    <section class="container d-flex justify-content-center align-items-center w-100 h-100 ">

        <div class="row  justify-content-around align-items-center">
            <div class="col col-12">
                <div class="row d-flex  justify-content-center align-items-center p-3 m-5 position-relative">

                    <div class="col-auto progress w-100 p-0 position-absolute" style="height: 10px; ">
                        <div class="progress-bar"></div>
                    </div>
                    <div class="d-flex position-absolute  justify-content-evenly align-items-center steps"></div>

                </div>
                <div class="row mb-5">
                    <div class="col col-7">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="regForm"
                              enctype="multipart/form-data" class="was-validated card row g-3 py-3 px-3">
                            <div class="tab row">
                                <div class="col col-6 mb-3 ">
                                    <label for="inputCategory" class="form-label">Type d'Immobilier</label>
                                    <select name="category" id="inputCategory" class="form-select">
                                        <option disabled="" value="">-- TYPE IMMOBILIER --</option>
                                        <option value="1">Appartements</option>
                                        <option value="2">Maisons</option>
                                        <option value="3">Plateaux</option>
                                        <option value="4"> Locaux industriels</option>
                                        <option value="5">Terrains</option>
                                        <option value="6">Villas</option>
                                        <option value="7">Bureaux</option>
                                        <option value="8">Magasins</option>

                                    </select>
                                </div>


                                <div class="col col-6 mb-3">
                                    <label for="inputTypeTransaction" class="form-label">Type de Transaction</label>
                                    <select name="type" class="form-select col-auto" id="inputTypeTransaction">
                                        <option value="" disabled="">-- TYPE DE TRANSACTION --</option>
                                        <option value="9">Vente</option>
                                        <option value="10">Location (Par Mois)</option>
                                        <option value="11">Location de vacances (Par Nuit)</option>
                                        <option value="12">Colocation</option>
                                    </select>
                                </div>
                                <div class="col col-6 mb-3">
                                    <label for="inputRegion" class="form-label">
                                        Région
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="region" class="form-select col-auto" id="inputRegion" required>
                                        <option value="" disabled="" selected class="text-center">-- REGION --</option>
                                        <?php
                                        printRegionOptions();
                                        ?>
                                    </select>
                                </div>
                                <div class="col col-6 mb-3">
                                    <label for="inputProvince" class="form-label">
                                        Province
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="province" class="form-select col-auto" id="inputProvince" disabled
                                            required>
                                        <option value="" disabled="" class="text-center" selected>-- PROVINCE --
                                        </option>

                                    </select>

                                </div>
                                <div class="col col-6 mb-3">
                                    <label for="inputVille" class="form-label">
                                        Ville
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="ville" class="form-select col-auto" id="inputVille" required>
                                        <option value="" disabled="" class="text-center" selected>-- VILLE --</option>
                                    </select>

                                </div>
                                <div class="col col-6 mb-3">
                                    <label for="inputAdresse" class="form-label">
                                        Adresse
                                    </label>
                                    <input name="adresse" type="text" class="form-select col-auto" id="inputAdresse"
                                           placeholder="Numéro et le nom de Rue" disabled>
                                </div>


                            </div>
                            <div class="tab row">

                            </div>
                            <div class="tab row"></div>
                            <div class="tab row"></div>

                            <div id="button-collector" class="col-12 d-flex justify-content-between ">
                                <input type="button" style="visibility:hidden" class="rectangle-button " id="prevBtn"
                                       onclick="nextPrev(-1)" value="Précedent">
                                <input type="button" class="rectangle-button " id="nextBtn" onclick="nextPrev(+1)"
                                       value="Suivant">

                            </div>
                        </form>
                    </div>
                    <img src="img/illustrations/imageMyspace.png" class="col col-4"
                         alt="Myinterimo,house">
                </div>
            </div>

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
    let provinces = [];
    <?php
    $region = array();
    $provinces = "";
    foreach (findAllRegions() as $key => $value) {
        $region[$value['id']] = $value['region'];
    }

    foreach ($region as $key => $value) {
        echo "regions[$key]=[";
        foreach (findProvinceByRegion($key) as $regionKey => $province) {
            echo "[\"" . $province['province'] . "\",\"" . $province['id'] . "\"],";

            $provinces .= "provinces[{$province['id']}]=[";

            foreach (findVilleByProvince($province['id']) as $provinceKey => $ville) {
                $provinces .= "\"" . $ville['ville'] . "\",";

            }
            $provinces .= "];\n";


        }
        echo "];\n";
    }
    echo $provinces;


    ?>
    console.log(regions);
    console.log(provinces);


</script>
<script src="js/region.js"></script>


</html>
