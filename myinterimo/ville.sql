CREATE TABLE IF NOT EXISTS `ville`
(
    `id`       int(11)                                                NOT NULL AUTO_INCREMENT,
    `ville`    varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `province` int(11)                                                NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`province`) REFERENCES province (`id`)
)
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 0;

REPLACE INTO `ville` (`id`, `ville`, `province`)
VALUES (0, 'Marrakech', 47),
       (1, 'Mechouar Kasba', 47),
       (2, 'Saâda', 47),
       (3, 'Tassoultante', 47),
       (4, 'Alouidane', 47),
       (5, 'Oulad Hassoune', 47),
       (6, 'Ouled Delim', 47),
       (7, 'Souihla', 47),
       (8, 'Sidi Zouine', 47),
       (9, 'Loudaya', 47),
       (10, 'Kettara', 47),
       (11, 'Tanger', 1),
       (12, 'Assilah', 1),
       (13, 'Gueznaia', 1),
       (14, 'Martil', 2),
       (15, 'Fnideq', 2),
       (16, 'M\'diq', 2),
       (17, 'Alliyenne', 2),
       (18, 'Belyounech', 2),
       (19, 'Tétouan', 3),
       (20, 'Oued Laou', 3),
       (21, 'Azla', 3),
       (22, 'Zaouiat Sidi Kacem	', 3),
       (23, 'Al Hamra', 3),
       (24, 'Beni Harchen', 3),
       (25, 'cercle de Fahs', 4),
       (26, 'cercle d\'Anjra', 4),
       (27, 'Souk Tolba', 5),
       (28, 'Souk L\'Qolla', 5),
       (29, 'Rissana Janoubia', 5),
       (30, 'Sahel	 ', 5),
       (31, 'Beni Garfett', 5),
       (32, 'Zouada', 5),
       (33, 'Laouamra', 5),
       (34, 'Larache	 ', 5),
       (35, 'Ksar el-Kebir	', 5),
       (36, 'cercle de Bni Boufrah', 6),
       (37, 'cercle de Bni Ouriaghel', 6),
       (38, 'cercle de Targuist', 6),
       (39, 'cercle de Ketama', 6),

       (40, '', 7),
       (41, '', 7),
       (42, '', 7),
       (43, '', 7),
       (44, '', 7),
       (45, '', 7);



