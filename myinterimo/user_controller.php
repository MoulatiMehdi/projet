<?php
include 'function_connectBD.php';

const USER_IMG_FOLDER="img/user_img";
function saveUser($user): ?array
{

    $count_phone = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE telephone LIKE '${user['telephone']}'");
    $count_email = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE email LIKE '${user['email']}'");
    $count_siret = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE n_siret LIKE '${user['n_siret']}'");

    $errors = array();
    if ($count_siret != null) $errors[] = ERROR_SIRET;
    if ($count_email != null) $errors[] = ERROR_EMAIL;
    if ($count_phone != null) $errors[] = ERROR_PHONE;

    echo '<script>console.log("' . count($errors) . '")</script>';

    if (count($errors) == 0) {

        $request = "INSERT INTO `myinterimo_users`(`n_siret`, `user_type`, `nom`, `prenom`, `civilite`, `telephone`, `email`, `mot_de_passe`, `nom_reseau`, `site_url`, `email_pro`, `n_siren`, `carte_t_reseau`, `adresse`, `user_img`)"
            . " VALUES ('${user['n_siret']}','${user['user_type']}','${user['nom']}','${user['prenom']}','${user['civilite']}','${user['telephone']}','${user['email']}','${user['mot_de_passe']}','${user['nom_reseau']}','${user['site_url']}','${user['email_pro']}','${user['n_siren']}','${user['carte_t_reseau']}','${user['adresse']}','${user['user_img']}')";

        execRequest($request);

        return null;
    } else return $errors;

}

function findUserByEmail($email)
{
    return loadOne("SELECT * FROM ".TABLE_USERS." WHERE `email` LIKE '$email';");

}