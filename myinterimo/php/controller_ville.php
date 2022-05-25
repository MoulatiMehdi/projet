<?php

const TABLE_VILLES = 'ville';

function findVilleByRegion($region): array
{
    return load("SELECT `ville` FROM " . TABLE_VILLES . " WHERE `id_region`= '$region' ORDER BY `ville`");
}
