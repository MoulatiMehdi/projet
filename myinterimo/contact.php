<?php
if (!isset($_SESSION)) session_start();
$_SESSION['menu'] = 'contact';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- local CSS file-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/draggble-slide.css">

    <!-- fonts-->
    <?php include 'php/elem_fonts.php' ?>
    <!-- icon -->
    <link rel="icon"
          href="./img/logo/cropped-favicon-2.png"
          sizes="32x32">
    <title>Contact - MyInterimo</title>
</head>
<body aria-live="polite" aria-atomic="true" class="position-relative ">
<div class="toast-container position-absolute top-50 start-50  p-3 "
     style="z-index:5">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <?php

    if (!empty($_SESSION['error_phone'])) {
        msg_warning_toast($_SESSION['error_phone']);
        unset($_SESSION['error_phone']);
    }


    ?>
</div>


<!-- navBar menu-->
<?php include 'php/elem_menu_deconnexion.php' ?>

<!-- grap some space to replace the fixed navbar space -->
<section class="p-5 "></section>

<!-- Myinterimo Form and Location -->
<section class="row row-cols-auto p-3 justify-content-around align-items-center">
    <iframe class="col col-md-5  order-md-2 col-10 my-5 align-items-center justify-content-center"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5522.208832866412!2d6.144618862426756!3d46.208377806090255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c65264618f9b7%3A0xbe35f14108fc0fea!2sRue%20P%C3%A9colat%201%2C%201201%20Gen%C3%A8ve%2C%20Switzerland!5e0!3m2!1sen!2sma!4v1651016839141!5m2!1sen!2sma"
            width="600" height="500"
            style="border:0;padding: 0; border-radius: 20px; box-shadow: 0 0 5px 5px rgba(163,164,173,0.38) "
            allowfullscreen="" loading="lazy"


            referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="col col-lg-4 col-md-5 order-md-1 col-10">
        <h5 class="py-2">Besoin d’informations, d’une démonstration ou questions ?</h5>
        <h5 class="py-1 text-secondary">
            Contactez notre équipe, elle se fera un plaisir de répondre à vos questions.
        </h5>
        <h1 class="fw-bolder py-1">
            Contactez notre équipe
        </h1>
        <h6>Nos équipes sont à votre disposition du lundi au jeudi de 9 h à 12 h 30 puis de 14 h à 18 h et le
            vendredi de
            9 h
            à 12 h 30 puis de 14 h à 17 h 30. N’hésitez pas à nous contacter pour toute demande.
        </h6>
        <form action="" method="POST" data-status="init" class="row form needs-validation" novalidate>
            <div class="position-relative">
                <label for="name"></label>
                <input type="text" class="form-control rounded-pill px-4 py-3 border-0" id="name" name="name"
                       placeholder="Votre nom *" required>
                <div class="invalid-feedback px-3">Saisir votre nom !</div>
            </div>
            <div class="position-relative">
                <label for="email"></label>
                <input type="email" class="form-control rounded-pill px-4 py-3 border-0" id="email"
                       name="email" placeholder="Votre E-Mail *" required>
                <div class="invalid-feedback px-3">
                    Saisir Votre E-mail !
                </div>
            </div>
            <div class="position-relative">
                <label for="message"></label>
                <textarea class="form-control border-0 p-4" style="border-radius: 15px" id="message"
                          name="message" placeholder="Votre Message *" rows="7" required></textarea>
                <div class="invalid-feedback px-3">
                    Saisir votre Message !
                </div>
            </div>
            <div class="mt-3 ms-2">
                <button class="btn btn-dark px-4 py-1" type="submit">Envoyer</button>
            </div>

        </form>
    </div>
</section>

