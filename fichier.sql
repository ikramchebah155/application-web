-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 mai 2023 à 17:34
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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infermie` (`id_infermie`),
  ADD KEY `id_patient` (`id_patient`),
  ADD KEY `fichier_ibfk_2` (`id_medecin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
