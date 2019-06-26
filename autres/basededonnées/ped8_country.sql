-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 05 Juin 2019 à 16:13
-- Version du serveur :  5.7.25-0ubuntu0.18.10.2
-- Version de PHP :  7.2.17-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webDevelopment`
--

-- --------------------------------------------------------

--
-- Structure de la table `ped8_country`
--

CREATE TABLE `ped8_country` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `country` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ped8_country`
--

INSERT INTO `ped8_country` (`id`, `country`) VALUES
(1, 'Afghanistan'),
(2, 'Albanie'),
(3, 'Antarctique'),
(4, 'Algérie'),
(5, 'Samoa Américaines'),
(6, 'Andorre'),
(7, 'Angola'),
(8, 'Antigua-et-Barbuda'),
(9, 'Azerbaïdjan'),
(10, 'Argentine'),
(11, 'Australie'),
(12, 'Autriche'),
(13, 'Bahamas'),
(14, 'Bahreïn'),
(15, 'Bangladesh'),
(16, 'Arménie'),
(17, 'Barbade'),
(18, 'Belgique'),
(19, 'Bermudes'),
(20, 'Bhoutan'),
(21, 'Bolivie'),
(22, 'Bosnie-Herzégovine'),
(23, 'Botswana'),
(24, 'Île Bouvet'),
(25, 'Brésil'),
(26, 'Belize'),
(27, 'Territoire Britannique de l\'Océan Indien'),
(28, 'Îles Salomon'),
(29, 'Îles Vierges Britanniques'),
(30, 'Brunéi Darussalam'),
(31, 'Bulgarie'),
(32, 'Myanmar'),
(33, 'Burundi'),
(34, 'Bélarus'),
(35, 'Cambodge'),
(36, 'Cameroun'),
(37, 'Canada'),
(38, 'Cap-vert'),
(39, 'Îles Caïmanes'),
(40, 'République Centrafricaine'),
(41, 'Sri Lanka'),
(42, 'Tchad'),
(43, 'Chili'),
(44, 'Chine'),
(45, 'Taïwan'),
(46, 'Île Christmas'),
(47, 'Îles Cocos (Keeling)'),
(48, 'Colombie'),
(49, 'Comores'),
(50, 'Mayotte'),
(51, 'République du Congo'),
(52, 'République Démocratique du Congo'),
(53, 'Îles Cook'),
(54, 'Costa Rica'),
(55, 'Croatie'),
(56, 'Cuba'),
(57, 'Chypre'),
(58, 'République Tchèque'),
(59, 'Bénin'),
(60, 'Danemark'),
(61, 'Dominique'),
(62, 'République Dominicaine'),
(63, 'Équateur'),
(64, 'El Salvador'),
(65, 'Guinée Équatoriale'),
(66, 'Éthiopie'),
(67, 'Érythrée'),
(68, 'Estonie'),
(69, 'Îles Féroé'),
(70, 'Îles (malvinas) Falkland'),
(71, 'Géorgie du Sud et les Îles Sandwich du Sud'),
(72, 'Fidji'),
(73, 'Finlande'),
(74, 'Îles Åland'),
(75, 'France'),
(76, 'Guyane Française'),
(77, 'Polynésie Française'),
(78, 'Terres Australes Françaises'),
(79, 'Djibouti'),
(80, 'Gabon'),
(81, 'Géorgie'),
(82, 'Gambie'),
(83, 'Territoire Palestinien Occupé'),
(84, 'Allemagne'),
(85, 'Ghana'),
(86, 'Gibraltar'),
(87, 'Kiribati'),
(88, 'Grèce'),
(89, 'Groenland'),
(90, 'Grenade'),
(91, 'Guadeloupe'),
(92, 'Guam'),
(93, 'Guatemala'),
(94, 'Guinée'),
(95, 'Guyana'),
(96, 'Haïti'),
(97, 'Îles Heard et Mcdonald'),
(98, 'Saint-Siège (état de la Cité du Vatican)'),
(99, 'Honduras'),
(100, 'Hong-Kong'),
(101, 'Hongrie'),
(102, 'Islande'),
(103, 'Inde'),
(104, 'Indonésie'),
(105, 'République Islamique d\'Iran'),
(106, 'Iraq'),
(107, 'Irlande'),
(108, 'Israël'),
(109, 'Italie'),
(110, 'Côte d\'Ivoire'),
(111, 'Jamaïque'),
(112, 'Japon'),
(113, 'Kazakhstan'),
(114, 'Jordanie'),
(115, 'Kenya'),
(116, 'République Populaire Démocratique de Corée'),
(117, 'République de Corée'),
(118, 'Koweït'),
(119, 'Kirghizistan'),
(120, 'République Démocratique Populaire Lao'),
(121, 'Liban'),
(122, 'Lesotho'),
(123, 'Lettonie'),
(124, 'Libéria'),
(125, 'Jamahiriya Arabe Libyenne'),
(126, 'Liechtenstein'),
(127, 'Lituanie'),
(128, 'Luxembourg'),
(129, 'Macao'),
(130, 'Madagascar'),
(131, 'Malawi'),
(132, 'Malaisie'),
(133, 'Maldives'),
(134, 'Mali'),
(135, 'Malte'),
(136, 'Martinique'),
(137, 'Mauritanie'),
(138, 'Maurice'),
(139, 'Mexique'),
(140, 'Monaco'),
(141, 'Mongolie'),
(142, 'République de Moldova'),
(143, 'Montserrat'),
(144, 'Maroc'),
(145, 'Mozambique'),
(146, 'Oman'),
(147, 'Namibie'),
(148, 'Nauru'),
(149, 'Népal'),
(150, 'Pays-Bas'),
(151, 'Antilles Néerlandaises'),
(152, 'Aruba'),
(153, 'Nouvelle-Calédonie'),
(154, 'Vanuatu'),
(155, 'Nouvelle-Zélande'),
(156, 'Nicaragua'),
(157, 'Niger'),
(158, 'Nigéria'),
(159, 'Niué'),
(160, 'Île Norfolk'),
(161, 'Norvège'),
(162, 'Îles Mariannes du Nord'),
(163, 'Îles Mineures Éloignées des États-Unis'),
(164, 'États Fédérés de Micronésie'),
(165, 'Îles Marshall'),
(166, 'Palaos'),
(167, 'Pakistan'),
(168, 'Panama'),
(169, 'Papouasie-Nouvelle-Guinée'),
(170, 'Paraguay'),
(171, 'Pérou'),
(172, 'Philippines'),
(173, 'Pitcairn'),
(174, 'Pologne'),
(175, 'Portugal'),
(176, 'Guinée-Bissau'),
(177, 'Timor-Leste'),
(178, 'Porto Rico'),
(179, 'Qatar'),
(180, 'Réunion'),
(181, 'Roumanie'),
(182, 'Fédération de Russie'),
(183, 'Rwanda'),
(184, 'Sainte-Hélène'),
(185, 'Saint-Kitts-et-Nevis'),
(186, 'Anguilla'),
(187, 'Sainte-Lucie'),
(188, 'Saint-Pierre-et-Miquelon'),
(189, 'Saint-Vincent-et-les Grenadines'),
(190, 'Saint-Marin'),
(191, 'Sao Tomé-et-Principe'),
(192, 'Arabie Saoudite'),
(193, 'Sénégal'),
(194, 'Seychelles'),
(195, 'Sierra Leone'),
(196, 'Singapour'),
(197, 'Slovaquie'),
(198, 'Viet Nam'),
(199, 'Slovénie'),
(200, 'Somalie'),
(201, 'Afrique du Sud'),
(202, 'Zimbabwe'),
(203, 'Espagne'),
(204, 'Sahara Occidental'),
(205, 'Soudan'),
(206, 'Suriname'),
(207, 'Svalbard etÎle Jan Mayen'),
(208, 'Swaziland'),
(209, 'Suède'),
(210, 'Suisse'),
(211, 'République Arabe Syrienne'),
(212, 'Tadjikistan'),
(213, 'Thaïlande'),
(214, 'Togo'),
(215, 'Tokelau'),
(216, 'Tonga'),
(217, 'Trinité-et-Tobago'),
(218, 'Émirats Arabes Unis'),
(219, 'Tunisie'),
(220, 'Turquie'),
(221, 'Turkménistan'),
(222, 'Îles Turks et Caïques'),
(223, 'Tuvalu'),
(224, 'Ouganda'),
(225, 'Ukraine'),
(226, 'L\'ex-République Yougoslave de Macédoine'),
(227, 'Égypte'),
(228, 'Royaume-Uni'),
(229, 'Île de Man'),
(230, 'République-Unie de Tanzanie'),
(231, 'États-Unis'),
(232, 'Îles Vierges des États-Unis'),
(233, 'Burkina Faso'),
(234, 'Uruguay'),
(235, 'Ouzbékistan'),
(236, 'Venezuela'),
(237, 'Wallis et Futuna'),
(238, 'Samoa'),
(239, 'Yémen'),
(240, 'Serbie-et-Monténégro'),
(241, 'Zambie');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ped8_country`
--
ALTER TABLE `ped8_country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ped8_country`
--
ALTER TABLE `ped8_country`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
