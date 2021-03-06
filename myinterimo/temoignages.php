<?php
if (!isset($_SESSION)) session_start();
$_SESSION['menu'] = 'temoignages';
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/draggble-slide.css">
    <!-- fonts-->
    <?php include 'php/elem_fonts.php' ?>
    <!-- icon -->
    <link rel="icon" href="img/logo/cropped-favicon-2.png" sizes="32x32">

    <script src="./js/fontAwesome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <title>Témoignages - MyInterimo</title>
</head>
<body aria-live="polite" aria-atomic="true" class="position-relative ">
<?php
include 'php/elem_messages.php';
include 'php/elem_menu.php' ?>

<!-- des Témoignages -->
<?php include 'php/elem_temoignages.php' ?>

<div class="container-lg">
    <!-- tous les Sites web de l'entreprise-->
    <?php include 'php/elem_webSiteLogos.php' ?>
</div>

<?php include 'php/elem_footer.php' ?>

</body>

<!-- JavaScript Bundle with Popper -->

</html>
