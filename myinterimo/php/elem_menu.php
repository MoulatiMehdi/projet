<?php

if (!isset($_SESSION)) session_start();

$menu = (isset($_SESSION['menu'])) ? $_SESSION['menu'] : null;
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : null;

$currentFolder = '';
$_SESSION['imgProfile'] = 'img/user_img/';

if ($user != null) $_SESSION['imgProfile'] .= $user['user_img'];


if ($menu === 'pageNotFound') {
    $currentFolder = './projet-pfe/myinterimo/';
    $_SESSION['imgProfile'] = $currentFolder . $_SESSION['imgProfile'];
}
?>
<header class="container">
    <nav class="navbar navbar-expand-md navbar-light bg-light d-flex justify-content-around fixed-top">
        <a class="col col-md-4 col-auto" href="<?php echo $currentFolder ?>index.php">
            <img class="justify-content-around " src="<?php echo $currentFolder ?>img/logo/logo-250.png"
                 alt="Myinterimo-logo">
        </a>
        <button type="button" class="navbar-toggler bg-primary " style="height: 40px; width: 50px"
                data-bs-toggle="collapse"
                data-bs-target="#nav">
            <i class="fa-solid fa-bars text-light fa-lg"></i>
        </button>
        <div class=" collapse  navbar-collapse justify-content-between mt-2" id="nav">
            <ul class="navbar-nav ">
                <li class="nav-item p-sm-2">
                    <?php if ($menu == 'accueil'): ?>
                        <a class="nav-link active" href="<?php echo $currentFolder ?>index.php">
                            <?php
                                if(isset($_SESSION['user'])) echo "Annonces";
                            else echo "Accueil";
                            ?>
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                        </a>
                    <?php else: ?>
                        <a class="nav-link " href="<?php echo $currentFolder ?>index.php">
                            <?php
                            if(isset($_SESSION['user'])) echo "Annonces";
                            else echo "Accueil";
                            ?>
                            <hr>
                        </a>
                    <?php endif ?>

                </li>
                <?php if (!isset($_SESSION['user'])): ?>
                    <li class="nav-item p-sm-2">
                        <?php if ($menu == 'fonctionnalite'): ?>
                            <a class="nav-link active" href="<?php echo $currentFolder ?>fonctionnalite.php">
                                Fonctionnalit??s
                                <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                            </a>
                        <?php else: ?>
                            <a class="nav-link " href="<?php echo $currentFolder ?>fonctionnalite.php">
                                Fonctionnalit??s
                                <hr>
                            </a>
                        <?php endif ?>

                    </li>
                    <li class="nav-item p-sm-2">
                        <?php if ($menu == 'temoignages'): ?>
                            <a class="nav-link active" href="<?php echo $currentFolder ?>temoignages.php">
                                T??moignages
                                <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                            </a>
                        <?php else: ?>
                            <a class="nav-link " href="<?php echo $currentFolder ?>temoignages.php">
                                T??moignages
                                <hr>
                            </a>
                        <?php endif ?>
                    </li>
                <?php else: ?>
                    <li class="nav-item p-sm-2">
                        <?php if ($menu == 'fonctionnalite'): ?>
                            <a class="nav-link active" href="<?php echo $currentFolder ?>#">
                                Statistiques
                                <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                            </a>
                        <?php else: ?>
                            <a class="nav-link " href="<?php echo $currentFolder ?>fonctionnalite.php">
                                Statistiques
                                <hr>
                            </a>
                        <?php endif ?>

                    </li>
                    <li class="nav-item p-sm-2">
                        <?php if ($menu == 'temoignages'): ?>
                            <a class="nav-link active" href="<?php echo $currentFolder ?>temoignages.php">
                                T??moignages
                                <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                            </a>
                        <?php else: ?>
                            <a class="nav-link " href="<?php echo $currentFolder ?>temoignages.php">
                                T??moignages
                                <hr>
                            </a>
                        <?php endif ?>
                    </li>
                <?php endif; ?>

                <li class="nav-item p-sm-2">
                    <?php if ($menu == 'faq'): ?>
                        <a class="nav-link active" href="<?php echo $currentFolder ?>faq.php">
                            FAQ
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">

                        </a>
                    <?php else: ?>
                        <a class="nav-link" href="<?php echo $currentFolder ?>faq.php">
                            FAQ
                            <hr>
                        </a>
                    <?php endif ?>
                </li>
                <li class="nav-item p-sm-2">
                    <?php if ($menu == 'contact'): ?>
                        <a class="nav-link " href="<?php echo $currentFolder ?>contact.php">
                            Contact
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                        </a>
                    <?php else: ?>
                        <a class="nav-link " href="<?php echo $currentFolder ?>contact.php">
                            Contact
                            <hr>
                        </a>
                    <?php endif ?>
                </li>
            </ul>
            <div class=" me-5 hstack gap-3 d-flex justify-content-center align-content-center ">
                <?php if (empty($user)): ?>
                    <a href="<?php echo $currentFolder ?>creer-un-compte.php" class="rectangle-button"
                       style="height: 35px">S'inscrire</a>
                    <a href="<?php echo $currentFolder ?>connexion.php" class="rectangle-button-white"
                       style="height: 35px">Connexion</a>
                <?php else: ?>


                    <div class=" dropdown d-flex align-items-center justify-content-center"
                         style="height: 60px; width: 66px;">
                        <button class="btn rounded-circle position-relative" type="button" id="menu-notification"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bell fa-xl text-primary"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">notifications</span>
                            </span>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end  "
                            aria-labelledby="menu-notification">
                            <li class="dropdown-header text-light"><h6>Notification</h6></li>
                            <li class="dropdown-divider "></li>
                            <li>
                                <a href="#" class="dropdown-item ">Notification 1</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item ">Notification 2</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item ">Notification 3</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item ">Notification 4</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item ">Notification 5</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" dropdown d-flex">
                        <button class="btn rounded-circle " type="button"
                                id="menu-profil" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo $_SESSION['imgProfile'] ?>" id="image-profil" alt="" hidden="hidden">
                            <canvas class="image-profil"></canvas>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end "
                            aria-labelledby="menu-profil">
                            <li class="dropdown-header d-flex flex-rows align-items-center">

                                <canvas class="image-profil"
                                        style="height: 70px !important; width: 70px !important;"></canvas>
                                <div class="px-3">
                                    <div class="text-light fs-6"><?php echo ucfirst($user['nom']) . " " . ucfirst($user['prenom']) ?></div>
                                    <div><?php echo $user['email'] ?></div>
                                    <a href="<?php echo $currentFolder ?>modifier_profile.php"
                                       class="btn btn-primary d-inline-flex  mt-2">
                                        <i class="fa-solid fa-pencil fa-xs me-2"></i>
                                        Edit Profil
                                    </a>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="<?php echo $currentFolder ?>creer_announce.php" class="dropdown-item">
                                    <span class="d-flex justify-content-start">
                                        <i class="fa-solid fa-plus fa-xl"></i>
                                        Cr??er un Announce
                                    </span>
                                </a>

                            </li>
                            <li>
                                <a href="<?php echo $currentFolder ?>mesAnnounces.php" class="dropdown-item">
                                    <span class="d-flex justify-content-start">
                                        <i class="fa-regular fa-heart fa-xl"></i>
                                        Mes Favoris
                                    </span>
                                </a>

                            </li>
                            <li>
                                <a href="<?php echo $currentFolder ?>mesAnnounces.php" class="dropdown-item">
                                    <span class="d-flex justify-content-start">
                                        <i class="fa-solid fa-bullhorn fa-xl"></i>
                                        Mes Announce
                                    </span>
                                </a>

                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="<?php echo $currentFolder ?>deconnexion.php" class="dropdown-item">
                                    <span class="d-flex justify-content-start">
                                        <i class="fa-solid fa-power-off  fa-lg"></i>
                                        D??connexion
                                    </span>
                                </a>

                            </li>
                        </ul>
                    </div>
                    <script src="<?php echo $currentFolder ?>js/cropImage.js"></script>
                    <script>
                        cropImage("<?php echo $_SESSION['imgProfile'] ?>", 'image-profil');
                    </script>
                <?php endif ?>
            </div>
        </div>
    </nav>
</header>
<style>

    .navbar .dropdown-menu li > a > span {
        height: 40px !important;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .navbar .dropdown-menu li a span i {
        margin-right: 10px;
        width: 21px;
        height: 21px;
        display: flex;
        justify-content: center;
    }

</style>

