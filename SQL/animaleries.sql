-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 avr. 2021 à 16:19
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animaleries`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `pet_id` int(11) NOT NULL,
  `petcaetegory` varchar(11) NOT NULL,
  `breed` varchar(11) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `height` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `fur` varchar(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`pet_id`, `petcaetegory`, `breed`, `weight`, `height`, `age`, `fur`, `cost`) VALUES
(1, 'dog', 'labrador', '11', '30', 2, 'white', 8000),
(2, 'dog', 'parasian', '24', '27', 15, 'blue', 2000),
(3, 'cat', 'boxer', '29', '38', 6, 'green', 3000),
(4, 'cat', 'rag doll', '10', '33', 13, 'black', 2000),
(5, 'dog', 'golden', '10', '18', 6, 'gris', 1600),
(6, 'cat', 'marchal', '9', '19', 5, 'black', 4000),
(7, 'cat', 'lab', '4', '18', 4, 'black', 3000);

-- --------------------------------------------------------

--
-- Structure de la table `birds`
--

CREATE TABLE `birds` (
  `pet_id` varchar(11) NOT NULL,
  `petcategory` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `noise` varchar(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `birds`
--

INSERT INTO `birds` (`pet_id`, `petcategory`, `type`, `noise`, `cost`) VALUES
('1', 'crow', 'golden', '12', 2000);

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `cs_id` varchar(11) NOT NULL,
  `cs_fname` varchar(11) NOT NULL,
  `cs_lname` varchar(11) NOT NULL,
  `cs_minit` varchar(11) NOT NULL,
  `cs_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`cs_id`, `cs_fname`, `cs_lname`, `cs_minit`, `cs_address`) VALUES
('1', 'yassine', 'azdoud', 'ya', 'yassinelife2030@gmail.com'),
('3', 'yassine', 'life', 'vb', '4392 Martha Ellen Drive Reno');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
('1', 'yassine', '12');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `pp_id` varchar(11) NOT NULL,
  `pp_name` varchar(50) NOT NULL,
  `pp_type` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `belongs_to` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`pp_id`, `pp_name`, `pp_type`, `cost`, `belongs_to`) VALUES
('1', 'pedigree', 'food', 17, 'dog');

-- --------------------------------------------------------

--
-- Structure de la table `salesdetails`
--

CREATE TABLE `salesdetails` (
  `sd_ID` varchar(11) NOT NULL,
  `cs_id` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `total` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salesdetails`
--

INSERT INTO `salesdetails` (`sd_ID`, `cs_id`, `date`, `total`) VALUES
('1', '1', '22-21-20', '9800');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`pet_id`);

--
-- Index pour la table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`pet_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cs_id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pp_id`);

--
-- Index pour la table `salesdetails`
--
ALTER TABLE `salesdetails`
  ADD PRIMARY KEY (`sd_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
