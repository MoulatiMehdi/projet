<?php
const TABLE_ANNOUNCE = 'announce';
const IMG_FOLDER_ANNOUNCE = "img/announce";


function saveAnnounce($user): bool
{
    $request = "INSERT INTO `" . TABLE_ANNOUNCE . "`(email,date_pub, date_approb,prix,type_immobilier,type_transaction,permission,date_expiration,titre,description,id_ville,id_region)"
        . "VALUES(${user['email']},SYSDATE(),null,${user['prix']},${user['type_immobilier']},${user['type_transaction']},'USER',sysdate()+365,{$user['titre']},${user['description']},${user['ville']},${user['region']}) ";

    return execRequest($request);

}

