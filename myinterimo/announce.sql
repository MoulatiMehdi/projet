DROP TABLE IF EXISTS announce;
CREATE TABLE IF NOT EXISTS announce
(

    id              BIGINT AUTO_INCREMENT,
    date_pub        DATE,
    date_approb     DATE,
    prix            INTEGER,
    type_immobilier BIGINT,
    id_category     BIGINT,
    email_auteur    VARCHAR(50),
    permission      VARCHAR(50),
    date_expiration DATE,
    titre           VARCHAR(255),
    description     TEXT,
    ville           BIGINT,
    region          BIGINT,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`region`) REFERENCES region (`id`),
    FOREIGN KEY (`ville`) REFERENCES ville (`id`)

);
CREATE TABLE IF NOT EXISTS categorie
(
    id               BIGINT,
    type_category    VARCHAR(255),
    type_transaction VARCHAR(50)
);