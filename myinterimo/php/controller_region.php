<?php

const TABLE_REGIONS = 'region';
function findAllRegions(): array
{
    return load("SELECT * FROM " . TABLE_REGIONS . " ORDER BY  `region`");
}

function printRegionOptions(): void
{
    $region = findAllRegions();
    foreach ($region as $value) {
        echo "<option value='{$value['id']}'> {$value['region']}  </option>\n";

    }

}
