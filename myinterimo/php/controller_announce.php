<?php

include 'controller_category.php';

const TABLE_ANNOUNCE = 'announce';
const IMG_FOLDER_ANNOUNCE = 'img/announce';
const ICON_APPARTEMENT = '<i class="fa-solid fa-building shadow-sm icon rounded-3 p-3 fa-lg"></i>';
const ICON_MAISON = '<i class="fa-solid fa-house shadow-sm icon rounded-3 p-3"></i>';
const ICON_MAGASIN = '<i class="fa-solid fa-shop shadow-sm icon rounded-3 p-3"></i>';
const ICON_BUREAU = "";
const ICON_TERRAIN = "";

function saveAnnounce($announce): bool
{


    $validate = saveCategory(array_filter($announce, "inCategory", ARRAY_FILTER_USE_KEY));
    if ($validate) {
        $_SESSION['success']['category'] = "le category a été sauvegarder avec success";

        $announce = array_filter($announce, "inAnnounce", ARRAY_FILTER_USE_KEY);
        $announce['email'] = $_SESSION['user']['email'];

        $request = "INSERT INTO " . TABLE_ANNOUNCE;
        $request .= '(';
        $values = "VALUES(";

        foreach ($announce as $key => $value) {
            if ($value === '') continue;
            $request .= "`" . $key . "`,";
            $values .= "'" . $value . "',";
        }


        $request .= "date_pub)";
        $values .= "SYSDATE());";


        echo $request . $values;
        $validate = execRequest($request . $values);

        if (!$validate) deleteCategoryByRefAndType($announce['ref'], $announce['type_immobilier']);
        return $validate;


    } else {
        $_SESSION['error']['category'] = "Error le category n'est pas sauvegarder ";
        return false;
    }

}

function inAnnounce($key): bool
{
    return match ($key) {
        "type_immobilier", "titre", "description", "adresse", "id_region", "id_ville", "email", "prix", "ref" => true,
        default => false,
    };
}

function inCategory($key): bool
{
    if ($key === "ref") return true;
    else return !inAnnounce($key);
}

function findAllAnnounces(): array
{
    return load("SELECT * FROM " . TABLE_ANNOUNCE);
}


/**
 * @throws Exception
 */
function printAnnounce($announce): void
{

    static $id = 0;
    $img = "";
    $user = findUserByEmail($announce['email']);
    $path_dir = "./" . IMG_FOLDER_ANNOUNCE . "/" . $user['n_siret'] . "/" . $announce['ref'] . "/";

    if (file_exists($path_dir)) {
        $dir = new DirectoryIterator(dirname($path_dir . "/*"));
        $oneActive = "active";
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                $img .= '<div class="carousel-item ' . $oneActive . '">
                                                        <img src="' . $path_dir . "/" . $fileinfo->getFilename() . '"
                                                             alt="">
                                                    </div>';
                $oneActive = "";

            }
        }
    }

    $icon_type = match ($announce['type_immobilier']) {
        CATEGORY_APPARTEMENT => ICON_APPARTEMENT,
        CATEGORY_MAGASIN => ICON_MAGASIN,
        CATEGORY_BUREAU => ICON_BUREAU,
        CATEGORY_MAISON => ICON_MAISON,
        CATEGORY_TERRAIN => ICON_TERRAIN,
        default => ""
    };
    $random = random_int(0, 100);
    echo '                        <div class="col col-12 mb-3 ">
                            <div class="row box pb-1 px-4 pt-4 align-items-start">
                                <div class="col col-auto m-2 ">
                                    <div class="row ">
                                        <div class="col shadow-sm rounded-3 p-0 ">
                                            <div id="carouselExampleControls' . $id . '" class="carousel slide"
                                                 data-bs-ride="carousel">
                                                <div class="carousel-inner rounded-3">
                                              
                                                  
                                            ' . $img . '
                                                    
                                                </div>

                                                <button class="carousel-control-prev bg-light rounded-circle "
                                                        type="button"
                                                        data-bs-target="#carouselExampleControls' . $id . '" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon  "
                                                          aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next rounded-circle bg-light "
                                                        type="button" data-bs-target="#carouselExampleControls' . $id . '"
                                                        data-bs-slide="next">
                                                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center mt-2">
                                        <div class="col col-auto">
                                            <h6 class="fw-bold text-start m-0">Publier par: ' . ucfirst($user['nom_reseau']) . '</h6>
                                        </div>
                                        <div class="col col-auto d-flex justify-content-center align-items-center p-0">
                                                           <div class="rounded-circle ' . (($random % 2 == 0) ? 'bg-success' : 'bg-danger') . ' p-0 m-0" style="width: 13px !important ;height: 13px!important"></div>

                                        <button class="btn pe-0">
                                              <i class="fa-solid fa-message "></i>
                                        </button>
