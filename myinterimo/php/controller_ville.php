<?php

const TABLE_VILLES = 'ville';

function findVillesByRegion($region): array
{
    return load("SELECT `ville` ,`id` FROM " . TABLE_VILLES . " WHERE `id_region`= '$region' ORDER BY `ville`");
}

function findVilleById($id)
{
    $line = loadOne("SELECT * FROM " . TABLE_VILLES . " WHERE `id` LIKE $id");

    return $line['ville'];
}

function findALLVilles(): array
{
    return load("SELECT * FROM " . TABLE_VILLES);
}
