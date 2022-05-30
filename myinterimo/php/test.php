<?php
session_start();
include 'controller_user.php';
include 'controller_announce.php';

$announces = findAllAnnounces();

$_SESSION['menu'] = 'faq';
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
    <!-- local CSS file-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/draggble-slide.css">
    <!-- fonts-->
    <!-- icon -->
    <link rel="icon"
          href="../img/logo/cropped-favicon-2.png"
          sizes="32x32">
    <title>FAQ - MyInterimo</title>
</head>
<body aria-live="polite" aria-atomic="true" class="position-relative p-5 ">

<?php
var_dump(findVillesByRegion('1')[0]);
?>
</body>
<script src="../js/fontAwesome.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</html>

