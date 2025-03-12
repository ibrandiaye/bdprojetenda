-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 mars 2025 à 12:54
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `appels`
--

CREATE TABLE `appels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `association` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dater` date NOT NULL,
  `dates` date NOT NULL,
  `personne` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateb` date DEFAULT NULL,
  `datet` date DEFAULT NULL,
  `dateexp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `appels`
--

INSERT INTO `appels` (`id`, `titre`, `theme`, `association`, `pays`, `montant`, `dater`, `dates`, `personne`, `document`, `type_id`, `created_at`, `updated_at`, `etat`, `dateb`, `datet`, `dateexp`) VALUES
(2, '<p>Appel à propositions</p><p>Programme de travail 2021-2025 entre Wallonie-Bruxelles et République du Sénégal</p><div><br></div>', '<p>Entreprenariat des jeunes et des femmes/Agroalimentaires&nbsp;</p>', 'Enda Ecopop', 'Senegal', '40000000', '2021-10-21', '2021-12-02', 'Mangane /Iba / abdoulaye Cissé /Bachir / Mansour Diagne/Jean Ndiaye', '1622213716.pdf', 2, '2021-05-28 14:55:16', '2025-03-04 14:22:04', 'Approuve', '2022-11-04', '2022-10-22', '2025-03-04'),
(3, '<p>Le Projet d’Appui à Le Projet d’Appui à la résilience et renforcement du leadership des Femmes de Saly Portudal&nbsp; PAREL JIGUENE&nbsp;</p><div><br></div>', '<p>La francophonie avec elles, Leadership des femmes&nbsp;</p>', 'Enda Ecopop', 'Senegal', '4500000', '2021-05-28', '2021-04-28', 'Mangane /Iba / abdoulaye Cissé /Bachir / Mansour Diagne/Jean Ndiaye', '1622213996.pdf', 2, '2021-05-28 14:59:56', '2021-05-28 14:59:56', 'Non approuve', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appel_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `intitule`, `nom`, `appel_id`, `created_at`, `updated_at`) VALUES
(1, 'TDR Mission Ytax 2', '1740399829.pdf', 2, '2025-02-24 11:33:57', '2025-02-24 12:23:49');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `nom`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Ibra Ndiaye', 'ibrandiaye@endaecopop.org', '2022-10-20 11:53:20', '2022-10-20 11:53:20'),
(2, 'Mamadou diop', 'mamadoudiop@endaecopop.org', '2022-10-21 12:55:42', '2025-03-12 11:39:09');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matrices`
--

CREATE TABLE `matrices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tache` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datelimite` date NOT NULL,
  `personneimplique` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comentaire` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appel_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matrices`
--

INSERT INTO `matrices` (`id`, `tache`, `datelimite`, `personneimplique`, `comentaire`, `appel_id`, `created_at`, `updated_at`, `employe_id`) VALUES
(1, 'Décision Reunion de presentation pour le Go ou No GO', '2022-10-22', 'Ibra ndiaye', 'RAS', 2, '2022-10-21 10:12:07', '2022-10-21 10:12:07', 1),
(2, 'Creation d\'un fichier google driver', '2022-10-27', 'Khadim Rassoul Gueye', 'Lien à partager', 2, '2022-10-21 11:43:51', '2025-03-04 14:25:10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_10_113838_create_types_table', 1),
(5, '2021_05_10_113914_create_appels_table', 1),
(6, '2021_05_27_115235_add_column_in_appel', 2),
(7, '2022_10_20_105645_create_matrices_table', 3),
(8, '2022_10_20_110442_create_employes_table', 3),
(9, '2022_10_20_111223_update_table_add_columm_employe_id', 3),
(10, '2022_10_24_102621_update_table_appels_add_column', 4),
(11, '2022_10_24_104512_update_table_appels_add_column_date', 5),
(12, '2025_02_24_104429_create_documents_table', 6),
(13, '2025_03_04_141804_add_column_to_appels_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(2, 'Appel d\'offre', '2021-05-28 11:29:43', '2021-05-28 11:29:43'),
(3, 'Manifestation d\'intérêt', '2021-05-28 15:28:37', '2021-05-28 15:28:37');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ibra Ndiaye', 'ibrandiaye@endaecopop.org', NULL, '$2y$10$8JfSKfvZdgcVoy5yOcyGRORFfaKtGtK4eq2Ydrfc20Fs0EqbPOA4.', NULL, '2021-11-25 12:08:35', '2021-11-25 12:08:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appels`
--
ALTER TABLE `appels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appels_type_id_foreign` (`type_id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_appel_id_foreign` (`appel_id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matrices`
--
ALTER TABLE `matrices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matrices_appel_id_foreign` (`appel_id`),
  ADD KEY `matrices_employe_id_foreign` (`employe_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appels`
--
ALTER TABLE `appels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matrices`
--
ALTER TABLE `matrices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appels`
--
ALTER TABLE `appels`
  ADD CONSTRAINT `appels_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_appel_id_foreign` FOREIGN KEY (`appel_id`) REFERENCES `appels` (`id`);

--
-- Contraintes pour la table `matrices`
--
ALTER TABLE `matrices`
  ADD CONSTRAINT `matrices_appel_id_foreign` FOREIGN KEY (`appel_id`) REFERENCES `appels` (`id`),
  ADD CONSTRAINT `matrices_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
