<?php
const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'myinterimo_db';
const TABLE_USERS = 'myinterimo_users';
const MAIN_FOLDER = '/projet-pfe/myinterimo';
function connectToDB()
{
    return new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
}

function load($request)
{
    $db = connectToDB();
    $column = $db->query($request);
    $row = array();
    while ($data = $column->fetch()) {
        $row[] = $data;
    }
    return $row;
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

function execRequest($request)
{
    $db = connectToDB();
    try {
        $db->query($request);
    } catch (PDOException $e) {
        die("ERROR: Could Not Execute the Request => " . $e->getMessage());
    }

}

