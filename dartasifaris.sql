-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 07:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dartasifaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `abibahit_pramanits`
--

CREATE TABLE `abibahit_pramanits` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `mother_name` text COLLATE utf8mb4_unicode_ci,
  `children_gender` text COLLATE utf8mb4_unicode_ci,
  `children_title` text COLLATE utf8mb4_unicode_ci,
  `children_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abibahit_pramanits`
--

INSERT INTO `abibahit_pramanits` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `sabik_address`, `father_name`, `mother_name`, `children_gender`, `children_title`, `children_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'jkh', 'jjk', 'hjkh', 'jh', 'khk', 'छोरा', 'श्री', 'hkj', 'hjk', 'hjk', 'hjkh', 'jkh', '9', '2018-12-16 04:00:58', '2018-12-16 04:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `addressverification`
--

CREATE TABLE `addressverification` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `title_options` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `previous_vdc_name` text COLLATE utf8mb4_unicode_ci,
  `previous_ward_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addressverification`
--

INSERT INTO `addressverification` (`id`, `ref_no`, `issued_date`, `title_options`, `applicant_name`, `previous_vdc_name`, `previous_ward_no`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'jh', 'hj', 'Mr', 'jhjk', 'hkj', 'hkj', 'hjk', 'hkhk', 'hkk', 'jk', '9', '2018-12-16 03:59:00', '2018-12-16 03:59:00'),
(2, 'jbjb', '2075-06-21', 'Mr', 'kkmk', 'kmkmk', 'kmknk', 'nknk', 'knkn;l', 'kn;kln;', 'knknk', '5', '2018-12-16 06:35:20', '2018-12-16 06:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `apanga_parichaye_patra_sifaris`
--

CREATE TABLE `apanga_parichaye_patra_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `apanga_type` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apanga_parichaye_patra_sifaris`
--

INSERT INTO `apanga_parichaye_patra_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `office_address`, `sabik_address`, `person_title`, `person_name`, `apanga_type`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'kjj', 'hjkh', 'jh', 'khk', 'श्री', 'kjh', 'jk', 'hjkh', 'jk', 'hjk', 'hjkh', '9', '2018-12-16 04:04:07', '2018-12-16 04:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `asthaie_basobas_sifaris`
--

CREATE TABLE `asthaie_basobas_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `houseowner_title` text COLLATE utf8mb4_unicode_ci,
  `houseowner_name` text COLLATE utf8mb4_unicode_ci,
  `living_starting_date` text COLLATE utf8mb4_unicode_ci,
  `basobas_type` text COLLATE utf8mb4_unicode_ci,
  `citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `district_name` text COLLATE utf8mb4_unicode_ci,
  `citizenship_issued_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asthaie_basobas_sifaris`
--

