-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 mai 2023 à 17:35
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `connexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `md5_pass` varchar(32) NOT NULL,
  `gender` enum('homme','femme') NOT NULL,
  `birthday` varchar(11) NOT NULL,
  `phone` int(10) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `service` varchar(20) NOT NULL,
  `curg` varchar(20) NOT NULL,
  `nurg` int(10) NOT NULL,
  `rurg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `username`, `email`, `password`, `md5_pass`, `gender`, `birthday`, `phone`, `adresse`, `service`, `curg`, `nurg`, `rurg`) VALUES
(13, 'remili_sadja', 'sadjaremili12@gmail.', 'sadja123', 'f671e2bc3cd90bc0fec1749d2aa09b75', 'femme', '12-12-2002', 699351442, 'Echatt-Taref', 'cardiologie', 'remili_safa', 674807768, 'soeur'),
(14, 'ikram_chebah', 'ikramchebah@gmail.co', 'ikram12', '6876b2a4a1e356515829c8ef6b53d267', 'femme', '23-4-2002', 2147483647, 'sidi amar , annaba', 'cardiologie', 'chebah_imen', 699351442, 'soeur'),
(15, 'benferdi_maissoune', 'maissoune23@gmail.co', 'maissoune12', '3efdb7645c0d352ca57cdb13231a573d', 'femme', '16-7-1980', 555600970, 'constantine', 'cardiologie', 'chebah_amar', 677800423, 'mari'),
(16, 'terki_mohamed', 'mohamedtr@gmail.com', 'mahamed55', '3553f92047798948e5372c146eeac57a', 'homme', '18-10-1995', 655890934, 'el-bouni annaba', 'cardiologie', 'terki_azedine', 555344267, ' fr&egrave;re'),
(17, 'semouk_abdelfateh', 'abdousemouk@gmail.co', 'abdou11', '3ceb3ead8bac31ddb3fcdfaa918e2e86', 'homme', '10-7-2001', 698700234, 'el kala - Taref', 'cardiologie', 'semouk_azize', 790053422, 'P&eacute;re'),
(18, 'taleb_oussama', 'taleb.oussy@gmail.co', 'oussama12', '4e01e2900a9d9295c5e39778044721f1', 'homme', '9-11-1997', 774233003, 'guelma', 'cardiologie', 'taleb_anes', 778908923, 'frere');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
