-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 07 juil. 2022 à 12:35
-- Version du serveur :  10.3.17-MariaDB-0+deb10u1
-- Version de PHP :  7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vinodb`
--

-- --------------------------------------------------------

--
-- Structure de la table `vino__achats`
--

CREATE TABLE `vino__achats` (
  `id` int(11) NOT NULL,
  `date_achat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vino__achats`
--

INSERT INTO `vino__achats` (`id`, `date_achat`) VALUES
(1, '2022-07-24'),
(2, '2022-07-24'),
(12, '2022-07-24'),
(13, '2022-07-24'),
(14, '2022-07-24'),
(15, '2022-07-24'),
(16, '2022-07-24'),
(17, '2022-07-24'),
(18, '2022-07-24'),
(19, '2022-07-24'),
(20, '2022-07-24'),
(21, '2022-07-24'),
(22, '2022-07-24'),
(23, '2022-07-24'),
(24, '2022-07-24'),
(25, '2022-07-24'),
(26, '2022-07-24'),
(27, '2022-07-24'),
(28, '2022-07-24'),
(29, '2022-07-24'),
(30, '2022-07-24'),
(31, '2022-07-24'),
(32, '2022-07-24'),
(33, '2022-07-24'),
(34, '2022-07-24'),
(35, '2022-07-24'),
(36, '2022-07-24'),
(37, '2022-07-24'),
(38, '2022-07-24'),
(39, '2022-07-24'),
(40, '2022-07-24'),
(41, '2022-07-24'),
(42, '2022-07-24'),
(43, '2022-07-24'),
(44, '2022-07-24'),
(45, '2022-07-24'),
(46, '2022-07-24'),
(47, '2022-07-24'),
(48, '2022-07-24'),
(49, '2022-07-24'),
(50, '2022-07-24'),
(51, '2022-07-24'),
(52, '2022-07-24'),
(53, '2022-07-24'),
(54, '2022-07-24'),
(55, '2022-07-24'),
(56, '2022-07-24'),
(57, '2022-07-24'),
(58, '2022-07-24'),
(59, '2022-07-24'),
(60, '2022-07-24'),
(61, '2022-07-24'),
(62, '2022-07-24'),
(63, '2022-07-24'),
(64, '2022-07-24'),
(65, '2022-07-24'),
(67, '2022-07-08'),
(68, '2022-07-23'),
(69, '2022-07-23'),
(70, '2022-07-29'),
(71, '2022-07-16'),
(73, '2022-02-22'),
(74, '2022-07-17'),
(75, '2077-07-07'),
(78, '2022-07-07'),
(79, '2019-01-30'),
(81, '2017-01-13');

-- --------------------------------------------------------

--
-- Structure de la table `vino__bouteille`
--

CREATE TABLE `vino__bouteille` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `code_saq` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `prix_saq` float DEFAULT NULL,
  `url_saq` varchar(200) DEFAULT NULL,
  `url_img` varchar(200) DEFAULT NULL,
  `format` varchar(20) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
  `id_pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__bouteille`
--

INSERT INTO `vino__bouteille` (`id`, `nom`, `image`, `code_saq`, `description`, `prix_saq`, `url_saq`, `url_img`, `format`, `id_type`, `id_pays`) VALUES
(438, 'Go_go', '../../assets/img/bouteille.jpg', NULL, NULL, NULL, '../../assets/img/bouteille.jpg', NULL, '750 ml', 1, 3),
(440, '11th Hour Cellars Pinot Noir', '//s7d9.scene7.com/is/image/SAQ/13966470_is?$saq-rech-prod-gril$', '13966470', 'Vin rouge | 750 ml | États-Unis', 17, 'https://www.saq.com/fr/13966470', '//s7d9.scene7.com/is/image/SAQ/13966470_is?$saq-rech-prod-gril$', '750 ml', 1, 6),
(441, '13th Street Winery Gamay 2019', '//s7d9.scene7.com/is/image/SAQ/12705631_is?$saq-rech-prod-gril$', '12705631', 'Vin rouge | 750 ml | Canada', 20, 'https://www.saq.com/fr/12705631', '//s7d9.scene7.com/is/image/SAQ/12705631_is?$saq-rech-prod-gril$', '750 ml', 1, 1),
(442, '14 Hands Cabernet-Sauvignon Columbia Valley', '//s7d9.scene7.com/is/image/SAQ/13876247_is?$saq-rech-prod-gril$', '13876247', 'Vin rouge | 750 ml | États-Unis', 16, 'https://www.saq.com/fr/13876247', '//s7d9.scene7.com/is/image/SAQ/13876247_is?$saq-rech-prod-gril$', '750 ml', 1, 6),
(443, '14 Hands Pinot Grigio Columbia Valley', '//s7d9.scene7.com/is/image/SAQ/13876271_is?$saq-rech-prod-gril$', '13876271', 'Vin blanc | 750 ml | États-Unis', 14, 'https://www.saq.com/fr/13876271', '//s7d9.scene7.com/is/image/SAQ/13876271_is?$saq-rech-prod-gril$', '750 ml', 2, 6),
(444, '14 Hands Pinot Gris Columbia Valley 2015', '//s7d9.scene7.com/is/image/SAQ/13299881_is?$saq-rech-prod-gril$', '13299881', 'Vin blanc | 750 ml | États-Unis', 20, 'https://www.saq.com/fr/13299881', '//s7d9.scene7.com/is/image/SAQ/13299881_is?$saq-rech-prod-gril$', '750 ml', 2, 6),
(445, '1564 Natural White 2020', '//s7d9.scene7.com/is/image/SAQ/14919843_is?$saq-rech-prod-gril$', '14919843', 'Vin blanc | 750 ml | Espagne', 21, 'https://www.saq.com/fr/14919843', '//s7d9.scene7.com/is/image/SAQ/14919843_is?$saq-rech-prod-gril$', '750 ml', 2, 4),
(447, '3 Badge Leese-Fitch Merlot 2015', '//s7d9.scene7.com/is/image/SAQ/13523011_is?$saq-rech-prod-gril$', '13523011', 'Vin rouge | 750 ml | États-Unis', 18, 'https://www.saq.com/fr/13523011', '//s7d9.scene7.com/is/image/SAQ/13523011_is?$saq-rech-prod-gril$', '750 ml', 1, 6),
(448, '3 de Valandraud 2016', '//s7d9.scene7.com/is/image/SAQ/13392031_is?$saq-rech-prod-gril$', '13392031', 'Vin rouge | 750 ml | France', 53, 'https://www.saq.com/fr/13392031', '//s7d9.scene7.com/is/image/SAQ/13392031_is?$saq-rech-prod-gril$', '750 ml', 1, 2),
(450, '4 Kilos Gallinas y Focas 2018', '//s7d9.scene7.com/is/image/SAQ/13903479_is?$saq-rech-prod-gril$', '13903479', 'Vin rouge | 750 ml | Espagne', 35, 'https://www.saq.com/fr/13903479', '//s7d9.scene7.com/is/image/SAQ/13903479_is?$saq-rech-prod-gril$', '750 ml', 1, 4),
(452, '655 Miles Cabernet Sauvignon Lodi', '//s7d9.scene7.com/is/image/SAQ/14139863_is?$saq-rech-prod-gril$', '14139863', 'Vin rouge | 750 ml | États-Unis', 15, 'https://www.saq.com/fr/14139863', '//s7d9.scene7.com/is/image/SAQ/14139863_is?$saq-rech-prod-gril$', '750 ml', 1, 6),
(454, 'Acumen Bordeaux Blend Mountainside Napa Valley 2015', '//s7d9.scene7.com/is/image/SAQ/14043781_is?$saq-rech-prod-gril$', '14043781', 'Vin rouge | 750 ml | États-Unis', 49, 'https://www.saq.com/fr/14043781', '//s7d9.scene7.com/is/image/SAQ/14043781_is?$saq-rech-prod-gril$', '750 ml', 1, 6),
(455, 'Adaras Calizo Almansa 2020', '//s7d9.scene7.com/is/image/SAQ/14134368_is?$saq-rech-prod-gril$', '14134368', 'Vin rouge | 750 ml | Espagne', 18, 'https://www.saq.com/fr/14134368', '//s7d9.scene7.com/is/image/SAQ/14134368_is?$saq-rech-prod-gril$', '750 ml', 1, 4),
(456, 'Adegas Valminor Serra da Estrella 2020', '//s7d9.scene7.com/is/image/SAQ/13566652_is?$saq-rech-prod-gril$', '13566652', 'Vin blanc | 750 ml | Espagne', 16, 'https://www.saq.com/fr/13566652', '//s7d9.scene7.com/is/image/SAQ/13566652_is?$saq-rech-prod-gril$', '750 ml', 2, 4),
(457, 'Aglianico Donnachiara Irpinia 2018', '//s7d9.scene7.com/is/image/SAQ/12001852_is?$saq-rech-prod-gril$', '12001852', 'Vin rouge | 750 ml | Italie', 23, 'https://www.saq.com/fr/12001852', '//s7d9.scene7.com/is/image/SAQ/12001852_is?$saq-rech-prod-gril$', '750 ml', 1, 3),
(459, 'Agora du Château des Places Graves Agora 2018', '//s7d9.scene7.com/is/image/SAQ/13822441_is?$saq-rech-prod-gril$', '13822441', 'Vin blanc | 750 ml | France', 37, 'https://www.saq.com/fr/13822441', '//s7d9.scene7.com/is/image/SAQ/13822441_is?$saq-rech-prod-gril$', '750 ml', 2, 2),
(460, 'Agricola Falset-Marca Ètim El Viatge Montsant 2019', '//s7d9.scene7.com/is/image/SAQ/13800752_is?$saq-rech-prod-gril$', '13800752', 'Vin rouge | 750 ml | Espagne', 19, 'https://www.saq.com/fr/13800752', '//s7d9.scene7.com/is/image/SAQ/13800752_is?$saq-rech-prod-gril$', '750 ml', 1, 4),
(461, 'Agro Turistica Marella Podere Marella Fiammetta Sangiovese 2018', '//s7d9.scene7.com/is/image/SAQ/13675496_is?$saq-rech-prod-gril$', '13675496', 'Vin rouge | 750 ml | Italie', 24, 'https://www.saq.com/fr/13675496', '//s7d9.scene7.com/is/image/SAQ/13675496_is?$saq-rech-prod-gril$', '750 ml', 1, 3),
(462, 'Ah-So Red Navarra', '//s7d9.scene7.com/is/image/SAQ/14715445_is?$saq-rech-prod-gril$', '14715445', 'Vin rouge | 250 ml | Espagne', 6, 'https://www.saq.com/fr/14715445', '//s7d9.scene7.com/is/image/SAQ/14715445_is?$saq-rech-prod-gril$', '250 ml', 1, 4),
(463, 'Ah-So Navarra', '//s7d9.scene7.com/is/image/SAQ/14715437_is?$saq-rech-prod-gril$', '14715437', 'Vin blanc | 250 ml | Espagne', 5, 'https://www.saq.com/fr/14715437', '//s7d9.scene7.com/is/image/SAQ/14715437_is?$saq-rech-prod-gril$', '250 ml', 2, 4),
(464, 'Vino_vino', '../../assets/img/bouteille.jpg', NULL, NULL, NULL, '../../assets/img/bouteille.jpg', NULL, '450 ml', 1, 1),
(465, 'Vino)', '../../assets/img/bouteille.jpg', NULL, NULL, NULL, '../../assets/img/bouteille.jpg', NULL, '450ml', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `vino__cellier`
--

CREATE TABLE `vino__cellier` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `id_usager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__cellier`
--

INSERT INTO `vino__cellier` (`id`, `nom`, `adresse`, `id_usager`) VALUES
(2, 'GGGP', '2280 Bd Saint-Joseph E, Montréal, QC H2H 1G3', 1),
(11, 'VinoResto', '105 19e Av., Montréal, QC, H1X 2C5', 2),
(12, 'VinoCellier', '1045 av. Parc, Montréal, QC, H1C 5X4', 2),
(21, '777', 'asdfasdfas', 1),
(22, 'XXX_cellier', '453 rue VinoResto', 1),
(56, 'Dmitriy', '1234', 1),
(57, 'asdfasdfa', 'asdfasdfasdf', 1),
(61, 'gggooo', '34 iii', 2),
(67, 'fifa', '33 rue XXX', 14);

-- --------------------------------------------------------

--
-- Structure de la table `vino__cellier_bouteille`
--

CREATE TABLE `vino__cellier_bouteille` (
  `id_cellier` int(11) NOT NULL,
  `id_bouteille` int(11) NOT NULL,
  `id_achats` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `millesime` int(11) NOT NULL,
  `garde_jusqua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__cellier_bouteille`
--

INSERT INTO `vino__cellier_bouteille` (`id_cellier`, `id_bouteille`, `id_achats`, `quantite`, `prix`, `millesime`, `garde_jusqua`) VALUES
(2, 447, 73, 25, 25, 2022, '2022-02-22'),
(11, 441, 64, 44, 44, 1944, '2022-07-21'),
(11, 442, 65, 33, 33, 2003, '2022-07-17'),
(11, 464, 62, 1, 2000, 2000, '2022-07-16'),
(61, 438, 54, 38, 8, 2008, '2022-07-09'),
(61, 438, 60, 20, 8, 2008, '2022-07-09'),
(61, 438, 61, 99, 99, 1999, '2022-07-10'),
(67, 448, 75, 88, 88, 2007, '2077-07-07'),
(67, 448, 79, 4, 4, 2009, '2022-07-08'),
(67, 448, 81, 1, 111, 2011, '2029-09-12'),
(67, 450, 78, 333, 444, 2011, '2022-07-08'),
(67, 465, 74, 5, 333, 2003, '2022-07-10');

-- --------------------------------------------------------

--
-- Structure de la table `vino__erreur`
--

CREATE TABLE `vino__erreur` (
  `id_usager` int(11) NOT NULL,
  `id_bouteille` int(11) NOT NULL,
  `erreur` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vino__notes`
