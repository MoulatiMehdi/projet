DROP TABLE IF EXISTS appartement;
DROP TABLE IF EXISTS maison;
DROP TABLE IF EXISTS bureau;
DROP TABLE IF EXISTS terrain;
DROP TABLE IF EXISTS magasin;

CREATE TABLE IF NOT EXISTS appartement
(
    id                BIGINT PRIMARY KEY AUTO_INCREMENT,
    ref               VARCHAR(255),

    chambres          INT,
    salle_bain        INT,
    salons            INT,
    etages            INT,
    age_bien          INT,
    frais_syndic      INT,
    surface_totale    INT,
    surface_habitable INT,


    ascenseur         BOOL DEFAULT false,
    climatisation     BOOL DEFAULT false,
    chauffage         BOOL DEFAULT false,
    parking           BOOL DEFAULT false,
    terrasse          BOOL DEFAULT false,
    balcon            BOOL DEFAULT false,
    meuble            BOOL DEFAULT false,
    cuisine_equipe    BOOL DEFAULT false,
    concierge         BOOL DEFAULT false,
    duplex            BOOL DEFAULT false,
    securite          BOOL DEFAULT false,


    type_transaction  VARCHAR(255) NOT NULL,
    icon              VARCHAR(255)


);
CREATE TABLE IF NOT EXISTS maison
(
    id                BIGINT PRIMARY KEY AUTO_INCREMENT,
    ref               VARCHAR(255),


    chambres          INT,
    etages            INT,
    salle_bain        INT,
    salons            INT,
    age_bien          INT,
    surface_totale    INT,
    surface_habitable INT,

    jardin            BOOL DEFAULT false,
    securite          BOOL DEFAULT false,
    climatisation     BOOL DEFAULT false,
    chauffage         BOOL DEFAULT false,
    parking           BOOL DEFAULT false,
    balcon            BOOL DEFAULT false,
    terrasse          BOOL DEFAULT false,
    piscine           BOOL DEFAULT false,
    meuble            BOOL DEFAULT false,
    garage            BOOL DEFAULT false,
    cuisine_equipe    BOOL DEFAULT false,

    icon              VARCHAR(255),
    type_transaction  VARCHAR(255)


);
CREATE TABLE IF NOT EXISTS magasin
(
    id               BIGINT PRIMARY KEY AUTO_INCREMENT,
    ref              VARCHAR(255),

    etages           INT,
    frais_syndic     INT,
    surface_totale   INT,
    surface_soupente INT,

    ascenseur        BOOL DEFAULT false,
    securite         BOOL DEFAULT false,
    climatisation    BOOL DEFAULT false,
    chauffage        BOOL DEFAULT false,
    parking          BOOL DEFAULT false,
    cable_tel        BOOL DEFAULT false,
    terrasse         BOOL DEFAULT false,

    type_transaction VARCHAR(255),
    icon             VARCHAR(255)


);

CREATE TABLE IF NOT EXISTS bureau
(
    id               BIGINT PRIMARY KEY AUTO_INCREMENT,
    ref              VARCHAR(255),
    salle_bain       INT,
    surface_totale   INT,
    surface_soupente INT,

    ascenseur        BOOL DEFAULT false,
    climatisation    BOOL DEFAULT false,
    chauffage        BOOL DEFAULT false,
    securite         BOOL DEFAULT false,


    icon             VARCHAR(255),
    type_transaction VARCHAR(255)


);

CREATE TABLE IF NOT EXISTS terrain
(
    id               BIGINT PRIMARY KEY AUTO_INCREMENT,
    ref              VARCHAR(255),

    surface_totale   INT,
    zoning           INT,

    loti             BOOL DEFAULT false,
    terrain_titre    BOOL DEFAULT false,

    icon             VARCHAR(255),
    type_transaction VARCHAR(255)


);

commit;

