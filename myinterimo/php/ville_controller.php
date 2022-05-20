<?php

const TABLE_VILLES = 'ville';

function findVilleByRegion($region): array
{
    return load("SELECT `ville`,`region` FROM " . TABLE_VILLES . " WHERE `region`= '$region' ORDER BY `ville`");
}

function printVilleOptions($region): void
{
    $villes = findVilleByRegion($region);
    foreach ($villes as $value) {
        echo "<option value='" . $value['id'] . "'>" . $value['ville'] . "</option>\n";

    }
}
