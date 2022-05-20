<?php

const TABLE_PROVINCE = 'province';

function findProvinceByRegion($region): array
{
    return load("SELECT `province`,`region` FROM " . TABLE_PROVINCE . " WHERE `region`= '$region' ORDER BY `province`");
}

function printProvinceOptions($region): void
{
    $provinces = findProvinceByRegion($region);
    foreach ($provinces as $value) {
        echo "<option value='" . $value['id'] . "'>" . $value['province'] . "</option>\n";

    }
}
