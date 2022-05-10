<?php
if (isset($_SESSION['menu'])) {
    $menu = $_SESSION['menu'];
} else {
    $menu = '';
}
?>

<header class="container">
    <nav class="navbar navbar-expand-md navbar-light bg-light d-flex justify-content-around fixed-top">
        <a class="col col-md-4 col-auto" href="index.php">
            <img class="justify-content-around " src="img/logo/logo-250.png" alt="Myinterimo-logo">
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
                        <a class="nav-link active" href="index.php">
                            Accueil
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                        </a>
                    <?php else: ?>
                        <a class="nav-link " href="index.php">
                            Accueil
                            <hr>
                        </a>
                    <?php endif ?>

                </li>
                <li class="nav-item p-sm-2">
                    <?php if ($menu == 'fonctionnalite'): ?>
                        <a class="nav-link active" href="fonctionnalite.php">
                            Fonctionnalités
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                        </a>
                    <?php else: ?>
                        <a class="nav-link " href="fonctionnalite.php">
                            Fonctionnalités
                            <hr>
                        </a>
                    <?php endif ?>

                </li>
                <li class="nav-item p-sm-2">
                    <?php if ($menu == 'temoignages'): ?>
                        <a class="nav-link active" href="temoignages.php">
                            Témoignages
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                        </a>
                    <?php else: ?>
                        <a class="nav-link " href="temoignages.php">
                            Témoignages
                            <hr>
                        </a>
                    <?php endif ?>

                </li>
                <li class="nav-item p-sm-2">
                    <?php if ($menu == 'faq'): ?>
                        <a class="nav-link active" href="faq.php">
                            FAQ
                            <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">

                        </a>
                    <?php else: ?>
                        <a class="nav-link" href="faq.php">
                            FAQ
                            <hr>
                        </a>
                    <?php endif ?>
                </li>
                <li class="nav-item p-sm-2">
                    <?php if($menu=='contact'): ?>
                    <a class="nav-link " href="contact.php">
                        Contact
                        <hr class="w-100 " style=" background:var(--gradient--blush-bordeaux); ">
                    </a>
                    <?php else: ?>
                    <a class="nav-link " href="contact.php">
                        Contact
                        <hr>
                    </a>
                    <?php endif ?>
                </li>
            </ul>
            <div class="me-5 hstack gap-3 d-flex justify-content-center align-content-center ">
                <a href="creer-un-compte.php" class="rectangle-button" style="height: 35px">se Connecter</a>
                <a href="connexion.php" class="rectangle-button-white" style="height: 35px">Connexion</a>
            </div>
        </div>
    </nav>
</header>
