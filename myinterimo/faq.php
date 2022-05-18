<?php
 session_start();
$_SESSION['menu'] = 'faq';
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
    <?php include 'php/elem_fonts.php' ?>
    <!-- icon -->
    <link rel="icon"
          href="img/logo/cropped-favicon-2.png"
          sizes="32x32">
    <title>FAQ - MyInterimo</title>
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
<div class="container-lg">
    <?php include 'php/elem_menu_deconnexion.php' ?>
    <!-- information -->
    <section id="section1" class="row  row-cols-auto justify-content-around align-items-center py-3 px-3">
        <img class="animImgLeft col col-md-6 col-sm-10 "
             src="img/illustrations/business-security-_-savior-save-insurance-helpful-support-service@2x.png"
             alt="man-women-smartphone">
        <div class="col col-md-6 ">
            <h6 class="primary-text"> Questions fréquentes</h6>
            <h1 class="bold-text">
                Créer ? Ajouter ? Inviter ? Configurer ?
            </h1>

            <p class="description">
                Voici les réponses aux questions posées le plus fréquemment. Si vous ne trouvez pas la réponse à votre
                question, n’hésitez pas à nous contacter.</p>

            <div style="margin-top: 40px;">
                <div class="d-flex justify-content-around">
                    <a href="#box3" class="rectangle-button  p-2">
                        Télecharger l'application
                        <i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
                    </a>
                </div>
            </div>
        </div>


    </section>

    <!-- FAQ accordion -->
    <section class=" d-flex justify-content-center py-3 px-3">
        <div class=" accordion col-lg-8 col-12" id="accordionExample">
            <div class="accordion-item ">
                <h2 class="accordion-header " id="titre1">
                    <button class="accordion-button  collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question1"
                            aria-expanded="false" aria-controls="question1">
                        Comment gérer mes partenaires ?
                    </button>
                </h2>
                <div id="question1" class="accordion-collapse collapse" aria-labelledby="titre1"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Afin de gérer vos contacts partenaires rendez-vous dans l’onglet « Mes Partenaires ». Trois
                        statuts sont proposés : « Partenaires à inviter » sont les pros que vous pouvez inviter pour
                        partager avec eux un « mur » d’annonces partagées, qu’ils soient sur votre secteur d’activité,
                        en France ou à l’étranger.« Partenaires invités » sont les pros à qui vous avez envoyé une
                        invitation, qui est en cours de d’acceptation ou de refus.« Mes Partenaires » sont les pros avec
                        qui vous partager vos annonces, pour lesquelles vous pourrez déléguer ou pas vos mandats.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre2">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question2" aria-expanded="false" aria-controls="question2">
                        Comment voir les annonces partagées avec mes partenaires ?
                    </button>
                </h2>
                <div id="question2" class="accordion-collapse collapse" aria-labelledby="titre2"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Rendez-vous dans l’onglet « Les annonces publiées » : toutes les annonces partagées par vos
                        partenaires s’y trouvent, vous avez la possibilité de filtrer via les onglets « Filtre » et « Où
                        ».
                        La « Carte » vous permet de visualiser la localisation des annonces partagées. L’onglet
                        « Sélection » vous permet de modifier l’ordre d’affichage des annonces et de filtrer les
                        annonces
                        par rapport à un partenaire précis.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre3">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question3" aria-expanded="false" aria-controls="question3">
                        Comment ajouter une annonce ?
                    </button>
                </h2>
                <div id="question3" class="accordion-collapse collapse" aria-labelledby="titre3"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Vos annonces seront ajoutées automatiquement à l’application, nos algorithmes les récupèrent sur
                        la toile du web. Dans le cas possible où MyInterimo oublierait une de vos annonces, vous pourrez
                        alors l’ajouter manuellement depuis l’onglet « Ajouter un bien » dans « Mes Annonces Publiées »
                        Il
                        vous sera alors demander un des URL (adresse de l’annonce manquante) que vous copierez et
                        collerez, depuis votre site ou un de vos sites de diffusion partenaires.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre4">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question4" aria-expanded="false" aria-controls="question4">
                        Quelles annonces je peux partager ?
                    </button>
                </h2>
                <div id="question4" class="accordion-collapse collapse" aria-labelledby="titre4"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Vous partagerez avec vos partenaires, toutes vos annonces en vente ou location qui sont
                        diffusées sur le web, en mandats simples ou exclusifs, sans limites, et sans ressaisie.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre5">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question5" aria-expanded="false" aria-controls="question5">
                        Qui peut voir mes annonces et comment déléguer ?
                    </button>
                </h2>
                <div id="question5" class="accordion-collapse collapse" aria-labelledby="titre5"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Uniquement vos partenaires, et ils vous demanderont une délégation que vous accepterez de donner
                        ou non.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre6">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question6" aria-expanded="false" aria-controls="question6">
                        Comment demander une délégation à vos partenaires ?
                    </button>
                </h2>
                <div id="question6" class="accordion-collapse collapse" aria-labelledby="titre6"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Quand vous consultez l’annonce d’un de vos partenaires, vous avez dans les détails de l’annonce
                        l’onglet « Délégation de mandat à demander », vous cliquerez dessus pour pouvoir lui envoyer une
                        demande de délégation de mandat.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre7">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question7" aria-expanded="false" aria-controls="question7">
                        Comment suivre les demandes de délégations de mandat ?
                    </button>
                </h2>
                <div id="question7" class="accordion-collapse collapse" aria-labelledby="titre7"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Vous avez 4 possibilités de statuts de votre demande de délégation de mandat :
                        <br> <br>
                        Délégation de mandat à demander <br>
                        Délégation de mandat demandée <br>
                        Délégation de mandat acceptée<br>
                        Délégation de mandat refusée <br> <br>
                        Pour suivre l’avancement de votre demande de délégation de mandat cliquez sur les 3 points à
                        côté du bouton Délégation de mandat, ce qui vous donnera aussi l’historique de votre demande.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre8">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question8" aria-expanded="false" aria-controls="question8">
                        Comment suivre mes annonces ?
                    </button>
                </h2>
                <div id="question8" class="accordion-collapse collapse" aria-labelledby="titre8"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Vous pouvez depuis le menu cliquez sur Mes Annonces publiées pour voir toutes vos annonces
                        publiées. Vous pourrez ajouter des détails et infos complémentaires sur chacune de vos annonces.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre9">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question9" aria-expanded="false" aria-controls="question9">
                        Comment sélectionner des annonces en favoris ?
                    </button>
                </h2>
                <div id="question9" class="accordion-collapse collapse" aria-labelledby="titre9"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Cliquez sur l’étoile favori, vous retrouverez ainsi facilement l’annonce dans l’onglet « Suivis
                        & Favoris » et vous pourrez ainsi suivre vos favoris.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre10">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question10" aria-expanded="false" aria-controls="question10">
                        Comment être connecté avec mes partenaires ?
                    </button>
                </h2>
                <div id="question10" class="accordion-collapse collapse" aria-labelledby="titre10"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Les onglets « J’aime » et « Commenter » vous permettent pour chaque bien de réaliser les mêmes
                        actions que sur un réseau social. Interagissez avec vos confrères et commentez les publications
                        publiées.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre11">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question11" aria-expanded="false" aria-controls="question11">
                        Comment se partagent les honoraires ?
                    </button>
                </h2>
                <div id="question11" class="accordion-collapse collapse" aria-labelledby="titre11"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Le partage d’honoraires se fait suivant les conditions du délégant, et vous pouvez le savoir
                        quand vous cliquez sur les détails d’une annonce, en cliquant sur Infos confidentielles, votre
                        partenaire pourra vous donner accès.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="titre12">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question12" aria-expanded="false" aria-controls="question12">
                        Comment suivre l'évolution du prix d'une annonce ?
                    </button>
                </h2>
                <div id="question12" class="accordion-collapse collapse" aria-labelledby="titre12"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Vous pouvez suivre le prix d’une annonce, dans le détail d’une annonce, en cliquant sur le
                        bouton Suivre le prix. Vous serez alerté par mail si le prix varie.
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- les chiffres de Myinterimo-->
    <?php include 'php/elem_chiffres.php' ?>
</div>

<!-- des Témoignages -->
<?php include 'php/elem_temoignages.php' ?>

<div class="container-lg">
    <!-- tous les Sites web de l'entreprise-->
<?php include 'php/site_webs_entreprise.php' ?></div>
<?php include 'php/elem_footer.php' ?>

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
