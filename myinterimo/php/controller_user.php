<?php
include 'function_connectBD.php';
const USER_IMG_FOLDER = "img/user_img";
$_SESSION['error'] = null;


function validateSave($user): array
{
    $errors = array();
    $count_phone = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE telephone LIKE '{$user['telephone']}'");
    $count_email = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE email LIKE '{$user['email']}'");
    $count_siret = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE n_siret LIKE '{$user['n_siret']}'");


    if ($count_siret != null) $errors['n_siret'] = ERROR_SIRET;
    if ($count_email != null) $errors['email'] = ERROR_EMAIL;
    if ($count_phone != null) $errors['phone'] = ERROR_PHONE;
    return $errors;
}

function validateUpdate($user): array
{
    $errors = array();

    $count_phone = loadOne("SELECT * FROM `" . TABLE_USERS . "` WHERE `telephone` LIKE '${user['telephone']}' AND `id` != '{$_SESSION['user']['id']}'");
    $count_email = loadOne("SELECT * FROM `" . TABLE_USERS . "` WHERE `email` LIKE '${user['email']}' AND `id`!= '{$_SESSION['user']['id']}'");
    $count_siret = loadOne("SELECT * FROM `" . TABLE_USERS . "` WHERE `n_siret` LIKE '${user['n_siret']}' AND `id` != '{$_SESSION['user']['id']}'");
    $char_count = strlen($user['mot_de_passe']);
    if ($count_siret != null || !str_starts_with($user['n_siret'], $user['n_siren'])) {
        $errors['n_siret'] = ERROR_SIRET;
        unset($user['n_siret']);
        unset($user['n_siren']);
    }
    if ($count_email != null) {
        $errors['email'] = ERROR_EMAIL;
        unset($user['email']);

    }
    if ($count_phone != null) {
        $errors['phone'] = ERROR_PHONE;
        unset($user['phone']);

    }
    if ($char_count == 0) {
        unset($user ['mot_de_passe']);
    } else if ($char_count < 8 || $char_count > 32) {
        $errors['mot_de_passe'] = ERROR_PASSWORD;
        unset($user['mot_de_passe']);
    }
    return $errors;
}

function saveUser($user): ?array
{

    $errors = validateSave($user);
    if (count($errors) == 0) {

        $request = "INSERT INTO `myinterimo_users`(`n_siret`, `user_type`, `nom`, `prenom`, `civilite`, `telephone`, `email`, `mot_de_passe`, `nom_reseau`, `site_url`, `email_pro`, `n_siren`, `carte_t_reseau`, `adresse`, `user_img`,`date_naiss`,`date_inscrit`)"
            . " VALUES ('${user['n_siret']}','${user['user_type']}','${user['nom']}','${user['prenom']}','${user['civilite']}','${user['telephone']}','${user['email']}','${user['mot_de_passe']}','${user['nom_reseau']}','${user['site_url']}','${user['email_pro']}','${user['n_siren']}','${user['carte_t_reseau']}','${user['adresse']}','${user['user_img']}','${user['date_naiss']}',sysdate())";

        execRequest($request);

        return null;
    } else return $errors;

}

function updateUser($user): ?array
{
    $setters = "";
    $error = validateUpdate($user);

    foreach ($user as $key => $value) {
        if (!empty($value) && $value != $_SESSION['user'][$key]) {
            $setters .= "`$key`='$value',";
        }
    }
    $setters = rtrim($setters, ",");

    if ($setters == "") {
        return $error;
    } else {

        $request = "UPDATE `" . TABLE_USERS . "` SET " . $setters . " WHERE `id` = {$_SESSION['user']['id']}";
        echo $request;
        $test = execRequest($request);


        if ($test) {
            $_SESSION['success']['update'] = SUCCESS_EDITING_PROFILE;
        } else {
            $_SESSION['error']['edit'] = ERROR_EDITING_PROFILE;
        }
        $_SESSION['user'] = findUserById($_SESSION['user']['id']);
        return null;

    }

}

function findUserByID($id)
{
    return loadOne("SELECT * FROM `" . TABLE_USERS . "` WHERE `id` = '$id';");

}

function findUserByEmail($email)
{
    return loadOne("SELECT * FROM `" . TABLE_USERS . "` WHERE `email` LIKE '$email';");

}

function findUSerBySiret($siret)
{
    return loadOne("SELECT * FROM `" . TABLE_USERS . "` WHERE `n_siret` LIKE '$siret';");
}

function deleteUserBySiret($siret): void
{
    execRequest("DELETE FROM `" . TABLE_USERS . "` WHERE `email` LIKE '$siret';");
}

function deleteUserByEmail($email): void
{
    execRequest("DELETE FROM `" . TABLE_USERS . "` WHERE `email` LIKE '$email';");
}
