-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 mai 2023 à 17:33
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
-- Structure de la table `chefservice`
--

CREATE TABLE `chefservice` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chefservice`
--

INSERT INTO `chefservice` (`id`, `username`, `password`) VALUES
(1, 'mahfoud_lamis', 45218976),
(2, 'chebah_bilel', 12345678);

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `id` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_medecin` int(11) NOT NULL,
  `id_infermie` int(11) NOT NULL,
  `date` date NOT NULL,
  `medicaments` mediumtext NOT NULL,
  `analyses` varchar(1000) NOT NULL,
  `bilan` varchar(1000) NOT NULL,
  `symptome` varchar(1000) NOT NULL,
  `resultat` varchar(1000) NOT NULL,
  `regime` varchar(1000) NOT NULL,
  `allergies` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fichier`
--

INSERT INTO `fichier` (`id`, `id_patient`, `id_medecin`, `id_infermie`, `date`, `medicaments`, `analyses`, `bilan`, `symptome`, `resultat`, `regime`, `allergies`) VALUES
(32, 13, 1, 1, '2023-05-01', 'paracetamole 50mg', 'fns', 'ecographie', 'Perte de connaissance\r\n', 'attention 10/07\r\n\r\nhb normale', 'sans sucre', 'rien'),
(33, 13, 1, 1, '2023-05-02', 'corticoiide 200mg', 'sanguin complet', 'rien', 'Perte de connaissance\r\n', 'attention 11/09\r\n \r\nhb normale', 'sans sucre', 'rien'),
(34, 13, 1, 1, '2023-05-03', 'corticoiide 200mg	', 'sanguin complet	', 'rien	', 'Que ressent il', 'attention \r\n', 'sans sucre		', 'quoi remarquer');

-- --------------------------------------------------------

--
-- Structure de la table `infermier`
--

CREATE TABLE `infermier` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infermier`
--

INSERT INTO `infermier` (`id`, `username`, `password`) VALUES
(1, 'chibouni_yacine', 12345678),
(2, 'amran_amina', 22457361),
(3, 'samri_nouha', 76228987),
(4, 'talbi_mohamed', 49809432),
(5, 'merzouki_fateh', 11897654);

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(8) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'bouteldja_djihane', 12345678, 'dr.djihane@gmail.com', 689054666),
(2, 'debz_khaireddine', 34567658, 'debzkhairo@gmail.com', 555344423),
(3, 'Boulahrouf_amine', 12657898, 'Dr.amine@gmail.com', 555344212),
(4, 'Badech_yosra', 43567809, 'badechyosra@gmail.com', 667800923),
(5, 'Benaziza_mohamed', 32765489, 'mohamed123@gmail.com', 770042312),
(6, 'Djedi_dounia', 90086754, 'djedi.12@gmail.com', 555344212);

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
-- Index pour la table `chefservice`
--
ALTER TABLE `chefservice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CodeDeBadge` (`password`);

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infermie` (`id_infermie`),
  ADD KEY `id_patient` (`id_patient`),
  ADD KEY `fichier_ibfk_2` (`id_medecin`);

--
-- Index pour la table `infermier`
--
ALTER TABLE `infermier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CodeDeBadge` (`password`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CodeDeBadge` (`password`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chefservice`
--
ALTER TABLE `chefservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `infermier`
--
ALTER TABLE `infermier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD CONSTRAINT `fichier_ibfk_1` FOREIGN KEY (`id_infermie`) REFERENCES `infermier` (`id`),
  ADD CONSTRAINT `fichier_ibfk_2` FOREIGN KEY (`id_medecin`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `fichier_ibfk_3` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
