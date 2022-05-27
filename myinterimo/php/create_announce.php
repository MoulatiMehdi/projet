<?php
session_start();
include 'function_connectBD.php';
include 'controller_announce.php';
const IMG_FOLDER_ANNOUNCE = "/announce";


$announce = array();
$error = array();
$announce['email'] = $_SESSION['user']['email'];
if (isset($_POST) && !empty($_POST)) {

    foreach ($_POST as $key => $value) {
        $announce[$key] = htmlspecialchars($value);
    }
    $announce['ref'] = uniqid("announce");

    $validate = saveAnnounce($announce);

    if ($validate) {
        $_SESSION['success']['announce'] = "Announce est sauvegarde avec success";
        if (isset($_FILES['images'])) {

            $dir = "../img" . IMG_FOLDER_ANNOUNCE . "/" . $_SESSION['user']['n_siret'] . "/" . $announce['ref'] . "/";
            mkdir($dir, 777, true);

            for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                $extension = strtolower(strrchr($_FILES['images']['name'][$i], "."));

                $chemin = $dir . htmlspecialchars($_FILES['images']['name'][$i]) . $extension;

                if ($_FILES['images']['size'][$i] < 2097152 && $_FILES['images']['size'][$i] > 0) {
                    $result = move_uploaded_file($_FILES['images']['tmp_name'][$i], $chemin);
                    if (!$result) {
                        $_SESSION['warning']['photo' . $i] = "ERROR à '" . $_FILES['images']['name'][$i] . "':" . ERROR_PHOTO;
                    }
                } else {
                    $_SESSION['warning']['photo' . $i] = "Error à " . $_FILES['images']['name'][$i] . ": " . ERROR_PHOTO_SIZE;
                }
            }
            header("Location:" . MAIN_FOLDER . "/index.php");


        }
    } else {
        $_SESSION['error']['announce'] = "Announce n'est Pas sauvegarde";
        header("Location:" . MAIN_FOLDER . "/creer_announce.php");


    }

} else {
    $_SESSION['error']['form'] = "Error :les fichiers envoyés est dépassée la limite";
    header("Location:" . MAIN_FOLDER . "/creer_announce.php");

}


