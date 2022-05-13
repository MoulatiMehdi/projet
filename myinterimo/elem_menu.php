<?php

if (!isset($_SESSION)) session_start();

$menu = $_SESSION['menu'] ?? null;
$user = $_SESSION['user'] ?? null;

$currentFolder = '';
$imgProfile = 'img/user_img/';

if ($menu === 'pageNotFound') {
    $currentFolder = '/projet-pfe/myinterimo/';
    $imgProfile = $currentFolder . $imgProfile;
}


if (isset($_POST['logout'])) {
    unset($_SESSION['user']);
    $user = null;
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
                            Accueil
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                        </a>
                    <?php else: ?>
                        <a class="nav-link " href="<?php echo $currentFolder ?>index.php">
                            Accueil
                            <hr>
                        </a>
                    <?php endif ?>

                </li>
                <li class="nav-item p-sm-2">
                    <?php if ($menu == 'fonctionnalite'): ?>
                        <a class="nav-link active" href="<?php echo $currentFolder ?>fonctionnalite.php">
                            Fonctionnalités
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                        </a>
                    <?php else: ?>
                        <a class="nav-link " href="<?php echo $currentFolder ?>fonctionnalite.php">
                            Fonctionnalités
                            <hr>
                        </a>
                    <?php endif ?>

                </li>
                <li class="nav-item p-sm-2">
                    <?php if ($menu == 'temoignages'): ?>
                        <a class="nav-link active" href="<?php echo $currentFolder ?>temoignages.php">
                            Témoignages
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                        </a>
                    <?php else: ?>
                        <a class="nav-link " href="<?php echo $currentFolder ?>temoignages.php">
                            Témoignages
                            <hr>
                        </a>
                    <?php endif ?>

                </li>
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
            <div class="me-5 hstack gap-3 d-flex justify-content-center align-content-center ">
                <?php if ($user == null): ?>
                    <a href="<?php echo $currentFolder ?>creer-un-compte.php" class="rectangle-button"
                       style="height: 35px">se Connecter</a>
                    <a href="<?php echo $currentFolder ?>connexion.php" class="rectangle-button-white"
                       style="height: 35px">Connexion</a>
                <?php else:

                    if (empty($user['user_img']) || !file_exists($imgProfile . "/" . $user['user_img']))
                        $imgProfile .= 'anonyme.svg';
                    else
                        $imgProfile .= $user['user_img'];
                    ?>
                    <div class="dropdown  align-items-center ">
                        <button class="btn rounded-circle " type="button" id="menu-notification"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bell fa-xl text-primary"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="menu-notification">
                            <li>
                                <a href="#" class="dropdown-item">Edit Profil</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Another action</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown  align-items-center ">
                        <button class="btn rounded-circle " type="button"
                                id="menu-profil" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo $imgProfile ?>" id="image-profil" alt="" hidden="hidden">
                            <canvas id="canvas" class="image-profil"></canvas>
                            <script src="js/cropImage.js"></script>

                        </button>
                        <ul class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="menu-profil">
                            <li>
                                <a href="#" class="dropdown-item">Edit Profil</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Another action</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>

                                <form action="" method="post">
                                    <button type="submit" name="logout" class="dropdown-item" style="height: 35px">
                                    <span class="d-flex justify-content-start">
                                        <i class="fa-solid fa-power-off me-2"></i>
                                        Déconnexion
                                    </span>
                                    </button>
                                </form>

                            </li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </nav>
</header>

