<?php
include 'const_variable.php';

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
    $db->query($request);
}