--

CREATE TABLE `vino__notes` (
  `id_usager` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL,
  `cellier_bouteille_id_cellier` int(11) NOT NULL,
  `cellier_bouteille_id_bouteille` int(11) NOT NULL,
  `cellier_bouteille_id_achats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vino__notes`
--

INSERT INTO `vino__notes` (`id_usager`, `note`, `cellier_bouteille_id_cellier`, `cellier_bouteille_id_bouteille`, `cellier_bouteille_id_achats`) VALUES
(1, 6, 2, 447, 73),
(1, 10, 67, 448, 75),
(1, NULL, 67, 448, 79),
(1, 5, 67, 448, 81),
(1, NULL, 67, 450, 78),
(1, 4, 67, 465, 74);

-- --------------------------------------------------------

--
-- Structure de la table `vino__pays`
--

CREATE TABLE `vino__pays` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vino__pays`
--

INSERT INTO `vino__pays` (`id`, `nom`) VALUES
(1, 'Canada'),
(2, 'France'),
(3, 'Italie'),
(4, 'Espagne'),
(5, 'Autriche'),
(6, 'États-Unis');

-- --------------------------------------------------------

--
-- Structure de la table `vino__reseaux`
--

CREATE TABLE `vino__reseaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vino__reseaux_usager`
--

CREATE TABLE `vino__reseaux_usager` (
  `id_reseaux` int(11) NOT NULL,
  `id_usager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vino__type`
--

CREATE TABLE `vino__type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__type`
--

INSERT INTO `vino__type` (`id`, `type`) VALUES
(1, 'Vin rouge'),
(2, 'Vin blanc');

-- --------------------------------------------------------

--
-- Structure de la table `vino__usager`
--

CREATE TABLE `vino__usager` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `courriel` varchar(45) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `id_ville` int(11) DEFAULT NULL,
  `mot_passe` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `connecte` varchar(45) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vino__usager`
--

INSERT INTO `vino__usager` (`id`, `nom`, `prenom`, `courriel`, `phone`, `adresse`, `id_ville`, `mot_passe`, `confirmpassword`, `connecte`, `image_url`) VALUES
(1, 'Simon', 'Bob Dilan', 'simon@simon', '514-214-9655', '929 Rue Napoléon, QC H2L 1C4', 2, '12345', '12345', NULL, '../../assets/img/simon.jpg'),
(2, 'Boucher', 'Nicolas Dude', 'n@n', '100000000', '100 19e Av. ', 3, '12345', '12345', NULL, '../../assets/img/simon.jpg'),
(4, 'Robertson', 'Camille', 'r@r', '8888888888', '100 rue Walt, QC, H1H 1X1', 1, '12345', '12345', NULL, '../../assets/img/camille.jpg'),
(14, 'Mika', 'Mika', 'k@k', '5147779999', '11 rue Rue', 2, '11111', '12345', NULL, '../../assets/img/simon.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `vino__ville`
--

CREATE TABLE `vino__ville` (
  `id` int(11) NOT NULL,
  `nom` varchar(2000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vino__ville`
--

INSERT INTO `vino__ville` (`id`, `nom`) VALUES
(1, 'Napoléon'),
(2, 'Laval'),
(3, 'Boucherville');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vino__achats`
--
ALTER TABLE `vino__achats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vino__bouteille`
--
ALTER TABLE `vino__bouteille`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vino__bouteille_vino__type1_idx` (`id_type`),
  ADD KEY `fk_vino__bouteille_vino__pays1_idx` (`id_pays`);

--
-- Index pour la table `vino__cellier`
--
ALTER TABLE `vino__cellier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vino__cellier_vino__usager1_idx` (`id_usager`);

--
-- Index pour la table `vino__cellier_bouteille`
--
ALTER TABLE `vino__cellier_bouteille`
  ADD PRIMARY KEY (`id_cellier`,`id_bouteille`,`id_achats`),
  ADD KEY `fk_vino__cellier_has_vino__bouteille_vino__bouteille1_idx` (`id_bouteille`),
  ADD KEY `fk_vino__cellier_has_vino__bouteille_vino__cellier1_idx` (`id_cellier`),
  ADD KEY `fk_vino__cellier_bouteille_vino__achats1_idx` (`id_achats`);

--
-- Index pour la table `vino__erreur`
--
ALTER TABLE `vino__erreur`
  ADD PRIMARY KEY (`id_usager`,`id_bouteille`),
  ADD KEY `fk_vino__usager_has_vino__bouteille_vino__bouteille1_idx` (`id_bouteille`),
  ADD KEY `fk_vino__usager_has_vino__bouteille_vino__usager1_idx` (`id_usager`);

--
-- Index pour la table `vino__notes`
--
ALTER TABLE `vino__notes`
  ADD PRIMARY KEY (`id_usager`,`cellier_bouteille_id_cellier`,`cellier_bouteille_id_bouteille`,`cellier_bouteille_id_achats`),
  ADD KEY `fk_vino__usager_has_vino__bouteille_vino__usager2_idx` (`id_usager`),
  ADD KEY `fk_vino__notes_vino__cellier_bouteille1_idx` (`cellier_bouteille_id_cellier`,`cellier_bouteille_id_bouteille`,`cellier_bouteille_id_achats`) USING BTREE;

--
-- Index pour la table `vino__pays`
--
ALTER TABLE `vino__pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vino__reseaux`
--
ALTER TABLE `vino__reseaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vino__reseaux_usager`
--
ALTER TABLE `vino__reseaux_usager`
  ADD PRIMARY KEY (`id_reseaux`,`id_usager`),
  ADD KEY `fk_vino__reseaux_sociaux_has_vino__usager_vino__usager1_idx` (`id_usager`),
  ADD KEY `fk_vino__reseaux_sociaux_has_vino__usager_vino__reseaux_soc_idx` (`id_reseaux`);

--
-- Index pour la table `vino__type`
--
ALTER TABLE `vino__type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vino__usager`
--
ALTER TABLE `vino__usager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courriel_UNIQUE` (`courriel`),
  ADD KEY `fk_vino__usager_vino__ville_idx` (`id_ville`);

--
-- Index pour la table `vino__ville`
--
ALTER TABLE `vino__ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vino__achats`
--
ALTER TABLE `vino__achats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `vino__bouteille`
--
ALTER TABLE `vino__bouteille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT pour la table `vino__cellier`
--
ALTER TABLE `vino__cellier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `vino__pays`
--
ALTER TABLE `vino__pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `vino__reseaux`
--
ALTER TABLE `vino__reseaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vino__type`
--
ALTER TABLE `vino__type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `vino__usager`
--
ALTER TABLE `vino__usager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `vino__ville`
--
ALTER TABLE `vino__ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vino__bouteille`
--
ALTER TABLE `vino__bouteille`
  ADD CONSTRAINT `fk_vino__bouteille_vino__pays1` FOREIGN KEY (`id_pays`) REFERENCES `vino__pays` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino__bouteille_vino__type1` FOREIGN KEY (`id_type`) REFERENCES `vino__type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vino__cellier`
--
ALTER TABLE `vino__cellier`
  ADD CONSTRAINT `fk_vino__cellier_vino__usager1` FOREIGN KEY (`id_usager`) REFERENCES `vino__usager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vino__cellier_bouteille`
--
ALTER TABLE `vino__cellier_bouteille`
  ADD CONSTRAINT `fk_vino__cellier_bouteille_vino__achats1` FOREIGN KEY (`id_achats`) REFERENCES `vino__achats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino__cellier_has_vino__bouteille_vino__bouteille1` FOREIGN KEY (`id_bouteille`) REFERENCES `vino__bouteille` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino__cellier_has_vino__bouteille_vino__cellier1` FOREIGN KEY (`id_cellier`) REFERENCES `vino__cellier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vino__erreur`
--
ALTER TABLE `vino__erreur`
  ADD CONSTRAINT `fk_vino__usager_has_vino__bouteille_vino__bouteille1` FOREIGN KEY (`id_bouteille`) REFERENCES `vino__bouteille` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino__usager_has_vino__bouteille_vino__usager1` FOREIGN KEY (`id_usager`) REFERENCES `vino__usager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vino__notes`
--
ALTER TABLE `vino__notes`
  ADD CONSTRAINT `fk_vino__notes_vino__cellier_bouteille1` FOREIGN KEY (`cellier_bouteille_id_cellier`,`cellier_bouteille_id_bouteille`) REFERENCES `vino__cellier_bouteille` (`id_cellier`, `id_bouteille`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino__usager_has_vino__bouteille_vino__usager2` FOREIGN KEY (`id_usager`) REFERENCES `vino__usager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vino__reseaux_usager`
--
ALTER TABLE `vino__reseaux_usager`
  ADD CONSTRAINT `fk_vino__reseaux_sociaux_has_vino__usager_vino__reseaux_socia1` FOREIGN KEY (`id_reseaux`) REFERENCES `vino__reseaux` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino__reseaux_sociaux_has_vino__usager_vino__usager1` FOREIGN KEY (`id_usager`) REFERENCES `vino__usager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vino__usager`
--
ALTER TABLE `vino__usager`
  ADD CONSTRAINT `fk_vino__usager_vino__ville` FOREIGN KEY (`id_ville`) REFERENCES `vino__ville` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