<!-- Myinterimo information for Contact -->
<div class="container-lg my-5">
    <section class="row justify-content-center align-items-center  px-3">
        <div class="col col-md-4 col-12 p-3">
            <div class="fonction row  align-items-center justify-content-center ">
                <div class="col col-md-4 col-auto ">
                    <div class=" circle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33.378" height="33.379"
                             viewBox="0 0 33.378 33.379">
                            <g transform="translate(0 -4.789)">
                                <path d="M35.011,39.275a5.627,5.627,0,0,0-3.588-1.545,5.786,5.786,0,0,0-3.4,1.33l-.07.052v0c-.469.365-1.49,1.306-1.5,1.314a1.19,1.19,0,0,1-.677.22.515.515,0,0,1-.092-.007c-.019-.006-1.887-.595-5.619-4.274-3.656-3.715-4.251-5.577-4.252-5.578a1.156,1.156,0,0,1,.22-.809c.4-.435,1.1-1.216,1.363-1.568l0,0c1.823-2.484,1.756-4.57-.223-6.973-1.321-1.6-2.966-3.257-5.148-3.362-1.667-.086-3.326.734-5.1,2.507a7.066,7.066,0,0,0-1.675,6.755c.132.758,1.506,7.625,8.872,14.99S28.354,51.065,29.08,51.19a7.339,7.339,0,0,0,1.932.257h0a6.875,6.875,0,0,0,4.854-1.926c1.766-1.767,2.586-3.435,2.506-5.1C38.268,42.24,36.614,40.6,35.011,39.275Zm-.63,8.761a4.755,4.755,0,0,1-3.358,1.311,5.306,5.306,0,0,1-1.414-.191c-.038-.011-.077-.02-.115-.026-.067-.011-6.8-1.209-13.884-8.29C8.555,33.788,7.33,27.021,7.318,26.956a.946.946,0,0,0-.024-.113,4.951,4.951,0,0,1,1.118-4.775c1.278-1.277,2.387-1.9,3.392-1.9.04,0,.079,0,.118,0,1.365.066,2.6,1.352,3.628,2.6,1.362,1.653,1.4,2.679.171,4.37l-.046.062c-.2.256-.834.967-1.2,1.368a3.181,3.181,0,0,0-.7,2.709c.053.218.621,2.249,4.49,6.246a.69.69,0,0,0,.076.089l.5.5a.431.431,0,0,0,.074.062c4.011,3.881,6.041,4.451,6.258,4.5a2.644,2.644,0,0,0,.611.069,3.211,3.211,0,0,0,2.1-.772c.414-.381,1.158-1.049,1.392-1.221a3.706,3.706,0,0,1,2.152-.914A3.648,3.648,0,0,1,33.675,40.9c1.249,1.027,2.534,2.261,2.6,3.627C36.325,45.562,35.706,46.71,34.381,48.036Z"
                                      transform="translate(-5 -13.279)"></path>
                            </g>
                        </svg>

                    </div>
                </div>
                <div class="col col-md-8 col-auto">
                    <h4><strong>Téléphone</strong></h4>
                    <h6 class="circle-icon-subtitle">+41 76 437 82 83</h6>
                    <h6 class="circle-icon-subtitle">+33 4 80 95 94 39</h6>
                </div>
            </div>
        </div>
        <div class="col col-md-4 col-12 p-3">
            <div class="fonction row align-items-center justify-content-center">
                <div class="col col-md-4 col-auto ">
                    <div class="circle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="78.456" height="88.528"
                             viewBox="0 0 78.456 88.528">
                            <g transform="matrix(1, 0, 0, 1, 0, 0)">
                                <g transform="translate(1425.5 -132.5)" fill="none">
                                    <path d="M-1387.271,197.528h0c-.172-.185-4.267-4.583-8.364-10.078a70.488,70.488,0,0,1-5.75-8.854c-1.734-3.273-2.614-5.988-2.614-8.069a16.318,16.318,0,0,1,4.9-11.685,16.724,16.724,0,0,1,11.829-4.84,16.722,16.722,0,0,1,11.828,4.84,16.318,16.318,0,0,1,4.9,11.685c0,2.082-.879,4.8-2.614,8.069a70.486,70.486,0,0,1-5.75,8.854c-4.094,5.492-8.191,9.893-8.363,10.078Zm.315-34.747a6.858,6.858,0,0,0-6.891,6.809,6.858,6.858,0,0,0,6.891,6.808,6.859,6.859,0,0,0,6.893-6.808A6.859,6.859,0,0,0-1386.957,162.781Z"
                                          stroke="none"></path>
                                    <path d="M -1387.271362304688 194.5447692871094 C -1385.71044921875 192.7806396484375 -1383.111694335938 189.7424163818359 -1380.510864257813 186.2535247802734 C -1378.143920898438 183.0781860351563 -1376.264404296875 180.1862487792969 -1374.924560546875 177.6579895019531 C -1372.956665039063 173.9447021484375 -1372.543579101563 171.7295074462891 -1372.543579101563 170.5250701904297 C -1372.543579101563 166.6498260498047 -1374.072387695313 163.0052490234375 -1376.848388671875 160.2627563476563 C -1379.630859375 157.5138244628906 -1383.33251953125 155.9999237060547 -1387.271240234375 155.9999237060547 C -1391.210083007813 155.9999237060547 -1394.911987304688 157.5138702392578 -1397.69482421875 160.2627563476563 C -1400.471069335938 163.0054779052734 -1402 166.6500396728516 -1402 170.5250701904297 C -1402 171.729248046875 -1401.5869140625 173.9442291259766 -1399.619018554688 177.6578826904297 C -1398.278564453125 180.1869049072266 -1396.39892578125 183.078857421875 -1394.032348632813 186.2533874511719 C -1391.42919921875 189.7450256347656 -1388.83154296875 192.7816925048828 -1387.271362304688 194.5447692871094 M -1386.956665039063 160.7806549072266 C -1382.05322265625 160.7806549072266 -1378.064086914063 164.7321319580078 -1378.064086914063 169.5891571044922 C -1378.064086914063 174.4461669921875 -1382.05322265625 178.3976440429688 -1386.956665039063 178.3976440429688 C -1391.859252929688 178.3976440429688 -1395.847778320313 174.4461669921875 -1395.847778320313 169.5891571044922 C -1395.847778320313 164.7321319580078 -1391.859252929688 160.7806549072266 -1386.956665039063 160.7806549072266 M -1387.271240234375 197.5276184082031 L -1387.272216796875 197.5265808105469 C -1387.444580078125 197.3419952392578 -1391.53955078125 192.943115234375 -1395.6357421875 187.4487915039063 C -1398.063720703125 184.1919403076172 -1399.998291015625 181.2129364013672 -1401.386108398438 178.5944976806641 C -1403.120483398438 175.3215789794922 -1404 172.6066436767578 -1404 170.5250701904297 C -1404 166.1111450195313 -1402.259887695313 161.9612884521484 -1399.100463867188 158.8399810791016 C -1395.940673828125 155.7188262939453 -1391.739868164063 153.9999237060547 -1387.271240234375 153.9999237060547 C -1382.802978515625 153.9999237060547 -1378.60205078125 155.7188262939453 -1375.442749023438 158.8399810791016 C -1372.283569335938 161.9610748291016 -1370.543579101563 166.1109161376953 -1370.543579101563 170.5250701904297 C -1370.543579101563 172.6068572998047 -1371.422973632813 175.3218231201172 -1373.157348632813 178.5945129394531 C -1374.545166015625 181.2133026123047 -1376.479858398438 184.1923217773438 -1378.907348632813 187.4488220214844 C -1383.001831054688 192.9412841796875 -1387.097900390625 197.3419189453125 -1387.270263671875 197.5265808105469 L -1387.271240234375 197.5276184082031 Z M -1386.956665039063 162.7806549072266 C -1390.756469726563 162.7806549072266 -1393.847778320313 165.8349456787109 -1393.847778320313 169.5891571044922 C -1393.847778320313 173.3433532714844 -1390.756469726563 176.3976440429688 -1386.956665039063 176.3976440429688 C -1383.15625 176.3976440429688 -1380.064086914063 173.3433532714844 -1380.064086914063 169.5891571044922 C -1380.064086914063 165.8349456787109 -1383.15625 162.7806549072266 -1386.956665039063 162.7806549072266 Z"
                                          stroke-width="0.7" fill="#000"></path>
                                </g>
                            </g>
                        </svg>

                    </div>
                </div>
                <div class="col col-md-8 col-auto">
                    <h4><strong>Adresse</strong></h4>
                    <h6 class="circle-icon-subtitle">1 Rue de Pécolat Genève,</h6>
                    <h6 class="circle-icon-subtitle">1201 - Suisse</h6>
                </div>
            </div>
        </div>
        <div class="col col-md-4 col-12 p-3">
            <div class="fonction row align-items-center justify-content-center">
                <div class="col col-md-4 col-auto">
                    <div class="circle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.743" height="29.603"
                             viewBox="0 0 44.743 29.603">
                            <g transform="translate(-16.687 -28.65)">
                                <g transform="translate(17.037 29)">
                                    <path d="M21.166,981.362a4.151,4.151,0,0,0-4.129,4.129v20.645a4.151,4.151,0,0,0,4.129,4.129H56.951a4.151,4.151,0,0,0,4.129-4.129V985.491a4.151,4.151,0,0,0-4.129-4.129Zm0,2.753H56.951a1.344,1.344,0,0,1,1.376,1.376v20.645a1.344,1.344,0,0,1-1.376,1.376H21.166a1.344,1.344,0,0,1-1.376-1.376V985.491A1.344,1.344,0,0,1,21.166,984.115Zm4.667,2.731a1.376,1.376,0,0,0-.817,2.365l6.925,6.882-6.882,6.258a1.378,1.378,0,0,0,1.849,2.043l6.989-6.365,2.086,2.065a4.372,4.372,0,0,0,6.129,0l2.086-2.065,7.011,6.365a1.378,1.378,0,1,0,1.849-2.043l-6.9-6.28,6.946-6.86a1.376,1.376,0,1,0-1.936-1.957L40.156,998.136a1.85,1.85,0,0,1-2.237,0L26.951,987.255a1.376,1.376,0,0,0-1.118-.408Z"
                                          transform="translate(-17.037 -981.362)" stroke="#fff"
                                          stroke-width="0.7"></path>
                                </g>
                            </g>
                        </svg>
                    </div>

                </div>
                <div class="col col-md-8 col-auto">
                    <h4><strong>E-Mail</strong></h4>
                    <h6 class="circle-icon-subtitle">hello@myinterimo.com</h6>
                    <h6 class="circle-icon-subtitle">support@myinterimo.com</h6>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- les Témoignages -->
<?php include 'php/elem_temoignages.php' ?>
<div class="container-lg">
    <!-- tous les Sites web de l'entreprise-->
<?php include 'php/site_webs_entreprise.php' ?>
</div>

<?php include 'php/elem_footer.php' ?>
</body>
<script src="./js/fontAwesome.js" ></script>
<!-- JavaScript Bundle with Popper -->
<script src="js/draggble-slide.js"></script>
<script src="js/validation.js"></script>
<script src="php/send_email.php"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</html>
