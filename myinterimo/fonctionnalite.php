<?php
session_start();
$_SESSION['menu'] = 'fonctionnalite';
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


    <!-- local CSS file-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/draggble-slide.css">

    <!-- fonts-->
    <?php include 'elem_fonts.php' ?>
    <!-- icon -->
    <link rel="icon"
          href="img/logo/cropped-favicon-2.png"
          sizes="32x32">
    <title>Fonctionnalités - MyInterimo</title>
</head>
<body>
<!-- navbar menu -->
<?php include 'elem_menu.php' ?>
<div class="container-lg">

    <!-- grab some space to replace the fixedNavBar -->
    <section class="  py-4 "></section>

    <!-- Text with image-->
    <section id="section1" class="row justify-content-around align-items-center p-3">
        <img class="animImgLeft col col-md-6 col-8 justify-content-center"
             src="img/illustrations/business-_-man-woman-project-launch-start-up-workspace-office-computer@2x.png"
             alt="man-women-smartphone">
        <div class="col col-md-6 col-12">
            <div class="row">
                <h6 class="primary-text text-md-start text-center">Votre nouveau réseau</h6>
                <h1 class="bold-text text-md-start text-center">
                    Social, Immobilier 100% Gratuit
                </h1>

                <p class="description text-md-start text-center">
                    Collaborez avec vos confrères professionnels Avec MyInterimo, vivez l’inter-agence en mode 3.0.
                    Véritable
                    réseau social de l’immobilier, faites-vous des amis, créez votre mur commun de biens partagés,
                    développez
                    votre chiffre d'affaires et restez connecté.
                </p>
            </div>
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
                            <div class="modal-content ">
                                <iframe
                                        height="504" width="auto"
                                        src="https://www.youtube.com/embed/4fs_eZbQaug"
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

    <!-- toutes les fonctionnalités de Myinterimo -->
    <section class="p-3">
        <div class="row row-cols-auto ">
            <div class="fonction col-sm-4 col-6">
                <i class=" circle-icon fa-regular fa-credit-card fa-xl"></i>
                <h6 class="circle-icon-title"> Ouvert à tous les PROS ayant une carte T</h6>
                <p class="description">
                    Tous les pros de l’immobilier sont les bienvenus en respectant les dispositions de la loi Hoguet.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-brands fa-slideshare fa-xl"></i>
                <h6 class="circle-icon-title">Invitez des agences ou mandataires pour être amis</h6>
                <p class="description">
                    Profitez de notre puissant annuaire pour trouver vos futurs partenaires.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-solid fa-person-circle-check fa-xl"></i>
                <h6 class="circle-icon-title">Choisissez vos amis partenaires sur votre secteur, en France ou à
                    l'étranger</h6>
                <p class="description">
                    Vous pourrez augmenter votre offre de biens pour la plus grande satisfaction de vos prospects
                    acheteurs, grâce au partage.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-xl fa-solid fa-gears"></i>
                <h6 class="circle-icon-title">Créez votre mur de biens communs partagés</h6>
                <p class="description">
                    Véritable réseau social immobilier consultez les biens de vos amis.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class=" circle-icon fa-regular fa-share-from-square fa-xl"></i>
                <h6 class="circle-icon-title"> Partagez tout type de mandat avec vos amis</h6>
                <p class="description">
                    Vous partagerez avec vos amis tous les biens que vous diffusez, location ou vente, et neufs ou
                    anciens
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-regular fa-file-zipper fa-xl"></i>
                <h6 class="circle-icon-title"> Partagez vos mandats simples ou exclusifs</h6>
                <p class="description">
                    Sans distinction, partagez vos mandats simples ou exclusifs, peu importe vous êtes entre amis.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class=" circle-icon fa-solid fa-land-mine-on  fa-xl"></i>
                <h6 class="circle-icon-title"> Déléguez vos mandats ou pas</h6>
                <p class="description">
                    En totale liberté vous pourrez déléguer ou pas les mandats de vos annonces partagées entre amis.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-solid fa-martini-glass fa-xl"></i>
                <h6 class="circle-icon-title"> Partage d'honoraires libre</h6>
                <p class="description">
                    Parce que chaque mandat est unique, vous fixez vos règles de partage, consultables dans les infos
                    complémentaires de vos annonces. </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class=" circle-icon fa-solid fa-link fa-xl"></i>
                <h6 class="circle-icon-title">besoin de passerelles CRM</h6>
                <p class="description">
                    Vous allez bénéficier de notre technologie pour diffuser sans limites et sans contraintes.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-xl fa-solid fa-scroll"></i>
                <h6 class="circle-icon-title">Logiciel transaction libre</h6>
                <p class="description">
                    Quel que soit votre logiciel de transaction vous pourrez partager vos annonces entre amis. </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-xl fa-solid fa-hand-holding-heart"></i>
                <h6 class="circle-icon-title">Commentez ou aimez les annonces</h6>
                <p class="description">
                    Véritable fil d’actualité intelligent, vous serez connecté aux annonces et à vos amis. </p>
            </div>

            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-solid fa-money-bill-trend-up fa-xl"></i>
                <h6 class="circle-icon-title">Suivez l'évolution du prix d'une annonce</h6>
                <p class="description">
                    En cliquant sur Suivre le prix d’une annonce, vous serez prévenu par mail de tout changement de
                    prix.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-solid fa-text-slash fa-xl"></i>
                <h6 class="circle-icon-title">Aucune saisie pour publier vos biens</h6>
                <p class="description">
                    Nous avons développé une nouvelle technologie permettant de récupérer vos annonces diffusées sur le
                    web, et de vous les associer pour les diffuser sur votre mur commun de biens partagés entre amis.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-xl fa-solid fa-fingerprint"></i>
                <h6 class="circle-icon-title">Personnalisez les informations de vos annonces</h6>
                <p class="description">
                    Vous pouvez ajouter des infos pour chacune de vos annonces diffusées, et ainsi motiver vos amis pour
                    les vendre.
                </p>
            </div>

            <div class="fonction col-sm-4 col-6">
                <i class=" circle-icon fa-solid  fa-filter fa-xl"></i>
                <h6 class="circle-icon-title">Utilisez le filtre pour trouver rapidement une annonce</h6>
                <p class="description">
                    Vous avez une recherche particulière ? Utilisez le filtre pour sortir les annonces ciblées.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-regular fa-heart fa-xl"></i>
                <h6 class="circle-icon-title">Suivez vos annonces favorites</h6>
                <p class="description">
                    Une annonce vous intéresse particulièrement ? Ajoutez-la à vos favoris et suivez-la.
                </p>
            </div>
            <div class="fonction col-sm-4 col-6">
                <i class="circle-icon fa-solid fa-map-location-dot fa-xl"></i>
                <h6 class="circle-icon-title">Suivez vos annonces favorites</h6>
                <p class="description">
                    Une annonce vous intéresse particulièrement ? Ajoutez-la à vos favoris et suivez-la.
                </p>
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

<script src="./js/fontAwesome.js" ></script>
<!-- JavaScript Bundle with Popper -->
<script src="js/draggble-slide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/counter.js"></script>

</html>
