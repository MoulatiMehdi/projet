CREATE TABLE IF NOT EXISTS `province`
(
    `id`       int(11)                                                NOT NULL AUTO_INCREMENT,
    `province` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `region`   int(11)                                                NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`region`) REFERENCES region (`id`)
)
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

INSERT INTO `province` (`province`, `region`)
VALUES ('Tanger-Assilah', 1),
       ('M\'diq-Fnideq', 1),
       ('Tétouan', 1),
       ('Fahs-Anjra', 1),
       ('Larache', 1),
       ('Al Hoceïma', 1),
       ('Chefchaouen', 1),
       ('Ouezzane', 1),

       ('Oujda-Angad', 2),
       ('Nador', 2),
       ('Driouch', 2),
       ('Jerada', 2),
       ('Berkane', 2),
       ('Taourirt', 2),
       ('Guercif', 2),
       ('Figuig', 2),

       ('Fès', 3),
       ('Meknès', 3),
       ('d’El Hajeb', 3),
       ('d’Ifrane', 3),
       ('Moulay Yaâcoub', 3),
       ('Séfrou', 3),
       ('Boulemane', 3),
       ('Taounate', 3),
       ('Taza', 3),

       ('Rabat', 4),
       ('Salé', 4),
       ('Skhirate-Témara', 4),
       ('Kénitra', 4),
       ('Khémisset', 4),
       ('Sidi Kacem', 4),
       ('Sidi Slimane', 4),

       ('Béni-Mellal', 5),
       ('Azilal', 5),
       ('Fquih Ben Salah', 5),
       ('Khénifra', 5),
       ('Khouribga', 5),

       ('Casablanca', 6),
       ('Mohammédia', 6),
       ('El Jadida', 6),
       ('Nouaceur', 6),
       ('Médiouna', 6),
       ('Benslimane', 6),
       ('Berrechid', 6),
       ('Settat', 6),
       ('Sidi Bennour', 6),

       ('Marrakech', 7),
       ('Chichaoua', 7),
       ('Al Haouz', 7),
       ('El Kelaâ des Sraghna', 7),
       ('Essaouira', 7),
       ('Rehamna', 7),
       ('Safi', 7),
       ('Youssoufia', 7),

       ('Errachidia', 8),
       ('Ouarzazate', 8),
       ('Midelt', 8),
       ('Tinghir', 8),
       ('Zagora', 8),

       ('Agadir Ida-Outanane', 9),
       ('Inezgane-Aït Melloul', 9),
       ('Chtouka-Aït Baha', 9),
       ('Taroudant', 9),
       ('Tiznit', 9),
       ('Tata', 9),


       ('Guelmim', 10),
       ('Assa-Zag', 10),
       ('Tan-Tan', 10),
       ('Sidi Ifni', 10),


       ('Laâyoune', 11),
       ('Boujdour', 11),
       ('Tarfaya', 11),
       ('Es-Semara', 11),

       ('Oued Ed Dahab', 12),
       ('Aousserd', 12);