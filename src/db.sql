-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db:3306
-- Généré le : mar. 19 nov. 2024 à 20:43
-- Version du serveur : 11.5.2-MariaDB-ubu2404
-- Version de PHP : 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `company_db`
--
CREATE DATABASE IF NOT EXISTS `company_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci;
USE `company_db`;

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `salary` float(6,2) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`id`, `name`, `position`, `salary`, `department`) VALUES
(1, 'Marc', 'Chef de projet', 5170.67, 'IT'),
(2, 'Marie-Hélène', 'web-developpeur senior', 3960.77, 'IT'),
(3, 'Drucilla', 'web-designer', 2420.49, 'IT'),
(4, 'Gary', 'web-developpeur junior', 2420.49, 'IT'),
(5, 'Agnès', 'lead-developpeur', 5126.96, 'IT'),
(6, 'John Doe', 'expert comptable', 3200.67, 'Comptabilité'),
(7, 'Gérard Ledoux', 'commercial', 5200.80, 'Marketing'),
(8, 'Antoine Delavillardière', 'Designer', 5000.00, 'Marketing'),
(9, 'Denzel Whash', 'responsable RH', 2400.35, 'RH'),
(10, 'Rihanna', 'Marketing Manager', 3480.77, 'Marketing');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Base de données : `exo_jointure`
--
CREATE DATABASE IF NOT EXISTS `exo_jointure` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci;
USE `exo_jointure`;

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`) VALUES
(1, 'Alice Martin'),
(2, 'Bob Durand'),
(3, 'Clara Duval'),
(4, 'David Roger');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amont` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `product`, `quantity`, `amont`) VALUES
(1, 1, 'Télévision', 1, 599),
(2, 1, 'Réfrigérateur', 1, 874.9),
(3, 2, 'Lave-vaisselle', 3, 479.9),
(4, 3, 'Machine à laver', 1, 698.99),
(5, 5, 'Micro-onde', 1, 150),
(6, 3, 'Télévision', 1, 599);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Base de données : `exo_jointure_2`
--
CREATE DATABASE IF NOT EXISTS `exo_jointure_2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci;
USE `exo_jointure_2`;

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `name`) VALUES
(1, 'Alice Martin'),
(2, 'Bob Durand'),
(3, 'Clara Duval'),
(4, 'David Roger');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `customers_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 2, 3, 3),
(4, 3, 4, 1),
(8, 5, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, 'Télévision', 500),
(2, 'Réfrigérateur', 1200),
(3, 'Lave-vaisselle', 900),
(4, 'Machine à laver', 800),
(5, 'Micro-onde', 100);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_ibfk_2` (`product_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci;
USE `test`;
--
-- Base de données : `workhive`
--
CREATE DATABASE IF NOT EXISTS `workhive` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci;
USE `workhive`;

-- --------------------------------------------------------

--
-- Structure de la table `Equipments`
--

CREATE TABLE `Equipments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `total_stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Equipments`
--

INSERT INTO `Equipments` (`id`, `name`, `description`, `photo`, `total_stock`, `created_at`, `updated_at`) VALUES
(1, 'Projecteur', 'Projecteur 1080p', NULL, 5, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(2, 'Tableau Blanc', 'Tableau effaçable', NULL, 10, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(3, 'Ordinateur Portable', 'Ordinateur portable pour présentations', NULL, 3, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(4, 'Télévision', 'Télévision 4K pour présentations', NULL, 2, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(5, 'Microphone', 'Microphone sans fil', NULL, 7, '2024-10-29 20:33:09', '2024-10-29 20:33:09');

-- --------------------------------------------------------

--
-- Structure de la table `Equipment_Role_Rate`
--

CREATE TABLE `Equipment_Role_Rate` (
  `id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `user_role` enum('member','guest','admin') NOT NULL,
  `hourly_rate` int(11) NOT NULL,
  `created_at` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Equipment_Role_Rate`
--

INSERT INTO `Equipment_Role_Rate` (`id`, `equipment_id`, `user_role`, `hourly_rate`, `created_at`) VALUES
(1, 1, 'member', 15, 0.00),
(2, 2, '', 5, 0.00),
(3, 3, 'admin', 10, 0.00),
(4, 1, 'admin', 13, 0.00),
(5, 2, 'member', 8, 0.00),
(6, 4, 'member', 20, 0.00),
(7, 5, '', 8, 0.00),
(8, 3, '', 7, 0.00),
(9, 5, 'admin', 9, 0.00);

-- --------------------------------------------------------

--
-- Structure de la table `Reservations`
--

CREATE TABLE `Reservations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime NOT NULL,
  `status` enum('pending','confirmed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Reservations`
--

INSERT INTO `Reservations` (`id`, `user_id`, `room_id`, `start_at`, `end_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-10-30 09:00:00', '2024-10-30 11:00:00', 'confirmed', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(2, 2, 2, '2024-10-31 14:00:00', '2024-10-31 16:00:00', 'pending', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(3, 3, 1, '2024-11-01 10:00:00', '2024-11-01 12:00:00', 'cancelled', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(4, 4, 3, '2024-11-02 13:00:00', '2024-11-02 15:00:00', 'confirmed', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(5, 5, 4, '2024-11-03 09:00:00', '2024-11-03 11:00:00', 'pending', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(6, 6, 5, '2024-11-04 16:00:00', '2024-11-04 18:00:00', 'cancelled', '2024-10-29 20:33:09', '2024-10-29 20:33:09');

-- --------------------------------------------------------

--
-- Structure de la table `Reservation_Equipment`
--

CREATE TABLE `Reservation_Equipment` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Reservation_Equipment`
--

INSERT INTO `Reservation_Equipment` (`id`, `reservation_id`, `equipment_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(2, 2, 2, 1, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(3, 3, 3, 2, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(4, 4, 5, 1, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(5, 5, 4, 1, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(6, 6, 2, 2, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(7, 2, 5, 1, '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(8, 1, 3, 1, '2024-10-29 20:33:09', '2024-10-29 20:33:09');

-- --------------------------------------------------------

--
-- Structure de la table `Rooms`
--

CREATE TABLE `Rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `capacity` int(11) NOT NULL,
  `width` decimal(5,2) NOT NULL,
  `length` decimal(5,2) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Rooms`
--

INSERT INTO `Rooms` (`id`, `name`, `description`, `photo`, `capacity`, `width`, `length`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Salle A', 'Salle de réunion avec écran', NULL, 10, 5.50, 6.50, 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(2, 'Salle B', 'Salle de conférence avec projecteur', NULL, 20, 8.00, 10.00, 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(3, 'Salle C', 'Petite salle pour réunions', NULL, 6, 4.00, 5.00, 'inactive', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(4, 'Salle D', 'Salle de formation avec ordinateurs', NULL, 15, 6.00, 8.00, 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(5, 'Salle E', 'Salle pour événements', NULL, 50, 12.00, 15.00, 'inactive', '2024-10-29 20:33:09', '2024-10-29 20:33:09');

-- --------------------------------------------------------

--
-- Structure de la table `Room_Equipment`
--

CREATE TABLE `Room_Equipment` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `assigned_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Room_Equipment`
--

INSERT INTO `Room_Equipment` (`id`, `room_id`, `equipment_id`, `quantity`, `assigned_at`) VALUES
(1, 1, 1, 1, '2024-10-29 20:33:09'),
(2, 2, 2, 2, '2024-10-29 20:33:09'),
(3, 3, 3, 1, '2024-10-29 20:33:09'),
(4, 1, 2, 3, '2024-10-29 20:33:09'),
(5, 4, 5, 2, '2024-10-29 20:33:09'),
(6, 5, 4, 1, '2024-10-29 20:33:09'),
(7, 3, 1, 2, '2024-10-29 20:33:09'),
(8, 4, 3, 1, '2024-10-29 20:33:09');

-- --------------------------------------------------------

--
-- Structure de la table `Room_Role_Rate`
--

CREATE TABLE `Room_Role_Rate` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_role` enum('member','guest','admin') NOT NULL,
  `hourly_rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Room_Role_Rate`
--

INSERT INTO `Room_Role_Rate` (`id`, `room_id`, `user_role`, `hourly_rate`) VALUES
(1, 1, 'member', 50.00),
(2, 2, '', 100.00),
(3, 3, 'admin', 75.00),
(4, 1, '', 60.00),
(5, 2, 'admin', 90.00),
(6, 4, 'member', 120.00),
(7, 5, '', 200.00);

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_role` enum('member','user','admin') NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `first_name`, `last_name`, `photo`, `user_role`, `phone`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Marc', 'Galoyer', NULL, 'admin', '0690684020', 'mgaloyer@uneak.fr', 'password', 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(2, 'Drucila', 'Larochelle', NULL, 'member', NULL, 'drucila@email.com', 'password', 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(3, 'Agnes', 'Mathey', NULL, 'user', NULL, 'mathey@email.com', 'password', 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(4, 'Gary', 'Meltou', NULL, 'member', NULL, 'gary@email.com', 'password', 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(5, 'Marie-Helene', 'Basse', NULL, 'admin', NULL, 'marie.helene@email.com', 'password', 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(6, 'John', 'Doe', NULL, 'member', NULL, 'john@email.com', 'password', 'inactive', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(7, 'Jane', 'Doe', NULL, 'user', NULL, 'jane@email.com', 'password', 'inactive', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(8, 'Leo', 'Dubois', NULL, 'member', '0690123456', 'leo.dubois@email.com', 'password', 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(9, 'Sophie', 'Martin', NULL, 'admin', '0690789123', 'sophie.martin@email.com', 'password', 'active', '2024-10-29 20:33:09', '2024-10-29 20:33:09'),
(10, 'John', 'Doe', NULL, 'user', '06706060606', 'john@doe.fr', '1234', 'active', '2024-11-19 19:08:52', '2024-11-19 19:42:10'),
(11, 'Julien', 'Doe', NULL, 'admin', '06706060606', 'julien@doe.fr', '1234', 'active', '2024-11-19 19:51:05', '2024-11-19 19:51:05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Equipments`
--
ALTER TABLE `Equipments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Equipment_Role_Rate`
--
ALTER TABLE `Equipment_Role_Rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Index pour la table `Reservations`
--
ALTER TABLE `Reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Index pour la table `Reservation_Equipment`
--
ALTER TABLE `Reservation_Equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Index pour la table `Rooms`
--
ALTER TABLE `Rooms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Room_Equipment`
--
ALTER TABLE `Room_Equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_id` (`equipment_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Index pour la table `Room_Role_Rate`
--
ALTER TABLE `Room_Role_Rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_idx` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Equipments`
--
ALTER TABLE `Equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Equipment_Role_Rate`
--
ALTER TABLE `Equipment_Role_Rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `Reservations`
--
ALTER TABLE `Reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Reservation_Equipment`
--
ALTER TABLE `Reservation_Equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `Rooms`
--
ALTER TABLE `Rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Room_Equipment`
--
ALTER TABLE `Room_Equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `Room_Role_Rate`
--
ALTER TABLE `Room_Role_Rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Equipment_Role_Rate`
--
ALTER TABLE `Equipment_Role_Rate`
  ADD CONSTRAINT `Equipment_Role_Rate_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `Equipments` (`id`);

--
-- Contraintes pour la table `Reservations`
--
ALTER TABLE `Reservations`
  ADD CONSTRAINT `Reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`),
  ADD CONSTRAINT `Reservations_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`);

--
-- Contraintes pour la table `Reservation_Equipment`
--
ALTER TABLE `Reservation_Equipment`
  ADD CONSTRAINT `Reservation_Equipment_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `Reservations` (`id`),
  ADD CONSTRAINT `Reservation_Equipment_ibfk_2` FOREIGN KEY (`equipment_id`) REFERENCES `Equipments` (`id`);

--
-- Contraintes pour la table `Room_Equipment`
--
ALTER TABLE `Room_Equipment`
  ADD CONSTRAINT `Room_Equipment_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `Equipments` (`id`),
  ADD CONSTRAINT `Room_Equipment_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`);

--
-- Contraintes pour la table `Room_Role_Rate`
--
ALTER TABLE `Room_Role_Rate`
  ADD CONSTRAINT `Room_Role_Rate_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`);
--
-- Base de données : `workhive_1`
--
CREATE DATABASE IF NOT EXISTS `workhive_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci;
USE `workhive_1`;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `createdAtDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_pro`, `createdAtDate`) VALUES
(1, 2, 2, '2024-10-23 16:31:11'),
(2, 3, 4, '2024-10-23 16:31:36'),
(3, 5, 4, '2024-10-23 16:32:36'),
(4, 4, 3, '2024-10-23 16:33:22'),
(5, 6, 1, '2024-10-23 16:33:47'),
(6, 6, 2, '2024-10-23 16:34:02'),
(7, 2, 4, '2024-10-23 16:34:19'),
(8, 3, 4, '2024-10-23 16:34:43');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`) VALUES
(1, 'iPone Xr', 399.9),
(2, 'iPone 15', 1200),
(3, 'Mac Studio', 1199.9),
(4, 'XPen', 1199.9);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `naissance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `naissance`) VALUES
(2, NULL, 'Marie-helene', 'mh@gmail.com', '1973-10-23'),
(3, NULL, 'Drucila', 'drucila@gmail.com', '1990-07-01'),
(4, NULL, 'Gary', 'gary@gmail.com', '1995-10-01'),
(5, NULL, 'Marc', 'marc@gmail.com', '1980-07-29'),
(6, NULL, 'Agnes', 'agnes@gmail.com', '1973-03-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `produits` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
