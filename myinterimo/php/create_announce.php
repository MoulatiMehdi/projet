<?php
include 'controller_announce.php';

$announce = array();
$error = array();
$announce = $_POST;


if (isset($_POST) && !empty($_POST)) {

    $announce = array();
    foreach ($_POST as $key => $value) {
        $announce[$key] = htmlspecialchars($value);
    }
    var_dump($announce);

    if (isset($_FILES) && !empty($_FILES['images'])) {

    }
    $error = saveAnnounce($announce);
    if ($error != false)
        foreach ($error as $key => $value) {
            $_SESSION['error'][$key] .= $value;
        }
    header('Location:' . MAIN_FOLDER . '/modifier_profile.php');


}