INSERT INTO `asthaie_basobas_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `person_title`, `person_name`, `sabik_address`, `houseowner_title`, `houseowner_name`, `living_starting_date`, `basobas_type`, `citizenship_no`, `district_name`, `citizenship_issued_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '9', '2075-06-05', 'श्री', '9', '9', 'श्री', 'hgv', '2075-08-06', NULL, '757', '6546', '2075-08-04', NULL, NULL, NULL, NULL, '9', '2018-11-24 05:53:28', '2018-11-24 05:53:28'),
(2, '२०७५/०७६', 'h', 'kh', 'श्री', 'hjk', 'hkj', 'श्री', 'khj', 'kjh', NULL, 'kjh', 'kj', 'jhjk', 'hjk', 'hjk', 'hjk', 'h', '9', '2018-12-16 03:51:53', '2018-12-16 03:51:53'),
(3, '२०७५/०७६', 'jk', 'hh', 'श्री', 'hkh', 'jkh', 'श्री', 'jjh', 'kjh', NULL, 'jh', 'hjjkh', 'kh', 'jk', 'hkjh', 'jkh', 'kjh', '9', '2018-12-16 03:59:36', '2018-12-16 03:59:36'),
(4, '२०७५/०७६', 'sqwss', '2075-06-21', 'श्री', 'jnjnjn', 'jnjnjn', 'श्री', 'jnjnjnj', 'jnjnjnj', NULL, 'jnjnjnj', 'nn n nj', 'jnjnjn', NULL, NULL, NULL, NULL, '5', '2018-12-16 06:14:02', '2018-12-16 06:14:02'),
(5, '२०७५/०७६', '333', '2075-06-21', 'श्री', 'dgfdg', 'dsfdgfd', 'श्री', 'fdgsfdg', '2075-12-12', NULL, 'gfdgfd', 'fdgfd', '2075-12-04', NULL, NULL, NULL, NULL, '9', '2019-03-24 23:05:29', '2019-03-24 23:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `basobas_sifaris_details`
--

CREATE TABLE `basobas_sifaris_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `basobas_id` text COLLATE utf8mb4_unicode_ci,
  `toll` text COLLATE utf8mb4_unicode_ci,
  `batto_name` text COLLATE utf8mb4_unicode_ci,
  `ghar_no` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basobas_sifaris_details`
--

INSERT INTO `basobas_sifaris_details` (`id`, `basobas_id`, `toll`, `batto_name`, `ghar_no`, `created_at`, `updated_at`) VALUES
(1, '1', '564', 'hjgh', '78', '2018-11-24 05:53:28', '2018-11-24 05:53:28'),
(2, '2', 'hjk', 'hjk', 'hjk', '2018-12-16 03:51:53', '2018-12-16 03:51:53'),
(3, '3', 'kjh', 'jhk', 'hjk', '2018-12-16 03:59:36', '2018-12-16 03:59:36'),
(4, '4', 'jnjnjn', 'njnjn', 'njnj', '2018-12-16 06:14:02', '2018-12-16 06:14:02'),
(5, '5', 'fdg', 'fdgfd', '454', '2019-03-24 23:05:29', '2019-03-24 23:05:29'),
(6, '5', 'fdgfd', 'gfdgfd', '444', '2019-03-24 23:05:29', '2019-03-24 23:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `bebasayebanda`
--

CREATE TABLE `bebasayebanda` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bebasayedartanaya`
--

CREATE TABLE `bebasayedartanaya` (
  `id` int(10) UNSIGNED NOT NULL,
  `p_name` text COLLATE utf8mb4_unicode_ci,
  `p_office` text COLLATE utf8mb4_unicode_ci,
  `p_ward` text COLLATE utf8mb4_unicode_ci,
  `p_address` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_name` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_name_english` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_district` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_local_state` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_wardno` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_tole` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_phone` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_amount` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_amount_english` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_item` text COLLATE utf8mb4_unicode_ci,
  `prop_name` text COLLATE utf8mb4_unicode_ci,
  `prop_jilla` text COLLATE utf8mb4_unicode_ci,
  `prop_localstate` text COLLATE utf8mb4_unicode_ci,
  `prop_ward` text COLLATE utf8mb4_unicode_ci,
  `prop_tole` text COLLATE utf8mb4_unicode_ci,
  `prop_phone` text COLLATE utf8mb4_unicode_ci,
  `prop_citi_no` text COLLATE utf8mb4_unicode_ci,
  `prop_citi_jilla` text COLLATE utf8mb4_unicode_ci,
  `citi_date` text COLLATE utf8mb4_unicode_ci,
  `prop_dis` text COLLATE utf8mb4_unicode_ci,
  `prop_local_state` text COLLATE utf8mb4_unicode_ci,
  `prop_wada` text COLLATE utf8mb4_unicode_ci,
  `prop_tole_name` text COLLATE utf8mb4_unicode_ci,
  `prop_grand` text COLLATE utf8mb4_unicode_ci,
  `prop_father` text COLLATE utf8mb4_unicode_ci,
  `prop_husband` text COLLATE utf8mb4_unicode_ci,
  `owner_prop` text COLLATE utf8mb4_unicode_ci,
  `owner_grandfather` text COLLATE utf8mb4_unicode_ci,
  `owner_grandchild` text COLLATE utf8mb4_unicode_ci,
  `owner_add` text COLLATE utf8mb4_unicode_ci,
  `owner_age` text COLLATE utf8mb4_unicode_ci,
  `owner_name` text COLLATE utf8mb4_unicode_ci,
  `owner_business` text COLLATE utf8mb4_unicode_ci,
  `business_localaddress` text COLLATE utf8mb4_unicode_ci,
  `business_ward` text COLLATE utf8mb4_unicode_ci,
  `b_year` text COLLATE utf8mb4_unicode_ci,
  `b_month` text COLLATE utf8mb4_unicode_ci,
  `b_day` text COLLATE utf8mb4_unicode_ci,
  `b_roj` text COLLATE utf8mb4_unicode_ci,
  `san_localstate` text COLLATE utf8mb4_unicode_ci,
  `san_ward` text COLLATE utf8mb4_unicode_ci,
  `san_name` text COLLATE utf8mb4_unicode_ci,
  `san_date` text COLLATE utf8mb4_unicode_ci,
  `tip_business` text COLLATE utf8mb4_unicode_ci,
  `tip_owner` text COLLATE utf8mb4_unicode_ci,
  `tip_amt` text COLLATE utf8mb4_unicode_ci,
  `tip_amount` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `b_type` text COLLATE utf8mb4_unicode_ci,
  `owner_child` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bebasayedartanaya`
--

INSERT INTO `bebasayedartanaya` (`id`, `p_name`, `p_office`, `p_ward`, `p_address`, `letter_subject`, `bebasaye_name`, `bebasaye_name_english`, `bebasaye_district`, `bebasaye_local_state`, `bebasaye_wardno`, `bebasaye_tole`, `bebasaye_phone`, `bebasaye_amount`, `bebasaye_amount_english`, `bebasaye_item`, `prop_name`, `prop_jilla`, `prop_localstate`, `prop_ward`, `prop_tole`, `prop_phone`, `prop_citi_no`, `prop_citi_jilla`, `citi_date`, `prop_dis`, `prop_local_state`, `prop_wada`, `prop_tole_name`, `prop_grand`, `prop_father`, `prop_husband`, `owner_prop`, `owner_grandfather`, `owner_grandchild`, `owner_add`, `owner_age`, `owner_name`, `owner_business`, `business_localaddress`, `business_ward`, `b_year`, `b_month`, `b_day`, `b_roj`, `san_localstate`, `san_ward`, `san_name`, `san_date`, `tip_business`, `tip_owner`, `tip_amt`, `tip_amount`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `b_type`, `owner_child`, `created_at`, `updated_at`) VALUES
(1, 'वडा अध्यक्ष', 'ईलाम नगरपालिका', '१ नं वडा कार्यालय', NULL, 'व्यवसाय दर्ता गर्ने बारे', 'dsf', 'df', 'sdf', 'sdf', '4', 'df', 'a', '445', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdf', '7', 'sdf', '45345', '4', 'sfdfs', '2075-06-04', 'sdf', 'dsf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'ईलाम नगरपालिका', '१', 'sdf', 'df', 'sdf', 'df', 'ईलाम नगरपालिका', '१', 'kl', '2075-06-02', 'sdf', 'sdf', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '5', '2', 'सेवामुलक व्यवसाय', 'छोरी', '2018-09-27 14:58:14', '2018-09-27 14:58:14'),
(2, 'वडा अध्यक्ष', 'ईलाम नगरपालिका', '१ नं वडा कार्यालय', NULL, 'व्यवसाय दर्ता गर्ने बारे', 'dsf', 'df', 'sdf', 'sdf', '4', 'df', 'a', '445', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdf', '7', 'sdf', '45345', '4', 'sfdfs', '2075-06-04', 'sdf', 'dsf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'ईलाम नगरपालिका', '१', 'sdf', 'df', 'sdf', 'df', 'ईलाम नगरपालिका', '१', 'kl', '2075-06-02', 'sdf', 'sdf', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '5', '9', 'स्थानीय व्यापार', 'छोरी', '2018-09-27 15:35:48', '2018-09-27 16:51:06'),
(3, 'वडा अध्यक्ष', 'ईलाम नगरपालिका', '९ नं वडा कार्यालय', 'kj', 'व्यवसाय दर्ता गर्ने बारे', 'hjkh', 'h', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'h', 'kjh', 'kjh', 'jk', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hj', 'h', 'hkj', 'hk', 'hj', 'hjk', 'hjk', 'jk', 'jk', 'jk', 'hjk', 'hjk', 'hjk', 'h', 'jh', 'kj', 'hjk', 'hjk', 'hjk', 'hjk', 'jk', 'hj', 'jh', 'jh', 'jh', 'jj', '9', 'स्थानीय व्यापार', 'छोरा', '2018-12-16 02:36:01', '2018-12-16 02:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `bijuli_jadan_sifaris`
--

CREATE TABLE `bijuli_jadan_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `house_approve_date` text COLLATE utf8mb4_unicode_ci,
  `construction_type` text COLLATE utf8mb4_unicode_ci,
  `electricity_line_name` text COLLATE utf8mb4_unicode_ci,
  `electricity_capacity` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bijuli_jadan_sifaris`
--

INSERT INTO `bijuli_jadan_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `office_chairman`, `office_name`, `sabik_address`, `person_title`, `person_name`, `kitta_no`, `house_approve_date`, `construction_type`, `electricity_line_name`, `electricity_capacity`, `user_id`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '9', '2075-06-05', 'ilam nagarpalika', 'ilam', 'ilam', 'श्री', 'sanjaya', '3434', '2088/2/2', 'पूर्ण', '.', '10', '9', NULL, NULL, NULL, NULL, '2018-12-03 06:43:45', '2018-12-03 06:43:45'),
(2, '२०७५/०७६', 'jh', 'h', 'jh', 'hkj', 'hjh', 'श्री', 'jkh', 'jkh', NULL, 'आंशिक', 'khj', 'kh', '9', 'h', 'kj', 'hkh', 'jkh', '2018-12-16 03:28:38', '2018-12-16 03:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `bijuli_jadan_sifaris_detail`
--

CREATE TABLE `bijuli_jadan_sifaris_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `bijuli_jadan_sifaris_id` int(11) DEFAULT NULL,
  `bijuli_jadan_kitta_no` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bijuli_jadan_sifaris_detail`
--

INSERT INTO `bijuli_jadan_sifaris_detail` (`id`, `bijuli_jadan_sifaris_id`, `bijuli_jadan_kitta_no`, `created_at`, `updated_at`) VALUES
(1, 1, '11', '2018-12-03 06:43:45', '2018-12-03 06:43:45'),
(2, 2, 'jh', '2018-12-16 03:28:38', '2018-12-16 03:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `bipanna`
--

CREATE TABLE `bipanna` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `children_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `children_title` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bipanna`
--

INSERT INTO `bipanna` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `children_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `children_title`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '5', '2075-06-05', 'विपन्नको सिफारिस सम्बन्धमा', 'ईलाम नगरपालिका', '१', '4', '3', 'hari', 'narayan', 'हाेम', 'इलाम', '3', '999', '2', 'गा.वि.स.', 'श्री', 'वडा अध्यक्ष', '2018-10-01 04:21:18', '2018-10-01 04:21:18'),
(2, '२०७५/०७६', '८७५४८३\\', '2075-06-21', 'विपन्नको सिफारिस सम्बन्धमा', 'पालुङटार नगरपालिका', '१', 'बर्बोएत', '३४', 'xwewcdec', 'jnjnhuui', NULL, NULL, NULL, NULL, '5', 'गा.वि.स.', 'श्री', 'वडा अध्यक्ष', '2018-12-16 06:44:24', '2018-12-16 06:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `birthcertificate`
--

CREATE TABLE `birthcertificate` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_no_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_no_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_title_options` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_father_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_children_options` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children_options` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children_relation_options` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holder_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date_bs_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date_ad_nep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_citizen_no_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_citizen_issued_date_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_citizen_issued_district_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_citizen_no_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_citizen_issued_date_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_citizen_issued_district_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_registrar_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signed_date_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_title_options_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_children_options_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children_options_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children_relation_options_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_title_options_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date_bs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date_ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_citizen_issued_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_citizen_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_citizen_issued_district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_citizen_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_citizen_issued_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_citizen_issued_district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_registrar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signed_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_citizenship_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birthcertificate`
--

INSERT INTO `birthcertificate` (`id`, `reg_no_nep`, `form_no_nep`, `reg_date_nep`, `applicant_title_options`, `applicant_name_nep`, `grand_father_name_nep`, `grand_children_options`, `father_name_nep`, `mother_name_nep`, `children_options`, `children_relation_options`, `holder_name_nep`, `birth_date_bs_nep`, `birth_date_ad_nep`, `father_citizen_no_nep`, `father_citizen_issued_date_nep`, `father_citizen_issued_district_nep`, `mother_citizen_no_nep`, `mother_citizen_issued_date_nep`, `mother_citizen_issued_district_nep`, `local_registrar_name_nep`, `signed_date_nep`, `reg_no`, `form_no`, `reg_date`, `applicant_title_options_eng`, `applicant_name`, `grand_father_name`, `grand_children_options_eng`, `father_name`, `mother_name`, `children_options_eng`, `children_relation_options_eng`, `grand_title_options_eng`, `spouse_name`, `birth_date_bs`, `birth_date_ad`, `father_citizen_issued_date`, `father_citizen_no`, `father_citizen_issued_district`, `mother_citizen_no`, `mother_citizen_issued_date`, `mother_citizen_issued_district`, `local_registrar_name`, `signed_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3', '3', '2075-05-11', 'श्री', 'fg', 'dsf', 'नाति', 'dfd', 'jk', 'छोरा', 'श्री', 'ddf', '2075-05-26', '2075-05-11', 'df', '2075-05-26', 'df', 'd', '2075-05-25', 'dd', 'ddd', '2075-05-30', '3', '4', '2075-05-30', 'Mr', 'dfd', 'dfd', 'Mr', 'dfd', 'dfd', 'son', 'grandson', '', 'dfd', '2075-05-26', '2075-05-11', '2075-05-15', 'dfdf', 'fdfd', 'dfd', '2075-05-13', 'dfd', 'dfsf', '2075-05-30', 'jk', 'sdf', '343', '34453', 9, '2018-09-16 16:14:12', '2018-09-16 16:14:12'),
(2, '29', '3', '2075-05-01', 'श्री', 'हिरा', 'अमर', 'नाति', 'संजय', 'सम्धमाम', 'छोरा', 'श्री', 'राम', '2075-05-27', '2075-05-11', '१', '2075-05-26', 'इलाम', '५४', '2075-05-26', 'इलाम', 'मनिदरा', '2075-06-05', '3', '4', '2075-06-05', 'Mr', 'ram', 'hari', 'Mr', 'site', 'ritta', 'son', 'grandson', 'Mr', 'hiralal', '2075-05-27', '2075-05-11', '2075-05-19', 'lila', 'ilam', 'jhapa', '2075-05-01', 'jhapa', 'rita', '2075-06-05', 'हाेम', 'इलाम', '३४४३', '४३४', 11, '2018-09-16 16:18:02', '2018-09-26 14:10:21'),
(3, 'jj', 'hjh', 'hjh', 'श्री', 'hkh', 'jhk', 'नाति', 'h', 'khj', 'छोरा', 'श्री', 'hjkh', 'jkh', 'jh', 'jhjk', 'hjkh', 'kjh', 'jhjk', 'hkh', 'kh', 'hk', 'hjjk', 'hjk', 'hjjkjkh', 'jkh', 'Mr', 'jhjk', 'h', 'Mr', 'jjk', 'hjh', 'son', 'grandson', 'Mr', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'jkh', 'hjk', 'hjkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 5, '2018-12-16 06:24:08', '2018-12-16 06:24:08'),
(4, 'hj', 'hjjk', 'hjkh', 'श्री', 'jh', 'jhk', 'नाति', 'jkh', 'jkh', 'छोरा', 'श्री', 'hjk', 'hjkh', 'jkh', 'jh', 'jhj', 'hjk', 'hjk', 'hjkh', 'jkh', 'jkh', 'jhj', 'hjk', 'hjk', 'hjk', 'Mr', 'hjk', 'hjk', 'Mr', 'hjk', 'hjk', 'son', 'grandson', 'Mr', 'jkh', 'jh', 'jhjk', 'hjkh', 'jkh', 'jkh', 'jk', 'kjhkjh', 'jhjkh', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 1, '2018-12-16 07:55:19', '2018-12-16 07:55:19'),
(5, '12', '12', '2075-12-11', 'श्री', 'shailen', 'shailen', 'नाति', 'shailen', 'shailen', 'छोरा', 'श्री', 'shailen', '2047-10-23', '1991-02-06', '123', '2075-12-01', 'lalitpur', '432', '2075-12-02', 'shailen', 'shailen', '2075-06-05', '12', '12', '2075-06-05', 'Mr', 'shailen', 'shailen', 'Mr', 'shailen', 'shailen', 'son', 'grandson', 'Mr', 'shailen', '2075-12-01', '2019-03-15', '2075-12-01', 'shailen', 'shailen', 'shailen', '2075-12-02', 'shailen', 'shailen', '2075-06-05', 'shailen', 'shailen', '1123', '12', 9, '2019-03-24 23:17:53', '2019-03-24 23:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `birth_date_verifications`
--

CREATE TABLE `birth_date_verifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `applicant_title` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `applicant_relation` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `mother_name` text COLLATE utf8mb4_unicode_ci,
  `born_local_state` text COLLATE utf8mb4_unicode_ci,
  `born_ward_no` text COLLATE utf8mb4_unicode_ci,
  `born_district` text COLLATE utf8mb4_unicode_ci,
  `applicant_title_options` text COLLATE utf8mb4_unicode_ci,
  `applicant_name_options` text COLLATE utf8mb4_unicode_ci,
  `citizen_issued_district` text COLLATE utf8mb4_unicode_ci,
  `date_ad` text COLLATE utf8mb4_unicode_ci,
  `date_bs` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birth_date_verifications`
--

INSERT INTO `birth_date_verifications` (`id`, `ref_no`, `issued_date`, `applicant_title`, `applicant_name`, `applicant_relation`, `father_name`, `mother_name`, `born_local_state`, `born_ward_no`, `born_district`, `applicant_title_options`, `applicant_name_options`, `citizen_issued_district`, `date_ad`, `date_bs`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'hjk', 'hjk', 'Mr', 'kjh', 'son', 'hj', 'hjj', 'hkj', 'hh', 'h', 'his', 'his', 'hjkh', 'jkh', 'jkh', 'kjh', 'jk', 'hjkh', 'jkh', '9', '2018-12-16 03:57:55', '2018-12-16 03:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `budget_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`id`, `budget_year`, `active`, `created_at`, `updated_at`) VALUES
(1, '2075', 1, '2018-12-03 03:21:20', '2018-12-03 03:21:20'),
(2, '2076', 0, '2018-12-03 03:22:31', '2018-12-03 03:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `sifaris_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_readable_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `sifaris_title`, `table_name`, `table_readable_name`, `url`, `created_at`, `updated_at`) VALUES
(39, 'रास्ट्रिय पञ्जीकरण', 'birthcertificate', 'जन्म दर्ता', NULL, '2018-12-13 02:18:20', '2018-12-13 02:18:20'),
(40, 'रास्ट्रिय पञ्जीकरण', 'deathcertificate', 'मृत्यु दर्ता', NULL, '2018-12-13 02:18:35', '2018-12-13 02:18:35'),
(41, 'रास्ट्रिय पञ्जीकरण', 'marriage', 'विवाह दर्ता', NULL, '2018-12-13 02:18:45', '2018-12-13 02:18:45'),
(42, 'रास्ट्रिय पञ्जीकरण', 'migration', 'बसाइँसराई दर्ता', NULL, '2018-12-13 02:19:21', '2018-12-13 02:19:21'),
(43, 'नेपाली नागरिकता', 'citizencertificate', 'नागरिकता प्रतिलिपि सिफारिस', NULL, '2018-12-13 02:20:02', '2018-12-13 02:20:02'),
(44, 'नेपाली नागरिकता', 'citizenship', 'नागरिकता प्रमाणपत्र सिफारिस', NULL, '2018-12-13 02:20:22', '2018-12-13 02:20:22'),
(45, 'नेपाली नागरिकता', 'citizensifaris', 'नागरिकता सिफारिस', NULL, '2018-12-13 02:21:28', '2018-12-13 02:21:28'),
(46, 'नेपाली नागरिकता', 'nagarikta', 'नागरिकता निवेदन', NULL, '2018-12-13 02:21:52', '2018-12-13 02:21:52'),
(47, 'घर / जग्गा जमिन', 'tresnaksa', 'ट्रेस  सिफारिस', NULL, '2018-12-13 02:22:56', '2018-12-13 02:22:56'),
(48, 'घर / जग्गा जमिन', 'naksa', 'नक्सा सिफारिस', NULL, '2018-12-13 02:23:11', '2018-12-13 02:23:11'),
(49, 'घर / जग्गा जमिन', 'sarjimin', 'सर्जमिन सिफारिस', NULL, '2018-12-13 02:23:37', '2018-12-13 02:23:37'),
(50, 'घर / जग्गा जमिन', 'wadasarjimin', 'वडा सर्जमिन सिफारिस', NULL, '2018-12-13 02:23:52', '2018-12-13 02:23:52'),
(51, 'घर / जग्गा जमिन', 'shresta', 'श्रेस्ता कार्यान्वयन', NULL, '2018-12-13 02:24:11', '2018-12-13 02:24:11'),
(52, 'घर / जग्गा जमिन', 'shrestauparsifaris', 'श्रेस्ता उपर सिफारिस', NULL, '2018-12-13 02:25:43', '2018-12-13 02:25:43'),
(53, 'घर / जग्गा जमिन', 'muchulka', 'सर्जमिन  मुचुल्का', NULL, '2018-12-13 02:37:40', '2018-12-13 02:37:40'),
(54, 'घर / जग्गा जमिन', 'muchulkaguthi', 'सर्जमिन  मुचुल्का (गुठी)', NULL, '2018-12-13 02:37:52', '2018-12-13 02:37:52'),
(55, 'घर / जग्गा जमिन', 'suchanatas', 'सूचना टाँस', NULL, '2018-12-13 02:38:06', '2018-12-13 02:38:06'),
(56, 'घर / जग्गा जमिन', 'suchanatasguthi', 'सूचना टाँस (गुठी)', NULL, '2018-12-13 02:38:27', '2018-12-13 02:38:27'),
(57, 'घर / जग्गा जमिन', 'gharjagganamsarikitani', 'घर जग्गा नामसारी सिफारिस (किटानी)', NULL, '2018-12-13 02:40:38', '2018-12-13 02:40:38'),
(58, 'घर / जग्गा जमिन', 'gharkayamsifaris', 'घर कायम सिफारिस', NULL, '2018-12-13 02:41:12', '2018-12-13 02:41:12'),
(59, 'घर / जग्गा जमिन', 'kitta_kat_sifaris', 'कित्ताकाट सिफारिस', NULL, '2018-12-13 02:43:50', '2018-12-13 02:43:50'),
(61, 'घर / जग्गा जमिन', 'ghar_bato_pramanit', 'घरबाटो प्रमाणित', NULL, '2018-12-13 02:44:45', '2018-12-13 02:44:45'),
(62, 'घर / जग्गा जमिन', 'char_killa_pramanit', 'चार किल्ला प्रमाणित', NULL, '2018-12-13 02:44:59', '2018-12-13 02:44:59'),
(63, 'घर / जग्गा जमिन', 'kitta_kat_sifaris', 'कित्ताकाट सिफारिस', NULL, '2018-12-13 02:45:34', '2018-12-13 02:45:34'),
(64, 'घर / जग्गा जमिन', 'ghar_bato_pramanit', 'घरबाटो प्रमाणित', NULL, '2018-12-13 02:45:49', '2018-12-13 02:45:49'),
(65, 'घर / जग्गा जमिन', 'jagga_dhani_pramanpatra_pratilipi_sifaris', 'जग्गाधनी प्रमाण पत्रको प्रतिलिपि  सिफारिस', NULL, '2018-12-13 02:46:46', '2018-12-13 02:46:46'),
(66, 'घर / जग्गा जमिन', 'jagga_dhani_purjama_gharkayem_sifaris', 'जग्गाधनी प्रमाण पुर्जामा घर कायम सिफारिस', NULL, '2018-12-13 02:47:30', '2018-12-13 02:47:30'),
(67, 'घर / जग्गा जमिन', 'ghar_patal_sifaris', 'घर पाताल भएको सिफारिस', NULL, '2018-12-13 02:47:47', '2018-12-13 02:47:47'),
(68, 'संघ संस्था', 'nonprofit', 'गैर नाफामुलुक संस्था दर्ता', NULL, '2018-12-13 02:49:15', '2018-12-13 02:49:15'),
(69, 'संघ संस्था', 'sasthanabikaransifaris', 'संस्था नबिकरण सिफारिस', NULL, '2018-12-13 02:49:47', '2018-12-13 02:49:47'),
(70, 'संघ संस्था', 'sasthadartasifarisa', 'संस्था दर्ता सिफारिस', NULL, '2018-12-13 02:50:07', '2018-12-13 02:50:07'),
(71, 'व्यापार / व्यवसाय', 'nirmanbebasaye', 'घ वर्गको निर्माण व्यवसाय इजाजत पत्र', NULL, '2018-12-13 02:50:36', '2018-12-13 02:50:36'),
(72, 'व्यापार / व्यवसाय', 'bebasayedartanaya', 'व्यवसाय दर्ता दरखास्त फारम', NULL, '2018-12-13 02:51:16', '2018-12-13 02:51:16'),
(73, 'व्यापार / व्यवसाय', 'pannoa', 'नयाँ  स्थायी लेखा नं', NULL, '2018-12-13 02:51:46', '2018-12-13 02:51:46'),
(74, 'व्यापार / व्यवसाय', 'karobarpanno', 'कारोबार थप स्थायी लेखा नं.', NULL, '2018-12-13 02:54:43', '2018-12-13 02:54:43'),
(75, 'व्यापार / व्यवसाय', 'pannoa', 'उद्योग दर्ता सिफारिस', NULL, '2018-12-13 02:54:56', '2018-12-13 02:54:56'),
(76, 'शैक्षिक', 'scholarship', 'छात्रवृत्ति सिफारिस', NULL, '2018-12-13 02:55:26', '2018-12-13 02:55:26'),
(77, 'शैक्षिक', 'bipanna', 'विपन्नता सिफारिस', NULL, '2018-12-13 03:15:27', '2018-12-13 03:15:27'),
(78, 'भौतिक निर्माण', 'dhara_jadan_sifaris', 'धारा जडान सिफारिस', NULL, '2018-12-13 03:16:24', '2018-12-13 03:16:24'),
(79, 'भौतिक निर्माण', 'bijuli_jadan_sifaris', 'बिजुली जडान सिफारिस', NULL, '2018-12-13 03:31:55', '2018-12-13 03:31:55'),
(80, 'भौतिक निर्माण', 'sadak_khane_sifaris', 'सडक खन्ने स्वीकृतिको सिफारिस', NULL, '2018-12-13 03:32:51', '2018-12-13 03:32:51'),
(81, 'भौतिक निर्माण', 'nepalsarkarko_naamma_bato_kayem_sifaris', 'नेपाल सरकारको नाममा बाटो', NULL, '2018-12-13 03:33:16', '2018-12-13 03:33:16'),
(82, 'English Format', 'relation_verifications', 'Relationship Verification', NULL, '2018-12-13 03:33:41', '2018-12-13 03:33:41'),
(83, 'English Format', 'birth_date_verifications', 'Birth Date Verification', NULL, '2018-12-13 03:34:01', '2018-12-13 03:34:01'),
(84, 'English Format', 'occupation_verifications', 'Occupation Verification', NULL, '2018-12-13 03:34:22', '2018-12-13 03:34:22'),
(85, 'English Format', 'unmarriedverification', 'Unmarried Verification', NULL, '2018-12-13 03:34:40', '2018-12-13 03:34:40'),
(86, 'English Format', 'addressverification', 'Address Verification', NULL, '2018-12-13 03:35:08', '2018-12-13 03:35:08'),
(87, 'आर्थिक', 'upacharsahayogsifaris', 'उपचारमा आर्थीक सहायता सिफारिस', NULL, '2018-12-13 03:35:43', '2018-12-13 03:35:43'),
(88, 'सामाजिक / पारिवारिक', 'asthaie_basobas_sifaris', 'अस्थायी बसोबास सिफारिस', NULL, '2018-12-13 03:36:18', '2018-12-13 03:36:18'),
(89, 'सामाजिक / पारिवारिक', 'esthaie_basobas_sifaris', 'स्थायी बसोबास सिफारिस', NULL, '2018-12-13 03:36:55', '2018-12-13 03:36:55'),
(90, 'सामाजिक / पारिवारिक', 'marriage_verifications', 'विवाह प्रमणित', NULL, '2018-12-13 03:37:25', '2018-12-13 03:37:25'),
(91, 'सामाजिक / पारिवारिक', 'birth_date_verifications', 'जन्म मिति प्रमाणित', NULL, '2018-12-13 03:37:45', '2018-12-13 03:37:45'),
(92, 'सामाजिक / पारिवारिक', 'unmarriedverification', 'अविवाहित प्रमाणित', NULL, '2018-12-13 03:38:07', '2018-12-13 03:38:07'),
(93, 'सामाजिक / पारिवारिक', 'nata_pramanits', 'नाता प्रमाणित', NULL, '2018-12-13 03:38:53', '2018-12-13 03:38:53'),
(94, 'सामाजिक / पारिवारिक', 'tinpuste_pramanits', 'तीन पुस्ते प्रमाणित', NULL, '2018-12-13 03:39:30', '2018-12-13 03:39:30'),
(95, 'सामाजिक / पारिवारिक', 'internal_migration_sifaris', 'आन्तरिक बसाइँसराई सिफारिस', NULL, '2018-12-13 03:40:01', '2018-12-13 03:40:01'),
(96, 'सामाजिक / पारिवारिक', 'nabalak_parichaye_patra_sifaris', 'नाबालक परीचय पत्र सिफारिस', NULL, '2018-12-13 03:40:21', '2018-12-13 03:40:21'),
(97, 'सामाजिक / पारिवारिक', 'mritak_hakdar_sifaris', 'मृतकका हकदारको सिफारिस', NULL, '2018-12-13 03:40:44', '2018-12-13 03:40:44'),
(98, 'सामाजिक / पारिवारिक', 'apanga_parichaye_patra_sifaris', 'अपांग परीचय पत्र सिफारिस', NULL, '2018-12-13 03:41:04', '2018-12-13 03:41:04'),
(99, 'खुल्ला ढाँचा', 'generalsifaris', 'नेपाली भाषामा', NULL, '2018-12-13 03:41:41', '2018-12-13 03:41:41'),
(100, 'खुल्ला ढाँचा', 'generalsifarisenglish', 'अंग्रेजी भाषामा', NULL, '2018-12-13 03:41:55', '2018-12-13 03:41:55'),
(101, 'अन्य', 'farakfaraknametharpramanit', 'फरक फरक व्यहोरा प्रमाणित', NULL, '2018-12-13 03:42:38', '2018-12-13 03:42:38'),
(102, 'अन्य', 'faraknametharnagarikta', 'फरक फरक नाम थर प्रमाणित', NULL, '2018-12-13 03:43:40', '2018-12-13 03:43:40'),
(103, 'अन्य', 'farakfarakjanmamitipramanit', 'फरक फरक जन्म मिति प्रमाणित', NULL, '2018-12-13 03:44:02', '2018-12-13 03:44:02'),
(104, 'अन्य', 'farakfarakenglishhijepramanit', 'फरक फरक अंग्रेजी हिज्जे प्रमाणित', NULL, '2018-12-13 03:44:21', '2018-12-13 03:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `char_killa_pramanit`
--

CREATE TABLE `char_killa_pramanit` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `char_killa_pramanit`
--

INSERT INTO `char_killa_pramanit` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `sabik_address`, `person_title`, `person_name`, `user_id`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '8', '2075-06-21', 'ilam', 'श्री', 'hjgjg', '1', 'kj', 'hkjh', 'h', 'jkh', '2019-03-17 02:02:32', '2019-03-17 02:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `char_killa_pramanit_detail`
--

CREATE TABLE `char_killa_pramanit_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `char_killa_id` int(11) DEFAULT NULL,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `seat_kitta_area` text COLLATE utf8mb4_unicode_ci,
  `batto_abastha` text COLLATE utf8mb4_unicode_ci,
  `east` text COLLATE utf8mb4_unicode_ci,
  `west` text COLLATE utf8mb4_unicode_ci,
  `north` text COLLATE utf8mb4_unicode_ci,
  `south` text COLLATE utf8mb4_unicode_ci,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `char_killa_pramanit_detail`
--

INSERT INTO `char_killa_pramanit_detail` (`id`, `char_killa_id`, `ward_no`, `seat_kitta_area`, `batto_abastha`, `east`, `west`, `north`, `south`, `remark`, `created_at`, `updated_at`) VALUES
(1, 1, '8', '97', 'kjh', 'jkjhjk', 'hkj', 'hjkh', 'jkh', 'jk', '2019-03-17 02:02:32', '2019-03-17 02:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `citizencertificate`
--

CREATE TABLE `citizencertificate` (
  `id` int(10) UNSIGNED NOT NULL,
  `si_name` text COLLATE utf8mb4_unicode_ci,
  `se_name` text COLLATE utf8mb4_unicode_ci,
  `paper_name` text COLLATE utf8mb4_unicode_ci,
  `karyalaya` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `app_full_name` text COLLATE utf8mb4_unicode_ci,
  `app_full_name_english` text COLLATE utf8mb4_unicode_ci,
  `sex` text COLLATE utf8mb4_unicode_ci,
  `sex_english` text COLLATE utf8mb4_unicode_ci,
  `place_of_birth` text COLLATE utf8mb4_unicode_ci,
  `place_of_birth_english` text COLLATE utf8mb4_unicode_ci,
  `permanent_address_place` text COLLATE utf8mb4_unicode_ci,
  `permanent_address_district` text COLLATE utf8mb4_unicode_ci,
  `permanent_address_ward` text COLLATE utf8mb4_unicode_ci,
  `local_permanent_address` text COLLATE utf8mb4_unicode_ci,
  `local_permanent_address_district` text COLLATE utf8mb4_unicode_ci,
  `local_permanent_address_ward` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth_month` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth_day` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth_english` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth_english_month` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth_english_day` text COLLATE utf8mb4_unicode_ci,
  `name_of_father` text COLLATE utf8mb4_unicode_ci,
  `father_address` text COLLATE utf8mb4_unicode_ci,
  `father_citi` text COLLATE utf8mb4_unicode_ci,
  `name_of_mother` text COLLATE utf8mb4_unicode_ci,
  `mother_address` text COLLATE utf8mb4_unicode_ci,
  `mother_citi` text COLLATE utf8mb4_unicode_ci,
  `name_of_spouse` text COLLATE utf8mb4_unicode_ci,
  `spouse_address` text COLLATE utf8mb4_unicode_ci,
  `spouse_citi` text COLLATE utf8mb4_unicode_ci,
  `sam_name` text COLLATE utf8mb4_unicode_ci,
  `sam_address` text COLLATE utf8mb4_unicode_ci,
  `application_date` text COLLATE utf8mb4_unicode_ci,
  `local_add` text COLLATE utf8mb4_unicode_ci,
  `local_ward` text COLLATE utf8mb4_unicode_ci,
  `appsifaris_date` text COLLATE utf8mb4_unicode_ci,
  `app_cur_district` text COLLATE utf8mb4_unicode_ci,
  `app_cur_np` text COLLATE utf8mb4_unicode_ci,
  `guardian_name` text COLLATE utf8mb4_unicode_ci,
  `child_age` text COLLATE utf8mb4_unicode_ci,
  `child_name` text COLLATE utf8mb4_unicode_ci,
  `app_date` text COLLATE utf8mb4_unicode_ci,
  `sifaris_username` text COLLATE utf8mb4_unicode_ci,
  `sifaris_userpost` text COLLATE utf8mb4_unicode_ci,
  `local_add2` text COLLATE utf8mb4_unicode_ci,
  `local_ward2` text COLLATE utf8mb4_unicode_ci,
  `app_name` text COLLATE utf8mb4_unicode_ci,
  `app_name2` text COLLATE utf8mb4_unicode_ci,
  `app_age` text COLLATE utf8mb4_unicode_ci,
  `app_child` text COLLATE utf8mb4_unicode_ci,
  `application_date2` text COLLATE utf8mb4_unicode_ci,
  `off_name` text COLLATE utf8mb4_unicode_ci,
  `off_post` text COLLATE utf8mb4_unicode_ci,
  `nibedak` text COLLATE utf8mb4_unicode_ci,
  `nibedak_relation` text COLLATE utf8mb4_unicode_ci,
  `s_name` text COLLATE utf8mb4_unicode_ci,
  `s_nagarikta` text COLLATE utf8mb4_unicode_ci,
  `s_date` text COLLATE utf8mb4_unicode_ci,
  `s2_name` text COLLATE utf8mb4_unicode_ci,
  `s2_date` text COLLATE utf8mb4_unicode_ci,
  `sifaris_nibedan` text COLLATE utf8mb4_unicode_ci,
  `bitarit_num` text COLLATE utf8mb4_unicode_ci,
  `bitarit_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `guardian_title` text COLLATE utf8mb4_unicode_ci,
  `child_type` text COLLATE utf8mb4_unicode_ci,
  `child_title` text COLLATE utf8mb4_unicode_ci,
  `nagarikta_type1` text COLLATE utf8mb4_unicode_ci,
  `relative_type` text COLLATE utf8mb4_unicode_ci,
  `relative_title` text COLLATE utf8mb4_unicode_ci,
  `nagarikta_type2` text COLLATE utf8mb4_unicode_ci,
  `nibedak_type` text COLLATE utf8mb4_unicode_ci,
  `nagarikta_type` text COLLATE utf8mb4_unicode_ci,
  `nagarikta_type3` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citizencertificate`
--

INSERT INTO `citizencertificate` (`id`, `si_name`, `se_name`, `paper_name`, `karyalaya`, `office_address`, `app_full_name`, `app_full_name_english`, `sex`, `sex_english`, `place_of_birth`, `place_of_birth_english`, `permanent_address_place`, `permanent_address_district`, `permanent_address_ward`, `local_permanent_address`, `local_permanent_address_district`, `local_permanent_address_ward`, `date_of_birth`, `date_of_birth_month`, `date_of_birth_day`, `date_of_birth_english`, `date_of_birth_english_month`, `date_of_birth_english_day`, `name_of_father`, `father_address`, `father_citi`, `name_of_mother`, `mother_address`, `mother_citi`, `name_of_spouse`, `spouse_address`, `spouse_citi`, `sam_name`, `sam_address`, `application_date`, `local_add`, `local_ward`, `appsifaris_date`, `app_cur_district`, `app_cur_np`, `guardian_name`, `child_age`, `child_name`, `app_date`, `sifaris_username`, `sifaris_userpost`, `local_add2`, `local_ward2`, `app_name`, `app_name2`, `app_age`, `app_child`, `application_date2`, `off_name`, `off_post`, `nibedak`, `nibedak_relation`, `s_name`, `s_nagarikta`, `s_date`, `s2_name`, `s2_date`, `sifaris_nibedan`, `bitarit_num`, `bitarit_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `guardian_title`, `child_type`, `child_title`, `nagarikta_type1`, `relative_type`, `relative_title`, `nagarikta_type2`, `nibedak_type`, `nagarikta_type`, `nagarikta_type3`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'dsfsdf', 'sdfdfs', 'dsf', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'sdfas', 'sdf', 'sf', 'sdfsdf', 'sdf', 'fsdf', 'sdf', 'dsf3', '5', 'iia,mn', 'sdf', '4', '2023', '4', '34', '323', '4', '34', 'sdkf', 'sdf', 'jksf', 'sdf', 'a', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2075-06-07', 'ईलाम नगरपालिका', 'df', '2075-06-02', 'ईलाम नगरपालिका', 'df', 'sdfd', 'sdf', 'sdf', '2075-06-07', 'sfd', 'sfdf', 'df', 'df', '34', 'sdf', '45', '2342', '2075-06-08', 'dsf', 'sdf', 'kjsdf', 'sdf', 'df', 'sdf', '2075-06-08', 'dsf', '2075-06-08', 'sdf', NULL, '2075-06-09', 'sdf', 'sdf', 'sdf', 'sf', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, 'निवेदक', NULL, NULL, '2', '2018-09-23 14:53:36', '2018-09-23 14:53:36'),
(2, 'dsfsdf', 'नेपाली नागरिकताको प्रमाण-पत्र दिन उपयुक्त हुने देखि निर्णयार्थ पेश गरेको छु', 'dsf', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'ramesh', 'sdf', 'sf', 'sdfsdf', 'sdf', 'fsdf', 'sdf', 'dsf3', '5', 'iia,mn', 'sdf', '4', '2023', '4', '34', '323', '4', '34', 'sdkf', 'sdf', 'jksf', 'sdf', 'a', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2075-06-07', 'ईलाम नगरपालिका', 'df', '2075-06-02', 'ईलाम नगरपालिका', 'df', 'sdfd', 'sdf', 'sdf', '2075-06-07', 'sfd', 'sfdf', 'df', 'df', '34', 'sdf', '45', '2342', '2075-06-08', 'dsf', 'sdf', 'kjsdf', 'sdf', 'df', 'sdf', '2075-06-08', 'dsf', '2075-06-08', 'sdf', NULL, '2075-06-09', 'sdf', 'sdf', 'sdf', 'sf', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', 'छोरी', 'सुश्री', NULL, 'निवेदक', NULL, 'जन्मको आधारले', '2', '2018-09-23 14:55:12', '2018-09-23 20:06:33'),
(3, '<p>xcvz</p>', '<p>sdf</p>', '<p>sdf</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '4', 'xfds', 'sdf', '1', '2020', '1', '1', '2020', '1', '1', 'ddfsd', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'df', '2075-08-20', 'ईलाम नगरपालिका', '2', '2075-08-18', 'ईलाम नगरपालिका', '4', 'sdf', 'sdf', 'sdf', '2075-08-06', 'sdf', 'sdf', 'sdf', 'sdf', '5', 'sdf', '5', 'sdf', '2075-08-05', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '34', '2075-08-06', 'sdf', '2075-08-05', 'sdf', 'sdf', '2075-08-05', 'sanjaya', 'ilam', '890', '1', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '9', '2018-12-13 01:09:12', '2018-12-13 01:09:12'),
(5, '<p>JH</p>', '<p>H</p>', '<p>KH</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'jhdf', 'jkshdf', 'jksdhf', 'jksdshf', 'jksddfh', 'jksddhf', 'jksdhf', 'jksdhf', 'jksdf', 'jksdhf', 'jksddhf', 'jksdfh', 'hjksdfh', 'jkdhfjk', 'jkdshfk', 'jksdhdfjk', 'hdsjkfhqhj', 'hkjhjkahs', 'jkshdf', 'hjkhsjfkh', 'jkhJKHJK', 'H', 'H', 'JKH', 'JKH', 'JK', 'HJK', 'H', 'JH', 'JK', 'HJK', 'HJK', 'H', 'JH', 'JKH', 'HJK', 'J', 'JHH', 'JKH', 'HJK', 'H', 'JH', 'JH', 'J', 'JH', 'JKH', 'JK', 'HJK', 'HJK', NULL, 'H', 'JKH', 'JKH', 'JKH', 'JK', 'HJK', 'JH', 'HJJHJ', 'JH', 'JKH', 'H', 'JH', 'J', 'JH', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '9', '2018-12-16 01:03:27', '2018-12-16 01:03:27'),
(6, '<p>hjk</p>', '<p>h</p>', '<p>jkh</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'h', 'jkhj', 'jk', 'jh', 'j', 'jhjk', 'hjk', 'hh', 'kjh', 'jkh', 'jkhjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hkjh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hjh', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jh', 'jhj', 'hjk', 'hjk', 'hjkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkhjk', 'jh', 'jhj', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjh', 'hjh', 'jk', 'hjk', 'jkh', 'kh', 'jkh', 'hjk', 'hjk', 'hjk', 'hjk', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '9', '2018-12-16 04:45:55', '2018-12-16 04:45:55'),
(7, '<p>hjgh</p>', '<p>jg</p>', '<p>hjg</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'hg', 'jhgh', 'ghj', 'ghjg', 'jh', 'ghj', 'gjh', 'gjh', 'gjh', 'gjh', 'gjhg', 'hj', 'hg', 'hj', 'hj', 'gj', 'ghj', 'ghj', 'ghj', 'hj', 'gj', 'hg', 'jhg', 'jgh', 'jhg', 'hjg', 'gh', 'hjg', 'hj', 'h', 'gh', 'jgh', 'jgh', 'jgh', 'jghj', 'ghj', 'ghj', 'jgh', 'hjgh', 'jhghjg', 'ghhg', 'hg', 'hjg', 'hjg', 'hj', 'g', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'ghjg', 'hj', 'g', 'hjg', 'hjgh', 'jghj', 'ghj', 'ghj', 'h', 'ghj', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '9', '2018-12-17 00:01:13', '2018-12-17 00:01:13'),
(8, '<p>g</p>', '<p>hjg</p>', '<p>ghj</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'hjJHgjGJjGHHJgHJGHJGhjGhjGhjjBj', 'jhghj', 'gj', 'jg', 'hjg', 'hjg', 'hjg', 'hjghj', 'ghj', 'ghj', 'ghjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hj', 'ghjg', 'hjg', 'hj', 'ghj', 'ghj', 'ghj', 'ghj', 'ghj', 'ghj', 'ghjg', 'hjg', 'jghj', 'ghjg', 'hg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hj', 'ghjg', 'hj', 'ghj', 'hg', 'hj', 'hg', 'ghjg', 'hjg', 'hjg', 'hjg', 'hj', 'ghj', 'hj', 'ghjg', 'jhghj', 'ghj', 'hghj', 'hjg', 'ghj', 'ghj', 'hjg', 'hj', 'ghjg', 'hj', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2019-01-06 03:15:14', '2019-01-06 03:15:14'),
(9, '<p>jkh</p>', '<p>jk</p>', '<p>hjk</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'h', 'kjh', 'kh', 'jh', 'jh', 'hj', 'jh', 'jhjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjkh', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjh', 'jkh', 'jkh', 'kjh', 'jh', 'jh', 'hjk', 'hjk', 'k', 'hjk', 'hkj', 'hkj', 'hjk', 'hj', 'hjk', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'hj', 'jh', 'jkh', 'hjk', 'hjk', 'h', 'jh', 'jh', 'jh', 'jkh', 'jkh', 'jkh', 'hjk', 'hjkh', 'jk', 'jkh', 'jkh', 'jkh', 'jkh', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2019-01-08 23:15:58', '2019-01-08 23:15:58'),
(10, '<p>hj</p>', '<p>hjjhjjk</p>', '<p>jkh</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'h', 'jh', 'hjk', 'hjkh', 'jkh', 'jkhjk', 'jjjk', 'hjk', 'hjk', 'hjk', 'hkh', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjkh', 'jkh', 'jk', 'hjkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'h', 'jkh', 'jkh', 'jkh', 'hjk', 'hjk', 'h', 'jkh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'jjk', 'hjk', 'hjkh', 'jkh', 'kj', 'jk', 'hjk', 'hjk', 'hjk', 'hhj', 'jk', 'jkh', 'jkh', 'hjk', 'hjk', 'hjk', 'hjk', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2019-01-23 03:13:57', '2019-01-23 03:13:57'),
(11, '<p>hjk</p>', '<p>hjk</p>', '<p>hjk</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'jkh', 'h', 'jhkj', 'hkj', 'hkj', 'hjk', 'hjk', 'hjk', 'hk', 'jh', 'hjk', 'hjk', 'hjk', 'hjk', 'hj', 'hj', 'h', 'hj', 'hj', 'hj', 'hk', 'hk', 'hjk', 'hjk', 'hk', 'hk', 'hjk', 'hjk', 'hjk', 'jkh', 'k', 'hkj', 'kjhkh', 'khj', 'kjh', 'jkh', 'hjk', 'hkj', 'hkj', 'hj', 'kjh', 'kj', 'hkjh', 'kjh', 'jh', 'hjk', 'hjk', 'hjk', 'hjj', 'jh', 'hjk', 'hjk', 'hj', 'kjh', 'hkj', 'hjk', 'jk', 'hjk', 'h', 'kjh', 'jk', 'hjk', 'hjk', 'hjk', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2019-02-23 07:27:05', '2019-02-23 07:27:05'),
(12, '<p>jkh</p>', '<p>jk</p>', '<p>hjk</p>', 'प्रमुख जिल्ला अधीकारी', 'इलाम', 'jk', 'hjk', 'hkj', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'h', 'hj', 'jh', 'jkh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'h', 'jh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'h', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'h', 'hj', 'jh', 'jh', 'jkh', 'hkj', 'hjk', 'h', 'jh', 'jkh', 'jkh', 'hjk', 'hjk', 'h', 'jh', 'jkh', 'hjk', 'hj', 'hjk', 'jk', 'hjk', 'hjk', 'hjkh', 'श्रीमान', 'छोरा', 'श्री', 'वंशजको नाताले', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2019-03-05 07:56:13', '2019-03-05 07:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `citizenship`
--

CREATE TABLE `citizenship` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyalaya` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registrate_office_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registrate_office_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anchal_karyalaya` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_nepali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_nepali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthplace_nepali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthplace_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_dis_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_ward_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_dis_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_ward_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_nepali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_nepali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_nepali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_citi_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_citi_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_citi_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karyalaya_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rasid_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_names` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedan_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palika_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palika_ward` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palika_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hal_palika` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hal_ward` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_option_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bibaran_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bibaran_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sifaris_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sifaris_post` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_citizenship_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bigrinuko_karan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sakkal_nakkal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citizenship`
--

INSERT INTO `citizenship` (`id`, `karyalaya`, `dis_name`, `registrate_office_one`, `registrate_office_two`, `anchal_karyalaya`, `citi_no`, `citi_date`, `citi_type`, `name_nepali`, `name_english`, `gender_nepali`, `gender_english`, `birthplace_nepali`, `birthplace_english`, `citi_dis_name`, `citi_ward_no`, `citi_dis_english`, `citi_ward_english`, `year_nepali`, `month_nepali`, `day_nepali`, `year_english`, `month_english`, `day_english`, `father_name`, `father_citi_type`, `mother_name`, `mother_citi_type`, `spouse_name`, `spouse_citi_type`, `karyalaya_name`, `rasid_no`, `nibedak_names`, `nibedan_date`, `palika_name`, `palika_ward`, `palika_date`, `hal_palika`, `hal_ward`, `spouse_option_name`, `child_age`, `title_name`, `bibaran_no`, `bibaran_date`, `office_name`, `sifaris_name`, `sifaris_post`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `bigrinuko_karan`, `sakkal_nakkal`, `spouse_option`, `child_option`, `title_option`, `citi_reason`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'प्रमुख जिल्ला अधिकारी', 'ilam', 'u', 'jk', 'k', 'hj', '2075-06-09', 'jk', 'hj', 'hj', 'hjgfh', 'hjg', 'hj', 'hgf', 'इलाम', '१', 'Ilam', '1', '2039', '3', '2', '2039', '3', '2', 'jksdf', 'df', 'df', 'df', 'sdf', 'sdf', 'sdf', '3', 'df', '2075-06-02', 'df', '3', '2075-06-08', 'dfs', '3', 'dfs', '34', 'sdf', 'sdf', '2075-06-08', 'hjgj', 'uyfyt', 'It officer', 'hj', 'hj', 'hj', 'hj', 'झुत्रो भएको', 'सक्कल', 'श्रीमान', 'छोरा', 'श्री', 'झुत्रो भएको', 2, '2018-09-24 12:34:41', '2018-09-24 14:37:52'),
(2, 'प्रमुख जिल्ला अधिकारी', 'ilam', 'ilamn', 'ilam', 'sdfj', 'jmhg', '2075-08-19', 'sdfsd', 'hj', 'nhgj', 'hjgj', 'hjg', 'jhg', 'hjg', 'इलाम', '१', 'Ilam', '1', '2020', '20', '20', '2020', '1', '1', 'sjsjk', 'asjkf', 'sdkjfhk', 'sdkjf', 'sfk', 'sdf', 'ksdjf', '4', 'jkhsdf', '2075-08-04', 'jkhsdf', '4', '2075-08-04', 'dsf', '4', 'sdf', '9', 'sdf', '9', '2075-08-04', 'sdf', 'sdf', 'sdf', 'sanjaya', 'ilam', '890', '1', 'हराएको', 'नक्कल', 'श्रीमान', 'छोरा', 'श्री', 'झुत्रो भएको', 9, '2018-12-13 01:26:05', '2018-12-13 01:26:05'),
(3, 'प्रमुख जिल्ला अधिकारी', 'hjh', 'jkh', 'jh', 'bhjb', 'jh', 'hj', 'hj', 'hk', 'hjk', 'h', 'kjh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hj', 'h', 'jh', 'hj', 'hjjk', 'h', 'jh', 'jhjk', 'hjk', 'hjk', 'hjk', 'h', 'jh', 'jh', 'jh', 'jh', 'jh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'jkh', 'hjk', 'h', 'jh', 'jh', 'jkh', 'hjk', 'hjk', 'h', 'jhkj', 'hjk', 'h', 'झुत्रो भएको', 'सक्कल', 'श्रीमान', 'छोरा', 'श्री', 'झुत्रो भएको', 9, '2018-12-16 01:32:47', '2018-12-16 01:32:47'),
(4, 'प्रमुख जिल्ला अधिकारी', 'h', 'jhj', 'hh', 'jh', 'kh', 'jkh', 'jh', 'khk', 'hjjk', 'hjh', 'kjh', 'jh', 'kh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hkj', 'hjk', 'hkhj', 'jhhjhjk', 'hj', 'hj', 'hj', 'jh', 'jkh', 'jkh', 'jkh', 'jk', 'hj', 'hjkh', 'jkh', 'jkh', 'jkh', 'jkh', 'hjk', 'hjk', 'h', 'jkh', 'jkh', 'hjk', 'hjkh', 'jh', 'jh', 'jh', 'jh', 'jkh', 'झुत्रो भएको', 'सक्कल', 'श्रीमान', 'छोरा', 'श्री', 'झुत्रो भएको', 1, '2019-01-08 23:26:24', '2019-01-08 23:26:24'),
(5, 'प्रमुख जिल्ला अधिकारी', 'jhj', 'hjk', 'hkjh', 'jkh', 'hkj', 'hjk', 'hjk', 'hkj', 'h', 'kjh', 'jkh', 'hjkj', 'hjk', 'hjkh', 'jkh', 'jh', 'hk', 'hk', 'hjk', 'hkj', 'h', 'hk', 'hkh', 'hk', 'hjk', 'hk', 'hk', 'hkj', 'hj', 'j', 'kj', 'hjkh', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'hk', 'hk', 'hjk', 'hjk', 'hjk', 'hjk', 'jhjk', 'h', 'jh', 'jkh', 'jkh', 'jkh', 'jk', 'झुत्रो भएको', 'सक्कल', 'श्रीमान', 'छोरा', 'श्री', 'झुत्रो भएको', 1, '2019-02-23 07:27:53', '2019-02-23 07:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `citizensifaris`
--

CREATE TABLE `citizensifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `dis_name` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `n_name` text COLLATE utf8mb4_unicode_ci,
  `birth_place` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `mother_name` text COLLATE utf8mb4_unicode_ci,
  `patipatni_name` text COLLATE utf8mb4_unicode_ci,
  `per_add` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `birth_date` text COLLATE utf8mb4_unicode_ci,
  `toli_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedan_name` text COLLATE utf8mb4_unicode_ci,
  `nibedan_relation` text COLLATE utf8mb4_unicode_ci,
  `sanakhat_name` text COLLATE utf8mb4_unicode_ci,
  `sanakhat_relation` text COLLATE utf8mb4_unicode_ci,
  `sanakhat_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `nibedak_options` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citizensifaris`
--

INSERT INTO `citizensifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `dis_name`, `letter_subject`, `n_name`, `birth_place`, `father_name`, `mother_name`, `patipatni_name`, `per_add`, `person_name`, `birth_date`, `toli_ko_name`, `nibedan_name`, `nibedan_relation`, `sanakhat_name`, `sanakhat_relation`, `sanakhat_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `nibedak_options`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '3', '2075-06-05', 'ilam', 'नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ', 'sanjaya', 'ilam', 'janardan ghimire', 'menuka ghimire', 'n/c', 'ilam', 'sanjaya', '2075-06-08', 'sanjay', 'sanjaya', 'daughter', 'sanjaya', '343', '2075-06-08', 'sanju', 'df', 'df', 'df', 'निवेदक', 2, '2018-09-24 15:42:58', '2018-09-24 16:18:57'),
(2, '२०७५/०७६', '9', '2075-06-05', 'ilam', 'नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ', 'kdjf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2075-08-07', '5', 'jkdfsh', 'sjkdfh', 'sdf', 'sdf', '2075-08-13', 'sanjaya', 'ilam', '890', '1', 'निबेदिका', 9, '2018-12-13 01:50:07', '2018-12-13 01:50:07'),
(3, '२०७५/०७६', 'h', 'hjh', 'hj', 'नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ', 'kjh', 'jkh', 'hj', 'hj', 'hj', 'hjjk', 'h', 'hkj', 'hjk', 'hkjh', 'h', 'kjh', 'jkh', 'jkh', 'jkh', 'jh', 'jh', 'jk', 'निवेदक', 9, '2018-12-16 01:34:39', '2018-12-16 01:34:39'),
(4, '२०७५/०७६', 'jhj', 'hjh', 'khh', 'नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ', 'hjk', 'hjkh', 'kh', 'jhjk', 'hjkh', 'jkh', 'hj', 'hkj', 'hkj', 'hjjk', 'hjk', 'hjkh', 'jkh', 'hjkh', 'jkh', 'hj', 'jjk', 'hjk', 'निवेदक', 5, '2018-12-16 06:42:47', '2018-12-16 06:42:47'),
(5, '२०७५/०७६', 'hj', 'jh', 'jkh', 'नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ', 'jhj', 'h', 'jkh', 'hj', 'hjh', 'gh', 'g', 'ghh', 'g', 'jhg', 'gh', 'hjg', 'hjg', 'h', 'jg', 'hg', 'gh', 'hjg', 'निवेदक', 1, '2019-01-08 23:27:12', '2019-01-08 23:27:12'),
(6, '२०७५/०७६', 'hj', '2075-06-21', 'jkh', 'नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ', 'jhj', 'h', 'jkh', 'hj', 'hjh', 'gh', 'g', 'ghh', 'g', 'jhg', 'gh', 'hjg', 'hjg', 'h', 'jg', 'hg', 'gh', 'hjg', 'निवेदक', 1, '2019-01-08 23:31:28', '2019-01-08 23:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `court_fee_narakhne_sifaris`
--

CREATE TABLE `court_fee_narakhne_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `state` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `applicant_title` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `relation_title` text COLLATE utf8mb4_unicode_ci,
  `second_applicant_title` text COLLATE utf8mb4_unicode_ci,
  `second_applicant_name` text COLLATE utf8mb4_unicode_ci,
  `case_name` text COLLATE utf8mb4_unicode_ci,
  `case_date` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deathcertificate`
--

CREATE TABLE `deathcertificate` (
  `id` int(10) UNSIGNED NOT NULL,
  `registration_no_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_form_no_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_title_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_father_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_children_option_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children_option_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_option_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_state_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_no_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_title_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death_date_bs_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death_place_local_state_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death_place_ward_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship_no_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_date_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_district_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_registar_name_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signed_date_nep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_form_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death_person_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death_person_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death_person_age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children_option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_title_option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `husband_wife_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death_date_bs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_registar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signed_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_citizenship_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deathcertificate`
--

INSERT INTO `deathcertificate` (`id`, `registration_no_nep`, `registration_date_nep`, `family_form_no_nep`, `applicant_title_nep`, `applicant_name_nep`, `grand_father_name_nep`, `grand_children_option_nep`, `father_name_nep`, `children_option_nep`, `children_name_nep`, `spouse_option_nep`, `province_name_nep`, `district_name_nep`, `local_state_name_nep`, `ward_no_nep`, `age_nep`, `person_title_nep`, `person_name_nep`, `death_date_bs_nep`, `death_place_local_state_nep`, `death_place_ward_nep`, `citizenship_no_nep`, `issued_date_nep`, `issued_district_nep`, `local_registar_name_nep`, `signed_date_nep`, `registration_no`, `registration_date`, `family_form_no`, `applicant_title`, `applicant_name`, `death_person_title`, `death_person_name`, `death_person_age`, `children_option`, `father_title_option`, `father_name`, `spouse_option`, `husband_wife_title`, `spouse_name`, `ward_no`, `local_state`, `district`, `province`, `death_date_bs`, `citizenship_no`, `issued_date`, `issued_district`, `local_registar_name`, `signed_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3', '2075-05-13', '3', 'श्री', 'हिरा', 'अमर', 'नाति', 'अमिस', 'छोरा', 'निमा', 'पति', 'माया', '१', '१', '४', '३४', 'श्री', '३४', '2075-05-07', '५', '4', '4454', '2075-05-13', 'ilam', 'hahaha', '2075-06-05', '3', '2075-05-05', '4', 'Mr', 'ram', 'Mr', 'sita', '45', 'son', 'Mr', 'site', 'Husband', 'Mr', 'hiralal', '4', 'मा', 'ilam', 'ilam', '2075-05-06', '5656', '2075-06-21', 'ilam', 'hahaha', '2075-06-05', 'हाेम', 'इलाम', '343', '४३४', 1, '2018-09-16 17:00:34', '2019-02-23 07:13:41'),
(2, '3', '2075-05-13', '3', 'श्री', 'हिरा', 'अमर', 'नाति', 'अमिस', 'छोरा', 'निमा', 'पति', 'माया', '१', '१', '४', '३४', 'श्री', '३४', '2075-05-07', '५', '4', '4454', '2075-05-13', 'ilam', 'hahaha', '2075-05-30', '3', '2075-05-05', '4', 'Mr', 'ram', 'Mr', 'sita', '45', 'son', 'Mr', 'site', 'Husband', 'Mr', 'hiralal', '4', 'मा', 'ilam', 'ilam', '2075-05-06', '5656', '2075-05-01', 'ilam', 'hahaha', '2075-05-30', 'हाेम', 'इलाम', '343', '४३४', 2, '2018-09-22 18:39:55', '2018-09-22 18:39:55'),
(3, '35', '2075-05-13', '3', 'श्री', 'हिरा', 'अमर', 'नाति', 'अमिस', 'छोरा', 'निमा', 'पति', 'माया', '१', '१', '४', '३४', 'श्री', '३४', '2075-05-07', '५', '4', '4454', '2075-05-13', 'ilam', 'mandiera', '2075-06-05', '3', '2075-05-05', '4', 'Mr', 'ram', 'Mr', 'sita', '45', 'son', 'Mr', 'site', 'Husband', 'Mr', 'hiralal', '4', 'मा', 'ilam', 'ilam', '2075-05-07', '5656', '2075-06-05', 'ilam', 'red', '2075-06-05', 'हाेम', 'इलाम', '343', '४३४', 2, '2018-09-22 18:40:34', '2018-09-23 20:23:16'),
(4, '1', '2075-08-13', '123', 'श्री', 'djf', 'sdf', 'नाति', 'sdf', 'छोरा', 'df', 'पति', 'df', 'df', 'df', '1', '90', 'श्री', 'jhg', '2075-08-27', 'jkh', '6', '3', '2075-08-05', 'ilam', 'sabnjaya', '2075-06-05', '2', '2075-08-13', '2', 'Mr', 'sdfs', 'Mr', 'sdf', 'sdf', 'son', 'Mr', 'df', 'Husband', 'Mr', 'dfs', 'sdfs', 'sdf', 'dsf', 'dfs', '2075-08-27', 'dfg', '2075-06-05', 'sdf', 'sdf', '2075-06-05', 'sanjaya', 'ilam', '890', '1', 9, '2018-12-13 00:54:49', '2018-12-13 00:54:49'),
(5, 'kjhjk', 'jkhj', 'h', 'श्री', 'jhjh', 'hjjk', 'नाति', 'hjk', 'छोरा', 'hjk', 'पति', 'hjk', 'hjk', 'hjk', 'hjk', 'h', 'श्री', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'h', 'hj', 'jh', 'jkh', 'jkh', 'Mr', 'jk', 'Mr', 'hjk', 'hjk', 'son', 'Mr', 'hj', 'Husband', 'Mr', 'jkh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'h', 'jh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hj', 1, '2019-02-23 06:38:51', '2019-02-23 06:38:51'),
(6, 'h', 'hkh', 'jhk', 'श्री', 'jkh', 'jkh', 'नाति', 'jkh', 'छोरा', 'jh', 'पति', 'hj', 'hj', 'hj', 'hj', 'hj', 'श्री', 'jh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hkj', 'hj', 'h', 'hjk', 'Mr', 'jk', 'Mr', 'hj', 'hj', 'son', 'Mr', 'jk', 'Husband', 'Mr', 'hjk', 'hjk', 'hjkh', 'jkh', 'jkh', 'jkh', 'k', 'hjk', 'hjk', 'hj', 'jkh', 'kj', 'hjk', 'hjk', 'h', 1, '2019-02-23 06:39:27', '2019-02-23 06:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dhara_jadan_sifaris`
--

CREATE TABLE `dhara_jadan_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `house_approve_date` text COLLATE utf8mb4_unicode_ci,
  `construction_type` text COLLATE utf8mb4_unicode_ci,
  `khanepani_line_name` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dhara_jadan_sifaris`
--

INSERT INTO `dhara_jadan_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `office_chairman`, `office_name`, `sabik_address`, `person_title`, `person_name`, `kitta_no`, `house_approve_date`, `construction_type`, `khanepani_line_name`, `user_id`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'kjhk', 'hkj', 'hkh', 'h', 'kjh', 'श्री', 'jk', 'hj', NULL, 'आंशिक', 'jhg', '9', 'jjg', 'ghh', 'jgh', 'jgh', '2018-12-16 03:27:45', '2018-12-16 03:27:45'),
(2, '२०७५/०७६', 'kjhk', '2075-06-21', 'hkh', 'h', 'kjh', 'श्री', 'hkj', 'hkjh', NULL, 'आंशिक', 'jhg', '9', 'jjg', 'ghh', 'jgh', 'jgh', '2018-12-16 03:59:11', '2018-12-16 03:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `dhara_jadan_sifaris_detail`
--

CREATE TABLE `dhara_jadan_sifaris_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `dhara_jadan_sifaris_id` int(11) DEFAULT NULL,
  `dhara_jadan_kitta_no` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dhara_jadan_sifaris_detail`
--

INSERT INTO `dhara_jadan_sifaris_detail` (`id`, `dhara_jadan_sifaris_id`, `dhara_jadan_kitta_no`, `created_at`, `updated_at`) VALUES
(1, 1, 'jh', '2018-12-16 03:27:45', '2018-12-16 03:27:45'),
(2, 2, 'jh', '2018-12-16 03:59:11', '2018-12-16 03:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(20) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `district_name_english` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `province_id`, `district_name`, `district_name_english`) VALUES
(1, 1, 'ताप्लेजुङ', 'Taplejung'),
(2, 1, 'पाँचथर', 'Panchthar'),
(3, 1, 'इलाम', 'Ilam'),
(4, 1, 'झापा', 'Jhapa'),
(5, 1, 'मोरङ', 'Morang'),
(6, 1, 'सुनसरी', 'Sunsari'),
(7, 1, 'धनकुटा', 'Dhankuta'),
(8, 1, 'तेह्रथुम', 'Terhathum'),
(9, 1, 'संखुवासभा', 'Sankhuwasabha'),
(10, 1, 'भोजपुर', 'Bhojpur'),
(11, 1, 'सोलुखुम्बु', 'Solukhumbu'),
(12, 1, 'ओखलढुङगा', 'Okhaldhunga'),
(13, 1, 'खोटाङ', 'Khotang'),
(14, 1, 'उदयपुर', 'Udayapur'),
(15, 2, 'सप्तरी', 'Saptari'),
(16, 2, 'सिरहा', 'Siraha'),
(17, 2, 'धनुषा', 'Dhanusa'),
(18, 2, 'महोत्तरी', 'Mahottari'),
(19, 2, 'सर्लाही', 'Sarlahi'),
(20, 2, 'रौतहट', 'Rautahat '),
(21, 2, 'बारा', 'Bara'),
(22, 2, 'पर्सा', 'Parsa'),
(23, 3, 'सिन्धुली', 'Sindhuli'),
(24, 3, 'रामेछाप', 'Ramechhap'),
(25, 3, 'दोलखा', 'Dolakha'),
(26, 3, 'सिन्धुपाल्चोक', 'Sindhupalchok'),
(27, 3, 'काभ्रेपलाञ्चोक', 'Kavrepalanchok'),
(28, 3, 'ललितपुर', 'Lalitpur'),
(29, 3, 'भक्तपुर', 'Bhaktapur'),
(30, 3, 'काठमाडौं', 'Kathmandu'),
(31, 3, 'नुवाकोट', 'Nuwakot'),
(32, 3, 'रसुवा', 'Rasuwa'),
(33, 3, 'धादिङ', 'Dhading'),
(34, 3, 'मकवानपुर', 'Makwanpur'),
(35, 3, 'चितवन', 'Chitawan'),
(36, 4, 'गोर्खा', 'Gorkha'),
(37, 4, 'लमजुङ', 'Lamjung'),
(38, 4, 'तनहुँ', 'Tanahu'),
(39, 4, 'नवलपुर', 'Nawalpur'),
(40, 4, 'स्याङ्जा', 'Syangja'),
(41, 4, 'पर्वत', 'Parbat'),
(42, 4, 'बाग्लुङ', 'Baglung'),
(43, 4, 'कास्की', 'Kaski'),
(44, 4, 'म्याग्दी', 'Myagdi'),
(45, 4, 'मनाङ', 'Manang'),
(46, 4, 'मुस्ताङ', 'Mustang'),
(47, 5, 'पाल्पा', 'Palpa'),
(48, 5, 'रुपन्देही', 'Rupandehi'),
(49, 5, 'कपिलवस्तु', 'Kapilbastu'),
(50, 5, 'गुल्मी', 'Gulmi'),
(51, 5, 'अर्घाखाँची', 'Arghakhanchi'),
(52, 5, 'दाङ', 'Dang'),
(53, 5, 'प्यूठान', 'Pyuthan'),
(54, 5, 'रोल्पा', 'Rolpa'),
(55, 5, 'बाँके', 'Banke'),
(56, 5, 'बर्दिया', 'Bardiya'),
(57, 6, 'सल्यान', 'Salyan'),
(58, 6, 'रुकुम', 'Rukum'),
(59, 6, 'जाजरकोट', 'Jajarkot'),
(60, 6, 'सुर्खेत', 'Surkhet'),
(61, 6, 'दैलेख', 'Dailekh'),
(62, 6, 'कालिकोट', 'Kalikot'),
(63, 6, 'जुम्ला', 'Jumla'),
(64, 6, 'डोल्पा', 'Dolpa'),
(65, 6, 'मुगु', 'Mugu'),
(66, 6, 'हुम्ला', 'Humla'),
(67, 7, 'कैलाली', 'Kailali'),
(68, 7, 'अछाम', 'Achham'),
(69, 7, 'बाजुरा', 'Bajura'),
(70, 7, 'बझाङ', 'Bajhang'),
(71, 7, 'दार्चुला', 'Darchula'),
(72, 7, 'बैतडी', 'Baitadi'),
(73, 7, 'डोटी', 'Doti'),
(74, 7, 'डडेलधुरा', 'Dadeldhura'),
(75, 7, 'कञ्चनपुर', 'Kanchanpur'),
(76, 4, 'नवलपरासी', 'Nawalparasi'),
(77, 5, 'रुकुम पूर्व', 'Rukum West');

-- --------------------------------------------------------

--
-- Table structure for table `esthaie_basobas_details`
--

CREATE TABLE `esthaie_basobas_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `basobas_id` text COLLATE utf8mb4_unicode_ci,
  `toll` text COLLATE utf8mb4_unicode_ci,
  `batto_name` text COLLATE utf8mb4_unicode_ci,
  `ghar_no` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `esthaie_basobas_details`
--

INSERT INTO `esthaie_basobas_details` (`id`, `basobas_id`, `toll`, `batto_name`, `ghar_no`, `created_at`, `updated_at`) VALUES
(1, '1', 'hjk', 'hjk', 'hjk', '2018-12-16 04:07:29', '2018-12-16 04:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `esthaie_basobas_sifaris`
--

CREATE TABLE `esthaie_basobas_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `houseowner_title` text COLLATE utf8mb4_unicode_ci,
  `houseowner_name` text COLLATE utf8mb4_unicode_ci,
  `living_starting_date` text COLLATE utf8mb4_unicode_ci,
  `basobas_type` text COLLATE utf8mb4_unicode_ci,
  `citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `district_name` text COLLATE utf8mb4_unicode_ci,
  `citizenship_issued_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `esthaie_basobas_sifaris`
--

INSERT INTO `esthaie_basobas_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `person_title`, `person_name`, `sabik_address`, `houseowner_title`, `houseowner_name`, `living_starting_date`, `basobas_type`, `citizenship_no`, `district_name`, `citizenship_issued_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'jkh', 'hk', 'श्री', 'hk', 'hjk', 'श्री', 'h', 'hjkh', NULL, 'khj', 'h', 'hj', 'hjk', 'jk', 'hjk', 'hjkh', '9', '2018-12-16 04:07:29', '2018-12-16 04:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `farakfarakenglishhijepramanit`
--

CREATE TABLE `farakfarakenglishhijepramanit` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `actual_document` text COLLATE utf8mb4_unicode_ci,
  `right_word` text COLLATE utf8mb4_unicode_ci,
  `mistake_document` text COLLATE utf8mb4_unicode_ci,
  `mistake_english_word` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farakfarakenglishhijepramanit`
--

INSERT INTO `farakfarakenglishhijepramanit` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `person_name`, `actual_document`, `right_word`, `mistake_document`, `mistake_english_word`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `person_title`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '9', '2075-06-21', 'फरक फरक अंग्रेजी हिज्जे प्रमाणित', 'ईलाम नगरपालिका', '१', 'df', '9', 'sankjay', '2088-01-09', 'sanjaya ghimire', '2088-01-09', 'ram', 'dfdfs', 'sa', 'sa', '3', '4', '2', 'गा.वि.स.', 'श्री', 'का. बा वडा अध्यक्ष', '2018-10-19 03:38:55', '2018-10-19 03:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `farakfarakjanmamitipramanit`
--

CREATE TABLE `farakfarakjanmamitipramanit` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `actual_document` text COLLATE utf8mb4_unicode_ci,
  `valid_dob` text COLLATE utf8mb4_unicode_ci,
  `mistake_document` text COLLATE utf8mb4_unicode_ci,
  `mistake_dob` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farakfarakjanmamitipramanit`
--

INSERT INTO `farakfarakjanmamitipramanit` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `person_name`, `actual_document`, `valid_dob`, `mistake_document`, `mistake_dob`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `person_title`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '9', '2075-06-21', 'फरक फरक जन्म मिति प्रमाणित', 'ईलाम नगरपालिका', '१', 'df', '2', 'sankjay', '2088-01-09', '2075-07-03', '2088-01-09', '2075-07-01', 'dfdfs', 'sa', 'sa', '3', '4', '2', 'गा.वि.स.', 'सुश्री', 'का. बा वडा अध्यक्ष', '2018-10-18 22:53:42', '2018-10-18 23:12:49'),
(2, NULL, '9', '2075-06-05', 'फरक फरक अंग्रेजी हिज्जे प्रमाणित', 'ईलाम नगरपालिका', '१', 'df', '1', 'sankjay', 'sanjaya', NULL, 'hari', NULL, 'dfdfs', 'sa', 'sa', '3', '4', '2', 'गा.वि.स.', 'श्री', 'वडा अध्यक्ष', '2018-10-19 03:35:12', '2018-10-19 03:35:12'),
(3, NULL, '9', '2075-06-05', 'फरक फरक अंग्रेजी हिज्जे प्रमाणित', 'ईलाम नगरपालिका', '१', 'df', '1', 'sankjay', '2088-01-09', NULL, '2088-01-09', NULL, 'dfdfs', 'sa', 'sa', '3', '4', '2', 'गा.वि.स.', 'श्री', 'वडा सचिब', '2018-10-19 03:37:22', '2018-10-19 03:37:22'),
(4, NULL, '9', '2075-06-05', 'फरक फरक अंग्रेजी हिज्जे प्रमाणित', 'ईलाम नगरपालिका', '१', 'df', '1', 'sankjay', '2088-01-09', NULL, '2088-01-09', NULL, 'dfdfs', 'sa', 'sa', '3', '4', '2', 'गा.वि.स.', 'श्री', 'वडा सचिब', '2018-10-19 03:38:20', '2018-10-19 03:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `farakfaraknametharpramanit`
--

CREATE TABLE `farakfaraknametharpramanit` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `actual_document` text COLLATE utf8mb4_unicode_ci,
  `valid_dob` text COLLATE utf8mb4_unicode_ci,
  `mistake_document` text COLLATE utf8mb4_unicode_ci,
  `mistake_dob` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farakfaraknametharpramanit`
--

INSERT INTO `farakfaraknametharpramanit` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `person_name`, `actual_document`, `valid_dob`, `mistake_document`, `mistake_dob`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `person_title`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '8', '2075-06-05', 'फरक फरक नाम थर प्रमाणित', 'ईलाम नगरपालिका', '१', 'ujy', 'ujy', 'nmhjv', 'sdf', 'sdf', 'sefr', 'sdf', 'binod solti', 'हाेम', 'इलाम', '343', '5', '2', 'गा.वि.स.', 'श्री', 'का. बा वडा अध्यक्ष', '2018-10-03 08:26:18', '2018-10-03 08:42:43'),
(2, '२०७५/०७६', '9', '2075-06-05', 'फरक फरक जन्म मिति प्रमाणित', 'ईलाम नगरपालिका', '१', '10', '1', 'sankjay', '2088-01-09', '2075-07-01', '2088-01-09', '2075-07-14', 'dfdfs', 'sa', 'sa', '3', '4', '2', 'गा.वि.स.', 'श्री', 'वडा अध्यक्ष', '2018-10-18 22:52:14', '2018-10-18 22:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `faraknametharnagarikta`
--

CREATE TABLE `faraknametharnagarikta` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `citi_no` text COLLATE utf8mb4_unicode_ci,
  `citi_date` text COLLATE utf8mb4_unicode_ci,
  `mistake_info` text COLLATE utf8mb4_unicode_ci,
  `document_holder` text COLLATE utf8mb4_unicode_ci,
  `document_type` text COLLATE utf8mb4_unicode_ci,
  `document_mistake` text COLLATE utf8mb4_unicode_ci,
  `document_name` text COLLATE utf8mb4_unicode_ci,
  `rel_name` text COLLATE utf8mb4_unicode_ci,
  `doc_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `mistake_type` text COLLATE utf8mb4_unicode_ci,
  `relation_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faraknametharnagarikta`
--

INSERT INTO `faraknametharnagarikta` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `person_name`, `citi_no`, `citi_date`, `mistake_info`, `document_holder`, `document_type`, `document_mistake`, `document_name`, `rel_name`, `doc_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `person_title`, `mistake_type`, `relation_type`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '6', '2075-06-05', 'प्रमाणित सिफारिस गरिएको बारे', 'ईलाम नगरपालिका', '१', '8', '4', 'sanjaya', '23233', '2075-06-01', '2077/3/4', NULL, 'name', 'जन्ममिति', '2077/3/4', 'श्रीमानको', 'name', 'abcd', 'sa', 'sa', '3', '4', '2', 'गा.वि.स.', 'श्री', 'जन्ममिति', 'आफ्नो', 'वडा अध्यक्ष', '2018-10-08 01:16:12', '2018-10-08 01:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `generalsifaris`
--

CREATE TABLE `generalsifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `office_address2` text COLLATE utf8mb4_unicode_ci,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `behora` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsifaris`
--

INSERT INTO `generalsifaris` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `office_name`, `office_address`, `office_address2`, `subject`, `letter_subject`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `officer`, `behora`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '२०७५/०७६', '4', '2075-06-05', 'df', 'sdf', NULL, 'sdf', 'खुल्ला ढाँचा', 'sdf', 'हाेम', 'इलाम', '343', '5', 'वडा अध्यक्ष', '<ul>\r\n	<li>sdf</li>\r\n	<li>dfois</li>\r\n	<li>saf</li>\r\n</ul>', 2, '2018-10-03 00:52:57', '2018-10-03 01:50:02'),
(3, NULL, NULL, '2075-06-05', 'dfg', 'dfg', NULL, 'dfg', NULL, 'fdg', 'हाेम', 'इलाम', '343', '3', 'Ward Chairperson', '<p>dfg</p>', 2, '2018-10-03 02:37:23', '2018-10-03 02:37:23'),
(4, '२०७५/०७६', '3', '2075-06-05', 'इलाम नगरपालिका', 'कार्यालय', 'इलाम', 'केही हाेइन', 'खुल्ला ढाँचा', 'संजय घिमिरे', 'हाेम', 'इलाम', '४५४५४', '३४५४', 'वडा सचिब', '<p>मात्र टेस्टकाे लागि</p>', 9, '2018-11-25 20:34:43', '2018-11-25 20:34:43'),
(5, '२०७५/०७६', 'h', 'jh', 'h', 'hjkh', 'jkh', 'jh', 'खुल्ला ढाँचा', 'hjk', 'jkh', 'jkh', 'jkh', 'jh', 'वडा अध्यक्ष', '<p>jhj</p>', 4, '2019-01-10 03:33:13', '2019-01-10 03:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `generalsifarisenglish`
--

CREATE TABLE `generalsifarisenglish` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `office_add` text COLLATE utf8mb4_unicode_ci,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `behora` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsifarisenglish`
--

INSERT INTO `generalsifarisenglish` (`id`, `ref_no`, `issued_date`, `office_name`, `office_address`, `office_add`, `subject`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `officer`, `behora`, `created_at`, `updated_at`) VALUES
(1, '6', '2075-06-05', 'ilam', 'ilaM', NULL, 'dfg', 'fg', 'हाेम', 'इलाम', '343', 'df', '2', 'Ward Chairperson', '<ul>\r\n	<li>hjfghf</li>\r\n	<li>hj</li>\r\n	<li>j</li>\r\n</ul>', '2018-10-03 02:55:52', '2018-10-03 03:34:16'),
(2, '56', '2075-06-05', 'ilam municipality', 'ilam', NULL, 'love letter', 'sanjaya ghimire', NULL, NULL, NULL, NULL, '9', 'Ward Chairperson', '<p>samjhana i love u</p>', '2018-11-16 07:59:21', '2018-11-16 07:59:21'),
(3, '9', '2075-06-21', 'ilam municipality', 'ilam', NULL, 'printer oo3', 'sanjaya ghimire', NULL, NULL, NULL, NULL, '9', 'Ward Secretary', '<p>this is printer</p>', '2018-11-21 02:45:20', '2018-11-21 02:45:43'),
(4, '8', '2075-06-05', 'ilam', 'ilam mun', NULL, 'subject', 'sanjaya', NULL, NULL, NULL, NULL, '9', 'Ward Chairperson', '<p>this is subject</p>', '2018-12-05 01:23:26', '2018-12-05 01:23:26'),
(5, 'jhjk', 'hh', 'jkh', 'hjk', 'hkjh', 'kjh', 'jkh', 'kjh', 'kh', 'jkh', 'jkh', '9', 'Ward Chairperson', '<p>jkh</p>', '2018-12-16 04:08:41', '2018-12-16 04:08:41'),
(6, 'dwed', '2075-06-21', 'j', 'jjj', 'j', 'jnjjnj', 'n n  nnh', NULL, NULL, NULL, NULL, '5', 'Ward Chairperson', '<p>jjj</p>', '2018-12-16 05:45:12', '2018-12-16 05:45:12'),
(7, 'dwed', '2075-06-21', 'j', 'jjj', 'j', 'jnjjnj', 'n n  nnh', NULL, NULL, NULL, NULL, '5', 'Ward Chairperson', '<p>jjj</p>', '2018-12-16 05:46:14', '2018-12-16 05:46:14'),
(8, 'jhjkh', 'khjjk', 'hkh', 'kh', 'jkh', 'jkhjh', 'hjk', 'jkh', 'jhjk', 'hjk', 'hjk', '5', 'Ward Chairperson', '<p>jhjk</p>', '2018-12-16 06:51:51', '2018-12-16 06:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `gharjagganamsarikitani`
--

CREATE TABLE `gharjagganamsarikitani` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `g_name` text COLLATE utf8mb4_unicode_ci,
  `f_name` text COLLATE utf8mb4_unicode_ci,
  `m_name` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `relation` text COLLATE utf8mb4_unicode_ci,
  `death_person_name` text COLLATE utf8mb4_unicode_ci,
  `death_date` text COLLATE utf8mb4_unicode_ci,
  `land_local_state` text COLLATE utf8mb4_unicode_ci,
  `land_ward` text COLLATE utf8mb4_unicode_ci,
  `land_sabik_address` text COLLATE utf8mb4_unicode_ci,
  `land_sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `land_kitta_no` text COLLATE utf8mb4_unicode_ci,
  `jagga_area` text COLLATE utf8mb4_unicode_ci,
  `darta_type` text COLLATE utf8mb4_unicode_ci,
  `app_name` text COLLATE utf8mb4_unicode_ci,
  `app_relation` text COLLATE utf8mb4_unicode_ci,
  `app_date` text COLLATE utf8mb4_unicode_ci,
  `hakdarko_name` text COLLATE utf8mb4_unicode_ci,
  `mritak_relation` text COLLATE utf8mb4_unicode_ci,
  `father_husband_name` text COLLATE utf8mb4_unicode_ci,
  `ciitizenship_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `namsarihakdarko_name` text COLLATE utf8mb4_unicode_ci,
  `namsarimritak_relation` text COLLATE utf8mb4_unicode_ci,
  `namsarifather_husband_name` text COLLATE utf8mb4_unicode_ci,
  `namsariciitizenship_no` text COLLATE utf8mb4_unicode_ci,
  `namsarikitta_no` text COLLATE utf8mb4_unicode_ci,
  `sarjaminlocal_state` text COLLATE utf8mb4_unicode_ci,
  `sarjaminward` text COLLATE utf8mb4_unicode_ci,
  `sarjaminbarsa` text COLLATE utf8mb4_unicode_ci,
  `sarjaminname` text COLLATE utf8mb4_unicode_ci,
  `sarjaminno` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `g_title` text COLLATE utf8mb4_unicode_ci,
  `c_title` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `nata_title` text COLLATE utf8mb4_unicode_ci,
  `land_sabik_type` text COLLATE utf8mb4_unicode_ci,
  `prop_type` text COLLATE utf8mb4_unicode_ci,
  `hak_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `behora` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gharjagganamsarikitani`
--

INSERT INTO `gharjagganamsarikitani` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `office_chairman`, `office_name`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `g_name`, `f_name`, `m_name`, `person_name`, `relation`, `death_person_name`, `death_date`, `land_local_state`, `land_ward`, `land_sabik_address`, `land_sabik_ward`, `land_kitta_no`, `jagga_area`, `darta_type`, `app_name`, `app_relation`, `app_date`, `hakdarko_name`, `mritak_relation`, `father_husband_name`, `ciitizenship_no`, `kitta_no`, `namsarihakdarko_name`, `namsarimritak_relation`, `namsarifather_husband_name`, `namsariciitizenship_no`, `namsarikitta_no`, `sarjaminlocal_state`, `sarjaminward`, `sarjaminbarsa`, `sarjaminname`, `sarjaminno`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `sabik_type`, `g_title`, `c_title`, `person_title`, `nata_title`, `land_sabik_type`, `prop_type`, `hak_type`, `officer`, `user_id`, `behora`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', NULL, '2075-06-05', 'घर जग्गा नामसारी सिफारिस', 'sanjaya', 'sdfjsd', 'ईलाम नगरपालिका', '१', '8', '4', 'sdf', 'sdf', 'sdf', 'df', 'm', 'sita', '2075-06-11', 'ईलाम नगरपालिका', '१', 'sdf', '7', '34', 'k', 'संयुक्त', 'jk', 'lkjlk', '2075-06-10', 'kj', 'jk', 'jk', '3453', '34', 'yu,k', 'oi,k', 'hg,k', '76,45hg', '9,nj', 'ईलाम नगरपालिका', '१', '9', 'jk', 'nj', 'sanjaya ghimire', 'हाेम', 'ilam', '3', '5', 'गा.वि.स.', 'नाती', 'छोरा', 'श्री', 'श्री', 'गा.वि.स.', 'जग्गा', 'हकदारहरु', 'वडा अध्यक्ष', '2', '<p>jkk</p>', '2018-09-26 18:34:24', '2018-09-26 20:17:38'),
(2, '२०७५/०७६', '4', '2075-06-21', 'घर जग्गा नामसारी सिफारिस', 'aaaaa', 'aaaa', 'ईलाम नगरपालिका', '१', '5', '4', 'dfgsfd', 'fdg', 'fdgs', 'dsfvdsf', 'gfdsgfsd', 'sdfdsg', '2076-01-11', 'ईलाम नगरपालिका', '१', 'bfdgf', '5', '4654', 'fdgfsdgfd', 'एकल', 'fdgd', 'gfdgfd', '2076-01-09', 'dfgdfg', 'fdgdf', 'fdgd', 'gdf54654', 'gfdgfds', 'gfdgfd', 'gdfgfd', 'gfdg', '54', 'gdfdf', 'ईलाम नगरपालिका', '१', '5', 'dfbfdvbc', 'vcxcxv', 'xcvcxvcx', NULL, NULL, NULL, NULL, 'गा.वि.स.', 'नाती', 'छोरा', 'श्री', 'श्री', 'गा.वि.स.', 'जग्गा', 'हकदार', 'वडा अध्यक्ष', '9', NULL, '2019-05-02 00:09:59', '2019-05-02 00:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `gharjagganamsarisifaris`
--

CREATE TABLE `gharjagganamsarisifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `relation` text COLLATE utf8mb4_unicode_ci,
  `death_person_name` text COLLATE utf8mb4_unicode_ci,
  `death_date` text COLLATE utf8mb4_unicode_ci,
  `applicant_person_title` text COLLATE utf8mb4_unicode_ci,
  `applicant_person_name` text COLLATE utf8mb4_unicode_ci,
  `property_type` text COLLATE utf8mb4_unicode_ci,
  `app_name` text COLLATE utf8mb4_unicode_ci,
  `app_relation` text COLLATE utf8mb4_unicode_ci,
  `app_date` text COLLATE utf8mb4_unicode_ci,
  `hakdarko_name` text COLLATE utf8mb4_unicode_ci,
  `mritak_relation` text COLLATE utf8mb4_unicode_ci,
  `father_husband_name` text COLLATE utf8mb4_unicode_ci,
  `ciitizenship_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `jagga_bibaran_kitta_no` text COLLATE utf8mb4_unicode_ci,
  `remakrs` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gharkayamsifaris`
--

CREATE TABLE `gharkayamsifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_vdc` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward_no` text COLLATE utf8mb4_unicode_ci,
  `nagarpalika_name` text COLLATE utf8mb4_unicode_ci,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `ghar_nirman_year` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `ghar_nirman_option` text COLLATE utf8mb4_unicode_ci,
  `sabik` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gharkayamsifaris`
--

INSERT INTO `gharkayamsifaris` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `office_chairman`, `office_name`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `person_name`, `sabik_vdc`, `sabik_ward_no`, `nagarpalika_name`, `ward_no`, `kitta_no`, `area`, `ghar_nirman_year`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `sabik_type`, `person_title`, `ghar_nirman_option`, `sabik`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '२०७५/०७६', '4', '2075-06-05', 'घर कायम सिफारिस', 'भूमि सुधार तथा मालपोत कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '१', 'u7', '5', 'd', '34dsf', '67,2', 'ईलाम नगरपालिका', 'ईलाम नगरपालिका,१,१', '4,2', '345,4', '4578,545', 'jhg', 'हाेम', 'df', '३४४३', '5', 'गा.वि.स.', 'श्री', 'पूर्ण', 'गा.वि.स.', 'वडा अध्यक्ष', '2', '2018-10-18 01:02:16', '2018-10-18 01:02:16'),
(3, '२०७५/०७६', '3', '2075-06-05', 'घर कायम सिफारिस', 'भूमि सुधार तथा मालपोत कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '१', '6', '4', 'sanjaya', '34dsf', '67,8', 'ईलाम नगरपालिका,ईलाम नगरपालिका', '१,१', '234,234', '234,90', '4578,545', 'sanjaya ghimire', 'हाेम', 'इलाम', '343', '5', 'गा.वि.स.', 'श्री', 'आशिंक', 'नगरपालिका', 'वडा अध्यक्ष', '2', '2018-10-18 01:03:43', '2018-10-18 01:03:43'),
(4, '२०७५/०७६', '3', '2075-06-05', 'घर कायम सिफारिस', 'भूमि सुधार तथा मालपोत कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '१', '10', '11', 'samka', 'ilam,jhapa', '5,6', 'ईलाम नगरपालिका,ईलाम नगरपालिका', '१,१', '23,24', '1.0,2.9', '2075,2066', 'samjhana rai', 'jk', 'sdf', '343', '5', 'गा.वि.स.', 'श्री', 'आशिंक', 'गा.वि.स.', 'वडा अध्यक्ष', '2', '2018-10-18 01:06:35', '2018-10-18 01:06:35'),
(6, '२०७५/०७६', '3', '2075-06-21', 'घर कायम सिफारिस', 'भूमि सुधार तथा मालपोत कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '१', '10', '11', 'samka', 'ilam,jhapa,kathmandu', '5,6,3', 'ईलाम नगरपालिका,ईलाम नगरपालिका,ईलाम नगरपालिका', '१,१,5', '23,24,f', '1.0,2.9,45', '2075,2066,34', 'samjhana rai', 'jk', 'sdf', '343', '5', 'गा.वि.स.', 'श्री', 'आशिंक', 'गा.वि.स.', 'वडा अध्यक्ष', '2', '2018-10-18 02:09:17', '2018-10-18 02:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `ghar_bato_pramanit`
--

CREATE TABLE `ghar_bato_pramanit` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghar_bato_pramanit_detail`
--

CREATE TABLE `ghar_bato_pramanit_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `ghar_bato_id` int(11) DEFAULT NULL,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `seat_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `batto_name` text COLLATE utf8mb4_unicode_ci,
  `ghar_abastha` text COLLATE utf8mb4_unicode_ci,
  `bato_type` text COLLATE utf8mb4_unicode_ci,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghar_janaune_sifaris`
--

CREATE TABLE `ghar_janaune_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `district` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `malpot_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `local_states` text COLLATE utf8mb4_unicode_ci,
  `wards` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `users_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghar_patal_sifaris`
--

CREATE TABLE `ghar_patal_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internal_migration_details`
--

CREATE TABLE `internal_migration_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration_id` text COLLATE utf8mb4_unicode_ci,
  `full_name` text COLLATE utf8mb4_unicode_ci,
  `relation` text COLLATE utf8mb4_unicode_ci,
  `citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `ghar_no` text COLLATE utf8mb4_unicode_ci,
  `batto_name` text COLLATE utf8mb4_unicode_ci,
  `age` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internal_migration_details`
--

INSERT INTO `internal_migration_details` (`id`, `migration_id`, `full_name`, `relation`, `citizenship_no`, `ghar_no`, `batto_name`, `age`, `created_at`, `updated_at`) VALUES
(1, '1', 'hjk', 'hjk', 'hj', 'jh', 'jkh', 'jkh', '2018-12-16 04:01:29', '2018-12-16 04:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `internal_migration_sifaris`
--

CREATE TABLE `internal_migration_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `house_owner` text COLLATE utf8mb4_unicode_ci,
  `migration_date` text COLLATE utf8mb4_unicode_ci,
  `district` text COLLATE utf8mb4_unicode_ci,
  `palika_name` text COLLATE utf8mb4_unicode_ci,
  `palika_options` text COLLATE utf8mb4_unicode_ci,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `migration_place` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internal_migration_sifaris`
--

INSERT INTO `internal_migration_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `person_title`, `person_name`, `office_address`, `house_owner`, `migration_date`, `district`, `palika_name`, `palika_options`, `ward_no`, `migration_place`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'jkh', 'jhjkh', 'श्री', 'jhjk', 'hjk', 'hkhj', 'khj', 'h', NULL, 'महानगरपालिका', 'hkj', 'hhjk', 'jkh', 'jk', 'hjk', 'hjk', '9', '2018-12-16 04:01:29', '2018-12-16 04:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `jagga_dhani_pramanpatra_pratilipi_sifaris`
--

CREATE TABLE `jagga_dhani_pramanpatra_pratilipi_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `land_owner_title` text COLLATE utf8mb4_unicode_ci,
  `land_owner_name` text COLLATE utf8mb4_unicode_ci,
  `palika_name` text COLLATE utf8mb4_unicode_ci,
  `palika_type` text COLLATE utf8mb4_unicode_ci,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `person_sabik_address` text COLLATE utf8mb4_unicode_ci,
  `applicant_title` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `citizenship_issued_date` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `grand_father_name` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jagga_dhani_purjama_gharkayem_sifaris`
--

CREATE TABLE `jagga_dhani_purjama_gharkayem_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `janmamiti_pramanits`
--

CREATE TABLE `janmamiti_pramanits` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `mother_name` text COLLATE utf8mb4_unicode_ci,
  `children_gender` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `children_title` text COLLATE utf8mb4_unicode_ci,
  `children_name` text COLLATE utf8mb4_unicode_ci,
  `birth_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jet_machines`
--

CREATE TABLE `jet_machines` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `state` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `road_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karbahis`
--

CREATE TABLE `karbahis` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_no` int(11) NOT NULL,
  `karbahi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karobarpanno`
--

CREATE TABLE `karobarpanno` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `pan_office_name` text COLLATE utf8mb4_unicode_ci,
  `pan_office_address` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `pasal_address` text COLLATE utf8mb4_unicode_ci,
  `pan_no` text COLLATE utf8mb4_unicode_ci,
  `pasal_name` text COLLATE utf8mb4_unicode_ci,
  `pasal_new` text COLLATE utf8mb4_unicode_ci,
  `bodartha` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `property_type` text COLLATE utf8mb4_unicode_ci,
  `business_start` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karobarpanno`
--

INSERT INTO `karobarpanno` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `pan_office_name`, `pan_office_address`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `person_name`, `pasal_address`, `pan_no`, `pasal_name`, `pasal_new`, `bodartha`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `person_title`, `property_type`, `business_start`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '8', '2075-06-05', 'सिफारिस गरिएको बारे', 'करदाता सेवा कार्यालय', 'jhk', 'ईलाम नगरपालिका', '१', 'hjk', 'jhk', 'hjk', 'kh', 'hjk', 'hjk', 'hjk', '<p>jk</p>', 'jk', 'हाेम', 'इलाम', '343', '5', '9', 'नगरपालिका', 'श्री', 'आफ्नै', 'गरी आएको', 'का. बा वडा अध्यक्ष', '2018-09-27 18:01:50', '2018-09-28 15:18:38'),
(2, '२०७५/०७६', 'jkhj', 'j', 'सिफारिस गरिएको बारे', 'hh', 'kh', 'jkh', 'h', 'jk', 'jhh', 'jhj', 'hkj', 'jkh', 'jh', 'kh', '<p>hjk</p>', 'hjk', 'hk', 'hjk', 'hjk', 'hkjh', '9', 'गा.वि.स.', 'श्री', 'आफ्नै', 'गरी आएको', 'वडा अध्यक्ष', '2018-12-16 02:39:47', '2018-12-16 02:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `khulaipathayekosifaris`
--

CREATE TABLE `khulaipathayekosifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `letter_date` text COLLATE utf8mb4_unicode_ci,
  `letter_chalani_no` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitta_kat_jagga_bibaran`
--

CREATE TABLE `kitta_kat_jagga_bibaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `kitta_kat_id` int(11) DEFAULT NULL,
  `seat_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitta_kat_sifaris`
--

CREATE TABLE `kitta_kat_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `jagga_location` text COLLATE utf8mb4_unicode_ci,
  `jagga_area` text COLLATE utf8mb4_unicode_ci,
  `ghaderi_area` text COLLATE utf8mb4_unicode_ci,
  `ghar_total_area` text COLLATE utf8mb4_unicode_ci,
  `last_floor_area` text COLLATE utf8mb4_unicode_ci,
  `paune_far` text COLLATE utf8mb4_unicode_ci,
  `sifaris_reason` text COLLATE utf8mb4_unicode_ci,
  `technician_name` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kotha_khali_sifaris`
--

CREATE TABLE `kotha_khali_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `applicant_title` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `local_state`
--

CREATE TABLE `local_state` (
  `local_state_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `local_state_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `local_state_name_english` varchar(255) NOT NULL,
  `local_state_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_state`
--

INSERT INTO `local_state` (`local_state_id`, `province_id`, `district_id`, `local_state_name`, `local_state_name_english`, `local_state_type_id`) VALUES
(1, 1, 1, 'फुङलिङ नगरपालिका', '', 3),
(2, 1, 1, 'आठराई त्रिवेणी गाउँपालिका', '', 4),
(3, 1, 1, 'सिदिङवा गाउँपालिका', '', 4),
(4, 1, 1, 'फक्ताङलुङ गाउँपालिका', '', 4),
(5, 1, 1, 'मिक्वाखोला गाउँपालिका', '', 4),
(6, 1, 1, 'मेरिङदेन गाउँपालिका', '', 4),
(7, 1, 1, 'मौवाखोला गाउँपालिका', '', 4),
(8, 1, 1, 'याङवरक गाउँपालिका', '', 4),
(9, 1, 1, 'सिरीजङ्गा गाउँपालिका', '', 4),
(10, 1, 2, 'फिदिम नगरपालिका', '', 3),
(11, 1, 2, 'फालेलुङ गाउँपालिका', '', 4),
(12, 1, 2, 'फाल्गुनन्द गाउँपालिका', '', 4),
(13, 1, 2, 'हिलिहाङ गाउँपालिका', '', 4),
(14, 1, 2, 'कुम्मायक गाउँपालिका', '', 4),
(15, 1, 2, 'मिक्लाजुङ गाउँपालिका', '', 4),
(16, 1, 2, 'तुक्वेवा गाउँपालिका', '', 4),
(17, 1, 2, 'याङवरक गाउँपालिका', '', 4),
(18, 1, 3, 'ईलाम नगरपालिका', '', 3),
(19, 1, 3, 'देउमाई नगरपालिका', '', 3),
(20, 1, 3, 'माई नगरपालिका', '', 3),
(21, 1, 3, 'सूर्योदय नगरपालिका', '', 3),
(22, 1, 3, 'फाकफोकथुम गाउँपालिका', '', 4),
(23, 1, 3, 'चुलाचुली गाउँपालिका', '', 4),
(24, 1, 3, 'माईजोगमाई गाउँपालिका', '', 4),
(25, 1, 3, 'माङसेबुङ गाउँपालिका', '', 4),
(26, 1, 3, 'रोङ गाउँपालिका', '', 4),
(27, 1, 3, 'सन्दकपुर गाउँपालिका', '', 4),
(28, 1, 4, 'मेचीनगर नगरपालिका', '', 3),
(29, 1, 4, 'दमक नगरपालिका', '', 3),
(30, 1, 4, 'कन्काई नगरपालिका', '', 3),
(31, 1, 4, 'भद्रपुर नगरपालिका', '', 3),
(32, 1, 4, 'अजुर्नधारा नगरपालिका', '', 3),
(33, 1, 4, 'शिवसताक्षी नगरपालिका', '', 3),
(34, 1, 4, 'गौरादह नगरपालिका', '', 3),
(35, 1, 4, 'विर्तामोड नगरपालिका', '', 3),
(36, 1, 4, 'कमल गाउँपालिका', '', 4),
(37, 1, 4, 'गौरिगंज गाउँपालिका', '', 4),
(38, 1, 4, 'बाह्रदशी गाउँपालिका', '', 4),
(39, 1, 4, 'झापा गाउँपालिका', '', 4),
(40, 1, 4, 'बुद्धशान्ति गाउँपालिका', '', 4),
(41, 1, 4, 'हल्दीबारी गाउँपालिका', '', 4),
(42, 1, 4, 'कचनकवल गाउँपालिका', '', 4),
(43, 1, 5, 'विराटनगर महानगरपालिका', '', 1),
(44, 1, 5, 'बेलबारी नगरपालिका', '', 3),
(45, 1, 5, 'लेटाङ नगरपालिका', '', 3),
(46, 1, 5, 'पथरी शनिश्चरे नगरपालिका', '', 3),
(47, 1, 5, 'रंगेली नगरपालिका', '', 3),
(48, 1, 5, 'रतुवामाई नगरपालिका', '', 3),
(49, 1, 5, 'सुनवर्षी नगरपालिका', '', 3),
(50, 1, 5, 'उर्लाबारी नगरपालिका', '', 3),
(51, 1, 5, 'सुन्दरहरैँचा नगरपालिका', '', 3),
(52, 1, 5, 'बुढीगंगा गाउँपालिका', '', 4),
(53, 1, 5, 'धनपालथान गाउँपालिका', '', 4),
(54, 1, 5, 'ग्रामथान गाउँपालिका', '', 4),
(55, 1, 5, 'जहदा गाउँपालिका', '', 4),
(56, 1, 5, 'कानेपोखरी गाउँपालिका', '', 4),
(57, 1, 5, 'कटहरी गाउँपालिका', '', 4),
(58, 1, 5, 'केराबारी गाउँपालिका', '', 4),
(59, 1, 5, 'मिक्लाजुङ गाउँपालिका', '', 4),
(60, 1, 6, 'ईटहरी उपमहानगरपालिका', '', 2),
(61, 1, 6, 'धरान उपमहानगरपालिका', '', 2),
(62, 1, 6, 'इनरुवा नगरपालिका', '', 3),
(63, 1, 6, 'दुहवी नगरपालिका', '', 3),
(64, 1, 6, 'रामधुनी नगरपालिका', '', 3),
(65, 1, 6, 'बराह नगरपालिका', '', 3),
(66, 1, 6, 'देवानगञ्ज गाउँपालिका', '', 4),
(67, 1, 6, 'कोशी गाउँपालिका', '', 4),
(68, 1, 6, 'गढी गाउँपालिका', '', 4),
(69, 1, 6, 'बर्जु गाउँपालिका', '', 4),
(70, 1, 6, 'भोक्राहा गाउँपालिका', '', 4),
(71, 1, 6, 'हरिनगरा गाउँपालिका', '', 4),
(72, 1, 7, 'पाख्रिबास नगरपालिका', '', 3),
(73, 1, 7, 'धनकुटा नगरपालिका', '', 3),
(74, 1, 7, 'महालक्ष्मी नगरपालिका', '', 3),
(75, 1, 7, 'साँगुरीगढी गाउँपालिका', '', 4),
(76, 1, 7, 'खाल्सा छिन्ताङ सहीदभूमि गाउँपालिका', '', 4),
(77, 1, 7, 'छथर जोरपाटी गाउँपालिका', '', 4),
(78, 1, 7, 'चौबिसे गाउँपालिका', '', 4),
(79, 1, 8, 'म्याङलुङ नगरपालिका', '', 3),
(80, 1, 8, 'लालीगुराँस नगरपालिका', '', 3),
(81, 1, 8, 'आठराई गाउँपालिका', '', 4),
(82, 1, 8, 'छथर गाउँपालिका', '', 4),
(83, 1, 8, 'फेदाप गाउँपालिका', '', 4),
(84, 1, 8, 'मेन्छयायेम गाउँपालिका', '', 4),
(85, 1, 9, 'चैनपुर नगरपालिका', '', 3),
(86, 1, 9, 'धर्मदेवी नगरपालिका', '', 3),
(87, 1, 9, 'खाँदबारी नगरपालिका', '', 3),
(88, 1, 9, 'मादी नगरपालिका', '', 3),
(89, 1, 9, 'पाँचखपन नगरपालिका', '', 3),
(90, 1, 9, 'भोटखोला गाउँपालिका', '', 4),
(91, 1, 9, 'चिचिला गाउँपालिका', '', 4),
(92, 1, 9, 'मकालु गाउँपालिका', '', 4),
(93, 1, 9, 'सभापोखरी गाउँपालिका', '', 4),
(94, 1, 9, 'सिलिचोङ गाउँपालिका', '', 4),
(95, 1, 10, 'भोजपुर नगरपालिका', '', 3),
(96, 1, 10, 'षडानन्द नगरपालिका', '', 3),
(97, 1, 10, 'ट्याम्केमैयुम गाउँपालिका', '', 4),
(98, 1, 10, 'रामप्रसादराई गाउँपालिका', '', 4),
(99, 1, 10, 'अरुण गाउँपालिका', '', 4),
(100, 1, 10, 'पौवादुङमा गाउँपालिका', '', 4),
(101, 1, 10, 'साल्पासिलिछो गाउँपालिका', '', 4),
(102, 1, 10, 'आमचोक गाउँपालिका', '', 4),
(103, 1, 10, 'हतुवागढी गाउँपालिका', '', 4),
(104, 1, 11, 'सोलुदुधकुण्ड नगरपालिका', '', 3),
(105, 1, 11, 'दुधकोशी गाउँपालिका', '', 4),
(106, 1, 11, 'खुम्बु पासाङल्हामु गाउँपालिका', '', 4),
(107, 1, 11, 'दुधकौशिका गाउँपालिका', '', 4),
(108, 1, 11, 'नेचासल्यान गाउँपालिका', '', 4),
(109, 1, 11, 'माहाकुलुङ गाउँपालिका', '', 4),
(110, 1, 11, 'लिखु पिके गाउँपालिका', '', 4),
(111, 1, 11, 'सोताङ गाउँपालिका', '', 4),
(112, 1, 12, 'सिद्धिचरण नगरपालिका', '', 3),
(113, 1, 12, 'खिजिदेम्वा गाउँपालिका', '', 4),
(114, 1, 12, 'चम्पादेवी गाउँपालिका', '', 4),
(115, 1, 12, 'चिशंखुगढी गाउँपालिका', '', 4),
(116, 1, 12, 'मानेभञ्ज्याङ गाउँपालिका', '', 4),
(117, 1, 12, 'मोलुङ गाउँपालिका', '', 4),
(118, 1, 12, 'लिखु गाउँपालिका', '', 4),
(119, 1, 12, 'सुनकोशी गाउँपालिका', '', 4),
(120, 1, 13, 'हलेसीतुवाचुङ नगरपालिका', '', 3),
(121, 1, 13, 'रुपाकोट मझुवागढी नगरपालिका', '', 3),
(122, 1, 13, 'ऐसेलुखर्क गाउँपालिका', '', 4),
(123, 1, 13, 'लामिडाँडा गाउँपालिका', '', 4),
(124, 1, 13, 'जन्तेढुङगा गाउँपालिका', '', 4),
(125, 1, 13, 'खोटेहाङ गाउँपालिका', '', 4),
(126, 1, 13, 'केपिलासगढी गाउँपालिका', '', 4),
(127, 1, 13, 'दिप्रुङ गाउँपालिका', '', 4),
(128, 1, 13, 'साकेला गाउँपालिका', '', 4),
(129, 1, 13, 'बराहपोखरी गाउँपालिका', '', 4),
(130, 1, 14, 'कटारी नगरपालिका', '', 3),
(131, 1, 14, 'चौदण्डीगढी नगरपालिका', '', 3),
(132, 1, 14, 'त्रियुगा नगरपालिका', '', 3),
(133, 1, 14, 'वेलका नगरपालिका', '', 3),
(134, 1, 14, 'उदयपुरगढी गाउँपालिका', '', 4),
(135, 1, 14, 'ताप्ली गाउँपालिका', '', 4),
(136, 1, 14, 'रौतामाई गाउँपालिका', '', 4),
(137, 1, 14, 'सुनकोशी गाउँपालिका', '', 4),
(138, 2, 15, 'राजविराज नगरपालिका', '', 3),
(139, 2, 15, 'कञ्चनरुप नगरपालिका', '', 3),
(140, 2, 15, 'डाक्नेश्वरी नगरपालिका', '', 3),
(141, 2, 15, 'बोदेबरसाईन नगरपालिका', '', 3),
(142, 2, 15, 'खडक नगरपालिका', '', 3),
(143, 2, 15, 'शम्भुनाथ नगरपालिका', '', 3),
(144, 2, 15, 'सुरुङगा नगरपालिका', '', 3),
(145, 2, 15, 'हनुमाननगर कंकालिनी नगरपालिका', '', 3),
(146, 2, 15, 'सप्तकोशी नगरपालिका', '', 3),
(147, 2, 15, 'अग्नीसाइनर कृष्णसवरन गाँउपालिका', '', 4),
(148, 2, 15, 'छिन्नमस्ता गाँउपालिका', '', 4),
(149, 2, 15, 'महादेवा गाँउपालिका', '', 4),
(150, 2, 15, 'तिरुहुत गाँउपालिका', '', 4),
(151, 2, 15, 'तिलाठी कोईलाडी गाँउपालिका', '', 4),
(152, 2, 15, 'रुपनी गाँउपालिका', '', 4),
(153, 2, 15, 'बेल्ही चपेना गाँउपालिका', '', 4),
(154, 2, 15, 'बिष्णुपुर गाँउपालिका', '', 4),
(155, 2, 15, 'बलान बिहुल  गाँउपालिका', '', 4),
(156, 2, 16, 'लहान नगरपालिका', '', 3),
(157, 2, 16, 'धनगढीमाई नगरपालिका', '', 3),
(158, 2, 16, 'सिरहा नगरपालिका', '', 3),
(159, 2, 16, 'गोलबजार नगरपालिका', '', 3),
(160, 2, 16, 'मिर्चैैयाँ नगरपालिका', '', 3),
(161, 2, 16, 'कल्याणपुर नगरपालिका', '', 3),
(162, 2, 16, 'कर्जन्हा नगरपालिका', '', 3),
(163, 2, 16, 'सुखीपुर नगरपालिका', '', 3),
(164, 2, 16, 'भगवानपुर गाँउपालिका', '', 4),
(165, 2, 16, 'औरही गाँउपालिका', '', 4),
(166, 2, 16, 'बिष्णुपुर गाँउपालिका', '', 4),
(167, 2, 16, 'बरियारपट्टी गाँउपालिका', '', 4),
(168, 2, 16, 'लक्ष्मीपुर पतारी गाँउपालिका', '', 4),
(169, 2, 16, 'नरहा गाँउपालिका', '', 4),
(170, 2, 16, 'सखुवानान्कारकट्टी गाँउपालिका', '', 4),
(171, 2, 16, 'अर्नमा गाँउपालिका', '', 4),
(172, 2, 16, 'नवराजपुर गाँउपालिका', '', 4),
(173, 2, 17, 'जनकपुर उमहानगरपालिका', '', 2),
(174, 2, 17, 'क्षिरेश्वरनाथ नगरपालिका', '', 3),
(175, 2, 17, 'गणेशमान चारनाथ नगरपालिका', '', 3),
(176, 2, 17, 'धनुषाधाम नगरपालिका', '', 3),
(177, 2, 17, 'कमला नगरपालिका', '', 3),
(178, 2, 17, 'नगराइन नगरपालिका', '', 3),
(179, 2, 17, 'विदेह नगरपालिका', '', 3),
(180, 2, 17, 'मिथिला नगरपालिका', '', 3),
(181, 2, 17, 'मिथिला विहारी नगरपालिका', '', 3),
(182, 2, 17, 'शहिदनगनर नगरपालिका', '', 3),
(183, 2, 17, 'सबैला नगरपालिका', '', 3),
(184, 2, 17, 'हंसपुर नगरपालिका', '', 3),
(185, 2, 17, 'औरही गाउँपालिका', '', 4),
(186, 2, 17, 'जनकनन्दिनी गाउँपालिका', '', 4),
(187, 2, 17, 'बटेश्वर गाउँपालिका', '', 4),
(188, 2, 17, 'मुखियापट्टि मुसहरमिया गाउँपालिका', '', 4),
(189, 2, 17, 'लक्ष्मीनिया गाउँपालिका', '', 4),
(190, 2, 17, 'धनैजी गाउँपालिका', '', 4),
(191, 2, 18, 'जलेश्वर नगरपालिका', '', 3),
(192, 2, 18, 'बर्दिबास नगरपालिका', '', 3),
(193, 2, 18, 'गौशाला नगरपालिका', '', 3),
(194, 2, 18, 'बलवा नगरपालिका', '', 3),
(195, 2, 18, 'लोहरपट्टी नगरपालिका', '', 3),
(196, 2, 18, 'मनरा सिसवा नगरपालिका', '', 3),
(197, 2, 18, 'रामगोपालपुर नगरपालिका', '', 3),
(198, 2, 18, 'औरही नगरपालिका', '', 3),
(199, 2, 18, 'भँगहा नगरपालिका', '', 3),
(200, 2, 18, 'मटिहानी नगरपालिका', '', 3),
(201, 2, 18, 'सोनमा गाँउपालिका', '', 4),
(202, 2, 18, 'सम्सी गाँउपालिका', '', 4),
(203, 2, 18, 'महोत्तरी गाँउपालिका', '', 4),
(204, 2, 18, 'पिपरा गाँउपालिका', '', 4),
(205, 2, 18, 'एकडारा गाँउपालिका', '', 4),
(206, 2, 19, 'ईश्वरपुर नगरपालिका', '', 3),
(207, 2, 19, 'मलंगवा नगरपालिका', '', 3),
(208, 2, 19, 'लालवन्दी नगरपालिका', '', 3),
(209, 2, 19, 'हरिपुर नगरपालिका', '', 3),
(210, 2, 19, 'हरिपुर्वा नगरपालिका', '', 3),
(211, 2, 19, 'हरिवन नगरपालिका', '', 3),
(212, 2, 19, 'बरहथवा नगरपालिका', '', 3),
(213, 2, 19, 'बलरा नगरपालिका', '', 3),
(214, 2, 19, 'गोडैटा नगरपालिका', '', 3),
(215, 2, 19, 'वागमती नगरपालिका', '', 3),
(216, 2, 19, 'कविलासी नगरपालिका', '', 3),
(217, 2, 19, 'चक्रघट्टा गाँउपालिका', '', 4),
(218, 2, 19, 'चन्द्रनगर गाँउपालिका', '', 4),
(219, 2, 19, 'धनकौल गाँउपालिका', '', 4),
(220, 2, 19, 'बह्मापुरी गाँउपालिका', '', 4),
(221, 2, 19, 'रामनगर गाँउपालिका', '', 4),
(222, 2, 19, 'बिष्णु गाँउपालिका', '', 4),
(223, 2, 19, 'बसवरिया गाउँपालिका', '', 4),
(224, 2, 19, 'काडेना गाउँपालिका', '', 4),
(225, 2, 19, 'पर्सा गाउँपालिका', '', 4),
(226, 2, 20, 'चन्द्रपुर नगरपालिका', '', 3),
(227, 2, 20, 'गरुडा नगरपालिका', '', 3),
(228, 2, 20, 'गौर नगरपालिका', '', 3),
(229, 2, 20, 'बौधीमाई नगरपालिका', '', 3),
(230, 2, 20, 'बृन्दावन नगरपालिका', '', 3),
(231, 2, 20, 'देवाही गोनाही नगरपालिका', '', 3),
(232, 2, 20, 'गढीमाई नगरपालिका', '', 3),
(233, 2, 20, 'गजुरा नगरपालिका', '', 3),
(234, 2, 20, 'कटहरिया नगरपालिका', '', 3),
(235, 2, 20, 'माधव नारायण नगरपालिका', '', 3),
(236, 2, 20, 'मौलापुर नगरपालिका', '', 3),
(237, 2, 20, 'फतुवाविजयपुर नगरपालिका', '', 3),
(238, 2, 20, 'ईशनाथ नगरपालिका', '', 3),
(239, 2, 20, 'परोहा नगरपालिका', '', 3),
(240, 2, 20, 'राजपुर नगरपालिका', '', 3),
(241, 2, 20, 'राजदेवी नगरपालिका', '', 3),
(242, 2, 20, 'यमुनामाई गाँउपालिका', '', 4),
(243, 2, 20, 'दुर्गा भगवती गाँउपालिका', '', 4),
(244, 2, 21, 'कलैया उमहानगरपालिका', '', 2),
(245, 2, 21, 'जीतपुरसिमरा उमहानगरपालिका', '', 2),
(246, 2, 21, 'कोल्हवी नगरपालिका', '', 3),
(247, 2, 21, 'निजगढ नगरपालिका', '', 3),
(248, 2, 21, 'महागढीमाई नगरपालिका', '', 3),
(249, 2, 21, 'सिम्रौनगढ नगरपालिका', '', 3),
(250, 2, 21, 'पचरौता नगरपालिका', '', 3),
(251, 2, 21, 'परवानीपुर गाँउपालिका', '', 4),
(252, 2, 21, 'प्रसौनी गाँउपालिका', '', 4),
(253, 2, 21, 'फेटा गाँउपालिका', '', 4),
(254, 2, 21, 'आर्दश कोटवाल गाँउपालिका', '', 4),
(255, 2, 21, 'करैयामाई गाँउपालिका', '', 4),
(256, 2, 21, 'देवताल गाँउपालिका', '', 4),
(257, 2, 21, 'बारागढी गाँउपालिका', '', 4),
(258, 2, 21, 'सुवर्ण गाँउपालिका', '', 4),
(259, 2, 21, 'विश्रामपुर गाँउपालिका', '', 4),
(260, 2, 22, 'बिरगंज महानगरपालिका', '', 1),
(261, 2, 22, 'पोखरिया नगरपालिका', '', 3),
(262, 2, 22, 'बहुदरमाई नगरपालिका', '', 3),
(263, 2, 22, 'पर्सागढी नगरपालिका', '', 3),
(264, 2, 22, 'ठारी गाउँपालिका', '', 4),
(265, 2, 22, 'जगरनाथपुर गाँउपालिका', '', 4),
(266, 2, 22, 'धोबीनी गाँउपालिका', '', 4),
(267, 2, 22, 'छिपहरमाइ गाँउपालिका', '', 4),
(268, 2, 22, 'पकाहा मैनपुर गाँउपालिका', '', 4),
(269, 2, 22, 'बिन्दबासिनी गाँउपालिका', '', 4),
(270, 2, 22, 'सखुवा प्रसौनी गाँउपालिका', '', 4),
(271, 2, 22, 'पटेर्वा सुगौली गाँउपालिका', '', 4),
(272, 2, 22, 'कालिकामाई गाउँपालिका', '', 4),
(273, 2, 22, 'जिराभवानी गाँउपालिका', '', 4),
(274, 3, 23, 'कमलामाई  नगरपालिका', '', 3),
(275, 3, 23, 'दुधौली नगरपालिका', '', 3),
(276, 3, 23, 'गोलन्जोर गाउँपालिका', '', 4),
(277, 3, 23, 'घ्याङलेख गाउँपालिका', '', 4),
(278, 3, 23, 'तीनपाटन गाउँपालिका', '', 4),
(279, 3, 23, 'फिक्कल गाउँपालिका', '', 4),
(280, 3, 23, 'मरिण गाउँपालिका', '', 4),
(281, 3, 23, 'सुनकोशी गाउँपालिका', '', 4),
(282, 3, 23, 'हरिहरपुरगढी गाउँपालिका', '', 4),
(283, 3, 24, 'मन्थली नगरपालिका', '', 3),
(284, 3, 24, 'रामेछाप नगरपालिका', '', 3),
(285, 3, 24, 'उमाकुण्ड गाउँपालिका', '', 4),
(286, 3, 24, 'खाँडादेवी गाउँपालिका', '', 4),
(287, 3, 24, 'गोकुलगंगा गाउँपालिका', '', 4),
(288, 3, 24, 'दोरम्बा गाउँपालिका', '', 4),
(289, 3, 24, 'लिखु गाउँपालिका', '', 4),
(290, 3, 24, 'सुनापती गाउँपालिका', '', 4),
(291, 3, 25, 'जिरी नगरपालिका', '', 3),
(292, 3, 25, 'भीमेश्वर  नगरपालिका', '', 4),
(293, 3, 25, 'कालिन्चोक  नगरपालिका', '', 3),
(294, 3, 25, 'गौरीशंकर गाउँपालिका', '', 4),
(295, 3, 25, 'तामाकोशी गाउँपालिका', '', 4),
(296, 3, 25, 'मेलुङ गाउँपालिका', '', 4),
(297, 3, 25, 'विगु गाउँपालिका', '', 4),
(298, 3, 25, 'वैतेश्वर गाउँपालिका', '', 4),
(299, 3, 25, 'शैलुङ गाउँपालिका', '', 4),
(300, 3, 26, 'चौतारा साँगाचोकगढी नगरपालिका', 'Chautara Sagachowk Gadi Municipality', 3),
(301, 3, 26, 'बाह्रबिसे नगरपालिका', 'Bahrabise Municipality', 3),
(302, 3, 26, 'मेलम्ची नगरपालिका', 'Melanchi Municipality', 3),
(303, 3, 26, 'इन्द्रावती गाउँपालिका', 'Indrawoti Rural Municipality', 4),
(304, 3, 26, 'जुगल गाउँपालिका', 'Jugal Rural Municipality', 4),
(305, 3, 26, 'पाँचपोखरी थाङपाङ गाउँपालिका', 'Panchpokhari Thangpal Rural Municipality', 4),
(306, 3, 26, 'बलेफी गाउँपालिका', 'Balephi Rural Municipality', 4),
(307, 3, 26, 'भोटेकोशी गाउँपालिका', 'Bhotekoshi Rural Municipality', 4),
(308, 3, 26, 'लिसंखु पाखर गाउँपालिका', 'Lisankhu Pakhar Rural Municipality', 4),
(309, 3, 26, 'सुनकोशी गाउँपालिका', 'Sunkoshi Rural Municipality', 4),
(310, 3, 26, 'हेलम्बु गाउँपालिका', 'Helambu Rural Municipality', 4),
(311, 3, 26, 'त्रिपुरासुन्दरी गाउँपालिका', 'Tripurasundari Rural Municipality', 4),
(312, 3, 27, 'धुलिखेल नगरपालिका', 'Dhulikhel Municipality', 3),
(313, 3, 27, 'बनेपा नगरपालिका', 'Banepa Municipality', 3),
(314, 3, 27, 'पनौती नगरपालिका', 'Panauti Municipality', 3),
(315, 3, 27, 'पाँचखाल नगरपालिका', 'Panchkhal Municipality', 3),
(316, 3, 27, 'नमोबुद्ध नगरपालिका', 'Namobuddha Municipality', 3),
(317, 3, 27, 'खानीखोला गाउँपालिका', 'Khanikhola Rural Municipality', 4),
(318, 3, 27, 'चौरीदेउराली गाउँपालिका', 'Chauri Deurali Rural Municipality', 4),
(319, 3, 27, 'तेमाल गाउँपालिका', 'Temal Rural Municipality', 4),
(320, 3, 27, 'वेथानचोक गाउँपालिका', 'Bethanchowk Rural Municipality', 4),
(321, 3, 27, 'भुम्लु गाउँपालिका', 'Bhumlu Rural Municipality', 4),
(322, 3, 27, 'मण्डनदेउपुर  नगरपालिका', 'Mandan Deupur Municipality', 3),
(323, 3, 27, 'महाभारत  गाउँपालिका', 'Mahabharat Rural Municipality', 4),
(324, 3, 27, 'रोशी  गाउँपालिका', 'Roshi Rural Municipality', 4),
(325, 3, 28, 'ललितपुर महानगरपालिका', 'Lalitpur Metropolitian City', 1),
(326, 3, 28, 'गोदावरी नगरपालिका', 'Godawari Municipality', 3),
(327, 3, 28, 'महालक्ष्मी नगरपालिका', 'Mahalaxmi Municipality', 3),
(328, 3, 28, 'कोन्ज्योसोम गाउँपालिका', 'Konjyosom Rural Municipality', 4),
(329, 3, 28, 'बाग्मती गाउँपालिका', 'Bagmati Rural Municipality', 4),
(330, 3, 28, 'महांकाल गाउँपालिका', 'Mahankal Rural Municipality', 4),
(331, 3, 29, 'चाँगुनारायण नगरपालिका', 'Changunarayan Municipality', 3),
(332, 3, 29, 'भक्तपुर नगरपालिका', 'Bhaktapur Municipality', 3),
(333, 3, 29, 'मध्यपुर थिमी नगरपालिका', 'Madhyapur Thimi Municipality', 3),
(334, 3, 29, 'सूर्यविनायक नगरपालिका', 'Suryabinayak Municipality', 3),
(335, 3, 30, 'काठमाण्डौँ महानगरपालिका', 'Kathmandu Metropolitian City', 1),
(336, 3, 30, 'कागेश्वरी मनोहरा नगरपालिका', 'Kageshwori Manahara Municipality', 3),
(337, 3, 30, 'कीर्तिपुर नगरपालिका', 'Kirtipur Municipality', 3),
(338, 3, 30, 'गोकर्णेश्वर नगरपालिका', 'Gokarneshwor Municipality', 3),
(339, 3, 30, 'चन्द्रागिरी नगरपालिका', 'Chandragiri Municipality', 3),
(340, 3, 30, 'टोखा नगरपालिका', 'Tokha Municipality', 3),
(341, 3, 30, 'तारकेश्वर नगरपालिका', 'Tarakeshwor Municipality', 3),
(342, 3, 30, 'दक्षिणकाली नगरपालिका', 'Dakshinkali Municipality', 3),
(343, 3, 30, 'नागार्जुन नगरपालिका', 'Nagarjun Municipality', 3),
(344, 3, 30, 'बुढानिलकण्ठ नगरपालिका', 'Budhanilkhantha Municipality', 3),
(345, 3, 30, 'शंखरापुर नगरपालिका', 'Shankharapur Municipality', 3),
(346, 3, 32, 'उत्तरगया गाउँपालिका', '', 4),
(347, 3, 32, 'कालिका गाउँपालिका', '', 4),
(348, 3, 32, 'गोसाईकुण्ड गाउँपालिका', '', 4),
(349, 3, 32, 'नौकुण्ड गाउँपालिका', '', 4),
(350, 3, 32, 'पार्वतीकुण्ड गाउपालिका', '', 4),
(351, 3, 31, 'विदुर नगरपालिका', '', 3),
(352, 3, 31, 'बेलकोटगढी नगरपालिका', '', 3),
(353, 3, 31, 'ककनी गाउँपालिका', '', 4),
(354, 3, 31, 'किस्पाङ गाउँपालिका', '', 4),
(355, 3, 31, 'तादी गाउँपालिका', '', 4),
(356, 3, 31, 'तारकेश्वर गाउँपालिका', '', 4),
(357, 3, 31, 'दुप्चेश्वर गाउँपालिका', '', 4),
(358, 3, 31, 'पञ्चकन्या गाउँपालिका', '', 4),
(359, 3, 31, 'लिखु गाउँपालिका', '', 4),
(360, 3, 31, 'मेघाङ गाउँपालिका', '', 4),
(361, 3, 31, 'शिवपुरी गाउँपालिका', '', 4),
(362, 3, 31, 'सुर्यगढी गाउँपालिका', '', 4),
(363, 3, 33, 'धुनीबेशी नगरपालिका', '', 3),
(364, 3, 33, 'नीलकण्ठ नगरपालिका', '', 3),
(365, 3, 33, 'खनियाबास गाउँपालिका', '', 4),
(366, 3, 33, 'गजुरी गाउँपालिका', '', 4),
(367, 3, 33, 'गल्छी गाउँपालिका', '', 4),
(368, 3, 33, 'गंगाजमुना गाउँपालिका', '', 4),
(369, 3, 33, 'ज्वालामुखी गाउँपालिका', '', 4),
(370, 3, 33, 'थाक्रे गाउँपालिका', '', 4),
(371, 3, 33, 'नेत्रावती गाउँपालिका', '', 4),
(372, 3, 33, 'बेनीघाट रोराङ्ग  गाउँपालिका', '', 4),
(373, 3, 33, 'रुवी भ्याली गाउँपालिका', '', 4),
(374, 3, 33, 'सिद्धलेक गाउँपालिका', '', 4),
(375, 3, 33, 'त्रिपुरासुन्दरी गाउँपालिका', '', 4),
(376, 3, 34, 'हेटौडा उपमहानगरपालिका', '', 2),
(377, 3, 34, 'थाहा नगरपालिका', '', 3),
(378, 3, 34, 'ईन्द्रसरोवर गाउँपालिका', '', 4),
(379, 3, 34, 'कैलाश गाउँपालिका', '', 4),
(380, 3, 34, 'बकैया गाउँपालिका', '', 4),
(381, 3, 34, 'बाग्मती गाउँपालिका', '', 4),
(382, 3, 34, 'भिमफेदी गाउँपालिका', '', 4),
(383, 3, 34, 'मकवानपुरगढी गाउँपालिका', '', 4),
(384, 3, 34, 'मनहरी गाउँपालिका', '', 4),
(385, 3, 34, 'राक्सिराङ्गा गाउँपालिका', '', 4),
(386, 3, 35, 'भरतपुर महानगरपालिका', '', 1),
(387, 3, 35, 'कालिका नगरपालिका', '', 3),
(388, 3, 35, 'खैरहनी नगरपालिका', '', 3),
(389, 3, 35, 'माडी नगरपालिका', '', 3),
(390, 3, 35, 'रत्ननगर नगरपालिका', '', 3),
(391, 3, 35, 'राप्ती नगरपालिका', '', 3),
(392, 3, 35, 'इच्छाकामना गाउँपालिका', '', 4),
(393, 4, 36, 'गोरखा नगरपालिका', '', 3),
(394, 4, 36, 'पालुङटार नगरपालिका', 'Palungtar Municipality', 3),
(395, 4, 36, 'सुलीकोट गाउपालिका', '', 4),
(396, 4, 36, 'सिरानचोक गाउँपालिका', '', 4),
(397, 4, 36, 'अजिरकोट गाउँपालिका', '', 4),
(398, 4, 36, 'आरुघाट गाउँपालिका', '', 4),
(399, 4, 36, 'गण्डकी गाउँपालिका', '', 4),
(400, 4, 36, 'चुननुव्री गाउँपालिका', '', 4),
(401, 4, 36, 'धार्चे गाउँपालिका', '', 4),
(402, 4, 36, 'भिमसेन गाउँपालिका', '', 4),
(403, 4, 36, 'शहिद लखन गाउँपालिका', '', 4),
(404, 4, 37, 'बेसीशहर नगरपालिका', '', 3),
(405, 4, 37, 'मध्यनेपाल नगरपालिका', '', 3),
(406, 4, 37, 'राईनास नगरपालिका', '', 3),
(407, 4, 37, 'सुन्दरबजार नगरपालिका', '', 3),
(408, 4, 37, 'क्व्होलासोथार गाउँपालिका', '', 4),
(409, 4, 37, 'दुधपोखरी गाउँपालिका', '', 4),
(410, 4, 37, 'दोर्दी गाउँपालिका', '', 4),
(411, 4, 37, 'मस्र्याङदी गाउँपालिका', '', 4),
(412, 4, 38, 'भानु नगरपालिका', '', 3),
(413, 4, 38, 'भिमाद नगरपालिका', '', 3),
(414, 4, 38, 'ब्यास नगरपालिका', '', 3),
(415, 4, 38, 'शुक्लागण्डकी नगरपालिका', '', 3),
(416, 4, 38, 'आबुखैरहनी गाउँपालिका', '', 4),
(417, 4, 38, 'ऋषिङ्ग गाउपालिका', '', 4),
(418, 4, 38, 'घिरिङ गाउँपालिका', '', 4),
(419, 4, 38, 'देवघाट गाउँपालिका', '', 4),
(420, 4, 38, 'म्याग्दे गाउँपालिका', '', 4),
(421, 4, 38, 'बन्दिपुर गाउँपालिका', '', 4),
(422, 4, 40, 'गल्याङ नगरपालिका', '', 3),
(423, 4, 40, 'चापाकोट  नगरपालिका', '', 3),
(424, 4, 40, 'पुतलीबजार नगरपालिका', '', 3),
(425, 4, 40, 'भीरकोट नगरपालिका', '', 3),
(426, 4, 40, 'वालिङ नगरपालिका', '', 3),
(427, 4, 40, 'अर्जुनचौपारी गाउँपालिका', '', 4),
(428, 4, 40, 'आधिँखोला गाउँपालिका', '', 4),
(429, 4, 40, 'कालीगण्डकी गाउँपालिका', '', 4),
(430, 4, 40, 'फेदीखोला गाउँपालिका', '', 4),
(431, 4, 40, 'विरुवा गाउँपालिका', '', 4),
(432, 4, 40, 'हरिनास गाउँपालिका', '', 4),
(433, 4, 43, 'पोखरा लेखनाथ महानगरपालिका', '', 1),
(434, 4, 43, 'अन्नपूर्ण गाउँपालिका', '', 4),
(435, 4, 43, 'माछापुच्छे्र्र्र गाउँपालिका', '', 4),
(436, 4, 43, 'मादी गाउँपालिका', '', 4),
(437, 4, 43, 'रुपा गाउँपालिका', '', 4),
(438, 4, 45, 'चामे गाउँपालिका', '', 4),
(439, 4, 45, 'नार्फु गाउँपालिका', '', 4),
(440, 4, 45, 'नाशोङ गाउँपालिका', '', 4),
(441, 4, 45, 'नेस्याङ गाउँपालिका', '', 4),
(442, 4, 46, 'घरपझोङ गाउँपालिका', '', 4),
(443, 4, 46, 'खासाङ्ग गाउँपालिका', '', 4),
(444, 4, 46, 'दालोमे गाउँपालिका', '', 4),
(445, 4, 46, 'लोमन्थाङ गाउँपालिका', '', 4),
(446, 4, 46, 'बाह्रगाउँ मुक्तिक्षेत्र गाउँपालिका', '', 4),
(447, 4, 44, 'बेनी नगरपालिका', '', 3),
(448, 4, 44, 'अन्नपूर्ण गाउँपालिका', '', 4),
(449, 4, 44, 'धवलागिरी गाउँपालिका', '', 4),
(450, 4, 44, 'मंगला गाउँपालिका', '', 4),
(451, 4, 44, 'मालिका गाउँपालिका', '', 4),
(452, 4, 44, 'रघुगंगा गाउँपालिका', '', 4),
(453, 4, 41, 'कुश्मा नगरपालिका', '', 3),
(454, 4, 41, 'फलेवास नगरपालिका', '', 3),
(455, 4, 41, 'जलजला गाउँपालिका', '', 4),
(456, 4, 41, 'पैँयू गाउपालिका', '', 4),
(457, 4, 41, 'महाशिला  गाउपालिका', '', 4),
(458, 4, 41, 'मोदी गाउपालिका', '', 4),
(459, 4, 41, 'विहादी गाउपालिका', '', 4),
(460, 4, 42, 'बागलुङ नगरपालिका', '', 3),
(461, 4, 42, 'गल्कोट नगरपालिका', '', 3),
(462, 4, 42, 'जैमिनी नगरपालिका', '', 3),
(463, 4, 42, 'ढोरपाटन नगरपालिका', '', 3),
(464, 4, 42, 'वरेङ गाउँपालिका', '', 4),
(465, 4, 42, 'काठेखोला गाउँपालिका', '', 4),
(466, 4, 42, 'तमानखोला गाउँपालिका', '', 4),
(467, 4, 42, 'ताराखोला गाउँपालिका', '', 4),
(468, 4, 42, 'निसीखोला गाउँपालिका', '', 4),
(469, 4, 42, 'वडिगाड गाउँपालिका', '', 4),
(470, 4, 39, 'कावासोती नगरपालिका', '', 3),
(471, 4, 39, 'गैडाकोट नगरपालिका', '', 3),
(472, 4, 39, 'देवचली नगरपालिका', '', 3),
(473, 4, 39, 'मध्यबिन्दु नगरपालिका', '', 3),
(474, 4, 39, 'बुङ्दिकाली नगरपालीका', '', 3),
(475, 4, 39, 'बिलुङ्टार नगरपालीका', '', 4),
(476, 4, 39, 'विनयीत्रिवेणी गाउँपालिका', '', 4),
(477, 4, 39, 'हप्सेकोट गाउँपालिका', '', 4),
(478, 5, 50, 'मुसिकोट नगरपालिका', '', 3),
(479, 5, 50, 'रेसुङ्गा नगरपालिका', '', 3),
(480, 5, 50, 'इस्मा गाउँपालिका', '', 4),
(481, 5, 50, 'कालीगण्डकी गाउँपालिका', '', 4),
(482, 5, 50, 'गुल्मीदरबार गाउँपालिका', '', 4),
(483, 5, 50, 'सत्यवती गाउँपालिका', '', 4),
(484, 5, 50, 'चन्द्रकोट गाउँपालिका', '', 4),
(485, 5, 50, 'रुरु गाउँपालिका', '', 4),
(486, 5, 50, 'छत्रकोट गाउँपालिका', '', 4),
(487, 5, 50, 'धुर्कोट गाउँपालिका', '', 4),
(488, 5, 50, 'मदाने गाउँपालिका', '', 4),
(489, 5, 50, 'मालिका गाउँपालिका', '', 4),
(490, 5, 47, 'रामपुर नगरपालिका', '', 4),
(491, 5, 47, 'तानसेन नगरपालिका', '', 3),
(492, 5, 47, 'निस्दी गाउँपालिका', '', 4),
(493, 5, 47, 'पूर्वखोला गाँउपालिका', '', 4),
(494, 5, 47, 'रम्भा गाँउपालिका', '', 4),
(495, 5, 47, 'माथागढी गाँउपालिका', '', 4),
(496, 5, 47, 'तिनाउ गाउँपालिका', '', 4),
(497, 5, 47, 'बगनासकाली गाउँपालिका', '', 4),
(498, 5, 47, 'रिब्दीकोट गाउँपालिका', '', 4),
(499, 5, 47, 'रैनादेवी छहरा गाउँपालिका', '', 4),
(500, 4, 76, 'बर्दघाट नगरपालिका', '', 3),
(501, 4, 76, 'रामग्राम नगरपालिका', '', 3),
(502, 4, 76, 'सुनवल नगरपालिका', '', 3),
(503, 4, 76, 'त्रिवेणिसुस्ता गाँउपालिका', '', 4),
(504, 4, 76, 'पाल्हीनन्दन गाँउपालिका', '', 4),
(505, 4, 76, 'प्रतापपुर गाँउपालिका', '', 4),
(506, 4, 76, 'सरावल गाँउपालिका', '', 4),
(507, 5, 48, 'बुटवल उपमहानगरपालिका', '', 2),
(508, 5, 48, 'देवदह नगरपालिका', '', 3),
(509, 5, 48, 'लुम्बिनी सांस्कृतिक नगरपालिका', '', 3),
(510, 5, 48, 'सैनामैना नगरपालिका', '', 3),
(511, 5, 48, 'सिद्धार्थनगर नगरपालिका', '', 3),
(512, 5, 48, 'तिलोत्तमा नगरपालिका', '', 3),
(513, 5, 48, 'गैडहवा गाँउपालिका', '', 4),
(514, 5, 48, 'कन्चन गाँउपालिका', '', 4),
(515, 5, 48, 'कोटहीमाई गाँउपालिका', '', 4),
(516, 5, 48, 'मर्चवारी गाँउपालिका', '', 4),
(517, 5, 48, 'मायादेवी गाँउपालिका', '', 4),
(518, 5, 48, 'ओमसतिया गाउँपालिका', '', 4),
(519, 5, 48, 'रोहिणी गाउँपालिका', '', 4),
(520, 5, 48, 'सम्मरीमाई गाउँपालिका', '', 4),
(521, 5, 48, 'सियारी गाउँपालिका', '', 4),
(522, 5, 48, 'शुद्धोधन गाउँपालिका', '', 4),
(523, 5, 49, 'कपिलवस्तु नगरपालिका', '', 3),
(524, 5, 49, 'बुद्धभुमी नगरपालिका', '', 3),
(525, 5, 49, 'शिवराज नगरपालिका', '', 3),
(526, 5, 49, 'महाराजगंज नगरपालिका', '', 3),
(527, 5, 49, 'कृष्णनगर नगरपालिका', '', 3),
(528, 5, 49, 'बाणगंगा नगरपालिका', '', 3),
(529, 5, 49, 'मायादेवी गाँउपालिका', '', 4),
(530, 5, 49, 'यशोधरा गाँउपालिका', '', 4),
(531, 5, 49, 'शुद्धोधन गाँउपालिका', '', 4),
(532, 5, 49, 'विजयनगर गाँउपालिका', '', 4),
(533, 5, 51, 'सन्धिखर्क नगरपालिका', '', 3),
(534, 5, 51, 'शितगंगा नगरपालिका', '', 3),
(535, 5, 51, 'भुमिकास्थान नगरपालिका', '', 3),
(536, 5, 51, 'छत्रदेव गाउँपालिका', '', 4),
(537, 5, 51, 'पाणिनी गाउँपालिका', '', 4),
(538, 5, 51, 'मालारानी गाउँपालिका', '', 4),
(539, 5, 53, 'प्यूठान नगरपालिका', '', 3),
(540, 5, 53, 'स्वर्गद्धारी नगरपालिका', '', 3),
(541, 5, 53, 'गौमुखी गाउँपालिका', '', 4),
(542, 5, 53, 'माण्डवी गाउँपालिका', '', 4),
(543, 5, 53, 'सरुमारानी गाउँपालिका', '', 4),
(544, 5, 53, 'मल्लरानी गाउँपालिका', '', 4),
(545, 5, 53, 'नौबहिनी गाउँपालिका', '', 4),
(546, 5, 53, 'झिमरुक गाउँपालिका', '', 4),
(547, 5, 53, 'ऐरावती गाउँपालिका', '', 4),
(548, 5, 54, 'रोल्पा नगरपालिका', '', 3),
(549, 5, 54, 'त्रिवेणी गाउँपालिका', '', 4),
(550, 5, 54, 'दुईखोला गाउँपालिका', '', 4),
(551, 5, 54, 'माडी गाउँपालिका', '', 4),
(552, 5, 54, 'रुन्टीगढी गाउँपालिका', '', 4),
(553, 5, 54, 'लुङग्री गाउँपालिका', '', 4),
(554, 5, 54, 'सुकिदह गाउँपालिका', '', 4),
(555, 5, 54, 'सुनछहरी गाउँपालिका', '', 4),
(556, 5, 54, 'सुवर्णावती गाउँपालिका', '', 4),
(557, 5, 54, 'थवाङ गाउँपालिका', '', 4),
(558, 5, 77, 'पुथा उत्तरगंगा गाँउपालिका', '', 4),
(559, 5, 77, 'भूमे गाँउपालिका', '', 4),
(560, 5, 77, 'सिस्ने गाँउपालिका', '', 4),
(561, 6, 57, 'शारदा नगरपालिका', '', 3),
(562, 6, 57, 'बागचौर नगरपालिका', '', 3),
(563, 6, 57, 'बनगाड कुपिण्डे नगरपालिका', '', 3),
(564, 6, 57, 'कालिमाटी गाँउपालिका', '', 4),
(565, 6, 57, 'त्रिवेणि गाँउपालिका', '', 4),
(566, 6, 57, 'कपुरकोट गाउँपालिका', '', 4),
(567, 6, 57, 'छत्रेश्वरी गाँउपालिका', '', 4),
(568, 6, 57, 'ढोरचौर गाँउपालिका', '', 4),
(569, 6, 57, 'कुमाखमालिका गाँउपालिका', '', 4),
(570, 6, 57, 'दार्मा गाँउपालिका', '', 4),
(571, 5, 52, 'तुल्सीपुर उपमहानगरपालिका', '', 2),
(572, 5, 52, 'घोराही उपमहानगरपालिका', '', 2),
(573, 5, 52, 'लमही नगरपालिका', '', 3),
(574, 5, 52, 'बंगलाचुली गाउँपालिका', '', 4),
(575, 5, 52, 'दंगीशरण गाउँपालिका', '', 4),
(576, 5, 52, 'गढवा गाउँपालिका', '', 4),
(577, 5, 52, 'राजपुर गाउँपालिका', '', 4),
(578, 5, 52, 'राप्ति गाउँपालिका', '', 4),
(579, 5, 52, 'शान्तिनगर गाउँपालिका', '', 4),
(580, 5, 52, 'बबई गाउँपालिका', '', 4),
(581, 5, 55, 'नेपालगञ्ज उपमहानगरपालिका', '', 3),
(582, 5, 55, 'कोहलपुर नगरपालिका', '', 3),
(583, 5, 55, 'नरैनापुर गाउँपालिका', '', 4),
(584, 5, 55, 'राप्तीसोनारी गाउँपालिका', '', 4),
(585, 5, 55, 'बैजनाथ गाउँपालिका', '', 4),
(586, 5, 55, 'खजुरा गाउँपालिका', '', 4),
(587, 5, 55, 'डुडुवा गाउँपालिका', '', 4),
(588, 5, 55, 'जानकी गाउँपालिका', '', 4),
(589, 5, 56, 'गुलरिया नगरपालिका', '', 3),
(590, 5, 56, 'मधुवन नगरपालिका', '', 3),
(591, 5, 56, 'राजापुर नगरपालिका', '', 3),
(592, 5, 56, 'ठाकुरबाबा नगरपालिका', '', 3),
(593, 5, 56, 'बाँसगढी नगरपालिका', '', 4),
(594, 5, 56, 'बारबर्दिया नगरपालिका', '', 3),
(595, 5, 56, 'बढैयाताल गाउँपालिका', '', 4),
(596, 5, 56, 'गेरुवा गाउँपालिका', '', 4),
(597, 6, 58, 'मुसिकोट नगरपालिका', '', 3),
(598, 6, 58, 'चौरजहारी नगरपालिका', '', 3),
(599, 6, 58, 'आठबिसकोट नगरपालिका', '', 3),
(600, 6, 58, 'बाँफिकोट गाँउपालिका', '', 4),
(601, 6, 58, 'त्रिवेणि गाँउपालिका', '', 4),
(602, 6, 58, 'सानीभेरी गाँउपालिका', '', 4),
(603, 6, 60, 'वीरेन्द्रनगर नगरपालिका', '', 3),
(604, 6, 60, 'भेरीगंगा नगरपालिका', '', 3),
(605, 6, 60, 'गुर्भाकोट नगरपालिका', '', 3),
(606, 6, 60, 'पञ्चपुरी नगरपालिका', '', 3),
(607, 6, 60, 'लेकबेशी नगरपालिका', '', 3),
(608, 6, 60, 'चौकुने गाँउपालिका', '', 4),
(609, 6, 60, 'बराहताल गाँउपालिका', '', 4),
(610, 6, 60, 'चिङ्गाड गाउँपालिका', '', 4),
(611, 6, 60, 'सिम्ता गाउँपालिका', '', 4),
(612, 6, 61, 'नारायण नगरपालिका', '', 3),
(613, 6, 61, 'दुल्लु नगरपालिका', '', 3),
(614, 6, 61, 'चामुण्डा बिन्द्रासैनी नगरपालिका', '', 3),
(615, 6, 61, 'आठबीस नगरपालिका', '', 3),
(616, 6, 61, 'भगवतिमाई गाँउपालिका', '', 4),
(617, 6, 61, 'गुराँस गाँउपालिका', '', 4),
(618, 6, 61, 'डुङ्गेश्वर गाउँपालिका', '', 4),
(619, 6, 61, 'नौमुले गाँउपालिका', '', 4),
(620, 6, 61, 'महाबु गाँउपालिका', '', 4),
(621, 6, 61, 'भैरवी गाँउपालिका', '', 4),
(622, 6, 61, 'ठाँटीकाँध गाँउपालिका', '', 4),
(623, 6, 59, 'भेरी नगरपालिका', '', 3),
(624, 6, 59, 'छेडागाड नगरपालिका', '', 3),
(625, 6, 59, 'त्रिवेणि नलगाड नगरपालिका', '', 3),
(626, 6, 59, 'कुसे गाँउपालिका', '', 4),
(627, 6, 59, 'जुनीचाँदे गाँउपालिका', '', 4),
(628, 6, 59, 'बारेकोट गाँउपालिका', '', 4),
(629, 6, 59, 'शिवालय गाउँपालिका', '', 4),
(630, 6, 64, 'ठुली भेरी नगरपालिका', '', 3),
(631, 6, 64, 'त्रिपुरासुन्दरी नगरपालिका', '', 3),
(632, 6, 64, 'डोेल्पो बुद्ध गाँउपालिका', '', 4),
(633, 6, 64, 'शे फोक्सुण्डो गाँउपालिका', '', 4),
(634, 6, 64, 'जगदुल्ला गाँउपालिका', '', 4),
(635, 6, 64, 'मुड्केचुला गाँउपालिका', '', 4),
(636, 6, 64, 'काईके गाँउपालिका', '', 4),
(637, 6, 64, 'छार्का ताङसोङ गाँउपालिका', '', 4),
(638, 6, 63, 'चन्दनाथ नगरपालिका', '', 3),
(639, 6, 63, 'कनकासुन्दरी गाँउपालिका', '', 4),
(640, 6, 63, 'सिंजा गाँउपालिका', '', 4),
(641, 6, 63, 'हिमा गाँउपालिका', '', 4),
(642, 6, 63, 'तिला गाँउपालिका', '', 4),
(643, 6, 63, 'गुठिचौर गाँउपालिका', '', 4),
(644, 6, 63, 'तातोपानी गाँउपालिका', '', 4),
(645, 6, 63, 'पातारासी गाँउपालिका', '', 4),
(646, 6, 62, 'खाडाचक्र नगरपालिका', '', 3),
(647, 6, 62, 'रास्कोट नगरपालिका', '', 3),
(648, 6, 62, 'तिलागुफा नगरपालिका', '', 3),
(649, 6, 62, 'कचालझरना गाँउपालिका', '', 4),
(650, 6, 62, 'सान्नी त्रिवेणि गाँउपालिका', '', 4),
(651, 6, 62, 'नरहरिनाथ गाँउपालिका', '', 4),
(652, 6, 62, 'कालिका गाँउपालिका', '', 4),
(653, 6, 62, 'महावै गाँउपालिका', '', 4),
(654, 6, 62, 'पलाता गाँउपालिका', '', 4),
(655, 6, 65, 'छायाँनाथ रारा नगरपालिका', '', 3),
(656, 6, 65, 'मुगुमकार्मारोग गाँउपालिका', '', 4),
(657, 6, 65, 'सोरु गाउँपालिका', '', 4),
(658, 6, 65, 'खत्याड गाँउपालिका', '', 4),
(659, 6, 66, 'सिमकोट गाँउपालिका', '', 4),
(660, 6, 66, 'नाम्खा गाँउपालिका', '', 4),
(661, 6, 66, 'खार्पुनाथ गाँउपालिका', '', 4),
(662, 6, 66, 'सर्केगाड गाँउपालिका', '', 4),
(663, 6, 66, 'चंखेली गाँउपालिका', '', 4),
(664, 6, 66, 'अदानचुली गाँउपालिका', '', 4),
(665, 6, 66, 'ताँजाकोट गाँउपालिका', '', 4),
(666, 7, 69, 'बडिमालिका नगरपालिका', '', 3),
(667, 7, 69, 'त्रिवेणि नगरपालिका', '', 3),
(668, 7, 69, 'बुढीगंगा नगरपालिका', '', 3),
(669, 7, 69, 'बुढीनन्दा नगरपालिका', '', 3),
(670, 7, 69, 'गौमुल गाँउपालिका', '', 4),
(671, 7, 69, 'पाण्डव गुफा गाँउपालिका', '', 4),
(672, 7, 69, 'स्वामीकात्र्तिक गाँउपालिका', '', 4),
(673, 7, 69, 'छेडेदह गाँउपालिका', '', 4),
(674, 7, 69, 'हिमाली गाँउपालिका', '', 4),
(675, 7, 70, 'जयपृथ्वी नगरपालिका', '', 3),
(676, 7, 70, 'बुंगल नगरपालिका', '', 3),
(677, 7, 70, 'तलकोट गाँउपालिका', '', 4),
(678, 7, 70, 'मष्टा गाँउपालिका', '', 4),
(679, 7, 70, 'खप्टडछान्ना गाँउपालिका', '', 4),
(680, 7, 70, 'थलरा गाँउपालिका', '', 4),
(681, 7, 70, 'वित्थडचिर गाँउपालिका', '', 4),
(682, 7, 70, 'सूर्मा गाँउपालिका', '', 4),
(683, 7, 70, 'छबिसपाथिभेरा गाँउपालिका', '', 4),
(684, 7, 70, 'दुर्गाथली गाँउपालिका', '', 4),
(685, 7, 70, 'केदारस्युँ गाँउपालिका', '', 4),
(686, 7, 70, 'काँडा गाँउपालिका', '', 4),
(687, 7, 68, 'मंगलसेन नगरपालिका', '', 3),
(688, 7, 68, 'कमलबजार नगरपालिका', '', 3),
(689, 7, 68, 'साँफेबगर नगरपालिका', '', 3),
(690, 7, 68, 'पञ्चदेवल विनायक नगरपालिका', '', 3),
(691, 7, 68, 'चौरपाटी गाँउपालिका', '', 4),
(692, 7, 68, 'मेल्लेख गाँउपालिका', '', 4),
(693, 7, 68, 'बान्नीगढी जयगढ गाँउपालिका', '', 4),
(694, 7, 68, 'रामरोशन गाँउपालिका', '', 4),
(695, 7, 68, 'ढकारी गाँउपालिका', '', 4),
(696, 7, 68, 'तुर्माखाँद गाँउपालिका', '', 4),
(697, 7, 73, 'दिपायल सिलगढी नगरपालिका', '', 3),
(698, 7, 73, 'शिखर नगरपालिका', '', 3),
(699, 7, 73, 'पूर्वीचौकी गाँउपालिका', '', 4),
(700, 7, 73, 'बडीकेदार गाँउपालिका', '', 4),
(701, 7, 73, 'जोरायल गाँउपालिका', '', 4),
(702, 7, 73, 'सायल गाँउपालिका', '', 4),
(703, 7, 73, 'आर्दश गाँउपालिका', '', 4),
(704, 7, 73, 'के.आई.सिं गाँउपालिका', '', 4),
(705, 7, 73, 'बोगटान गाँउपालिका', '', 4),
(706, 7, 67, 'धनगढी उपमहानगरपालिका', '', 2),
(707, 7, 67, 'टिकापुर नगरपालिका', '', 3),
(708, 7, 67, 'घोडाघोडी नगरपालिका', '', 3),
(709, 7, 67, 'लम्किचुहा नगरपालिका', '', 3),
(710, 7, 67, 'भजनी नगरपालिका', '', 3),
(711, 7, 67, 'गोदावरी नगरपालिका', '', 3),
(712, 7, 67, 'गौरीगंगा नगरपालिका', '', 3),
(713, 7, 67, 'जानकी गाँउपालिका', '', 4),
(714, 7, 67, 'बर्दगोरिया गाँउपालिका', '', 4),
(715, 7, 67, 'मोहन्याल गाँउपालिका', '', 4),
(716, 7, 67, 'कैलारी गाँउपालिका', '', 4),
(717, 7, 67, 'जोशीपुर गाँउपालिका', '', 4),
(718, 7, 67, 'चु्रे गाँउपालिका', '', 4),
(719, 7, 75, 'भीमदत्त नगरपालिका', '', 3),
(720, 7, 75, 'पुर्नवास नगरपालिका', '', 3),
(721, 7, 75, 'बेदकोट नगरपालिका', '', 3),
(722, 7, 75, 'माहाकाली नगरपालिका', '', 3),
(723, 7, 75, 'शुक्लाफाँटा नगरपालिका', '', 3),
(724, 7, 75, 'बेलौैरी नगरपालिका', '', 3),
(725, 7, 75, 'कृष्णपुर नगरपालिका', '', 3),
(726, 7, 75, 'बेलडाँडी गाँउपालिका', '', 4),
(727, 7, 75, 'लालझाडी गाँउपालिका', '', 4),
(728, 7, 74, 'अमरगढी नगरपालिका', '', 3),
(729, 7, 74, 'परशुराम नगरपालिका', '', 3),
(730, 7, 74, 'आलिताल गाँउपालिका', '', 4),
(731, 7, 74, 'भागेश्वर गाँउपालिका', '', 4),
(732, 7, 74, 'नवदुर्गा गाँउपालिका', '', 4),
(733, 7, 74, 'अजयमेरु गाँउपालिका', '', 4),
(734, 7, 74, 'गन्यापधुरा गाँउपालिका', '', 4),
(735, 7, 72, 'दशरथचन्द नगरपालिका', '', 3),
(736, 7, 72, 'पाटन नगरपालिका', '', 3),
(737, 7, 72, 'मेलौली नगरपालिका', '', 3),
(738, 7, 72, 'पुर्चौडी नगरपालिका', '', 3),
(739, 7, 72, 'सुर्नया गाँउपालिका', '', 4),
(740, 7, 72, 'सिगास गाँउपालिका', '', 4),
(741, 7, 72, 'शिवनाथ गाँउपालिका', '', 4),
(742, 7, 72, 'पञ्चेश्वर गाँउपालिका', '', 4),
(743, 7, 72, 'दोगडाकेदार गाउँपालिका', '', 4),
(744, 7, 72, 'डीलासैनी गाउँपालिका', '', 4),
(745, 7, 71, 'महाकाली नगरपालिका', '', 3),
(746, 7, 71, 'शैल्यशिखर नगरपालिका', '', 3),
(747, 7, 71, 'मालिकार्जुन गाँउपालिका', '', 4),
(748, 7, 71, 'अपिहिमाल गाँउपालिका', '', 4),
(749, 7, 71, 'दुहुँ गाँउपालिका', '', 4),
(750, 7, 71, 'नौगाड गाँउपालिका', '', 4),
(751, 7, 71, 'मार्मा गाँउपालिका', '', 4),
(752, 7, 71, 'लेकम गाँउपालिका', '', 4),
(753, 7, 71, 'व्याँस गाँउपालिका', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `local_state_type`
--

CREATE TABLE `local_state_type` (
  `local_state_type_id` int(11) NOT NULL,
  `local_state_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_state_type`
--

INSERT INTO `local_state_type` (`local_state_type_id`, `local_state_type`) VALUES
(1, 'महानगरपालिका'),
(2, 'उपमहानगरपालिका'),
(3, 'नगरपालिका'),
(4, 'गाउँपालिका');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_no_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_no_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wife_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_father_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_age_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `husband_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_grand_father_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_father_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_provience_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_district_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_local_state_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lc_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_ward_no_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_age_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_bs_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_ad_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bride_citizen_no_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bride_citizen_issued_date_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bride_citizen_issued_district_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bridegroom_citizen_no_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bridegroom_citizen_issued_date_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bridegroom_citizen_issued_district_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_registrar_name_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `signed_date_nep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wife_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `husband_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `husband_age` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_father_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_age` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_father_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_grand_father_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_ward_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_local_state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lc_type_english` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `girls_provience` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_bs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_ad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bride_citizen_issued_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bride_citizen_issued_district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bride_citizen_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bridegroom_citizen_issued_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bridegroom_citizen_issued_district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bridegroom_citizen_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_registrar_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `signed_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `reg_no_nep`, `form_no_nep`, `reg_date_nep`, `applicant_name_nep`, `wife_name_nep`, `grand_father_name_nep`, `father_name_nep`, `applicant_age_nep`, `husband_name_nep`, `girls_grand_father_name_nep`, `girls_father_name_nep`, `girls_provience_nep`, `girls_district_nep`, `girls_local_state_nep`, `lc_type`, `girls_ward_no_nep`, `girls_age_nep`, `girls_name_nep`, `date_bs_nep`, `date_ad_nep`, `bride_citizen_no_nep`, `bride_citizen_issued_date_nep`, `bride_citizen_issued_district_nep`, `bridegroom_citizen_no_nep`, `bridegroom_citizen_issued_date_nep`, `bridegroom_citizen_issued_district_nep`, `local_registrar_name_nep`, `signed_date_nep`, `reg_no`, `form_no`, `reg_date`, `applicant_name`, `wife_name`, `husband_name`, `husband_age`, `father_name`, `grand_father_name`, `girls_name`, `girls_age`, `girls_father_name`, `girls_grand_father_name`, `girls_ward_no`, `girls_local_state`, `lc_type_english`, `girls_district`, `girls_provience`, `date_bs`, `date_ad`, `bride_citizen_issued_date`, `bride_citizen_issued_district`, `bride_citizen_no`, `bridegroom_citizen_issued_date`, `bridegroom_citizen_issued_district`, `bridegroom_citizen_no`, `local_registrar_name`, `signed_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '5', '3', '2075-06-09', 'हिरा', 'माक', 'dsf', 'dfd', 'माकमहक', 'चानचहअ', 'भाम', 'म', 'मामक', 'महअ', 'का', 'नगरपालिका', 'माम', 'हकम', 'महअमअक', '2075-06-16', '2075-06-09', '४५', '2075-06-15', 'पम', '४५झ', '2075-06-15', 'df', 'ddd', '2075-05-30', '8', 'dfd', '2075-05-30', 'dfd', '454', '3435', '3tertr', 'rabi', 'dfd', 'rt', '4', 'fd', 'fd', 'jk', 'mk', 'Municipality', 'df', 'kl', '2075-06-09', '2075-06-09', '2075-06-31', 'jkk', 'k', '2075-06-15', 'df', 'kj', 'dfsf', '2075-05-30', 'हाेम', 'sdf', '343', '999', '2', '2018-09-22 19:43:23', '2018-09-22 19:43:23'),
(2, '5', '3', '2075-06-09', 'हिरा', 'माक', 'dsf', 'dfd', 'माकमहक', 'चानचहअ', 'भाम', 'म', 'मामक', 'महअ', 'का', 'नगरपालिका', 'माम', 'हकम', 'महअमअक', '2075-06-16', '2075-06-09', '४५', '2075-06-15', 'पम', '४५झ', '2075-06-15', 'df', 'ddd', '2075-05-30', '8', 'dfd', '2075-05-30', 'dfd', '454', '3435', '3tertr', 'rabi', 'dfd', 'rt', '4', 'fd', 'fd', 'jk', 'mk', 'Municipality', 'df', 'kl', '2075-06-09', '2075-06-09', '2075-06-31', 'jkk', 'k', '2075-06-15', 'df', 'kj', 'sanjaya ghimire', '2075-05-30', 'हाेम', 'sdf', '343', '999', '2', '2018-09-22 22:49:22', '2018-09-22 22:49:22'),
(3, '5', '3', '2075-06-09', 'हिरा', 'माक', 'dsf', 'dfd', 'माकमहक', 'चानचहअ', 'भाम', 'म', 'मामक', 'महअ', 'का', 'नगरपालिका', 'माम', 'हकम', 'महअमअक', '2075-06-16', '2075-06-09', '४५', '2075-06-15', 'पम', '४५झ', '2075-06-15', 'df', 'lovely', '2075-05-30', '8', 'dfd', '2075-05-30', 'dfd', '454', '3435', '3tertr', 'rabi', 'dfd', 'rt', '4', 'fd', 'fd', 'jk', 'mk', 'Municipality', 'df', 'kl', '2075-06-09', '2075-06-09', '2075-06-31', 'jkk', 'k', '2075-06-15', 'df', 'kj', 'sanjaya ghimire', '2075-05-30', 'हाेम', 'sdf', '343', '999', '2', '2018-09-22 22:54:35', '2018-09-22 22:54:35'),
(4, '1', '34', '2075-06-05', 'df', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sddf', 'df', 'sddf', 'dfq', 'dfg', 'गाउँपालिका', 'df', 'dssf', 'sdf', '2075-08-12', '2018-11-28', 'sdf', '2075-08-11', 'sdf', 'sdf', '2075-08-11', 'sdf', 'sdf', '2075-06-05', '3', '5', '2075-06-05', 'sdf', 'sdf', 'sdf', '8sdf', 'sdf', 'sdf', 'sdf', 'edef', 'sdf', 'sdf', 'dfa', 'sdf', 'Rural Municapility', 'sdf', 'sdf', '2075-08-06', '2018-11-22', '2075-08-13', 'sdf', 'sdf', '2075-08-27', 'sdf', 'sdf', 'sdf', '2075-06-05', 'sanjaya', 'ilam', '890', '1', '9', '2018-12-13 00:58:51', '2018-12-13 00:58:51'),
(5, 'j', 'hjh', 'hjk', 'hjk', 'h', 'jkh', 'jkh', 'jkh', 'jkh', 'jhjk', 'hjkh', 'jk', 'h', 'hjkh', 'गाउँपालिका', 'jkh', 'jk', 'jkh', 'jk', 'hkh', 'jhj', 'hjkh', 'jhjk', 'hjk', 'hjkh', 'jkh', 'jkh', 'jh', 'jhk', 'hk', 'hjkh', 'jkh', 'jhk', 'jh', 'jhjk', 'hjk', 'hjk', 'hjkh', 'jh', 'jhj', 'hkh', 'kh', 'jkh', 'Rural Municapility', 'jhj', 'hjk', 'hkh', 'kh', 'jkh', 'jkh', 'h', 'hj', 'hj', 'jkhjkh', 'hh', 'jkh', 'jk', 'hkh', 'h', 'jh', '5', '2018-12-16 06:11:15', '2018-12-16 06:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `marriage_verifications`
--

CREATE TABLE `marriage_verifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `boy_grand_father` text COLLATE utf8mb4_unicode_ci,
  `boy_father` text COLLATE utf8mb4_unicode_ci,
  `boy_mother` text COLLATE utf8mb4_unicode_ci,
  `boy_name` text COLLATE utf8mb4_unicode_ci,
  `boy_previous_address` text COLLATE utf8mb4_unicode_ci,
  `girl_grand_father` text COLLATE utf8mb4_unicode_ci,
  `girl_grand_mother` text COLLATE utf8mb4_unicode_ci,
  `girl_father` text COLLATE utf8mb4_unicode_ci,
  `girl_mother` text COLLATE utf8mb4_unicode_ci,
  `girl_name` text COLLATE utf8mb4_unicode_ci,
  `girl_previous_address` text COLLATE utf8mb4_unicode_ci,
  `marriage_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marriage_verifications`
--

INSERT INTO `marriage_verifications` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `boy_grand_father`, `boy_father`, `boy_mother`, `boy_name`, `boy_previous_address`, `girl_grand_father`, `girl_grand_mother`, `girl_father`, `girl_mother`, `girl_name`, `girl_previous_address`, `marriage_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'jhj', 'hh', 'jjh', 'h', 'hk', 'hh', 'h', 'jkhj', 'h', 'khj', 'khj', 'hjjk', 'khj', 'hh', 'kh', 'kh', NULL, 'jjh', '9', '2018-12-16 03:45:07', '2018-12-16 03:45:07'),
(2, '२०७५/०७६', 'jkh', 'jhjk', 'hkh', 'jkhj', 'hjk', 'hjkh', 'hj', 'hjkj', 'jk', 'hjk', 'hjjk', 'jkh', 'hkh', 'jkh', 'khj', 'khjkj', 'hkj', 'hk', '9', '2018-12-16 04:00:37', '2018-12-16 04:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `id` int(10) UNSIGNED NOT NULL,
  `registration_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_form_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_owner_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `migrate_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `migrate_province_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issued_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `migrate_local_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `migrate_ward` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_registration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remakrs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issued_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issued_districts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_registar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signed_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_name_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_owner_name_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mig_ward_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mig_local_state_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mig_district_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mig_provience_name_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_member_name_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_reg_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizen_no_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issued_date_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issued_district_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_registar_name_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_citizenship_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nibedak_nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `migrate_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`id`, `registration_no`, `family_form_no`, `registration_date`, `applicant_name`, `house_owner_name`, `migrate_date`, `migrate_province_name`, `issued_district`, `migrate_local_state`, `migrate_ward`, `family_member_name`, `date_of_birth`, `relation`, `event_registration`, `remakrs`, `citizenship_no`, `issued_date`, `issued_districts`, `local_registar_name`, `signed_date`, `reg_no`, `form_no`, `reg_date`, `applicant_name_eng`, `house_owner_name_eng`, `mig_ward_eng`, `mig_local_state_eng`, `mig_district_eng`, `mig_provience_name_eng`, `family_member_name_eng`, `date_of_birth_eng`, `relation_eng`, `event_reg_eng`, `remarks_eng`, `citizen_no_eng`, `issued_date_eng`, `issued_district_eng`, `local_registar_name_eng`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `migrate_type`, `applicant_title`, `applicant_title2`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2075-06-07', 'दरखास्त परेको हुनाले नगरपालिका ऐन अनुसार यो सूचना पठाउने काम भएको छ।सो नक्सा बमोजिमको घर  \r\n   *\r\nकहिँ कसैलार्इ पिरमर्का सन्धिसर्पन पर्ने भएमा यो सूचना पाएको वा घर दैलोमा टाँसेको मितिले १५ दि', 'shyam', '2075-06-01', 'd', '1', 'ilam', '5', 'sdfsd', 'sdf', 'sdf', 'df', 'df', '4', '2075-06-05', 'd', 'hahaha', '2075-06-05', 'df', 'df', '2075-06-05', 'sdf', 'sita', 'rt', '1', 'df', 'sdfs', 'sf', 'dsf', 'sdf', 'dsf', 'sdf', 'sdf', '2075-06-02', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '34453', '2', 'गएको', 'Mr', 'Mrs', '2018-09-23 11:54:26', '2018-09-23 11:54:26'),
(2, '2', '2', '2075-06-07', 'hari', 'shyam', '2075-06-01', 'd', '1', 'ilam', '5', 'sdfsd', 'sdf', 'sdf', 'df', 'df', '4', '2075-06-05', 'd', 'samjhana sampang rai ghimire', '2075-06-05', 'df', 'df', '2075-06-05', 'sdf', 'sita', 'rt', '1', 'df', 'sdfs', 'sf', 'dsf', 'sdf', 'dsf', 'sdf', 'sdf', '2075-06-02', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '34453', '2', 'गएको', 'Mr', 'Mrs', '2018-09-23 13:44:04', '2018-09-23 13:44:04'),
(3, '2', '2', '2075-06-07', 'hari', 'shyam', '2075-06-01', 'd', '1', 'ilam', '5', 'sdfsd', 'sdf', 'sdf', 'df', 'df', '4', '2075-06-05', 'd', 'samjhana', '2075-06-05', 'df', 'df', '2075-06-05', 'sdf', 'sita', 'rt', '1', 'df', 'sdfs', 'sf', 'dsf', 'sdf', 'dsf', 'sdf', 'sdf', '2075-06-02', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '34453', '2', 'गएको', 'Mr', 'Mrs', '2018-09-23 13:44:37', '2018-09-23 13:44:37'),
(4, '2', '2', '2075-06-07', 'hari', 'shyam', '2075-06-01', 'd', '1', 'ilam', '5', 'sdfsd\r\njdhfkhsfs\r\ndjkfsd', 'sdf', 'sdf', 'df', 'df', '4', '2075-06-05', 'd', 'samjhana', '2075-06-05', 'df', 'df', '2075-06-05', 'sdf', 'sita', 'rt', '1', 'df', 'sdfs', 'sf', 'dsf', 'sdf', 'dsf', 'sdf', 'sdf', '2075-06-02', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '34453', '2', 'गएको', 'Mr', 'Mrs', '2018-09-23 13:49:12', '2018-09-23 13:49:12'),
(5, '2', '2', '2075-06-07', 'hari', 'shyam', '2075-06-01', 'd', '1', 'ilam', '5', '<ol>\r\n	<li>sdfsd</li>\r\n	<li>sdkf</li>\r\n</ol>', '<ol>\r\n	<li>sdf</li>\r\n	<li>sdf</li>\r\n</ol>', '<ol>\r\n	<li>sdf</li>\r\n	<li>sdf</li>\r\n</ol>', '<ol>\r\n	<li>df</li>\r\n	<li>sdf</li>\r\n</ol>', '<ol>\r\n	<li>df</li>\r\n	<li>sdf</li>\r\n</ol>', '4', '2075-06-05', 'd', 'hahaha', '2075-06-05', 'df', 'df', '2075-06-05', 'sdf', 'sita', 'rt', '1', 'df', 'sdfs', '<p>sf</p>', '<p>dsf</p>', '<p>sdf</p>', '<p>dsf</p>', '<p>sdf</p>', 'sdf', '2075-06-02', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '34453', '2', 'गएको', 'Mr', 'Mrs', '2018-09-25 15:25:06', '2018-09-25 15:25:06'),
(6, '2', '2', '2075-06-07', 'hari', 'shyam', '2075-06-01', 'd', '1', 'ilam', '5', '<ol>\r\n	<li>sdfsd</li>\r\n	<li>sdkf</li>\r\n</ol>', '<ol>\r\n	<li>sdf</li>\r\n	<li>sdf</li>\r\n</ol>', '<ol>\r\n	<li>sdf</li>\r\n	<li>sdf</li>\r\n</ol>', '<ol>\r\n	<li>df</li>\r\n	<li>sdf</li>\r\n</ol>', '<ol>\r\n	<li>df</li>\r\n	<li>sdf</li>\r\n</ol>', '4', '2075-06-05', 'd', 'hahaha', '2075-06-05', 'df', 'df', '2075-06-05', 'sdf', 'sita', 'rt', '1', 'df', 'sdfs', '<p>sf</p>', '<p>dsf</p>', '<p>sdf</p>', '<p>dsf</p>', '<p>sdf</p>', 'sdf', '2075-06-02', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '34453', '2', 'गएको', 'Mr', 'Mrs', '2018-09-25 15:45:10', '2018-09-25 15:45:10'),
(7, '2', '56', '2075-05-05', 'sanjaya', 'shytam', '2075-08-04', 'k', 'ilam', 'df', '4', '<p>jk</p>', '<p>jk</p>', '<p>jk</p>', '<p>io</p>', '<p>jk</p>', '9', '2075-06-05', 'dsd', 'hj', '2075-06-05', '8', '4', '2075-06-05', 'k', '45', 'fdf', '1', 'dfg', 'fdf', '<p>k</p>', '<p>k</p>', '<p>k</p>', '<p>k</p>', '<p>k</p>', 'k', '2075-06-02', 'sdf', 'sdf', NULL, NULL, NULL, NULL, '9', 'गएको', 'Mr', 'Mr', '2018-11-16 23:27:39', '2018-11-16 23:27:39'),
(8, '2', '2', '2075-08-19', 'sdf', 'sdf', '2075-08-11', 'sdf', 'sdf', 'sdf', '3', '<p>sdf</p>', '<p>sdf</p>', '<p>sdf</p>', '<p>sdf</p>', '<p>sdf</p>', '4', '2075-06-05', 'dsf', 'sddf', '2075-06-05', 'dsf', 'dsf', '2075-06-05', 'sdf', 'dsf', 'sdf', 'sdf', 'sdf', 'sdf', '<p>sdf</p>', '<p>sdf</p>', '<p>sdf</p>', '<p>sdf</p>', '<p>ef</p>', 'sdf', '2075-08-12', 'sdf', 'sdf', 'sanjaya', 'ilam', '890', '1', '9', 'आएको', 'Mr', 'Mr', '2018-12-13 01:02:45', '2018-12-13 01:02:45'),
(9, 'jh', 'jhj', 'hjkh', 'jh', 'jhjk', 'hjh', 'hj', 'jhjk', 'hjkh', 'jk', '<p>jhjk</p>', '<p>hjkh</p>', '<p>jkh</p>', '<p>jkh</p>', '<p>jkh</p>', 'jkh', 'kk', 'jhj', 'kh', 'hj', 'hjjk', 'hj', 'hkjh', 'jk', 'hjk', 'hjkh', 'jkh', 'jkh', 'jkh', '<p>jkh</p>', '<p>j</p>', '<p>hj</p>', '<p>hjj</p>', '<p>jk</p>', 'hjkh', 'jhk', 'jkh', 'kj', 'hjk', 'hkj', 'hjk', 'hjk', '5', 'आएको', 'Mr', 'Mr', '2018-12-16 06:05:41', '2018-12-16 06:05:41'),
(10, '8', '9', '2075-12-04', 'jhj', 'jhjkh', 'jkhjk', 'jkhjk', 'hkjh', 'jkh', 'jkh', '<p>jkh</p>', '<p>jkh</p>', '<p>jkh</p>', '<p>jkh</p>', '<p>jk</p>', 'hjk', 'hjk', 'hjk', 'hjk', 'h', 'jh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hhj', '<p>jkh</p>', '<p>jkh</p>', '<p>jkh</p>', '<p>jk</p>', '<p>hjk</p>', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'h', 'jh', 'jh', '1', 'आएको', 'Mr', 'Mr', '2019-03-17 02:00:39', '2019-03-17 02:00:39'),
(11, '8', '9', '2075-12-04', 'jhj', 'jhjkh', 'jkhjk', 'jkhjk', 'hkjh', 'jkh', 'jkh', '<p>jkh</p>', '<p>jkh</p>', '<p>jkh</p>', '<p>jkh</p>', '<p>jk</p>', 'hjk', '2075-06-21', 'hjk', 'hjk', '2075-06-05', 'jh', 'jkh', '2075-06-05', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hhj', '<p>jkh</p>', '<p>jkh</p>', '<p>jkh</p>', '<p>jk</p>', '<p>hjk</p>', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'h', 'jh', 'jh', '1', 'गएको', 'Mr', 'Mr', '2019-03-17 02:00:53', '2019-03-17 02:00:53');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_09_15_071854_create_birthcertificate_table', 1),
(9, '2018_09_16_093254_create_deathcertificate_table', 2),
(10, '2018_09_16_101313_create_marriage_table', 3),
(11, '2018_09_16_135900_create_migration_table', 4),
(12, '2019_09_16_101313_create_marriage_table', 5),
(13, '2019_09_16_135900_create_migration_table', 6),
(14, '2018_09_23_072917_create_citizencertificate_table', 7),
(15, '2018_09_24_044458_create_citizenship_table', 8),
(16, '2019_09_24_044458_create_citizenship_table', 9),
(17, '2018_09_24_082910_create_citizensifaris_table', 10),
(18, '2018_09_24_093153_create_nagarikta_table', 11),
(19, '2018_09_24_115315_create_tresnaksa_table', 12),
(20, '2018_09_24_144823_create_naksa_table', 13),
(21, '2018_09_24_153813_create_sarjimin_table', 14),
(22, '2018_09_25_044631_create_wadasarjimin_table', 15),
(23, '2018_09_25_052441_create_shrestauparsifaris_table', 16),
(24, '2018_09_25_052614_create_muchulka_table', 16),
(25, '2018_09_25_052629_create_muchulkaguthi_table', 16),
(26, '2018_09_25_085229_create_suchanatas_table', 17),
(27, '2018_09_26_055051_create_shresta_table', 18),
(28, '2018_09_26_081050_create_suchanatasguthi_table', 19),
(29, '2018_09_26_093800_create_gharjagganamsarikitani_table', 20),
(30, '2018_09_26_141157_create_gharkayamsifaris_table', 21),
(31, '2018_09_27_044920_create_nonprofit_table', 22),
(32, '2018_09_27_054529_create_SasthaNabikaranSifaris_table', 23),
(33, '2018_09_27_063442_create_SasthaDartaSifaris_table', 24),
(34, '2018_09_27_070557_create_NirmanBebasaye_table', 25),
(35, '2018_09_27_073750_create_BebasayeDartaNaya_table', 26),
(36, '2018_09_27_094130_create_Panno_table', 27),
(37, '2018_09_27_104415_create_UdyogDartaSifaris_table', 28),
(38, '2018_09_27_104527_create_BebasayeBanda_table', 28),
(39, '2018_09_27_104549_create_KarobarPanno_table', 28),
(40, '2019_09_27_104415_create_UdyogDartaSifaris_table', 29),
(41, '2018_09_28_092519_create_Scholarship_table', 30),
(42, '2018_09_29_074106_create_bipanna_table', 31),
(43, '2018_10_02_064017_create_UpacharSahayogSifaris_table', 32),
(44, '2018_10_03_061611_create_GeneralSifaris_table', 33),
(45, '2018_10_03_073539_create_GeneralSifarisEnglish_table', 34),
(46, '2018_10_03_092247_create_FarakNameTharNagarikta_table', 35),
(47, '2018_10_03_135826_create_FarakFarakNameTharPramanit_table', 35),
(48, '2019_10_03_092247_create_FarakNameTharNagarikta_table', 36),
(49, '2018_10_16_050756_create_FarakFarakJanmaMitiPramanit_table', 37),
(50, '2018_10_19_085734_create_FarakFarakEnglishHijePramanit_table', 38),
(51, '2018_10_19_095820_create_KhulaiPathayekoSifaris_table', 39),
(52, '2019_10_19_095820_create_KhulaiPathayekoSifaris_table', 40),
(53, '2018_11_11_123456_create_category_table', 41),
(54, '2018_11_20_062438_create_unmarried_verification_table', 42),
(55, '2018_11_21_062637_create_addressverification_table', 42),
(56, '2018_11_20_053704_create_birth_date_verifications_table', 43),
(57, '2018_11_21_050918_create_relation_verifications_table', 43),
(58, '2018_11_21_051455_create_relation_verification_details_table', 43),
(59, '2018_11_21_081449_create_occupation_verifications_table', 43),
(60, '2018_11_23_045813_create_asthaie_basobas_sifaris_table', 43),
(61, '2018_11_23_050737_create_basobas_sifaris_details_table', 43),
(62, '2018_11_23_071746_create_esthaie_basobas_sifaris_table', 43),
(63, '2018_11_23_072819_create_esthaie_basobas_details_table', 43),
(64, '2018_11_23_084707_create_marriage_verifications_table', 43),
(65, '2018_11_23_104409_create_janmamiti_pramanits_table', 43),
(66, '2018_11_23_065530_create_table_sadak_khane_sifaris', 44),
(67, '2018_11_23_095822_create_nepal_sarkarko_naamma_bato_kayem_sifaris_table', 44),
(68, '2018_11_25_051525_create_dhara_jadan_sifaris_table', 45),
(69, '2018_11_25_053141_create_dhara_jadan_sifaris_detail_table', 45),
(70, '2018_11_25_055206_create_abibahit_pramanits_table', 45),
(71, '2018_11_25_062912_create_nata_pramanits_table', 45),
(72, '2018_11_25_063427_create_nata_pramanit_details_table', 45),
(73, '2018_11_25_075325_create_tinpuste_pramanits_table', 45),
(74, '2018_11_25_075842_create_tinpuste_jagga_bibarans_table', 45),
(75, '2018_11_25_080147_create_tinpuste_detail_bibarans_table', 45),
(76, '2018_11_25_090143_create_bijuli_jadan_sifaris_table', 45),
(77, '2018_11_25_090530_create_bijuli_jadan_sifaris_detail_table', 45),
(78, '2018_11_25_110025_create_apanga_parichaye_patra_sifaris_table', 45),
(79, '2018_11_26_052609_create_internal_migration_sifaris_table', 45),
(80, '2018_11_26_053214_create_internal_migration_details_table', 45),
(81, '2018_11_26_065330_create_nabalak_parichaye_patra_sifaris_table', 45),
(82, '2018_11_26_083732_create_kitta_kat_sifaris_table', 45),
(83, '2018_11_26_084203_create_kitta_kat_jagga_bibaran_table', 45),
(84, '2018_11_26_091614_create_mritak_hakdar_sifaris_table', 45),
(85, '2018_11_26_092149_create_mritak_hakdar_sifaris_details_table', 45),
(86, '2018_11_27_061247_create_ghar_bato_pramanit_table', 45),
(87, '2018_11_27_061628_create_ghar_bato_pramanit_detail_table', 45),
(88, '2018_11_27_074635_create_char_killa_pramanit_tabel', 45),
(89, '2018_11_27_074823_create_char_killa_pramanit_detail_table', 45),
(90, '2018_11_27_084251_create_jagga_dhani_pramanpatra_pratilipi_sifaris', 45),
(91, '2018_11_27_100002_create_jagga_dhani_purjama_gharkayem_sifaris', 45),
(92, '2018_11_28_045911_create_ghar_patal_sifaris_table', 45),
(93, '2018_12_19_064310_create_table_ghar_jagga_namsari_sifaris', 46),
(94, '2018_12_19_071759_create_ghar_janaune_sifaris_table', 46),
(95, '2019_01_02_054038_property_valuation', 46),
(96, '2019_01_02_071351_property_valuation_details', 46),
(97, '2019_01_02_082328_create_tax_clearances_table', 46),
(98, '2019_01_03_081559_create_jet_machines_table', 46),
(99, '2019_01_06_070412_create_court_fee_narakhne_sifaris_table', 46),
(100, '2019_01_06_093420_create_mohi_lagat_katta_sifaris_table', 46),
(101, '2019_01_06_112933_create_kotha_khali_sifaris_table', 46);

-- --------------------------------------------------------

--
-- Table structure for table `mohi_lagat_katta_sifaris`
--

CREATE TABLE `mohi_lagat_katta_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `seat_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `total_area` text COLLATE utf8mb4_unicode_ci,
  `relation_title` text COLLATE utf8mb4_unicode_ci,
  `relation_name` text COLLATE utf8mb4_unicode_ci,
  `second_relation_title` text COLLATE utf8mb4_unicode_ci,
  `second_relation_name` text COLLATE utf8mb4_unicode_ci,
  `sifaris_date` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mritak_hakdar_sifaris`
--

CREATE TABLE `mritak_hakdar_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `registration_date` text COLLATE utf8mb4_unicode_ci,
  `registration_no` text COLLATE utf8mb4_unicode_ci,
  `death_person_title` text COLLATE utf8mb4_unicode_ci,
  `death_person_name` text COLLATE utf8mb4_unicode_ci,
  `hakdar_sankya` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mritak_hakdar_sifaris`
--

INSERT INTO `mritak_hakdar_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `sabik_address`, `person_title`, `person_name`, `registration_date`, `registration_no`, `death_person_title`, `death_person_name`, `hakdar_sankya`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'k', '2075-06-05', 'sdf', 'श्री', 'sdf', '2075-08-17', '9', 'श्री', 'jh', 'nm', NULL, NULL, NULL, NULL, '9', '2018-12-01 23:48:02', '2018-12-01 23:48:02'),
(2, '२०७५/०७६', 'k', 'jhh', 'khjjh', 'श्री', 'jkh', 'jkh', 'jkh', 'श्री', 'jkh', 'jkh', NULL, NULL, NULL, NULL, '9', '2018-12-16 04:02:07', '2018-12-16 04:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `mritak_hakdar_sifaris_details`
--

CREATE TABLE `mritak_hakdar_sifaris_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `mritak_hakdar_id` text COLLATE utf8mb4_unicode_ci,
  `hakdar_full_name` text COLLATE utf8mb4_unicode_ci,
  `relation` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `house_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `batto_name` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mritak_hakdar_sifaris_details`
--

INSERT INTO `mritak_hakdar_sifaris_details` (`id`, `mritak_hakdar_id`, `hakdar_full_name`, `relation`, `father_name`, `citizenship_no`, `house_no`, `kitta_no`, `batto_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'hj', 'jk', 'j', '98', '2', '343', '34', '2018-12-01 23:48:02', '2018-12-01 23:48:02'),
(2, '2', 'kjh', 'kjh', 'jkh', 'jkh', 'kjh', 'jk', 'hjk', '2018-12-16 04:02:07', '2018-12-16 04:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `muchulka`
--

CREATE TABLE `muchulka` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `local_states` text COLLATE utf8mb4_unicode_ci,
  `wards` text COLLATE utf8mb4_unicode_ci,
  `landowner_name` text COLLATE utf8mb4_unicode_ci,
  `malpot_address` text COLLATE utf8mb4_unicode_ci,
  `landsabik_address` text COLLATE utf8mb4_unicode_ci,
  `landsabik_ward` text COLLATE utf8mb4_unicode_ci,
  `landlocal_states` text COLLATE utf8mb4_unicode_ci,
  `landwards` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `appsabik_address` text COLLATE utf8mb4_unicode_ci,
  `appsabik_ward` text COLLATE utf8mb4_unicode_ci,
  `applocal_states` text COLLATE utf8mb4_unicode_ci,
  `appward` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `landsabik_type` text COLLATE utf8mb4_unicode_ci,
  `appsabik_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `muchulka`
--

INSERT INTO `muchulka` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `office_name`, `office_address`, `sabik_address`, `sabik_ward`, `local_states`, `wards`, `landowner_name`, `malpot_address`, `landsabik_address`, `landsabik_ward`, `landlocal_states`, `landwards`, `kitta_no`, `area`, `appsabik_address`, `appsabik_ward`, `applocal_states`, `appward`, `applicant_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `landsabik_type`, `appsabik_type`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '3', '2075-06-05', 'सर्जमिन गरी मुचुल्का पठाएको सम्बन्धमा', '34', 'ilam', '4', '4', 'ईलाम नगरपालिका', '१', '4', 'इलाम', '4', '4', 'ईलाम नगरपालिका', '१', '6', '23', '4', '4', 'ईलाम नगरपालिका', '१', '330', 'sanjaya ghimire', 'हाेम', 'इलाम', '३४४३', '34453', '9', 'गा.वि.स.', 'गा.वि.स.', 'नगरपालिका', 'का. बा वडा अध्यक्ष', '2018-09-25 13:30:36', '2018-09-25 14:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `muchulkaguthi`
--

CREATE TABLE `muchulkaguthi` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `landowner_name` text COLLATE utf8mb4_unicode_ci,
  `malpot_address` text COLLATE utf8mb4_unicode_ci,
  `landsabik_address` text COLLATE utf8mb4_unicode_ci,
  `landsabik_ward` text COLLATE utf8mb4_unicode_ci,
  `landlocal_states` text COLLATE utf8mb4_unicode_ci,
  `landwards` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `appsabik_address` text COLLATE utf8mb4_unicode_ci,
  `appsabik_ward` text COLLATE utf8mb4_unicode_ci,
  `applocal_states` text COLLATE utf8mb4_unicode_ci,
  `appward` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `landsabik_type` text COLLATE utf8mb4_unicode_ci,
  `appsabik_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `muchulkaguthi`
--

INSERT INTO `muchulkaguthi` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `office_name`, `office_address`, `landowner_name`, `malpot_address`, `landsabik_address`, `landsabik_ward`, `landlocal_states`, `landwards`, `kitta_no`, `area`, `appsabik_address`, `appsabik_ward`, `applocal_states`, `appward`, `applicant_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `landsabik_type`, `appsabik_type`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '२०७५/०७६', '4', '2075-06-05', 'सर्जमिन गरी मुचुल्का पठाएको सम्बन्धमा', 'ilam', 'ilam', 'sanjaya', 'इलाम', 'kd', 'dd', 'ईलाम नगरपालिका', '१', 'dff', '3', 'sdfs', 'd', 'ईलाम नगरपालिका', '१', 'k', 'sanju', 'हाेम', 'इलाम', '343', '34453', 'महानगरपालिका', 'गा.वि.स.', 'का. बा वडा अध्यक्ष', 2, '2018-09-25 14:26:06', '2018-09-25 15:46:35'),
(4, '२०७५/०७६', NULL, 'jhj', 'सर्जमिन गरी मुचुल्का पठाएको सम्बन्धमा', 'hjk', 'hkj', 'hj', 'hj', 'hj', 'jh', 'jh', 'hj', 'hjk', 'hjk', 'hjk', 'hj', 'h', 'jh', 'jkh', 'jkh', 'jkh', 'jkh', 'hk', 'h', 'गा.वि.स.', 'गा.वि.स.', 'वडा अध्यक्ष', 1, '2019-01-09 23:54:31', '2019-01-09 23:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `nabalak_parichaye_patra_sifaris`
--

CREATE TABLE `nabalak_parichaye_patra_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `nabalak_relation` text COLLATE utf8mb4_unicode_ci,
  `nabalak_full_name` text COLLATE utf8mb4_unicode_ci,
  `nabalak_full_name_english` text COLLATE utf8mb4_unicode_ci,
  `sex` text COLLATE utf8mb4_unicode_ci,
  `sex_english` text COLLATE utf8mb4_unicode_ci,
  `place_of_birth` text COLLATE utf8mb4_unicode_ci,
  `place_of_birth_english` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `father_name_english` text COLLATE utf8mb4_unicode_ci,
  `mother_name` text COLLATE utf8mb4_unicode_ci,
  `mother_name_english` text COLLATE utf8mb4_unicode_ci,
  `guardian_name` text COLLATE utf8mb4_unicode_ci,
  `guardian_name_english` text COLLATE utf8mb4_unicode_ci,
  `guardian_address` text COLLATE utf8mb4_unicode_ci,
  `pa_district` text COLLATE utf8mb4_unicode_ci,
  `pa_palika` text COLLATE utf8mb4_unicode_ci,
  `palika_option` text COLLATE utf8mb4_unicode_ci,
  `pa_ward_no` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth_ad` text COLLATE utf8mb4_unicode_ci,
  `applicant_full_name` text COLLATE utf8mb4_unicode_ci,
  `relation_with_applicant` text COLLATE utf8mb4_unicode_ci,
  `application_date` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `first_person_title` text COLLATE utf8mb4_unicode_ci,
  `first_person_name` text COLLATE utf8mb4_unicode_ci,
  `second_person_title` text COLLATE utf8mb4_unicode_ci,
  `second_person_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nabalak_parichaye_patra_sifaris`
--

INSERT INTO `nabalak_parichaye_patra_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `office_address`, `nabalak_relation`, `nabalak_full_name`, `nabalak_full_name_english`, `sex`, `sex_english`, `place_of_birth`, `place_of_birth_english`, `father_name`, `father_name_english`, `mother_name`, `mother_name_english`, `guardian_name`, `guardian_name_english`, `guardian_address`, `pa_district`, `pa_palika`, `palika_option`, `pa_ward_no`, `date_of_birth`, `date_of_birth_ad`, `applicant_full_name`, `relation_with_applicant`, `application_date`, `sabik_address`, `first_person_title`, `first_person_name`, `second_person_title`, `second_person_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'klj', 'hjk', 'hkjh', 'jh', 'jh', 'hjk', 'पुरुष', 'Male', 'jkh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'महानगरपालिका', 'hjk', 'hjk', '2018-12-05', 'jkh', 'jkh', 'jk', 'hjk', 'श्री', 'hjk', 'श्री', 'jh', 'jh', 'jkh', 'jkh', 'jk', '9', '2018-12-16 04:01:56', '2018-12-16 04:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `nagarikta`
--

CREATE TABLE `nagarikta` (
  `id` int(10) UNSIGNED NOT NULL,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `karyalaya` text COLLATE utf8mb4_unicode_ci,
  `ward_num` text COLLATE utf8mb4_unicode_ci,
  `letter_subject1` text COLLATE utf8mb4_unicode_ci,
  `letter_subject2` text COLLATE utf8mb4_unicode_ci,
  `district_name` text COLLATE utf8mb4_unicode_ci,
  `loc_name` text COLLATE utf8mb4_unicode_ci,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `grand_name` text COLLATE utf8mb4_unicode_ci,
  `parent_name` text COLLATE utf8mb4_unicode_ci,
  `dob` text COLLATE utf8mb4_unicode_ci,
  `age` text COLLATE utf8mb4_unicode_ci,
  `app_name` text COLLATE utf8mb4_unicode_ci,
  `n_type` text COLLATE utf8mb4_unicode_ci,
  `n_name` text COLLATE utf8mb4_unicode_ci,
  `n_address` text COLLATE utf8mb4_unicode_ci,
  `n_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `ng_option` text COLLATE utf8mb4_unicode_ci,
  `child_option` text COLLATE utf8mb4_unicode_ci,
  `ch_option` text COLLATE utf8mb4_unicode_ci,
  `bodartha` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nagarikta`
--

INSERT INTO `nagarikta` (`id`, `issued_date`, `karyalaya`, `ward_num`, `letter_subject1`, `letter_subject2`, `district_name`, `loc_name`, `ward_no`, `grand_name`, `parent_name`, `dob`, `age`, `app_name`, `n_type`, `n_name`, `n_address`, `n_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `ng_option`, `child_option`, `ch_option`, `bodartha`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2075-06-05', 'वडा अध्यक्ष ', '१', 'नागरिकता', 'पाउनको लागि सिफारिस गरि पाउँ।', 'इलाम', 'ईलाम नगरपालिका', '१', 'df', 'df', '2035/3/4', 'df', 'fdd', NULL, 'dfs', 'k', 'sdf', 'हाेम', 'इलाम', '44', '999', 'प्रतिलिपि', 'बुहारी', 'श्रीमती', '<p><strong>bodartha</strong></p>\r\n\r\n<ol>\r\n	<li><strong>ilam mun</strong></li>\r\n	<li><strong>ghfg</strong></li>\r\n	<li><em><strong>ghbh</strong></em></li>\r\n</ol>', 2, '2018-09-24 16:49:03', '2018-09-25 15:31:29'),
(2, '2075-06-05', 'वडा अध्यक्ष ', '१', 'नागरिकता', 'पाउनको लागि सिफारिस गरि पाउँ।', 'इलाम', 'ईलाम नगरपालिका', '१', 'jkh', 'hb', '987jk', 'jkh', 'jkhk', 'प्रतिलिपि', 'hjgj', 'jh', 'jkh', 'sanjaya', 'ilam', '890', '1', 'प्रतिलिपि', 'नाति', 'छोरा', '<p>jkhghj</p>', 9, '2018-12-13 01:51:41', '2018-12-13 01:51:41'),
(3, '2075-06-21', 'वडा अध्यक्ष ', '१', 'नागरिकता', 'पाउनको लागि सिफारिस गरि पाउँ।', 'इलाम', 'ईलाम नगरपालिका', '१', 'jkh', 'hk', 'hjk', 'hkj', 'hj', 'प्रमाण-पत्र', 'jk', 'hjk', 'hjkh', 'hkj', 'hjk', 'hjk', 'h', 'प्रमाण-पत्र', 'नाति', 'छोरा', '<p>jk</p>', 9, '2018-12-16 02:12:15', '2018-12-16 02:12:15'),
(4, '2075-06-21', 'वडा अध्यक्ष ', '५', 'नागरिकता', 'पाउनको लागि सिफारिस गरि पाउँ।', 'गोर्खा', 'पालुङटार नगरपालिका', '५', 'ui', 'jhh', 'g', 'jhgjg', 'jg', 'प्रमाण-पत्र', 'jhgh', 'ghg', 'hjg', 'jhg', 'hjgh', 'gh', 'gj', 'प्रमाण-पत्र', 'नाति', 'छोरा', '<p>hjg</p>', 5, '2018-12-16 06:47:41', '2018-12-16 06:47:41'),
(5, '2075-06-21', 'वडा अध्यक्ष ', '१', 'नागरिकता', 'पाउनको लागि सिफारिस गरि पाउँ।', 'इलाम', 'ईलाम नगरपालिका', '१', 'jk', 'hh', 'hgfgf', 'hjkh', 'kj', 'प्रमाण-पत्र', 'hj', 'hjjkh', 'kjh', 'h', 'khj', 'khj', 'khj', 'प्रमाण-पत्र', 'नाति', 'छोरा', '<p>kj</p>', 1, '2019-01-08 23:28:25', '2019-01-08 23:28:25'),
(6, '2075-06-21', 'वडा अध्यक्ष ', '१', 'नागरिकता', 'पाउनको लागि सिफारिस गरि पाउँ।', 'इलाम', 'ईलाम नगरपालिका', '१', 'hj', 'hkj', 'hkj', 'hkj', 'hkj', 'प्रमाण-पत्र', 'hjk', 'hjk', 'hjk', 'hjkh', 'jkh', 'jkh', 'jkh', 'प्रमाण-पत्र', 'नाति', 'छोरा', '<p>hjk</p>', 1, '2019-02-23 07:28:39', '2019-02-23 07:28:39'),
(7, '2075-06-21', 'वडा अध्यक्ष ', '१', 'नागरिकता', 'पाउनको लागि सिफारिस गरि पाउँ।', 'इलाम', 'ईलाम नगरपालिका', '१', 'hjk', 'jkh', 'jkh', 'jkh', 'jkh', 'प्रमाण-पत्र', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'प्रमाण-पत्र', 'नाति', 'छोरा', '<p>jkh</p>', 1, '2019-02-25 05:58:17', '2019-02-25 05:58:17'),
(8, '2075-06-21', 'वडा अध्यक्ष ', '१', 'नागरिकता', 'पाउनको लागि सिफारिस गरि पाउँ।', 'इलाम', 'ईलाम नगरपालिका', '१', 'j', 'lj', 'klj', 'kljkl', 'jkl', 'प्रमाण-पत्र', 'jkl', 'jkl', 'jkl', 'jlk', 'jkl', 'jkl', 'jlk', 'प्रमाण-पत्र', 'नाति', 'छोरा', '<p>jkl</p>', 1, '2019-02-25 05:58:34', '2019-02-25 05:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `naksa`
--

CREATE TABLE `naksa` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_district` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `nibedak` text COLLATE utf8mb4_unicode_ci,
  `plot_local_state_name` text COLLATE utf8mb4_unicode_ci,
  `oda_ko_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `naksa`
--

INSERT INTO `naksa` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `karyalaya_name`, `karyalaya_district`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `nibedak`, `plot_local_state_name`, `oda_ko_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `sabik_type`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '3', '2075-06-05', 'नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'नापी कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '9', 'golakharka', '4', 'sanjaya', 'ईलाम नगरपालिका', '7', 'sanjaya ghimire', 'हाेम', 'इलाम', '3453', '123', 'गा.वि.स.', 'का. बा वडा अध्यक्ष', 2, '2018-09-24 22:03:38', '2018-09-24 22:03:38'),
(2, '२०७५/०७६', '9', '2075-06-05', 'नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'नापी कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '१', 'jh', '09', 'sdf', 'ईलाम नगरपालिका', 'hjgh', 'jhg', 'sanjaya', 'jk', '890', '1', 'गा.वि.स.', 'वडा अध्यक्ष', 9, '2018-12-13 01:56:18', '2018-12-13 01:56:18'),
(3, '२०७५/०७६', 'h', 'kh', 'नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'khj', 'h', 'khj', 'hj', 'kh', 'jkhj', 'h', 'hj', 'hjk', 'hjk', 'h', 'jh', 'h', 'kh', 'गा.वि.स.', 'वडा अध्यक्ष', 1, '2019-01-08 23:43:10', '2019-01-08 23:43:10'),
(4, '२०७५/०७६', 'mj', 'jhj', 'नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'hk', 'hkj', 'hkj', 'hjk', 'hjkh', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'h', 'hj', 'hj', 'गा.वि.स.', 'वडा अध्यक्ष', 1, '2019-01-10 00:04:45', '2019-01-10 00:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `nata_pramanits`
--

CREATE TABLE `nata_pramanits` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `application_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nata_pramanits`
--

INSERT INTO `nata_pramanits` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `person_name`, `person_title`, `application_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'kjh', 'jhk', 'jhk', 'श्री', 'hkh', 'hkj', 'hkjh', 'kh', 'kh', '9', '2018-12-16 04:01:05', '2018-12-16 04:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `nata_pramanit_details`
--

CREATE TABLE `nata_pramanit_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `nata_id` text COLLATE utf8mb4_unicode_ci,
  `relative_name` text COLLATE utf8mb4_unicode_ci,
  `relation` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nata_pramanit_details`
--

INSERT INTO `nata_pramanit_details` (`id`, `nata_id`, `relative_name`, `relation`, `created_at`, `updated_at`) VALUES
(1, '1', 'jkh', 'jhj', '2018-12-16 04:01:05', '2018-12-16 04:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `nepalsarkarko_naamma_bato_kayem_sifaris`
--

CREATE TABLE `nepalsarkarko_naamma_bato_kayem_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `palika_type` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `jagga_breadth` text COLLATE utf8mb4_unicode_ci,
  `jagga_length` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nepalsarkarko_naamma_bato_kayem_sifaris`
--

INSERT INTO `nepalsarkarko_naamma_bato_kayem_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `office_chairman`, `office_name`, `sabik_address`, `palika_type`, `kitta_no`, `area`, `jagga_breadth`, `jagga_length`, `person_title`, `person_name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '9', '2075-06-05', 'ilam nagarpalika', 'ilam', '1', NULL, '3434', '1', '1', '1', 'श्री', '1', NULL, '2018-12-05 06:17:05', '2018-12-05 06:17:05'),
(2, '२०७५/०७६', '9', '2075-06-05', 'ilam nagarpalika', 'ilam', 'q', NULL, '3434', '1', '1', '1', 'श्री', '1', '9', '2018-12-05 06:17:17', '2018-12-05 06:17:17'),
(3, '२०७५/०७६', 'jh', 'hkj', 'hjkh', 'kh', 'khk', NULL, 'hk', 'hkj', 'hkj', 'hjkh', 'श्री', 'kjh', NULL, '2018-12-16 03:29:26', '2018-12-16 03:29:26'),
(4, '२०७५/०७६', 'jkjh', 'kh', 'kh', 'hk', 'hk', NULL, 'hkh', 'kh', 'khkj', 'k', 'श्री', 'hj', NULL, '2018-12-16 03:57:11', '2018-12-16 03:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `nirmanbebasaye`
--

CREATE TABLE `nirmanbebasaye` (
  `id` int(10) UNSIGNED NOT NULL,
  `ejajat_patra_no` text COLLATE utf8mb4_unicode_ci,
  `fiscal_year` text COLLATE utf8mb4_unicode_ci,
  `location` text COLLATE utf8mb4_unicode_ci,
  `company_name` text COLLATE utf8mb4_unicode_ci,
  `ejajat_dineko_name` text COLLATE utf8mb4_unicode_ci,
  `post` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nirmanbebasaye`
--

INSERT INTO `nirmanbebasaye` (`id`, `ejajat_patra_no`, `fiscal_year`, `location`, `company_name`, `ejajat_dineko_name`, `post`, `issued_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '7', '२०७५/०७६', 'ilam', 'hari', 'san', 'IT', '2075-06-05', 'हाेम', 'इलाम', '343', '34453', '2', '2018-09-27 14:25:28', '2018-09-27 14:25:28'),
(2, 'h', 'jhk', 'hkj', 'hjk', 'hjkh', 'jkh', 'jk', 'hjk', 'jh', 'jh', 'jkh', '9', '2018-12-16 02:18:27', '2018-12-16 02:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `nonprofit`
--

CREATE TABLE `nonprofit` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `registration_no` text COLLATE utf8mb4_unicode_ci,
  `registration_date` text COLLATE utf8mb4_unicode_ci,
  `organization_name` text COLLATE utf8mb4_unicode_ci,
  `organization_address` text COLLATE utf8mb4_unicode_ci,
  `subjective_area` text COLLATE utf8mb4_unicode_ci,
  `transaction_start_date` text COLLATE utf8mb4_unicode_ci,
  `organization_email` text COLLATE utf8mb4_unicode_ci,
  `organization_contact` text COLLATE utf8mb4_unicode_ci,
  `chairman_name` text COLLATE utf8mb4_unicode_ci,
  `chairman_address` text COLLATE utf8mb4_unicode_ci,
  `chairman_email` text COLLATE utf8mb4_unicode_ci,
  `chairman_contact_no` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nonprofit`
--

INSERT INTO `nonprofit` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `registration_no`, `registration_date`, `organization_name`, `organization_address`, `subjective_area`, `transaction_start_date`, `organization_email`, `organization_contact`, `chairman_name`, `chairman_address`, `chairman_email`, `chairman_contact_no`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '3', '2075-06-05', 'गैर नाफामूलक संस्था दर्ता प्रमाण पत्र', '6', '2075-06-01', 'cyanic technology', 'kathmandu', 'software', '2075-06-15', 'info@cyanictech.com.np', '9842738103', 'sanjaya ghimire', 'kathmandu', 'sanjaya@gmail.com', '9862303052', 'hari krishna yadav', 'हाेम', 'इलाम', '३४४३', '3', '2', 'का. बा वडा अध्यक्ष', '2018-09-27 11:58:08', '2018-09-27 12:31:23'),
(2, '२०७५/०७६', 'jh', 'jhjk', 'गैर नाफामूलक संस्था दर्ता प्रमाण पत्र', 'hjh', 'h', 'kjh', 'jh', 'jh', 'jh', 'jh', 'jh', 'hj', 'jhj', 'hj', 'hj', 'hkj', 'hjk', 'hjk', 'hjk', 'jk', '9', 'वडा अध्यक्ष', '2018-12-16 02:13:02', '2018-12-16 02:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `occupation_verifications`
--

CREATE TABLE `occupation_verifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `mother_name` text COLLATE utf8mb4_unicode_ci,
  `previous_vdc_name` text COLLATE utf8mb4_unicode_ci,
  `previous_ward_no` text COLLATE utf8mb4_unicode_ci,
  `previous_district` text COLLATE utf8mb4_unicode_ci,
  `business_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occupation_verifications`
--

INSERT INTO `occupation_verifications` (`id`, `ref_no`, `issued_date`, `applicant_name`, `father_name`, `mother_name`, `previous_vdc_name`, `previous_ward_no`, `previous_district`, `business_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'j', 'hjkh', 'kh', 'jhjk', 'hjkh', 'jh', 'jhj', 'hjk', 'hkjh', 'kh', 'hkh', 'kj', 'k', '9', '2018-12-16 03:58:05', '2018-12-16 03:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(10) UNSIGNED NOT NULL,
  `office_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pannoa`
--

CREATE TABLE `pannoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `pan_office_name` text COLLATE utf8mb4_unicode_ci,
  `pan_office_address` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `pan_no_date` text COLLATE utf8mb4_unicode_ci,
  `pasal_address` text COLLATE utf8mb4_unicode_ci,
  `pasal_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `bodartha` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pannoa`
--

INSERT INTO `pannoa` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `pan_office_name`, `pan_office_address`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `person_name`, `pan_no_date`, `pasal_address`, `pasal_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `person_title`, `officer`, `bodartha`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '9', '2075-06-05', 'सिफारिस गरिएको बारे', 'करदाता सेवा कार्यालय', 'ila,m', 'ईलाम नगरपालिका', '१', '4', '4', 'sanjaya', '2075-06-01', '2075-06-08', 'cyanic', 'sanjaya ghimire', 'हाेम', 'इलाम', '44', '3', '9', 'गा.वि.स.', 'श्री', 'का. बा वडा अध्यक्ष', '<ul>\r\n	<li>ilam</li>\r\n	<li>jhapa</li>\r\n</ul>', '2018-09-27 17:07:27', '2018-09-27 17:40:00'),
(2, '२०७५/०७६', 'kjh', 'hj', 'सिफारिस गरिएको बारे', 'hjh', 'kh', 'jkh', 'kh', 'kh', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'jkh', 'jk', 'hh', 'kjh', '9', 'गा.वि.स.', 'श्री', 'वडा अध्यक्ष', '<p>hjk</p>', '2018-12-16 02:37:47', '2018-12-16 02:37:47'),
(3, '२०७५/०७६', NULL, 'hjgh', 'सिफारिस गरिएको बारे', 'ghjg', 'hjg', 'hjg', 'hjg', 'hjghj', 'hjg', 'hjg', 'hjghj', 'ghj', 'ghjg', 'hjg', 'hjg', 'hjg', 'hjg', 'hjghj', '1', 'गा.वि.स.', 'श्री', 'वडा अध्यक्ष', '<p>hjg</p>', '2019-01-09 00:36:31', '2019-01-09 00:36:31');

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
('ward_1@gmail.com', '$2y$10$RiF5d0S1VrJ6STfcdyXJsOEOtTJeoqsowV4mztOCuY0csGhTl86Fa', '2018-11-09 09:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `proceeds`
--

CREATE TABLE `proceeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_no` int(11) NOT NULL,
  `pro_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `msg_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reciever_office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reciever_office_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_text` text COLLATE utf8mb4_unicode_ci,
  `verified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proceeds`
--

INSERT INTO `proceeds` (`id`, `pro_no`, `pro_date`, `subject`, `msg_type`, `reciever_office`, `reciever_office_address`, `extra_text`, `verified_by`, `cc`, `ward`, `created_at`, `updated_at`) VALUES
(1, 1, '3432', '<p>sdf</p>', 'विषय नखुलेको', 'ilam nagarpalika', 'ilam', '<p>sdf</p>', NULL, '<p>sdf</p>', 9, '2018-12-04 01:18:36', '2018-12-04 01:18:36'),
(2, 2, '2075-08-08', '<p>chalani</p>', 'अति गोप्य', 'ilam', 'ilam mun', '<p>kaifiyat</p>', 'ilam', '<ul>\n	<li>ilam sachiwalaya</li>\n</ul>', 9, '2018-12-14 15:08:20', '2018-12-14 15:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `property_valuation`
--

CREATE TABLE `property_valuation` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `title_name` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `total_amount` text COLLATE utf8mb4_unicode_ci,
  `total_amount_dollar` text COLLATE utf8mb4_unicode_ci,
  `dollar_to_nepali` text COLLATE utf8mb4_unicode_ci,
  `ward_president` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_valuation_details`
--

CREATE TABLE `property_valuation_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `relation_id` text COLLATE utf8mb4_unicode_ci,
  `owner` text COLLATE utf8mb4_unicode_ci,
  `particular_plot_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `total_value` text COLLATE utf8mb4_unicode_ci,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(20) NOT NULL,
  `province_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `province_name_english` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`, `province_name_english`) VALUES
(1, 'प्रदेश नं १', 'Province No 1'),
(2, 'प्रदेश नं २', 'Province No 2'),
(3, 'प्रदेश नं ३', 'Province No 3'),
(4, 'प्रदेश नं ४', 'Province No 4'),
(5, 'प्रदेश नं ५', 'Province No 5'),
(6, 'प्रदेश नं ६', 'Province No 6'),
(7, 'प्रदेश नं ७', 'Province No 7');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_no` int(11) DEFAULT NULL,
  `reg_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `msg_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msg_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_office_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msg_proceed_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_text` text COLLATE utf8mb4_unicode_ci,
  `verified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `karbahi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `reg_no`, `reg_date`, `subject`, `msg_type`, `msg_date`, `sender_office`, `sender_office_address`, `msg_proceed_no`, `extra_text`, `verified_by`, `ward`, `karbahi`, `created_at`, `updated_at`) VALUES
(1, 36, '2075-08-24', '<p>this is test</p>', 'विषय नखुलेको', '2075-08-25', 'ilam', 'ilam mun', '8', '<p>kaifiyat</p>', 'ilam mun', 9, '<p>karbahi bhayeko</p>', '2018-12-09 23:43:32', '2018-12-09 23:45:49'),
(2, 55, '2075-08-01', '<p>this is text</p>', 'गोप्य', '2075-08-02', 'ilam', 'ilam mun', '1', '<p>this is kaifiyat</p>', 'ilam mun', 9, '<p>karbahi gariyeko</p>', '2018-12-14 15:04:58', '2018-12-14 15:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `relation_verifications`
--

CREATE TABLE `relation_verifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `applicant_title` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `previous_vdc_name` text COLLATE utf8mb4_unicode_ci,
  `previous_ward_no` text COLLATE utf8mb4_unicode_ci,
  `previous_district` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relation_verifications`
--

INSERT INTO `relation_verifications` (`id`, `ref_no`, `issued_date`, `applicant_title`, `applicant_name`, `previous_vdc_name`, `previous_ward_no`, `previous_district`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'kj', '2075-06-21', 'Mr', 'kj', 'j', 'klj', 'jj', 'lkj', 'lj', 'lj', 'kl', '9', '2018-12-16 03:57:38', '2018-12-16 03:57:38'),
(2, 'jbjb', 'jjbj', 'Mr', 'jjnjnjn', 'kkmkmk', 'njnj', 'mkmknjknj', NULL, NULL, NULL, NULL, '5', '2018-12-16 06:28:35', '2018-12-16 06:28:35'),
(3, '7', '2075-06-21', 'Mr', 'jkh', 'hj', 'hjjk', 'hjk', 'jkh', 'jkh', 'jkh', 'jkh', '1', '2019-01-26 03:15:54', '2019-01-26 03:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `relation_verification_details`
--

CREATE TABLE `relation_verification_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `relation_id` int(11) DEFAULT NULL,
  `relative_title` text COLLATE utf8mb4_unicode_ci,
  `relative_name` text COLLATE utf8mb4_unicode_ci,
  `relation` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relation_verification_details`
--

INSERT INTO `relation_verification_details` (`id`, `relation_id`, `relative_title`, `relative_name`, `relation`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr', 'l', 'jlj', '2018-12-16 03:57:38', '2018-12-16 03:57:38'),
(2, 2, 'Mr', 'knknk', 'knknknk', '2018-12-16 06:28:35', '2018-12-16 06:28:35'),
(5, 3, 'Mr', 'jkh', 'jkh', '2019-01-26 03:16:04', '2019-01-26 03:16:04'),
(6, 3, 'Mr', 'jghjg', 'jkgjh', '2019-01-26 03:16:04', '2019-01-26 03:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `resolver`
--

CREATE TABLE `resolver` (
  `nibedak_name` text,
  `nibedak_address` text,
  `nibedak_citizenship_no` text,
  `nibedak_nid` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sadak_khane_sifaris`
--

CREATE TABLE `sadak_khane_sifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `application_submit_date` text COLLATE utf8mb4_unicode_ci,
  `sadak_location` text COLLATE utf8mb4_unicode_ci,
  `work_complete_days` text COLLATE utf8mb4_unicode_ci,
  `swikrit_sadak_name` text COLLATE utf8mb4_unicode_ci,
  `swikrit_pradan_unit` text COLLATE utf8mb4_unicode_ci,
  `deposite_amount` text COLLATE utf8mb4_unicode_ci,
  `applicant_address` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sadak_khane_sifaris`
--

INSERT INTO `sadak_khane_sifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `person_title`, `person_name`, `application_submit_date`, `sadak_location`, `work_complete_days`, `swikrit_sadak_name`, `swikrit_pradan_unit`, `deposite_amount`, `applicant_address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'jhjh', 'jjk', 'श्री', 'kjhjkh', NULL, 'khj', 'khj', 'jk', 'hjk', NULL, 'jkh', '9', '2018-12-16 03:29:06', '2018-12-16 03:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `sarjimin`
--

CREATE TABLE `sarjimin` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `oda_ward` text COLLATE utf8mb4_unicode_ci,
  `district` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarjimin`
--

INSERT INTO `sarjimin` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `karyalaya_name`, `oda_ward`, `district`, `local_state`, `ward`, `person_name`, `sabik_address`, `sabik_ward`, `kitta_no`, `area`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `sabik_type`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '4', '2075-06-05', 'सूचना टाँस गरी सर्जमिन गरी पठाई दिने', 'वडा कार्यालय', '1', 'इलाम', 'ईलाम नगरपालिका', '१', 'ilam', '6', '4', '454', '34', 'sanjaya ghimire', 'हाेम', 'इलाम', '343', '5', 'नगरपालिका', 'का. बा वडा अध्यक्ष', '9', '2018-09-24 23:03:17', '2018-09-24 23:43:53'),
(2, '२०७५/०७६', 'j', 'h', 'सूचना टाँस गरी सर्जमिन गरी पठाई दिने', 'वडा कार्यालय', 'hjjkk', 'hkh', 'kjh', 'kjh', 'kjh', 'khjk', 'hkhj', 'hj', 'jk', 'jk', 'hh', 'jkh', 'jkh', 'jkh', 'गा.वि.स.', 'वडा अध्यक्ष', '1', '2019-01-09 00:00:10', '2019-01-09 00:00:10'),
(3, '२०७५/०७६', 'jh', 'h', 'सूचना टाँस गरी सर्जमिन गरी पठाई दिने', 'वडा कार्यालय', 'khk', 'hkjh', 'jkh', 'hj', 'hjjk', 'hjk', 'hjk', 'hjk', 'hjkh', 'jh', 'jkh', NULL, 'hjjh', 'jkh', 'गा.वि.स.', 'वडा अध्यक्ष', '4', '2019-01-10 03:34:02', '2019-01-10 03:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `sasthadartasifarisa`
--

CREATE TABLE `sasthadartasifarisa` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `organization_name` text COLLATE utf8mb4_unicode_ci,
  `organization_type` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sasthadartasifarisa`
--

INSERT INTO `sasthadartasifarisa` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `office_chairman`, `office_name`, `letter_subject`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `organization_name`, `organization_type`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '5', '2075-06-05', 'sanjaya', 'ilam', 'सिफारिस सम्बन्धमा', 'ईलाम नगरपालिका', '१', '4', '4', 'cyanic technology', 's/w company', 'sanjaya ghimire', 'हाेम', 'इलाम', '44', '5', '2', 'गा.वि.स.', 'का. बा वडा अध्यक्ष', '2018-09-27 13:42:29', '2018-09-27 14:02:44'),
(2, '२०७५/०७६', 'jh', 'khj', 'hj', 'hj', 'सिफारिस सम्बन्धमा', 'jh', 'hjjk', 'hjk', 'hjk', 'hh', 'jk', 'h', 'j', 'hjk', 'hjk', 'hjk', '9', 'गा.वि.स.', 'वडा अध्यक्ष', '2018-12-16 02:17:03', '2018-12-16 02:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `sasthanabikaransifaris`
--

CREATE TABLE `sasthanabikaransifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `organization_name` text COLLATE utf8mb4_unicode_ci,
  `sastha_chalanino` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sasthanabikaransifaris`
--

INSERT INTO `sasthanabikaransifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `office_chairman`, `office_name`, `letter_subject`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `organization_name`, `sastha_chalanino`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `sabik_type`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '4', '2075-06-05', 'sanjaya', 'fdf', 'सिफारिस सम्बन्धमा', 'ईलाम नगरपालिका', '१', '4', '4', 'cyanic technology', '42', 'sanju', 'हाेम', 'इलाम', '3', '34453', 'नगरपालिका', 'वडा अध्यक्ष', '2', '2018-09-27 12:59:16', '2018-09-27 12:59:16'),
(2, '२०७५/०७६', '4', '2075-06-05', 'sanjaya', 'fdf', 'सिफारिस सम्बन्धमा', 'ईलाम नगरपालिका', '१', '4', '4', 'cyanic technology', NULL, 'sanju', 'हाेम', 'इलाम', '3', '34453', 'नगरपालिका', 'का. बा वडा अध्यक्ष', '2', '2018-09-27 14:04:23', '2018-09-27 14:04:23'),
(3, '२०७५/०७६', 'jh', 'hj', 'hjk', 'hjkh', 'सिफारिस सम्बन्धमा', 'jkh', 'jh', 'jkh', 'kjh', 'kjh', NULL, 'jkh', 'jk', 'jh', 'jh', 'jh', 'गा.वि.स.', 'वडा अध्यक्ष', '9', '2018-12-16 02:15:33', '2018-12-16 02:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `father_name` text COLLATE utf8mb4_unicode_ci,
  `mother_name` text COLLATE utf8mb4_unicode_ci,
  `children_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `address_type` text COLLATE utf8mb4_unicode_ci,
  `economy_type` text COLLATE utf8mb4_unicode_ci,
  `children_gender` text COLLATE utf8mb4_unicode_ci,
  `children_title` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `local_state`, `sabik_address`, `sabik_ward`, `father_name`, `mother_name`, `children_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `sabik_type`, `address_type`, `economy_type`, `children_gender`, `children_title`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '4', '2075-06-05', 'छात्रवृत्ति सिफारिस', 'ईलाम नगरपालिका', '4', '4', 'fd', 'sdf', 'sdf', 'dsf', 'हाेम', 'इलाम', '३४४३', '5', 'नगरपालिका', 'अस्थायी', 'न्युन', 'छोरी', 'सुश्री', 'का. बा वडा अध्यक्ष', '9', '2018-09-28 17:18:41', '2018-09-28 18:11:11'),
(2, '२०७५/०७६', 'jk', 'hjh', 'छात्रवृत्ति सिफारिस', 'hjk', 'hk', 'hjk', 'hjk', 'hj', 'hjkh', 'kj', 'hjk', 'hjk', 'hjk', 'jk', 'गा.वि.स.', 'स्थायी', 'कमजोर', 'छोरा', 'श्री', 'वडा अध्यक्ष', '9', '2018-12-16 03:24:32', '2018-12-16 03:24:32'),
(3, '२०७५/०७६', '८७५४८३\\', '2075-06-21', 'छात्रवृत्ति सिफारिस', 'पालुङटार नगरपालिका', 'फ्जेफ्जे', '३४', 'qwddwd', 'edfe3fer', 'xwewcdec', 'लुतन दुलाल', NULL, NULL, NULL, NULL, 'गा.वि.स.', 'स्थायी', 'कमजोर', 'छोरा', 'श्री', 'वडा अध्यक्ष', '5', '2018-12-16 06:41:42', '2018-12-16 06:41:42'),
(4, '२०७५/०७६', 'h', 'jh', 'छात्रवृत्ति सिफारिस', 'hkj', 'hk', 'hjk', 'hkj', 'hjk', 'hjk', 'hjk', 'hk', 'k', 'kh', 'kjh', 'गा.वि.स.', 'स्थायी', 'कमजोर', 'छोरा', 'श्री', 'वडा अध्यक्ष', '1', '2019-01-24 02:47:09', '2019-01-24 02:47:09'),
(5, '२०७५/०७६', '100', '2075-06-21', 'छात्रवृत्ति सिफारिस', 'ईलाम नगरपालिका', 'gfhfg', '5', 'gfhfh', 'gfhgfh', 'gfhhgfh', 'gfhdgfhgfh', 'shailen', 'shailen', '1123', '12', 'गा.वि.स.', 'स्थायी', 'कमजोर', 'छोरा', 'श्री', 'वडा अध्यक्ष', '9', '2019-03-26 05:44:18', '2019-03-26 05:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `shresta`
--

CREATE TABLE `shresta` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `grand_father` text COLLATE utf8mb4_unicode_ci,
  `father` text COLLATE utf8mb4_unicode_ci,
  `child_name` text COLLATE utf8mb4_unicode_ci,
  `prop_type` text COLLATE utf8mb4_unicode_ci,
  `sabik_vdc_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward_no` text COLLATE utf8mb4_unicode_ci,
  `nagarpalika_name` text COLLATE utf8mb4_unicode_ci,
  `ward_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `jagga_dhani` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `grand_child` text COLLATE utf8mb4_unicode_ci,
  `child` text COLLATE utf8mb4_unicode_ci,
  `sabik` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shresta`
--

INSERT INTO `shresta` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `office_name`, `office_address`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `grand_father`, `father`, `child_name`, `prop_type`, `sabik_vdc_name`, `sabik_ward_no`, `nagarpalika_name`, `ward_no`, `kitta_no`, `area`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `jagga_dhani`, `sabik_type`, `grand_child`, `child`, `sabik`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '7', '2075-06-05', 'श्रेस्ता कार्यान्वयन सिफारिस', 'jhjhsdf', 'sdf', 'ईलाम नगरपालिका', '१', '3', '3', '33', 'sd', 'ghgh', 'निवेदकको एकलौटी', 'hjhfs,sdf', '2,34', 'ईलाम नगरपालिका,ईलाम नगरपालिका', '१,१', '234,23', '234,545', 'sanjaya ghimire', 'हाेम', 'इलाम', '44', '3', 'मेरो', 'गा.वि.स.', 'नाती', 'छोरी', 'गा.वि.स.', 'का. बा वडा अध्यक्ष', '9', '2018-09-26 13:46:01', '2018-09-26 15:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `shrestauparsifaris`
--

CREATE TABLE `shrestauparsifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_district` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `owner_name` text COLLATE utf8mb4_unicode_ci,
  `of_name` text COLLATE utf8mb4_unicode_ci,
  `of_address` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shrestauparsifaris`
--

INSERT INTO `shrestauparsifaris` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `karyalaya_name`, `karyalaya_district`, `sabik_address`, `sabik_ward`, `local_state`, `ward`, `owner_name`, `of_name`, `of_address`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'w', '2075-06-05', 'मानो चामोल सिफारिस', 'भुमि सुधार तथा मालपोत कार्यालय', 'इलाम', '4', '4', 'ईलाम नगरपालिका', '१', '4', 'भुमि सुधार तथा मालपोत कार्यालय', 'इलाम', 'sanjaya ghimire', 'ds', 'sdf', 'sd34', '3', '9', 'गा.वि.स.', 'वडा सचिब', '2018-09-25 12:54:29', '2018-09-25 13:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `suchanatas`
--

CREATE TABLE `suchanatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `local_states` text COLLATE utf8mb4_unicode_ci,
  `wards` text COLLATE utf8mb4_unicode_ci,
  `landowner_name` text COLLATE utf8mb4_unicode_ci,
  `malpot_address` text COLLATE utf8mb4_unicode_ci,
  `landsabik_address` text COLLATE utf8mb4_unicode_ci,
  `landsabik_ward` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `appsabik_address` text COLLATE utf8mb4_unicode_ci,
  `appsabik_ward` text COLLATE utf8mb4_unicode_ci,
  `applocal_states` text COLLATE utf8mb4_unicode_ci,
  `appward` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `home_type2` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `landsabik_type` text COLLATE utf8mb4_unicode_ci,
  `appsabik_type` text COLLATE utf8mb4_unicode_ci,
  `home_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suchanatas`
--

INSERT INTO `suchanatas` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `karyalaya_name`, `sabik_address`, `sabik_ward`, `local_states`, `wards`, `landowner_name`, `malpot_address`, `landsabik_address`, `landsabik_ward`, `kitta_no`, `area`, `appsabik_address`, `appsabik_ward`, `applocal_states`, `appward`, `applicant_name`, `home_type2`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `sabik_type`, `landsabik_type`, `appsabik_type`, `home_type`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '2', '2075-06-05', 'सूचना पठाएको सम्बन्धमा', 'श्री यो जो सँग सम्बन्धित छ', '4', '4', 'ईलाम नगरपालिका', '१', 'sanjaya', 'इलाम', '4', '4', '445', '34', '4', '4', 'ईलाम नगरपालिका', '१', 'ram', 'नियमित गर्न', 'sanjaya ghimire', 'हाेम', 'इलाम', '3', '5', 'गा.वि.स.', 'गा.वि.स.', 'नगरपालिका', 'नियमित गर्न', 'वडा अध्यक्ष', '2', '2018-09-26 12:04:18', '2018-09-26 12:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `suchanatasguthi`
--

CREATE TABLE `suchanatasguthi` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `landowner_name` text COLLATE utf8mb4_unicode_ci,
  `malpot_address` text COLLATE utf8mb4_unicode_ci,
  `landsabik_address` text COLLATE utf8mb4_unicode_ci,
  `landsabik_ward` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `appsabik_address` text COLLATE utf8mb4_unicode_ci,
  `appsabik_ward` text COLLATE utf8mb4_unicode_ci,
  `applocal_states` text COLLATE utf8mb4_unicode_ci,
  `appward` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `home_type2` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `landsabik_type` text COLLATE utf8mb4_unicode_ci,
  `appsabik_type` text COLLATE utf8mb4_unicode_ci,
  `home_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suchanatasguthi`
--

INSERT INTO `suchanatasguthi` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `karyalaya_name`, `landowner_name`, `malpot_address`, `landsabik_address`, `landsabik_ward`, `kitta_no`, `area`, `appsabik_address`, `appsabik_ward`, `applocal_states`, `appward`, `applicant_name`, `home_type2`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `landsabik_type`, `appsabik_type`, `home_type`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '3', '2075-06-05', 'सूचना पठाएको सम्बन्धमा', 'श्री यो जो संग सम्बन्ध राख्दछ।', 'sanjaya', 'इलाम', '4', '4', '454', '34', '4', '4', 'ईलाम नगरपालिका', '१', 'dfd', 'नियमित गर्न', 'sanjaya ghimire', 'हाेम', 'इलाम', '343', '34453', 'गा.वि.स.', 'नगरपालिका', 'नियमित गर्न', 'का. बा वडा अध्यक्ष', '2', '2018-09-26 15:38:19', '2018-09-26 16:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `tax_clearances`
--

CREATE TABLE `tax_clearances` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `applicant_title` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `tax` text COLLATE utf8mb4_unicode_ci,
  `plot_no` text COLLATE utf8mb4_unicode_ci,
  `office_name` text COLLATE utf8mb4_unicode_ci,
  `bs_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinpuste_detail_bibarans`
--

CREATE TABLE `tinpuste_detail_bibarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `tinpustedetail_id` text COLLATE utf8mb4_unicode_ci,
  `name` text COLLATE utf8mb4_unicode_ci,
  `relation` text COLLATE utf8mb4_unicode_ci,
  `citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `citizenship_issued_date` text COLLATE utf8mb4_unicode_ci,
  `citizenship_issued_district` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinpuste_detail_bibarans`
--

INSERT INTO `tinpuste_detail_bibarans` (`id`, `tinpustedetail_id`, `name`, `relation`, `citizenship_no`, `citizenship_issued_date`, `citizenship_issued_district`, `created_at`, `updated_at`) VALUES
(1, '1', 'hkhj', 'kjh', 'jkhj', 'hjk', 'kj', '2018-12-16 04:01:18', '2018-12-16 04:01:18'),
(2, '2', 'hkhj', 'kjh', 'jkhj', 'hjk', 'kj', '2018-12-16 04:03:24', '2018-12-16 04:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `tinpuste_jagga_bibarans`
--

CREATE TABLE `tinpuste_jagga_bibarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `tinpuste_id` text COLLATE utf8mb4_unicode_ci,
  `seat_no` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinpuste_jagga_bibarans`
--

INSERT INTO `tinpuste_jagga_bibarans` (`id`, `tinpuste_id`, `seat_no`, `kitta_no`, `area`, `created_at`, `updated_at`) VALUES
(1, '1', 'jh', 'hj', 'hjjk', '2018-12-16 04:01:17', '2018-12-16 04:01:17'),
(2, '2', 'jh', 'hj', 'hjjk', '2018-12-16 04:03:23', '2018-12-16 04:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `tinpuste_pramanits`
--

CREATE TABLE `tinpuste_pramanits` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinpuste_pramanits`
--

INSERT INTO `tinpuste_pramanits` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `sabik_address`, `person_title`, `person_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', 'jkh', 'hjk', 'hkjhk', 'श्री', 'hkj', 'hjk', 'hjkh', 'jkh', 'kjh', '9', '2018-12-16 04:01:17', '2018-12-16 04:01:17'),
(2, '२०७५/०७६', 'jkh', '2075-06-21', 'hkjhk', 'श्री', 'hkj', 'hjk', 'hjkh', 'jkh', 'kjh', '9', '2018-12-16 04:03:23', '2018-12-16 04:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `tresnaksa`
--

CREATE TABLE `tresnaksa` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_district` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `nibedak` text COLLATE utf8mb4_unicode_ci,
  `plot_local_state_name` text COLLATE utf8mb4_unicode_ci,
  `plot_ward_no` text COLLATE utf8mb4_unicode_ci,
  `plot_sabik_address` text COLLATE utf8mb4_unicode_ci,
  `plot_sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `kitta_no` text COLLATE utf8mb4_unicode_ci,
  `area_no` text COLLATE utf8mb4_unicode_ci,
  `request_for` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `plot_sabik_type` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tresnaksa`
--

INSERT INTO `tresnaksa` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `karyalaya_name`, `karyalaya_district`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `nibedak`, `plot_local_state_name`, `plot_ward_no`, `plot_sabik_address`, `plot_sabik_ward`, `kitta_no`, `area_no`, `request_for`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `sabik_type`, `plot_sabik_type`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '2', '2075-06-05', 'ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'नापी कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '१', 'kd', '3', 'df', 'ईलाम नगरपालिका', '१', 'dsf', '4', '445', 'fg', 'dfg', 'samjhana rai', 'हाेम', 'इलाम', '343', '4', 'नगरपालिका', 'उप महानगरपालिका', 'का. बा वडा अध्यक्ष', '2', '2018-09-24 19:24:04', '2018-09-24 20:18:46'),
(2, '२०७५/०७६', '9', '2075-06-05', 'ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'नापी कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '१', 'jh', '0', 'jkh', 'ईलाम नगरपालिका', '१', 'jk', 'jk', 'jk', 'jkh', 'jhg', 'nb', 'nb', 'jk', 'jk', 'jk', 'गा.वि.स.', 'गा.वि.स.', 'वडा अध्यक्ष', '9', '2018-12-13 01:53:20', '2018-12-13 01:53:20'),
(3, '२०७५/०७६', 'jhh', 'jkh', 'ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'hk', 'hjk', 'h', 'jh', 'jh', 'jh', 'jh', 'kjh', 'jhjh', 'hj', 'jh', 'hj', 'jh', 'jh', 'jkh', 'jk', 'hkj', 'hjk', 'hkj', 'गा.वि.स.', 'गा.वि.स.', 'वडा अध्यक्ष', '1', '2019-01-08 23:32:26', '2019-01-08 23:32:26'),
(4, '२०७५/०७६', 'kjk', 'jhjg', 'ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'नापी कार्यालय', 'इलाम', 'ईलाम नगरपालिका', '१', 'jkh', 'jkh', 'jkh', 'jkh', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'sanjaya', 'hjk', 'hjk', 'h', 'jh', 'गा.वि.स.', 'गा.वि.स.', 'वडा सचिब', '1', '2019-01-09 10:55:35', '2019-01-09 10:56:18'),
(5, '२०७५/०७६', NULL, 'jj', 'ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा', 'hjk', 'hjkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jkh', 'jk', 'hjk', 'hjk', 'h', 'hjjk', 'h', 'jh', 'jh', 'jkh', 'jk', 'hjk', 'hjk', 'गा.वि.स.', 'गा.वि.स.', 'वडा अध्यक्ष', '1', '2019-01-24 01:30:50', '2019-01-24 01:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `udyogdartasifaris`
--

CREATE TABLE `udyogdartasifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `office_chairman` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `prapta_patra_miti` text COLLATE utf8mb4_unicode_ci,
  `prapta_patra_no` text COLLATE utf8mb4_unicode_ci,
  `sanchalak_name` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `current_address` text COLLATE utf8mb4_unicode_ci,
  `jagga_bibaran` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_objective` text COLLATE utf8mb4_unicode_ci,
  `bebasaye_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `udyogdartasifaris`
--

INSERT INTO `udyogdartasifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `letter_subject`, `office_chairman`, `office_address`, `prapta_patra_miti`, `prapta_patra_no`, `sanchalak_name`, `sabik_address`, `current_address`, `jagga_bibaran`, `bebasaye_objective`, `bebasaye_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `officer`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '5', '2075-06-05', 'प्रमाणित सिफारिस गरिएको बारे', 'घरेलु तथा साना उद्योग कार्यालय', 'ilam', '2075-06-01', '898', 'ilam', '4', '9', 'ilam', 'uiu', 'dsf', 'sanjaya ghimire', 'हाेम', 'इलाम', '3', '5', '9', 'का. बा वडा अध्यक्ष', '2018-09-28 15:47:55', '2018-09-28 16:12:16'),
(2, '२०७५/०७६', 'jhjk', 'hh', 'प्रमाणित सिफारिस गरिएको बारे', 'jkh', 'khj', 'hkj', 'hjk', 'hjk', 'hj', 'hjk', 'hjk', 'hjk', 'h', 'jhjk', 'hjk', 'hjk', 'hjk', 'hj', '9', 'वडा अध्यक्ष', '2018-12-16 02:41:11', '2018-12-16 02:41:11'),
(3, '२०७५/०७६', 'h', 'hk', 'प्रमाणित सिफारिस गरिएको बारे', 'hk', 'hk', 'hkj', 'hkh', 'kh', 'khj', 'jh', 'j', 'h', 'khj', 'hj', 'hk', 'hkj', 'hkj', 'jkh', '9', 'वडा अध्यक्ष', '2018-12-16 03:22:58', '2018-12-16 03:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `unmarriedverification`
--

CREATE TABLE `unmarriedverification` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `applicant_title` text COLLATE utf8mb4_unicode_ci,
  `applicant_name` text COLLATE utf8mb4_unicode_ci,
  `applicant_gender` text COLLATE utf8mb4_unicode_ci,
  `applicant_father_name` text COLLATE utf8mb4_unicode_ci,
  `applicant_mother_name` text COLLATE utf8mb4_unicode_ci,
  `applicant_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `previous_vdc` text COLLATE utf8mb4_unicode_ci,
  `previous_ward_no` text COLLATE utf8mb4_unicode_ci,
  `till_date` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unmarriedverification`
--

INSERT INTO `unmarriedverification` (`id`, `ref_no`, `issued_date`, `applicant_title`, `applicant_name`, `applicant_gender`, `applicant_father_name`, `applicant_mother_name`, `applicant_citizenship_no`, `previous_vdc`, `previous_ward_no`, `till_date`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '6', '2075-06-05', 'Mr', 'dfd', 'son', '3', '2', '3', '3', '12', '2', NULL, NULL, NULL, NULL, '9', '2018-11-23 02:44:20', '2018-11-23 02:44:20'),
(2, 'jkh', 'jhk', 'Mr', 'hjkhj', 'son', 'k', 'jhjk', 'hh', 'jkjk', 'hkh', 'kh', 'h', 'kh', 'hjk', 'jk', '9', '2018-12-16 03:58:21', '2018-12-16 03:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `upacharsahayogsifaris`
--

CREATE TABLE `upacharsahayogsifaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `local_state` text COLLATE utf8mb4_unicode_ci,
  `ward` text COLLATE utf8mb4_unicode_ci,
  `sabik_address` text COLLATE utf8mb4_unicode_ci,
  `sabik_ward` text COLLATE utf8mb4_unicode_ci,
  `person_name` text COLLATE utf8mb4_unicode_ci,
  `disease_name` text COLLATE utf8mb4_unicode_ci,
  `hospital_name` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `sabik_type` text COLLATE utf8mb4_unicode_ci,
  `person_title` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upacharsahayogsifaris`
--

INSERT INTO `upacharsahayogsifaris` (`id`, `patra_sankya`, `chalani_no`, `issued_date`, `karyalaya_name`, `office_address`, `letter_subject`, `local_state`, `ward`, `sabik_address`, `sabik_ward`, `person_name`, `disease_name`, `hospital_name`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `user_id`, `sabik_type`, `person_title`, `officer`, `created_at`, `updated_at`) VALUES
(1, NULL, '4', '2075-06-05', 'जिल्ला जनस्वास्थ्य कार्यालय', 'df', 'सिफारिस सम्बन्धमा', 'ईलाम नगरपालिका', '१', '5', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '४३४', '2', 'नगरपालिका', 'श्री', 'वडा अध्यक्ष', '2018-10-03 00:03:04', '2018-10-03 00:03:04'),
(2, NULL, '4', '2075-06-05', 'जिल्ला जनस्वास्थ्य कार्यालय', 'df', 'सिफारिस सम्बन्धमा', 'ईलाम नगरपालिका', '१', '5', 'sf', 'sdf', 'sdf', 'sdf', 'sdf', 'हाेम', 'इलाम', '343', '४३४', '2', 'नगरपालिका', 'श्री', 'का. बा वडा अध्यक्ष', '2018-10-03 00:19:33', '2018-10-03 00:19:33'),
(3, NULL, 'jk', 'jk', 'jkh', 'khk', 'सिफारिस सम्बन्धमा', 'hjjk', 'hjkh', 'h', 'kjh', 'kh', 'khj', 'kh', 'jk', 'jkjk', 'h', 'h', 'hkh', '9', 'गा.वि.स.', 'श्री', 'वडा अध्यक्ष', '2018-12-16 03:38:39', '2018-12-16 03:38:39'),
(4, NULL, '८७५४८३\\', '2075-06-21', 'जिल्ला जनस्वास्थ्य कार्यालय', 'इअल', 'सिफारिस सम्बन्धमा', 'पालुङटार नगरपालिका', '१', 'बर्बोएत', '३४', 'ल्स्क्द', 'hhbh', 'jnjbnjn', 'jnjnhuui', NULL, NULL, NULL, NULL, '5', 'गा.वि.स.', 'श्री', 'वडा अध्यक्ष', '2018-12-16 06:25:13', '2018-12-16 06:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL COMMENT 'yo ward ko lagi ho ',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` enum('SA','WP','PC','PSU','DCU','GWU') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'SA = Super Admin; WP = Ward President; PC = Palika Chairman; PSU = palika sifaris User; DCU = Darta Chalani User; GWU = General Ward User',
  `provience_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `local_state_id` int(11) DEFAULT NULL,
  `ward_office` text COLLATE utf8mb4_unicode_ci,
  `ward_office_en` text COLLATE utf8mb4_unicode_ci,
  `telephone_num` text COLLATE utf8mb4_unicode_ci,
  `fax_number` text COLLATE utf8mb4_unicode_ci,
  `website` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `isAdmin`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`, `provience_id`, `district_id`, `local_state_id`, `ward_office`, `ward_office_en`, `telephone_num`, `fax_number`, `website`) VALUES
(3, 'ward_9', 'ward_9@gmail.com', 9, '$2y$10$XZPau0zLc8ENx5nmn34PpOrAyd/ttXikSnordYRwMrzYvUPcWf8CO', '6VIRGAgXgAo7LnL79Ge8ltnp4xHqMnaDOEruzPKagDKMTfoy2vbcAMkiOa8J', '2018-11-11 00:39:53', '2018-11-11 00:39:53', 'WP', 1, 3, 18, NULL, NULL, NULL, NULL, NULL),
(8, 'palika', 'palika@gmail.com', 0, '$2y$10$cvhJm9bc6pIw4TOsoEqLw.TOkrV90BpV0RuaJinUKO4zMwHsGprX2', 'Ypjg7dhS7SUktdr3KAUm2sVnpCWH8I2ng08t1VehGOMnMGA1XbE9PYgvnMDI', '2018-12-13 04:03:03', '2018-12-13 04:03:03', 'PC', 1, 3, 18, NULL, NULL, NULL, NULL, NULL),
(9, 'superadmin', 'super@gmail.com', 0, '$2y$10$OWyyqQcCxxcXDNb6t.gXxOJDIAYKuIm9U8Q4g22bMWoUAVxXnUU/u', '72PQLDtYTNsgmiuwxYyCHUO2dVwJ949KdMWSinQ0o9j6t0J04gtriApLYtku', '2018-12-13 04:06:09', '2018-12-13 04:06:09', 'SA', 1, 3, 18, NULL, NULL, NULL, NULL, NULL),
(10, 'ward_1', 'ward_1@gmail.com', 1, '$2y$10$kbiTLuSsGXbST1o23s2YYef6aeQUMH8Cxofxj1.xtzquKteC4toIO', '6YyO9rxyO5M4QdeyIhKkBkiN3jhYD2SqJTEqBoo8BaqsSFE9KYqT0OQniM7g', '2018-12-13 05:11:11', '2018-12-13 05:11:11', 'WP', 1, 3, 18, NULL, NULL, NULL, NULL, NULL),
(11, 'binod', 'binod@gmail.com', 5, '$2y$10$WOXsJkXqVsjv7CKFQTHjMuq7nFlsbqUhLTVbtO.NAy1G5DdeGkWY2', 'FPc2Kl1LmpqeQGV79k7SYgRbdRNPVxS1CYfQVnTqD5TTxj9NsWWvlWVNdscX', '2018-12-16 04:47:12', '2018-12-16 04:47:12', 'WP', 4, 36, 394, NULL, NULL, NULL, NULL, NULL),
(12, 'dhangadi', 'd@gmail.com', 1, '$2y$10$.noKlK7XDiWFdHxj5U3cuOVZkMrqmOKKMJwzKReBddxXWEXLf4G.W', NULL, '2018-12-21 09:25:21', '2018-12-21 09:25:21', 'WP', 2, 16, 157, NULL, NULL, NULL, NULL, NULL),
(13, 'b', 'b@gmail.com', 4, '$2y$10$TsqvJUmkDbMhuATY0dvn9OO7FmK0vUu9n2ft1c4GIdups1t.D7daG', '3kaw13j0HaqIAwzl0h6S9UR522Gs2tiE28pljrnIArAQ8F6vFhsB6iRggVaO', '2019-01-10 03:32:07', '2019-01-10 03:32:07', 'WP', 7, 72, 737, NULL, NULL, NULL, NULL, NULL),
(14, 'mai@gmail.com', 'mai@gmail.com', 1, '$2y$10$RVr/d9tfkkKPTXGPjTd0KOWtGtVxoVv0e/wnqJTmwCFTLFQI0ovgG', NULL, '2019-01-28 00:41:55', '2019-01-28 00:41:55', 'WP', 1, 3, 20, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wadasarjimin`
--

CREATE TABLE `wadasarjimin` (
  `id` int(10) UNSIGNED NOT NULL,
  `patra_sankhya` text COLLATE utf8mb4_unicode_ci,
  `chalani_no` text COLLATE utf8mb4_unicode_ci,
  `issued_date` text COLLATE utf8mb4_unicode_ci,
  `letter_subject` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_name` text COLLATE utf8mb4_unicode_ci,
  `karyalaya_district` text COLLATE utf8mb4_unicode_ci,
  `patra_chalani_no` text COLLATE utf8mb4_unicode_ci,
  `chalani_date` text COLLATE utf8mb4_unicode_ci,
  `pana_no` text COLLATE utf8mb4_unicode_ci,
  `hakim_ko_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_name` text COLLATE utf8mb4_unicode_ci,
  `nibedak_address` text COLLATE utf8mb4_unicode_ci,
  `nibedak_citizenship_no` text COLLATE utf8mb4_unicode_ci,
  `nibedak_nid` text COLLATE utf8mb4_unicode_ci,
  `officer` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wadasarjimin`
--

INSERT INTO `wadasarjimin` (`id`, `patra_sankhya`, `chalani_no`, `issued_date`, `letter_subject`, `karyalaya_name`, `karyalaya_district`, `patra_chalani_no`, `chalani_date`, `pana_no`, `hakim_ko_name`, `nibedak_name`, `nibedak_address`, `nibedak_citizenship_no`, `nibedak_nid`, `officer`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '२०७५/०७६', '4', '2075-06-05', 'सर्जमिन गरी पठाइएको सम्बन्धमा', 'ईलाम नगरपालिका', 'इलाम', '3', '2075-06-01', '3', 'sanjaya ghimire', 'हाेम', 'इलाम', '343', '5', 'का. बा वडा अध्यक्ष', 2, '2018-09-25 11:55:40', '2018-09-25 11:55:40'),
(2, '२०७५/०७६', '4', '2075-06-05', 'सर्जमिन गरी पठाइएको सम्बन्धमा', 'ईलाम नगरपालिका', 'इलाम', '3', '2075-06-01', '3', 'sanjaya ghimire', 'हाेम', 'इलाम', '343', '6', 'का. बा वडा अध्यक्ष', 9, '2018-09-25 12:22:26', '2018-09-25 12:22:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abibahit_pramanits`
--
ALTER TABLE `abibahit_pramanits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addressverification`
--
ALTER TABLE `addressverification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apanga_parichaye_patra_sifaris`
--
ALTER TABLE `apanga_parichaye_patra_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asthaie_basobas_sifaris`
--
ALTER TABLE `asthaie_basobas_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basobas_sifaris_details`
--
ALTER TABLE `basobas_sifaris_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bebasayebanda`
--
ALTER TABLE `bebasayebanda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bebasayedartanaya`
--
ALTER TABLE `bebasayedartanaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bijuli_jadan_sifaris`
--
ALTER TABLE `bijuli_jadan_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bijuli_jadan_sifaris_detail`
--
ALTER TABLE `bijuli_jadan_sifaris_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bipanna`
--
ALTER TABLE `bipanna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthcertificate`
--
ALTER TABLE `birthcertificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birth_date_verifications`
--
ALTER TABLE `birth_date_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `char_killa_pramanit`
--
ALTER TABLE `char_killa_pramanit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `char_killa_pramanit_detail`
--
ALTER TABLE `char_killa_pramanit_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizencertificate`
--
ALTER TABLE `citizencertificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizenship`
--
ALTER TABLE `citizenship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizensifaris`
--
ALTER TABLE `citizensifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `court_fee_narakhne_sifaris`
--
ALTER TABLE `court_fee_narakhne_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deathcertificate`
--
ALTER TABLE `deathcertificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhara_jadan_sifaris`
--
ALTER TABLE `dhara_jadan_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhara_jadan_sifaris_detail`
--
ALTER TABLE `dhara_jadan_sifaris_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `esthaie_basobas_details`
--
ALTER TABLE `esthaie_basobas_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esthaie_basobas_sifaris`
--
ALTER TABLE `esthaie_basobas_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farakfarakenglishhijepramanit`
--
ALTER TABLE `farakfarakenglishhijepramanit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farakfarakjanmamitipramanit`
--
ALTER TABLE `farakfarakjanmamitipramanit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farakfaraknametharpramanit`
--
ALTER TABLE `farakfaraknametharpramanit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faraknametharnagarikta`
--
ALTER TABLE `faraknametharnagarikta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsifaris`
--
ALTER TABLE `generalsifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsifarisenglish`
--
ALTER TABLE `generalsifarisenglish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gharjagganamsarikitani`
--
ALTER TABLE `gharjagganamsarikitani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gharjagganamsarisifaris`
--
ALTER TABLE `gharjagganamsarisifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gharkayamsifaris`
--
ALTER TABLE `gharkayamsifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghar_bato_pramanit`
--
ALTER TABLE `ghar_bato_pramanit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghar_bato_pramanit_detail`
--
ALTER TABLE `ghar_bato_pramanit_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghar_janaune_sifaris`
--
ALTER TABLE `ghar_janaune_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghar_patal_sifaris`
--
ALTER TABLE `ghar_patal_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal_migration_details`
--
ALTER TABLE `internal_migration_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal_migration_sifaris`
--
ALTER TABLE `internal_migration_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jagga_dhani_pramanpatra_pratilipi_sifaris`
--
ALTER TABLE `jagga_dhani_pramanpatra_pratilipi_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jagga_dhani_purjama_gharkayem_sifaris`
--
ALTER TABLE `jagga_dhani_purjama_gharkayem_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `janmamiti_pramanits`
--
ALTER TABLE `janmamiti_pramanits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jet_machines`
--
ALTER TABLE `jet_machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karobarpanno`
--
ALTER TABLE `karobarpanno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khulaipathayekosifaris`
--
ALTER TABLE `khulaipathayekosifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitta_kat_jagga_bibaran`
--
ALTER TABLE `kitta_kat_jagga_bibaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitta_kat_sifaris`
--
ALTER TABLE `kitta_kat_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kotha_khali_sifaris`
--
ALTER TABLE `kotha_khali_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_state`
--
ALTER TABLE `local_state`
  ADD PRIMARY KEY (`local_state_id`);

--
-- Indexes for table `local_state_type`
--
ALTER TABLE `local_state_type`
  ADD PRIMARY KEY (`local_state_type_id`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marriage_verifications`
--
ALTER TABLE `marriage_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mohi_lagat_katta_sifaris`
--
ALTER TABLE `mohi_lagat_katta_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mritak_hakdar_sifaris`
--
ALTER TABLE `mritak_hakdar_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mritak_hakdar_sifaris_details`
--
ALTER TABLE `mritak_hakdar_sifaris_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muchulka`
--
ALTER TABLE `muchulka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muchulkaguthi`
--
ALTER TABLE `muchulkaguthi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nabalak_parichaye_patra_sifaris`
--
ALTER TABLE `nabalak_parichaye_patra_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nagarikta`
--
ALTER TABLE `nagarikta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naksa`
--
ALTER TABLE `naksa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nata_pramanits`
--
ALTER TABLE `nata_pramanits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nata_pramanit_details`
--
ALTER TABLE `nata_pramanit_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nepalsarkarko_naamma_bato_kayem_sifaris`
--
ALTER TABLE `nepalsarkarko_naamma_bato_kayem_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nirmanbebasaye`
--
ALTER TABLE `nirmanbebasaye`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonprofit`
--
ALTER TABLE `nonprofit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupation_verifications`
--
ALTER TABLE `occupation_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pannoa`
--
ALTER TABLE `pannoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `proceeds`
--
ALTER TABLE `proceeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_valuation`
--
ALTER TABLE `property_valuation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_valuation_details`
--
ALTER TABLE `property_valuation_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `relation_verifications`
--
ALTER TABLE `relation_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relation_verification_details`
--
ALTER TABLE `relation_verification_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sadak_khane_sifaris`
--
ALTER TABLE `sadak_khane_sifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarjimin`
--
ALTER TABLE `sarjimin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sasthadartasifarisa`
--
ALTER TABLE `sasthadartasifarisa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sasthanabikaransifaris`
--
ALTER TABLE `sasthanabikaransifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shresta`
--
ALTER TABLE `shresta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shrestauparsifaris`
--
ALTER TABLE `shrestauparsifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suchanatas`
--
ALTER TABLE `suchanatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suchanatasguthi`
--
ALTER TABLE `suchanatasguthi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_clearances`
--
ALTER TABLE `tax_clearances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinpuste_detail_bibarans`
--
ALTER TABLE `tinpuste_detail_bibarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinpuste_jagga_bibarans`
--
ALTER TABLE `tinpuste_jagga_bibarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinpuste_pramanits`
--
ALTER TABLE `tinpuste_pramanits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tresnaksa`
--
ALTER TABLE `tresnaksa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `udyogdartasifaris`
--
ALTER TABLE `udyogdartasifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unmarriedverification`
--
ALTER TABLE `unmarriedverification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upacharsahayogsifaris`
--
ALTER TABLE `upacharsahayogsifaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wadasarjimin`
--
ALTER TABLE `wadasarjimin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abibahit_pramanits`
--
ALTER TABLE `abibahit_pramanits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addressverification`
--
ALTER TABLE `addressverification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apanga_parichaye_patra_sifaris`
--
ALTER TABLE `apanga_parichaye_patra_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asthaie_basobas_sifaris`
--
ALTER TABLE `asthaie_basobas_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `basobas_sifaris_details`
--
ALTER TABLE `basobas_sifaris_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bebasayebanda`
--
ALTER TABLE `bebasayebanda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bebasayedartanaya`
--
ALTER TABLE `bebasayedartanaya`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bijuli_jadan_sifaris`
--
ALTER TABLE `bijuli_jadan_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bijuli_jadan_sifaris_detail`
--
ALTER TABLE `bijuli_jadan_sifaris_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bipanna`
--
ALTER TABLE `bipanna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `birthcertificate`
--
ALTER TABLE `birthcertificate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `birth_date_verifications`
--
ALTER TABLE `birth_date_verifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `char_killa_pramanit`
--
ALTER TABLE `char_killa_pramanit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `char_killa_pramanit_detail`
--
ALTER TABLE `char_killa_pramanit_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citizencertificate`
--
ALTER TABLE `citizencertificate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `citizenship`
--
ALTER TABLE `citizenship`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `citizensifaris`
--
ALTER TABLE `citizensifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `court_fee_narakhne_sifaris`
--
ALTER TABLE `court_fee_narakhne_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deathcertificate`
--
ALTER TABLE `deathcertificate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dhara_jadan_sifaris`
--
ALTER TABLE `dhara_jadan_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dhara_jadan_sifaris_detail`
--
ALTER TABLE `dhara_jadan_sifaris_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `esthaie_basobas_details`
--
ALTER TABLE `esthaie_basobas_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `esthaie_basobas_sifaris`
--
ALTER TABLE `esthaie_basobas_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farakfarakenglishhijepramanit`
--
ALTER TABLE `farakfarakenglishhijepramanit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farakfarakjanmamitipramanit`
--
ALTER TABLE `farakfarakjanmamitipramanit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farakfaraknametharpramanit`
--
ALTER TABLE `farakfaraknametharpramanit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faraknametharnagarikta`
--
ALTER TABLE `faraknametharnagarikta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `generalsifaris`
--
ALTER TABLE `generalsifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `generalsifarisenglish`
--
ALTER TABLE `generalsifarisenglish`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gharjagganamsarikitani`
--
ALTER TABLE `gharjagganamsarikitani`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gharjagganamsarisifaris`
--
ALTER TABLE `gharjagganamsarisifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gharkayamsifaris`
--
ALTER TABLE `gharkayamsifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ghar_bato_pramanit`
--
ALTER TABLE `ghar_bato_pramanit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghar_bato_pramanit_detail`
--
ALTER TABLE `ghar_bato_pramanit_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghar_janaune_sifaris`
--
ALTER TABLE `ghar_janaune_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghar_patal_sifaris`
--
ALTER TABLE `ghar_patal_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internal_migration_details`
--
ALTER TABLE `internal_migration_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internal_migration_sifaris`
--
ALTER TABLE `internal_migration_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jagga_dhani_pramanpatra_pratilipi_sifaris`
--
ALTER TABLE `jagga_dhani_pramanpatra_pratilipi_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jagga_dhani_purjama_gharkayem_sifaris`
--
ALTER TABLE `jagga_dhani_purjama_gharkayem_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `janmamiti_pramanits`
--
ALTER TABLE `janmamiti_pramanits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jet_machines`
--
ALTER TABLE `jet_machines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karobarpanno`
--
ALTER TABLE `karobarpanno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khulaipathayekosifaris`
--
ALTER TABLE `khulaipathayekosifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitta_kat_jagga_bibaran`
--
ALTER TABLE `kitta_kat_jagga_bibaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitta_kat_sifaris`
--
ALTER TABLE `kitta_kat_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kotha_khali_sifaris`
--
ALTER TABLE `kotha_khali_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `local_state`
--
ALTER TABLE `local_state`
  MODIFY `local_state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=754;

--
-- AUTO_INCREMENT for table `local_state_type`
--
ALTER TABLE `local_state_type`
  MODIFY `local_state_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marriage_verifications`
--
ALTER TABLE `marriage_verifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migration`
--
ALTER TABLE `migration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `mohi_lagat_katta_sifaris`
--
ALTER TABLE `mohi_lagat_katta_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mritak_hakdar_sifaris`
--
ALTER TABLE `mritak_hakdar_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mritak_hakdar_sifaris_details`
--
ALTER TABLE `mritak_hakdar_sifaris_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `muchulka`
--
ALTER TABLE `muchulka`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `muchulkaguthi`
--
ALTER TABLE `muchulkaguthi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nabalak_parichaye_patra_sifaris`
--
ALTER TABLE `nabalak_parichaye_patra_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nagarikta`
--
ALTER TABLE `nagarikta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `naksa`
--
ALTER TABLE `naksa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nata_pramanits`
--
ALTER TABLE `nata_pramanits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nata_pramanit_details`
--
ALTER TABLE `nata_pramanit_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nepalsarkarko_naamma_bato_kayem_sifaris`
--
ALTER TABLE `nepalsarkarko_naamma_bato_kayem_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nirmanbebasaye`
--
ALTER TABLE `nirmanbebasaye`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nonprofit`
--
ALTER TABLE `nonprofit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `occupation_verifications`
--
ALTER TABLE `occupation_verifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pannoa`
--
ALTER TABLE `pannoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proceeds`
--
ALTER TABLE `proceeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_valuation`
--
ALTER TABLE `property_valuation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_valuation_details`
--
ALTER TABLE `property_valuation_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relation_verifications`
--
ALTER TABLE `relation_verifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `relation_verification_details`
--
ALTER TABLE `relation_verification_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sadak_khane_sifaris`
--
ALTER TABLE `sadak_khane_sifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarjimin`
--
ALTER TABLE `sarjimin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sasthadartasifarisa`
--
ALTER TABLE `sasthadartasifarisa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sasthanabikaransifaris`
--
ALTER TABLE `sasthanabikaransifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shresta`
--
ALTER TABLE `shresta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shrestauparsifaris`
--
ALTER TABLE `shrestauparsifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suchanatas`
--
ALTER TABLE `suchanatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suchanatasguthi`
--
ALTER TABLE `suchanatasguthi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax_clearances`
--
ALTER TABLE `tax_clearances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tinpuste_detail_bibarans`
--
ALTER TABLE `tinpuste_detail_bibarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tinpuste_jagga_bibarans`
--
ALTER TABLE `tinpuste_jagga_bibarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tinpuste_pramanits`
--
ALTER TABLE `tinpuste_pramanits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tresnaksa`
--
ALTER TABLE `tresnaksa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `udyogdartasifaris`
--
ALTER TABLE `udyogdartasifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unmarriedverification`
--
ALTER TABLE `unmarriedverification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upacharsahayogsifaris`
--
ALTER TABLE `upacharsahayogsifaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wadasarjimin`
--
ALTER TABLE `wadasarjimin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
