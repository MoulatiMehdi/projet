<?php
const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'myinterimo_db';

const TABLE_USERS = 'myinterimo_users';

const MAIN_FOLDER = '/projet-pfe/myinterimo';


const ERROR_SIRET = "Ce N° SIRET deja exist.";
const ERROR_PHONE = "Ce N° téléphone deja utilisé.";
const ERROR_EMAIL = "Cet email deja utilisé.";
const ERROR_PHOTO = "Error de l'importation de la photo.";
const ERROR_PHOTO_SIZE = "la taille d'image doit être inférieur à 2Mo.";
const ERROR_EDITING_PROFILE = "Un erreur est déclenché pendant la Mise à jour de Profile";
const ERROR_PASSWORD = "Le Mot de Passe est incorrect";
const ERROR_EMAIL_OR_PASSWORD = "L'email ou le mot de passe est incorrect";

const SUCCESS_EDITING_PROFILE = "Mise à jour du profil réussie";

function connectToDB(): PDO
{

    $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"];
    return new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD, $options);
}

function load($request): array
{
    $db = connectToDB();
    $column = $db->query($request);

    return $column->fetchAll();
}

function loadOne($request)
{
    $db = connectToDB();
    $column = $db->query($request);

    if ($data = $column->fetch()) {
        return $data;
    }
    return null;

}

function execRequest($request): ?string
{
    $db = connectToDB();
    try {
        $db->query($request);
    } catch (PDOException $e) {
        return false;
    }
    return true;

}

function getLastInsertID(): bool|string
{
    $db = connectToDB();
    return $db->lastInsertId();
}