</div>
                                    </div>
                                </div>
                                <div class="col col-auto d-flex h-100">                          
      <div class="vr "></div>
</div>       
                                <div class="col col-3 m-2">
                                    <div class="row justify-content-around align-items-center  mb-2">
                                        <div class="col col-auto d-flex flex-column justify-content-center align-items-center">
                                            ' . $icon_type . '
                                            <h6 class="fw-bold pt-2 mb-0">Type</h6>
                                            <h6>' . tableTarget($announce['type_immobilier']) . '</h6>
                                        </div>
                                        <div class="col col-auto d-flex flex-column justify-content-center align-items-center">
                                            <i class="fa-solid fa-house icon shadow-sm rounded-3 p-3"></i>
                                            <h6 class="text-center fw-bold pt-2 mb-0">Type</h6>
                                            <h6>Maison</h6>
                                        </div>
                                        <div class="col  col-auto d-flex  flex-column justify-content-center align-items-center">
                                            <i class="fa-solid fa-house icon shadow-sm rounded-3 p-3"></i>
                                            <h6 class="fw-bold pt-2 mb-0">Type</h6>
                                            <h6>Maison</h6>
                                        </div>

                                    </div>
                                    <div class="row mb-2 ">
                                        <div class="col col-12 fw-bold" style="font-size: 12px; font-family: Rubik,Helvetica, Arial, serif;">
                                         <h6 class="text-center">   ' . $announce['titre'] . '</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center justify-content-center" style="height: 50px">
                                   
                                        <button class="btn col col-auto icon shadow-sm rounded-3 p-3 " >
                                            <i class="fa-solid  fa-thumbs-up "></i>
                                        </button>
                                        <button class="btn col col-auto icon shadow-sm rounded-3 p-3 " >
                                        <i class="fa-solid fa-comment-dots"></i>
                                        </button>
                                        <button class="btn col col-auto icon shadow-sm rounded-3 p-3" >
                                            <i class="fa-solid fa-share-from-square "></i>
                                        </button>
                                        <button class="btn col col-auto icon  shadow-sm rounded-3 p-3 ">
                                        <i class="fa-solid fa-ellipsis-vertical "></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col col-auto d-flex h-100">                          
      <div class="vr "></div>
</div>      
                                <div class="col col-3  description ">
                                    <h6 class="mb-3 text-primary fw-bolder" style="font-size: 15px">INFO sur l\'announce: </h6 >
                                    <h6 class="mb-3 text-start" > -Créer le : ' . $announce['date_pub'] . ' </h6 >
                                    <h6 class="mb-3 text-start" > -Prix:' . "     " . $announce['prix'] . ' </h6 >
                                    <h6 class="mb-3 text-start" > -description:<br > <br > ' . $announce['description'] . ' </h6 >
                                </div >
                                <div class="col col-auto d-flex h-100" >
      <div class="vr" ></div >
</div >
                                <div class="col col-2 py-3 d-flex justify-content-center align-items-center flex-column" >
                                    <button class="mb-3 rectangle-button-white" style = "width: 190px; height: 40px ;font-size: 13px ;" >
                                            <i class="fa-solid fa-thumbs-up " ></i >
                                            <span class="mx-3" > ' . $announce['likes'] . ' </span >
                                    </button >
                                    <button class="mb-3 rectangle-button-white" style = "width: 190px; height: 40px ;font-size: 13px ;" >
                                            <i class="fa-solid fa-eye" ></i >
                                            <span class="mx-3" > ' . $announce['see'] . ' </span >
                                    </button >
                                    <button  class="btn ' . (($random % 2 == 0) ? 'btn-success' : 'btn-warning') . ' mb-3 fw-bolder border-2" style = "width: 190px; height: 40px ;font-size: 12px ;" >
    DELEGATION A DEMANDER
</button >
                                </div >
                            </div >
                        </div > ';
    $id += 1;
}