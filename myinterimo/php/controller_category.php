<?php
const TYPE_CATEGORY = "";

const CATEGORY_APPARTEMENT = "1";
const CATEGORY_MAISON = "2";
const CATEGORY_BUREAU = "3";
const CATEGORY_MAGASIN = "4";
const CATEGORY_TERRAIN = "5";

const TABLE_APPARTEMENT = 'appartement';
const TABLE_MAISON = 'maison';
const TABLE_BUREAU = 'bureau';
const TABLE_MAGASIN = 'magasin';
const TABLE_TERRAIN = 'terrain';

function saveCategory($user): bool
{
    $TABLE_TARGET = tableTarget($user['type_immobilier']);

    $request = "INSERT INTO " . $TABLE_TARGET . " VALUES()";

    return execRequest("");


}

function tableTarget($user)
{
    $request="";
   // $request = "INSERT INTO "
    switch ($user['type_immobilier']) {
        case CATEGORY_APPARTEMENT :
            $request .= TABLE_APPARTEMENT;
            $request .= "(chambres,salleBain,salons,etages,age_bien,frais_syndic,surface_totale,surface_habitable,ascenseur,climatisation,chauffage,parking,terrasse,balcon,meuble,cuisine_equipe,concierge,duplex)";
            $request .= "VALUES(${user['chambres']},salleBain,salons,etages,age_bien,frais_syndic,surface_totale,surface_habitable,ascenseur,climatisation,chauffage,parking,terrasse,balcon,meuble,cuisine_equipe,concierge,duplex)";
        case CATEGORY_MAISON :
            return TABLE_MAISON;
        case CATEGORY_BUREAU :
            return TABLE_BUREAU;
        case CATEGORY_MAGASIN :
            return TABLE_MAGASIN;
        case CATEGORY_TERRAIN :
            return TABLE_TERRAIN;
    }
}
