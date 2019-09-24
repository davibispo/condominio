-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Set-2019 às 18:05
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'SALãO DE FESTAS', '50.00', 'O SALãO DE FESTAS DEVE SER ENTREGUE LIMPO APóS O EVENTO.', '1', '2019-09-06 14:37:35', '2019-09-06 15:57:24'),
(2, 'CHURRASQUEIRA 1', '15.00', 'NãO UTILIZAR SOM ALTO.', '1', '2019-09-06 15:47:28', '2019-09-06 15:47:28'),
(3, 'CHURRASQUEIRA 2', '15.00', NULL, '1', '2019-09-16 14:26:54', '2019-09-16 14:26:54'),
(4, 'CHURRASQUEIRA 3', '20.00', 'Mais cara devido localização', '1', '2019-09-16 14:31:45', '2019-09-16 14:31:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_20_232440_create_unidades_table', 1),
(4, '2019_05_21_213426_create_locavel_areas_table', 1),
(5, '2019_05_21_215604_create_reservas_table', 1),
(6, '2019_05_22_215346_create_ocorrencias_table', 1),
(7, '2019_05_25_082402_create_veiculos_table', 1),
(8, '2019_05_27_192403_create_notificacao_multas_table', 1),
(9, '2019_06_04_081058_create_pets_table', 1),
(10, '2019_06_09_231818_create_avisos_table', 1),
(11, '2019_06_09_232945_create_assembleias_table', 1),
(12, '2019_06_09_233137_create_suportes_table', 1),
(13, '2019_06_09_235211_create_arquivos_table', 1),
(14, '2019_08_21_105419_create_ocorrencia_tipos_table', 1);

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
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `anonimo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ocorrencias`
--

