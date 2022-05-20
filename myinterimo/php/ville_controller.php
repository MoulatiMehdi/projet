<?php

const TABLE_VILLES = 'ville';

function findVilleByProvince($province): array
{
    return load("SELECT `ville`,`province` FROM " . TABLE_VILLES . " WHERE `province`= '$province' ORDER BY `ville`");
}
