-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 fév. 2021 à 14:07
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(200) NOT NULL,
  `nom_p` text NOT NULL,
  `description_p` varchar(500) NOT NULL,
  `description_p2` varchar(500) NOT NULL,
  `description_p3` varchar(500) NOT NULL,
  `description_p4` varchar(500) NOT NULL,
  `description_p5` varchar(500) NOT NULL,
  `description_p6` varchar(500) NOT NULL,
  `description_p7` varchar(500) NOT NULL,
  `description_p8` varchar(500) NOT NULL,
  `cat_p` text NOT NULL,
  `cat_p2` text NOT NULL,
  `cat_p3` text NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_p`, `description_p`, `description_p2`, `description_p3`, `description_p4`, `description_p5`, `description_p6`, `description_p7`, `description_p8`, `cat_p`, `cat_p2`, `cat_p3`, `image`) VALUES
(1, 'Pizza Giorno', 'Passion froid', 'Humain', 'non-institutionel', 'Horizontal', 'Arthur kozior', 'ilimitÃ©', 'oui', '25/59/5261', 'chaud', 'viandes', 'legumes', '_AJG6677.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
