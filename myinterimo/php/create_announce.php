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


}
