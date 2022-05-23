<?php

const TABLE_VILLES = 'ville';

function findVilleByRegion($region): array
{
    return load("SELECT `ville` FROM " . TABLE_VILLES . " WHERE `region`= '$region' ORDER BY `ville`");
}
