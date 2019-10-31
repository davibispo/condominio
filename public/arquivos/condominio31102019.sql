-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2019 às 13:47
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `arquivo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `arquivo`, `descricao`, `ativo`, `created_at`, `updated_at`) VALUES
(1, 'files/file201910021016125d94a31c77f9f.doc', 'Teste de documento docx', '2', '2019-10-02 13:16:12', '2019-10-21 11:49:27'),
(2, 'files/file201910041223545d97640a58390.pdf', 'Assembleia geral', '2', '2019-10-04 15:23:54', '2019-10-21 11:49:25'),
(3, 'files/file201910151205105da5e026e4475.bin', 'Carta para ingressar em curso.', '2', '2019-10-15 15:05:11', '2019-10-21 11:49:23'),
(4, 'files/file201910151221355da5e3ff4ef21.pdf', 'Boleto de pagamento das tintas.', '2', '2019-10-15 15:21:35', '2019-10-15 15:21:55'),
(6, 'files/file201910151224245da5e4a8e55ce.png', 'exemplo de imagem', '2', '2019-10-15 15:24:24', '2019-10-16 13:04:11'),
(7, 'files/file201910151225235da5e4e338e7e.txt', 'exemplo excel 2', '2', '2019-10-15 15:25:23', '2019-10-16 13:04:12'),
(8, 'files/file201910151234205da5e6fc40d07.xml', 'Teste de excel 3', '2', '2019-10-15 15:34:20', '2019-10-16 13:04:12'),
(9, 'files/file201910161004295da7155d7fee3.doc', 'Teste com DOC', '2', '2019-10-16 13:04:29', '2019-10-16 13:05:29'),
(10, 'files/file201910161031285da71bb0779ed.bin', 'Teste de DOCX', '2', '2019-10-16 13:31:28', '2019-10-16 13:31:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `assembleias`
--

CREATE TABLE `assembleias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locavel_areas`
--

CREATE TABLE `locavel_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  `obs` text COLLATE utf8mb4_unicode_ci,
  `ativo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `locavel_areas`
--

INSERT INTO `locavel_areas` (`id`, `descricao`, `valor`, `obs`, `ativo`, `created_at`, `updated_at`) VALUES
(1, 'SALÃO DE FESTAS', '70.00', 'Desconto de 50% para adimplentes.', '1', '2019-10-02 13:05:46', '2019-10-02 13:05:46'),
(2, 'CHURRASQUEIRA 1', '80.00', 'Desconto de 100% para adimplentes.', '1', '2019-10-02 13:06:24', '2019-10-02 13:06:24'),
(3, 'CHURRASQUEIRA 2', '80.00', 'Desconto de 100% para adimplentes.', '1', '2019-10-02 13:06:55', '2019-10-02 13:06:55'),
(4, 'CHURRASQUEIRA 3', '80.00', 'Desconto de 100% para adimplentes.', '1', '2019-10-30 14:23:05', '2019-10-30 14:23:05'),
(5, 'CHURRASQUEIRA 4', '80.00', 'Desconto de 100% para adimplentes.', '1', '2019-10-30 14:23:20', '2019-10-30 14:23:20');

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_05_20_232440_create_unidades_table', 1),
(18, '2019_05_21_213426_create_locavel_areas_table', 1),
(19, '2019_05_21_215604_create_reservas_table', 1),
(20, '2019_05_22_215346_create_ocorrencias_table', 1),
(21, '2019_05_25_082402_create_veiculos_table', 1),
(22, '2019_05_27_192403_create_notificacao_multas_table', 1),
(23, '2019_06_04_081058_create_pets_table', 1),
(24, '2019_06_09_231818_create_avisos_table', 1),
(25, '2019_06_09_232945_create_assembleias_table', 1),
(26, '2019_06_09_233137_create_suportes_table', 1),
(27, '2019_06_09_235211_create_arquivos_table', 1),
(28, '2019_08_21_105419_create_ocorrencia_tipos_table', 1),
(29, '2019_10_01_121941_create_visitantes_table', 1);

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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `foto1` text COLLATE utf8mb4_unicode_ci,
  `foto2` text COLLATE utf8mb4_unicode_ci,
  `foto3` text COLLATE utf8mb4_unicode_ci,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonimo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ocorrencias`
--

