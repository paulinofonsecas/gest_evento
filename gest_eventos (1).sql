-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Abr-2023 às 11:38
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gest_eventos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alugers`
--

CREATE TABLE `alugers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `my_user_id` bigint(20) UNSIGNED NOT NULL,
  `data_aluger` date NOT NULL,
  `data_devolucao` date NOT NULL,
  `estado_de_aluger_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aparelhos`
--

CREATE TABLE `aparelhos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `preco_de_aluguer` double NOT NULL,
  `disponibilidade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aparelhos`
--

INSERT INTO `aparelhos` (`id`, `nome`, `descricao`, `preco_de_aluguer`, `disponibilidade_id`, `created_at`, `updated_at`, `image_url`, `categoria_id`) VALUES
(1, 'Pacote de festar', 'Testa', 12000, 1, '2023-04-06 14:01:57', '2023-04-06 14:01:57', '300343053_609532977544936_4885636820072288328_n_1680789717.jpg', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disponibilidades`
--

CREATE TABLE `disponibilidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `disponibilidades`
--

INSERT INTO `disponibilidades` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'disponivel', '2023-02-27 18:17:47', '2023-02-27 18:17:47'),
(2, 'ocupado', '2023-02-27 18:17:47', '2023-02-27 18:17:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aluger_id` bigint(20) UNSIGNED NOT NULL,
  `aparelho_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_de_alugers`
--

CREATE TABLE `estado_de_alugers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `estado_de_alugers`
--

INSERT INTO `estado_de_alugers` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Aguardando', '2023-02-27 18:17:47', '2023-02-27 18:17:47'),
(2, 'Aceite', '2023-02-27 18:17:47', '2023-02-27 18:17:47'),
(3, 'Finalizado', '2023-02-27 18:17:47', '2023-02-27 18:17:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_evento` date NOT NULL,
  `data_termino` date NOT NULL,
  `localizacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_evento_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pacote_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `data_evento`, `data_termino`, `localizacao`, `estado_evento_id`, `created_at`, `updated_at`, `descricao`, `pacote_id`, `user_id`) VALUES
(1, '2023-04-06', '2023-04-08', 'Andulo', 1, '2023-04-06 14:13:21', '2023-04-06 14:13:21', 'teste', 1, 1),
(2, '2023-05-08', '2023-05-10', 'Andulo', 1, '2023-04-06 14:13:21', '2023-04-06 14:13:21', 'teste', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_20_013941_add_bi_and_localizacao_field', 1),
(6, '2023_02_20_031304_create_disponibilidades_table', 1),
(7, '2023_02_20_032404_aparelho', 1),
(8, '2023_02_20_033420_create_categorias_table', 1),
(9, '2023_02_20_033507_create_usertypes_table', 1),
(10, '2023_02_20_034744_add_usertype_column', 1),
(11, '2023_02_20_101440_aparelho_categoria', 1),
(12, '2023_02_21_075356_add_image_url_on_aparelho', 1),
(13, '2023_02_21_222402_create_estado_de_aluger_table', 1),
(14, '2023_02_21_222549_create_alugers_table', 1),
(15, '2023_02_21_234438_delete_periodo_minimo_de_aluger_on_aparelhos_table', 1),
(16, '2023_02_22_000418_create_emprestimos_table', 1),
(17, '2023_02_22_002034_delete_aparelho_categorias_table', 1),
(18, '2023_02_22_002115_add_category_id_on_aparelho_table', 1),
(19, '2023_03_01_183103_delete_category_on_aparelho', 1),
(20, '2023_03_09_033359_create_eventos_table', 1),
(21, '2023_03_09_034505_add_descricao_on_eventos_table', 1),
(22, '2023_03_09_092312_add_pacote_id_column', 1),
(23, '2023_04_04_211915_add_userid_on_evento', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bi` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `bi`, `type_id`) VALUES
(1, 'paulino fonseca', 'paulino@gmail.com', NULL, '$2y$10$G4DvZXsZxbJoLGZ1pq6IbeEc7/gT.4B3BzTh7dM36pHNsY0CjcUyi', NULL, '2023-04-06 13:05:19', '2023-04-06 13:05:19', '00412705BE041', 2),
(2, 'lucas mendes', 'lucas@gmail.com', NULL, '$2y$10$WaambW/naBPFT7ARooxOxecnUGu7//Rw7v6k2JfkVZzXLQ6woIIVi', NULL, '2023-04-11 13:57:36', '2023-04-11 13:57:36', '004100865BE233', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usertypes`
--

CREATE TABLE `usertypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usertypes`
--

INSERT INTO `usertypes` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'cliente', NULL, NULL),
(3, 'convidado', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alugers`
--
ALTER TABLE `alugers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alugers_my_user_id_foreign` (`my_user_id`),
  ADD KEY `alugers_estado_de_aluger_id_foreign` (`estado_de_aluger_id`);

--
-- Indexes for table `aparelhos`
--
ALTER TABLE `aparelhos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aparelhos_disponibilidade_id_foreign` (`disponibilidade_id`),
  ADD KEY `aparelhos_categoria_id_foreign` (`categoria_id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disponibilidades`
--
ALTER TABLE `disponibilidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emprestimos_aluger_id_foreign` (`aluger_id`),
  ADD KEY `emprestimos_aparelho_id_foreign` (`aparelho_id`);

--
-- Indexes for table `estado_de_alugers`
--
ALTER TABLE `estado_de_alugers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventos_estado_evento_id_foreign` (`estado_evento_id`),
  ADD KEY `eventos_pacote_id_foreign` (`pacote_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_type_id_foreign` (`type_id`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alugers`
--
ALTER TABLE `alugers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aparelhos`
--
ALTER TABLE `aparelhos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disponibilidades`
--
ALTER TABLE `disponibilidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estado_de_alugers`
--
ALTER TABLE `estado_de_alugers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alugers`
--
ALTER TABLE `alugers`
  ADD CONSTRAINT `alugers_estado_de_aluger_id_foreign` FOREIGN KEY (`estado_de_aluger_id`) REFERENCES `estado_de_alugers` (`id`),
  ADD CONSTRAINT `alugers_my_user_id_foreign` FOREIGN KEY (`my_user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  ADD CONSTRAINT `aparelhos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `aparelhos_disponibilidade_id_foreign` FOREIGN KEY (`disponibilidade_id`) REFERENCES `disponibilidades` (`id`);

--
-- Limitadores para a tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `emprestimos_aluger_id_foreign` FOREIGN KEY (`aluger_id`) REFERENCES `alugers` (`id`),
  ADD CONSTRAINT `emprestimos_aparelho_id_foreign` FOREIGN KEY (`aparelho_id`) REFERENCES `aparelhos` (`id`);

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_estado_evento_id_foreign` FOREIGN KEY (`estado_evento_id`) REFERENCES `estado_de_alugers` (`id`),
  ADD CONSTRAINT `eventos_pacote_id_foreign` FOREIGN KEY (`pacote_id`) REFERENCES `aparelhos` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `usertypes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
