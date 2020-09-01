-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 01 sep. 2020 à 04:46
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mapromo`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(11) NOT NULL,
  `titre` varchar(254) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `date` varchar(250) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `titre`, `description`, `image`, `date`, `idCategorie`) VALUES
(6, 'Catalogue Marjane Spécial Electroménager', 'Découvrez le Catalogue Marjane Spécial Electroménager ! Profitez des soldes et promotions Marjane sur une large gamme d’équipements électroménagers !', 'img/Catalogue-Marjane-Electromenager-01-724x1024.jpg', '25 juill', 1),
(7, 'Catalogue Marjane Août 2020 Spécial Confort Maison', 'Découvrez le Catalogue Marjane Août 2020 Spécial Confort Maison. Profitez des offres Marjane valables du 13 Août au 13 Septembre 2020.', 'img/Catalogue-Marjane-Aout-2020-special-confort-maison-01-min-724x1024.jpg', '21 août ', 1),
(8, 'Catalogue Marjane Août Septembre 2020', 'Découvrez le Catalogue Marjane Août Septembre 2020 ! Profitez des offres Marjane valables du 20 Août au 06 Septembre 2020 !\r\n\r\n', 'img/Catalogue-Marjane-Aout-Septembre-2020-001-724x1024.jpg', '25 août ', 1),
(9, 'Catalogue Carrefour – Super Promotions Août 2020', 'Découvrez le Catalogue Carrefour Super Promotions Août 2020 ! Profitez des soldes et réductions à partir du 11 Août 2020 !', 'img/Catalogue-Carrefour-Super-Promos-Aout-2020-_Page_1-min-724x1024.jpg', '11 août ', 2),
(10, 'Catalogue Carrefour Spécial Rentrée des Classes', 'Découvrez le Catalogue Carrefour Maroc Spécial Rentrée des Classes !', 'img/Catalogue-Carrefour-Maroc-Rentree-des-classes-2020-01-min-724x1024.jpg', '22 août ', 2),
(11, 'Catalogue Carrefour Août Septembre 2020', 'Découvrez le Catalogue Carrefour Maroc Août Septembre 2020 ! Profitez des offres et promotions Carrefour valables du 26 Août au 15 Septembre 2020.', 'img/Catalogue-Carrefour-Aout-Septembre-2020-01-min-655x1024.jpg', '26 août ', 2),
(12, 'Catalogue BIM Mardi 1 Septembre 2020 Depliant Maroc', 'Découvrez le Catalogue BIM du Mardi 1 Septembre 2020 ! Des produits alimentaires nécessaires à votre quotidien et des produits sanitaires que vous utilisez tout au long de la journée sont disponibles à partir du 1er Septembre dans les rayons de BIM !', 'img/Catalogue-BIM-1-Septembre-2020-min.jpg', '21 août ', 3),
(13, 'Catalogue BIM Vendredi 04 Septembre 2020', 'Découvrez le Catalogue BIM du Vendredi 04 Septembre 2020. Pour garder votre rythme de sport depuis chez vous, BIM vous propose des équipements d’entraînement de qualité et à très bon prix ! D’autres surprises vous attendent à partir du Vendredi 4 Sep', 'img/Catalogue-BIM-04-Septembre-2020-min-724x1024.jpg', '28 août ', 3),
(14, 'Catalogue BIM Mardi 08 Septembre 2020', 'Découvrez le Catalogue BIM du Mardi 08 Septembre 2020 ! Des produits de beauté adaptés à votre peau pour une utilisation quotidienne sont disponibles dans tous les magasins BIM à partir du Mardi 8 Septembre !', 'img/Catalogue-BIM-08-Septembre-2020-min-724x1024.jpg', '28 août ', 3),
(15, 'Citroën Nouvelle Citroen Elysee', 'Valable du 08/06/2019 au 30/09/2020', 'img/00001.jpg', '08 juin ', 4),
(16, 'Citroën Nouvelle Berline C4 Cactus', 'Valable du 08/06/2019 au 30/09/2020', 'img/00001cc.jpg', '08 juin ', 4),
(17, 'Citroën Berlingo Multispace', 'Valable du 22/06/2020 au 30/09/2020', 'img/00001c.jpg', '22 juin ', 4),
(18, 'Renault Megane Sedan', 'Valable du 27/04/2020 au 15/11/2020', 'img/00001rrr.jpg', '27 mars', 5),
(19, 'Renault Kangoo', 'Valable du 06/02/2020 au 15/11/2020', 'img/00001rr.jpg', '27 mars', 5),
(20, 'Renault Koleos', 'Valable du 06/02/2020 au 15/11/2020', 'img/00001r.jpg', '27 mars', 5),
(21, 'NOUVEAU VOLKSWAGEN GOLF 8 2020 premier aperçu et PRIX', 'les dimensions de Golf 8\r\nPas de changement majeur. La Golf voit sa longueur progresser de 3 centimètres pour atteindre 4,29 m. La capacité du coffre est mesurée à 380 litres.\r\n\r\nLongueur : 4,29 m\r\nLargeur : 1,79 m\r\nHauteur : 1,46 m\r\nEmpattement : 2,', 'img/golf-8-prix-maroc-9.jpg', '22 févr', 6),
(22, 'Nouveau Rav4 Hybrid', 'Valable du 30/03/2020 au 04/01/2021', 'img/0000332.jpg', '30 mars', 7),
(23, 'Toyota Yaris', 'Valable du 30/03/2020 au 04/01/2021', 'img/21212.jpg', '30 mars', 7),
(24, 'Huawei P40 Pro', 'Huawei P40 Pro.  Comprend un écran oled capacitive touchscreen, 16m colors, une batterie de non-removable li-po 4200 mah battery, 256go de stockage, 8go de RAM, hisilicon kirin 990 5g (7 nm+)', 'img/61VX0szn4aL._AC_SL1000_.jpg', '25 août ', 8),
(25, 'Samsung galaxy s20 ultra 5g ', 'Samsung Galaxy S20 Ultra 5G. Annoncé en 2020-02-11 Comprend un écran dynamic amoled 2x capacitive touchscreen, 16m colors, une batterie de non-removable li-po 5000 mah battery, 128go de stockage, 12go de RAM, exynos 990 (7 nm+) - globalqualcomm sm825', 'img/promo-samsung-galaxy-s20-ultra-10.jpg', '25 août ', 8),
(26, 'Apple iphone 11 pro 64go stockage 4go ram', 'Apple iPhone 11 Pro. Annoncé en 2019-09-01 Comprend un écran super retina xdr oled capacitive touchscreen, 16m colors, une batterie de non-removable li-ion 3046 mah battery (11.67 wh), 64go de stockage, 4go de RAM, apple a13 bionic (7 nm ),', 'img/apple-iphone-11-pro-max-512gb-plata.jpg', '25 août ', 8),
(27, ' Samsung Galaxy Tab S6 Lite', 'Samsung a présenté aujourd’hui la nouvelle Galaxy Tab S6 Lite, une tablette élégante et abordable conçue à la fois pour le travail et les loisirs. Forte de son écran aux dimensions généreuses et un d’un stylet S Pen repensé, la Galaxy Tab S6 Lite est', 'img/Samsung-Galaxy-Tab-S6-03.jpg', '27 mars', 9),
(28, 'ASUS TUF 705DY-AU096T', 'ce pc portable asus tuf 705dy-au096t s equipe d un processeur ryzen 5 3550h. ce dernier, cadence a 2,10 ghz (jusqu a 3,70 ghz en mode burst) vous offre toute la puissance d un pc portable gamer de derniere generation ! il integre par ailleurs une car', 'img/promo-asus-MN0005594107_1.jpg', '25 août ', 10),
(29, 'Lenovo ideapad 130 1 tb stockage 4 ddr4 ram', 'le pc portable fonctionne sur un système d\'exploitation Windows 10 Home Basic. En ce qui concerne la carte graphique, ce portable dispose d’une carte graphique Intel HD 520 pour gérer les fonctions graphiques. Pour le garder en vie, il dispose d\'une ', 'img/lenovo_pcportable_ideapad_130_15_caracteristique_Maroc_5eef34de5cb48.jpg', '25 août ', 10),
(30, 'AVON Guide Distillery', 'Valable du 31/07/2020 au 31/08/2020', 'img/323232.jpg', '01 août ', 11),
(31, 'AVON HT Interactif C08 -2020', 'Valable du 31/07/2020 au 31/08/2020', 'img/3233232.jpg', '01 août ', 11),
(32, 'Yves Rocher New Collection', 'Valable du 20/08/2020 au 20/10/2020', 'img/21290.jpg', '21 août ', 12),
(33, 'Collection Flormar', 'Valable du 01/08/2020 au 25/09/2020', 'img/54454.jpg', '01 août ', 13),
(34, 'Offres Flormar', 'Valable du 01/08/2020 au 25/09/2020', 'img/32323211.jpg', '01 août ', 13),
(35, 'Zara SRLPLS', 'Valable du 21/07/2020 au 30/09/2020', 'img/322345.jpg', '21 août ', 14),
(36, 'ZARA NEW IN', 'Valable du 21/07/2020 au 30/09/2020', 'img/76766.jpg', '21 août ', 14),
(37, 'LC Waikiki Collection Homme', 'Valable du 03/08/2020 au 02/10/2020', 'img/53322.jpg', '03 août ', 15),
(38, 'LC Waikiki Collection Femme', 'Valable du 03/08/2020 au 02/10/2020', 'img/877878.jpg', '03 août ', 15),
(39, 'Marwa Spring Summer 2020 Collection', 'Valable du 09/03/2020 au 08/09/2020', 'img/4342144.jpg', '21 août ', 16),
(40, 'Decathlon Lookbook', 'Valable du 25/08/2020 au 16/10/2020', 'img/434311.jpg', '25 août ', 17),
(41, 'Decathlon Men\'s Tops', 'Valable du 25/08/2020 au 16/10/2020', 'img/76322.jpg', '25 août ', 17),
(42, 'TAKSIM 4* AVEC LA TURKISH 8J/7N (Départ: Casablanca)', 'PLUS DE DÉTAILS\r\nLe prix inclut :\r\n- Billet d\'avion Aller/Retour avec Turkish airlines De Casablanca\r\n(Si vous désirez un départ de Marrakech cliquez sur ce lien : https://vacancia.ma/voyages/voyage-turquie-pas-cher)\r\n- 40 kg Bagage en soute aller/re', 'img/TAKSIM_8J_7N_AVEC_LA_TURKISH_Depart_Casablanca_15662325635d5acff3009be.jpg', '25 août ', 18),
(43, 'Voyage de vacances de novembre ORGANISÉ A DUBAI à 10900 DH seulement', 'JOUR 01 : CASABLANCA – DUBAI\r\nRassemblement à l’aéroport Med V, enregistrement et départ vers Dubaï avec Emirates à 22h00, nuitée à bord\r\n\r\nJOUR 02 : DUBAI\r\nArrivée le matin à Dubai vers 08h55 et transfert à l’hôtel de luxe Al Ghurair Rayhaan by Rota', 'img/AURIS-01.jpg', '21 août ', 19),
(44, 'Voyage organisé paris depart maroc 2020', 'PLUS DE DÉTAILS\r\nLe prix inclut : \r\n- Billet d\'avion Aller/Retour  depart de Marrakech / Casablanca\r\n- 4 nuits à l\'hôtel MARENA ou similaire \r\n- Transport aéroport-hotel-aéroport. \r\n\r\nLe prix n\'inclut pas : \r\n\r\n- Autres prestations non mentionnées.\r\n', 'img/image_processing20200415-15509-ilhdpu.jpg', '25 août ', 20);

-- --------------------------------------------------------

--
-- Structure de la table `catalogue`
--

CREATE TABLE `catalogue` (
  `idCatalogue` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `catalogue`
--

INSERT INTO `catalogue` (`idCatalogue`, `nom`) VALUES
(1, 'Super marché'),
(2, 'Voiture'),
(3, 'Electronique'),
(4, 'Femme'),
(5, 'Mode'),
(6, 'Voyage');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `idCatalogue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idCategory`, `nom`, `idCatalogue`) VALUES
(1, 'Marjane', 1),
(2, 'Carrefour', 1),
(3, 'Bim', 1),
(4, 'Citroën', 2),
(5, 'Renault', 2),
(6, 'Volkswagen', 2),
(7, 'Toyota', 2),
(8, 'smarphones', 3),
(9, 'tablettes', 3),
(10, 'ordinateurs', 3),
(11, 'avon', 4),
(12, 'yves Rocher maroc', 4),
(13, 'FLORMAR', 4),
(14, 'zara', 5),
(15, 'lc waikiki', 5),
(16, 'marwa', 5),
(17, 'decathlon', 5),
(18, 'turquie', 6),
(19, 'dubai', 6),
(20, 'paris', 6);

-- --------------------------------------------------------

--
-- Structure de la table `image_details`
--

CREATE TABLE `image_details` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image_details`
--