INSERT INTO `ocorrencias` (`id`, `user_id`, `data`, `foto1`, `foto2`, `foto3`, `descricao`, `anonimo`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-10-01', 'ocorrencias/oc101528021020195d94a2f020b04.jpeg', NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1', '2', '2019-10-02 13:15:28', '2019-10-15 15:03:10'),
(2, 2, '2019-10-03', 'ocorrencias/oc122138041020195d976382b0af3.jpeg', NULL, NULL, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '0', '2', '2019-10-04 15:21:38', '2019-10-08 12:30:47'),
(3, 1, '2019-10-15', 'ocorrencias/oc105954151020195da5d0dab0185.jpeg', 'ocorrencias/oc1059551510195da5d0db48ad9.jpeg', 'ocorrencias/oc105955201910155da5d0db4a903.jpeg', 'Teste de fotos ampliadas.', '0', '2', '2019-10-15 13:59:55', '2019-10-18 14:35:08'),
(4, 1, '2019-10-23', NULL, NULL, NULL, 'Foi uma barata que apareceu na minha sala e eu acho que veio das caixas de gordura.', '0', '2', '2019-10-30 13:42:09', '2019-10-30 13:42:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia_tipos`
--

CREATE TABLE `ocorrencia_tipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Estrutura da tabela `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obs` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `vacina` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id`, `tipo`, `descricao`, `nome`, `obs`, `foto`, `vacina`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cachorro', 'Pelos brancos e amarelos', 'SãO BERNARDO', NULL, 'pets/pet110325201910025d94ae2db6e64.jpeg', 'pets/pet110505201910025d94ae9111bd1.pdf', 1, '1', '2019-10-02 14:03:25', '2019-10-03 15:35:34'),
(2, 'Gato', 'Pelos brancos e pretos', 'BICHANO', NULL, 'pets/pet123605201910035d961565b291b.jpeg', 'pets/pet094819201910175da86313b1de2.pdf', 1, '1', '2019-10-03 15:36:05', '2019-10-17 12:48:20'),
(3, 'Gato', 'pelos brancos', 'TOTó', NULL, 'pets/pet121858201910045d9762e292e76.jpeg', NULL, 2, '1', '2019-10-04 15:18:58', '2019-10-04 15:18:58'),
(4, 'Gato', 'Pelos brancos e marrom.', 'BICHANO', 'Teste de docx', 'pets/pet123634201910155da5e78261456.jpeg', 'pets/pet123634201910155da5e7825064f.bin', 1, '1', '2019-10-15 15:36:34', '2019-10-15 15:36:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `locavel_area_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_solicitada` date NOT NULL,
  `hora_inicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_fim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` text COLLATE utf8mb4_unicode_ci,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `user_id`, `locavel_area_id`, `data_solicitada`, `hora_inicio`, `hora_fim`, `obs`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, '1', '2019-10-12', '18:00', '20:00', NULL, '2', '2019-10-04 15:19:57', '2019-10-04 15:24:25'),
(3, 1, '2', '2019-11-01', '18:00', '22:00', NULL, '3', '2019-10-29 13:25:50', '2019-10-29 13:30:53'),
(4, 1, '3', '2019-11-02', '14:00', '17:00', NULL, '2', '2019-10-29 13:39:17', '2019-10-29 13:40:58'),
(5, 18, '1', '2019-10-30', '10:00', '14:00', NULL, '2', '2019-10-30 14:20:31', '2019-10-30 14:21:49'),
(6, 18, '2', '2019-11-22', '10:00', '14:00', NULL, '2', '2019-10-30 14:21:21', '2019-10-30 14:21:51'),
(7, 21, '1', '2019-11-04', '17:00', '20:00', NULL, '2', '2019-10-30 14:26:07', '2019-10-30 14:29:47'),
(8, 20, '4', '2019-11-09', '15:00', '18:00', NULL, '2', '2019-10-30 14:28:23', '2019-10-30 14:29:45'),
(9, 19, '1', '2019-11-16', '17:00', '21:00', NULL, '2', '2019-10-30 14:29:02', '2019-10-30 14:29:43'),
(10, 1, '1', '2019-11-21', '14:00', '15:00', NULL, '2', '2019-10-30 14:40:50', '2019-10-30 14:41:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `suportes`
--

CREATE TABLE `suportes` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ativo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `reside` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tipo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloco` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apto` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `residente1` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente1` int(11) DEFAULT NULL,
  `foto_residente1` text COLLATE utf8mb4_unicode_ci,
  `residente2` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente2` int(11) DEFAULT NULL,
  `foto_residente2` text COLLATE utf8mb4_unicode_ci,
  `residente3` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente3` int(11) DEFAULT NULL,
  `foto_residente3` text COLLATE utf8mb4_unicode_ci,
  `residente4` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente4` int(11) DEFAULT NULL,
  `foto_residente4` text COLLATE utf8mb4_unicode_ci,
  `residente5` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente5` int(11) DEFAULT NULL,
  `foto_residente5` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `ativo`, `reside`, `status`, `tipo`, `bloco`, `apto`, `name`, `tel1`, `tel2`, `cpf`, `sexo`, `data_nascimento`, `foto`, `residente1`, `idade_residente1`, `foto_residente1`, `residente2`, `idade_residente2`, `foto_residente2`, `residente3`, `idade_residente3`, `foto_residente3`, `residente4`, `idade_residente4`, `foto_residente4`, `residente5`, `idade_residente5`, `foto_residente5`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '9', 'Proprietário', '1', '203', 'DAVI BISPO DE OLIVEIRA', '(82) 9 9969-3407', '(82) 9 9656-4390', '041.226.574-58', 'M', '1982-07-11', 'fotos/foto095443201910025d949e13cb4c0.jpeg', 'KARLA MONIQUE GAMA BISPO', 34, 'fotos/foto100145201910025d949fb94e831.jpeg', 'NEPHI GAMA BISPO', 6, 'fotos/foto100145201910025d949fb97af7f.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$P7ud4h8gUwA2joyEKAHoRut2I0EGi3rPIsopR8vuYMcEu23GpJSzu', 'JvKkBWaZmAzMO6DYTp6YL90s2a9YTXNrV5eYBKwsSMh68OMpqLoDPC40z7hI', '2019-10-02 12:54:44', '2019-10-21 12:05:52'),
(2, '1', '1', '0', 'Inquilino', '3', '102', 'MARIA DO NASCIMENTO', '(82) 9 9645-1234', NULL, '123.456.789-55', 'M', '1974-05-01', 'fotos/foto113404201910035d9606dcdd69e.png', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'neilton@gmail.com', NULL, '$2y$10$BHtH6Jci5y/EaUckHZ5GOO8JDLfSutHdSBtxGNMEsfViI8W9DbWFy', NULL, '2019-10-03 14:34:05', '2019-10-04 15:35:34'),
(3, '1', '1', '0', 'Morador', '6', '101', 'JOSEFA PINTO DA SILVA', '(82) 9 8844-5552', NULL, '000.000.000-00', 'M', '1984-10-01', 'fotos/foto113608201910035d9607585473d.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'clubeet.cte@gmail.com', NULL, '$2y$10$Bfmd9V0irsHbcT3pOu5z7u302tCbkd4XZLsf624Jr2l7W71ZYgryS', NULL, '2019-10-03 14:36:08', '2019-10-03 14:50:34'),
(4, '1', '1', '0', 'Proprietário', '18', '202', 'MARCELO DA COSTA NETO', '(82) 9 4522-1321', NULL, '041.225.454-65', 'M', '1945-12-12', 'fotos/foto114020201910035d960854750be.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$UlUX94IaUbdkPVLXw4tz2ecs8CaVk.Hb/yTALjmDI7GREg0/uTMJG', NULL, '2019-10-03 14:40:20', '2019-10-03 14:50:39'),
(5, '1', '1', '0', 'Inquilino', '7', '202', 'RICARDO DOUGLAS DA SILVA', '(82) 9 8788-8899', NULL, '444.444.444-44', 'M', '1978-02-05', 'fotos/foto114225201910035d9608d1c1259.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'maria@gmail.com', NULL, '$2y$10$d0H0Ye/Gdqp0VmqGF2O.aOYhBQLg7/oEF492uNpuxK5qNkG6c5px6', NULL, '2019-10-03 14:42:25', '2019-10-03 14:50:37'),
(6, '1', '1', '0', 'Proprietário', '6', '103', 'ROBERTO FREITAS NASCIMENTO', '(82) 9 7545-4654', NULL, '777.777.777-77', 'M', '1955-05-01', 'fotos/foto114600201910035d9609a8e2ff7.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$FPEZR/J3OBlv0Emute1PaOhNy6S4Y3NtMrT0ebjSXaUqryGdMC4eu', NULL, '2019-10-03 14:46:01', '2019-10-03 14:50:36'),
(7, '1', '1', '8', 'Inquilino', '14', '201', 'MAURICIO MAGALHãES DA COSTA', '(82) 9 7454-5646', NULL, '666.666.666-66', 'M', '1986-05-02', 'fotos/foto114713201910035d9609f1eb39d.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'pgadmin@pgadmin.com', NULL, '$2y$10$YBj84CZNuD6Ty1zWAa7Us.JXcwWDra7ZXeNTDYKVgiCCk8rB3W7gu', NULL, '2019-10-03 14:47:14', '2019-10-03 14:50:38'),
(8, '1', '1', '0', 'Proprietário', '1', '203', 'KARLA MONIQUE GAMA BISPO', '(82) 9 9678-9966', NULL, '123.456.456-78', 'F', '1985-04-26', 'fotos/foto093702201910085d9c82ee20056.png', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$ObwIgmdDiku5kOXyYpl2HugFE5KKidpEk6zvt3GuSlYRJnhEI45ZS', NULL, '2019-10-08 12:37:02', '2019-10-08 12:38:24'),
(9, '1', '1', '0', 'Morador', '1', '203', 'NEPHI GAMA BISPO', '(82) 9 9969-3407', NULL, '222.222.222-22', 'M', '2013-06-11', 'fotos/foto093811201910085d9c83336db25.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$1PNXTlFp/CD8fJH21yyy0ed5CR5fdET2Y5LWtHi55Qxhx9J9NNroq', NULL, '2019-10-08 12:38:11', '2019-10-08 12:38:26'),
(10, '1', '1', '0', 'Morador', '6', '101', 'JOSE GALVAO DOS SANTOS', '(82) 9 9946-4565', NULL, '555.555.555-55', 'M', '1954-04-12', 'fotos/foto093935201910085d9c8387245bf.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$I1Mch0fHkMYkXfCI9/5FsexO3TsueseeTZZ2hXe2Ij4DmIbPcJb7K', NULL, '2019-10-08 12:39:35', '2019-10-08 12:39:47'),
(11, '1', '1', '0', 'Inquilino', '4', '002', 'JOSIANE DA SILVA', '(82) 9 6694-6465', NULL, '123.458.798-65', 'F', '1984-01-01', 'fotos/foto130017201910085d9cb2917c3fa.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'neilton@gmail.com', NULL, '$2y$10$Gg9AhBR3qbCEaoguOkxYuexxeVdaJiXTodlXR4tQQWLFc.4VtnqxS', NULL, '2019-10-08 16:00:17', '2019-10-08 16:00:29'),
(12, '1', '1', '0', 'Proprietário', '1', '003', 'RICARDO BUENO DOS SANTOS', '(82) 9 9965-8563', NULL, '011.452.121-22', 'M', '1975-03-02', 'fotos/foto114221201910095d9df1cddf205.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'clubeet.cte@gmail.com', NULL, '$2y$10$xKrWIEH7/F8zpkBq/mpBlu2KlgaP3ih/dG8b1RtDnqtpPc.tQYRsm', NULL, '2019-10-09 14:42:22', '2019-10-09 14:42:49'),
(13, '1', '1', '0', 'Inquilino', '3', '103', 'JOãO VITOR', '(82) 9 6455-5445', NULL, '123.456.123-45', 'M', '1988-05-02', 'fotos/foto122041201910175da886c949d84.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'pgadmin@pgadmin.com', NULL, '$2y$10$Pb2Z117CiagxnkFPveBWLep82R90TQKM5roIC0.59sWv2iNrpTsM2', NULL, '2019-10-17 15:20:41', '2019-10-17 15:31:43'),
(14, '1', '1', '0', 'Morador', '7', '304', 'MARIO BROTHER', '(82) 9 6277-7777', NULL, '111.111.111-11', 'F', '1976-10-10', 'fotos/foto122926201910175da888d6b83c4.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$eJuTbw2AHQVtz4dpNvIW1OSJZX3qtCFsLWJfygmidmfOPKplxN.SK', NULL, '2019-10-17 15:29:26', '2019-10-17 15:31:50'),
(15, '1', '1', '0', 'Proprietário', '13', '202', 'CICERA DA SILVA', '(82) 5 4555-5555', NULL, '123.456.789-00', 'F', '1978-09-29', 'fotos/foto123923201910175da88b2b84c50.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$rF2Do1Vj.81hsAOvRXQia.JlwH6Rt3Jg52Ijsv0SvmhisWzG1ltRG', NULL, '2019-10-17 15:39:23', '2019-10-21 11:57:11'),
(16, '1', '0', '8', 'Outro', 'SU', 'SU', 'PORTEIRO JOSé CARLOS DA COSTA', '(82) 9 9654-3432', NULL, '546.321.321-32', 'M', '1987-05-02', 'fotos/foto101708201910215dadafd44cdf9.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'pgadmin@pgadmin.com', NULL, '$2y$10$k6S.I4LuzhzfxF1sGamCBeZ8P/ejSMwfLSDF9kZDVUj7ZDsVE.M3C', NULL, '2019-10-21 13:17:08', '2019-10-29 12:53:45'),
(17, '1', '1', '0', 'Proprietário', '22', '001', 'FULANO PROPRIETáRIO MORADOR DA SILVA', '(82) 9 8896-2236', NULL, '100.000.000-00', 'M', '1991-01-01', 'fotos/foto093157201910295db8313d4f560.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$YBCJR2LEpF02SO1ZdyfHqerfv5nvdZDxmO57vtmW8C2BeGVz17/7a', NULL, '2019-10-29 12:31:58', '2019-10-29 12:53:43'),
(18, '1', '1', '0', 'Morador', '21', '002', 'FULANO MORADOR PROPRIETáRIO', '(82) 9 9454-6523', NULL, '200.000.000-00', 'M', '1981-02-01', 'fotos/foto093901201910295db832e5ca5f9.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davi-bispo@hotmail.com', NULL, '$2y$10$OjduRjcL57u6dPsvwGyPHekQy6T7JyHVgjDFbeICnqcJLg6P6dLGi', NULL, '2019-10-29 12:39:01', '2019-10-29 12:53:41'),
(19, '1', '0', '0', 'Proprietário', '20', '003', 'FULANO PROPRIETARIO RESPONSAVEL E NãO MORADOR', '(82) 4 4444-4444', NULL, '300.000.000-00', 'M', '1987-03-02', 'fotos/foto094151201910295db8338f59487.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'adeilsoncruz77@gmail.com', NULL, '$2y$10$uWtcI1CUqwed1t.mtwV2Aex6ZN4vUYF2.A8IyOgkCTf41dECwSOFe', NULL, '2019-10-29 12:41:51', '2019-10-29 12:53:37'),
(20, '1', '1', '0', 'Inquilino', '20', '003', 'SICRANO INQUILINO MORADOR E RESPONSáVEL', '(82) 4 5111-1111', NULL, '400.000.000-00', 'M', '1985-05-04', 'fotos/foto094445201910295db8343d42215.jpeg', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'davibispo.sud@gmail.com', NULL, '$2y$10$z6Z2sEx3QqFp179pRtWgp.Kq7TDGqmQfGjq8cJ/4En0VLDtjBNvom', NULL, '2019-10-29 12:44:45', '2019-10-29 12:53:39'),
(21, '1', '1', '0', 'Morador', '19', '004', 'SICRANO INQUILINO MORADOR E NãO RESPONSáVEL', '(82) 4 5555-5555', NULL, '500.000.000-00', 'F', '1987-06-05', 'fotos/foto094804201910295db83504e40e2.png', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', '', NULL, '0', 'pedro@gmail.com', NULL, '$2y$10$ESikUy9PPhcbzeBPPwBqe.PTKTtbIVkws1rk7UHdSQ/.Ix4QuSr6.', NULL, '2019-10-29 12:48:05', '2019-10-29 12:53:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `veiculos` (`id`, `tipo`, `placa`, `descricao`, `cor`, `user_id`, `ativo`, `created_at`, `updated_at`) VALUES
(1, 'Carro', 'MVD-5543', 'FORD FIESTA HATCH', 'Prata', 2, '1', '2019-10-04 15:17:47', '2019-10-04 15:17:47'),
(2, 'Carro', 'NMB-8067', 'HONDA CG TITAN MIX 150', 'Cinza', 1, '1', '2019-10-10 11:10:41', '2019-10-10 11:10:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitantes`
--

CREATE TABLE `visitantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placa` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qtde` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `foto` text COLLATE utf8mb4_unicode_ci,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rg` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `visitantes`
--

INSERT INTO `visitantes` (`id`, `user_id`, `nome`, `tipo`, `placa`, `qtde`, `foto`, `cpf`, `rg`, `created_at`, `updated_at`) VALUES
(2, 4, 'JOSE RICARDO DA SILVA', 'Entregador', 'NMG-4522', '1', NULL, '120.032.632-00', '', '2019-10-14 14:14:08', '2019-10-14 14:14:08'),
(3, 10, 'SUZANA VIEIRA', 'Amigo', 'NHH-4522', '1', NULL, NULL, '20014523 SSP AL', '2019-10-14 14:27:53', '2019-10-14 14:27:53'),
(4, NULL, '', 'Entregador', '', '1', NULL, NULL, '', '2019-10-14 14:28:10', '2019-10-14 14:28:10'),
(5, 4, '', 'Entregador', '', '1', NULL, NULL, '', '2019-10-14 14:28:47', '2019-10-14 14:28:47'),
(6, NULL, '', 'Entregador', '', '1', NULL, NULL, '', '2019-10-14 14:29:05', '2019-10-14 14:29:05'),
(7, NULL, '', 'Entregador', '', '1', NULL, NULL, '', '2019-10-14 14:29:06', '2019-10-14 14:29:06'),
(8, NULL, 'CAMILO PETER PAN', 'Amigo', '', '1', NULL, NULL, '', '2019-10-14 14:31:31', '2019-10-14 14:31:31'),
(9, 5, 'TUTIMES AIRAN', 'Entregador', '', '1', NULL, NULL, '', '2019-10-14 14:46:57', '2019-10-14 14:46:57'),
(10, 3, 'SãO BERNARDO', 'Parente', '', '3', NULL, '041.226.574-58', '', '2019-10-14 14:48:44', '2019-10-14 14:48:44'),
(11, 10, 'MAURICIO', 'Entregador', '', '1', NULL, NULL, '', '2019-10-15 12:44:53', '2019-10-15 12:44:53'),
(12, 1, 'JESSICA KARINE', 'Parente', '', '1', NULL, '111.111.111-11', '', '2019-10-15 13:35:28', '2019-10-15 13:35:28'),
(13, 6, 'JOANA FRANÇA DA SILVA', 'Amigo', '', '3', NULL, NULL, '', '2019-10-16 12:53:33', '2019-10-16 12:53:33'),
(14, 7, 'MARCIO DA SILVA SANTOS', 'Amigo (a)', 'NHM-45', '1', NULL, NULL, '', '2019-10-16 12:55:03', '2019-10-16 12:55:03'),
(15, 5, 'JUAREZ JACKSON', 'Amigo(a)', '', '1', NULL, NULL, '', '2019-10-17 13:14:42', '2019-10-17 13:14:42'),
(16, 1, 'JOSE', 'Amigo(a)', '', '1', NULL, NULL, '', '2019-10-17 13:16:26', '2019-10-17 13:16:26'),
(17, 18, 'JOSé VALERIO DA SILVA', 'Amigo(a)', 'LPN-4522', '1', NULL, '120.212.552-52', '20025552', '2019-10-30 13:47:09', '2019-10-30 13:47:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assembleias`
--
ALTER TABLE `assembleias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `ocorrencias_user_id_foreign` (`user_id`);

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
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pets_user_id_foreign` (`user_id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservas_user_id_foreign` (`user_id`);

--
-- Indexes for table `suportes`
--
ALTER TABLE `suportes`
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
-- Indexes for table `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitantes_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assembleias`
--
ALTER TABLE `assembleias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locavel_areas`
--
ALTER TABLE `locavel_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `notificacao_multas`
--
ALTER TABLE `notificacao_multas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ocorrencia_tipos`
--
ALTER TABLE `ocorrencia_tipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suportes`
--
ALTER TABLE `suportes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitantes`
--
ALTER TABLE `visitantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD CONSTRAINT `ocorrencias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `unidades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `veiculos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `visitantes`
--
ALTER TABLE `visitantes`
  ADD CONSTRAINT `visitantes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
