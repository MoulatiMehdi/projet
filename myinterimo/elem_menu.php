<?php

if (!isset($_SESSION)) session_start();

$menu = $_SESSION['menu'] ?? null;
$user = $_SESSION['user'] ?? null;

$currentFolder = '';
$imgProfile = 'img/user_img/';

if (isset($_SESSION['menu']) || $_SESSION['menu'] == 'pageNotFound') {
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
            <?php if ($user == null): ?>
                <div class="me-5 hstack gap-3 d-flex justify-content-center align-content-center ">
                    <a href="<?php echo $currentFolder ?>creer-un-compte.php" class="rectangle-button"
                       style="height: 35px">se Connecter</a>
                    <a href="<?php echo $currentFolder ?>connexion.php" class="rectangle-button-white"
                       style="height: 35px">Connexion</a>
                </div>
            <?php else:

                if (empty($user['user_img']) || !file_exists($imgProfile . "/" . $user['user_img']))
                    $imgProfile .= 'anonyme.svg';
                else
                    $imgProfile .= $user['user_img'];
                ?>
                <div class="dropdown align-items-center">
                    <button class="btn rounded-circle d-flex image-profil" type="button" id="dropdownMenu2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <canvas id="canvas"></canvas>
                        <script type="application/javascript" src="js/displayImportImage.js">
                            cropImage('<?php echo $imgProfile ?>');
                        </script>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li>
                            <button class="dropdown-item" type="button">Profil</button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button">Another action</button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button">Something else here</button>
                        </li>
                    </ul>
                </div>
                <form action="" method="post"
                      class="me-5 hstack gap-3 d-flex justify-content-center align-content-center ">
                    <input type="submit" name="logout" class="rectangle-button-white" style="height: 35px"
                           value="Déconnexion">
                </form>
            <?php endif ?>

        </div>
    </nav>
</header>

