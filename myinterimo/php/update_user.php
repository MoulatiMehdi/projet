<?php
session_start();

include 'user_controller.php';
include 'connexion_error.php';


$current_user = $_SESSION['user'] ?? header("Location: deconnexion.php");
$error = array();


if (isset($_POST) && !empty($_POST)) {

    $update_user = array();
    unset($_POST['update_user']);

    foreach ($_POST as $key => $value) {
        if ($value == '') continue;
        $update_user[str_replace("update_", "", $key)] = htmlspecialchars($value);
    }
    var_dump($_POST);

    if (sha1($_POST['current_mot_de_passe']) === $_SESSION['user']['mot_de_passe'])
        $update_user['mot_de_passe'] = sha1($_POST['update_mot_de_passe']);
    else{
        $update_user['mot_de_passe'] = '';
    }


    unset($update_user['current_mot_de_passe']);
    $update_user['user_img'] = $current_user['user_img'];


    if (isset($_FILES) && !empty($_FILES['update_user_img']['name'])) {

        $extension = strtolower(strrchr($_FILES['update_user_img']['name'], "."));
        $chemin = "../" . USER_IMG_FOLDER . "/" . $update_user['n_siret'] . $extension;

        if ($_FILES['update_user_img']['size'] < 2097152 && $_FILES['update_user_img']['size'] > 0) {

            $result = move_uploaded_file($_FILES['update_user_img']['tmp_name'], $chemin);
            if ($result) {
                $update_user['user_img'] = $update_user['n_siret'] . strtolower(strrchr($_FILES['update_user_img']['name'], "."));
            } else {
                $_SESSION['error']['photo'] = ERROR_PHOTO . $_FILES['update_user_img']['size'];
            }
        } else {
            $_SESSION['error']['photo'] = ERROR_PHOTO_SIZE;
        }

    }
    $error = updateUser($update_user);
    foreach ($error as $key => $value) {
        $_SESSION['error'][$key] .= $value;
    }


    header('Location:' . MAIN_FOLDER . '/modifier_profile.php');
    var_dump($_POST);
    var_dump($_SESSION['error']);


}