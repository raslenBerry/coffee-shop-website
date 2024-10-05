-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 déc. 2023 à 11:53
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coffe`
--

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(7, 7, 1, 1),
(8, 7, 5, 2),
(9, 8, 4, 1),
(10, 8, 5, 1),
(11, 9, 1, 2),
(12, 9, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subjec` varchar(200) NOT NULL,
  `messag` varchar(300) NOT NULL,
  `id` int(11) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`nom`, `email`, `subjec`, `messag`, `id`, `tel`) VALUES
('amine', 'amine@gmail.com', 'travail', 'je suis un chef , je veux travailler avec vous', 4, ''),
('raslennnnnnn', 'raslen@gmail.com', 'mekla', 'yaatikommmsahhhaaaa', 5, ''),
('aa', 'admin@gmail.com', 'aa', 'aa', 6, '5054222'),
('madame', 'madame@gmail.com', 'aaaaaaaa', 'aaaaaaaaa', 7, '111111111111111');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `image`, `nom`, `description`, `price`) VALUES
(1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhEZN8aaDIxgXTdMY3u58OQCzYG88Ok0Wi1w&usqp=CAU', 'Pizza', 'Neptune', 23),
(3, 'https://www.tunisienumerique.com/wp-content/uploads/2020/03/makloub-1200x800.jpg', 'Makloub', 'Makloub tunisien escalope', 7),
(4, 'https://neurosciencenews.com/files/2023/06/coffee-brain-caffeine-neuroscincces.jpg', 'Cappucino', 'Cappucino el bey', 4),
(5, 'https://fumania.com/cdn/shop/products/chicha-ms-490_1_600x600.jpg', 'Chicha', 'Chichet Hamadi', 5),
(6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhEZN8aaDIxgXTdMY3u58OQCzYG88Ok0Wi1w&usqp=CAU', 'madame', 'bnin', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reservationtable`
--

CREATE TABLE `reservationtable` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `dateheure` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `nbPlaces` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservationtable`
--

INSERT INTO `reservationtable` (`id`, `nom`, `dateheure`, `user_id`, `nbPlaces`) VALUES
(20, 'raslen', '2023-12-23 00:00:00', 8, 4),
(21, 'raslennnnnn', '2023-12-15 00:00:00', 9, 4);

-- --------------------------------------------------------

--
-- Structure de la table `todayspecial`
--

CREATE TABLE `todayspecial` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `todayspecial`
--

INSERT INTO `todayspecial` (`id`, `product_id`) VALUES
(8, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwordd` varchar(50) NOT NULL,
  `rolee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `passwordd`, `rolee`) VALUES
(3, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin'),
(7, 'amin', 'mohamed', 'amine@gmail.com', 'amine', 'user'),
(8, 'raslen', 'berry', 'raslen@gmail.com', 'raslen', 'user'),
(9, 'madame', 'madame', 'madame@gmail.com', '0000', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_u_id` (`user_id`),
  ADD KEY `fk_p_id` (`product_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservationtable`
--
ALTER TABLE `reservationtable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_r_u` (`user_id`);

--
-- Index pour la table `todayspecial`
--
ALTER TABLE `todayspecial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_r_prod` (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reservationtable`
--
ALTER TABLE `reservationtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `todayspecial`
--
ALTER TABLE `todayspecial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_p_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_u_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `reservationtable`
--
ALTER TABLE `reservationtable`
  ADD CONSTRAINT `fk_r_u` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `todayspecial`
--
ALTER TABLE `todayspecial`
  ADD CONSTRAINT `fk_r_prod` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
