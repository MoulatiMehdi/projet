CREATE TABLE IF NOT EXISTS appartement
(
    id                BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_announce       BIGINT,

    chambres          INT,
    salleBain         INT,
    salons            INT,
    etages            INT,
    age_bien          INT,
    frais_syndic      INT,
    surface_totale    INT,
    surface_habitable INT,

    ascenseur         bool,
    climatisation     bool,
    chauffage         bool,
    parking           bool,
    terrasse          bool,
    balcon            bool,
    meuble            bool,
    cuisine_equipe    bool,
    concierge         bool,
    duplex            bool,

    type_category     VARCHAR(255),
    type_transaction  VARCHAR(50),
    icon              VARCHAR(255),

    FOREIGN KEY (id_announce) REFERENCES announce (id)


);
CREATE TABLE IF NOT EXISTS maison
(
    id               BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_announce      BIGINT,

    chambres         INT,
    salleBain        INT,
    salons           INT,
    age_bien         INT,
    surface_totale   INT,
    surface_soupente INT,

    ascenseur        bool,
    securite         bool,
    climatisation    bool,
    chauffage        bool,
    parking          bool,


    icon             VARCHAR(255),

    FOREIGN KEY (id_announce) REFERENCES announce (id)

);
CREATE TABLE IF NOT EXISTS magasin
(
    id               BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_announce      BIGINT,

    etages           INT,
    frais_syndic     INT,
    surface_totale   INT,
    surface_soupente INT,
    ascenseur        bool,
    securite         bool,
    climatisation    bool,
    chauffage        bool,
    parking          bool,

    type_category    VARCHAR(255),
    type_transaction VARCHAR(255),
    icon             VARCHAR(255),

    FOREIGN KEY (id_announce) REFERENCES announce (id)

);

CREATE TABLE IF NOT EXISTS bureaux
(
    id               BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_announce      BIGINT,

    salle_bain       INT,
    surface_totale   INT,
    surface_soupente INT,

    ascenseur        bool,
    climatisation    bool,
    chauffage        bool,


    icon             VARCHAR(255),

    FOREIGN KEY (id_announce) REFERENCES announce (id)
);

CREATE TABLE IF NOT EXISTS terrain
(
    id             BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_announce    BIGINT,

    surface_totale INT,
    zoning         INT,

    loti           bool,
    titre          bool,

    icon           VARCHAR(255),

    FOREIGN KEY (id_announce) REFERENCES announce (id)

);