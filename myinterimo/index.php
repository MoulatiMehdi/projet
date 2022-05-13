<?php
if (!isset($_SESSION)) session_start();
$_SESSION['menu'] = 'accueil';
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
    <?php include 'elem_fonts.php' ?>
    <!-- icon -->
    <link rel="icon" href="img/logo/cropped-favicon-2.png" sizes="32x32">
    <!-- local CSS file-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/draggble-slide.css">
    <title>MyInterimo : L’inter-agence en mode 3.0</title>
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

<!-- navbar menu -->
<?php include 'elem_menu.php' ?>

<!-- grab some space to replace the fixed navbar -->
<section class=" py-lg-0 py-md-4  py-0"></section>

<div class="container-lg ">


    <!-- découvrez Myinterimo -->
    <section id="section1" class="row justify-content-around align-items-center px-3 py-5">
        <img class="col col-md-6 col-sm-8 col-12 order-md-2 animImgRight"
             src="img/illustrations/communication-_-man-woman-smartphone-call-video-call-chat-talk-group@2x.png"
             alt="man-women-smartphone">
        <div class="col col-md-6 col-12 order-md-1">
            <h6 class="primary-text"> Véritable réseau social immobilier</h6>
            <h1 class="bold-text">
                MyInterimo : L’inter-agence en mode 3.0
            </h1>
            <p class="description">
                Le véritable réseau social immobilier
                <strong>MyInterimo</strong>
                entre professionnels de l’immobilier, pour partager, communiquer et augmenter vos ventes.
                Invitez vos partenaires librement, créez un mur de biens communs pour déléguer vos mandats ou pas,
                saisie automatique de vos annonces à publier…
                <br>100% gratuit et illimité !</p>
            <div class="row">
                <div class="hstack gap-3 align-items-center justify-content-md-start justify-content-center">
                    <a href="#box3" class="rectangle-button " style="min-width: 215px">
                        Découvrez Myintermino
                        <i class="fa-solid fa-arrow-right fa-xl " style="padding-left: 10px"></i>
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="MyinterimoYoutubeVideo" tabindex="-1"
                         aria-labelledby="MyinterimoYoutubeVideoLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content bg-black ">
                                <iframe
                                        height="504" width="auto"
                                        src="https://www.youtube-nocookie.com/embed/4fs_eZbQaug"
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="circle-button" data-bs-toggle="modal" data-bs-target="#MyinterimoYoutubeVideo">
                        <i class="fa-solid fa-play fa-sm ">
                        </i>

                    </a>
                    <h6 class="fw-bolder text-center" style="font-size: 13px"> voir la vidéo</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- les fonctions de Myinterimo -->
    <section id="box1" class="box justify-content-center align-items-center p-5 my-5">
        <div class="row row-cols-auto  justify-content-around align-items-center">
            <div class="col col-md-4 col-12">
                <div class="row">
                    <h6 class="primary-text text-md-left text-center">Utilisez MyInterimo avec MyEspaceo et soyez 100%
                        connecté !</h6>
                    <h1 class="fw-bolder text-md-left text-center">
                        Fonctionnalités MyInterimo
                    </h1>
                    <p class="description text-md-left text-center">
                        Véritable réseau social de l’immobilier,
                        faites-vous des amis, créez votre mur commun
                        de biens partagés, développez votre chiffre
                        d'affaires et restez connecté.
                    </p>
                </div>
            </div>
            <div class="col col-md-6 col-12">
                <div class=" row row-cols-auto justify-content-center">
                    <div class="fonction col-sm-4 col-6 ">
                        <i class="circle-icon fa-solid fa-puzzle-piece fa-xl"></i>
                        <h6 class="circle-icon-title">Invitez des agences ou mandataires</h6>
                    </div>
                    <div class="fonction col-sm-4 col-6">
                        <i class="circle-icon fa-solid fa-eye fa-xl "></i>
                        <h6 class="circle-icon-title">Suivez vos annonces favorites</h6>
                    </div>
                    <div class="fonction col-sm-4 col-6">
                        <i class=" circle-icon fa-solid fa-credit-card fa-xl"></i>
                        <h6 class="circle-icon-title"> Ouvert à tous les PROS ayant une carte T</h6>
                    </div>
                    <div class="fonction col-sm-4 col-6">
                        <i class=" circle-icon fa-solid fa-link fa-xl"></i>
                        <h6 class="circle-icon-title">besoin de passerelles CRM</h6>
                    </div>
                    <div class="fonction col-sm-4 col-6">
                        <i class=" circle-icon fa-solid fa-share-from-square fa-xl"></i>
                        <h6 class="circle-icon-title"> Partagez tout type de mandat</h6>
                    </div>
                    <div class="fonction col-sm-4 col-6">
                        <i class=" circle-icon fa-solid fa-toggle-on fa-xl"></i>
                        <h6 class="circle-icon-title"> Déléguez vos mandats ou pas</h6>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- des informations  -->
    <section id="section2" class="p-3">
        <div class="row justify-content-around align-items-center">
            <img class="col col-md-6 col-sm-8 col-12 animImgLeft"
                 src="img/illustrations/delivery-_-man-woman-boat-sail-boat-logistic-map-box-package@2x.png"
                 alt="delivery-man-women-boat">
            <div class="col col-md-6 col-12">
                <div class="row ">
                    <div class="col">
                        <div class="row">
                            <h6 class="primary-text">Commencer dès maintenant !</h6>
                        </div>
                        <div class="row">
                            <h1 class="bold-text">MyInterimo souhaite rassembler les professionnels de
                                l’immobilier.</h1>
                        </div>
                        <div class="row">
                            <p class="description">
                                Nous pensons que l’union fait la force, qu'en proposant une
                                offre groupée vous serez encore plus représentatif sur vos
                                secteurs, plus convaincant en prise de mandat et avec une
                                offre élargie pour vos acheteurs, ce qui augmentera vos
                                ventes. L’effet Win-Win.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="fonction col col-sm-6">
                        <i class=" circle-icon fa-solid fa-magnet fa-xl"></i>
                        <strong class="circle-icon-title">Démultipliez vos mandats</strong>
                        <p class="description">
                            Mettez en avant votre réseau de partenaires
                            pour convaincre plus facilement vos prospects vendeurs,
                            quant à votre capacité à vendre.
                        </p>
                    </div>
                    <div class="fonction col col-sm-6">
                        <i class=" circle-icon fa-solid fa-euro-sign fa-xl"></i>
                        <strong class="circle-icon-title">Développez Vos Ventes</strong>
                        <p class="description">
                            Vous pourrez augmenter votre offre de biens pour la
                            plus grande satisfaction de vos prospects acheteurs,
                            grâce au partage.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section3" class="row justify-content-around align-items-center p-3">
        <img class="col col-md-6 col-sm-8 col-12 order-md-2 animImgRight"
             src="img/illustrations/e-commerce-_-woman-shopping-shop-commerce-e-commerce-shopping-cart@2x.png"
             alt="woman-shopping-shop-commerce-e-commerce">
        <div class="col col-md-6 col-12 justify-content-center align-items-center order-md-1">
            <div>
                <h6 class="primary-text">Restez à l'écoute du marché</h6>
                <h1 class="bold-text">
                    Recevez toute l’offre qui vous intéresse !
                </h1>

                <p class="description">
                    MyInterimo fonctionne comme un réseau social classique. En tant que membre, vous choisissez les
                    mandats que vous souhaitez partager avec les partenaires que vous aurez également choisis. Vous
                    pourrez créer un « mur » de biens communs tout en gardant la maîtrise sur vos mandats : vous
                    acceptez de déléguer ou pas. MyInterimo fonctionne sans que vous ayez besoin de ressaisir vos
                    annonces, sans limites de secteurs ni de frontières, et indépendamment de votre logiciel de
                    transaction.</p>

            </div>
        </div>

    </section>
    <section id="section4" class="row align-items-center justify-content-around p-3">
        <img class="col col-md-6 col-sm-8 col-12 animImgLeft"
             src="img/illustrations/marketing-_-woman-smartphone-electronic-device-announcement-ad-advertisement-notification@2x-e1643618620329.png"
             alt="woman-shopping-shop-commerce-e-commerce">
        <div class="col col-md-6 col-12 ">
            <div class="row">
                <h1 class="bold-text">
                    Plus d’offres, plus d’opportunités
                </h1>
            </div>
            <div class="row">
                <p class="description">
                    Chaque agence membre mutualise ses mandats avec la communauté MyInterimo pour un maximum de
                    visibilité afin de réaliser des ventes au meilleur prix et avec une très grande réactivité.
                </p>
            </div>

            <div class="row">
                <h1 class="bold-text">
                    Un fil d’actualité intelligent
                </h1>
            </div>
            <div class="row">
                <p class="description">
                    Nos experts en design et en développement ont conçu une interface ergonomique avec des
                    fonctionnalités qui répondent aux besoins et aux pratiques des utilisateurs. Votre fil
                    d’actualité
                    vous affichera les mises à jour des offres de vos partenaires en temps réel ainsi que leurs
                    derniers
                    biens en vente.
                </p>
            </div>
        </div>

    </section>
    <section id="section5" class="row justify-content-around align-items-center p-3">
        <img class="col col-md-6 col-sm-8 col-12 order-md-2 animImgRight"
             src="img/illustrations/workflow-web-development-_-chat-talk-conversation-communication-team-work-project-business@2x.png"
             alt="woman-shopping-shop-commerce-e-commerce">
        <div class="col-md-6 col-12 order-md-1">
            <div class="row">
                <h1 class="bold-text">
                    Collaborer pour être plus fort
                </h1>
            </div>
            <div class="row">
                <p class="description">
                    L’union fait la force. Au travers de vos partenariats, MyInterimo va permettre de constituer un
                    réseau immobilier puissant constitué d’une multitude d’agences de toute taille et de mandataires
                    indépendants. Ce sont vos partenariats qui orienteront le rayonnement local, national ou
                    international du réseau. Cela va permettre de fluidifier le marché, et à chaque membre d’élargir son
                    panel d’offres.
                    Rendre le marché de l’immobilier plus accessible et transparent pour les acheteurs, c’est aussi la
                    vocation de MyInterimo !
                </p>


            </div>
        </div>


    </section>
    <section id="section6" class="row justify-content-around align-items-center p-3">
        <img class="col col-md-6 col-sm-8 col-12 animImgLeft"
             src="img/illustrations/business-_-woman-search-find-scan-magnifier-profile-account-user-employee-rating-reviedw@2x.png"
             alt="woman-search-find-scan">
        <div class="col col-md-6 col-12 align-items-center">
            <div class="row">
                <h1 class="bold-text">
                    Se faire connaître et reconnaître
                </h1>

            </div>
            <div class="row">
                <p class="description">
                    Avec MyInterimo, prenez de l’ampleur en devenant un influenceur de votre secteur immobilier.
                    Suivez
                    les confrères avec lesquels vous collaborez, interagissez facilement et de manière instantanée,
                    écrivez vos commentaires, émettez des avis et recommandez votre réseau. C’est aussi grâce à vous
                    que
                    votre réseau vivra et perdurera. MyInterimo est l’application qui va changer votre vision et
                    votre
                    utilisation des réseaux sociaux pour le meilleur !

                </p>
            </div>
        </div>
    </section>

    <!-- les fonctions de Myinterimo avec le button -->
    <section id="box2" class="box justify-content-around align-items-center my-3">
        <div class="row row-cols-auto justify-content-around align-items-center">
            <div class="col col-lg-4  col-md-12">
                <div class="row justify-content-center">
                    <h6 class="primary-text text-center">C'est <strong>GRATUIT</strong>, partager sans compter</h6>
                </div>
                <div class="row justify-content-center">
                    <h1 class=" bold-text text-center">
                        Publications illimitées
                    </h1>
                </div>
                <div class="row justify-content-center">
                    <p class=" description">
                        Profitez de l’application MyInterimo dès à présent. MyInterimo est une application
                        entièrement
                        gratuite
                        et elle le restera toujours. C’est promis !
                    </p>
                </div>
                <div class="row justify-content-center">
                    <a href="fonctionnalite.php" class=" rectangle-button  " style="width: 250px">
                        voir plus de fonctionnalités
                        <i class="fa-solid fa-arrow-right fa-xl" style="margin-left: 15px;"></i>
                    </a>
                </div>
            </div>
            <div class="d-flex d-none d-lg-flex " style="height: 400px;">
                <div class="vr "></div>
            </div>
            <div class="col col-lg-6 col-md-12 py-4">
                <div class="row row-cols-auto ">
                    <div class="col col-md-6 col-sm-12 ">
                        <div class="fonction row row-cols-auto align-items-center justify-content-center">
                            <div class="col col-md-12 col-auto">
                                <i class="circle-icon fa-regular fa-handshake fa-2xl"></i>
                            </div>
                            <div class="col col-md-12 col-9">
                                <h6 class="circle-icon-title text-md-start text-center">Des partenariats maîtrisés</h6>
                                <p class="description text-md-start text-center">
                                    Vous choisissez avec quels partenaires du marché immobilier, vous souhaitez
                                    travailler et quels mandats vous souhaitez déléguer. Invitez vos partenaires actuels
                                    à vous rejoindre et faites partie de la communauté MyInterimo !
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6 col-sm-12">
                        <div class="fonction row row-cols-auto align-items-center justify-content-center">
                            <div class="col col-md-12 col-auto">
                                <i class="circle-icon fa-solid fa-shuffle fa-2xl"></i>
                            </div>
                            <div class="col col-md-12 col-9">
                                <h6 class="circle-icon-title text-md-start text-center">Offre de biens démultipliée</h6>
                                <p class="description text-md-start text-center">
                                    Avec MyInterimo, vous êtes en capacité de proposer plus de biens à vos clients
                                    acheteurs.
                                    Plutôt
                                    qu’ils aillent traiter en direct, vous allez les fidéliser en leur proposant une
                                    offre
                                    élargie
                                    sur
                                    votre secteur d’activité, ou hors de votre secteur, et en toute simplicité.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6 col-sm-12">
                        <div class="fonction row row-cols-auto align-items-center justify-content-center">
                            <div class="col col-md-12 col-auto">
                                <i class="circle-icon fa-solid fa-wallet fa-2xl"></i>
                            </div>
                            <div class="col col-md-12 col-9">
                                <h6 class="circle-icon-title text-md-start text-center">Plus de mandats </h6>
                                <p class="description text-md-start text-center">
                                    Imaginez le bouche-à-oreille dont vous allez bénéficier auprès des vendeurs et des
                                    acheteurs.
                                    Votre
                                    réputation vous permettra de capter encore plus de clients et de gagner plus de
                                    mandats
                                    grâce
                                    notamment aux recommandations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6 col-sm-12">
                        <div class="fonction row row-cols-auto align-items-center justify-content-center">
                            <div class="col col-md-12 col-auto">
                                <i class="circle-icon fa-solid fa-crown fa-2xl"></i>
                            </div>
                            <div class="col col-md-12 col-9">
                                <h6 class="circle-icon-title text-md-start text-center">Votre business en
                                    croissance</h6>
                                <p class="description text-md-start text-center">
                                    Indiscutablement, votre business va profiter de l’offre élargie que vous êtes en
                                    mesure
                                    de
                                    proposer
                                    à vos clients. Les barrières géographiques ou les limites inhérentes à la taille de
                                    votre
                                    agence
                                    vont disparaître à partir du moment où vous allez utiliser MyInterimo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- les chiffres de Myinterimo-->
    <?php include 'elem_chiffres.php' ?>
</div>

<!-- des Témoignages -->
<?php include 'elem_temoignages.php' ?>

<div class="container-lg">
    <!-- tous les Sites web de l'entreprise-->
    <?php include 'site_webs_entreprise.php' ?>
</div>

<?php include 'elem_footer.php' ?>

</body>
<!-- fontAwesome Script -->
<script src="./js/fontAwesome.js"></script>

<!-- JavaScript Bundle with Popper(Boostrap) -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!--JavaScript for draggble-slide -->
<script src="js/draggble-slide.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/counter.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.modal').each(function () {
            let src = $(this).find('iframe').attr('src');

            $(this).on('click', function () {
                $(this).find('iframe').attr('src', '');
                $(this).find('iframe').attr('src', src);

            });
        });
    });
</script>


</html>
