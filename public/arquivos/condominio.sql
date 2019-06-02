-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jun-2019 às 06:02
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `condominio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `locavel_areas`
--

CREATE TABLE `locavel_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(57, '2014_10_12_000000_create_users_table', 1),
(58, '2014_10_12_100000_create_password_resets_table', 1),
(59, '2019_05_20_232440_create_unidades_table', 1),
(60, '2019_05_21_213426_create_locavel_areas_table', 1),
(61, '2019_05_21_215604_create_reservas_table', 1),
(62, '2019_05_22_215346_create_ocorrencias_table', 1),
(63, '2019_05_22_223906_create_ocorrencia_tipos_table', 1),
(64, '2019_05_25_082402_create_veiculos_table', 1),
(65, '2019_05_27_192403_create_notificacao_multas_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao_multas`
--

CREATE TABLE `notificacao_multas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ocorrencia_tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia_tipos`
--

CREATE TABLE `ocorrencia_tipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_locavel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_solicitada` date NOT NULL,
  `periodo_solicitado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bloco` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unidade` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ativo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `unidades`
--

INSERT INTO `unidades` (`id`, `bloco`, `unidade`, `user_id`, `ativo`, `created_at`, `updated_at`) VALUES
(1, '1', '001', 1, '1', '2019-05-29 03:10:42', '2019-06-01 14:02:43'),
(2, '1', '002', 2, '1', '2019-05-29 03:14:47', '2019-06-01 22:58:05'),
(3, '1', '003', 1, '1', '2019-05-29 03:15:20', '2019-05-29 03:15:20'),
(4, '1', '004', 2, '1', '2019-05-29 03:15:46', '2019-05-29 03:15:46'),
(5, '1', '101', 1, '1', '2019-05-29 03:16:07', '2019-05-29 03:16:07'),
(6, '1', '102', 2, '1', '2019-05-29 03:16:15', '2019-05-29 03:16:15'),
(7, '1', '103', 1, '1', '2019-05-30 22:18:55', '2019-05-30 22:18:55'),
(8, '1', '104', NULL, '1', '2019-05-30 22:19:03', '2019-05-30 22:19:03'),
(9, '1', '201', 2, '1', '2019-05-30 22:19:09', '2019-05-30 22:19:09'),
(10, '1', '202', 1, '1', '2019-05-30 22:20:03', '2019-05-30 22:20:03'),
(11, '1', '203', NULL, '1', '2019-05-30 22:20:11', '2019-05-30 22:20:11'),
(12, '1', '204', NULL, '1', '2019-05-30 22:20:16', '2019-05-30 22:20:16'),
(13, '1', '301', NULL, '1', '2019-05-30 22:20:23', '2019-05-30 22:20:23'),
(14, '1', '302', NULL, '1', '2019-05-30 22:20:28', '2019-05-30 22:20:28'),
(15, '1', '303', NULL, '1', '2019-05-30 22:20:34', '2019-05-30 22:20:34'),
(16, '1', '304', NULL, '1', '2019-05-30 22:20:38', '2019-05-30 22:20:38'),
(17, '2', '001', NULL, '1', '2019-05-30 22:20:50', '2019-05-30 22:20:50'),
(18, '2', '002', NULL, '1', '2019-05-30 22:20:56', '2019-05-30 22:20:56'),
(19, '2', '003', NULL, '1', '2019-05-30 22:28:48', '2019-05-30 22:28:48'),
(20, '2', '004', NULL, '1', '2019-05-30 22:29:56', '2019-05-30 22:29:56'),
(21, '2', '101', NULL, '1', '2019-05-30 22:30:05', '2019-05-30 22:30:05'),
(22, '2', '102', NULL, '1', '2019-05-30 22:30:10', '2019-05-30 22:30:10'),
(23, '2', '103', NULL, '1', '2019-05-30 22:30:14', '2019-05-30 22:30:14'),
(24, '2', '104', NULL, '1', '2019-05-30 22:30:19', '2019-05-30 22:30:19'),
(25, '2', '201', NULL, '1', '2019-05-30 22:30:44', '2019-05-30 22:30:44'),
(26, '2', '202', NULL, '1', '2019-05-30 22:30:49', '2019-05-30 22:30:49'),
(27, '2', '203', NULL, '1', '2019-05-30 22:30:52', '2019-05-30 22:30:52'),
(28, '2', '204', NULL, '1', '2019-05-30 22:30:55', '2019-05-30 22:30:55'),
(29, '2', '301', NULL, '1', '2019-05-30 22:31:00', '2019-05-30 22:31:00'),
(30, '2', '302', NULL, '1', '2019-05-30 22:31:17', '2019-05-30 22:31:17'),
(33, '2', '303', NULL, '1', '2019-05-31 00:30:40', '2019-05-31 00:30:40'),
(34, '2', '304', NULL, '1', '2019-05-31 00:30:45', '2019-05-31 00:30:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `residente1` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente1` int(11) DEFAULT NULL,
  `sexo_residente1` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residente2` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente2` int(11) DEFAULT NULL,
  `sexo_residente2` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residente3` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente3` int(11) DEFAULT NULL,
  `sexo_residente3` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residente4` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente4` int(11) DEFAULT NULL,
  `sexo_residente4` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residente5` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente5` int(11) DEFAULT NULL,
  `sexo_residente5` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residente6` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente6` int(11) DEFAULT NULL,
  `sexo_residente6` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residente7` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente7` int(11) DEFAULT NULL,
  `sexo_residente7` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residente8` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente8` int(11) DEFAULT NULL,
  `sexo_residente8` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tipo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `sexo`, `cpf`, `data_nascimento`, `foto`, `residente1`, `idade_residente1`, `sexo_residente1`, `residente2`, `idade_residente2`, `sexo_residente2`, `residente3`, `idade_residente3`, `sexo_residente3`, `residente4`, `idade_residente4`, `sexo_residente4`, `residente5`, `idade_residente5`, `sexo_residente5`, `residente6`, `idade_residente6`, `sexo_residente6`, `residente7`, `idade_residente7`, `sexo_residente7`, `residente8`, `idade_residente8`, `sexo_residente8`, `email`, `email_verified_at`, `password`, `ativo`, `tipo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Davi Bispo de Oliveira', 'M', '04122657458', '1982-07-11', NULL, 'Karla', 34, 'F', 'Nephi', 5, 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'davi-bispo@hotmail.com', NULL, '$2y$10$wCEUgnP8bj967N81GUi2..s7GaNBphC2YYUoeXYu3u/cDAidmBXIq', '1', 'Proprietário', '9', NULL, '2019-05-27 21:30:35', '2019-05-27 21:30:35'),
(2, 'Nephi', 'M', '04125425558', '2013-05-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nephi@gmail.com', NULL, '$2y$10$zK90O7mFELTUs6ySWqDfaewCNEAj6aTyPxodhL.M3Ar3XAFyp9RFW', '1', 'Proprietário', '0', NULL, '2019-06-01 13:53:12', '2019-06-01 13:53:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `placa` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ativo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `placa`, `descricao`, `cor`, `user_id`, `ativo`, `created_at`, `updated_at`) VALUES
(1, 'MVD-4355', 'Ford Fiesta', 'prata', 1, '1', '2019-06-02 03:58:31', '2019-06-02 03:58:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locavel_areas`
--
ALTER TABLE `locavel_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificacao_multas`
--
ALTER TABLE `notificacao_multas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocorrencia_tipos`
--
ALTER TABLE `ocorrencia_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unidades_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_cpf_unique` (`cpf`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `veiculos_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locavel_areas`
--
ALTER TABLE `locavel_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `notificacao_multas`
--
ALTER TABLE `notificacao_multas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ocorrencia_tipos`
--
ALTER TABLE `ocorrencia_tipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `unidades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `veiculos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
