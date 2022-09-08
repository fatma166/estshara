-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 11:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estshara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_most_questions`
--

CREATE TABLE `admin_most_questions` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `appointment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(11) NOT NULL,
  `consalt_id` int(11) NOT NULL,
  `path` int(11) NOT NULL,
  `type` enum('doctor','patient','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `locale` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `consalt_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chat_attachements`
--

CREATE TABLE `chat_attachements` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `governorate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `city_transalations`
--

CREATE TABLE `city_transalations` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `consalt_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment_translations`
--

CREATE TABLE `comment_translations` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `comment_text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `consulations`
--

CREATE TABLE `consulations` (
  `id` int(11) NOT NULL,
  `status` enum('wait','open','finish','cancle') NOT NULL,
  `consultation_key` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `spacialization_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `country_translations`
--

CREATE TABLE `country_translations` (
  `id` int(11) NOT NULL,
  `locale` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `coupons_type_id` int(11) NOT NULL,
  `percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coupons_types`
--

CREATE TABLE `coupons_types` (
  `id` int(11) NOT NULL,
  `type` enum('general','doctor','','') NOT NULL,
  `service_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `docotor_hospitals`
--

CREATE TABLE `docotor_hospitals` (
  `doctor_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_companies`
--

CREATE TABLE `doctor_companies` (
  `doctor_id` int(11) NOT NULL,
  `ins_company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `doctor_id` int(11) NOT NULL,
  `specialization_id` int(11) NOT NULL,
  `national_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `appoint_id` int(11) NOT NULL,
  `experience_years` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_detail_translations`
--

CREATE TABLE `doctor_detail_translations` (
  `id` int(11) NOT NULL,
  `locale` int(11) NOT NULL,
  `docor_detail_id` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `work_exeperinace` int(11) NOT NULL,
  `work_details` int(11) NOT NULL,
  `university` int(11) NOT NULL,
  `collage` int(11) NOT NULL,
  `graduation_year` int(11) NOT NULL,
  `graduation_grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_works`
--

CREATE TABLE `doctor_works` (
  `provider_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_work_translations`
--

CREATE TABLE `doctor_work_translations` (
  `docotor_work_id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `governorates`
--

CREATE TABLE `governorates` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `governorate_translations`
--

CREATE TABLE `governorate_translations` (
  `id` int(11) NOT NULL,
  `govarenment_id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_companies`
--

CREATE TABLE `insurance_companies` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company_translations`
--

CREATE TABLE `insurance_company_translations` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `insurance_company_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `locales`
--

CREATE TABLE `locales` (
  `id` int(11) NOT NULL,
  `locale_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `locale_translations`
--

CREATE TABLE `locale_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `locale` int(10) NOT NULL,
  `locale_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `most_admin_question_translations`
--

CREATE TABLE `most_admin_question_translations` (
  `id` int(11) NOT NULL,
  `locale` int(11) NOT NULL,
  `title` text NOT NULL,
  `most_admin_question_id` int(11) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `order_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int(11) NOT NULL,
  `size` int(11) NOT NULL DEFAULT 0,
  `paid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `token` int(11) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `item_count` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_order` tinyint(2) NOT NULL DEFAULT 0,
  `city_id` int(11) DEFAULT NULL,
  `zone_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_number` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `mobile2` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `notes` text NOT NULL,
  `district_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_answers`
--

CREATE TABLE `patient_answers` (
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `answer_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient_custom_answers`
--

CREATE TABLE `patient_custom_answers` (
  `user_id` int(11) NOT NULL,
  `custom_question_id` int(11) NOT NULL,
  `custom_answer_id` int(11) DEFAULT NULL,
  `answer_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_consulations`
--

CREATE TABLE `payment_consulations` (
  `transaction_id` int(11) NOT NULL,
  `consaltation_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `transaction_status` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `number_convert` int(11) NOT NULL,
  `coast_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method_transalations`
--

CREATE TABLE `payment_method_transalations` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `method_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_orders`
--

CREATE TABLE `payment_orders` (
  `order_number` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `key` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permission_roles`
--

CREATE TABLE `permission_roles` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permission_translations`
--

CREATE TABLE `permission_translations` (
  `id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `lat` int(11) NOT NULL,
  `long` int(11) NOT NULL,
  `appoint_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `type` enum('hospital','scan_center','pharmacy','') NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `provider_translations`
--

CREATE TABLE `provider_translations` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role_translations`
--

CREATE TABLE `role_translations` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `img` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `sub_title` mediumtext NOT NULL,
  `notice` text NOT NULL,
  `tags` mediumtext NOT NULL,
  `meta_desc` text NOT NULL,
  `locale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_type_fees`
--

CREATE TABLE `service_type_fees` (
  `id` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_type_translations`
--

CREATE TABLE `service_type_translations` (
  `id` int(11) NOT NULL,
  `locale` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `code` text NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specialization_translations`
--

CREATE TABLE `specialization_translations` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `specialization_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `speci_custom_questions`
--

CREATE TABLE `speci_custom_questions` (
  `id` int(11) NOT NULL,
  `type` enum('t_f','choose','text','') NOT NULL,
  `special_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `speci_custom_question_answer`
--

CREATE TABLE `speci_custom_question_answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `speci_custom_question_answer_translations`
--

CREATE TABLE `speci_custom_question_answer_translations` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `speci_custom_question_translaions`
--

CREATE TABLE `speci_custom_question_translaions` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `spaci_custom_question_id` int(11) NOT NULL,
  `title` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `speci_questions`
--

CREATE TABLE `speci_questions` (
  `id` int(11) NOT NULL,
  `fee` float NOT NULL,
  `type` enum('t_f','choose','text','') NOT NULL,
  `special_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `speci_question_answers`
--

CREATE TABLE `speci_question_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `speci_question_answer_translations`
--

CREATE TABLE `speci_question_answer_translations` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `speci_question_translaions`
--

CREATE TABLE `speci_question_translaions` (
  `id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `spaci_question_id` int(11) NOT NULL,
  `title` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `success_works`
--

CREATE TABLE `success_works` (
  `doctor_id` int(11) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `success_work_translations`
--

CREATE TABLE `success_work_translations` (
  `success_work_id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_users`
--

CREATE TABLE `transaction_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `email_isverified` tinyint(1) DEFAULT 0,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp(),
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_isverified` tinyint(1) DEFAULT 0,
  `device_token` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `join_date` datetime NOT NULL DEFAULT current_timestamp(),
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `device_info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`device_info`)),
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_translations`
--

CREATE TABLE `user_translations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `locale` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_most_questions`
--
ALTER TABLE `admin_most_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD KEY `consalt_id` (`consalt_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_index` (`category_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_attachements`
--
ALTER TABLE `chat_attachements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `government_index` (`governorate_id`);

--
-- Indexes for table `city_transalations`
--
ALTER TABLE `city_transalations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conslation_index` (`consalt_id`),
  ADD KEY `patent_index` (`patient_id`);

--
-- Indexes for table `comment_translations`
--
ALTER TABLE `comment_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_index` (`comment_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `consulations`
--
ALTER TABLE `consulations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `consultation_key` (`consultation_key`),
  ADD KEY `consultation_key_2` (`consultation_key`),
  ADD KEY `patient_index` (`patient_id`),
  ADD KEY `service_type_index` (`service_type_id`),
  ADD KEY `specializtion_index` (`spacialization_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docotor_hospitals`
--
ALTER TABLE `docotor_hospitals`
  ADD KEY `provider_index` (`hospital_id`),
  ADD KEY `doctor_index` (`doctor_id`);

--
-- Indexes for table `doctor_companies`
--
ALTER TABLE `doctor_companies`
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `ins_company_id` (`ins_company_id`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD KEY `doctor_id_index` (`doctor_id`),
  ADD KEY `special_index` (`specialization_id`),
  ADD KEY `appoint_id_index` (`appoint_id`),
  ADD KEY `city_index` (`city_id`);

--
-- Indexes for table `doctor_detail_translations`
--
ALTER TABLE `doctor_detail_translations`
  ADD KEY `doctor_detail_index` (`docor_detail_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `doctor_works`
--
ALTER TABLE `doctor_works`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hospital_id_2` (`provider_id`),
  ADD KEY `hospital_id` (`provider_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `doctor_work_translations`
--
ALTER TABLE `doctor_work_translations`
  ADD KEY `doctor_work_index` (`docotor_work_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `governorates`
--
ALTER TABLE `governorates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `governorate_translations`
--
ALTER TABLE `governorate_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_company_translations`
--
ALTER TABLE `insurance_company_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `insurance_index` (`insurance_company_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locale_translations`
--
ALTER TABLE `locale_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `most_admin_question_translations`
--
ALTER TABLE `most_admin_question_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number` (`order_number`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number_2` (`order_number`),
  ADD KEY `order_number` (`order_number`),
  ADD KEY `user_id_index` (`user_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number_2` (`order_number`),
  ADD KEY `order_number` (`order_number`);

--
-- Indexes for table `patient_answers`
--
ALTER TABLE `patient_answers`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `answer_id` (`answer_id`);

--
-- Indexes for table `patient_custom_answers`
--
ALTER TABLE `patient_custom_answers`
  ADD KEY `custom_question_index` (`custom_question_id`),
  ADD KEY `custom_answer_index` (`custom_answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payment_consulations`
--
ALTER TABLE `payment_consulations`
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `consaltation_id` (`consaltation_id`);

--
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method_transalations`
--
ALTER TABLE `payment_method_transalations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `method_id` (`method_id`);

--
-- Indexes for table `payment_orders`
--
ALTER TABLE `payment_orders`
  ADD KEY `order_number` (`order_number`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_roles`
--
ALTER TABLE `permission_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `permission_index` (`permission_id`);

--
-- Indexes for table `permission_translations`
--
ALTER TABLE `permission_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id_index` (`city_id`),
  ADD KEY `appoint_index` (`appoint_id`),
  ADD KEY `category_id` (`cat_id`);

--
-- Indexes for table `provider_translations`
--
ALTER TABLE `provider_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_translations`
--
ALTER TABLE `role_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_type_fees`
--
ALTER TABLE `service_type_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_type_id` (`service_type_id`);

--
-- Indexes for table `service_type_translations`
--
ALTER TABLE `service_type_translations`
  ADD KEY `service_type_id` (`service_type_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization_translations`
--
ALTER TABLE `specialization_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialization_id` (`specialization_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `speci_custom_questions`
--
ALTER TABLE `speci_custom_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `special_id` (`special_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `speci_custom_question_answer`
--
ALTER TABLE `speci_custom_question_answer`
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `speci_custom_question_answer_translations`
--
ALTER TABLE `speci_custom_question_answer_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `speci_custom_question_translaions`
--
ALTER TABLE `speci_custom_question_translaions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `speci_questions`
--
ALTER TABLE `speci_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `special_id` (`special_id`);

--
-- Indexes for table `speci_question_answers`
--
ALTER TABLE `speci_question_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `speci_question_answer_translations`
--
ALTER TABLE `speci_question_answer_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_id` (`answer_id`),
  ADD KEY `locale` (`locale`);

--
-- Indexes for table `speci_question_translaions`
--
ALTER TABLE `speci_question_translaions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spaci_question_id` (`spaci_question_id`);

--
-- Indexes for table `success_works`
--
ALTER TABLE `success_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_work_translations`
--
ALTER TABLE `success_work_translations`
  ADD KEY `success_work_id` (`success_work_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_role_fk` (`role_id`);

--
-- Indexes for table `user_translations`
--
ALTER TABLE `user_translations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_most_questions`
--
ALTER TABLE `admin_most_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_attachements`
--
ALTER TABLE `chat_attachements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city_transalations`
--
ALTER TABLE `city_transalations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_translations`
--
ALTER TABLE `comment_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consulations`
--
ALTER TABLE `consulations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country_translations`
--
ALTER TABLE `country_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_works`
--
ALTER TABLE `doctor_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `governorate_translations`
--
ALTER TABLE `governorate_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance_company_translations`
--
ALTER TABLE `insurance_company_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locale_translations`
--
ALTER TABLE `locale_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `most_admin_question_translations`
--
ALTER TABLE `most_admin_question_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_method_transalations`
--
ALTER TABLE `payment_method_transalations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_translations`
--
ALTER TABLE `permission_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provider_translations`
--
ALTER TABLE `provider_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_translations`
--
ALTER TABLE `role_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_type_fees`
--
ALTER TABLE `service_type_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialization_translations`
--
ALTER TABLE `specialization_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speci_custom_questions`
--
ALTER TABLE `speci_custom_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speci_custom_question_answer_translations`
--
ALTER TABLE `speci_custom_question_answer_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speci_custom_question_translaions`
--
ALTER TABLE `speci_custom_question_translaions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speci_questions`
--
ALTER TABLE `speci_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speci_question_answers`
--
ALTER TABLE `speci_question_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speci_question_answer_translations`
--
ALTER TABLE `speci_question_answer_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speci_question_translaions`
--
ALTER TABLE `speci_question_translaions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `success_works`
--
ALTER TABLE `success_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_translations`
--
ALTER TABLE `user_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachments`
--
ALTER TABLE `attachments`
  ADD CONSTRAINT `attachments_ibfk_1` FOREIGN KEY (`consalt_id`) REFERENCES `consulations` (`id`);

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_index` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `government_index` FOREIGN KEY (`governorate_id`) REFERENCES `governorates` (`id`);

--
-- Constraints for table `city_transalations`
--
ALTER TABLE `city_transalations`
  ADD CONSTRAINT `city_transalations_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city_transalations` (`id`),
  ADD CONSTRAINT `city_transalations_ibfk_2` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `conslation_index` FOREIGN KEY (`consalt_id`) REFERENCES `consulations` (`id`),
  ADD CONSTRAINT `patent_index` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comment_translations`
--
ALTER TABLE `comment_translations`
  ADD CONSTRAINT `comment_index` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `comment_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `consulations`
--
ALTER TABLE `consulations`
  ADD CONSTRAINT `conslation_key_index` FOREIGN KEY (`consultation_key`) REFERENCES `consulations` (`consultation_key`),
  ADD CONSTRAINT `patient_index` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `service_type_index` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`),
  ADD CONSTRAINT `specializtion_index` FOREIGN KEY (`spacialization_id`) REFERENCES `specializations` (`id`);

--
-- Constraints for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD CONSTRAINT `country_translations_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `country_translations_ibfk_2` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `docotor_hospitals`
--
ALTER TABLE `docotor_hospitals`
  ADD CONSTRAINT `doctor_index` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `provider_index` FOREIGN KEY (`hospital_id`) REFERENCES `providers` (`id`);

--
-- Constraints for table `doctor_companies`
--
ALTER TABLE `doctor_companies`
  ADD CONSTRAINT `doctor_companies_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `doctor_companies_ibfk_2` FOREIGN KEY (`ins_company_id`) REFERENCES `insurance_companies` (`id`);

--
-- Constraints for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD CONSTRAINT `appoint_id_index` FOREIGN KEY (`appoint_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `city_index` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `doctor_id_index` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `special_index` FOREIGN KEY (`specialization_id`) REFERENCES `specializations` (`id`);

--
-- Constraints for table `doctor_detail_translations`
--
ALTER TABLE `doctor_detail_translations`
  ADD CONSTRAINT `doctor_detail_index` FOREIGN KEY (`docor_detail_id`) REFERENCES `doctor_details` (`doctor_id`),
  ADD CONSTRAINT `doctor_detail_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `doctor_work_translations`
--
ALTER TABLE `doctor_work_translations`
  ADD CONSTRAINT `doctor_work_index` FOREIGN KEY (`docotor_work_id`) REFERENCES `doctor_works` (`id`),
  ADD CONSTRAINT `doctor_work_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `governorates`
--
ALTER TABLE `governorates`
  ADD CONSTRAINT `governorates_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `governorate_translations`
--
ALTER TABLE `governorate_translations`
  ADD CONSTRAINT `governorate_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `insurance_company_translations`
--
ALTER TABLE `insurance_company_translations`
  ADD CONSTRAINT `insurance_company_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`),
  ADD CONSTRAINT `insurance_index` FOREIGN KEY (`insurance_company_id`) REFERENCES `insurance_companies` (`id`);

--
-- Constraints for table `locale_translations`
--
ALTER TABLE `locale_translations`
  ADD CONSTRAINT `locale_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `order_index` FOREIGN KEY (`order_number`) REFERENCES `orders` (`order_number`),
  ADD CONSTRAINT `service_id` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `user_id_index` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_number`) REFERENCES `orders` (`order_number`);

--
-- Constraints for table `patient_answers`
--
ALTER TABLE `patient_answers`
  ADD CONSTRAINT `answer_index` FOREIGN KEY (`answer_id`) REFERENCES `speci_question_answers` (`id`),
  ADD CONSTRAINT `question_index` FOREIGN KEY (`question_id`) REFERENCES `speci_questions` (`id`),
  ADD CONSTRAINT `user_index` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `patient_custom_answers`
--
ALTER TABLE `patient_custom_answers`
  ADD CONSTRAINT `custom_answer_index` FOREIGN KEY (`custom_answer_id`) REFERENCES `speci_questions` (`id`),
  ADD CONSTRAINT `custom_question_index` FOREIGN KEY (`custom_question_id`) REFERENCES `speci_custom_questions` (`id`),
  ADD CONSTRAINT `patient_custom_answers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payment_consulations`
--
ALTER TABLE `payment_consulations`
  ADD CONSTRAINT `consalation_index` FOREIGN KEY (`consaltation_id`) REFERENCES `consulations` (`id`),
  ADD CONSTRAINT `transaction_index` FOREIGN KEY (`transaction_id`) REFERENCES `payment_logs` (`transaction_id`);

--
-- Constraints for table `payment_method_transalations`
--
ALTER TABLE `payment_method_transalations`
  ADD CONSTRAINT `payment_method_transalations_ibfk_1` FOREIGN KEY (`method_id`) REFERENCES `payment_methods` (`id`);

--
-- Constraints for table `payment_orders`
--
ALTER TABLE `payment_orders`
  ADD CONSTRAINT `payment_orders_ibfk_1` FOREIGN KEY (`order_number`) REFERENCES `orders` (`order_number`),
  ADD CONSTRAINT `payment_orders_ibfk_2` FOREIGN KEY (`transaction_id`) REFERENCES `payment_logs` (`transaction_id`);

--
-- Constraints for table `permission_roles`
--
ALTER TABLE `permission_roles`
  ADD CONSTRAINT `permission_index` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`),
  ADD CONSTRAINT `role_index` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `permission_translations`
--
ALTER TABLE `permission_translations`
  ADD CONSTRAINT `permission_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `providers`
--
ALTER TABLE `providers`
  ADD CONSTRAINT `appoint_index` FOREIGN KEY (`appoint_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `category_id` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `city_id_index` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `provider_translations`
--
ALTER TABLE `provider_translations`
  ADD CONSTRAINT `provider_translations_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`),
  ADD CONSTRAINT `provider_translations_ibfk_2` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `role_translations`
--
ALTER TABLE `role_translations`
  ADD CONSTRAINT `role_translations_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`),
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `service_translations_ibfk_2` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `service_type_fees`
--
ALTER TABLE `service_type_fees`
  ADD CONSTRAINT `service_type_fees_ibfk_1` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`);

--
-- Constraints for table `service_type_translations`
--
ALTER TABLE `service_type_translations`
  ADD CONSTRAINT `service_type_translations_ibfk_1` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`),
  ADD CONSTRAINT `service_type_translations_ibfk_2` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `specialization_translations`
--
ALTER TABLE `specialization_translations`
  ADD CONSTRAINT `specialization_translations_ibfk_1` FOREIGN KEY (`specialization_id`) REFERENCES `specializations` (`id`),
  ADD CONSTRAINT `specialization_translations_ibfk_2` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `speci_custom_questions`
--
ALTER TABLE `speci_custom_questions`
  ADD CONSTRAINT `speci_custom_questions_ibfk_1` FOREIGN KEY (`special_id`) REFERENCES `specializations` (`id`),
  ADD CONSTRAINT `speci_custom_questions_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `speci_custom_question_answer`
--
ALTER TABLE `speci_custom_question_answer`
  ADD CONSTRAINT `speci_custom_question_answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `speci_custom_questions` (`id`);

--
-- Constraints for table `speci_custom_question_answer_translations`
--
ALTER TABLE `speci_custom_question_answer_translations`
  ADD CONSTRAINT `speci_custom_question_answer_translations_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `speci_custom_question_translaions`
--
ALTER TABLE `speci_custom_question_translaions`
  ADD CONSTRAINT `speci_custom_question_translaions_ibfk_1` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `speci_questions`
--
ALTER TABLE `speci_questions`
  ADD CONSTRAINT `speci_questions_ibfk_1` FOREIGN KEY (`special_id`) REFERENCES `specializations` (`id`);

--
-- Constraints for table `speci_question_answers`
--
ALTER TABLE `speci_question_answers`
  ADD CONSTRAINT `speci_question_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `speci_questions` (`id`);

--
-- Constraints for table `speci_question_answer_translations`
--
ALTER TABLE `speci_question_answer_translations`
  ADD CONSTRAINT `speci_question_answer_translations_ibfk_1` FOREIGN KEY (`answer_id`) REFERENCES `speci_question_answers` (`id`),
  ADD CONSTRAINT `speci_question_answer_translations_ibfk_2` FOREIGN KEY (`locale`) REFERENCES `locales` (`id`);

--
-- Constraints for table `speci_question_translaions`
--
ALTER TABLE `speci_question_translaions`
  ADD CONSTRAINT `speci_question_translaions_ibfk_1` FOREIGN KEY (`spaci_question_id`) REFERENCES `speci_questions` (`id`);

--
-- Constraints for table `success_work_translations`
--
ALTER TABLE `success_work_translations`
  ADD CONSTRAINT `success_work_translations_ibfk_1` FOREIGN KEY (`success_work_id`) REFERENCES `success_works` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;