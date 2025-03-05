-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mer. 05 mars 2025 à 21:33
-- Version du serveur : 11.3.2-MariaDB
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(25000) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `post_id`, `user_id`, `created`, `modified`) VALUES
(1, 'ce poste la publicité d\'un projet de groupe de fin d\'année', 4, 3, '2025-03-05 21:06:44', '2025-03-05 21:06:44'),
(2, 'c\'est un poste qui annonce la reprise de la musculation', 5, 4, '2025-03-05 21:07:48', '2025-03-05 21:07:48'),
(3, 'c\'est poste pour la recherche d\'une alternance', 6, 5, '2025-03-05 21:08:27', '2025-03-05 21:08:27');

-- --------------------------------------------------------

--
-- Structure de la table `postes`
--

DROP TABLE IF EXISTS `postes`;
CREATE TABLE IF NOT EXISTS `postes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL,
  `content` varchar(25000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `postes`
--

INSERT INTO `postes` (`id`, `title`, `content`, `user_id`, `created`, `modified`) VALUES
(5, 'poste Instagram', 'j\'ai ce poste pour annoncer que j\'ai recommencer le sport', 4, '2025-03-05 20:55:49', '2025-03-05 20:55:49'),
(4, 'poste facebook', 'ce postes a pour but de faire la publicité de notre projet de fin d\'ètude', 3, '2025-03-05 20:54:45', '2025-03-05 20:54:45'),
(6, 'poste linkdin', 'recherche d\'alternance', 5, '2025-03-05 20:56:29', '2025-03-05 20:56:29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created`, `modified`) VALUES
(3, 'mamadou', '123456', '2025-03-05 20:52:38', '2025-03-05 20:52:38'),
(4, 'khaly', '1234', '2025-03-05 20:52:54', '2025-03-05 20:52:54'),
(5, 'sow', '1234', '2025-03-05 20:53:17', '2025-03-05 20:53:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
