-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2023 às 21:43
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gest_eventos`
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
  `nome` varchar(191) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco_de_aluguer` double NOT NULL,
  `disponibilidade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_url` varchar(191) DEFAULT NULL,
  `categoria_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aparelhos`
--

INSERT INTO `aparelhos` (`id`, `nome`, `descricao`, `preco_de_aluguer`, `disponibilidade_id`, `created_at`, `updated_at`, `image_url`, `categoria_id`) VALUES
(1, 'enim', 'Temporibus maxime voluptatem nesciunt non consequuntur quis. Cumque laudantium rem expedita cum ipsa. Vel voluptas id quo esse sapiente quis ad. Commodi omnis minus beatae ut veniam amet et.', 87.83, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(2, 'rem', 'Alias mollitia quo rem et aut eligendi et aut. Fugit in rerum veritatis nulla.', 58.96, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(3, 'id', 'Nihil atque placeat voluptas ipsum natus. Possimus corporis iste reprehenderit soluta impedit. Quia debitis cum at tenetur et autem. Iste labore rerum ut porro quia.', 18.73, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(4, 'rerum', 'Inventore sapiente incidunt maxime voluptatum expedita. Ut eum similique quos fuga voluptatem velit enim sed. Voluptatem neque eos nihil vitae. Quos autem vero autem quos nemo aut.', 79.63, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(5, 'labore', 'Commodi eum et eius ut ut unde. Asperiores excepturi architecto nam esse. Nemo earum eum quia ipsum omnis. Mollitia unde qui recusandae est aliquam provident voluptas.', 67.89, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(6, 'consequatur', 'Corrupti cum quod optio est eius et numquam. Rerum tempora et ut expedita. Ut eum eos et consectetur iste.', 67.15, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(7, 'occaecati', 'Et et quasi animi voluptatibus debitis dolore labore. Itaque accusamus dolorum excepturi tempora. Quas beatae tempore culpa necessitatibus voluptas et. Vero eum ipsa enim omnis alias iste.', 15.49, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(8, 'veniam', 'Adipisci labore tempora ipsum excepturi dolores sit voluptas. Numquam voluptatum veniam aut ut neque. Repellendus nam expedita autem blanditiis et odio rerum exercitationem. Et doloribus ea ut et ullam quidem neque rerum.', 86.27, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(9, 'qui', 'Labore sit et exercitationem velit quis. Ullam sint quo nisi qui unde ad. Sit tenetur adipisci culpa eveniet et.', 82.13, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL),
(10, 'ut', 'Autem est est aspernatur inventore esse. Molestias eum aut sint perferendis illo. Provident expedita saepe temporibus sunt magnam quis. Nihil animi ea blanditiis repudiandae excepturi corporis facilis.', 54.19, 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disponibilidades`
--

CREATE TABLE `disponibilidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `disponibilidades`
--

INSERT INTO `disponibilidades` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Disponivel', '2023-06-04 18:07:06', '2023-06-04 18:07:06'),
(2, 'Indisponivel', '2023-06-04 18:07:06', '2023-06-04 18:07:06');

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
  `descricao` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `estado_de_alugers`
--

INSERT INTO `estado_de_alugers` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Aguardando', '2023-06-04 18:07:07', '2023-06-04 18:07:07'),
(2, 'Aceite', '2023-06-04 18:07:07', '2023-06-04 18:07:07'),
(3, 'Finalizado', '2023-06-04 18:07:07', '2023-06-04 18:07:07'),
(4, 'Em progresso', '2023-06-04 18:07:07', '2023-06-04 18:07:07'),
(5, 'Rejeitado', '2023-06-04 18:07:07', '2023-06-04 18:07:07'),
(6, 'Cancelado', '2023-06-04 18:07:07', '2023-06-04 18:07:07'),
(7, 'Aguardando pagamento', '2023-06-04 18:07:07', '2023-06-04 18:07:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_evento` date NOT NULL,
  `data_termino` date NOT NULL,
  `localizacao` varchar(191) NOT NULL,
  `estado_evento_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descricao` text NOT NULL,
  `pacote_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `data_evento`, `data_termino`, `localizacao`, `estado_evento_id`, `created_at`, `updated_at`, `descricao`, `pacote_id`, `user_id`) VALUES
(1, '2023-06-04', '2023-06-04', '847 Hagenes Springs Suite 151\nSchinnerfort, KS 17289-6212', 7, '2023-06-04 18:07:07', '2023-06-04 18:10:59', 'Tempora et eveniet nemo ut. Aut quam quia aliquam tenetur totam sed facilis. Inventore libero voluptatem dolor voluptate accusamus et. Ipsum qui provident at qui excepturi.', 2, 9),
(2, '2023-06-04', '2023-06-04', '70587 Barton Forge\nPaxtonchester, LA 66475-9890', 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', 'Iure unde rerum ut. Omnis sequi rem eaque ea laudantium. Quasi voluptatem illo in corporis culpa enim totam.', 7, 4),
(3, '2023-06-04', '2023-06-04', '23558 Hackett Parkways\nPort Caleigh, KS 88276', 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', 'Nesciunt voluptate dolore doloribus facere. Iusto voluptatem ut dolorem quod libero voluptas saepe. Occaecati reiciendis velit impedit ut.', 5, 9),
(4, '2023-06-04', '2023-06-04', '39567 Melany Curve Suite 119\nSouth Vidaview, CO 40054', 7, '2023-06-04 18:07:07', '2023-06-04 18:18:24', 'Illo at eius dolores. Rerum ab inventore dicta qui animi distinctio ducimus eveniet. Accusantium dicta aut voluptates quam voluptatem fugit. Maiores hic facere dolor sed doloremque dolore.', 9, 10),
(5, '2023-06-04', '2023-06-04', '31047 Kunde Key\nPort Sanfordtown, IN 66807', 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', 'Numquam voluptatibus perspiciatis tenetur. Sit qui ullam consequatur dolorem. Est optio blanditiis incidunt numquam nihil iste. Optio reiciendis ratione ullam tempora ut consectetur occaecati.', 8, 7),
(6, '2023-06-04', '2023-06-04', '468 Emil Drive Apt. 959\nSouth Dahlia, OR 64787', 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', 'Dolorem porro ut ipsam iure. Ex voluptatem quo numquam ut repudiandae minus reprehenderit. Commodi animi nostrum quia quisquam ipsam quibusdam. Laboriosam vel alias aut quidem magnam.', 6, 4),
(7, '2023-06-04', '2023-06-04', '250 Hoppe Loaf Suite 326\nSatterfieldberg, VT 22944-2402', 1, '2023-06-04 18:07:07', '2023-06-04 18:17:03', 'Deserunt est maiores sapiente deserunt nam. Sed commodi et rerum quasi nulla harum.', 4, 10),
(8, '2023-06-04', '2023-06-04', '2262 Lockman Fort\nTessieshire, DC 61746-8287', 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', 'Neque similique officia architecto voluptatem commodi in. Accusamus sint cumque facere distinctio qui consequatur totam. Optio quaerat eligendi doloremque sed.', 9, 4),
(9, '2023-06-04', '2023-06-04', '98411 Angie Branch\nJessicamouth, NY 21589-6657', 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', 'Dolores est maiores harum error et aliquid ut et. Officia vitae reprehenderit reprehenderit voluptas eos facere et. Reprehenderit vel ab repudiandae quos eum.', 2, 7),
(10, '2023-06-04', '2023-06-04', '1124 Arvid Crest\nNew Eleonore, MD 66069-2083', 1, '2023-06-04 18:07:07', '2023-06-04 18:07:07', 'Nam aut beatae minus sit sed excepturi. Ut officiis enim placeat debitis quia.', 3, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
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
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bi` varchar(14) NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `bi`, `type_id`) VALUES
(1, 'Sydney Jakubowski', 'edwin.wilkinson@example.com', '2023-06-04 18:07:06', '$2y$10$Foc.Ke6vCZxTyhqLPV95M..BZkw49sSPg3uuwYcAIC3tPH7eVYqG2', 'Gl3cGnJt0H', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '9009104571843', 2),
(2, 'Beryl Durgan', 'hruecker@example.net', '2023-06-04 18:07:06', '$2y$10$DcQQT3teVaEU8Dqw2ir2Jegjrww7AX5wjn/yROuyj.PAR7NEprh8m', 'oKGgGpesNb', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '5761132623581', 1),
(3, 'Imogene O\'Connell', 'stark.eriberto@example.net', '2023-06-04 18:07:06', '$2y$10$Dromf3v.6y5MaaedIW/.n.h8qi7vua.bRix9V37YgP4V4TtOBexR6', 'IGkM8zRCPg', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '86376751231897', 1),
(4, 'Antonietta Gleason', 'kyra46@example.com', '2023-06-04 18:07:06', '$2y$10$VpJdGYHPFb7HcFDxE/34AOoD1faCnjZrGYSidgIhz0Yo3H.6fpm1q', '01isgZyKRM', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '77309177676804', 1),
(5, 'Miss Adrienne Feest III', 'nasir12@example.com', '2023-06-04 18:07:06', '$2y$10$NQZ5rdM3WNQ9YfXrj2UG5.BMXBY2yMGTMUrNW78AdeRogK6tLzTau', 'sdn2jwzesbbBsChe2qJam6zCEQihG6ZKx66tpEREYj53KQkoeI80DYORA1Vf', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '8653714851944', 2),
(6, 'Prof. Justina Dickens V', 'littel.santina@example.net', '2023-06-04 18:07:07', '$2y$10$dvf55KYwDIZ5MOCRUTkW2eI4qQ/z0fnui9.V7mAF/7fkRcJ79CGOW', '8cwH1vT5jK8uz1MWklXdAVBWRT6ME8PXgccx0R4UhZHzbqpWqVnSntEXrrw1', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '47061826429652', 2),
(7, 'Miss Heidi Kuhn IV', 'alessandra.kuvalis@example.org', '2023-06-04 18:07:07', '$2y$10$vFksyzRODzQU2j6gMoTdz.oXyXjpiRp1irjOyL9KlPiXK8Z1Egd3O', 'zAt3sicorI', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '37388765364054', 1),
(8, 'Jasper Romaguera', 'elody26@example.com', '2023-06-04 18:07:07', '$2y$10$zm5udBWjH64EjftamslWmOw1q1CATF3mo9ssveUdal.gLmZGqFqOm', 'vPhEbhH4Ba', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '75141961427707', 1),
(9, 'Mrs. Antonetta Grant', 'maybell.hauck@example.org', '2023-06-04 18:07:07', '$2y$10$/enlrVYpRZgViujp57bKBOY0R9QWwgoyCzmEjgCGO7OxT4DhQxZpO', '5edp23HB3J', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '2416098723079', 2),
(10, 'Mr. Nash Conn', 'malika94@example.org', '2023-06-04 18:07:07', '$2y$10$Krneib96pG9i8FhV.PPaheuccYRHN.WZIqTUQRFALPHxIyVK0kRIS', 'r7E3Yt5Jx3', '2023-06-04 18:07:07', '2023-06-04 18:07:07', '64958183860504', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usertypes`
--

CREATE TABLE `usertypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) NOT NULL,
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
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alugers`
--
ALTER TABLE `alugers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alugers_my_user_id_foreign` (`my_user_id`),
  ADD KEY `alugers_estado_de_aluger_id_foreign` (`estado_de_aluger_id`);

--
-- Índices para tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aparelhos_disponibilidade_id_foreign` (`disponibilidade_id`),
  ADD KEY `aparelhos_categoria_id_foreign` (`categoria_id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `disponibilidades`
--
ALTER TABLE `disponibilidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emprestimos_aluger_id_foreign` (`aluger_id`),
  ADD KEY `emprestimos_aparelho_id_foreign` (`aparelho_id`);

--
-- Índices para tabela `estado_de_alugers`
--
ALTER TABLE `estado_de_alugers`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventos_estado_evento_id_foreign` (`estado_evento_id`),
  ADD KEY `eventos_pacote_id_foreign` (`pacote_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_type_id_foreign` (`type_id`);

--
-- Índices para tabela `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alugers`
--
ALTER TABLE `alugers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disponibilidades`
--
ALTER TABLE `disponibilidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado_de_alugers`
--
ALTER TABLE `estado_de_alugers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
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
