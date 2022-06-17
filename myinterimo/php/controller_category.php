<?php

const CATEGORY_APPARTEMENT = "1";
const CATEGORY_MAISON = "2";
const CATEGORY_BUREAU = "3";
const CATEGORY_MAGASIN = "4";

const TABLE_APPARTEMENT = 'appartement';
const TABLE_MAISON = 'maison';
const TABLE_BUREAU = 'bureau';
const TABLE_MAGASIN = 'magasin';


function saveCategory($category): bool
{
    $table_target = tableTarget($_POST['type_immobilier']);
    echo $table_target . "\n";


    $request = "INSERT INTO " . $table_target . "(";
    $values = "VALUES(";

    foreach ($category as $key => $value) {
        if ($value === '') continue;
        $request .= "`" . $key . "`,";
        if ($value !== 'true') $values .= "'" . $value . "',";
        else $values .= strtoupper($value) . ",";
    }
    $request = substr($request, 0, -1);
    $values = substr($values, 0, -1);

    $request .= ")";
    $values .= ");";

    echo $request . $values;

    return execRequest($request . $values);
}

function tableTarget($category): ?string
{
    return match ($category) {
        CATEGORY_APPARTEMENT => TABLE_APPARTEMENT,
        CATEGORY_MAISON => TABLE_MAISON,
        CATEGORY_BUREAU => TABLE_BUREAU,
        CATEGORY_MAGASIN => TABLE_MAGASIN,
        default => NULL,
    };
}

function findCategorieById($type,$ref){
    return loadOne("SELECT * FROM ".tableTarget($type)." WHERE ref='$ref'");
}
function deleteCategoryByRefAndType($ref, $type): ?string
{
    return execRequest("DELETE FROM " . tableTarget($type) . " WHERE `ref` LIKE $ref");
}

