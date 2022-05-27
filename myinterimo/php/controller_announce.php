<?php

include 'controller_category.php';

const TABLE_ANNOUNCE = 'announce';
const IMG_FOLDER_ANNOUNCE = 'img/announce';

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


function printAnnounce($announce)
{
    $user = findUserByEmail($announce['email']);
    $imgs = "";

    $dir = new DirectoryIterator(dirname(IMG_FOLDER_ANNOUNCE . "/" . $user['email'] . "/" . $announce['ref']));
    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot()) {
            var_dump($fileinfo->getFilename());
        }
    }

    echo '                        <div class="col">
                            <div class="row box align-items-start">
                                <div class="col col-auto ">
                                    <div class="row ">
                                        <div class="col shadow-sm rounded-3 p-0 ">
                                            <div id="carouselExampleControls" class="carousel slide"
                                                 data-bs-ride="carousel">
                                                <div class="carousel-inner rounded-3">
                                               
                                                    <div class="carousel-item active">
                                                        <img src="' . IMG_FOLDER_ANNOUNCE . '/12345678914723/announce628fa7314ad08/1949-Ferrari-166-MM-004-1536.jpg.jpg"
                                                             alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="' . IMG_FOLDER_ANNOUNCE . '/12345678914723/announce628fa7314ad08/1949-Ferrari-166-MM-004-1536.jpg.jpg"
                                                             alt="">

                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="' . IMG_FOLDER_ANNOUNCE . '/12345678914723/announce628fa7314ad08/1949-Ferrari-166-MM-004-1536.jpg.jpg"
                                                             alt="">

                                                    </div>
                                                </div>

                                                <button class="carousel-control-prev bg-light rounded-circle "
                                                        type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon  "
                                                          aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next rounded-circle bg-light "
                                                        type="button" data-bs-target="#carouselExampleControls"
                                                        data-bs-slide="next">
                                                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col col-12">
                                            <h6 class="fw-bold">Publier par:</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row justify-content-around align-items-center  ">
                                        <div class="col col-auto ">
                                            <i class="fa-solid fa-house shadow-sm rounded-3 p-3"></i>
                                            <h6 class="fw-bold pt-2 mb-0">Type</h6>
                                            <h6>Maison</h6>
                                        </div>
                                        <div class="col col-auto ">
                                            <i class="fa-solid fa-house shadow-sm rounded-3 p-3"></i>
                                            <h6 class="text-center fw-bold pt-2 mb-0">Type</h6>
                                            <h6>Maison</h6>
                                        </div>
                                        <div class="col col-auto ">
                                            <i class="fa-solid fa-house shadow-sm rounded-3 p-3"></i>
                                            <h6 class="fw-bold pt-2 mb-0">Type</h6>
                                            <h6>Maison</h6>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col description">
                                            <?php ?>
                                        </div>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col col-auto shadow-sm rounded-3 p-3 m-2" role="button">
                                            <i class="fa-solid fa-thumbs-up "></i>
                                        </div>
                                        <div class="col col-auto shadow-sm rounded-3 p-3 m-2" role="button">
                                            <i class="fa-solid fa-message "></i>
                                        </div>
                                        <div class="col col-auto shadow-sm rounded-3 p-3 m-2" role="button">
                                            <i class="fa-solid fa-share-from-square "></i>
                                        </div>
                                        <div class="col col-auto shadow-sm rounded-3 p-3 m-2" role="button"><i
                                                    class="fa-solid fa-ellipsis-vertical "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col p-3" style="max-width: 150px;">
                                    <div class="row mb-3" role="button">
                                        <div class="col  rectangle-button-white align-items-center">
                                            <i class="fa-solid fa-thumbs-up "></i>
                                            <span class="mx-3">15</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3" role="button">
                                        <div class="col  rectangle-button-white">
                                            <i class="fa-solid fa-eye"></i>
                                            <span class="mx-3">150</span>
                                        </div>
                                    </div>
                                    <div class="row" role="button">

                                    </div>
                                </div>
                            </div>
                        </div>
';
}