DROP TABLE IF EXISTS announce;
CREATE TABLE IF NOT EXISTS announce
(

    id               BIGINT AUTO_INCREMENT,
    id_category      BIGINT       NOT NULL,
    id_ville         BIGINT       NOT NULL,
    id_region        BIGINT       NOT NULL,

    likes            INTEGER DEFAULT 0,
    prix             INTEGER,

    date_pub         DATE,
    date_approb      DATE,
    date_expiration  DATE,

    type_immobilier  VARCHAR(255) NOT NULL,
    type_transaction VARCHAR(50)  NOT NULL,
    email            VARCHAR(50)  NOT NULL,
    permission       VARCHAR(50),
    titre            VARCHAR(255),

    description      TEXT,
    addresse         TEXT,

    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_region`) REFERENCES region (`id`),
    FOREIGN KEY (`id_ville`) REFERENCES ville (`id`),
    FOREIGN KEY (`email`) REFERENCES myinterimo_users (`email`),
    UNIQUE (type_immobilier, id_category)

);
