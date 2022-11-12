-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 nov. 2022 à 11:51
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bijouterie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(1, 'bracelet'),
(2, 'ring');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `date_demmande` date DEFAULT NULL,
  `quantité` int(11) DEFAULT NULL,
  `numero` varchar(25) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pannier`
--

CREATE TABLE `pannier` (
  `id_user` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_prod` varchar(25) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(50) NOT NULL,
  `quantité_stock` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `nbr_vendre` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_prod`, `prix`, `description`, `image`, `quantité_stock`, `rate`, `nbr_vendre`, `id_cat`) VALUES
(14, 'bracelet', 100, 'LOREM', 'i-3.png', 50, 5, 3, 1),
(15, 'bracelet 2', 100, 'LOREM', 'i-2.png', 50, 5, 3, 1),
(16, 'bracelet 3', 100, 'LOREM', 'i-1.png', 50, 5, 3, 1),
(17, 'bracelet 4', 300, 'LOREM', 'i-1.png', 50, 5, 3, 1),
(18, 'bracelet 5', 500, 'LOREM', 'i-3.png', 50, 5, 3, 1),
(19, 'bracelet 6', 600, 'LOREM', 'i-1.png', 50, 5, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `phone`, `password`, `role`) VALUES
(29, 'dd', 'dd', 'sidatnouhi@gmail.com', '0639872239', 'SIMOKN123@', 1),
(30, 'alae', 'el oula', 'alaaeloula@gmail.com', '0639872239', 'SIMOKN123@', 1),
(31, 'KANDIROU', 'KANDIROU2', 'simo.kandirou15@gmail.com', '0639872239', '$2y$10$Z6ePIIqNbHs1Yy1P9At3Se4DoMVwO4j6K9cuWwX7xjVYqLWJQstPC', 1),
(32, 'simo', 'simoxxxxx', 'test.tazafghfghfg19@gmail.com', '0639872239', '$2y$10$MpnFAXQ2i1Wbhy.RSAf3iesHWxJSqYiPfyeDZ9RHrO6ghQ60zFtwC', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`,`id_user`,`id_produit`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `pannier`
--
ALTER TABLE `pannier`
  ADD PRIMARY KEY (`id_user`,`id_prod`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pannier`
--
ALTER TABLE `pannier`
  ADD CONSTRAINT `pannier_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pannier_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
