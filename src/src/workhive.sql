-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db:3306
-- Généré le : jeu. 14 nov. 2024 à 16:53
-- Version du serveur : 11.5.2-MariaDB-ubu2404
-- Version de PHP : 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `workhive`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

--
-- Déchargement des données de la table `Equipments`
--

INSERT INTO `Equipments` (`id`, `name`, `description`, `photo`, `total_stock`, `created_at`, `updated_at`) VALUES
(1, 'Projecteur', 'Projecteur 1080p', NULL, 5, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(2, 'Tableau Blanc', 'Tableau effaçable', NULL, 10, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(3, 'Ordinateur Portable', 'Ordinateur portable pour présentations', NULL, 3, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(4, 'Télévision', 'Télévision 4K pour présentations', NULL, 2, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(5, 'Microphone', 'Microphone sans fil', NULL, 7, '2024-10-29 19:50:19', '2024-10-29 19:50:19');

-- --------------------------------------------------------

--
-- Structure de la table `Equipment_Role_Rate`
--

CREATE TABLE `Equipment_Role_Rate` (
  `id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `user_role` enum('member','user','admin') NOT NULL DEFAULT 'user',
  `hourly_rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

--
-- Déchargement des données de la table `Equipment_Role_Rate`
--

INSERT INTO `Equipment_Role_Rate` (`id`, `equipment_id`, `user_role`, `hourly_rate`) VALUES
(1, 1, 'member', 15.00),
(2, 2, 'user', 5.00),
(3, 3, 'admin', 10.00),
(4, 1, 'admin', 12.50),
(5, 2, 'member', 8.00),
(6, 4, 'member', 20.00),
(7, 5, 'user', 7.50),
(8, 3, 'user', 6.50),
(9, 5, 'admin', 9.00);

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
  `status` enum('pending','confirmed','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

--
-- Déchargement des données de la table `Reservations`
--

INSERT INTO `Reservations` (`id`, `user_id`, `room_id`, `start_at`, `end_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-10-30 09:00:00', '2024-10-30 11:00:00', 'confirmed', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(2, 2, 2, '2024-10-31 14:00:00', '2024-10-31 16:00:00', 'pending', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(3, 3, 1, '2024-11-01 10:00:00', '2024-11-01 12:00:00', 'cancelled', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(4, 4, 3, '2024-11-02 13:00:00', '2024-11-02 15:00:00', 'confirmed', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(5, 5, 4, '2024-11-03 09:00:00', '2024-11-03 11:00:00', 'pending', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(6, 6, 5, '2024-11-04 16:00:00', '2024-11-04 18:00:00', 'cancelled', '2024-10-29 19:50:19', '2024-10-29 19:50:19');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

--
-- Déchargement des données de la table `Reservation_Equipment`
--

INSERT INTO `Reservation_Equipment` (`id`, `reservation_id`, `equipment_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(2, 2, 2, 1, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(3, 3, 3, 2, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(4, 4, 5, 1, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(5, 5, 4, 1, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(6, 6, 2, 2, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(7, 2, 5, 1, '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(8, 1, 3, 1, '2024-10-29 19:50:19', '2024-10-29 19:50:19');

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
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

--
-- Déchargement des données de la table `Rooms`
--

INSERT INTO `Rooms` (`id`, `name`, `description`, `photo`, `capacity`, `width`, `length`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Salle A', 'Salle de réunion avec écran', NULL, 10, 5.50, 6.50, 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(2, 'Salle B', 'Salle de conférence avec projecteur', NULL, 20, 8.00, 10.00, 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(3, 'Salle C', 'Petite salle pour réunions', NULL, 6, 4.00, 5.00, 'inactive', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(4, 'Salle D', 'Salle de formation avec ordinateurs', NULL, 15, 6.00, 8.00, 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(5, 'Salle E', 'Salle pour événements', NULL, 50, 12.00, 15.00, 'inactive', '2024-10-29 19:50:19', '2024-10-29 19:50:19');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

--
-- Déchargement des données de la table `Room_Equipment`
--

INSERT INTO `Room_Equipment` (`id`, `room_id`, `equipment_id`, `quantity`, `assigned_at`) VALUES
(1, 1, 1, 1, '2024-10-29 19:50:19'),
(2, 2, 2, 2, '2024-10-29 19:50:19'),
(3, 3, 3, 1, '2024-10-29 19:50:19'),
(4, 1, 2, 3, '2024-10-29 19:50:19'),
(5, 4, 5, 2, '2024-10-29 19:50:19'),
(6, 5, 4, 1, '2024-10-29 19:50:19'),
(7, 3, 1, 2, '2024-10-29 19:50:19'),
(8, 4, 3, 1, '2024-10-29 19:50:19');

-- --------------------------------------------------------

--
-- Structure de la table `Room_Role_Rate`
--

CREATE TABLE `Room_Role_Rate` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_role` enum('member','user','admin') NOT NULL DEFAULT 'user',
  `hourly_rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

--
-- Déchargement des données de la table `Room_Role_Rate`
--

INSERT INTO `Room_Role_Rate` (`id`, `room_id`, `user_role`, `hourly_rate`) VALUES
(1, 1, 'member', 50.00),
(2, 2, 'user', 100.00),
(3, 3, 'admin', 75.00),
(4, 1, 'user', 60.00),
(5, 2, 'admin', 90.00),
(6, 4, 'member', 120.00),
(7, 5, 'user', 200.00);

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_role` enum('member','user','admin') NOT NULL DEFAULT 'user',
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `first_name`, `last_name`, `photo`, `user_role`, `phone`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Marc', 'Galoyer', NULL, 'admin', '0690684020', 'mgaloyer@uneak.fr', 'password', 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(2, 'Drucila', 'Larochelle', NULL, 'member', NULL, 'drucila@email.com', 'password', 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(3, 'Agnes', 'Mathey', NULL, 'user', NULL, 'mathey@email.com', 'password', 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(4, 'Gary', 'Meltou', NULL, 'member', NULL, 'gary@email.com', 'password', 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(5, 'Marie-Helene', 'Basse', NULL, 'admin', NULL, 'marie.helene@email.com', 'password', 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(6, 'John', 'Doe', NULL, 'member', NULL, 'john@email.com', 'password', 'inactive', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(7, 'Jane', 'Doe', NULL, 'user', NULL, 'jane@email.com', 'password', 'inactive', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(8, 'Leo', 'Dubois', NULL, 'member', '0690123456', 'leo.dubois@email.com', 'password', 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19'),
(9, 'Sophie', 'Martin', NULL, 'admin', '0690789123', 'sophie.martin@email.com', 'password', 'active', '2024-10-29 19:50:19', '2024-10-29 19:50:19');

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
  ADD UNIQUE KEY `equipment_id` (`equipment_id`,`user_role`),
  ADD KEY `fk_equipment_role_rate_equipment_id` (`equipment_id`);

--
-- Index pour la table `Reservations`
--
ALTER TABLE `Reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservations_user_id` (`user_id`),
  ADD KEY `fk_reservations_room_id` (`room_id`);

--
-- Index pour la table `Reservation_Equipment`
--
ALTER TABLE `Reservation_Equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservation_equipment_reservation_id` (`reservation_id`),
  ADD KEY `fk_reservation_equipment_equipment_id` (`equipment_id`);

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
  ADD KEY `fk_room_equipment_room_id` (`room_id`),
  ADD KEY `fk_room_equipment_equipment_id` (`equipment_id`);

--
-- Index pour la table `Room_Role_Rate`
--
ALTER TABLE `Room_Role_Rate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_id` (`room_id`,`user_role`),
  ADD KEY `fk_room_role_rate_room_id` (`room_id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Equipment_Role_Rate`
--
ALTER TABLE `Equipment_Role_Rate`
  ADD CONSTRAINT `fk_equipment_role_rate_equipment_id` FOREIGN KEY (`equipment_id`) REFERENCES `Equipments` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Reservations`
--
ALTER TABLE `Reservations`
  ADD CONSTRAINT `fk_reservations_room_id` FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_reservations_user_id` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Reservation_Equipment`
--
ALTER TABLE `Reservation_Equipment`
  ADD CONSTRAINT `fk_reservation_equipment_equipment_id` FOREIGN KEY (`equipment_id`) REFERENCES `Equipments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_reservation_equipment_reservation_id` FOREIGN KEY (`reservation_id`) REFERENCES `Reservations` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Room_Equipment`
--
ALTER TABLE `Room_Equipment`
  ADD CONSTRAINT `fk_room_equipment_equipment_id` FOREIGN KEY (`equipment_id`) REFERENCES `Equipments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_room_equipment_room_id` FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Room_Role_Rate`
--
ALTER TABLE `Room_Role_Rate`
  ADD CONSTRAINT `fk_room_role_rate_room_id` FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;