-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2019 às 12:12
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
(2, 'CHURRASQUEIRA 1', '15.00', 'NãO UTILIZAR SOM ALTO.', '1', '2019-09-06 15:47:28', '2019-09-06 15:47:28');

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
  `ocorrencia_tipo` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
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
(3, 'Cachorro', 'Preto', 'Black', 'Teste', 'pets/pet112538201909055d711ae2e6565.jpeg', 'pets/pet111657201909045d6fc759cdc13.pdf', 1, '1', '2019-09-04 14:16:58', '2019-09-05 14:25:38'),
(4, 'Outro', 'Azul', 'Piriquito', 'Teste', 'pets/pet114946201909045d6fcf0ac526e.jpeg', 'pets/pet114946201909045d6fcf0abfd5b.pdf', 2, '1', '2019-09-04 14:49:46', '2019-09-04 14:49:46'),
(5, 'Cachorro', 'Tem pelos marrons com detalhes brancos.', 'Totó', 'Tem coleira preta com identificação padrão.', 'pets/pet115320201909045d6fcfe02ccc9.jpeg', NULL, 2, '1', '2019-09-04 14:53:20', '2019-09-04 14:53:20'),
(6, 'Gato', 'Pelos brancos', 'Bichano', NULL, 'pets/pet122708201909045d6fd7ccaf7de.jpeg', NULL, 2, '1', '2019-09-04 15:27:08', '2019-09-04 15:27:08'),
(7, 'Gato', 'dafdd', 'Black', NULL, 'pets/pet122727201909045d6fd7dfb1cf7.jpeg', NULL, 2, '1', '2019-09-04 15:27:27', '2019-09-04 15:27:27'),
(8, 'Gato', 'Branco', 'Bob', 'Usa coleira preta.', 'pets/pet111751201909055d71190fa458b.jpeg', 'pets/pet111751201909055d71190f9d9df.pdf', 3, '1', '2019-09-05 14:17:51', '2019-09-05 14:19:16');

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
(1, '1', '9', 'Inquilino', '1', '203', 'DAVI BISPO DE OLIVEIRA', '(82)99969-3407', '(82)99656-4390', '04122657458', 'M', '1982-07-11', 'fotos/foto112533201909035d6e77dd25195.jpeg', 'KARLA', 6, 'NEPHI', 34, 'TESTE 2', NULL, 'TESTE 3', NULL, 'TESTE 4', 'fotos/foto132318201909055d713676c2720.jpeg', 'fotos/foto132318201909055d713676c988d.png', 'fotos/foto132318201909055d713676ca0a5.jpeg', 'fotos/foto132318201909055d713676cba65.jpeg', 'fotos/foto132318201909055d713676ccd45.jpeg', NULL, 'davi-bispo@hotmail.com', NULL, '$2y$10$Y1HMwgJWcuYUe0rSR6wy2umL9Xt4tn243rp6lf2luzCnh6SYm75XW', NULL, '2019-08-22 12:00:32', '2019-09-05 16:23:18'),
(2, '1', '0', 'Inquilino', '5', '101', 'NEILTON LEITE DA SILVA COSTA', '(82)99969-3852', '(82)33442-365', '04122656789', 'M', '1956-05-01', 'fotos/foto122449201909045d6fd741ed9d4.jpeg', 'DAVI', 45, 'NEPHI', 23, 'KARLA', 10, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'neilton@gmail.com', NULL, '$2y$10$OLREet./9QYOlw0TOLFwieeFWWCEYheTCNDmhCEtJucUtx0Ybp7fu', NULL, '2019-09-04 14:47:42', '2019-09-04 15:24:49'),
(3, '1', '0', 'Morador', '5', '002', 'JOãO DóRIA DA SILVA', '(82)99969-6411', '(82)98875-1122', '04122654896', 'M', '1875-02-01', 'fotos/foto110550201909055d71163eacda5.jpeg', 'DAVI', 12, 'NEPHI BISPO', 6, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'joao@gmail.com', NULL, '$2y$10$u4GSFJHAMFEMw.duGXSCX.2kF9CqO1Ah65WnE./9r8Bnh3N97s5b6', NULL, '2019-09-05 13:55:20', '2019-09-05 14:06:12');

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
(1, 'Carro', 'NHM45K22', 'HYUNDAI HB 20 XI', 'Cinza', 2, '1', '2019-09-04 14:54:24', '2019-09-04 14:54:24'),
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ocorrencia_tipos`
--
ALTER TABLE `ocorrencia_tipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
