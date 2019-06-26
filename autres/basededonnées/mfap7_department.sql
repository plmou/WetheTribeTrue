-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 13 Juin 2019 à 12:09
-- Version du serveur :  5.7.25-0ubuntu0.18.10.2
-- Version de PHP :  7.2.17-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Projet_Culture`
--

-- --------------------------------------------------------

--
-- Structure de la table `mfap7_department`
--

CREATE TABLE `mfap7_department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_mfap7_region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mfap7_department`
--

INSERT INTO `mfap7_department` (`id`, `name`, `id_mfap7_region`) VALUES
(1, 'AIN', 1),
(2, 'AISNE', 7),
(3, 'ALLIER', 1),
(4, 'ALPES-DE-HAUTE-PROVENCE', 13),
(5, 'HAUTES-ALPES', 13),
(6, 'ALPES-MARITIMES', 13),
(7, 'ARDÈCHE', 1),
(8, 'ARDENNES', 6),
(9, 'ARIÈGE', 10),
(10, 'AUBE', 6),
(11, 'AUDE', 10),
(12, 'AVEYRON', 10),
(13, 'BOUCHES-DU-RHÔNE', 13),
(14, 'CALVADOS', 8),
(15, 'CANTAL', 1),
(16, 'CHARENTE', 9),
(17, 'CHARENTE-MARITIME', 9),
(18, 'CHER', 4),
(19, 'CORRÈZE', 9),
(21, 'CÔTE-D\'OR', 2),
(22, 'CÔTES-D\'ARMOR', 3),
(23, 'CREUSE', 9),
(24, 'DORDOGNE', 9),
(25, 'DOUBS', 2),
(26, 'DRÔME', 1),
(27, 'EURE', 8),
(28, 'EURE-ET-LOIR', 4),
(29, 'FINISTÈRE', 3),
(30, 'GARD', 10),
(31, 'HAUTE-GARONNE', 10),
(32, 'GERS', 10),
(33, 'GIRONDE', 9),
(34, 'HÈRAULT', 10),
(35, 'ILLE-ET-VILAINE', 3),
(36, 'INDRE', 4),
(37, 'INDRE-ET-LOIRE', 4),
(38, 'ISÈRE', 1),
(39, 'JURA', 2),
(40, 'LANDES', 9),
(41, 'LOIR-ET-CHER', 4),
(42, 'LOIRE', 1),
(43, 'HAUTE-LOIRE', 1),
(44, 'LOIRE-ATLANTIQUE', 12),
(45, 'LOIRET', 4),
(46, 'LOT', 10),
(47, 'LOT-ET-GARONNE', 9),
(48, 'LOZÈRE', 10),
(49, 'MAINE-ET-LOIRE', 12),
(50, 'MANCHE', 8),
(51, 'MARNE', 6),
(52, 'HAUTE-MARNE', 6),
(53, 'MAYENNE', 12),
(54, 'MEURTHE-ET-MOSELLE', 6),
(55, 'MEUSE', 6),
(56, 'MORBIHAN', 3),
(57, 'MOSELLE', 6),
(58, 'NIÈVRE', 2),
(59, 'NORD', 7),
(60, 'OISE', 7),
(61, 'ORNE', 8),
(62, 'PAS-DE-CALAIS', 7),
(63, 'PUY-DE-DÔME', 1),
(64, 'PYRÉNÉES-ATLANTIQUES', 9),
(65, 'HAUTES-PYRÉNÉES', 10),
(66, 'PYRÉNÉES-ORIENTALES', 10),
(67, 'BAS-RHIN', 6),
(68, 'HAUT-RHIN', 6),
(69, 'RHÔNE', 1),
(70, 'HAUTE-SAÔNE', 2),
(71, 'SAÔNE-ET-LOIRE', 2),
(72, 'SARTHE', 12),
(73, 'SAVOIE', 1),
(74, 'HAUTE-SAVOIE', 1),
(75, 'PARIS', 11),
(76, 'SEINE-MARITIME', 8),
(77, 'SEINE-ET-MARNE', 11),
(78, 'YVELINES', 11),
(79, 'DEUX-SÈVRES', 9),
(80, 'SOMME', 7),
(81, 'TARN', 10),
(82, 'TARN-ET-GARONNE', 10),
(83, 'VAR', 13),
(84, 'VAUCLUSE', 13),
(85, 'VENDÉE', 12),
(86, 'VIENNE', 9),
(87, 'HAUTE-VIENNE', 9),
(88, 'VOSGES', 6),
(89, 'YONNE', 2),
(90, 'TERRITOIRE DE BELFORT', 2),
(91, 'ESSONNE', 11),
(92, 'HAUTS-DE-SEINE', 11),
(93, 'SEINE-SAINT-DENIS', 11),
(94, 'VAL-DE-MARNE', 11),
(95, 'VAL-D\'OISE', 11),
(96, 'CORSE-DU-SUD', 5),
(97, 'HAUTE-CORSE', 5),
(971, 'GUADELOUPE', 14),
(972, 'MARTINIQUE', 14),
(973, 'GUYANE', 14),
(974, 'LA RÉUNION', 14),
(975, 'SAINT-PIERRE-ET-MIQUELON', 14),
(976, 'MAYOTTE', 14);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mfap7_department`
--
ALTER TABLE `mfap7_department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mfap7_department_mfap7_region_FK` (`id_mfap7_region`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mfap7_department`
--
ALTER TABLE `mfap7_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=977;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `mfap7_department`
--
ALTER TABLE `mfap7_department`
  ADD CONSTRAINT `mfap7_department_mfap7_region_FK` FOREIGN KEY (`id_mfap7_region`) REFERENCES `mfap7_region` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
