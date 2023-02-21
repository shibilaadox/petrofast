-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2023 at 04:22 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adoxamuf_petrofast_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `firebases`
--

CREATE TABLE `firebases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token_val` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firebases`
--

INSERT INTO `firebases` (`id`, `user_id`, `token_val`, `created_at`, `updated_at`) VALUES
(1, 6, 'eAe57AC0QguAW-mmRvBZV0:APA91bGeYtY43eDeZBKNNT6EVVZxFnLW0zwUyjHooiNqpdgIGEaB8K6yj1cdlVLAM3fDkTUJA1ICdJyXkAPi9MzayHLku_XhHn72W-94rPYuma0EfgyhaErF_0rjY9sfX498clC6NJKm', '2021-10-19 17:59:06', '2021-12-04 11:38:27'),
(2, 10, 'ebs6qoIiRPKP_S2xvJiIFv:APA91bEieJLwiNq7uu8zmhQVdUS2zVLw4-mzkt9VCFQ6KGiQn0r2Nt2FwCoaLuzCXDqCYx3rqADv2QGLQTNmHu0Mm8_kMlD9A6SOOpsPQFSpKhg1MWEraPbwY8ATBnqb7kfjUYsdI_Fa', '2021-10-20 15:32:09', '2021-11-30 12:40:57'),
(3, 11, 'fYLR0oP0Syyd5co2DIDxB-:APA91bFx9iC6LHTOkSWvWjOGtIWKTYU6vqoJOvIjl_QnnHr2VUwScuVLayvPIpH17plEPpmSQZTX7XqYjVVidL9BXT7MnNEFzAFfpUfWTD3U0WEb2mGqA0sJSQye8Z7LRI_GBGnPa4Ss', '2021-10-21 11:22:14', '2021-11-24 12:14:21'),
(4, 2, 'fFZIfOoeRZWebK8fq3YcD_:APA91bFrV5Nv2i-FF1_WNR6WT3hsceYt-IVRh-lXKUukYKJEHUPUlecMYLONVGvsaBa1QrLDdMga9fDTBMGgJwN_Q0vis7beTGvlnoY0Epxs7eKWTS1CwBIcWXuH-vaZ2b1w_nMi8xs1', '2021-10-22 15:22:03', '2021-10-22 15:22:03'),
(5, 16, 'eJrutvM_RO--yMLRWYmPc2:APA91bGcyC19ipeqwYumxUMxckuggho1vxD_K42xDUqUNb-BMvmku1AxGkGsQyIFnXLX9dCpsyKs2auNPe9-0aNtbaH3KcwjASJUSrds6SdDKFsNmHPg8T7xyyFpQA_Q3WNOOSa3quAc', '2021-10-27 09:37:06', '2021-11-29 12:33:52'),
(6, 18, 'eJrutvM_RO--yMLRWYmPc2:APA91bGcyC19ipeqwYumxUMxckuggho1vxD_K42xDUqUNb-BMvmku1AxGkGsQyIFnXLX9dCpsyKs2auNPe9-0aNtbaH3KcwjASJUSrds6SdDKFsNmHPg8T7xyyFpQA_Q3WNOOSa3quAc', '2021-10-27 15:06:15', '2021-11-29 12:18:06'),
(7, 20, 'f79SRswkSEavyynK1QFwor:APA91bExGI9sn842JyJxEP7ezRQhwhX-eaA0F3mfQgEyNrxG_lr7QRBxrS8VQVKpzPqXQKrL2gJvcQR0s02hkOEnqQJV8ZSLewDO2oGth2rIA0Vmv9f47HMHGNVZzQIOqjZtPdJMfCsF', '2021-10-28 12:20:15', '2021-12-01 11:14:40'),
(8, 1, 'eUfRuDXCSGGPMMxczescMY:APA91bE8P1m0u4OmEeyRhVM__EVlPT-0JrwIXGfovXJfRGqJiFbQKiu93gbnJO2h971UC75rzlfyTYhUByXSvvbmhNGSATI_N7WP-s2G4coEtDVcYgdB0xD_KMANcpANfic3aFD5UrD0', '2021-11-22 10:26:40', '2021-11-22 10:26:40'),
(9, 29, 'c-62K0dKQQ-teBzp5o8pjG:APA91bGnjBEDc7CylD2vKJyARG5GjAkHTZArTgLyNxnugbivY56gU-Lze3oj5CDwChfKDcE1QsxmnZJHGDFrn3CPRf7dEiCVop_ynhb73Dw3qNKpFq9Cm_W1axrLJZ_nQxS_zn500dc0', '2023-01-17 03:58:58', '2023-01-30 05:45:01'),
(10, 30, 'ew1evnbmQ5uU0Wl6J72HnQ:APA91bHxIh0fJf02pS8iKs0Xv4l1a_bAsazFhdWJjdeOEzAkAD5Nh5259M2sk7-8AMXK-A03kmmniqJJC-rtHeMCOrHxEbWRTt7UCaNLg4p7Zk6FhJP0Z9mYr5rInHGCqWHyQ7fW-gaf', '2023-01-18 07:32:06', '2023-01-31 10:40:38'),
(11, 31, 'eBcCkb9xSBmMfFlfcQfs88:APA91bECu60U1EdPS1RKHGlbO9GUMDBZVkZBSZZPLTmO37aORxg0pmH8znsxMhZpeUraFQiD58KGIi4WXIt8enDuI6Bgxwca-3uG0cB_RB9JESbHzpuhNgiCNJyE1sFGF3KwMqL8kQ49', '2023-01-18 07:32:42', '2023-01-26 07:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `f_m_r_s`
--

CREATE TABLE `f_m_r_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` int(11) NOT NULL,
  `issue_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_notes` text COLLATE utf8mb4_unicode_ci,
  `employee_images` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station_id` int(11) NOT NULL,
  `supervisor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fmr_manager` int(11) DEFAULT NULL,
  `fmr_employee` int(11) DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_m_r_s`
--

INSERT INTO `f_m_r_s` (`id`, `category`, `issue_type`, `priority`, `notes`, `images`, `employee_notes`, `employee_images`, `status`, `station_id`, `supervisor`, `deadline`, `report_num`, `fmr_manager`, `fmr_employee`, `date`, `created_at`, `updated_at`) VALUES
(44, 1, '3', 'High', 'Testing', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/011820231049407c5850d6-fa04-44c3-94b0-554656d93983.JPEG\",\"id\":\"1674038975298\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/011820231049407c5850d6-fa04-44c3-94b0-554656d93983.JPEG\"}]', 'jhdfjakfhbj', '[null]', 'New', 1, '29', '24-01-2023', '#4835837491', 30, 1, '2023-01-18', '2023-01-18 10:49:40', '2023-01-24 05:42:41'),
(45, 1, '1', 'High', 'Fmrs', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/011920230454147786a5a5-1118-40ab-bb83-5f2ace98e4af.JPEG\",\"id\":\"1674104049614\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/011920230454147786a5a5-1118-40ab-bb83-5f2ace98e4af.JPEG\"}]', NULL, NULL, 'New', 1, '29', '2023-01-25 14:48:02', '#4978925177', 30, 31, '2023-01-19', '2023-01-19 10:24:14', '2023-01-23 09:18:08'),
(46, 1, '1', 'High', 'Testing', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/012020230539204dfaa996-3386-4657-a7b9-9f13d5a52f5c.JPEG\",\"id\":\"1674193157762\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/012020230539204dfaa996-3386-4657-a7b9-9f13d5a52f5c.JPEG\"}]', 'Ongoing', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023093301833c9740-f6cc-429e-9ced-89a9b493ca9a.JPEG\",\"id\":\"1674466378004\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023093301833c9740-f6cc-429e-9ced-89a9b493ca9a.JPEG\"}]', 'Delayed', 1, '29', '2023-01-30 14:46:33', '#4525316594', 30, 31, '2023-01-20', '2023-01-24 11:09:21', '2023-01-23 09:33:01'),
(47, 1, '3', 'High', 'Test', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/012020231002045d0726f8-b316-45cd-a3a4-891f99fbdfe4.JPEG\",\"id\":\"1674208920242\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/012020231002045d0726f8-b316-45cd-a3a4-891f99fbdfe4.JPEG\"}]', 'Fixing', '[null]', 'Completed', 1, '29', '2023-01-29 10:58:23', '#5885086472', 30, 31, '2023-01-20', '2023-01-23 10:58:19', '2023-01-23 06:51:09'),
(48, 1, '3', 'High', 'App testing', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023100118026343e0-6978-4364-974b-25292d88df19.JPEG\",\"id\":\"1674468061544\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023100118026343e0-6978-4364-974b-25292d88df19.JPEG\"}]', 'Fix', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023100254118e857a-b364-429d-b964-873318d0b6de.JPEG\",\"id\":\"1674468170628\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023100254118e857a-b364-429d-b964-873318d0b6de.JPEG\"}]', 'Completed', 1, '29', '2023-01-25 15:31:50', '#4730980553', 30, 31, '2023-01-23', '2023-01-23 15:31:18', '2023-01-23 10:02:54'),
(49, 1, '3', 'High', 'Vvv', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102655f3b4f650-1e17-4216-9e95-33b7664fad6a.JPEG\",\"id\":\"1674469612960\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102655f3b4f650-1e17-4216-9e95-33b7664fad6a.JPEG\"}]', 'Vg', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102805e37a7493-211f-42b8-a1a9-661027fe2390.JPEG\",\"id\":\"1674469681846\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102805e37a7493-211f-42b8-a1a9-661027fe2390.JPEG\"}]', 'Completed', 1, '29', '2023-01-25 15:57:14', '#9360258856', 30, 31, '2023-01-23', '2023-01-23 15:56:55', '2023-01-23 10:28:06'),
(50, 1, '1', 'LOW', 'testnote', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102655f3b4f650-1e17-4216-9e95-33b7664fad6a.JPEG\",\"id\":\"1674469612960\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102655f3b4f650-1e17-4216-9e95-33b7664fad6a.JPEG\"}]', NULL, NULL, 'New', 3, '29', NULL, '#4771666399', 30, NULL, '2023-01-24', '2023-01-24 05:06:56', '2023-01-24 05:06:56'),
(51, 1, '1', 'high', 'testnotess', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102655f3b4f650-1e17-4216-9e95-33b7664fad6a.JPEG\",\"id\":\"1674469612960\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102655f3b4f650-1e17-4216-9e95-33b7664fad6a.JPEG\"}]', NULL, NULL, 'New', 3, '30', NULL, '#2785319057', 30, NULL, '2023-01-24', '2023-01-24 05:09:17', '2023-01-24 05:09:17'),
(52, 1, '3', 'high', 'testnotess', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102655f3b4f650-1e17-4216-9e95-33b7664fad6a.JPEG\",\"id\":\"1674469612960\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102655f3b4f650-1e17-4216-9e95-33b7664fad6a.JPEG\"}]', NULL, NULL, 'New', 4, '30', '2023-01-27 13:55:35', '#6745668163', 30, 31, '2023-01-24', '2023-01-24 08:12:02', '2023-01-25 10:56:12'),
(56, 1, '1', 'High', 'Testing ...', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023095635f21ad4ef-26f6-43f2-9380-f30e473e2c8f.JPEG\",\"id\":\"1674554192572\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023095635f21ad4ef-26f6-43f2-9380-f30e473e2c8f.JPEG\"}]', 'Fixed', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023095826c278aadd-5816-48f2-b5c0-cbfe433efae4.JPEG\",\"id\":\"1674554303781\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023095826c278aadd-5816-48f2-b5c0-cbfe433efae4.JPEG\"}]', 'Completed', 1, '29', '2023-01-26 15:27:04', '#7671233848', 30, 31, '2023-01-24', '2023-01-24 15:26:35', '2023-01-24 09:58:26'),
(57, 1, '1', 'High', 'Hgh', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/012620230751317a54df16-c2bd-4c43-a6bd-0156bddfa00e.JPEG\",\"id\":\"1674719477250\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/012620230751317a54df16-c2bd-4c43-a6bd-0156bddfa00e.JPEG\"},{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/012620230751320cefb07e-ea18-4bf4-8bb9-6cdadb04cb1a.JPEG\",\"id\":\"1674719483179\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/012620230751320cefb07e-ea18-4bf4-8bb9-6cdadb04cb1a.JPEG\"}]', 'Gg', '[{\"uri\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01262023075609a0072870-755b-4c7b-8180-cd727cabe094.JPEG\",\"id\":\"1674719767844\",\"imgname\":\"https://odoos.in/apps/PetroFast_New/public/uploads/01262023075609a0072870-755b-4c7b-8180-cd727cabe094.JPEG\"}]', 'Ongoing', 1, '29', '2023-01-31 10:53:40', '#9418767910', 30, 31, '2023-01-26', '2023-01-26 10:51:32', '2023-01-26 07:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `issuecategories`
--

CREATE TABLE `issuecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issuecategories`
--

INSERT INTO `issuecategories` (`id`, `category_name`, `category_name_ar`, `created_at`, `updated_at`) VALUES
(1, 'General Site', 'الموقع العام', '2021-10-16 01:40:35', '2021-10-16 01:45:01'),
(3, 'Mosque and toilets', 'المسجد ودورات المياة', '2021-10-16 01:42:10', '2021-10-16 01:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `issuetypes`
--

CREATE TABLE `issuetypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue_category` int(11) NOT NULL,
  `issue_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_type_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issuetypes`
--

INSERT INTO `issuetypes` (`id`, `issue_category`, `issue_type`, `issue_type_ar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Electrical malfunctions', 'اعطال سباكة', '2021-10-17 15:37:39', '2021-10-17 15:39:59'),
(3, 1, 'Test', 'اختبار', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2021_09_30_175859_create_sessions_table', 2),
(7, '2021_09_30_192227_create_roles_table', 3),
(8, '2021_10_01_115908_create_stations_table', 4),
(9, '2021_10_04_080930_add_more_fields_to_users_table', 5),
(10, '2021_10_14_180624_create_surveyquestions_table', 6),
(11, '2021_10_16_054527_create_issuecategories_table', 7),
(12, '2021_10_16_062545_create_issuetypes_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shibila.aysha@gmail.com', '$2y$10$uTixucZy0MtPKGN4CaG3beingQsCzvC5VB6fiuaLXwcfHswtarf/i', '2021-11-06 11:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'auth_token', 'c0af5f03e8b24adfda0aa05d3864ded028f6a9b16e961b27a474a34e671d15b0', '[\"*\"]', NULL, '2021-10-17 23:37:31', '2021-10-17 23:37:31'),
(2, 'App\\Models\\User', 2, 'auth_token', '15545a0150b9a71bc114a67811eaf1e3c08fd5b8de0ca4b9eca2576c77ca24c8', '[\"*\"]', NULL, '2021-10-18 00:19:21', '2021-10-18 00:19:21'),
(3, 'App\\Models\\User', 2, 'auth_token', 'd4c118d1e1a69f6e5653e7cdaa1f4a162b914460c165fc92b6d8e747f1f90fad', '[\"*\"]', NULL, '2021-10-18 00:19:45', '2021-10-18 00:19:45'),
(4, 'App\\Models\\User', 2, 'auth_token', '9c9da91472db504c611c5a784d4ab175d1ce23df5b3b942f1a04fa33dde93b1c', '[\"*\"]', NULL, '2021-10-18 00:20:52', '2021-10-18 00:20:52'),
(5, 'App\\Models\\User', 2, 'auth_token', '3f645cd5b849f3f52e2132de2adecdb6a3299b8ba518e5fa1a448c2a152c68db', '[\"*\"]', NULL, '2021-10-18 00:21:27', '2021-10-18 00:21:27'),
(6, 'App\\Models\\User', 2, 'auth_token', '5459617dbdc7303f6fb3840bcdc229690e82fc24efc8b4bb429a4eed5fba95cb', '[\"*\"]', NULL, '2021-10-18 11:00:07', '2021-10-18 11:00:07'),
(7, 'App\\Models\\User', 2, 'auth_token', '18e3eb6839b956e1128eb2ae863ce6c8e92c53b6251117025c45015b4597c54e', '[\"*\"]', NULL, '2021-10-18 11:01:10', '2021-10-18 11:01:10'),
(8, 'App\\Models\\User', 2, 'auth_token', '3d7fd4c8c5f7bed2328276928b0fa792b433153555de1985e8316edcae128e90', '[\"*\"]', NULL, '2021-10-18 11:26:17', '2021-10-18 11:26:17'),
(9, 'App\\Models\\User', 2, 'auth_token', '4d103b66ba4636f6f50145b5472589d5afe27fbd12b18617fb9c3e2df8e456cc', '[\"*\"]', NULL, '2021-10-18 11:26:33', '2021-10-18 11:26:33'),
(10, 'App\\Models\\User', 2, 'auth_token', '990cc801122bfc77b527661a33eaa614d13a405ee8b99c2839b22ab3ee966ed2', '[\"*\"]', NULL, '2021-10-18 11:26:59', '2021-10-18 11:26:59'),
(11, 'App\\Models\\User', 2, 'auth_token', '77c3867c177a08d1ca6b1678115eb2708354bec27d413ef407af93a3a5248455', '[\"*\"]', NULL, '2021-10-18 11:40:10', '2021-10-18 11:40:10'),
(12, 'App\\Models\\User', 2, 'auth_token', 'dd38946e0427272297c08dd447087f101052f468f5dee4ce3c4b7260e4046009', '[\"*\"]', NULL, '2021-10-18 12:08:41', '2021-10-18 12:08:41'),
(13, 'App\\Models\\User', 2, 'auth_token', '8893fe1eb1093deca3874b9c42383378add6a2810430ffb664814d79302abad2', '[\"*\"]', NULL, '2021-10-18 12:15:51', '2021-10-18 12:15:51'),
(14, 'App\\Models\\User', 2, 'auth_token', '0020a8fadcdd88c0c6bfa0b753be185ba2117e53a1a7a4fe27793549e12d19c4', '[\"*\"]', NULL, '2021-10-18 12:18:29', '2021-10-18 12:18:29'),
(15, 'App\\Models\\User', 2, 'auth_token', 'ec3a705875e97fb076c3ff2533a8db767de4b01570460ab974cfaa7167c05fe5', '[\"*\"]', NULL, '2021-10-18 12:40:51', '2021-10-18 12:40:51'),
(16, 'App\\Models\\User', 2, 'auth_token', 'cf657e860367a12d545686ccc186ca9d2026245b623f88fd26266a56985ba746', '[\"*\"]', NULL, '2021-10-18 12:41:57', '2021-10-18 12:41:57'),
(17, 'App\\Models\\User', 2, 'auth_token', '7bc3d1b421759ad214b9ace9e7caf484a76a1ea146592735cdbdbf4cc0582450', '[\"*\"]', NULL, '2021-10-18 12:42:09', '2021-10-18 12:42:09'),
(18, 'App\\Models\\User', 2, 'auth_token', '1830d78019a8447afdbd93a96e5d5558c31846880c1d80ea8630547b64f47496', '[\"*\"]', NULL, '2021-10-18 12:48:26', '2021-10-18 12:48:26'),
(19, 'App\\Models\\User', 2, 'auth_token', '018fbb532e0ed51da91ec579d81c2f206540a84c951df969f619f37993bc8773', '[\"*\"]', NULL, '2021-10-18 12:49:10', '2021-10-18 12:49:10'),
(20, 'App\\Models\\User', 2, 'auth_token', '952ba05350388345a57586c10ff790b650b92d19c14d248485416f097972ec06', '[\"*\"]', NULL, '2021-10-18 12:51:04', '2021-10-18 12:51:04'),
(21, 'App\\Models\\User', 2, 'auth_token', '5a5467e685d9cc063de2d23c280b3fe116fa44a82127b4be0d3a0f074ad8e63a', '[\"*\"]', NULL, '2021-10-18 12:53:24', '2021-10-18 12:53:24'),
(22, 'App\\Models\\User', 2, 'auth_token', '4d8349a50f59ccc39f3d0cc90973c738207cc4e207c7cb5779d4e6f8904f20f2', '[\"*\"]', NULL, '2021-10-18 12:57:15', '2021-10-18 12:57:15'),
(23, 'App\\Models\\User', 2, 'auth_token', '8a874a135b6c961c89763dc32848d6cefe7f3c764ff14162d82d008c8f63c28c', '[\"*\"]', NULL, '2021-10-18 12:58:51', '2021-10-18 12:58:51'),
(24, 'App\\Models\\User', 2, 'auth_token', '2a796d7db10f89f4b92534efc3cc2b0682d2db433b7a458b03bcd0ab322c0db9', '[\"*\"]', NULL, '2021-10-18 12:59:55', '2021-10-18 12:59:55'),
(25, 'App\\Models\\User', 2, 'auth_token', '72ee0345e66b7d51a658a9ac527b07a62c1080f3df3e86f3b54b32e16eb846a6', '[\"*\"]', NULL, '2021-10-18 13:00:04', '2021-10-18 13:00:04'),
(26, 'App\\Models\\User', 2, 'auth_token', '7f22aa22139712bee958abbbdb40c89f10f90fc53f0c387e0ffe9be4ccfd5cdd', '[\"*\"]', NULL, '2021-10-18 13:03:45', '2021-10-18 13:03:45'),
(27, 'App\\Models\\User', 2, 'auth_token', '98434fdb25182cb5a7317e509e3af597005d9a21ab7f272d14be0131218838b4', '[\"*\"]', NULL, '2021-10-18 13:04:15', '2021-10-18 13:04:15'),
(28, 'App\\Models\\User', 6, 'auth_token', '8f2738cb8ca995e5f5ac8dbb9c14420572b9fb2563fea05a50ee14bbf89dddcf', '[\"*\"]', NULL, '2021-10-18 13:26:45', '2021-10-18 13:26:45'),
(29, 'App\\Models\\User', 6, 'auth_token', 'a705180f72b08d6918dcc5a1290410a550d48736f0953bfbffb638233974dc88', '[\"*\"]', NULL, '2021-10-18 15:11:46', '2021-10-18 15:11:46'),
(30, 'App\\Models\\User', 2, 'auth_token', '5b3d9ea5850920b4445a90cf1f4a5d923ad881d610902677b1d02d831d016d5b', '[\"*\"]', NULL, '2021-10-18 15:14:17', '2021-10-18 15:14:17'),
(31, 'App\\Models\\User', 2, 'auth_token', 'a69b5678720dbb5e5198c1ffe6d8028b49cab2e007794218756cef0d80fe257b', '[\"*\"]', NULL, '2021-10-18 15:16:30', '2021-10-18 15:16:30'),
(32, 'App\\Models\\User', 2, 'auth_token', '1ca0a1a344c68bae742f26bfb12fc11184b6bb578fc50c3c3cab6dec732b936b', '[\"*\"]', NULL, '2021-10-18 15:19:04', '2021-10-18 15:19:04'),
(33, 'App\\Models\\User', 2, 'auth_token', 'fe76d716c0066a3b11c8564fead8e0bc54d27fab32f3a9a135342dbaa6ff621a', '[\"*\"]', NULL, '2021-10-18 15:24:42', '2021-10-18 15:24:42'),
(34, 'App\\Models\\User', 2, 'auth_token', 'a716b7b871b8b7bd1ab3a84bed44f2a7fa61e9ed4c1705dbdd6b0946ba08a73d', '[\"*\"]', NULL, '2021-10-18 15:31:04', '2021-10-18 15:31:04'),
(35, 'App\\Models\\User', 6, 'auth_token', 'a4f77a119cc58bc891e12214282ffe23172a4a0a8cb0944e90abfa182282beff', '[\"*\"]', NULL, '2021-10-18 15:47:48', '2021-10-18 15:47:48'),
(36, 'App\\Models\\User', 6, 'auth_token', 'b6cc437a5182f053b789e981db697f5ade41ccc18f49b60dda57bacca04bc46b', '[\"*\"]', NULL, '2021-10-18 15:49:03', '2021-10-18 15:49:03'),
(37, 'App\\Models\\User', 6, 'auth_token', '18d3f68b7f1a05fa5cd5ace5ccdd3d21aa6f3a26c84ff4d861b2ca34bfb41b54', '[\"*\"]', NULL, '2021-10-18 15:52:49', '2021-10-18 15:52:49'),
(38, 'App\\Models\\User', 6, 'auth_token', 'ca0f78f6e7e0a35bd3f78a6860fc8c05bfff11dd9dad051fed62adafd8bea7d0', '[\"*\"]', NULL, '2021-10-18 16:19:28', '2021-10-18 16:19:28'),
(39, 'App\\Models\\User', 6, 'auth_token', 'a2b4c234968acafe1d9cde65e4be9098076960e40efd7bacc2b62c92875527fa', '[\"*\"]', NULL, '2021-10-18 16:24:35', '2021-10-18 16:24:35'),
(40, 'App\\Models\\User', 6, 'auth_token', 'ecded50645fa2c624404e1a8eb1707fe5344a0ec9474ed9c242fea05e9452af0', '[\"*\"]', NULL, '2021-10-18 16:30:24', '2021-10-18 16:30:24'),
(41, 'App\\Models\\User', 6, 'auth_token', '2609ad9e87127bd5d91f7f5e44832690ec297b42d5877683eab113227d9f7b4f', '[\"*\"]', NULL, '2021-10-18 17:37:20', '2021-10-18 17:37:20'),
(42, 'App\\Models\\User', 6, 'auth_token', 'a0a897a91247550a4510c73812a66538aa548bf2df9db013897c387cfd1dd697', '[\"*\"]', NULL, '2021-10-18 17:51:11', '2021-10-18 17:51:11'),
(43, 'App\\Models\\User', 6, 'auth_token', '6ae6c92c4c7dc047eff04d88a62b48fa43658285cdaac584609d05c57e16d8b2', '[\"*\"]', NULL, '2021-10-19 10:22:40', '2021-10-19 10:22:40'),
(44, 'App\\Models\\User', 6, 'auth_token', '043e5163ded15a0046a93d255a92b6797eb68231945282f68ced6be0dbb9dca0', '[\"*\"]', NULL, '2021-10-19 10:26:49', '2021-10-19 10:26:49'),
(45, 'App\\Models\\User', 2, 'auth_token', 'c6b8c24f95d47e7410700f069b4fb474554fdedae00aea2a9e5cb2f59f1d97b0', '[\"*\"]', NULL, '2021-10-19 10:27:37', '2021-10-19 10:27:37'),
(46, 'App\\Models\\User', 6, 'auth_token', 'e6d4bac8f5ba388d40677d8119ea7a005dd38122dd04e9b54efa769ea6568964', '[\"*\"]', NULL, '2021-10-19 10:30:55', '2021-10-19 10:30:55'),
(47, 'App\\Models\\User', 6, 'auth_token', '98fed3c5efe74f98b1b6fff216abf104f65179de11d96e8a6c75f19d83fb6e59', '[\"*\"]', NULL, '2021-10-19 11:14:15', '2021-10-19 11:14:15'),
(48, 'App\\Models\\User', 6, 'auth_token', '6e40e2fd211a82388c94b6a706b2c54ddcd731da414a82d5dd0a9e5dd20349eb', '[\"*\"]', '2021-10-19 15:52:51', '2021-10-19 11:17:47', '2021-10-19 15:52:51'),
(49, 'App\\Models\\User', 6, 'auth_token', 'ae6e64c08afb6e46057230e41e66be8eeb8492e08d59cbeb3144b5b4239f174c', '[\"*\"]', '2021-10-20 09:52:26', '2021-10-19 11:41:00', '2021-10-20 09:52:26'),
(50, 'App\\Models\\User', 6, 'auth_token', '2e8e3019604cc008a3c81c779b8feb9f7124a1526dd9370ae0250c5b51d87e70', '[\"*\"]', NULL, '2021-10-19 13:01:09', '2021-10-19 13:01:09'),
(51, 'App\\Models\\User', 6, 'auth_token', 'd28bf74c66c234daff74592c5147b6f714c558e1cf3f711c5e803d4069de54f1', '[\"*\"]', NULL, '2021-10-19 14:20:08', '2021-10-19 14:20:08'),
(52, 'App\\Models\\User', 6, 'auth_token', '1b1ee949313d79b73ecee5e9362384a765926751d67cf8df2f2d94e9ae347072', '[\"*\"]', NULL, '2021-10-19 15:11:44', '2021-10-19 15:11:44'),
(53, 'App\\Models\\User', 1, 'auth_token', 'aeb8d215df756e53ac0db6be51c34716650d70b10673a9e47a6d6230b5e701aa', '[\"*\"]', '2021-10-19 15:51:06', '2021-10-19 15:45:29', '2021-10-19 15:51:06'),
(54, 'App\\Models\\User', 1, 'auth_token', 'c92c48ef71158e9c05e9c3fe9e9223a97ba8dfdb72bda8c278fc25c854100ff9', '[\"*\"]', '2021-10-19 15:53:05', '2021-10-19 15:51:17', '2021-10-19 15:53:05'),
(55, 'App\\Models\\User', 6, 'auth_token', 'cf613b29a8d81fd1025567e62e1299930464cd3b032cb7b6f49c55fbf8e3e6d9', '[\"*\"]', '2021-10-19 15:57:51', '2021-10-19 15:57:00', '2021-10-19 15:57:51'),
(56, 'App\\Models\\User', 6, 'auth_token', '955f4f058477eef8c87bf96ad071ee4dcd59cf11548d0303a7e80b1587737f5c', '[\"*\"]', '2021-10-19 17:42:19', '2021-10-19 17:41:57', '2021-10-19 17:42:19'),
(57, 'App\\Models\\User', 6, 'auth_token', '4fb925ac76c339c5e3340fea2431947fe0a727aa255ce9aa75c5d609a21d505b', '[\"*\"]', NULL, '2021-10-19 17:58:36', '2021-10-19 17:58:36'),
(58, 'App\\Models\\User', 6, 'auth_token', '1084d0fe17c11d9a5aa95d926a31293ea933fd8023d75a5ce9b8750204773ff6', '[\"*\"]', NULL, '2021-10-19 17:59:06', '2021-10-19 17:59:06'),
(59, 'App\\Models\\User', 6, 'auth_token', '27af6a8158efed3182458a71c2c45cdfc82547cdfc4d1d6ef0ad905389c10968', '[\"*\"]', NULL, '2021-10-19 17:59:29', '2021-10-19 17:59:29'),
(60, 'App\\Models\\User', 6, 'auth_token', 'fa6a85d4f4dbf0e0b0026748f46d0b7dd270ffb3d5d48b331864f6c049d95b84', '[\"*\"]', NULL, '2021-10-19 17:59:50', '2021-10-19 17:59:50'),
(61, 'App\\Models\\User', 6, 'auth_token', '5d3b85b8155cbf5a85e8881f80691932f50c435219d192101601988a760cc91a', '[\"*\"]', NULL, '2021-10-19 18:00:12', '2021-10-19 18:00:12'),
(62, 'App\\Models\\User', 6, 'auth_token', 'c7b2994cf573841bea6360f25bb6d226d851e24412e45d6071cca5df5df3f4fe', '[\"*\"]', '2021-10-21 10:10:48', '2021-10-19 18:01:44', '2021-10-21 10:10:48'),
(63, 'App\\Models\\User', 6, 'auth_token', '031b7e9ff57adb05d4629cf213fd7c9dc711939c9426fc53dbb9a3611a95e29e', '[\"*\"]', '2021-10-20 15:30:31', '2021-10-20 09:51:10', '2021-10-20 15:30:31'),
(64, 'App\\Models\\User', 6, 'auth_token', 'fe9296324c7644e01d4d3b61918fdd6514b7dc98040d7886135de4090bfaff0b', '[\"*\"]', '2021-10-20 14:33:31', '2021-10-20 09:53:04', '2021-10-20 14:33:31'),
(65, 'App\\Models\\User', 10, 'auth_token', 'dfbc215700f15455192002798feb967ea06e6da9adaf3df879296a8030f86841', '[\"*\"]', '2021-10-20 15:43:29', '2021-10-20 15:32:09', '2021-10-20 15:43:29'),
(66, 'App\\Models\\User', 10, 'auth_token', '1d4bd6d424f0938d50c546e3b2affb612a5b1ff678b9e161caa47bff6ac1396d', '[\"*\"]', '2021-10-20 16:08:13', '2021-10-20 16:04:05', '2021-10-20 16:08:13'),
(67, 'App\\Models\\User', 6, 'auth_token', 'f058832501f8221cddd48fdbc28a5555ce4ac9765d164b3d71f4a6e5b40e4349', '[\"*\"]', '2021-10-20 16:09:27', '2021-10-20 16:05:10', '2021-10-20 16:09:27'),
(68, 'App\\Models\\User', 10, 'auth_token', '12e4d5526bd7e2fd42cbdc9bc3a2fa942ff2bc222b86f103e279a959c5ac160b', '[\"*\"]', '2021-10-21 09:19:44', '2021-10-20 16:37:34', '2021-10-21 09:19:44'),
(69, 'App\\Models\\User', 6, 'auth_token', '70f66cc76fd921e749c48b0808cc2c300fec4a8a90dcf1e51320c9fc7b603644', '[\"*\"]', '2021-10-22 14:40:56', '2021-10-20 17:43:47', '2021-10-22 14:40:56'),
(70, 'App\\Models\\User', 6, 'auth_token', '6d245b855a22d43a5dee986f7f67e10a8f401a0421ec5af997021b543f5e5734', '[\"*\"]', '2021-10-20 18:20:21', '2021-10-20 18:17:27', '2021-10-20 18:20:21'),
(71, 'App\\Models\\User', 10, 'auth_token', '27be005fca395baef912df8fd1244178eb1637b98dee9c1966b88ccda0bf68f7', '[\"*\"]', '2021-10-21 09:23:22', '2021-10-20 18:20:29', '2021-10-21 09:23:22'),
(72, 'App\\Models\\User', 6, 'auth_token', '6da377ae4bd00e0263ca6cd0f1cfaebbc11a4a2a797c990f0ceb02f484f77f03', '[\"*\"]', '2021-10-21 09:35:01', '2021-10-21 09:25:24', '2021-10-21 09:35:01'),
(73, 'App\\Models\\User', 6, 'auth_token', '02404e88e033035a15dfbba51298f71f31d763a30462352f597df176a4567206', '[\"*\"]', '2021-10-21 09:50:31', '2021-10-21 09:31:26', '2021-10-21 09:50:31'),
(74, 'App\\Models\\User', 10, 'auth_token', '67c21b90e8d07a6bed1eb9dc9608aebe50694e81ff2fb122ec994fd9a54bde1c', '[\"*\"]', '2021-10-25 05:55:36', '2021-10-21 09:35:26', '2021-10-25 05:55:36'),
(75, 'App\\Models\\User', 10, 'auth_token', '57bc69407365cef4d68423a7255bd852f5e46f84e928dc5b20550b1d55806dd3', '[\"*\"]', '2021-10-21 09:52:55', '2021-10-21 09:52:52', '2021-10-21 09:52:55'),
(76, 'App\\Models\\User', 10, 'auth_token', '678a6169bc5a588005d8dba45a7074a5848ef379ed1c397dd0234dcf45838a2d', '[\"*\"]', '2021-10-21 09:56:38', '2021-10-21 09:56:36', '2021-10-21 09:56:38'),
(77, 'App\\Models\\User', 6, 'auth_token', '4c06966a47f311307aa2697988ea5f606d00c0e4398d7950e214ec50e9f54e57', '[\"*\"]', '2021-10-21 10:41:11', '2021-10-21 09:58:09', '2021-10-21 10:41:11'),
(78, 'App\\Models\\User', 10, 'auth_token', 'f5382fa6f4531608369964b933410e511546c9d1f2c63f076bac829725b98db0', '[\"*\"]', '2021-10-21 10:24:37', '2021-10-21 10:11:25', '2021-10-21 10:24:37'),
(79, 'App\\Models\\User', 10, 'auth_token', 'f3b3c1051dd7d683e508ed1cf23abebac8a9ab6075f40ea041cf63a0eabf55b2', '[\"*\"]', '2021-10-21 11:31:36', '2021-10-21 10:41:38', '2021-10-21 11:31:36'),
(80, 'App\\Models\\User', 11, 'auth_token', '0b54c11ca22915e8f89048d3c828537651fcdecb45afe7f0af0fe09201ce2aca', '[\"*\"]', '2021-10-21 11:25:21', '2021-10-21 11:22:14', '2021-10-21 11:25:21'),
(81, 'App\\Models\\User', 11, 'auth_token', '3f10c0367ffc2f51d83f87c9512feb6654310c213c1dc97a6b9d991bf5266621', '[\"*\"]', '2021-10-21 11:30:17', '2021-10-21 11:30:16', '2021-10-21 11:30:17'),
(82, 'App\\Models\\User', 10, 'auth_token', 'e6e81e7c6f45388945f7d5b7fcc500110d793e4ba43a345a4dfed4bbbe7c053b', '[\"*\"]', '2021-10-21 11:59:22', '2021-10-21 11:32:42', '2021-10-21 11:59:22'),
(83, 'App\\Models\\User', 11, 'auth_token', '2871fda9376dc04125c040bf8e4c96b13cc3b0b146795f1f02b3c64c50840183', '[\"*\"]', '2021-10-22 15:12:27', '2021-10-21 12:05:27', '2021-10-22 15:12:27'),
(84, 'App\\Models\\User', 6, 'auth_token', '5ec999faf61d40f870688d720941efbac85c1d8567891e7b34092c2bd68209dd', '[\"*\"]', '2021-10-21 15:38:45', '2021-10-21 14:30:37', '2021-10-21 15:38:45'),
(85, 'App\\Models\\User', 6, 'auth_token', 'aa85298926175cb5dcd85884dea5f2380a5fa00036399b8d777077d869abd4d4', '[\"*\"]', '2021-10-22 09:26:09', '2021-10-21 15:39:29', '2021-10-22 09:26:09'),
(86, 'App\\Models\\User', 10, 'auth_token', 'c4f785eb64682f8f29302f9d6497fea552c71b1851bcd5442af56ab8c68124a7', '[\"*\"]', '2021-10-22 17:38:16', '2021-10-22 09:26:37', '2021-10-22 17:38:16'),
(87, 'App\\Models\\User', 11, 'auth_token', 'a2fd33ab0b7fcfa018c02ee89303cb5da2dedb641c47c3fb1f730321b266b83b', '[\"*\"]', '2021-10-22 14:08:58', '2021-10-22 14:05:21', '2021-10-22 14:08:58'),
(88, 'App\\Models\\User', 10, 'auth_token', 'f9e585e51c00e43b8c3bb200bf8e93ce247f700dbca9e7c38a54108c34773171', '[\"*\"]', '2021-10-22 14:42:00', '2021-10-22 14:41:18', '2021-10-22 14:42:00'),
(89, 'App\\Models\\User', 11, 'auth_token', '4992018e8aba3b2d463e7217e75334c088fd4c9046147c297e6772715bf0004d', '[\"*\"]', '2021-10-22 17:02:05', '2021-10-22 14:42:57', '2021-10-22 17:02:05'),
(90, 'App\\Models\\User', 11, 'auth_token', 'f3dce970dd54a4575d8ba0721c71268ae91108fb6e63b7fa90e6aa9871baf3d1', '[\"*\"]', '2021-10-22 15:09:08', '2021-10-22 15:07:16', '2021-10-22 15:09:08'),
(91, 'App\\Models\\User', 2, 'auth_token', '17e4989bb7b04bad28f5095aebee8b64904a33ef017fd5cb48a21ca9a965bfaf', '[\"*\"]', NULL, '2021-10-22 15:21:48', '2021-10-22 15:21:48'),
(92, 'App\\Models\\User', 2, 'auth_token', 'dfb934679bf58ace0c4a2ce11ed223000dda777a05b16fc63d3fa41922af7bfe', '[\"*\"]', NULL, '2021-10-22 15:22:03', '2021-10-22 15:22:03'),
(93, 'App\\Models\\User', 6, 'auth_token', '7cf54774d494e2bc27e0b5779a7bdc117c046c82e0a886afa09dcab5ea3fea33', '[\"*\"]', '2021-10-23 14:36:33', '2021-10-22 17:01:07', '2021-10-23 14:36:33'),
(94, 'App\\Models\\User', 10, 'auth_token', '321dcc61deeeb1ab25c7b9bcddd18a829ba5c4bf82304b8b79f25d123f04afa6', '[\"*\"]', '2021-10-23 12:19:14', '2021-10-22 17:02:45', '2021-10-23 12:19:14'),
(95, 'App\\Models\\User', 6, 'auth_token', 'e164d0ddba3f97b55e215440d0acf02c7f512ede77ebd84c63d995bb8fd18036', '[\"*\"]', '2021-10-23 16:44:25', '2021-10-23 11:16:29', '2021-10-23 16:44:25'),
(96, 'App\\Models\\User', 6, 'auth_token', '700caaab39edaf1b9b2ebdaae2bd0a9cd66271a7718130e88e28d9aa10d4ef50', '[\"*\"]', '2021-10-23 14:22:05', '2021-10-23 14:16:45', '2021-10-23 14:22:05'),
(97, 'App\\Models\\User', 10, 'auth_token', '34c49dcfa5a3936a54e79de6eb08463aa9c6d4e1b81d820c64466bcf43f1adf1', '[\"*\"]', '2021-10-23 14:24:18', '2021-10-23 14:23:28', '2021-10-23 14:24:18'),
(98, 'App\\Models\\User', 6, 'auth_token', '9a466898ba03b8787f15d979d83ee2f4be01c12db20606a3a18e448d1f8ecf4f', '[\"*\"]', '2021-10-25 11:01:16', '2021-10-23 14:59:44', '2021-10-25 11:01:16'),
(99, 'App\\Models\\User', 10, 'auth_token', '7da1fc8569e389b827c081d21746314bf1a91c49bcb03be3ba287cb61e204146', '[\"*\"]', '2021-10-23 16:54:53', '2021-10-23 16:54:28', '2021-10-23 16:54:53'),
(100, 'App\\Models\\User', 11, 'auth_token', '79c6bc0f90c0563f68eb296fa4b3c1457180de4aa113e3ece9c2ae6e16771b64', '[\"*\"]', '2021-10-23 17:02:21', '2021-10-23 16:55:07', '2021-10-23 17:02:21'),
(101, 'App\\Models\\User', 6, 'auth_token', '666e421ff06faa2eb988e1edbc4e1b00c14c8be88460e63509dea8894ac296d8', '[\"*\"]', '2021-10-25 09:44:40', '2021-10-23 17:14:57', '2021-10-25 09:44:40'),
(102, 'App\\Models\\User', 2, 'auth_token', '3042e5bebc0e6b9d400e90fa083cfa6ccb50fa15d81562bc3a2cb1ec706ca553', '[\"*\"]', NULL, '2021-10-23 17:23:22', '2021-10-23 17:23:22'),
(103, 'App\\Models\\User', 11, 'auth_token', '0a573fc7d5864e211c596f2104048e79e14606f75a4cde8498e75a8291b307a1', '[\"*\"]', NULL, '2021-10-23 17:24:19', '2021-10-23 17:24:19'),
(104, 'App\\Models\\User', 6, 'auth_token', 'e09f2b6d11ae7e6cbd0bce0d8912ea1a7f40b4a225c33415b8a3fe4dd672580f', '[\"*\"]', NULL, '2021-10-23 17:25:36', '2021-10-23 17:25:36'),
(105, 'App\\Models\\User', 10, 'auth_token', '73a4b13560d1f3f4be0895758c8dfdccda69999f581381bf9520775ea8c97978', '[\"*\"]', NULL, '2021-10-23 17:26:22', '2021-10-23 17:26:22'),
(106, 'App\\Models\\User', 6, 'auth_token', '31084ba885e87fbdf71a6353376e7fcbb67fdff8898681af7319ce8e716c9c1c', '[\"*\"]', '2021-10-25 05:56:05', '2021-10-25 05:55:54', '2021-10-25 05:56:05'),
(107, 'App\\Models\\User', 10, 'auth_token', '6c6864f72a34b7e8ddb852f2d26628ba5092502408587deb5f76e673dedf3f71', '[\"*\"]', '2021-10-25 05:56:26', '2021-10-25 05:56:24', '2021-10-25 05:56:26'),
(108, 'App\\Models\\User', 11, 'auth_token', 'abd4e879a236997342503ee93c2df1b38b54bb6d4210f4b8b2b7e27ed3a61227', '[\"*\"]', '2021-10-25 05:57:31', '2021-10-25 05:57:16', '2021-10-25 05:57:31'),
(109, 'App\\Models\\User', 10, 'auth_token', '31c05001554506a9091687056b579509cebc4a162a7ae12b32085a509a6497ba', '[\"*\"]', '2021-10-25 10:26:18', '2021-10-25 09:45:56', '2021-10-25 10:26:18'),
(110, 'App\\Models\\User', 6, 'auth_token', 'b15a2c7abd090ff4008579cfbd45ba6872093fa3d8fa6a9c914c88dff22763a5', '[\"*\"]', '2021-10-25 10:27:17', '2021-10-25 10:27:16', '2021-10-25 10:27:17'),
(111, 'App\\Models\\User', 10, 'auth_token', '4a71c2b1e12dcdf21d85963d284e19ee0837ba3204a723050a2cd91138af003c', '[\"*\"]', '2021-10-25 11:01:37', '2021-10-25 10:27:34', '2021-10-25 11:01:37'),
(112, 'App\\Models\\User', 10, 'auth_token', 'bc26b46517a6e2bd434dd81be8df63eb2ae17d18043a3bb79c6e1bf8de71b41d', '[\"*\"]', '2021-10-25 11:06:30', '2021-10-25 11:01:59', '2021-10-25 11:06:30'),
(113, 'App\\Models\\User', 11, 'auth_token', '94ddf801ef8fbba031b2f235fd372d74a2ef14332f54ef681be8b38f53860c1c', '[\"*\"]', '2021-10-25 11:06:58', '2021-10-25 11:06:56', '2021-10-25 11:06:58'),
(114, 'App\\Models\\User', 6, 'auth_token', 'b722deacf06ab6163e79382aaf079c456cd53e686f2453cab15249610ec3cfe9', '[\"*\"]', '2021-10-25 11:11:49', '2021-10-25 11:07:17', '2021-10-25 11:11:49'),
(115, 'App\\Models\\User', 6, 'auth_token', '23813d0ac3ffa9a88648da800d8444de6e85019ffe37ffd3b0b194b450c25290', '[\"*\"]', '2021-10-25 11:19:24', '2021-10-25 11:13:22', '2021-10-25 11:19:24'),
(116, 'App\\Models\\User', 6, 'auth_token', 'ead2c2fc875a45887629ff47d901d0d7a35cba372ea28d1e0ab6472caf8aa990', '[\"*\"]', '2021-10-25 11:22:27', '2021-10-25 11:22:25', '2021-10-25 11:22:27'),
(117, 'App\\Models\\User', 10, 'auth_token', '9c5b660206d0d959707109df26d55031da3864d43ce37ff019e264355a66b307', '[\"*\"]', '2021-10-25 11:24:33', '2021-10-25 11:24:31', '2021-10-25 11:24:33'),
(118, 'App\\Models\\User', 10, 'auth_token', '4d714194cc383c06f6cfcb0c82401984889e76ea88645ac67a89d9d7272baf1a', '[\"*\"]', '2021-10-25 11:25:54', '2021-10-25 11:25:51', '2021-10-25 11:25:54'),
(119, 'App\\Models\\User', 6, 'auth_token', '2a2284e6b12c255d56b2d57e2ce11a9d1ae3b7db8ba0f3e21ac291faf7ebb95d', '[\"*\"]', '2021-10-27 09:47:29', '2021-10-25 11:26:32', '2021-10-27 09:47:29'),
(120, 'App\\Models\\User', 10, 'auth_token', 'efbd767405f5c0c50792b8078f58f13b0e761012e90738e6f4cf713763b114b9', '[\"*\"]', '2021-10-25 22:17:21', '2021-10-25 11:27:43', '2021-10-25 22:17:21'),
(121, 'App\\Models\\User', 6, 'auth_token', '337771a7afd9e1f077854bb256b52f44167b4cf06c7e1c197d52dbf35b6d0da7', '[\"*\"]', '2021-10-26 10:00:40', '2021-10-26 09:54:34', '2021-10-26 10:00:40'),
(122, 'App\\Models\\User', 16, 'auth_token', 'ead7bc32d269bb56253213ef137aed986c8bc9b221b106c48ca7f8cdddc3ff08', '[\"*\"]', '2021-11-08 16:06:34', '2021-10-27 09:37:06', '2021-11-08 16:06:34'),
(123, 'App\\Models\\User', 16, 'auth_token', 'cfd96c9efde9ae4322c45be82373c65f17b08ac14fc60789a90116305640b413', '[\"*\"]', '2021-10-27 09:53:43', '2021-10-27 09:53:41', '2021-10-27 09:53:43'),
(124, 'App\\Models\\User', 10, 'auth_token', '6d440e00966f97f15677bda48ed26f0b2220973573c90c246af9cdd23b31f18e', '[\"*\"]', '2021-10-27 10:07:57', '2021-10-27 09:54:10', '2021-10-27 10:07:57'),
(125, 'App\\Models\\User', 6, 'auth_token', '887df009e9a238fd9902dbfd7d695fdba10fbfea6137d103350eb3cd98933db4', '[\"*\"]', '2021-10-27 11:22:42', '2021-10-27 10:16:55', '2021-10-27 11:22:42'),
(126, 'App\\Models\\User', 10, 'auth_token', '2d692e9798de85d7fa14ec6c1c83bc1b1baf2a31031ef5723635bb17702c6de6', '[\"*\"]', '2021-10-27 11:24:01', '2021-10-27 11:23:28', '2021-10-27 11:24:01'),
(127, 'App\\Models\\User', 11, 'auth_token', '11d4f49ef3a863e4ec380bf0ceebe907a803d610303be4154b7382d341340737', '[\"*\"]', '2021-10-27 11:27:58', '2021-10-27 11:24:17', '2021-10-27 11:27:58'),
(128, 'App\\Models\\User', 6, 'auth_token', '045d78bca2850e98ba14751b54056a08f583f6d9206f2167730ed7f203b3b463', '[\"*\"]', '2021-10-27 11:29:15', '2021-10-27 11:28:23', '2021-10-27 11:29:15'),
(129, 'App\\Models\\User', 10, 'auth_token', '638a189ff312db201ee90e8bd9395bebf5fda854d8d96c39a51f9d7c23683860', '[\"*\"]', '2021-10-27 11:34:45', '2021-10-27 11:30:16', '2021-10-27 11:34:45'),
(130, 'App\\Models\\User', 6, 'auth_token', 'a0672577fe4ef4995edcdd1fbdeb5757a4ec2ac4f553c353c17a0e1182a851c7', '[\"*\"]', '2021-10-27 11:35:27', '2021-10-27 11:35:06', '2021-10-27 11:35:27'),
(131, 'App\\Models\\User', 6, 'auth_token', 'e154a0981dcf808cddde415ab02a9ca60dc162b25632ec2c2d5f7a5a5fa2ed52', '[\"*\"]', '2021-10-27 11:36:19', '2021-10-27 11:35:59', '2021-10-27 11:36:19'),
(132, 'App\\Models\\User', 6, 'auth_token', '2a04061b45fe5a612743f53546685f68046d243acd7ac7156dfb0c0369080ba1', '[\"*\"]', '2021-10-27 11:39:37', '2021-10-27 11:37:36', '2021-10-27 11:39:37'),
(133, 'App\\Models\\User', 10, 'auth_token', '2ebc77e58d8c5a94fbe2c2eff92d47c50b3c538b98ea33a4790e2472e0d4826b', '[\"*\"]', '2021-10-27 11:40:17', '2021-10-27 11:39:57', '2021-10-27 11:40:17'),
(134, 'App\\Models\\User', 6, 'auth_token', '207a863550daae8bb0c7de4da4f1941f8b5c6e911cb2294a75ecc75c1e32094f', '[\"*\"]', '2021-10-27 13:43:11', '2021-10-27 11:41:02', '2021-10-27 13:43:11'),
(135, 'App\\Models\\User', 16, 'auth_token', '2adc36334b7db6d6b09a46fb02f3c1ea83f337f53bd0d92724e803edd2b0fcc0', '[\"*\"]', '2021-10-27 17:05:04', '2021-10-27 13:43:46', '2021-10-27 17:05:04'),
(136, 'App\\Models\\User', 18, 'auth_token', 'da7d54ab903c37f52c731cc04351763d886d0c1f49764ba52c33bfb8fd58bbfe', '[\"*\"]', '2021-10-28 15:58:23', '2021-10-27 15:06:15', '2021-10-28 15:58:23'),
(137, 'App\\Models\\User', 16, 'auth_token', '70008203263b7c3d0faa42397b3594a790953f97d2867fafbf170bb087937742', '[\"*\"]', '2021-10-27 16:17:59', '2021-10-27 15:06:59', '2021-10-27 16:17:59'),
(138, 'App\\Models\\User', 6, 'auth_token', '65cd37595a011a86f4ee0adc8f998e56b3d064bb1e48568e4e7289c1b5d2fb0b', '[\"*\"]', '2021-10-27 16:55:55', '2021-10-27 16:54:33', '2021-10-27 16:55:55'),
(139, 'App\\Models\\User', 16, 'auth_token', '4bc27501d8af91c15d6da5e220ed4e02b7887de2f7c1787eea7886dccd0ff10e', '[\"*\"]', '2021-10-27 16:56:52', '2021-10-27 16:56:18', '2021-10-27 16:56:52'),
(140, 'App\\Models\\User', 10, 'auth_token', 'ad1b370e79e8d5fb3ebb117ea7c02d2d4cbd4c061524b03c212982f7d247ee2f', '[\"*\"]', '2021-10-28 09:15:04', '2021-10-27 17:12:49', '2021-10-28 09:15:04'),
(141, 'App\\Models\\User', 6, 'auth_token', 'cdcd21179a445f65bda0de4684848daef5aa128472de0f8815865f1c2a229f35', '[\"*\"]', '2021-10-28 09:17:33', '2021-10-27 17:14:12', '2021-10-28 09:17:33'),
(142, 'App\\Models\\User', 6, 'auth_token', '64f5d875538041caf5fbc8709023190eb34a0a60cc919037517dadd1a7253bfa', '[\"*\"]', '2021-10-30 15:30:22', '2021-10-27 21:42:46', '2021-10-30 15:30:22'),
(143, 'App\\Models\\User', 6, 'auth_token', '7a6aa4745837e9c7b3e3fd6393ac3e2067505ebd2de3860c3e91c19d66a1a5d6', '[\"*\"]', '2021-10-28 07:53:51', '2021-10-27 23:09:11', '2021-10-28 07:53:51'),
(144, 'App\\Models\\User', 6, 'auth_token', '02a9413ee4ed2486bfcaec1a95ffbdcf8b4d7a9061cebe73572c0308523a08b3', '[\"*\"]', '2021-10-28 09:19:25', '2021-10-28 09:15:53', '2021-10-28 09:19:25'),
(145, 'App\\Models\\User', 16, 'auth_token', 'b14c1b58f71c01f43783a6923fb61965a23f40c781d7e8e385036c2d01e8dc10', '[\"*\"]', '2021-10-28 09:20:21', '2021-10-28 09:19:42', '2021-10-28 09:20:21'),
(146, 'App\\Models\\User', 16, 'auth_token', 'bcc092e00b67c60e85b02e9613d210d4aafbdb784b69e3b2542f12e10d76d103', '[\"*\"]', '2021-10-28 15:19:01', '2021-10-28 09:21:39', '2021-10-28 15:19:01'),
(147, 'App\\Models\\User', 16, 'auth_token', '898ba473f13b64197536bbc6d46821474944ee6af716141015b531c4737ee616', '[\"*\"]', '2021-10-28 09:34:15', '2021-10-28 09:26:53', '2021-10-28 09:34:15'),
(148, 'App\\Models\\User', 6, 'auth_token', 'adbfb619cb0aea2fd60990a20fb13f946ae07e85ba5409ff658411e250bea0e2', '[\"*\"]', '2021-10-28 09:44:18', '2021-10-28 09:41:59', '2021-10-28 09:44:18'),
(149, 'App\\Models\\User', 10, 'auth_token', 'da5849ffdbf6e98c611b14c01293751c18d85c5033c9ff691adce5d6a7885524', '[\"*\"]', '2021-10-28 10:07:41', '2021-10-28 09:44:44', '2021-10-28 10:07:41'),
(150, 'App\\Models\\User', 6, 'auth_token', '51ef9b9a2d4b4fca56a362448cefc785a53176acf5f57279fa14dfe79065df99', '[\"*\"]', '2021-10-28 10:15:36', '2021-10-28 10:11:23', '2021-10-28 10:15:36'),
(151, 'App\\Models\\User', 10, 'auth_token', '70ef84ede8b071ac951f504e599087d0a105b9ffdeac033ad531b1e9cc1d8283', '[\"*\"]', '2021-10-28 10:17:02', '2021-10-28 10:15:55', '2021-10-28 10:17:02'),
(152, 'App\\Models\\User', 11, 'auth_token', 'b6fae46b17e081bf3c02bd723addeebb42ee922a196a4a265c05dea533d1d849', '[\"*\"]', '2021-10-28 10:19:04', '2021-10-28 10:17:29', '2021-10-28 10:19:04'),
(153, 'App\\Models\\User', 6, 'auth_token', 'c8f004e12d46a05aff4ccdb50296f94a862f73f602ebc1eeed272f28606e1143', '[\"*\"]', '2021-10-28 13:56:28', '2021-10-28 10:47:54', '2021-10-28 13:56:28'),
(154, 'App\\Models\\User', 20, 'auth_token', '079975b45cc91a2d4b49cf1c0df214061c0390943fc8c7fe1f8d9eb214e06064', '[\"*\"]', NULL, '2021-10-28 12:20:15', '2021-10-28 12:20:15'),
(155, 'App\\Models\\User', 16, 'auth_token', 'b7f32db34aed9273c0ff9c44af3c117330d659146b9df5370d345e6003e266d4', '[\"*\"]', '2021-10-28 14:15:11', '2021-10-28 14:10:38', '2021-10-28 14:15:11'),
(156, 'App\\Models\\User', 10, 'auth_token', '5bf2a4e36f501a44c1488966f517427343865d7ad1ae98e815ad682836f25bf9', '[\"*\"]', '2021-10-28 16:05:08', '2021-10-28 14:57:33', '2021-10-28 16:05:08'),
(157, 'App\\Models\\User', 6, 'auth_token', '59ff95f557e7effda2faa394ab5d4ad98a3199a56860ec5842ffdbce27935c34', '[\"*\"]', '2021-10-28 16:55:58', '2021-10-28 16:17:14', '2021-10-28 16:55:58'),
(158, 'App\\Models\\User', 6, 'auth_token', 'd3917844ab9f1872f001001f5fe573761337309acb88d5ee66b98bf49d3bbd38', '[\"*\"]', '2021-10-29 09:44:40', '2021-10-29 09:20:39', '2021-10-29 09:44:40'),
(159, 'App\\Models\\User', 6, 'auth_token', '66362b769f3bc4658ab5e94825e0fe693632863e8e0137e3e6a1791637d11d95', '[\"*\"]', '2021-10-29 09:35:56', '2021-10-29 09:35:55', '2021-10-29 09:35:56'),
(160, 'App\\Models\\User', 18, 'auth_token', 'c606c79b4dec5e2944a88947b8151fe77a1002ad19c8f1120ab2e952aa8bef86', '[\"*\"]', '2021-10-29 09:41:12', '2021-10-29 09:36:55', '2021-10-29 09:41:12'),
(161, 'App\\Models\\User', 10, 'auth_token', '0145fccf030bc6e177a7533c2b07ce8a309cecde718403f5274d1a21d6db4bb6', '[\"*\"]', '2021-10-29 09:43:25', '2021-10-29 09:43:06', '2021-10-29 09:43:25'),
(162, 'App\\Models\\User', 18, 'auth_token', 'c0591eec918a8d183f3fa882b3960679cad316c16f63d9e81711d55dbe2fc97a', '[\"*\"]', '2021-10-29 14:10:59', '2021-10-29 09:44:22', '2021-10-29 14:10:59'),
(163, 'App\\Models\\User', 20, 'auth_token', '1c56dda9965061f422537df83421ddff14c1e93351e60b83e1ce77435eedbc02', '[\"*\"]', NULL, '2021-10-29 09:45:06', '2021-10-29 09:45:06'),
(164, 'App\\Models\\User', 20, 'auth_token', '820e848bf0357472be0ff602d81e25f0397e2523a1c5a92308d15621e67c110d', '[\"*\"]', '2021-11-15 16:42:35', '2021-10-29 09:46:02', '2021-11-15 16:42:35'),
(165, 'App\\Models\\User', 10, 'auth_token', '330a713bd0d02b6a0417a03eee23121d98ba4cb9b5cb5f9d3d466df7a5db5634', '[\"*\"]', '2021-10-29 14:11:46', '2021-10-29 14:11:42', '2021-10-29 14:11:46'),
(166, 'App\\Models\\User', 6, 'auth_token', '7b3ec6665aa60f238017f5a9c638027e1aa31c68a69def025894d640f57f7095', '[\"*\"]', '2021-10-29 14:14:43', '2021-10-29 14:12:45', '2021-10-29 14:14:43'),
(167, 'App\\Models\\User', 20, 'auth_token', 'f9f216cbc8c451b7d109fbc2f248c7cf7351c7d145c14ba9ddcc4f2b52dd3784', '[\"*\"]', '2021-10-29 14:52:07', '2021-10-29 14:27:50', '2021-10-29 14:52:07'),
(168, 'App\\Models\\User', 6, 'auth_token', 'af4ab1bafa3dd4c11060f2b04a641580e871d340e224a67707559d25f608417a', '[\"*\"]', '2021-10-29 14:56:02', '2021-10-29 14:53:29', '2021-10-29 14:56:02'),
(169, 'App\\Models\\User', 20, 'auth_token', '2da3e6784ab31e5780977932bc8c5eda381e0edfa8286e652d81c304af6665bd', '[\"*\"]', '2021-10-29 15:02:52', '2021-10-29 15:02:51', '2021-10-29 15:02:52'),
(170, 'App\\Models\\User', 10, 'auth_token', '0dc2f2c2f94bba95169d9deee8c0ff3ff2b545d4f5e9ea41a5ca9572d4a728c4', '[\"*\"]', '2021-10-29 15:03:13', '2021-10-29 15:03:12', '2021-10-29 15:03:13'),
(171, 'App\\Models\\User', 6, 'auth_token', '440a0c687921cd5f71f6f7c65da3445e06d44f6c88d9b837974ed60b37798f60', '[\"*\"]', '2021-10-29 16:06:33', '2021-10-29 16:06:32', '2021-10-29 16:06:33'),
(172, 'App\\Models\\User', 6, 'auth_token', 'daba43f8846e53ef865c2ee0aa46ae75e8042c121a6e003f01418b52c12ac1e8', '[\"*\"]', '2021-10-29 16:07:51', '2021-10-29 16:07:50', '2021-10-29 16:07:51'),
(173, 'App\\Models\\User', 6, 'auth_token', '689aa3b53eb3be958671464232225c1a3ed53c6c8fbf6a19b7137f282896e2c9', '[\"*\"]', '2021-10-29 16:11:30', '2021-10-29 16:09:04', '2021-10-29 16:11:30'),
(174, 'App\\Models\\User', 20, 'auth_token', '7b663f3155ca7e230c1664b936be8e6f67566b219535c03cacf4ba4aa82ec3c5', '[\"*\"]', '2021-10-29 16:12:40', '2021-10-29 16:12:38', '2021-10-29 16:12:40'),
(175, 'App\\Models\\User', 6, 'auth_token', '4d23449e7e2c789026f54a9a50c21e201bc83332dda6d27bd6b96256c0dc1ae1', '[\"*\"]', '2021-10-29 16:13:47', '2021-10-29 16:13:45', '2021-10-29 16:13:47'),
(176, 'App\\Models\\User', 11, 'auth_token', '66eb0c857a8aa5f456b2fb1cbdbfcd00a683347d1d2abb5e4566f6a56cf03289', '[\"*\"]', '2021-10-29 16:14:28', '2021-10-29 16:14:26', '2021-10-29 16:14:28'),
(177, 'App\\Models\\User', 10, 'auth_token', '021aa5ed3a566c753356bfaa2da8a13b28ac811e8bc045d66b9bf30054797969', '[\"*\"]', '2021-10-29 16:19:49', '2021-10-29 16:15:18', '2021-10-29 16:19:49'),
(178, 'App\\Models\\User', 6, 'auth_token', '8a6c5bcfac27b36a9bfc7d8c5744c2ce03b83988e93433d64e9509785539b2dc', '[\"*\"]', '2021-10-29 16:20:19', '2021-10-29 16:20:17', '2021-10-29 16:20:19'),
(179, 'App\\Models\\User', 20, 'auth_token', '5014054def34ad3ebeb1f22aa2e4361bd3da388ec3471b69f3bdfe6ab12394e0', '[\"*\"]', '2021-10-29 16:24:06', '2021-10-29 16:24:05', '2021-10-29 16:24:06'),
(180, 'App\\Models\\User', 6, 'auth_token', 'a1e78765bd99c124d7e26ac45cc124d4e766a16a498c1f2829b638c6e97750b0', '[\"*\"]', '2021-10-29 16:26:14', '2021-10-29 16:26:12', '2021-10-29 16:26:14'),
(181, 'App\\Models\\User', 20, 'auth_token', 'aafe90a8e8c5a99b42203cf0b95ab479fc950a41f01fe82fede68bb942b97364', '[\"*\"]', '2021-10-29 16:26:32', '2021-10-29 16:26:31', '2021-10-29 16:26:32'),
(182, 'App\\Models\\User', 10, 'auth_token', '66a85f60d5f2e5b6659cfb77f6e6153a80c96a0b83719a7cd30e1ed2404dbd6f', '[\"*\"]', '2021-10-29 16:27:59', '2021-10-29 16:27:34', '2021-10-29 16:27:59'),
(183, 'App\\Models\\User', 11, 'auth_token', '6cb95f3e3ae17a82e0d21bcc3f2091ccc6f5d87712c7026c77606a307a793a12', '[\"*\"]', '2021-10-29 16:28:15', '2021-10-29 16:28:14', '2021-10-29 16:28:15'),
(184, 'App\\Models\\User', 6, 'auth_token', 'b8373647472d5f394db99fa942c6c4fd0d8d77c347cfa77ef46b375c93960d56', '[\"*\"]', '2021-10-29 16:58:11', '2021-10-29 16:58:10', '2021-10-29 16:58:11'),
(185, 'App\\Models\\User', 10, 'auth_token', 'ad5c212e418781a04c8c64adadf95f1c8253ea8c925db11a74bd892060b32ea2', '[\"*\"]', '2021-10-29 16:58:34', '2021-10-29 16:58:33', '2021-10-29 16:58:34'),
(186, 'App\\Models\\User', 6, 'auth_token', '0b77b06931cef4a3b295f818e0c9c17ee6ecf6563e01baf4a0ef5073f56c2ad6', '[\"*\"]', '2021-10-30 15:25:00', '2021-10-29 17:19:08', '2021-10-30 15:25:00'),
(187, 'App\\Models\\User', 6, 'auth_token', '18bca0c1a723d06489cd918a187523915fec0909e0373bf8bdf0891b6c1e5739', '[\"*\"]', '2021-10-30 16:47:54', '2021-10-30 15:37:47', '2021-10-30 16:47:54'),
(188, 'App\\Models\\User', 16, 'auth_token', 'e1c45c657be2cc63c5a08bd62ea75a8da7e8bc155d0e8fccb93302b054c79464', '[\"*\"]', '2021-10-30 16:58:55', '2021-10-30 16:58:23', '2021-10-30 16:58:55'),
(189, 'App\\Models\\User', 11, 'auth_token', 'f52b769b8f9fdd8d7f4b1e6b8690060bb2796e37930652ad97a1bc4cecfe74aa', '[\"*\"]', '2021-10-30 17:00:17', '2021-10-30 16:59:53', '2021-10-30 17:00:17'),
(190, 'App\\Models\\User', 6, 'auth_token', '413b0a540c5e0b9cb7dfa0c9876cf01c20567343167ca971cdd6d48800a80acf', '[\"*\"]', '2021-10-30 17:28:17', '2021-10-30 17:23:31', '2021-10-30 17:28:17'),
(191, 'App\\Models\\User', 6, 'auth_token', 'f5081dbb6da7a7f77bf1a728a5520daafae1a53ff8cb1a8abc2028d00842523b', '[\"*\"]', '2021-10-31 16:15:20', '2021-10-31 16:02:32', '2021-10-31 16:15:20'),
(192, 'App\\Models\\User', 10, 'auth_token', '8eeac986e60b8c0168f4cf338f5716bfa48eb462e0cecea0dfe9134cd215cc9f', '[\"*\"]', '2021-10-31 16:17:45', '2021-10-31 16:16:04', '2021-10-31 16:17:45'),
(193, 'App\\Models\\User', 11, 'auth_token', '4a1ec0058df4f6cfd83ef7896825d1198f9e8d6abad660dcc7569a45deeba7b6', '[\"*\"]', '2021-10-31 16:27:44', '2021-10-31 16:19:02', '2021-10-31 16:27:44'),
(194, 'App\\Models\\User', 6, 'auth_token', '51141a7a52525debaaf19b7bcd36607da2c3b23715831d1731f797b0270a50dd', '[\"*\"]', '2021-11-01 10:10:37', '2021-11-01 09:29:19', '2021-11-01 10:10:37'),
(195, 'App\\Models\\User', 20, 'auth_token', 'f3cf456bda9c9cb6e8651c295b501e572e7279132ff05475bf30eace758737ca', '[\"*\"]', '2021-11-01 10:00:08', '2021-11-01 09:59:10', '2021-11-01 10:00:08'),
(196, 'App\\Models\\User', 6, 'auth_token', 'a6b60994e7d71ae75d32ea508bfef1c9db8ad18f02178b6cd62630328367eafe', '[\"*\"]', '2021-11-01 10:08:35', '2021-11-01 09:59:49', '2021-11-01 10:08:35'),
(197, 'App\\Models\\User', 20, 'auth_token', '2e65920683ec892345cf0b587971339fd986e1374115d082c52dc3c822f3512a', '[\"*\"]', '2021-11-15 16:42:06', '2021-11-01 10:08:55', '2021-11-15 16:42:06'),
(198, 'App\\Models\\User', 6, 'auth_token', '4883a90b286cdf30f1df61bfecfa5eebe20571450bfc748f5b8674b8f9c8c751', '[\"*\"]', '2021-11-01 11:18:04', '2021-11-01 10:14:21', '2021-11-01 11:18:04'),
(199, 'App\\Models\\User', 10, 'auth_token', '71aa48f156828f7ef83b781af81cf40db91d70239b585cdb724c7324bdc41109', '[\"*\"]', '2021-11-01 11:41:41', '2021-11-01 11:30:58', '2021-11-01 11:41:41'),
(200, 'App\\Models\\User', 11, 'auth_token', '69bdd5790136b7ba84caa6578e478a545df67fdffb29c77ba945405f2cebd684', '[\"*\"]', '2021-11-01 11:48:20', '2021-11-01 11:43:22', '2021-11-01 11:48:20'),
(201, 'App\\Models\\User', 16, 'auth_token', '00d48be1c25dfb625f8236d5d11a7595e3323d7fc5eb11fbae53e2ed3bd6b182', '[\"*\"]', '2021-11-01 11:52:51', '2021-11-01 11:49:09', '2021-11-01 11:52:51'),
(202, 'App\\Models\\User', 18, 'auth_token', 'e595f2a30c10e3f7ef5006e842fd42141d9ad9ce3917d76f73fef186fee31178', '[\"*\"]', '2021-11-01 11:58:08', '2021-11-01 11:56:24', '2021-11-01 11:58:08'),
(203, 'App\\Models\\User', 20, 'auth_token', '443c1df2219f53772ea1dc1f3ddb6de85093c9a516845088bab434ce537cc715', '[\"*\"]', '2021-11-01 11:59:22', '2021-11-01 11:58:32', '2021-11-01 11:59:22'),
(204, 'App\\Models\\User', 10, 'auth_token', '24caf48743021b61789c0e70640a626dc56fb688fbd8b5632771fb3babcc89dd', '[\"*\"]', '2021-11-01 12:26:39', '2021-11-01 11:59:43', '2021-11-01 12:26:39'),
(205, 'App\\Models\\User', 10, 'auth_token', 'b73614e419d12eb7bba09106ca853f096ee1298f13baaaefbb2f0e65ebccc7fa', '[\"*\"]', '2021-11-01 14:21:24', '2021-11-01 14:19:46', '2021-11-01 14:21:24'),
(206, 'App\\Models\\User', 6, 'auth_token', 'e61f2a1c8ef3160c043c35464eb9e29fc980824603482a0caadaf57d0c5daa40', '[\"*\"]', '2021-11-01 15:23:34', '2021-11-01 14:20:16', '2021-11-01 15:23:34'),
(207, 'App\\Models\\User', 10, 'auth_token', '79868a20a9a2cb7d27ced0ede378c2ac0a7b012a0ff3758fbb82eda03d149a9f', '[\"*\"]', '2021-11-01 14:50:14', '2021-11-01 14:48:54', '2021-11-01 14:50:14'),
(208, 'App\\Models\\User', 10, 'auth_token', '7f7b8a881be55a40f4591ee34a69e172df8f4b3cc562b002064b04624cfd2d15', '[\"*\"]', '2021-11-03 10:02:18', '2021-11-01 15:22:27', '2021-11-03 10:02:18'),
(209, 'App\\Models\\User', 16, 'auth_token', '31c08469583363157ab066346410b748ee8ed0fb5fca1ff261ccb22dfbcfd979', '[\"*\"]', '2021-11-02 15:48:52', '2021-11-02 15:48:06', '2021-11-02 15:48:52'),
(210, 'App\\Models\\User', 18, 'auth_token', 'f510d9da6315f9c1fc32b5e514e894082ec28fe191a0ad9816c61da72cfc0d0b', '[\"*\"]', '2021-11-02 15:50:30', '2021-11-02 15:49:17', '2021-11-02 15:50:30'),
(211, 'App\\Models\\User', 20, 'auth_token', '4e6440bd38fb46ebf26aac5bcaa1001f3c2ac9176a2e65a505ea3396ffbc52e4', '[\"*\"]', '2021-11-04 08:22:40', '2021-11-02 15:51:18', '2021-11-04 08:22:40'),
(212, 'App\\Models\\User', 18, 'auth_token', 'b03d246ad561e3265a6f8416ee3010b222826263b6ce6b4abd29273c332a28cf', '[\"*\"]', '2021-11-03 10:16:37', '2021-11-03 10:03:29', '2021-11-03 10:16:37'),
(213, 'App\\Models\\User', 16, 'auth_token', '278891f0f607a8f8b5ebc4e2a3303f2b566200fac49d569c960e3b6b0d2b93e2', '[\"*\"]', '2021-11-03 10:18:27', '2021-11-03 10:17:57', '2021-11-03 10:18:27'),
(214, 'App\\Models\\User', 18, 'auth_token', '088b1fead4f6077a967d2c2843ac1aaf7e3f82ad70852a9e850d6a7be6d4b7d1', '[\"*\"]', '2021-11-03 10:20:19', '2021-11-03 10:19:04', '2021-11-03 10:20:19'),
(215, 'App\\Models\\User', 16, 'auth_token', 'd5529ebeabcd1b8a500a2a47b6c0b22da260d757f7dbf944d3f3bb06ef3d488e', '[\"*\"]', '2021-11-03 14:03:44', '2021-11-03 10:27:42', '2021-11-03 14:03:44'),
(216, 'App\\Models\\User', 16, 'auth_token', 'e04592f7b508c6ec606d73876e1d8f6ce56a69d5e12308290ce1a8419184a2bc', '[\"*\"]', '2021-11-08 15:53:54', '2021-11-03 11:47:37', '2021-11-08 15:53:54'),
(217, 'App\\Models\\User', 18, 'auth_token', '4b48335f178e8ba28fe058a383444a714e3b4c16aff51caf5d41ee5b3f30ed4a', '[\"*\"]', '2021-11-03 15:25:01', '2021-11-03 11:53:05', '2021-11-03 15:25:01'),
(218, 'App\\Models\\User', 20, 'auth_token', '9d347dd4f9b73c3d86a2172463fa7960891b1b98e0f9559edfd94afdc48cdf58', '[\"*\"]', '2021-11-03 14:09:31', '2021-11-03 14:05:18', '2021-11-03 14:09:31'),
(219, 'App\\Models\\User', 16, 'auth_token', '2d95ea52001c971ad3300a3c1a6e13a6d45a03562d346277431db3444ddd2fa9', '[\"*\"]', '2021-11-03 14:10:21', '2021-11-03 14:10:20', '2021-11-03 14:10:21'),
(220, 'App\\Models\\User', 18, 'auth_token', '20559268842af1c07f73e933061b34a476607260290cf57dfca57c1cbd9f507f', '[\"*\"]', '2021-11-03 14:28:41', '2021-11-03 14:11:28', '2021-11-03 14:28:41'),
(221, 'App\\Models\\User', 16, 'auth_token', '84243a806478bcfead0e20dd673a43b0987b298d407466e9483dd6679d41d344', '[\"*\"]', '2021-11-03 14:46:31', '2021-11-03 14:46:26', '2021-11-03 14:46:31'),
(222, 'App\\Models\\User', 18, 'auth_token', 'cfc580f338c2b5488a2878a52aa4bc77f55ce95b1db56679608a3f54e9afbe76', '[\"*\"]', '2021-11-05 10:54:52', '2021-11-03 14:46:44', '2021-11-05 10:54:52'),
(223, 'App\\Models\\User', 16, 'auth_token', '2d0e85444239c187ba5b7b5438addba16387bc609083f54815e98e7ac6d5e2fe', '[\"*\"]', '2021-11-03 15:36:36', '2021-11-03 15:36:30', '2021-11-03 15:36:36'),
(224, 'App\\Models\\User', 18, 'auth_token', '58bae7717a31aad85247abd2f30138a0057a8fb84043c7edd5e3b2a009a96bee', '[\"*\"]', '2021-11-03 15:38:02', '2021-11-03 15:37:58', '2021-11-03 15:38:02'),
(225, 'App\\Models\\User', 16, 'auth_token', '53f0fb5fd992ddc187d23120642ec0dfa5498902fcde68a2a9e4a4262a5921a6', '[\"*\"]', '2021-11-08 14:43:32', '2021-11-03 17:07:35', '2021-11-08 14:43:32'),
(226, 'App\\Models\\User', 16, 'auth_token', 'f9493278af78207b05fae2947e6a12641c0af2cf1daaf001f2c4497e7d6b4018', '[\"*\"]', '2021-11-03 17:23:41', '2021-11-03 17:22:12', '2021-11-03 17:23:41'),
(227, 'App\\Models\\User', 18, 'auth_token', '7ba0479140edc2cc3fca968dd639526a7a700dfec71d60461bfa7576a7921622', '[\"*\"]', '2021-11-03 17:25:57', '2021-11-03 17:24:49', '2021-11-03 17:25:57'),
(228, 'App\\Models\\User', 20, 'auth_token', '5b92e763c7e6afc6adf5eed352cac5ad208c4cb07dfaeb587f9fe10f3ee7f3fe', '[\"*\"]', '2021-11-03 17:35:24', '2021-11-03 17:26:44', '2021-11-03 17:35:24'),
(229, 'App\\Models\\User', 10, 'auth_token', '31978b99ded89313a25c2117cb6babb238d4f1e1b460a0ca50e72f763a916bd9', '[\"*\"]', '2021-11-21 18:05:26', '2021-11-03 17:36:07', '2021-11-21 18:05:26'),
(230, 'App\\Models\\User', 6, 'auth_token', 'fbdd69897a055c1701eed8bc5319996e0fbb9a018722a41522f6783833116ead', '[\"*\"]', '2021-11-04 13:53:36', '2021-11-04 13:53:35', '2021-11-04 13:53:36'),
(231, 'App\\Models\\User', 6, 'auth_token', '2d6a60f26515894216407d6431317701cf16d2b11cb7678e4cc9d6dd832155f4', '[\"*\"]', '2021-11-05 10:21:26', '2021-11-05 10:20:55', '2021-11-05 10:21:26'),
(232, 'App\\Models\\User', 10, 'auth_token', 'd25663a8fd1207b5fc07c93688c92027027d1ed16444c50123088bc84808dfba', '[\"*\"]', '2021-11-05 14:13:04', '2021-11-05 10:21:47', '2021-11-05 14:13:04'),
(233, 'App\\Models\\User', 16, 'auth_token', '8aace639157caaa9d8b1dcfd71518850d1ed5cf89cc105a5263a5f1a4ead5e4a', '[\"*\"]', '2021-11-06 09:19:48', '2021-11-05 10:55:06', '2021-11-06 09:19:48'),
(234, 'App\\Models\\User', 11, 'auth_token', '59671da240a82920bcdcf0d27c47c3b9121fc15a0764ad56e225fc08339f2ab5', '[\"*\"]', '2021-11-08 13:18:26', '2021-11-05 14:13:23', '2021-11-08 13:18:26'),
(235, 'App\\Models\\User', 16, 'auth_token', 'f9297ee671a681586c70f7e3ab03165d1bbbf3037ef777eff52b458b88524cc8', '[\"*\"]', '2021-11-08 17:04:23', '2021-11-06 09:22:04', '2021-11-08 17:04:23'),
(236, 'App\\Models\\User', 16, 'auth_token', '415f804bb4b18c480cd0ffb13f02c31cabf1ebe8733e70fc95493a6e8729ccf6', '[\"*\"]', '2021-11-06 15:58:25', '2021-11-06 15:57:43', '2021-11-06 15:58:25'),
(237, 'App\\Models\\User', 6, 'auth_token', '0ddb679770b73543bf8682b0b4b2bce3c04b7e234af1e53091a6cb006f67aaf8', '[\"*\"]', '2021-11-06 16:06:46', '2021-11-06 16:06:36', '2021-11-06 16:06:46'),
(238, 'App\\Models\\User', 16, 'auth_token', '5746092a18eef60b616657acfeeaa0595af8a044a87b2166f65cfca8f498a645', '[\"*\"]', '2021-11-06 16:32:12', '2021-11-06 16:08:17', '2021-11-06 16:32:12'),
(239, 'App\\Models\\User', 16, 'auth_token', '0b637b12a0b6adebacb5bcec6e5622919b9000ee966a27765df25546d869ccfb', '[\"*\"]', '2021-11-09 12:11:06', '2021-11-06 16:49:56', '2021-11-09 12:11:06'),
(240, 'App\\Models\\User', 16, 'auth_token', 'e4634566ec223944eca051438c633c8cb986023ca98cdeaaa71bfea0084ef9ae', '[\"*\"]', '2021-11-07 12:37:54', '2021-11-07 12:36:54', '2021-11-07 12:37:54'),
(241, 'App\\Models\\User', 20, 'auth_token', 'd5253c357c715375e36d12182682ab6a4827475c67d5cc6870833c542ddb35cb', '[\"*\"]', '2021-11-08 08:53:44', '2021-11-07 12:39:05', '2021-11-08 08:53:44'),
(242, 'App\\Models\\User', 18, 'auth_token', 'a3511f78925d71e9c11bbbf80cbfdcd7295558c4274d183647f82cedbee32b1f', '[\"*\"]', '2021-11-08 14:34:45', '2021-11-08 08:54:16', '2021-11-08 14:34:45'),
(243, 'App\\Models\\User', 6, 'auth_token', '0040a133947fa5c2f0249d41417f6408a47bfb4fc7dede2a098336d39dbd6c28', '[\"*\"]', '2021-11-08 13:20:11', '2021-11-08 13:19:08', '2021-11-08 13:20:11'),
(244, 'App\\Models\\User', 16, 'auth_token', 'ee65a7d6929bee4bf1bcd59d3a871fc30ff30dc061309ace481901deafeb5b68', '[\"*\"]', '2021-11-08 14:35:04', '2021-11-08 14:35:03', '2021-11-08 14:35:04'),
(245, 'App\\Models\\User', 18, 'auth_token', 'cec619e05cd2eb34d0b8cfdc01043ddda59ed7d777f40b8f134693cf6f0388bc', '[\"*\"]', '2021-11-08 17:07:34', '2021-11-08 17:07:11', '2021-11-08 17:07:34'),
(246, 'App\\Models\\User', 6, 'auth_token', 'c7ca37b5e697d6096bf04bcb358b07e749249d5ccd74fab5bb7db76ddbe23cad', '[\"*\"]', '2021-11-08 17:08:29', '2021-11-08 17:08:02', '2021-11-08 17:08:29'),
(247, 'App\\Models\\User', 16, 'auth_token', '2936272eca91c5bc12af5e27b7e69c7a567e488a7853ca11113b6c7b443fa301', '[\"*\"]', '2021-11-08 17:21:02', '2021-11-08 17:09:28', '2021-11-08 17:21:02'),
(248, 'App\\Models\\User', 6, 'auth_token', 'd419bb7165800296008d449d0d5e8c85bf23dd1bfcad025884fcf32dbbbd4e8f', '[\"*\"]', '2021-11-08 17:54:54', '2021-11-08 17:54:40', '2021-11-08 17:54:54'),
(249, 'App\\Models\\User', 16, 'auth_token', 'aea8963f6035b4751b1b1c00b6a3036821d358de8d5887f8bde6eb351d6790bd', '[\"*\"]', '2021-11-09 12:15:16', '2021-11-08 17:55:24', '2021-11-09 12:15:16'),
(250, 'App\\Models\\User', 16, 'auth_token', 'b282ee553e5ca2a6ae5024d0160c1d5607706ec372bd210cbe72c8c0f02b9760', '[\"*\"]', '2021-11-14 20:33:13', '2021-11-08 20:48:00', '2021-11-14 20:33:13'),
(251, 'App\\Models\\User', 6, 'auth_token', '2bc81d9f6e20152ea8342b9c01135fbe47f1f9286fc100f38241910e55daec5a', '[\"*\"]', '2021-11-14 12:17:05', '2021-11-08 22:01:12', '2021-11-14 12:17:05'),
(252, 'App\\Models\\User', 6, 'auth_token', 'c4d756c269fdd7b3741de6a84f3e10400137b6c3f5f99bdf5a8c1e9aa4dacd74', '[\"*\"]', '2021-11-12 11:04:34', '2021-11-09 12:11:21', '2021-11-12 11:04:34'),
(253, 'App\\Models\\User', 16, 'auth_token', 'c4811d6ca8c89a2c0ca5f8a0e990e2ee439a982d0f148124052be8a2c291d902', '[\"*\"]', '2021-11-09 12:13:34', '2021-11-09 12:13:04', '2021-11-09 12:13:34'),
(254, 'App\\Models\\User', 6, 'auth_token', '43f4ec6c5c30baa3e9e5566e455e1b70ca1eb824d15d0793fc38392b00e7898c', '[\"*\"]', '2021-11-09 14:44:51', '2021-11-09 12:14:09', '2021-11-09 14:44:51'),
(255, 'App\\Models\\User', 6, 'auth_token', '671159b9e1b39ea33732cdca23d3bd734d859888b67480582e35674ef51165f7', '[\"*\"]', '2021-11-17 16:11:50', '2021-11-09 12:15:39', '2021-11-17 16:11:50'),
(256, 'App\\Models\\User', 16, 'auth_token', 'ca70445f13e4247c8dada5217af0f924c087b7e1b7dbc4892e05992881f330cb', '[\"*\"]', '2021-11-09 14:46:41', '2021-11-09 14:46:04', '2021-11-09 14:46:41'),
(257, 'App\\Models\\User', 10, 'auth_token', 'd530974c898030cbe3350a81cbc856fa5724b6f13806dd3d02e146ce1b47bbcd', '[\"*\"]', '2021-11-09 14:48:21', '2021-11-09 14:47:03', '2021-11-09 14:48:21'),
(258, 'App\\Models\\User', 11, 'auth_token', 'dfad1d031c78684d6b4549b7e457e2f9808d3eae3a986d62dd49d28050170268', '[\"*\"]', '2021-11-09 14:49:37', '2021-11-09 14:48:59', '2021-11-09 14:49:37'),
(259, 'App\\Models\\User', 10, 'auth_token', '6f68da4d33ee2994ae37e339de9181133a7fe231f6620e4f68125ec365994ba3', '[\"*\"]', '2021-11-12 11:05:20', '2021-11-12 11:05:02', '2021-11-12 11:05:20'),
(260, 'App\\Models\\User', 11, 'auth_token', '8be8e5f51b5a3423323cc8f68e162fa4ed95e6d3582ea9f26216a5a6f6aedf7d', '[\"*\"]', '2021-11-17 12:11:47', '2021-11-12 11:06:08', '2021-11-17 12:11:47'),
(261, 'App\\Models\\User', 10, 'auth_token', 'd563fb1c8709517e5883cda78d22c3283d4e5321ff1e6488e4fb2b21bb8f5844', '[\"*\"]', '2021-11-14 09:03:01', '2021-11-14 09:02:36', '2021-11-14 09:03:01'),
(262, 'App\\Models\\User', 10, 'auth_token', 'a55ce714bd6fdcf197c1413bf7d2c14e869fab32dbb3bb08c2275ccd2c883e2d', '[\"*\"]', '2021-11-14 13:02:20', '2021-11-14 12:18:15', '2021-11-14 13:02:20'),
(263, 'App\\Models\\User', 11, 'auth_token', '1d6c649df76a8457faddccc34f8bc383dd91eab1debe892d3493ed2ec2101d04', '[\"*\"]', '2021-11-14 13:03:02', '2021-11-14 13:03:00', '2021-11-14 13:03:02'),
(264, 'App\\Models\\User', 16, 'auth_token', '06f5d025ca26d965cb5741f13460af7032bc528fc74ea12655077ee4a12d947f', '[\"*\"]', '2021-11-14 13:04:53', '2021-11-14 13:03:56', '2021-11-14 13:04:53'),
(265, 'App\\Models\\User', 18, 'auth_token', '8387f79e42aa5075b836a89458ce647647575260576fe60e608518bff8e25177', '[\"*\"]', '2021-11-14 13:11:09', '2021-11-14 13:09:16', '2021-11-14 13:11:09'),
(266, 'App\\Models\\User', 20, 'auth_token', '0bdc726c06e2f60cc4d4e166e62b09b64ba066b0e40919716738d04a61ba158a', '[\"*\"]', '2021-11-14 13:12:33', '2021-11-14 13:11:54', '2021-11-14 13:12:33');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(267, 'App\\Models\\User', 10, 'auth_token', '8913bf7c61809e1b03154b0578db32c8e4dfc67ff2068f8178710c17e9d9f48c', '[\"*\"]', '2021-11-14 17:33:44', '2021-11-14 13:13:12', '2021-11-14 17:33:44'),
(268, 'App\\Models\\User', 20, 'auth_token', '0f2168727b7d5828453ee97144962d6f5c74695cc17b519693fe33e558943850', '[\"*\"]', '2021-11-21 12:56:33', '2021-11-14 17:33:58', '2021-11-21 12:56:33'),
(269, 'App\\Models\\User', 6, 'auth_token', '0112d8a61a770b1c863b5caeb8cdd61935da3c136481f65a8d3b78e49cd47377', '[\"*\"]', '2021-11-15 16:48:50', '2021-11-15 16:33:06', '2021-11-15 16:48:50'),
(270, 'App\\Models\\User', 6, 'auth_token', '8ad5bc1ee1ffbca171f8024f7927655bd1b0be215bef8260af16e4b55220448e', '[\"*\"]', '2021-11-15 16:48:20', '2021-11-15 16:43:05', '2021-11-15 16:48:20'),
(271, 'App\\Models\\User', 16, 'auth_token', '977e6bef5181f0c6c8f901b94fb97bfda2e14f0e74371b4d46eff88446d452f0', '[\"*\"]', '2021-11-17 12:56:27', '2021-11-17 11:09:32', '2021-11-17 12:56:27'),
(272, 'App\\Models\\User', 20, 'auth_token', '08ffed6fcaaadd1fc137db43f5c2d9fc501ddbd1742bf1498877e60e82826781', '[\"*\"]', '2021-11-22 12:46:40', '2021-11-17 12:12:14', '2021-11-22 12:46:40'),
(273, 'App\\Models\\User', 20, 'auth_token', 'c4df6add4501c210ce3402604a572a90776a29d6a8d921372a0d6b49616fb4c4', '[\"*\"]', '2021-11-17 13:15:55', '2021-11-17 12:59:31', '2021-11-17 13:15:55'),
(274, 'App\\Models\\User', 18, 'auth_token', 'c82814e11fdefe0c530f7a19421c77b1ef84fe939f5d5571302d506f660cf051', '[\"*\"]', '2021-11-17 14:51:29', '2021-11-17 13:17:34', '2021-11-17 14:51:29'),
(275, 'App\\Models\\User', 16, 'auth_token', '4a0255c00c5ab343d6e376df7af8bc00d4a1f45cb991ff569c25e4dcda6a3167', '[\"*\"]', '2021-11-18 10:17:36', '2021-11-17 14:52:29', '2021-11-18 10:17:36'),
(276, 'App\\Models\\User', 16, 'auth_token', '3fe56779d528ef68fabbb648d054d4f7ebad4fdd6f4bf1e0f0e8c1889b8de792', '[\"*\"]', '2021-11-17 17:11:20', '2021-11-17 17:10:05', '2021-11-17 17:11:20'),
(277, 'App\\Models\\User', 16, 'auth_token', '24e6d4da8b28b82acdca4d14537f201b2365caeea7cce4625e7fd9df8bea8a85', '[\"*\"]', '2021-11-18 09:59:00', '2021-11-18 09:40:46', '2021-11-18 09:59:00'),
(278, 'App\\Models\\User', 6, 'auth_token', 'd91cf0cfb3de56ee219867ec4377bd13b26dd7c5552e217eced00542fec8467e', '[\"*\"]', '2021-11-18 10:06:27', '2021-11-18 09:59:46', '2021-11-18 10:06:27'),
(279, 'App\\Models\\User', 6, 'auth_token', '39b95800f1c5630c8fe2d4c468c1172c68ead38e2e14b26dae37420a58ca5d86', '[\"*\"]', '2021-11-18 10:08:02', '2021-11-18 10:08:01', '2021-11-18 10:08:02'),
(280, 'App\\Models\\User', 18, 'auth_token', '328731f8c7735c41ac07e24a5b0d02937b62b08803433773c67f23982f08d840', '[\"*\"]', '2021-11-18 10:09:57', '2021-11-18 10:08:59', '2021-11-18 10:09:57'),
(281, 'App\\Models\\User', 20, 'auth_token', '7d8369d67fafe71caec9d826cf50f8e5b7c7d9c337a418b79f04828125061c88', '[\"*\"]', '2021-11-18 10:19:13', '2021-11-18 10:10:36', '2021-11-18 10:19:13'),
(282, 'App\\Models\\User', 20, 'auth_token', 'cb1fecb43d7c0ebe5d58941dd70d5223f83d478c1a1dee27e35e90f00b9c3a10', '[\"*\"]', '2021-11-18 10:18:26', '2021-11-18 10:18:02', '2021-11-18 10:18:26'),
(283, 'App\\Models\\User', 10, 'auth_token', '45faecf64bf88eb1c1cb5c07dd9dfe5c1289d33564b7ac8a9119f26e106615ad', '[\"*\"]', '2021-11-18 10:19:52', '2021-11-18 10:19:32', '2021-11-18 10:19:52'),
(284, 'App\\Models\\User', 10, 'auth_token', '87a000076e87a6a21243443d9b9b60ae6e04c70a364a5cb19c75f3fd265f2290', '[\"*\"]', '2021-11-18 10:22:09', '2021-11-18 10:20:15', '2021-11-18 10:22:09'),
(285, 'App\\Models\\User', 11, 'auth_token', '1f111e873ede5cf8766740d9a7e8ce44fa52bbf3795d40727d20e5ea13d8920f', '[\"*\"]', '2021-11-18 10:24:17', '2021-11-18 10:23:10', '2021-11-18 10:24:17'),
(286, 'App\\Models\\User', 10, 'auth_token', 'd66f483c8d2a49b963dda6a1448667d471501727ab0a414404556344d39f9f5e', '[\"*\"]', '2021-11-18 10:56:15', '2021-11-18 10:38:43', '2021-11-18 10:56:15'),
(287, 'App\\Models\\User', 10, 'auth_token', '4e144069c05cfda71c25a4a1a728f1fdef58b560cec1d5406beb36e1689e5174', '[\"*\"]', '2021-11-22 10:10:53', '2021-11-18 10:54:01', '2021-11-22 10:10:53'),
(288, 'App\\Models\\User', 11, 'auth_token', '08961699a14d3babc5c0537831b462e9138e79c9545ee7b25928765e668dbd9f', '[\"*\"]', '2021-11-22 10:16:42', '2021-11-18 10:56:25', '2021-11-22 10:16:42'),
(289, 'App\\Models\\User', 20, 'auth_token', '69cd9186d5a83b1feba390b8b68087fc2e83548de0400c9a5774d7b2e29259f0', '[\"*\"]', '2021-11-23 16:54:31', '2021-11-19 01:18:03', '2021-11-23 16:54:31'),
(290, 'App\\Models\\User', 16, 'auth_token', '953925af96c855507f357a2dfacd84f3074aa4023eed4197c81fe9ab58a53751', '[\"*\"]', '2021-11-21 13:03:05', '2021-11-21 12:57:17', '2021-11-21 13:03:05'),
(291, 'App\\Models\\User', 16, 'auth_token', '5cea748093630b861160dc2ba7dcec67cbaa677d137bf2f365823591683fc515', '[\"*\"]', '2021-11-21 13:03:07', '2021-11-21 13:03:06', '2021-11-21 13:03:07'),
(292, 'App\\Models\\User', 10, 'auth_token', '852aee4fe718b5acbacfd65144e3ace80f0d94c38a9ce9fa7225cf38247c85a3', '[\"*\"]', '2021-11-23 17:17:46', '2021-11-21 13:03:32', '2021-11-23 17:17:46'),
(293, 'App\\Models\\User', 10, 'auth_token', 'a5e205c0cf48270e04e6024a4f160f52a835ac9ee9e716e87b98fdb96829f336', '[\"*\"]', '2021-12-02 17:02:08', '2021-11-21 18:06:39', '2021-12-02 17:02:08'),
(294, 'App\\Models\\User', 11, 'auth_token', '389bdaab21ef57c4411e57e3d7dc5fad7d002d92f24bc050019e5557605b09c7', '[\"*\"]', '2021-11-22 10:11:52', '2021-11-22 10:11:50', '2021-11-22 10:11:52'),
(295, 'App\\Models\\User', 10, 'auth_token', '30b9869fbaaeca6899b66e5bc09847f3b717d4084213701d1130f0a23c7d22d5', '[\"*\"]', '2021-11-24 11:43:16', '2021-11-22 10:17:06', '2021-11-24 11:43:16'),
(296, 'App\\Models\\User', 10, 'auth_token', 'd97321007549526c2944d57e69afd8bd9869c421d01363b4d5fa2fa7f02df18b', '[\"*\"]', '2021-11-22 11:29:40', '2021-11-22 10:17:36', '2021-11-22 11:29:40'),
(297, 'App\\Models\\User', 6, 'auth_token', '2f1220b28385dec30b801a3fb28efa6628d14f09c2320b789d758b5a2ce08d5f', '[\"*\"]', '2021-11-22 10:23:49', '2021-11-22 10:22:06', '2021-11-22 10:23:49'),
(298, 'App\\Models\\User', 10, 'auth_token', 'c990261ea35f6a3005cad243504d9e1d3a002c42039b98e69164c1b2d4778ef2', '[\"*\"]', '2021-11-22 10:24:37', '2021-11-22 10:24:12', '2021-11-22 10:24:37'),
(299, 'App\\Models\\User', 11, 'auth_token', '182fa526f6de9b4ac034f904172ac5cabed5dd016590f70e7497cebcca4cfdf7', '[\"*\"]', '2021-11-22 10:26:25', '2021-11-22 10:24:51', '2021-11-22 10:26:25'),
(300, 'App\\Models\\User', 1, 'auth_token', '7f41eff88c69fcfe04b42365fa6ca04ce936804f366d85dd5db2f3e137fe9175', '[\"*\"]', '2021-11-22 20:51:03', '2021-11-22 10:26:40', '2021-11-22 20:51:03'),
(301, 'App\\Models\\User', 6, 'auth_token', '28da7f7878a74e3cebfb7087909b690b945f44502785d3721c1057794c79c668', '[\"*\"]', '2021-11-22 13:49:01', '2021-11-22 11:28:20', '2021-11-22 13:49:01'),
(302, 'App\\Models\\User', 6, 'auth_token', '3a1f0ba0c157b952db9638614d49c695e62319c50cffd250e1e8c76127405014', '[\"*\"]', '2021-11-22 14:55:21', '2021-11-22 12:50:53', '2021-11-22 14:55:21'),
(303, 'App\\Models\\User', 6, 'auth_token', 'f283ea16fc3615ecd9abc3269548dcc7eab4734fe79395f46bf81ccc99f81f3f', '[\"*\"]', '2021-11-23 13:59:29', '2021-11-22 14:57:34', '2021-11-23 13:59:29'),
(304, 'App\\Models\\User', 6, 'auth_token', 'd608f97cedb62256c54e5e96a3b783f8b99a4315e2a750932f997cda59702fb7', '[\"*\"]', '2021-11-24 11:09:56', '2021-11-23 11:31:24', '2021-11-24 11:09:56'),
(305, 'App\\Models\\User', 10, 'auth_token', '22957f5290b0d3d07e9c94075ad949370394395fea5be7ee489c15b7a5532288', '[\"*\"]', '2021-11-23 17:18:44', '2021-11-23 17:18:25', '2021-11-23 17:18:44'),
(306, 'App\\Models\\User', 6, 'auth_token', '248bdce4bc52985070fb29ed5315c97109be15d6ab8406245c051fbde9079007', '[\"*\"]', '2021-11-25 11:20:34', '2021-11-23 17:19:10', '2021-11-25 11:20:34'),
(307, 'App\\Models\\User', 11, 'auth_token', '5949a4abf5612a065231e1ef0fab99a31558b2ee8597e607307cc3dcd4c3e036', '[\"*\"]', '2021-11-24 12:14:22', '2021-11-24 12:14:21', '2021-11-24 12:14:22'),
(308, 'App\\Models\\User', 6, 'auth_token', '059096dbe673f79ec4295db30a7769b5a77245691382eec9bd31acfa8127fad7', '[\"*\"]', '2021-11-25 11:39:17', '2021-11-25 10:07:10', '2021-11-25 11:39:17'),
(309, 'App\\Models\\User', 6, 'auth_token', '3d99ad8395c324b81adc3e9503735be10481364555e0f928df29e2677ac415f5', '[\"*\"]', '2021-11-29 11:44:56', '2021-11-25 12:24:34', '2021-11-29 11:44:56'),
(310, 'App\\Models\\User', 20, 'auth_token', '949fabcdc3f4788c0d60c6cf58d63dde6ca369e318c3656feb01e3ea9a47aad2', '[\"*\"]', '2021-11-25 18:10:46', '2021-11-25 18:08:06', '2021-11-25 18:10:46'),
(311, 'App\\Models\\User', 6, 'auth_token', '4ee0311d04ff87e259863980a6a2be9d15fec81b98d80328e85d1b71a72e7bce', '[\"*\"]', '2021-11-26 14:17:47', '2021-11-25 18:11:14', '2021-11-26 14:17:47'),
(312, 'App\\Models\\User', 18, 'auth_token', 'e377c1fd9fb7a4fd55cfe41a5c5e155006d1fc3d6e44d2d3be5cd0df0b63cdd0', '[\"*\"]', '2021-11-27 11:15:41', '2021-11-27 11:10:51', '2021-11-27 11:15:41'),
(313, 'App\\Models\\User', 18, 'auth_token', '24cfbb48dc89c9eaee7933a3792a9e27a6732f65eab7b91de46c56069de03172', '[\"*\"]', '2021-11-29 12:18:37', '2021-11-29 12:18:06', '2021-11-29 12:18:37'),
(314, 'App\\Models\\User', 16, 'auth_token', 'd6661c5104ff7e1d10270ff25968ed57d3e97f91cf68933587e0a91402999617', '[\"*\"]', '2021-11-29 12:54:18', '2021-11-29 12:33:52', '2021-11-29 12:54:18'),
(315, 'App\\Models\\User', 6, 'auth_token', '322076b265d50b36e83cf2c02f2e3fe1279460887295c87772eed1fdd49b42c8', '[\"*\"]', '2021-11-30 10:50:21', '2021-11-29 12:54:35', '2021-11-30 10:50:21'),
(316, 'App\\Models\\User', 16, 'auth_token', '2e00311308565a3280ad34b3eea66847476ba563a0154ae205b63611cd74a142', '[\"*\"]', '2021-11-30 11:21:07', '2021-11-30 10:51:44', '2021-11-30 11:21:07'),
(317, 'App\\Models\\User', 6, 'auth_token', 'a95260311eeab1c5bf92dedb8aa5792e2d5dd7a1e8d66a2e456b89d3764ee4ba', '[\"*\"]', '2021-11-30 11:43:21', '2021-11-30 11:21:56', '2021-11-30 11:43:21'),
(318, 'App\\Models\\User', 6, 'auth_token', '98e8a52e035a9b95427e1b5628819ab64027bdb42e8fd90361c0c5351d30b5ed', '[\"*\"]', '2021-11-30 12:09:58', '2021-11-30 12:08:55', '2021-11-30 12:09:58'),
(319, 'App\\Models\\User', 10, 'auth_token', '074882b29024edc5c630e4ca1d50fc8bcff86076e07d1c273a66bf368a8021b4', '[\"*\"]', '2021-11-30 12:35:55', '2021-11-30 12:10:19', '2021-11-30 12:35:55'),
(320, 'App\\Models\\User', 10, 'auth_token', '20896d65f3eef438808a47812880c143d6a0fe8e0181a16f9ccf27db46889b8f', '[\"*\"]', '2021-11-30 12:52:19', '2021-11-30 12:23:49', '2021-11-30 12:52:19'),
(321, 'App\\Models\\User', 10, 'auth_token', '437108554bcbfd677e0cba936a0bf1e3bbf7146008700ff249dfbc2e3cb8f3ca', '[\"*\"]', '2021-11-30 12:41:21', '2021-11-30 12:40:57', '2021-11-30 12:41:21'),
(322, 'App\\Models\\User', 6, 'auth_token', '9b67ebc818a1504dda649d7a1a009125e37c41f5612b67c2bdfc6079b76c376b', '[\"*\"]', '2021-12-03 17:20:09', '2021-11-30 13:08:31', '2021-12-03 17:20:09'),
(323, 'App\\Models\\User', 20, 'auth_token', 'f27d6d659f523e29974604be18b34e25c9c914bff5326794c5290d67729d8220', '[\"*\"]', '2021-12-01 11:42:54', '2021-12-01 11:14:40', '2021-12-01 11:42:54'),
(324, 'App\\Models\\User', 6, 'auth_token', '0edab825d96e40450be9c60ca5cdad40ffbbe6f66e7441e96a40ad075dfad818', '[\"*\"]', '2021-12-04 11:15:52', '2021-12-04 11:15:51', '2021-12-04 11:15:52'),
(325, 'App\\Models\\User', 6, 'auth_token', '3ff161bf134beb0f22eaf10eea848ade96a839e521dce3a91f2ad4eaece2d0c0', '[\"*\"]', '2021-12-04 15:06:32', '2021-12-04 11:38:27', '2021-12-04 15:06:32'),
(326, 'App\\Models\\User', 29, 'auth_token', '581620f0fb2dcac62075d3ae1a7e54c5abcd144b65552cdfd3a1aacddf5914a5', '[\"*\"]', NULL, '2023-01-17 03:58:44', '2023-01-17 03:58:44'),
(327, 'App\\Models\\User', 29, 'auth_token', 'eac7f092ff935d2e44f830f5fe6961495402f1fee99f1bd31f0f908134d6c7df', '[\"*\"]', NULL, '2023-01-17 03:58:58', '2023-01-17 03:58:58'),
(328, 'App\\Models\\User', 29, 'auth_token', '0b9ab20e684cddbd7ed81523bb0aa1ded7f52164ef678548fbed6edf777b8d64', '[\"*\"]', NULL, '2023-01-17 04:44:25', '2023-01-17 04:44:25'),
(329, 'App\\Models\\User', 29, 'auth_token', '2036ae180605d5a5332d30ac9fec4aad003c47ff0ff83761d1ec04019bbe018f', '[\"*\"]', NULL, '2023-01-17 04:46:08', '2023-01-17 04:46:08'),
(330, 'App\\Models\\User', 30, 'auth_token', 'd86b1a685d0b661b4329616da3ea9dd4af3f059cec24b27dd02c0e10568dc1d1', '[\"*\"]', NULL, '2023-01-17 04:47:45', '2023-01-17 04:47:45'),
(331, 'App\\Models\\User', 30, 'auth_token', '7185cedd15ec0fb4dba6232fff7a440447567108f7134b4257eaed0a7bb44c5e', '[\"*\"]', NULL, '2023-01-17 04:48:16', '2023-01-17 04:48:16'),
(332, 'App\\Models\\User', 29, 'auth_token', '67f9a89dfcc329b32a220a422ad48ec1972b9f141914444a4e3caabafbaede53', '[\"*\"]', NULL, '2023-01-17 04:48:29', '2023-01-17 04:48:29'),
(333, 'App\\Models\\User', 29, 'auth_token', 'd1aa5e3ef00d5fa13a1984d50f58d06cffe346863b7acdb0a4e3eb4dc563afea', '[\"*\"]', '2023-01-17 05:02:03', '2023-01-17 04:59:41', '2023-01-17 05:02:03'),
(334, 'App\\Models\\User', 29, 'auth_token', '14a53f7780c5af1ae93d34aa388b0a501b4ccecbb09dceac607091dfcb493b0c', '[\"*\"]', NULL, '2023-01-17 05:06:21', '2023-01-17 05:06:21'),
(335, 'App\\Models\\User', 29, 'auth_token', '8db19dd027794ca85dc453d710305d9375c9fe59926fd852914f62c637dd3669', '[\"*\"]', NULL, '2023-01-17 05:07:08', '2023-01-17 05:07:08'),
(336, 'App\\Models\\User', 29, 'auth_token', '0c1c4fab5a24bc3d16fa0c9e9d377a5e2e7b5e5055d3cff115b9c635090bf845', '[\"*\"]', NULL, '2023-01-17 05:07:59', '2023-01-17 05:07:59'),
(337, 'App\\Models\\User', 29, 'auth_token', 'd1d23dca0eb4e5d49d16389a959ccdb7f5ed22d90bc25befa8e6cdb853075568', '[\"*\"]', NULL, '2023-01-17 05:09:02', '2023-01-17 05:09:02'),
(338, 'App\\Models\\User', 29, 'auth_token', '05be43436fe568869a31fa7e1d1512ab13e2f5cdd83ad6403b69943b18b73845', '[\"*\"]', NULL, '2023-01-17 05:09:21', '2023-01-17 05:09:21'),
(339, 'App\\Models\\User', 29, 'auth_token', 'af6ddb0045a4dcaf4dd829da4cd9dad84df17904f34deec820050ed88f05bd0c', '[\"*\"]', NULL, '2023-01-17 05:09:43', '2023-01-17 05:09:43'),
(340, 'App\\Models\\User', 30, 'auth_token', '791a20dccf59f7d8edfec780c843463640403fe9eb146edce7af1f9268b50c89', '[\"*\"]', NULL, '2023-01-17 05:10:30', '2023-01-17 05:10:30'),
(341, 'App\\Models\\User', 30, 'auth_token', '21deb3bd8813be828d44fca5e007e86ad75e698c56d9c57b001846c72f180466', '[\"*\"]', NULL, '2023-01-17 05:10:48', '2023-01-17 05:10:48'),
(342, 'App\\Models\\User', 29, 'auth_token', '94ce9e9417d8f6fcad8d4b603a2decce541759fdd2731036bac2ad0ea1e0548d', '[\"*\"]', NULL, '2023-01-17 06:45:28', '2023-01-17 06:45:28'),
(343, 'App\\Models\\User', 29, 'auth_token', 'fad6308600d2f60d5fb61972f35501b231941fa0a90c13ed7cf6265b1b15563c', '[\"*\"]', NULL, '2023-01-17 06:48:17', '2023-01-17 06:48:17'),
(344, 'App\\Models\\User', 29, 'auth_token', '6b83e7f0f7e3cf7708f00c428421298739af5af6de12f14257cea0cbee029763', '[\"*\"]', NULL, '2023-01-17 06:48:18', '2023-01-17 06:48:18'),
(345, 'App\\Models\\User', 29, 'auth_token', 'bba482f8773d62885f8bf30b124a19f8c235630b4c1f05ef4e2d69296fbf8a4f', '[\"*\"]', NULL, '2023-01-17 06:48:20', '2023-01-17 06:48:20'),
(346, 'App\\Models\\User', 29, 'auth_token', 'a7e942832de593a33a5606a104cf5db72faa6df3a1ec91bd3e5ddc1bebb40994', '[\"*\"]', NULL, '2023-01-17 06:48:31', '2023-01-17 06:48:31'),
(347, 'App\\Models\\User', 29, 'auth_token', 'c8862a4c1b9bd47852f88ebe892c0f58a0fb40f24e0480cf2222e4a31b879bfa', '[\"*\"]', NULL, '2023-01-17 06:48:49', '2023-01-17 06:48:49'),
(348, 'App\\Models\\User', 29, 'auth_token', '90b391137ecaf24d28064729f44495fd311bb27ae2d1a2d660f5c716abeed92b', '[\"*\"]', NULL, '2023-01-17 06:52:51', '2023-01-17 06:52:51'),
(349, 'App\\Models\\User', 29, 'auth_token', '38941aa326336eb62c6d17b6449db1211ec4b4762bc1720ba7093e3da598fa94', '[\"*\"]', NULL, '2023-01-17 06:55:26', '2023-01-17 06:55:26'),
(350, 'App\\Models\\User', 29, 'auth_token', '47950003bf57b7d9b4c99badb3e9e18415ac7129dd19dd4267b05ea9a22cfa11', '[\"*\"]', NULL, '2023-01-17 06:59:12', '2023-01-17 06:59:12'),
(351, 'App\\Models\\User', 29, 'auth_token', 'c2c4a6e52ebf5c001523a34beb59878369e064e19412bf90661f397b38b66bd2', '[\"*\"]', NULL, '2023-01-17 07:02:48', '2023-01-17 07:02:48'),
(352, 'App\\Models\\User', 29, 'auth_token', 'f36839b43eea391416efde0164950f0693544226cfd72f2bf09142a2207d894c', '[\"*\"]', NULL, '2023-01-17 07:03:00', '2023-01-17 07:03:00'),
(353, 'App\\Models\\User', 29, 'auth_token', '209a4e8315e4874b6100838ac5f7b2356227f8673ff9d698c5efa1e8d8967530', '[\"*\"]', NULL, '2023-01-17 07:03:26', '2023-01-17 07:03:26'),
(354, 'App\\Models\\User', 29, 'auth_token', '7dc91dbc2b56ec53ab06bcb2c91fd7dac05c0abffa6d8774100cee0a49d35a72', '[\"*\"]', NULL, '2023-01-17 07:07:20', '2023-01-17 07:07:20'),
(355, 'App\\Models\\User', 29, 'auth_token', '81c17221078e281197b264f57bdffcee7ca29f5b507270b8ee573d6c6c82af46', '[\"*\"]', NULL, '2023-01-17 07:07:50', '2023-01-17 07:07:50'),
(356, 'App\\Models\\User', 29, 'auth_token', '16a163bee7056e90a9dee2144d5e4ec95be30b7b8007164c47a9d5d94352bfdc', '[\"*\"]', NULL, '2023-01-17 07:09:25', '2023-01-17 07:09:25'),
(357, 'App\\Models\\User', 29, 'auth_token', '5f05f882563682d400f807b3d073e5d92e318b91120153e3e61ce3a85f9f1306', '[\"*\"]', NULL, '2023-01-17 07:10:27', '2023-01-17 07:10:27'),
(358, 'App\\Models\\User', 29, 'auth_token', '9a10e1ec8f31c3226d1b5e3181ef067a81025ee90b3ca0f31b9d467cb55fc069', '[\"*\"]', NULL, '2023-01-17 07:10:54', '2023-01-17 07:10:54'),
(359, 'App\\Models\\User', 30, 'auth_token', '18afd4ca3c5aea1a85c0e907332e60b028509e79ad35c10de33bb61f25540651', '[\"*\"]', NULL, '2023-01-17 08:26:36', '2023-01-17 08:26:36'),
(360, 'App\\Models\\User', 29, 'auth_token', '3e604246d54158227ff53fbd2e1f275ca0f0a868af50b06484ac348a6d69e0e4', '[\"*\"]', NULL, '2023-01-17 08:29:52', '2023-01-17 08:29:52'),
(361, 'App\\Models\\User', 29, 'auth_token', '6e2dc8b5cdd0411cef79bfeeab54bee802a79c1928637233aa3750bf5edcf205', '[\"*\"]', NULL, '2023-01-17 08:30:27', '2023-01-17 08:30:27'),
(362, 'App\\Models\\User', 29, 'auth_token', 'fab821fa4efa83008662b10c02b60a8692f0a46937454ded87fac57f7afb6fa4', '[\"*\"]', NULL, '2023-01-17 08:30:34', '2023-01-17 08:30:34'),
(363, 'App\\Models\\User', 29, 'auth_token', '7e24408da25ed3c60c18bf783bdf4059dea6d2416f1734c2f67c76645643eac7', '[\"*\"]', NULL, '2023-01-17 08:31:15', '2023-01-17 08:31:15'),
(364, 'App\\Models\\User', 29, 'auth_token', 'd9a426802f54c4cc63a058e3721c38dd644f99b1655ee8bfec399b1e1497fd58', '[\"*\"]', NULL, '2023-01-17 08:32:12', '2023-01-17 08:32:12'),
(365, 'App\\Models\\User', 30, 'auth_token', '03fa8a74892ff88133c31f8a32b127f87cd0d68a0455a4fc4406ef7bd6be870b', '[\"*\"]', NULL, '2023-01-17 08:32:58', '2023-01-17 08:32:58'),
(366, 'App\\Models\\User', 30, 'auth_token', '451f519a951af68b5a36a057afbeda75d34a4bd009139a5830304b46b8fe4fd0', '[\"*\"]', NULL, '2023-01-17 08:33:04', '2023-01-17 08:33:04'),
(367, 'App\\Models\\User', 30, 'auth_token', '3f54fc193bf97db0d232f1def397dba5a22a4413a86ff74dc14e6bc6d8377ef9', '[\"*\"]', NULL, '2023-01-17 08:33:22', '2023-01-17 08:33:22'),
(368, 'App\\Models\\User', 30, 'auth_token', '46695320fbefe1a7089c366514be0067d5631a7f5cdf4250b64d80c6b5c68999', '[\"*\"]', NULL, '2023-01-17 08:34:23', '2023-01-17 08:34:23'),
(369, 'App\\Models\\User', 29, 'auth_token', '770095f4f509f8352535c41bb1afc82a355e3595eefdbb1ff0f27c7dc70865db', '[\"*\"]', NULL, '2023-01-17 11:11:27', '2023-01-17 11:11:27'),
(370, 'App\\Models\\User', 29, 'auth_token', 'adb44da92a11c259a4a7e746e71193f0e484c160de6d660776be2a9cd10b68c5', '[\"*\"]', NULL, '2023-01-18 07:11:21', '2023-01-18 07:11:21'),
(371, 'App\\Models\\User', 30, 'auth_token', 'f336fa4c7405be16a16ad302da7db4dc31a72ec05e162c139dae209be6fcbe77', '[\"*\"]', NULL, '2023-01-18 07:32:06', '2023-01-18 07:32:06'),
(372, 'App\\Models\\User', 31, 'auth_token', 'c787ce6da3eac6c028c5e623e0ae02fa8109108e1bada6f3ac8fd8a97e798b22', '[\"*\"]', NULL, '2023-01-18 07:32:42', '2023-01-18 07:32:42'),
(373, 'App\\Models\\User', 29, 'auth_token', 'd4168fd275c3499848c2fafad273886f13eef76040a437922c3b671fb442fcd4', '[\"*\"]', NULL, '2023-01-18 08:31:56', '2023-01-18 08:31:56'),
(374, 'App\\Models\\User', 29, 'auth_token', 'b9f90d380bf2f50b332f366678232defc8da57580a3794259f5e6af634700fcd', '[\"*\"]', NULL, '2023-01-18 08:31:59', '2023-01-18 08:31:59'),
(375, 'App\\Models\\User', 29, 'auth_token', '11e042e76c5b9bea6a7aea8fd85f42ce5e4576ba5a46353feb7953839706c0f5', '[\"*\"]', '2023-01-18 08:32:45', '2023-01-18 08:32:45', '2023-01-18 08:32:45'),
(376, 'App\\Models\\User', 30, 'auth_token', '20c0718c9942e08f19e29aaaabd7cd148114704adf36e5f7c1d3e66bb085af85', '[\"*\"]', '2023-01-18 08:33:31', '2023-01-18 08:33:31', '2023-01-18 08:33:31'),
(377, 'App\\Models\\User', 31, 'auth_token', '425bd6696af2d8fe22748efc517cea6299185dc0f092a17c4f4257ab3b989315', '[\"*\"]', NULL, '2023-01-18 08:35:45', '2023-01-18 08:35:45'),
(378, 'App\\Models\\User', 31, 'auth_token', '58e9ba2bff7eac1a3a76e3f8ea912bdfc32b1a042ae2c6fe03503ab9a5f10dfe', '[\"*\"]', NULL, '2023-01-18 08:36:41', '2023-01-18 08:36:41'),
(379, 'App\\Models\\User', 29, 'auth_token', 'bac570d2c326d30311b3981528bba529d649cd2c255d8792d0215d46d69142bf', '[\"*\"]', '2023-01-18 08:40:36', '2023-01-18 08:37:12', '2023-01-18 08:40:36'),
(380, 'App\\Models\\User', 29, 'auth_token', '9821bb42ad63c49ed34aaf05e282a2c94f5d5d5ad4de2cec4834c132d02ffadf', '[\"*\"]', '2023-01-18 08:49:33', '2023-01-18 08:49:07', '2023-01-18 08:49:33'),
(381, 'App\\Models\\User', 29, 'auth_token', 'e76f8617eefd8adabfd9953d3e31f0a90bc8386ba065a2606c44726f460e556f', '[\"*\"]', '2023-01-18 09:01:13', '2023-01-18 08:55:33', '2023-01-18 09:01:13'),
(382, 'App\\Models\\User', 29, 'auth_token', '998705a2aa8ca9911ce977561cd25d2cca3c3b2036096dc7f5b7216f53325d05', '[\"*\"]', '2023-01-18 09:06:40', '2023-01-18 09:02:26', '2023-01-18 09:06:40'),
(383, 'App\\Models\\User', 29, 'auth_token', 'bb3f1ea14724595502fbb486e13e8423bb11f7b90d60d4b7b6fb2fc64fc851a6', '[\"*\"]', '2023-01-18 09:19:15', '2023-01-18 09:13:48', '2023-01-18 09:19:15'),
(384, 'App\\Models\\User', 29, 'auth_token', '7f3516ef16517670e15158a095f22c58dcbd898ac2a206421409f04043dceef9', '[\"*\"]', '2023-01-18 09:27:34', '2023-01-18 09:19:59', '2023-01-18 09:27:34'),
(385, 'App\\Models\\User', 29, 'auth_token', '383e83c8565ec3cb94390a2a511eab8670cc22883cd451c7d22299f1427e4c8f', '[\"*\"]', '2023-01-18 09:30:41', '2023-01-18 09:30:40', '2023-01-18 09:30:41'),
(386, 'App\\Models\\User', 29, 'auth_token', '74287e9f02c1065e4b6fbeddef6547959cf15420d8a315a38beb4f45085e768c', '[\"*\"]', '2023-01-18 09:38:36', '2023-01-18 09:33:59', '2023-01-18 09:38:36'),
(387, 'App\\Models\\User', 29, 'auth_token', '396303dd3ab8e12212dcfa0be765e541ee1ffc80396760a091f3bf8ee795e595', '[\"*\"]', '2023-01-18 09:39:42', '2023-01-18 09:39:40', '2023-01-18 09:39:42'),
(388, 'App\\Models\\User', 29, 'auth_token', 'fc4ceba19c4ffa31050bd5606d9ea63736d7533fa0e492dde74bf7260753144e', '[\"*\"]', '2023-01-18 09:48:06', '2023-01-18 09:45:33', '2023-01-18 09:48:06'),
(389, 'App\\Models\\User', 29, 'auth_token', 'd09a8f388f7300d098c78abcf61c70a99195e3da3ee6ee9762cfd4cf6aba67fe', '[\"*\"]', '2023-01-18 09:50:18', '2023-01-18 09:50:16', '2023-01-18 09:50:18'),
(390, 'App\\Models\\User', 29, 'auth_token', '902afc4eccea235f616198ce797e0f8b8c8e1b5f5bec0ad8e46e8605402381db', '[\"*\"]', '2023-01-18 10:32:26', '2023-01-18 10:32:24', '2023-01-18 10:32:26'),
(391, 'App\\Models\\User', 29, 'auth_token', '6ceae28c829322e9888abf426244054db1f6bc40b8c648c4c53b006c05ca0f25', '[\"*\"]', '2023-01-18 10:35:50', '2023-01-18 10:35:44', '2023-01-18 10:35:50'),
(392, 'App\\Models\\User', 29, 'auth_token', '2e3113aaec80cd2057180ebc6d8285e72c9cc73d431fb3de24c2db8eee18163a', '[\"*\"]', '2023-01-18 10:46:29', '2023-01-18 10:46:21', '2023-01-18 10:46:29'),
(393, 'App\\Models\\User', 29, 'auth_token', 'e6e024c377029bf6875bd3e08bae333f7a72646824f051983437ed2a67c665a0', '[\"*\"]', '2023-01-18 10:49:59', '2023-01-18 10:49:04', '2023-01-18 10:49:59'),
(394, 'App\\Models\\User', 29, 'auth_token', '688bdcec1e885eb86e1a47184f16f06b0eaf5132d90a3758c09f242a3ea0957f', '[\"*\"]', '2023-01-18 10:52:18', '2023-01-18 10:50:46', '2023-01-18 10:52:18'),
(395, 'App\\Models\\User', 29, 'auth_token', '70ef1b900f38efe2d1dc01755d3e80285601c7470b82a38a4d994a73d160f14d', '[\"*\"]', '2023-01-18 10:53:36', '2023-01-18 10:53:08', '2023-01-18 10:53:36'),
(396, 'App\\Models\\User', 30, 'auth_token', 'e731a23cc5b74fa55e35b109ef413f5bb18c037ff65e61f45e7645c9d3131d7a', '[\"*\"]', NULL, '2023-01-18 11:38:29', '2023-01-18 11:38:29'),
(397, 'App\\Models\\User', 30, 'auth_token', '440c2567c7159ec611e950c2e9ffc41a85fc9a2e59a159c52df10357b8cada6d', '[\"*\"]', NULL, '2023-01-18 11:38:31', '2023-01-18 11:38:31'),
(398, 'App\\Models\\User', 29, 'auth_token', '717a435a547bce598e984dc9975aca4ed95162249fc4ce61e4af1a9c517c450e', '[\"*\"]', '2023-01-19 04:19:21', '2023-01-19 04:14:42', '2023-01-19 04:19:21'),
(399, 'App\\Models\\User', 30, 'auth_token', '707eeedf2511fcfec8d3e216b5b5d4274742bb6aaba70f1aef86405791127b66', '[\"*\"]', '2023-01-19 04:34:18', '2023-01-19 04:22:15', '2023-01-19 04:34:18'),
(400, 'App\\Models\\User', 30, 'auth_token', '968198e2b96d03bfa827da85989e5f0940724fdd96a9beb40c9cb55976f58226', '[\"*\"]', '2023-01-19 04:51:52', '2023-01-19 04:36:00', '2023-01-19 04:51:52'),
(401, 'App\\Models\\User', 29, 'auth_token', '9402782ee81451e596f6aec50feff4b9a184ada8b4bbf6985761955155d21de1', '[\"*\"]', '2023-01-19 05:02:58', '2023-01-19 04:53:33', '2023-01-19 05:02:58'),
(402, 'App\\Models\\User', 29, 'auth_token', '1f95c2755978204ae77bd45d84b5cf9a3597bd355eb6e4ccfa34e4d1241bff7f', '[\"*\"]', '2023-01-19 05:03:38', '2023-01-19 05:03:23', '2023-01-19 05:03:38'),
(403, 'App\\Models\\User', 31, 'auth_token', 'df6cbdd1b9c39f60db7616fdf6804b1afe3c8bfc969b12c079874479005bd566', '[\"*\"]', '2023-01-19 05:07:11', '2023-01-19 05:07:08', '2023-01-19 05:07:11'),
(404, 'App\\Models\\User', 29, 'auth_token', '57de613cc830f4dc55e844776e0d852ad5fd44b7813b6a09b94eaafefd2d207a', '[\"*\"]', '2023-01-30 09:54:57', '2023-01-20 04:58:31', '2023-01-30 09:54:57'),
(405, 'App\\Models\\User', 30, 'auth_token', '2436f6e0dabbe6cfce1f1926e2adb10d5b5808d2bcae3d2846cdf0add15da794', '[\"*\"]', '2023-01-20 05:35:31', '2023-01-20 05:35:19', '2023-01-20 05:35:31'),
(406, 'App\\Models\\User', 29, 'auth_token', 'ccf938d8a639f01abca1848a1cd2afaf08b41e75d97151d8a4742300bc37c8ba', '[\"*\"]', '2023-01-20 05:39:27', '2023-01-20 05:38:49', '2023-01-20 05:39:27'),
(407, 'App\\Models\\User', 30, 'auth_token', 'fbc4171910832cd757bd0e9f4b2f96940c86b6983375aca01b1c6316c18759c7', '[\"*\"]', '2023-01-20 05:40:04', '2023-01-20 05:39:59', '2023-01-20 05:40:04'),
(408, 'App\\Models\\User', 30, 'auth_token', '62b214b3809cfd8d6cbf60d47eef62c3981105fdc03d118c9e12b2e1d40733ff', '[\"*\"]', '2023-01-20 06:19:38', '2023-01-20 05:49:18', '2023-01-20 06:19:38'),
(409, 'App\\Models\\User', 30, 'auth_token', 'fa6b08afc5348a69d174d00bce3b335621ba4d19b247029a717852ee58e11035', '[\"*\"]', '2023-01-20 06:49:21', '2023-01-20 06:20:20', '2023-01-20 06:49:21'),
(410, 'App\\Models\\User', 30, 'auth_token', 'd9b42790f3b17b489c617b5e9074541b6edb4827447884e1097d85f868db9a68', '[\"*\"]', '2023-01-20 09:19:43', '2023-01-20 06:50:04', '2023-01-20 09:19:43'),
(411, 'App\\Models\\User', 30, 'auth_token', 'd2d107d2970381099b3157cc8defa0d3c06d466ca16f5c5b79dc1372dbf2fb1e', '[\"*\"]', '2023-01-23 06:06:08', '2023-01-20 07:02:16', '2023-01-23 06:06:08'),
(412, 'App\\Models\\User', 30, 'auth_token', '6aee6b138fa31ea9810d20be80983a6c718e6259635a781ba601d95b7c027455', '[\"*\"]', '2023-01-20 09:21:00', '2023-01-20 09:20:39', '2023-01-20 09:21:00'),
(413, 'App\\Models\\User', 30, 'auth_token', '0fa7619a78bb297c8580fb321f3010d7cb225b264c4207b8c5fe9defb6de15dc', '[\"*\"]', '2023-01-20 10:00:37', '2023-01-20 09:21:27', '2023-01-20 10:00:37'),
(414, 'App\\Models\\User', 29, 'auth_token', 'e5b40c410d8286f7b96bf717777155a53d5dac6c9523e344989a865bb6f27b92', '[\"*\"]', '2023-01-20 10:02:10', '2023-01-20 10:01:20', '2023-01-20 10:02:10'),
(415, 'App\\Models\\User', 30, 'auth_token', '0f0f7e09b3370c4837e2e80cd702ab5501e2a7830f2df8143492dc1d2a35f8af', '[\"*\"]', '2023-01-20 10:11:12', '2023-01-20 10:02:24', '2023-01-20 10:11:12'),
(416, 'App\\Models\\User', 31, 'auth_token', '24723cb673e111977714ea77cdad151e35a1c345155d5a5c1c6e0cec935a9a7a', '[\"*\"]', '2023-01-20 10:14:26', '2023-01-20 10:14:25', '2023-01-20 10:14:26'),
(417, 'App\\Models\\User', 30, 'auth_token', '2c9abfb96dd3d8ba549fb58cf74b15b7f34fb88e43ea3c7e255a55a1e222e607', '[\"*\"]', '2023-01-20 10:57:16', '2023-01-20 10:14:56', '2023-01-20 10:57:16'),
(418, 'App\\Models\\User', 31, 'auth_token', 'ec9929561073d41986c7d99491bbc3dcaaaf56982c24613e2442f2d56812724a', '[\"*\"]', '2023-01-21 09:31:06', '2023-01-20 10:57:53', '2023-01-21 09:31:06'),
(419, 'App\\Models\\User', 30, 'auth_token', '7d4984a16c459425d1761d25fa08c8f6948ba2bce630f93be80e258f3ffbe492', '[\"*\"]', '2023-01-23 04:25:37', '2023-01-21 09:31:31', '2023-01-23 04:25:37'),
(420, 'App\\Models\\User', 31, 'auth_token', '7d4a5e3e13061a303cf32d2a81c767b9e86ea4b2542a68a778d7b0e61a439893', '[\"*\"]', '2023-01-23 04:26:03', '2023-01-23 04:26:03', '2023-01-23 04:26:03'),
(421, 'App\\Models\\User', 30, 'auth_token', '0c8afff12ac12f9b2f156d9d6aa3a5009a0fce2ad57372d17e1413e3fa64b4e0', '[\"*\"]', '2023-01-23 05:36:48', '2023-01-23 04:30:31', '2023-01-23 05:36:48'),
(422, 'App\\Models\\User', 31, 'auth_token', 'fb6caf897040a8abb92f7d0393e15e5731ed1af6de0f5bb73366262d550bf3c8', '[\"*\"]', '2023-01-23 05:42:57', '2023-01-23 05:37:11', '2023-01-23 05:42:57'),
(423, 'App\\Models\\User', 30, 'auth_token', '78cd9953be1ab1c44e31fbd94598ab86753283e1acb44fa1b7285524a9daa43b', '[\"*\"]', '2023-01-23 05:45:33', '2023-01-23 05:45:31', '2023-01-23 05:45:33'),
(424, 'App\\Models\\User', 31, 'auth_token', '4444ee3ec5ed67bef5923a64d04c75d7dc19c04ea49e0c7af8410ebdef609a26', '[\"*\"]', '2023-01-23 06:11:05', '2023-01-23 05:45:55', '2023-01-23 06:11:05'),
(425, 'App\\Models\\User', 30, 'auth_token', '7bd4d6627c419052707c5cc80a027a4eef482f280f63151b16456e459b526e64', '[\"*\"]', NULL, '2023-01-23 06:04:57', '2023-01-23 06:04:57'),
(426, 'App\\Models\\User', 29, 'auth_token', '6c7aa8c77f3a9ef60945d2a62e468e281f90ffaab793722d763e73b72b267aef', '[\"*\"]', NULL, '2023-01-23 06:05:48', '2023-01-23 06:05:48'),
(427, 'App\\Models\\User', 29, 'auth_token', 'e801a2fc10b4a02e0b3c18b58cf4582749c1fb8857276128677d9a8431dc6488', '[\"*\"]', '2023-01-23 06:31:42', '2023-01-23 06:11:58', '2023-01-23 06:31:42'),
(428, 'App\\Models\\User', 29, 'auth_token', '8cdce840517f071886c82fac5b8bb7c06bfec728421737364c963d39368b5723', '[\"*\"]', '2023-01-23 06:32:41', '2023-01-23 06:32:07', '2023-01-23 06:32:41'),
(429, 'App\\Models\\User', 29, 'auth_token', 'b490a1b80227d99daaa6dbe620cd61f6963cab08eade4592ee67c427dcc347c8', '[\"*\"]', '2023-01-23 06:33:57', '2023-01-23 06:33:54', '2023-01-23 06:33:57'),
(430, 'App\\Models\\User', 30, 'auth_token', 'f77de54fc5e6a11dd24d232b63cd15cf1626beaa7867aba49a7b288c3362bce4', '[\"*\"]', '2023-01-23 06:36:51', '2023-01-23 06:34:33', '2023-01-23 06:36:51'),
(431, 'App\\Models\\User', 31, 'auth_token', '957cb954e3edee1ca7991c0c051b4360128a384ba393c99f3096c51c91798ad2', '[\"*\"]', '2023-01-23 06:39:54', '2023-01-23 06:37:13', '2023-01-23 06:39:54'),
(432, 'App\\Models\\User', 29, 'auth_token', 'bda08c176fd08f514631c8b2af7955d313b2c5cfcce1852ef3f76648f5865090', '[\"*\"]', '2023-01-23 06:40:31', '2023-01-23 06:40:15', '2023-01-23 06:40:31'),
(433, 'App\\Models\\User', 30, 'auth_token', '30049b9fe1401071a4cb150e8f9c5a5f675f805a605be93cfa43001e678d85f3', '[\"*\"]', '2023-01-23 06:41:34', '2023-01-23 06:40:52', '2023-01-23 06:41:34'),
(434, 'App\\Models\\User', 30, 'auth_token', '1bfb6a9eb651d9e83d16b37fed3fa097d05d01fe7bb8e4ee4a1b74d5cc4507cb', '[\"*\"]', '2023-01-23 06:42:14', '2023-01-23 06:42:06', '2023-01-23 06:42:14'),
(435, 'App\\Models\\User', 31, 'auth_token', '15f070665e7ec9121382f72b15b147f722c3f5568412351e6d8aba533f65878d', '[\"*\"]', '2023-01-23 06:48:19', '2023-01-23 06:43:43', '2023-01-23 06:48:19'),
(436, 'App\\Models\\User', 31, 'auth_token', '9d435d0bd4246de63f1a3fbc9c15634e1b6d376d308eb4ff40cdbd5f982a4cb5', '[\"*\"]', '2023-01-23 06:51:31', '2023-01-23 06:49:40', '2023-01-23 06:51:31'),
(437, 'App\\Models\\User', 30, 'auth_token', '07bf7e588ddb8e3ef19d168191e191bd6175f3ebe189413a3b59f757a304397e', '[\"*\"]', '2023-01-23 06:51:49', '2023-01-23 06:51:45', '2023-01-23 06:51:49'),
(438, 'App\\Models\\User', 29, 'auth_token', '179195cd0d66177d8677af0b41196c920d5884cc42cc456ea19e9d52e4b8a410', '[\"*\"]', '2023-01-23 06:53:13', '2023-01-23 06:52:20', '2023-01-23 06:53:13'),
(439, 'App\\Models\\User', 29, 'auth_token', '74929f7829367b608384c558e3a247f294b3009a36e3537ae90465d580ee7fd2', '[\"*\"]', '2023-01-23 06:53:52', '2023-01-23 06:53:28', '2023-01-23 06:53:52'),
(440, 'App\\Models\\User', 29, 'auth_token', '9036d66df27bbbdf9f8f3356d3b0da73823c13de3a28090830eca186cd9f18cb', '[\"*\"]', '2023-01-23 06:54:22', '2023-01-23 06:54:19', '2023-01-23 06:54:22'),
(441, 'App\\Models\\User', 29, 'auth_token', '16d127866d59e975cdd7983a8c2c6f1379676332bffc5621dfbcfd2b54903e8f', '[\"*\"]', '2023-01-23 07:29:24', '2023-01-23 07:28:15', '2023-01-23 07:29:24'),
(442, 'App\\Models\\User', 29, 'auth_token', 'e4fa69b16228515dea5f1f5d7d7545ef3b666aadefd91111c538a1482d0387bb', '[\"*\"]', '2023-01-23 07:31:00', '2023-01-23 07:30:13', '2023-01-23 07:31:00'),
(443, 'App\\Models\\User', 29, 'auth_token', '6172d528e6c35ddf8f0783240ebda06634085cf9689a6cc749bcdd3b1e7790f2', '[\"*\"]', '2023-01-23 09:01:11', '2023-01-23 07:31:13', '2023-01-23 09:01:11'),
(444, 'App\\Models\\User', 30, 'auth_token', '1ed452d2b1369a997c3b8878cdd88198595669f0de2f7792043947d8320d8299', '[\"*\"]', '2023-01-23 09:31:56', '2023-01-23 09:16:25', '2023-01-23 09:31:56'),
(445, 'App\\Models\\User', 31, 'auth_token', 'e197bbc7730e131d86f156cb5815bad121658b6a8eb905ff06e8c3db17b8c91c', '[\"*\"]', '2023-01-23 09:42:32', '2023-01-23 09:32:18', '2023-01-23 09:42:32'),
(446, 'App\\Models\\User', 29, 'auth_token', '198c6452dded789b98e63499012c86423732ea7dd78c79c6a9e94d612ad44a95', '[\"*\"]', '2023-01-23 10:01:28', '2023-01-23 09:59:17', '2023-01-23 10:01:28'),
(447, 'App\\Models\\User', 30, 'auth_token', '48eec3bc0d2f3731dc440d695de78d3478b20d2fab6ec96f0dd3ea7dc64619f6', '[\"*\"]', '2023-01-23 10:01:59', '2023-01-23 10:01:44', '2023-01-23 10:01:59'),
(448, 'App\\Models\\User', 31, 'auth_token', '9793195a4aeb5061e7b791cf7ebdcfea770373384faf44feef6f94f3d250c56b', '[\"*\"]', '2023-01-23 10:02:59', '2023-01-23 10:02:20', '2023-01-23 10:02:59'),
(449, 'App\\Models\\User', 29, 'auth_token', '061514dd7d0232a9d69e73132ca5b3cc2aec0326664e7e126574db55106514ff', '[\"*\"]', '2023-01-23 10:26:55', '2023-01-23 10:25:27', '2023-01-23 10:26:55'),
(450, 'App\\Models\\User', 30, 'auth_token', '31aee5ebca039e74759c75843b6f06ad8062850421513407019983717ac69a3b', '[\"*\"]', '2023-01-23 10:27:25', '2023-01-23 10:27:10', '2023-01-23 10:27:25'),
(451, 'App\\Models\\User', 31, 'auth_token', '836028da01eb4544c78655e958d817ad7f0b28bf1e438fcbbfe5b37dadc7fe0b', '[\"*\"]', '2023-01-23 10:28:10', '2023-01-23 10:27:42', '2023-01-23 10:28:10'),
(452, 'App\\Models\\User', 29, 'auth_token', '220fe06a424e2293bee6c1f3a16a1acd1840df728c8ba90577ab59f132e9b329', '[\"*\"]', '2023-01-23 10:33:05', '2023-01-23 10:32:51', '2023-01-23 10:33:05'),
(453, 'App\\Models\\User', 30, 'auth_token', '61b4a8d3fa113154108b95f272d919147321fd37908e567d0286488e8b6f33e5', '[\"*\"]', '2023-01-23 10:39:59', '2023-01-23 10:33:36', '2023-01-23 10:39:59'),
(454, 'App\\Models\\User', 30, 'auth_token', 'a16744adebd29ea322accbbc24d1b38e8c568875f572fc5746af0f0b8651b410', '[\"*\"]', '2023-01-30 10:18:49', '2023-01-23 10:35:23', '2023-01-30 10:18:49'),
(455, 'App\\Models\\User', 29, 'auth_token', '6fe1ec2f0669a21903183f70bd48a7a914353f6284c6c1db36fc27b05001a215', '[\"*\"]', '2023-01-23 11:45:30', '2023-01-23 11:42:57', '2023-01-23 11:45:30'),
(456, 'App\\Models\\User', 29, 'auth_token', 'c267ad4145205dc26bbfb0d5542af4b66f0fd0d468e8a3492379ce61abdb8e25', '[\"*\"]', '2023-01-24 04:15:45', '2023-01-24 04:06:48', '2023-01-24 04:15:45'),
(457, 'App\\Models\\User', 30, 'auth_token', 'be3022f0611358eb4c149a9fcf77aba1d6b36e7175a369bba9ab697e14381366', '[\"*\"]', '2023-01-24 04:34:12', '2023-01-24 04:18:22', '2023-01-24 04:34:12'),
(458, 'App\\Models\\User', 29, 'auth_token', '6e5587b7c928c59aa73d0eaf1b7897b03388b07b15bb314c7ed63a256fe004f9', '[\"*\"]', '2023-01-24 04:49:25', '2023-01-24 04:34:32', '2023-01-24 04:49:25'),
(459, 'App\\Models\\User', 29, 'auth_token', '3ffd0182423a741e44901af14505d2580731e28b408e63cd9e43f191231decfe', '[\"*\"]', '2023-01-24 05:06:56', '2023-01-24 04:50:13', '2023-01-24 05:06:56'),
(460, 'App\\Models\\User', 30, 'auth_token', '40313e9f54786ceec0a1248f586527222dd46dd032b2260214b9ce143cde6a6f', '[\"*\"]', '2023-01-24 05:42:41', '2023-01-24 04:51:58', '2023-01-24 05:42:41'),
(461, 'App\\Models\\User', 29, 'auth_token', '7886b7c178e830bc2211e3ee56433ac47cd3df5cccca47b1d8aa2950cf164c73', '[\"*\"]', '2023-01-24 05:24:53', '2023-01-24 05:06:30', '2023-01-24 05:24:53'),
(462, 'App\\Models\\User', 30, 'auth_token', '332c9dddac8aa975ed03010c89ee81b8694a3a80958918b72064eb63ce2b02cc', '[\"*\"]', '2023-01-24 05:25:53', '2023-01-24 05:25:53', '2023-01-24 05:25:53'),
(463, 'App\\Models\\User', 29, 'auth_token', 'fa5b9e5b4b04731747e61d35567a8599d63791547faba0dbde9cd3787f6351fb', '[\"*\"]', '2023-01-24 05:38:11', '2023-01-24 05:27:24', '2023-01-24 05:38:11'),
(464, 'App\\Models\\User', 29, 'auth_token', 'c9a2e72377dce94b727a9de74ce4e8e03aa028eaeceb3e75215aa3aa4df8da8d', '[\"*\"]', '2023-01-24 09:34:07', '2023-01-24 06:46:21', '2023-01-24 09:34:07'),
(465, 'App\\Models\\User', 30, 'auth_token', 'ecb3300012babc57df62720f25295a214b344c892e0bf9c8c82b5d8bd441d7b2', '[\"*\"]', '2023-01-24 07:06:34', '2023-01-24 07:05:16', '2023-01-24 07:06:34'),
(466, 'App\\Models\\User', 29, 'auth_token', '8351b5498728b7fefda35e93fa5f94d17be9c85422a68a12a9524baecf33ca6d', '[\"*\"]', '2023-01-30 11:46:22', '2023-01-24 08:44:41', '2023-01-30 11:46:22'),
(467, 'App\\Models\\User', 29, 'auth_token', 'ad467e620aa3453009f1588ef1bcfdc018169f022ff8298dc22450a927cd2c37', '[\"*\"]', '2023-01-24 09:55:29', '2023-01-24 09:52:54', '2023-01-24 09:55:29'),
(468, 'App\\Models\\User', 29, 'auth_token', '5af519309520c487d9c916e352608aa186d59e0ad24e8acd2c4ac577b930557b', '[\"*\"]', '2023-01-24 09:56:35', '2023-01-24 09:55:57', '2023-01-24 09:56:35'),
(469, 'App\\Models\\User', 30, 'auth_token', '58de0e2b7b2693e6977ea12b63810a18309745f40ffb4ab9e5daf2dcef407da0', '[\"*\"]', '2023-01-24 09:57:11', '2023-01-24 09:57:01', '2023-01-24 09:57:11'),
(470, 'App\\Models\\User', 31, 'auth_token', '52a2fe8d08484da937c96ee5693221ba01e48176128b81cb299476d96ef31ab1', '[\"*\"]', '2023-01-24 11:18:49', '2023-01-24 09:57:34', '2023-01-24 11:18:49'),
(471, 'App\\Models\\User', 29, 'auth_token', 'ddfd2a92a41c648ff052421912fa3364472e033090d2f0f7eefd4dba4e49617c', '[\"*\"]', '2023-01-24 12:06:58', '2023-01-24 12:05:36', '2023-01-24 12:06:58'),
(472, 'App\\Models\\User', 29, 'auth_token', 'fe8adc632d724469c9b57bb87750c87e9dc5cc12ee780daa6761244800934b5b', '[\"*\"]', '2023-01-24 12:11:50', '2023-01-24 12:11:18', '2023-01-24 12:11:50'),
(473, 'App\\Models\\User', 29, 'auth_token', 'faa21a2be08af01714602be58e8bb63e2a7e0c758f5198e11ba2f1baa70a6e00', '[\"*\"]', '2023-01-26 07:51:49', '2023-01-24 15:49:35', '2023-01-26 07:51:49'),
(474, 'App\\Models\\User', 29, 'auth_token', '81fbf846d1df3c0400180d75702f9cf53d7d58ede9e809b4821e37d19b315000', '[\"*\"]', '2023-01-30 05:43:32', '2023-01-25 04:08:23', '2023-01-30 05:43:32'),
(475, 'App\\Models\\User', 29, 'auth_token', 'a52aaabda78d0ba3c763f07ad0c1eafb5e98d4d631dde823fbc1d0f541ca88ed', '[\"*\"]', '2023-01-25 05:16:17', '2023-01-25 05:15:44', '2023-01-25 05:16:17'),
(476, 'App\\Models\\User', 29, 'auth_token', 'c581b7da0b4fa87ec83970e39f8a2320594a722d9835a93c1a795cdc7acfaa71', '[\"*\"]', '2023-01-25 05:18:12', '2023-01-25 05:18:03', '2023-01-25 05:18:12'),
(477, 'App\\Models\\User', 29, 'auth_token', 'f97c3afb550cf68a7a795ee9fe1290143e0f9db80215f93ce38b7f9787eba08c', '[\"*\"]', '2023-01-25 05:31:59', '2023-01-25 05:30:59', '2023-01-25 05:31:59'),
(478, 'App\\Models\\User', 29, 'auth_token', '0907368325fe750220870138f6c3184d87995d445afed3c8011f270289449674', '[\"*\"]', '2023-01-30 09:57:43', '2023-01-25 09:31:32', '2023-01-30 09:57:43'),
(479, 'App\\Models\\User', 29, 'auth_token', '76b67d4e6a15eb78a035035f1f1b38cb11b58d9a748528986939f556c4ba9d7e', '[\"*\"]', '2023-01-25 09:46:54', '2023-01-25 09:44:24', '2023-01-25 09:46:54'),
(480, 'App\\Models\\User', 30, 'auth_token', 'd3f919933b8d7a9ffd399a1a6f1a57383b06314e530ac7773c745836ef838817', '[\"*\"]', '2023-01-25 10:46:39', '2023-01-25 09:48:02', '2023-01-25 10:46:39'),
(481, 'App\\Models\\User', 29, 'auth_token', 'de113e012dc18e178b96254c84e22b17ab6c8f13d113baa382ca397e24e09b30', '[\"*\"]', '2023-01-25 10:51:35', '2023-01-25 10:49:00', '2023-01-25 10:51:35'),
(482, 'App\\Models\\User', 30, 'auth_token', 'e33b3b5dd937d04ebd5f250d814c5e8b317a7be9573d94b28399927e5f3d5e85', '[\"*\"]', '2023-01-25 10:56:32', '2023-01-25 10:54:22', '2023-01-25 10:56:32'),
(483, 'App\\Models\\User', 31, 'auth_token', '8c8f3e8079e6f3c847b0c05b39817eb293e34abaf4abd007179241e7e4aaa1e6', '[\"*\"]', '2023-01-25 10:59:51', '2023-01-25 10:57:41', '2023-01-25 10:59:51'),
(484, 'App\\Models\\User', 30, 'auth_token', 'a602908ffb8664c294a9f2734f839500c6b7a1267bdf992bcb5ba24546411c46', '[\"*\"]', '2023-01-25 11:04:21', '2023-01-25 11:02:46', '2023-01-25 11:04:21'),
(485, 'App\\Models\\User', 30, 'auth_token', 'b85fa76ac2f7a3046864f7ae5861d4fde2d0aa451021bc9f2b71fb3aead06d3a', '[\"*\"]', '2023-01-26 07:54:45', '2023-01-26 07:52:39', '2023-01-26 07:54:45'),
(486, 'App\\Models\\User', 31, 'auth_token', 'c4d52209d0ca00b92e41772c8fc71af564937b3435e8e863a64d40fdede3c704', '[\"*\"]', '2023-01-26 07:56:16', '2023-01-26 07:55:20', '2023-01-26 07:56:16'),
(487, 'App\\Models\\User', 30, 'auth_token', '673b250fdf91f2823616a6a59cf94ea6daea47521a20f6aba570fc9e2baad575', '[\"*\"]', '2023-01-30 05:44:26', '2023-01-30 05:44:26', '2023-01-30 05:44:26'),
(488, 'App\\Models\\User', 29, 'auth_token', 'e90445b81c416a4e4a0297c0242a0f4762d23aede673a9235d1c98fbcc7c345b', '[\"*\"]', '2023-01-30 05:48:56', '2023-01-30 05:45:01', '2023-01-30 05:48:56'),
(489, 'App\\Models\\User', 30, 'auth_token', '45e630865d2dea92ee88a36cb8867360f1fb122fb9269bbd0d57e5d12bf87d41', '[\"*\"]', '2023-01-30 05:51:16', '2023-01-30 05:51:15', '2023-01-30 05:51:16'),
(490, 'App\\Models\\User', 29, 'auth_token', 'ce84970c8bfc38aaccef51581c6c53a755b961a67162d64658b61ca4508c2aa5', '[\"*\"]', '2023-01-30 06:02:54', '2023-01-30 05:51:38', '2023-01-30 06:02:54'),
(491, 'App\\Models\\User', 30, 'auth_token', 'f83157faaa3d0bf86f97f9fa3e90bd71a562514b685d4193d55ac2f953175586', '[\"*\"]', '2023-01-30 06:37:25', '2023-01-30 06:09:34', '2023-01-30 06:37:25'),
(492, 'App\\Models\\User', 29, 'auth_token', '24eb8092c18831348c786ee39c3c3d6dfc474cec91239665818245708d55f34d', '[\"*\"]', '2023-01-30 09:14:24', '2023-01-30 06:37:55', '2023-01-30 09:14:24'),
(493, 'App\\Models\\User', 30, 'auth_token', 'b4e196f717fae3d7e027d5094e6667f34f677cea500fc20fe076003e767d72b6', '[\"*\"]', '2023-02-02 06:55:17', '2023-01-30 09:14:44', '2023-02-02 06:55:17'),
(494, 'App\\Models\\User', 30, 'auth_token', '9e19c426d0a4559d0278305bd6bf0e000dccbdd7331e85b1309cd249dabc9aca', '[\"*\"]', '2023-01-30 10:03:00', '2023-01-30 09:58:00', '2023-01-30 10:03:00'),
(495, 'App\\Models\\User', 30, 'auth_token', '4a0219b50f9acd20d8e460cb52130e77a9f7c94654cadb3fa35c33137274703e', '[\"*\"]', '2023-01-30 10:11:24', '2023-01-30 10:04:31', '2023-01-30 10:11:24'),
(496, 'App\\Models\\User', 30, 'auth_token', 'a55b32a22f275896f7adf6f2436f27a92c831eb28795a17a3ade19f93df872ad', '[\"*\"]', '2023-01-30 10:26:08', '2023-01-30 10:11:38', '2023-01-30 10:26:08'),
(497, 'App\\Models\\User', 30, 'auth_token', '3a1167416525f1eb18ca56d2bc4e870965f67fdf9a3f615a4c59655ec7f1bbf7', '[\"*\"]', '2023-02-04 10:51:45', '2023-01-31 10:40:38', '2023-02-04 10:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `questioncategories`
--

CREATE TABLE `questioncategories` (
  `id` int(11) NOT NULL,
  `question_category` varchar(250) DEFAULT NULL,
  `question_category_ar` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questioncategories`
--

INSERT INTO `questioncategories` (`id`, `question_category`, `question_category_ar`, `created_at`, `updated_at`) VALUES
(1, 'General Site', 'الموقع العام', '2022-12-09 04:32:04', '2022-12-09 04:32:04'),
(2, 'Sytems', 'الأنظمة', '2022-12-09 04:32:21', '2022-12-09 04:32:21'),
(3, 'Electrical Equipments', 'معدات كهربائية', '2023-01-25 06:24:00', '2023-01-25 06:24:00'),
(4, 'Employees', 'الموظفين', '2023-01-25 06:24:46', '2023-01-25 06:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-09-30 23:35:16', '2021-10-01 14:20:15'),
(2, 'Station Supervisor', '2021-09-30 23:35:40', '2021-10-01 00:02:45'),
(3, 'Facility Manager', '2021-09-30 23:36:10', '2021-09-30 23:36:10'),
(4, 'Facility Labour', '2021-09-30 23:36:52', '2021-09-30 23:36:52'),
(5, 'Manager', '2021-09-30 23:37:13', '2021-09-30 23:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `station_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `questions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `station_code`, `station_name`, `station_name_ar`, `region`, `phone`, `image`, `lat`, `lng`, `address`, `address_ar`, `questions`, `created_at`, `updated_at`) VALUES
(1, 'CR002', 'MVPI Station - Riyadh 1', 'محطة عناية', 'North', '8943437618', 'https://odoos.in/apps/PetroFast_New/uploads/01232023060420logo.png', '11.3160169', '75.9979955', 'MVPI Station - Riyadh', 'MVPI Station - Riyadh', '1,2,3,4,5,6,7,8,9,10', '2021-10-03 23:48:59', '2023-01-25 09:39:32'),
(3, 'CR002', 'MVPI Station - Riyadh 2', 'محطة عناية', 'North', '8943437618', 'https://odoos.in/apps/PetroFast_New/uploads/01232023060432logo.png', '24.774265', '46.738586', 'MVPI Station - Riyadh', 'MVPI Station - Riyadh', '1,2,3,4,5,6,7,8,9,10', '2021-10-04 00:57:20', '2023-01-25 09:39:41'),
(4, 'CR003', 'MVPI Station - Riyadh 3', 'محطة عناية', 'North', '8943437618', 'https://odoos.in/apps/PetroFast_New/uploads/01232023060447logo.png', '32.42865739641981', '55.600888899360655', 'MVPI Station - Riyadh', 'MVPI Station - Riyadh', '1,2,3,4,5,6,7,8,9,10', '2021-10-04 00:59:44', '2023-01-25 09:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestions`
--

CREATE TABLE `surveyquestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `response1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_category_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `response1_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response2_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveyquestions`
--

INSERT INTO `surveyquestions` (`id`, `question_category`, `question_type`, `question`, `response1`, `response2`, `question_category_ar`, `question_ar`, `response1_ar`, `response2_ar`, `created_at`, `updated_at`) VALUES
(1, 'General Site', 'Yes/No', 'Ensure the safety of entrance and exit,and the asence of excavations and obstacles', 'Good', 'Bad', 'الموقع العام', 'التأكد من سلامة المدخل والمخرج وعدم وجود حفريات ومعوقات', 'حسن', 'سيء', '2021-10-14 23:48:54', '2021-10-14 23:49:21'),
(2, 'General Site', 'Yes/No', 'Ensure that the general site is clean', 'Good', 'Bad', 'الموقع العام', 'تأكد من نظافة الموقع العام', 'حسن', 'سيء', '2021-10-14 23:50:12', '2021-10-14 23:50:12'),
(3, 'Systems', 'Yes/No', 'Ensure the operation of Gilbarcofuel tank metering system(gilparco system))', 'Good', 'Bad', 'الأنظمة', 'التأكد من عمل نظام جلباركو لقياس خزانات الوقود (نظام جلباركو)', 'حسن', 'سيء', '2022-12-09 04:40:41', '2022-12-09 04:40:41'),
(4, 'Electrical Equipments', 'Yes/No', 'All camera working', 'Working', 'Not Working', 'المعدات الكهربائية', 'هل الكاميرات وشاشة العرض تعمل بالكامل؟', 'تعمل بالكامل', 'لا تعمل بالكامل', '2023-01-25 06:26:26', '2023-01-25 09:29:46'),
(5, 'Electrical Equipments', 'Yes/No', 'All Plates and lights working', 'Working', 'Not Working', 'المعدات الكهربائية', 'اللوحات و الاضاءة - تعمل؟', 'تعمل بالكامل', 'لا تعمل بالكامل', '2023-01-25 06:28:07', '2023-01-25 06:28:07'),
(6, 'Employees', 'Yes/No', 'Workers housing clean', 'Good', 'Bad', 'الموظفين', 'سكن العمال نظيف - سليم ؟', 'حسن', 'سيء', '2023-01-25 06:46:07', '2023-01-25 06:46:07'),
(7, 'Systems', 'Yes/No', 'Safety equipment and fixed and mobile fire extinguishers Working - Complete ?', 'Yes', 'No', 'الأنظمة', 'معدات السلامة و طفايات الحريق الثابتة و المتحركة تعمل بالكامل - مكتملة ؟', 'نعم', 'لا', '2023-01-25 15:04:28', '2023-01-25 15:04:28'),
(8, 'Electrical Equipments', 'Yes/No', '(Gasoline-Diesel) Pumps Working Complete?', 'Yes', 'No', 'المعدات الكهربائية', 'مضخات (البنزين-الديزل) تعمل كاملة بشكل سليم ؟', 'نعم', 'لا', '2023-01-25 15:07:07', '2023-01-25 15:07:07'),
(9, 'Employees', 'Yes/No', 'Clothes and working tools Clean - Complete?', 'Yes', 'نعم', 'الموظفين', 'ملابس و أدوات العمل نظيفة - مكتملة ؟', 'No', 'لا', '2023-01-25 09:46:06', '2023-01-25 09:46:06'),
(10, 'General Site', 'Yes/No', 'Mosqe and WC and The facilities Clean - OK ?', 'Yes', 'نعم', 'الموقع العام', 'المسجد و دورات المياه نظيفة - سليمة؟', 'No', 'لا', '2023-01-25 09:48:01', '2023-01-25 09:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supervisor` int(11) NOT NULL,
  `station` int(11) NOT NULL,
  `survey_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `survey_response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT '0' COMMENT '0-station',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `supervisor`, `station`, `survey_no`, `survey_response`, `date`, `status`, `type`, `created_at`, `updated_at`) VALUES
(16, 29, 1, '#123089211974693', '{\"General Site\":[{\"id\":1,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure the safety of entrance and exit,and the asence of excavations and obstacles\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:48:54.000000Z\",\"updated_at\":\"2021-10-14T23:49:21.000000Z\",\"notes\":\"Kkk\",\"buttonValue\":\"Good\",\"question_id\":1,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01182023093612e4b8c79f-bfb0-49ae-bac9-d588a4f56170.JPEG\\\",\\\"id\\\":\\\"1674034518963\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01182023093612e4b8c79f-bfb0-49ae-bac9-d588a4f56170.JPEG\\\"},{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01182023093612cdc5bc0f-9763-46bc-bd7d-71e0418bf713.JPEG\\\",\\\"id\\\":\\\"1674034541950\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01182023093612cdc5bc0f-9763-46bc-bd7d-71e0418bf713.JPEG\\\"}]\"},{\"id\":2,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure that the general site is clean\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:50:12.000000Z\",\"updated_at\":\"2021-10-14T23:50:12.000000Z\",\"notes\":\"Ooo\",\"buttonValue\":\"Good\",\"question_id\":2,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/0118202309361290637d71-754f-4bae-bf3a-2790549ce5c0.JPEG\\\",\\\"id\\\":\\\"1674034565872\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/0118202309361290637d71-754f-4bae-bf3a-2790549ce5c0.JPEG\\\"}]\"}]}', '2023-01-18', 'Completed', 0, '2023-01-18 09:36:13', '2023-01-18 09:36:13'),
(17, 29, 1, '#983026019752406', '{\"General Site\":[{\"id\":1,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure the safety of entrance and exit,and the asence of excavations and obstacles\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:48:54.000000Z\",\"updated_at\":\"2021-10-14T23:49:21.000000Z\",\"notes\":\"Aaa\",\"buttonValue\":\"Good\",\"question_id\":1,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102605e69ceb8f-74b3-467d-b9be-402955466457.JPEG\\\",\\\"id\\\":\\\"1674469561933\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01232023102605e69ceb8f-74b3-467d-b9be-402955466457.JPEG\\\"}]\"},{\"id\":2,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure that the general site is clean\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:50:12.000000Z\",\"updated_at\":\"2021-10-14T23:50:12.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":2,\"label_answer\":\"\",\"images\":\"[]\"}]}', '2023-01-23', 'Completed', 0, '2023-01-23 10:26:05', '2023-01-23 10:26:05'),
(19, 29, 3, '#766208038752309', '{\"General Site\":[{\"id\":1,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure the safety of entrance and exit,and the asence of excavations and obstacles\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:48:54.000000Z\",\"updated_at\":\"2021-10-14T23:49:21.000000Z\",\"notes\":\"Hg\",\"buttonValue\":\"Good\",\"question_id\":1,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023070017e2761c47-68da-4f3c-81c5-a5bf2b8edd80.JPEG\\\",\\\"id\\\":\\\"1674543614665\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023070017e2761c47-68da-4f3c-81c5-a5bf2b8edd80.JPEG\\\"}]\"},{\"id\":2,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure that the general site is clean\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:50:12.000000Z\",\"updated_at\":\"2021-10-14T23:50:12.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":2,\"label_answer\":\"\",\"images\":\"[]\"}]}', '2023-01-24', 'Completed', 0, '2023-01-24 07:00:17', '2023-01-24 07:00:17'),
(21, 29, 1, '#555806024172005', '{\"General Site\":[{\"id\":1,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure the safety of entrance and exit,and the asence of excavations and obstacles\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:48:54.000000Z\",\"updated_at\":\"2021-10-14T23:49:21.000000Z\",\"notes\":\"Testing\",\"buttonValue\":\"Good\",\"question_id\":1,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023095421fdef746b-2b40-4d70-8f4a-5290a9264ae3.JPEG\\\",\\\"id\\\":\\\"1674554040129\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023095421fdef746b-2b40-4d70-8f4a-5290a9264ae3.JPEG\\\"}]\"},{\"id\":2,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure that the general site is clean\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:50:12.000000Z\",\"updated_at\":\"2021-10-14T23:50:12.000000Z\",\"notes\":\"Test\",\"buttonValue\":\"Good\",\"question_id\":2,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023095421c11e217a-3517-4f51-83ed-fecd739ed685.JPEG\\\",\\\"id\\\":\\\"1674554059049\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01242023095421c11e217a-3517-4f51-83ed-fecd739ed685.JPEG\\\"}]\"}]}', '2023-01-24', 'Completed', 0, '2023-01-24 09:54:21', '2023-01-24 09:54:21'),
(22, 29, 1, '#833397929136861', '{\"Employees\":[{\"id\":6,\"question_category\":\"Employees\",\"question_type\":\"Yes/No\",\"question\":\"Workers housing clean\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2023-01-25T06:46:07.000000Z\",\"updated_at\":\"2023-01-25T06:46:07.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":6,\"label_answer\":\"\",\"images\":\"[]\"},{\"id\":9,\"question_category\":\"Employees\",\"question_type\":\"Yes/No\",\"question\":\"Clothes and working tools Clean - Complete?\",\"response1\":\"Yes\",\"response2\":\"نعم\",\"created_at\":\"2023-01-25T09:46:06.000000Z\",\"updated_at\":\"2023-01-25T09:46:06.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":9,\"label_answer\":\"\",\"images\":\"[]\"}],\"General Site\":[{\"id\":1,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure the safety of entrance and exit,and the asence of excavations and obstacles\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:48:54.000000Z\",\"updated_at\":\"2021-10-14T23:49:21.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":1,\"label_answer\":\"\",\"images\":\"[]\"},{\"id\":2,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure that the general site is clean\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:50:12.000000Z\",\"updated_at\":\"2021-10-14T23:50:12.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":2,\"label_answer\":\"\",\"images\":\"[]\"},{\"id\":10,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Mosqe and WC and The facilities Clean - OK ?\",\"response1\":\"Yes\",\"response2\":\"نعم\",\"created_at\":\"2023-01-25T09:48:01.000000Z\",\"updated_at\":\"2023-01-25T09:48:01.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":10,\"label_answer\":\"\",\"images\":\"[]\"}],\"Systems\":[{\"id\":3,\"question_category\":\"Systems\",\"question_type\":\"Yes/No\",\"question\":\"Ensure the operation of Gilbarcofuel tank metering system(gilparco system))\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2022-12-09T04:40:41.000000Z\",\"updated_at\":\"2022-12-09T04:40:41.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":3,\"label_answer\":\"\",\"images\":\"[]\"},{\"id\":7,\"question_category\":\"Systems\",\"question_type\":\"Yes/No\",\"question\":\"Safety equipment and fixed and mobile fire extinguishers Working - Complete ?\",\"response1\":\"Yes\",\"response2\":\"No\",\"created_at\":\"2023-01-25T15:04:28.000000Z\",\"updated_at\":\"2023-01-25T15:04:28.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":7,\"label_answer\":\"\",\"images\":\"[]\"}],\"Electrical Equipments\":[{\"id\":4,\"question_category\":\"Electrical Equipments\",\"question_type\":\"Yes/No\",\"question\":\"All camera working\",\"response1\":\"Working\",\"response2\":\"Not Working\",\"created_at\":\"2023-01-25T06:26:26.000000Z\",\"updated_at\":\"2023-01-25T09:29:46.000000Z\",\"notes\":\"Gft\",\"buttonValue\":\"Working\",\"question_id\":4,\"label_answer\":\"Working\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01262023074832b1395a31-d0cd-444b-95d0-6917ec66818f.JPEG\\\",\\\"id\\\":\\\"1674719268070\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01262023074832b1395a31-d0cd-444b-95d0-6917ec66818f.JPEG\\\"}]\"},{\"id\":5,\"question_category\":\"Electrical Equipments\",\"question_type\":\"Yes/No\",\"question\":\"All Plates and lights working\",\"response1\":\"Working\",\"response2\":\"Not Working\",\"created_at\":\"2023-01-25T06:28:07.000000Z\",\"updated_at\":\"2023-01-25T06:28:07.000000Z\",\"notes\":\"Hgg\",\"buttonValue\":\"Working\",\"question_id\":5,\"label_answer\":\"Working\",\"images\":\"[]\"},{\"id\":8,\"question_category\":\"Electrical Equipments\",\"question_type\":\"Yes/No\",\"question\":\"(Gasoline-Diesel) Pumps Working Complete?\",\"response1\":\"Yes\",\"response2\":\"No\",\"created_at\":\"2023-01-25T15:07:07.000000Z\",\"updated_at\":\"2023-01-25T15:07:07.000000Z\",\"notes\":\"Hgc\",\"buttonValue\":\"No\",\"question_id\":8,\"label_answer\":\"No\",\"images\":\"[]\"}]}', '2023-01-26', 'Completed', 0, '2023-01-26 07:48:32', '2023-01-26 07:48:32'),
(23, 29, 1, '#343377996473432', '{\"Electrical Equipments\":[{\"id\":4,\"question_category\":\"Electrical Equipments\",\"question_type\":\"Yes/No\",\"question\":\"All camera working\",\"response1\":\"Working\",\"response2\":\"Not Working\",\"created_at\":\"2023-01-25T06:26:26.000000Z\",\"updated_at\":\"2023-01-25T09:29:46.000000Z\",\"notes\":\"Working correctly\",\"buttonValue\":\"Working\",\"question_id\":4,\"label_answer\":\"Working\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/013020230650038c742d4b-3793-4811-bef9-e7de0202f632.JPEG\\\",\\\"id\\\":\\\"1675061334169\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/013020230650038c742d4b-3793-4811-bef9-e7de0202f632.JPEG\\\"}]\"},{\"id\":5,\"question_category\":\"Electrical Equipments\",\"question_type\":\"Yes/No\",\"question\":\"All Plates and lights working\",\"response1\":\"Working\",\"response2\":\"Not Working\",\"created_at\":\"2023-01-25T06:28:07.000000Z\",\"updated_at\":\"2023-01-25T06:28:07.000000Z\",\"notes\":\"Good\",\"buttonValue\":\"Working\",\"question_id\":5,\"label_answer\":\"Working\",\"images\":\"[]\"},{\"id\":8,\"question_category\":\"Electrical Equipments\",\"question_type\":\"Yes/No\",\"question\":\"(Gasoline-Diesel) Pumps Working Complete?\",\"response1\":\"Yes\",\"response2\":\"No\",\"created_at\":\"2023-01-25T15:07:07.000000Z\",\"updated_at\":\"2023-01-25T15:07:07.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":8,\"label_answer\":\"\",\"images\":\"[]\"}],\"General Site\":[{\"id\":1,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure the safety of entrance and exit,and the asence of excavations and obstacles\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:48:54.000000Z\",\"updated_at\":\"2021-10-14T23:49:21.000000Z\",\"notes\":\"Ok\",\"buttonValue\":\"Good\",\"question_id\":1,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01302023065003384c6532-ef9a-4de8-96bf-3f37bf7b4372.JPEG\\\",\\\"id\\\":\\\"1675061379241\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01302023065003384c6532-ef9a-4de8-96bf-3f37bf7b4372.JPEG\\\"}]\"},{\"id\":2,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Ensure that the general site is clean\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2021-10-14T23:50:12.000000Z\",\"updated_at\":\"2021-10-14T23:50:12.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":2,\"label_answer\":\"\",\"images\":\"[]\"},{\"id\":10,\"question_category\":\"General Site\",\"question_type\":\"Yes/No\",\"question\":\"Mosqe and WC and The facilities Clean - OK ?\",\"response1\":\"Yes\",\"response2\":\"نعم\",\"created_at\":\"2023-01-25T09:48:01.000000Z\",\"updated_at\":\"2023-01-25T09:48:01.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":10,\"label_answer\":\"\",\"images\":\"[]\"}],\"Systems\":[{\"id\":3,\"question_category\":\"Systems\",\"question_type\":\"Yes/No\",\"question\":\"Ensure the operation of Gilbarcofuel tank metering system(gilparco system))\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2022-12-09T04:40:41.000000Z\",\"updated_at\":\"2022-12-09T04:40:41.000000Z\",\"notes\":\"Ok\",\"buttonValue\":\"Good\",\"question_id\":3,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01302023065003a5c84176-529d-4b7c-9cc1-3d37d2ee3eed.JPEG\\\",\\\"id\\\":\\\"1675061398455\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01302023065003a5c84176-529d-4b7c-9cc1-3d37d2ee3eed.JPEG\\\"}]\"},{\"id\":7,\"question_category\":\"Systems\",\"question_type\":\"Yes/No\",\"question\":\"Safety equipment and fixed and mobile fire extinguishers Working - Complete ?\",\"response1\":\"Yes\",\"response2\":\"No\",\"created_at\":\"2023-01-25T15:04:28.000000Z\",\"updated_at\":\"2023-01-25T15:04:28.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":7,\"label_answer\":\"\",\"images\":\"[]\"}],\"Employees\":[{\"id\":6,\"question_category\":\"Employees\",\"question_type\":\"Yes/No\",\"question\":\"Workers housing clean\",\"response1\":\"Good\",\"response2\":\"Bad\",\"created_at\":\"2023-01-25T06:46:07.000000Z\",\"updated_at\":\"2023-01-25T06:46:07.000000Z\",\"notes\":\"Good\",\"buttonValue\":\"Good\",\"question_id\":6,\"label_answer\":\"Good\",\"images\":\"[{\\\"uri\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01302023065003be064720-1af2-43ed-b7d8-df99e92e5ded.JPEG\\\",\\\"id\\\":\\\"1675061362218\\\",\\\"imgname\\\":\\\"https://odoos.in/apps/PetroFast_New/public/uploads/01302023065003be064720-1af2-43ed-b7d8-df99e92e5ded.JPEG\\\"}]\"},{\"id\":9,\"question_category\":\"Employees\",\"question_type\":\"Yes/No\",\"question\":\"Clothes and working tools Clean - Complete?\",\"response1\":\"Yes\",\"response2\":\"نعم\",\"created_at\":\"2023-01-25T09:46:06.000000Z\",\"updated_at\":\"2023-01-25T09:46:06.000000Z\",\"notes\":\"\",\"buttonValue\":\"\",\"question_id\":9,\"label_answer\":\"\",\"images\":\"[]\"}]}', '2023-01-30', 'Completed', 0, '2023-01-30 06:50:03', '2023-01-30 06:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `login_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stations` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `firstname_ar`, `lastname`, `lastname_ar`, `email`, `mobile`, `username`, `password`, `email_verified_at`, `two_factor_secret`, `two_factor_recovery_codes`, `login_type`, `stations`, `remember_token`, `api_token`, `profile_pic`, `manager`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'Admin', 'admin@admin.com', '', 'admin', '$2y$10$Bwv1T0L.wA.TAPxihFXIK.xrbEIRSMlBJaeXDVRm/mGAEexLzQBqa', NULL, NULL, NULL, 'Admin', '', 'PBBG6gOl0Zf92J5GJ8hUW5jnHS47POiM8AbttEYgJmldTlMYAP1ig8bweuEW', '300|etfiDsPpvTrBaMJUpk3H96hsUnkMHzSxXwRBaDYa', 'https://odoos.in/apps/PetroFast_New/uploads/120920221215061.jpg', '', '2021-09-30 12:44:09', '2021-11-22 10:26:40'),
(28, 'Manager1', 'Manager1', 'Manager1', 'Manager1', 'manager1@gmail.com', '8943437612', 'manager1', '$2y$10$aIDBYJ.4lzhZN71.oLH5GeptehZiyFrDnI.p7ZkR3vlrl1VT6JDra', NULL, NULL, NULL, 'Manager', '1,3,4', NULL, NULL, 'https://odoos.in/apps/PetroFast_New/uploads/120920221215061.jpg', '', '2022-12-09 06:45:06', '2022-12-09 06:45:06'),
(29, 'Supervisor1', 'Supervisor1', 'Supervisor1', 'Supervisor1', 'supervisor1@gmail.com', '8943437612', 'supervisor1', '$2y$10$aIDBYJ.4lzhZN71.oLH5GeptehZiyFrDnI.p7ZkR3vlrl1VT6JDra', NULL, NULL, NULL, 'Station Supervisor', '1,3,4', NULL, '492|jQGmXwlJjpqBGUaaT84ISXl7PWMtautwe7myV2BO', 'https://odoos.in/apps/PetroFast_New/uploads/120920221216142.jpg', '28', '2022-12-09 06:46:14', '2023-01-30 06:37:55'),
(30, 'FMRManager1', 'FMRManager1', 'FMRManager1', 'FMRManager1', 'FMRManager1@gmail.com', '8943437612', 'fmrmanager1', '$2y$10$aIDBYJ.4lzhZN71.oLH5GeptehZiyFrDnI.p7ZkR3vlrl1VT6JDra', NULL, NULL, NULL, 'Facility Manager', '1,3,4', NULL, '497|hdrU2f6hYsodcQ5mQ7pI4ybMaNukk5rgPyFgYfIV', 'https://odoos.in/apps/PetroFast_New/uploads/120920221216142.jpg', '', '2022-12-09 06:47:21', '2023-01-31 10:40:38'),
(31, 'Facilitylabour1', 'Facilitylabour1', 'Facilitylabour1', 'Facilitylabour1', 'facilitylabour1@gmail.com', '8943437612', 'facilitylabour1', '$2y$10$aIDBYJ.4lzhZN71.oLH5GeptehZiyFrDnI.p7ZkR3vlrl1VT6JDra', NULL, NULL, NULL, 'Facility Labour', '1,3,4', NULL, '486|GwatV9q2BAU37PtNzeWox4qY8OMdqbliEczOdqPD', 'https://odoos.in/apps/PetroFast_New/uploads/1209202212183417.jpg', '30', '2022-12-09 06:48:34', '2023-01-26 07:55:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `firebases`
--
ALTER TABLE `firebases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_m_r_s`
--
ALTER TABLE `f_m_r_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuecategories`
--
ALTER TABLE `issuecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuetypes`
--
ALTER TABLE `issuetypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_category` (`issue_category`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questioncategories`
--
ALTER TABLE `questioncategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveyquestions`
--
ALTER TABLE `surveyquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firebases`
--
ALTER TABLE `firebases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `f_m_r_s`
--
ALTER TABLE `f_m_r_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `issuecategories`
--
ALTER TABLE `issuecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issuetypes`
--
ALTER TABLE `issuetypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=498;

--
-- AUTO_INCREMENT for table `questioncategories`
--
ALTER TABLE `questioncategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surveyquestions`
--
ALTER TABLE `surveyquestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