INSERT INTO `ocorrencias` (`id`, `user_id`, `data`, `foto1`, `foto2`, `foto3`, `descricao`, `status`, `anonimo`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-09-22', NULL, NULL, NULL, 'Teste de inserção de registro de ocorrência. Deve ressaltar a importância de todas as pessoas poderem fazer este teste. Teste de inserção de registro de ocorrência. Deve ressaltar a importância de todas as pessoas poderem fazer este teste. Teste de inserção de registro de ocorrência. Deve ressaltar a importância de todas as pessoas poderem fazer este teste. Teste de inserção de registro de ocorrência. Deve ressaltar a importância de todas as pessoas poderem fazer este teste. Teste de inserção de registro de ocorrência. Deve ressaltar a importância de todas as pessoas poderem fazer este teste.', '1', '0', '2019-09-22 21:35:03', '2019-09-22 21:35:03'),
(2, 1, '2019-09-22', NULL, NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', '0', '2019-09-22 21:36:22', '2019-09-22 21:36:22'),
(3, 1, '2019-09-23', 'ocorrencias/ocorrencia093925230920195d88bcfd73f29.jpeg', 'ocorrencias/ocorrencia093925201909235d88bcfd73f2d.jpeg', 'ocorrencias/ocorrencia201909230939255d88bcfd73f30.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', '1', '2019-09-23 12:39:25', '2019-09-23 12:39:25'),
(4, 1, '2019-09-26', 'ocorrencias/oc102437230920195d88c795689f9.jpeg', NULL, NULL, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1', '0', '2019-09-23 13:24:37', '2019-09-23 13:24:37'),
(5, 1, '2019-10-02', 'ocorrencias/oc103009230920195d88c8e1a86e3.jpeg', NULL, 'ocorrencias/oc103009201909235d88c8e1ac5ea.jpeg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '1', '0', '2019-09-23 13:30:09', '2019-09-23 13:30:09'),
(6, 1, '2019-09-23', NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', '1', '2019-09-23 13:41:10', '2019-09-23 13:41:10'),
(7, 1, '2019-09-22', 'ocorrencias/oc121456230920195d88e170d2a1c.pdf', NULL, NULL, 'teste de tamanho', '1', '1', '2019-09-23 15:14:57', '2019-09-23 15:14:57'),
(8, 4, '2019-09-24', 'ocorrencias/oc123024240920195d8a36909dae6.png', 'ocorrencias/oc1230252409195d8a36911539c.jpeg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', '1', '2019-09-24 15:30:25', '2019-09-24 15:30:25'),
(9, 4, '2019-09-22', NULL, NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1', '0', '2019-09-24 15:50:09', '2019-09-24 15:50:09');

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
(2, 'Gato', 'Branco', 'Bichano', 'Teste', 'pets/pet112519201909055d711acf3d625.jpeg', 'pets/pet093723201909045d6fb0039c2cc.pdf', 1, '1', '2019-09-04 12:37:23', '2019-09-05 14:25:19'),
(3, 'Cachorro', 'Preto', 'Black', 'Teste', 'pets/pet112538201909055d711ae2e6565.jpeg', 'pets/pet111657201909045d6fc759cdc13.pdf', 1, '1', '2019-09-04 14:16:58', '2019-09-05 14:25:38');

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
(3, 1, '2', '2019-09-20', '11:00', '14:00', 'Será aniversário de meu filho e não iremos utilizar a piscina.', '1', '2019-09-07 09:40:29', '2019-09-07 09:40:29');

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
  `residente2` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente2` int(11) DEFAULT NULL,
  `residente3` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente3` int(11) DEFAULT NULL,
  `residente4` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_residente4` int(11) DEFAULT NULL,
  `residente5` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_residente1` text COLLATE utf8mb4_unicode_ci,
  `foto_residente2` text COLLATE utf8mb4_unicode_ci,
  `foto_residente3` text COLLATE utf8mb4_unicode_ci,
  `foto_residente4` text COLLATE utf8mb4_unicode_ci,
  `foto_residente5` text COLLATE utf8mb4_unicode_ci,
  `idade_residente5` int(11) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `ativo`, `status`, `tipo`, `bloco`, `apto`, `name`, `tel1`, `tel2`, `cpf`, `sexo`, `data_nascimento`, `foto`, `residente1`, `idade_residente1`, `residente2`, `idade_residente2`, `residente3`, `idade_residente3`, `residente4`, `idade_residente4`, `residente5`, `foto_residente1`, `foto_residente2`, `foto_residente3`, `foto_residente4`, `foto_residente5`, `idade_residente5`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', '9', 'Inquilino', '1', '203', 'DAVI BISPO DE OLIVEIRA', '(82) 9 9969-3407', '(82) 9 9656-4390', '041.226.574-58', 'M', '1982-07-11', 'fotos/foto112533201909035d6e77dd25195.jpeg', 'KARLA', 6, 'NEPHI', 34, 'TESTE 2', NULL, 'TESTE 3', NULL, 'TESTE 4', 'fotos/foto132318201909055d713676c2720.jpeg', 'fotos/foto132318201909055d713676c988d.png', 'fotos/foto132318201909055d713676ca0a5.jpeg', 'fotos/foto132318201909055d713676cba65.jpeg', 'fotos/foto132318201909055d713676ccd45.jpeg', NULL, 'davi-bispo@hotmail.com', NULL, '$2y$10$Y1HMwgJWcuYUe0rSR6wy2umL9Xt4tn243rp6lf2luzCnh6SYm75XW', '6PltNJiJPLBMk6hJuxbAGBdJc8WAeNkOandCpsLLYXuOtKwVyAi8iLDP9bax', '2019-08-22 12:00:32', '2019-09-23 15:50:09'),
(4, '1', '0', 'Morador', '8', '102', 'MARIA GLICIA GONçALVES GAMA', '(82) 9 9967-8542', NULL, '156.325.444-55', 'F', '1987-05-01', 'fotos/foto105712201909165d7f94b809cf6.jpeg', '', NULL, '', NULL, '', NULL, '', NULL, '', '0', '0', '0', '0', '0', NULL, 'glicia@gmail.com', NULL, '$2y$10$OQ6Hg7G5ti7n5DKU9ewsdu/ikqI7/yTcbpo4F3o43.CDQ6eTKeWVi', NULL, '2019-09-16 13:57:12', '2019-09-23 15:49:17'),
(5, '0', '0', 'Morador', '5', '002', 'TESTE CPF', '(82) 9 8840-1122', NULL, '444.444.444-44', 'M', '1987-02-05', 'fotos/foto113636201909175d80ef746a3a7.jpeg', '', NULL, '', NULL, '', NULL, '', NULL, '', '0', '0', '0', '0', '0', NULL, 'testecpf@gmail.com', NULL, '$2y$10$xtfM1dAp.NYgYgiLKvH7bujapNOU8zVTT4wew.taqTn1o1TMVFvDm', NULL, '2019-09-17 14:36:36', '2019-09-17 14:36:36'),
(6, '0', '0', 'Proprietário', '8', '201', 'MARIO CESAR', '(82) 9 9987-5522', NULL, '555.555.555-55', 'M', '1987-02-05', 'fotos/foto153624201909175d8127a87414f.jpeg', '', NULL, '', NULL, '', NULL, '', NULL, '', '0', '0', '0', '0', '0', NULL, 'angela.dutra@outlook.com', NULL, '$2y$10$LlvFrqVO5yhAyMRNcDSiZu5FGjRue1fl055T8Z4nbnb7U/95OoeSu', NULL, '2019-09-17 18:36:25', '2019-09-17 18:36:25'),
(7, '0', '0', 'Proprietário', '2', '002', 'TESTE CPF 1', '(82) 9 9999-9999', NULL, '111.111.111-11', 'M', '1988-01-01', 'fotos/foto074732201909215d85ffc49455e.jpeg', '', NULL, '', NULL, '', NULL, '', NULL, '', '0', '0', '0', '0', '0', NULL, 'davi-bispo@hotmail.com', NULL, '$2y$10$zfLQRucAb8.eZMcbePwAX.O4AO5jyKG6sMu5WMK2vslLDPRjJgBo.', NULL, '2019-09-21 10:47:33', '2019-09-21 10:47:33'),
(9, '0', '0', 'Inquilino', '6', '201', 'TESTE CPF 3', '(82) 9 4444-4444', NULL, '123.456.789-55', 'M', '1988-01-02', 'fotos/foto082809201909215d860949de171.jpeg', '', NULL, '', NULL, '', NULL, '', NULL, '', '0', '0', '0', '0', '0', NULL, 'davi-bispo@hotmail.com', NULL, '$2y$10$dig4QkiuIT6L25Re2tHW.u8kokuerM2aXCNpxqWP234HJOuUJ4WJW', NULL, '2019-09-21 11:28:10', '2019-09-21 11:28:10');

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
(2, 'Carro', 'NMD4533', 'FORD FIESTA HATCH', 'Prata', 1, '1', '2019-09-04 15:42:23', '2019-09-04 15:42:23'),
(3, 'Moto', 'NMB-8788', 'HONDA TITAN 150', 'Cinza', 1, '1', '2019-09-04 15:50:36', '2019-09-04 15:50:36');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notificacao_multas`
--
ALTER TABLE `notificacao_multas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ocorrencia_tipos`
--
ALTER TABLE `ocorrencia_tipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
