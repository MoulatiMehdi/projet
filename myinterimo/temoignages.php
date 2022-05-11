<?php
session_start();
$_SESSION['menu'] = 'temoignages';
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
    <link rel="icon" href="img/logo/cropped-favicon-2.png" sizes="32x32">
    <title>Témoignages - MyInterimo</title>
</head>
<body>

<?php include 'elem_menu.php' ?>
<section class=" p-5 "></section>
<!-- des Témoignages -->
<?php include 'elem_temoignages.php' ?>
<div class="container-lg">
    <!-- tous les Sites web de l'entreprise-->
    <?php include 'site_webs_entreprise.php' ?>
</div>
<?php include 'elem_footer.php' ?>

</body>
<script src="https://kit.fontawesome.com/85c9736486.js" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="js/draggble-slide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>
