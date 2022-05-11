<?php
include 'function_connectBD.php';

function saveUser($user)
{

    $count_phone = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE telephone LIKE '${user['telephone']}'");
    $count_email = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE email LIKE '${user['email']}'");
    $count_siret = loadOne("SELECT * FROM " . TABLE_USERS . " WHERE n_siret LIKE '${user['n_siret']}'");

    $errors = array("");
    if ($count_siret != null) $errors[] = 'siret_error';
    if ($count_email != null) $errors[] = 'email_error';
    if ($count_phone != null) $errors[] = 'phone_error';


    if (array_count_values($errors)==0) {
        $request = "INSERT INTO `myinterimo_users`(`n_siret`, `user_type`, `nom`, `prenom`, `civilite`, `telephone`, `email`, `mot_de_passe`, `nom_reseau`, `site_url`, `email_pro`, `n_siren`, `carte_t_reseau`, `adresse`, `user_image`)
    VALUES ('${user['n_siret']}','${user['user_type']}','${user['nom']}','${user['prenom']}','${user['civilite']}','${user['telephone']}','${user['email']}','${user['mot_de_passe']}','${user['nom_reseau']}','${user['site_url']}','${user['email_pro']}','${user['n_siren']}','${user['carte_t_reseau']}','${user['adresse']}','${user['user_image']}')";

        execRequest($request);
        return null;
    } else return $errors;

}
