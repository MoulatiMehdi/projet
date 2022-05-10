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
    <link rel="stylesheet" id="auxin-fonts-google-css"
          href="//fonts.googleapis.com/css?family=Nunito%3A200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;ver=4.2"
          type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
          href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.9.3"
          type="text/css" media="all">
    <link type="text/css" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93">
    <!-- icon -->
    <link rel="icon"
          href="img/logo/cropped-favicon-2.png"
          sizes="32x32">
    <title>Témoignages - MyInterimo</title>
</head>
<body>

<?php include 'elem_menu.php' ?>
<section class=" p-5 "></section>
<!-- des Témoignages -->
<?php include 'all_temoignages.php' ?>
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
