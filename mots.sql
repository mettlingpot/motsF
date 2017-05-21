-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Mai 2017 à 07:12
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mots`
--

-- --------------------------------------------------------

--
-- Structure de la table `mot`
--

CREATE TABLE `mot` (
  `id` int(11) NOT NULL,
  `mot` varchar(255) DEFAULT NULL,
  `definition` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mot`
--

INSERT INTO `mot` (`id`, `mot`, `definition`) VALUES
(1, 'deca', 'sans cafeine'),
(2, 'etrennera', 'inaugurera'),
(3, 'bleme', 'qui fait pale figure'),
(4, 'datee', 'reperee dans le temps'),
(5, 're', 'degre en gamme'),
(6, 'gentil', 'agreable a vivre'),
(7, 'noceur', 'amateur de javas'),
(8, 'ir', 'fin de verbe'),
(9, 'ar', 'argon abrege'),
(10, 'citoyen', 'habitant du pays'),
(11, 'correcte', 'de bonne tenue'),
(12, 'face', 'visage'),
(13, 'mie', 'au milieu du pain'),
(14, 'te', 'regle a dessin'),
(15, 'ete', 'belle saison'),
(16, 'brune', 'couleur de chataigne'),
(17, 'entetee', 'butee'),
(18, 'ramone', 'enleve la suie'),
(19, 'tv', 'ecran mais vraiment petit'),
(20, 'prime', 'est versee a titre de recompense'),
(21, 'are', 'mesure agraire'),
(22, 'sm', 'pratique sexuelle'),
(23, 'elu', 'choisi dans l isoloir'),
(24, 'type', 'individu'),
(25, 'rever', 'oublier la realite'),
(26, 'rap', 'style musical'),
(27, 'aie', 'mot de douleur'),
(28, 'oral', 'transmis par la parole'),
(29, 'ena', 'haute ecole'),
(30, 'nia', 'n admis pas'),
(31, 'eh', 'interjection'),
(32, 'eu', 'europe raccourci'),
(33, 'mi', 'entre re et fa'),
(34, 'epo', 'dope les sportifs'),
(35, 'huee', 'acceuillie avec des sifflets');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` enum('0','1') DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `pseudo`, `email`, `password`, `active`, `created_at`) VALUES
(9, 'camille', 'camille', 'sqdf@live.fr', '$2y$10$uOQb9EIxfij0ejo0wfuRVuXZzNbY4mfSL4OjPemXICYSNAOSLdHua', '0', '2017-04-20 10:55:12');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mot`
--
ALTER TABLE `mot`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mot`
--
ALTER TABLE `mot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
