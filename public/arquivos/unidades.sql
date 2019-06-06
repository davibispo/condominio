-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2019 às 12:56
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
(1, '1', '001', 1, '1', '2019-06-03 11:13:23', '2019-06-03 11:13:23'),
(2, '1', '002', NULL, '1', '2019-06-03 11:13:29', '2019-06-03 11:13:29'),
(3, '1', '003', NULL, '1', '2019-06-03 11:13:33', '2019-06-03 11:13:33'),
(4, '1', '004', NULL, '1', '2019-06-03 11:13:37', '2019-06-03 11:13:37'),
(5, '1', '101', NULL, '1', '2019-06-03 11:13:46', '2019-06-03 11:13:46'),
(6, '1', '102', NULL, '1', '2019-06-03 11:13:49', '2019-06-03 11:13:49'),
(7, '1', '103', NULL, '1', '2019-06-03 11:13:53', '2019-06-03 11:13:53'),
(8, '1', '104', 1, '1', '2019-06-03 11:13:58', '2019-06-03 11:13:58'),
(9, '1', '201', NULL, '1', '2019-06-03 11:14:04', '2019-06-03 11:14:04'),
(10, '1', '202', NULL, '1', '2019-06-03 11:14:08', '2019-06-03 11:14:08'),
(11, '1', '203', 1, '1', '2019-06-03 11:14:11', '2019-06-03 11:14:11'),
(12, '1', '204', NULL, '1', '2019-06-03 11:14:15', '2019-06-03 11:14:15'),
(13, '1', '301', NULL, '1', '2019-06-03 11:14:23', '2019-06-03 11:14:23'),
(14, '1', '302', NULL, '1', '2019-06-03 11:14:26', '2019-06-03 11:14:26'),
(15, '1', '303', NULL, '1', '2019-06-03 11:14:29', '2019-06-03 11:14:29'),
(16, '1', '304', NULL, '1', '2019-06-03 11:14:33', '2019-06-03 11:14:33'),
(17, '2', '001', NULL, '1', '2019-06-03 19:57:00', '2019-06-03 19:57:00'),
(18, '2', '002', NULL, '1', '2019-06-03 19:57:05', '2019-06-03 19:57:05'),
(19, '2', '003', NULL, '1', '2019-06-03 19:57:09', '2019-06-03 19:57:09'),
(20, '2', '004', NULL, '1', '2019-06-03 19:57:13', '2019-06-03 19:57:13'),
(21, '2', '101', NULL, '1', '2019-06-03 19:57:19', '2019-06-03 19:57:19'),
(22, '2', '102', NULL, '1', '2019-06-03 19:57:29', '2019-06-03 19:57:29'),
(23, '2', '103', NULL, '1', '2019-06-03 19:57:35', '2019-06-03 19:57:35'),
(24, '2', '104', NULL, '1', '2019-06-03 19:57:39', '2019-06-03 19:57:39'),
(25, '2', '201', NULL, '1', '2019-06-03 19:57:46', '2019-06-03 19:57:46'),
(26, '2', '202', NULL, '1', '2019-06-03 19:57:51', '2019-06-03 19:57:51'),
(27, '2', '203', NULL, '1', '2019-06-03 19:57:57', '2019-06-03 19:57:57'),
(28, '2', '204', NULL, '1', '2019-06-03 19:58:03', '2019-06-03 19:58:03'),
(29, '2', '301', NULL, '1', '2019-06-03 19:58:11', '2019-06-03 19:58:11'),
(30, '2', '302', NULL, '1', '2019-06-03 19:58:27', '2019-06-03 19:58:27'),
(31, '2', '303', NULL, '1', '2019-06-03 19:58:31', '2019-06-03 19:58:31'),
(32, '2', '304', NULL, '1', '2019-06-03 19:58:35', '2019-06-03 19:58:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unidades_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `unidades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
