# Projet-nutrition
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 juin 2023 à 14:47
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fitia`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(200) NOT NULL,
  `sexe` enum('Homme','Femme') NOT NULL,
  `jour` tinyint(2) NOT NULL,
  `mois` varchar(10) NOT NULL,
  `annee` int(4) NOT NULL,
  `taille` int(3) NOT NULL,
  `poids` int(3) NOT NULL,
  `objectifs` enum('Perdre du poids','Prendre du poids','Me muscler','Maintenir poids','Modifier mon regime alimentaire','Gerer mon stress') NOT NULL,
  `niveau_activite` enum('Pas tres actif','Moderement actif','Actif','Tres actif') NOT NULL,
  `objectif_poids` int(3) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `mot_de_passe`, `sexe`, `jour`, `mois`, `annee`, `taille`, `poids`, `objectifs`, `niveau_activite`, `objectif_poids`, `ip`, `token`) VALUES
(9, '123', '123@gmail.com', '$2y$10$6qUIcUwppem3s6TvvCHkTuMC2WBX//nMK7.qRQ39CkaJlvZ.7OvQe', 'Femme', 1, 'January', 2000, 152, 50, 'Perdre du poids', 'Moderement actif', 55, '::1', ''),
(10, 'test0', '123@ll.com', '1234', 'Homme', 1, 'January', 2000, 152, 50, 'Perdre du poids', 'Actif', 55, '::1', ''),
(11, 'test10', '1234@ll.com', '$2y$10$tM6WtrrgADYSfpH6UpuS.eUmwQYeXw.rFy7s1.xwYNFPmWELLIula', 'Homme', 1, 'January', 2000, 152, 50, 'Perdre du poids', 'Actif', 55, '::1', ''),
(12, 'amina', 'ccc@gmail.com', '$2y$10$vyZIB5lnl/1liKxuJ/N35e0J1NBn14vQMXN5u0e4rog0UDIuQN1ve', 'Femme', 16, 'July', 2003, 165, 55, 'Me muscler', 'Actif', 55, '::1', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
