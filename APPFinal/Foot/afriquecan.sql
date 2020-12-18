-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 19 juil. 2020 à 01:47
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afriquecan`
--

-- --------------------------------------------------------

--
-- Structure de la table `canafrique`
--

DROP TABLE IF EXISTS `canafrique`;
CREATE TABLE IF NOT EXISTS `canafrique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnom` varchar(200) NOT NULL,
  `cprenom` varchar(200) NOT NULL,
  `cmail` varchar(200) NOT NULL,
  `ctel` varchar(200) NOT NULL,
  `ctaille` varchar(200) NOT NULL,
  `cpoids` varchar(200) NOT NULL,
  `csexe` varchar(200) NOT NULL,
  `cpays` varchar(200) NOT NULL,
  `cville` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