INSERT INTO `image_details` (`id`, `image`, `id_article`) VALUES
(15, 'img/Catalogue-Marjane-Electromenager-02-724x1024.jpg', 6),
(16, 'img/Catalogue-Marjane-Electromenager-03-724x1024.jpg', 6),
(17, 'img/Catalogue-Marjane-Electromenager-04-724x1024.jpg', 6),
(18, 'img/Catalogue-Marjane-Electromenager-05-724x1024.jpg', 6),
(19, 'img/Catalogue-Marjane-Electromenager-06-724x1024.jpg', 6),
(20, 'img/Catalogue-Marjane-Electromenager-07-724x1024.jpg', 6),
(21, 'img/Catalogue-Marjane-Electromenager-08-724x1024.jpg', 6),
(22, 'img/Catalogue-Marjane-Aout-2020-special-confort-maison-02-min-724x1024.jpg', 7),
(23, 'img/Catalogue-Marjane-Aout-2020-special-confort-maison-03-min-724x1024.jpg', 7),
(24, 'img/Catalogue-Marjane-Aout-2020-special-confort-maison-04-min-724x1024.jpg', 7),
(25, 'img/Catalogue-Marjane-Aout-2020-special-confort-maison-05-min-724x1024.jpg', 7),
(26, 'img/Catalogue-Marjane-Aout-2020-special-confort-maison-06-min-724x1024.jpg', 7),
(27, 'img/Catalogue-Marjane-Aout-Septembre-2020-002-724x1024.jpg', 8),
(28, 'img/Catalogue-Marjane-Aout-Septembre-2020-005-724x1024.jpg', 8),
(29, 'img/Catalogue-Marjane-Aout-Septembre-2020-007-724x1024.jpg', 8),
(30, 'img/Catalogue-Marjane-Aout-Septembre-2020-008-724x1024.jpg', 8),
(31, 'img/Catalogue-Marjane-Aout-Septembre-2020-009-724x1024.jpg', 8),
(32, 'img/Catalogue-Marjane-Aout-Septembre-2020-010-724x1024.jpg', 8),
(33, 'img/Catalogue-Carrefour-Super-Promos-Aout-2020-_Page_2-min-724x1024.jpg', 9),
(34, 'img/Catalogue-Carrefour-Super-Promos-Aout-2020-_Page_3-min-724x1024.jpg', 9),
(35, 'img/Catalogue-Carrefour-Super-Promos-Aout-2020-_Page_4-min-724x1024.jpg', 9),
(36, 'img/Catalogue-Carrefour-Super-Promos-Aout-2020-_Page_5-min-724x1024.jpg', 9),
(37, 'img/Catalogue-Carrefour-Super-Promos-Aout-2020-_Page_6-min-724x1024.jpg', 9),
(38, 'img/Catalogue-Carrefour-Super-Promos-Aout-2020-_Page_7-min-724x1024.jpg', 9),
(39, 'img/Catalogue-Carrefour-Maroc-Rentree-des-classes-2020-02-min-724x1024.jpg', 10),
(40, 'img/Catalogue-Carrefour-Maroc-Rentree-des-classes-2020-03-min-724x1024.jpg', 10),
(41, 'img/Catalogue-Carrefour-Maroc-Rentree-des-classes-2020-04-min-724x1024.jpg', 10),
(42, 'img/Catalogue-Carrefour-Maroc-Rentree-des-classes-2020-05-min-724x1024.jpg', 10),
(43, 'img/Catalogue-Carrefour-Maroc-Rentree-des-classes-2020-06-min-724x1024.jpg', 10),
(44, 'img/Catalogue-Carrefour-Maroc-Rentree-des-classes-2020-07-min-724x1024.jpg', 10),
(45, 'img/Catalogue-Carrefour-Aout-Septembre-2020-02-min-655x1024.jpg', 11),
(46, 'img/Catalogue-Carrefour-Aout-Septembre-2020-03-min-655x1024.jpg', 11),
(47, 'img/Catalogue-Carrefour-Aout-Septembre-2020-04-min-655x1024.jpg', 11),
(48, 'img/Catalogue-Carrefour-Aout-Septembre-2020-05-min-655x1024.jpg', 11),
(49, 'img/Catalogue-Carrefour-Aout-Septembre-2020-06-min-655x1024.jpg', 11),
(50, 'img/Catalogue-Carrefour-Aout-Septembre-2020-07-min-655x1024.jpg', 11),
(51, 'img/Catalogue-Carrefour-Aout-Septembre-2020-08-min-655x1024.jpg', 11),
(52, 'img/Catalogue-BIM-1-Septembre-2020-2-min.jpg', 12),
(53, 'img/Catalogue-BIM-04-Septembre-2020-min-724x1024.jpg', 13),
(54, 'img/Catalogue-BIM-08-Septembre-2020-2-min-724x1024.jpg', 14),
(55, 'img/00002.jpg', 15),
(56, 'img/00002 (1).jpg', 16),
(57, 'img/00002 (2).jpg', 17),
(58, 'img/00002 (3).jpg', 18),
(59, 'img/00003.jpg', 18),
(60, 'img/00004.jpg', 18),
(61, 'img/00002 (4).jpg', 19),
(62, 'img/00003 (1).jpg', 19),
(63, 'img/00006.jpg', 19),
(64, 'img/00007.jpg', 19),
(65, 'img/00002 (5).jpg', 20),
(66, 'img/00003 (2).jpg', 20),
(67, 'img/00004 (1).jpg', 20),
(68, 'img/00005.jpg', 20),
(69, 'img/00006 (1).jpg', 20),
(70, 'img/golf-8-prix-maroc-1.jpg', 21),
(71, 'img/golf-8-prix-maroc-11.jpg', 21),
(72, 'img/00002 (6).jpg', 22),
(73, 'img/00003 (3).jpg', 23),
(74, 'img/00005 (1).jpg', 23),
(75, 'img/00018.jpg', 23),
(76, 'img/00019.jpg', 23),
(77, 'img/list-img.jpg', 24),
(78, 'img/huawei-p40-pro-evleaks-1200x874.jpg', 24),
(79, 'img/galaxy-s20-ultra-5g.jpg', 25),
(80, 'img/apple-iphone-11-pro-1.jpg', 26),
(81, 'img/Tab-S6-Lite_Product_Specifications.jpg', 27),
(82, 'img/promo-asus-MN0005594110_1.jpg', 28),
(83, 'img/promo-asus-MN0005594109_1.jpg', 28),
(84, 'img/lenovo_pcportable_ideapad_130_15_caracteristique_5eef34de49f6a.jpg', 29),
(85, 'img/00002 (7).jpg', 30),
(86, 'img/00003 (4).jpg', 30),
(87, 'img/00004 (2).jpg', 30),
(88, 'img/00005 (2).jpg', 30),
(89, 'img/00002 (8).jpg', 31),
(90, 'img/00003 (5).jpg', 31),
(91, 'img/00004 (3).jpg', 31),
(92, 'img/00005 (3).jpg', 31),
(93, 'img/00002 (9).jpg', 32),
(94, 'img/00003 (6).jpg', 32),
(95, 'img/000025.jpg', 32),
(96, 'img/0000821.jpg', 32),
(97, 'img/00002 (11).jpg', 33),
(98, 'img/00003 (7).jpg', 33),
(99, 'img/00004 (4).jpg', 33),
(100, 'img/00005 (4).jpg', 33),
(101, 'img/00002 (12).jpg', 34),
(102, 'img/00003 (8).jpg', 34),
(103, 'img/00004 (5).jpg', 34),
(104, 'img/00005 (5).jpg', 34),
(105, 'img/00006 (2).jpg', 34),
(106, 'img/00007 (1).jpg', 34),
(107, 'img/00002 (13).jpg', 35),
(108, 'img/00003 (9).jpg', 35),
(109, 'img/00004 (6).jpg', 35),
(110, 'img/00005 (6).jpg', 35),
(111, 'img/00004 (7).jpg', 36),
(112, 'img/00005 (7).jpg', 36),
(113, 'img/00006 (3).jpg', 36),
(114, 'img/00007 (2).jpg', 36),
(115, 'img/00002 (14).jpg', 37),
(116, 'img/00003 (10).jpg', 37),
(117, 'img/00004 (8).jpg', 37),
(118, 'img/00005 (8).jpg', 37),
(119, 'img/00006 (4).jpg', 37),
(120, 'img/00007 (3).jpg', 37),
(121, 'img/00002 (15).jpg', 38),
(122, 'img/00003 (11).jpg', 38),
(123, 'img/00004 (9).jpg', 38),
(124, 'img/00005 (9).jpg', 38),
(125, 'img/00006 (5).jpg', 38),
(126, 'img/00007 (4).jpg', 38),
(127, 'img/00002 (16).jpg', 39),
(128, 'img/00003 (12).jpg', 39),
(129, 'img/00004 (10).jpg', 39),
(130, 'img/00005 (10).jpg', 39),
(131, 'img/00006 (6).jpg', 39),
(132, 'img/00008.jpg', 39),
(133, 'img/00002 (17).jpg', 40),
(134, 'img/00003 (13).jpg', 40),
(135, 'img/00001 (11).jpg', 40),
(136, 'img/00006 (7).jpg', 40),
(137, 'img/00002 (18).jpg', 41),
(138, 'img/00003 (14).jpg', 41),
(139, 'img/00004 (11).jpg', 41),
(140, 'img/00005 (12).jpg', 41),
(141, 'img/00006 (8).jpg', 41),
(142, 'img/TAKSIM_4_AVEC_LA_TURKISH_8J_7N_Depart_Casablanca_15668419005d641c2bd15a7.jpg', 42),
(145, 'img/TAKSIM_4_AVEC_LA_TURKISH_8J_7N_Depart_Casablanca_15668419015d641c2cc94b1.jpg', 42),
(146, 'img/DUBAI_en_groupe_15394221145bc1b7a17bba0.jpeg', 43),
(147, 'img/DUBAI_en_groupe_15394221145bc1b7a17c28b.jpeg', 43),
(148, 'img/DUBAI_en_groupe_15394221145bc1b7a17c9ae.jpg', 43),
(149, 'img/Paris_15191421635a8c45131dfec.jpg', 44),
(150, 'img/Paris_15191421635a8c45131e638.jpg', 44);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `status`) VALUES
(1, 'admin', 'admin123', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`),
  ADD UNIQUE KEY `ARTICLE_PK` (`idArticle`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Index pour la table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`idCatalogue`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`),
  ADD UNIQUE KEY `CATEGORY_PK` (`idCategory`),
  ADD KEY `idCatalogue` (`idCatalogue`);

--
-- Index pour la table `image_details`
--
ALTER TABLE `image_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idarticle_detail` (`id_article`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `image_details`
--
ALTER TABLE `image_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `idCategorie` FOREIGN KEY (`idCategorie`) REFERENCES `category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `idCatalogue` FOREIGN KEY (`idCatalogue`) REFERENCES `catalogue` (`idCatalogue`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `image_details`
--
ALTER TABLE `image_details`
  ADD CONSTRAINT `idarticle_detail` FOREIGN KEY (`id_article`) REFERENCES `article` (`idArticle`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
