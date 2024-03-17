-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2024 at 08:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fishers_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `designation_id` int(11) NOT NULL,
  `designation_name` text DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`designation_id`, `designation_name`, `is_trash`) VALUES
(1, 'DIRECTOR GENERAL FIHERIES', 0),
(2, 'SENIOR DIRECTOR FISHERIES', 0),
(3, 'DIRECTOR OF FISHERIES', 0),
(4, 'ADDITIONAL DIRECTOR FISHERIES', 0),
(5, 'DIRECTOR FISHERIES (RESEARCH & TRAINING)', 0),
(6, 'DIRECTOR FISHERIES (RESEARCH)', 0),
(7, 'DEPUTY DIRECTOR (ADMIN & ACCOUNTS)', 0),
(8, 'DEPUTY DIRECTOR (DAMS & RESERVOIRS)', 0),
(9, 'SENIOR RESEARCH OFFICER', 0),
(10, 'DEPUTY DIRECTOR FISHERIES', 0),
(11, 'SUPERINTENDENT', 0),
(12, 'DISTRICT OFFICER FISHERIES', 0),
(13, 'ASSISTANT DIRECTOR FISHERIES', 0),
(14, 'RESEARCH OFFICER', 0),
(15, 'ASSISTANT DIRECTOR ( IT )', 0),
(16, 'ADMINISTRATIVE OFFICER', 0),
(17, 'WEB ADMINISTRATOR', 0),
(18, 'COMPUTER OPERATOR', 0),
(19, 'EXTENSION FIELD OFFICER', 0),
(20, 'OFFICE ASSISTANT', 0),
(21, 'ASSISTANT RESEARCH OFFICER', 0),
(22, 'SENIOR SCALE STENOGRAPHER', 0),
(23, 'JUNIOR SCALE STENOGRAPHER', 0),
(24, 'SENIOR CLERK', 0),
(25, 'ASSISTANT LIBRARIAN', 0),
(26, 'ASSISTANT WARDEN FISHERIES', 0),
(27, 'LABORATORY TECHNICIAN', 0),
(28, 'TROUT CULTURIST', 0),
(29, 'FISHERIES DEVELOPMENT ASSISTANT', 0),
(30, 'FISHERIES SUPERVISOR', 0),
(31, 'JUNIOR CLERK', 0),
(32, 'AQUARIUM SUPERVISOR', 0),
(33, 'ELECTRIC SUPERVISOR', 0),
(34, 'HEAD FISHERIES WATCHER', 0),
(35, 'FISHERIES WATCHER', 0),
(36, 'LABORATORY ASSISTANT', 0),
(37, 'FEED MILL OPERATOR', 0),
(38, 'DRIVER', 0),
(39, 'TUBEWELL OPERATOR', 0),
(40, 'BOATMAN', 0),
(41, 'ELECTRICIAN', 0),
(42, 'PIPE FITTER', 0),
(43, 'MOTOR BOAT OPERATOR', 0),
(44, 'ATTENDANT (DAMS & RIVERS)', 0),
(45, 'HATCHERY ASSISTANT', 0),
(46, 'CHOWKIDAR (DAMS & RIVERS)', 0),
(47, 'PLUMBER', 0),
(48, 'HOSTEL ATTENDANT', 0),
(49, 'AQUARIUM ATTENDANT', 0),
(50, 'NAIB QASID', 0),
(51, 'SWEEPER', 0),
(52, 'CHOWKIDAR', 0),
(53, 'MALI', 0),
(54, 'LABORATORY ATTENDANT', 0),
(55, 'COOK', 0),
(56, 'ATTENDANT', 0),
(57, 'CARPENTER', 0);

-- --------------------------------------------------------

--
-- Table structure for table `entities`
--

CREATE TABLE `entities` (
  `e_id` int(11) NOT NULL,
  `e_title` text DEFAULT NULL,
  `e_desc` text DEFAULT NULL,
  `e_group` text DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_trash` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`e_id`, `e_title`, `e_desc`, `e_group`, `attr_id`, `created_by`, `created_at`, `is_trash`) VALUES
(1, 'Leave on full pay at a time', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(2, 'Leave on half pay', NULL, 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(3, 'Leave not due', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(4, 'Recreation Leave', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(5, 'Ex-Pakistan Leave', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(6, 'In Service Death', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(7, 'Leave Preparatory to Retirement', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(8, 'Encashment to LPR', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(9, 'Overstayal after sanctioned Leave', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(10, 'Leave due on abolition of post', '', 'deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(11, 'Extraordinary Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(12, 'Special Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(13, 'Maternity Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(14, 'Disability Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(15, 'Study Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(16, 'Casual Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(17, 'Earned Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(18, 'Peternity Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(19, 'Half Pay Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(20, 'Quarantine Leave', '', 'not_deb_leave', NULL, NULL, '2023-11-27 06:54:35', 0),
(21, 'Abbottabad District', '', 'district', NULL, NULL, '2023-11-27 06:54:35', 0),
(22, 'Bajaur District', '', 'district', NULL, NULL, '2023-11-27 06:54:35', 0),
(23, 'Bannu District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(24, 'Battagram District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(25, 'Buner District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(26, 'Charsadda District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(27, 'Dera Ismail Khan District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(28, 'Hangu District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(29, 'Haripur District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(30, 'Karak District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(31, 'Khyber District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(32, 'Kohat District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(33, 'Kolai-Palas District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(34, 'Kurram District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(35, 'Lakki Marwat District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(36, 'Lower Chitral District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(37, 'Lower Dir District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(38, 'Lower Kohistan District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(39, 'Lower South Waziristan District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(40, 'Malakand District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(41, 'Mansehra District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(42, 'Mardan District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(43, 'Mohmand District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(44, 'North Waziristan District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(45, 'Nowshera District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(46, 'Orakzai District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(47, 'Peshawar District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(48, 'Shangla District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(49, 'Swabi District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(50, 'Swat District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(51, 'Tank District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(52, 'Torghar District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(53, 'Upper Dir District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(54, 'Upper Kohistan District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(55, 'Upper South Waziristan District', NULL, 'district', NULL, NULL, '2024-01-13 14:08:09', 0),
(56, 'Trout', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(57, 'Mahashair', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(58, 'Rahu', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(59, 'Mori', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(60, 'Thaila', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(61, 'Calbans', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(62, 'Silver', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(63, 'Encashment to LPR', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(64, 'Big Head', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(65, 'Sole', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(66, 'Schizothorax sp', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(67, 'Gulfaam', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(68, 'Eel', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(69, 'Sher Mahi', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(70, 'Cat Fish', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(71, 'Other', NULL, 'fish', NULL, NULL, '2024-01-13 14:08:09', 0),
(72, 'Gill Net', NULL, 'gear', NULL, NULL, '2024-01-13 14:08:09', 0),
(73, 'Drag Net', NULL, 'gear', NULL, NULL, '2024-01-13 14:08:09', 0),
(74, 'Cast Net', NULL, 'gear', NULL, NULL, '2024-01-13 14:08:09', 0),
(75, 'Happa', NULL, 'gear', NULL, NULL, '2024-01-13 14:08:09', 0),
(76, 'Hand Net', NULL, 'gear', NULL, NULL, '2024-01-13 14:08:09', 0),
(77, 'Rod & Line', NULL, 'gear', NULL, NULL, '2024-01-13 14:08:09', 0),
(78, 'Hook Line', NULL, 'gear', NULL, NULL, '2024-01-13 14:08:09', 0),
(79, 'Other', NULL, 'gear', NULL, NULL, '2024-01-13 14:08:09', 0),
(80, 'Rainbow', NULL, 'trout_type', NULL, NULL, '2024-01-13 14:08:09', 0),
(81, 'Sparctic', NULL, 'trout_type', NULL, NULL, '2024-01-13 14:08:09', 0),
(82, 'Golden Rainbow', NULL, 'trout_type', NULL, NULL, '2024-01-13 14:08:09', 0),
(83, 'Other', NULL, 'trout_type', NULL, NULL, '2024-01-13 14:08:09', 0),
(84, 'All Kinds Of Nets', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0),
(85, 'Fishing Rod', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0),
(86, 'Fishing Line', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0),
(87, 'Cast Net', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0),
(88, 'Dip Net', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0),
(89, 'Spear or Hand', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0),
(90, 'Special License', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0),
(91, 'Daily-non-trout', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0),
(92, 'Daily-trout', NULL, 'license', NULL, NULL, '2024-01-13 14:08:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `entities_taxonomy`
--

CREATE TABLE `entities_taxonomy` (
  `e_taxonomy_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `e_id` int(11) NOT NULL DEFAULT 0,
  `e_group` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `is_trash` tinyint(4) DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entity_groups`
--

CREATE TABLE `entity_groups` (
  `eg_id` int(11) NOT NULL,
  `eg_title` text DEFAULT NULL,
  `eg_alias` text DEFAULT NULL,
  `eg_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entity_groups`
--

INSERT INTO `entity_groups` (`eg_id`, `eg_title`, `eg_alias`, `eg_desc`) VALUES
(1, 'BPS', 'bps', NULL),
(2, 'Designations', 'designation', NULL),
(3, 'Service Types', 'service_type', NULL),
(4, 'Debatable to Leave Accounts', 'deb_leave', NULL),
(5, 'Not Debatable on Leave Accounts', 'not_deb_leave', NULL),
(6, 'Districts', 'district', NULL),
(7, 'Fishes', 'fish', NULL),
(8, 'Type of Gear Used', 'gear', NULL),
(9, 'Type of Trout', 'trout_type', NULL),
(10, 'Licenses', 'license', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`) VALUES
(1, 'HR'),
(2, 'KpFishFarms'),
(3, 'WaterBodies'),
(4, 'StatisticsReport'),
(5, 'Licenses');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`details`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `module_id`, `details`) VALUES
(1, 1, 1, '[\"1\",\"1\",\"1\",\"1\"]'),
(2, 1, 2, '[\"1\",\"1\",\"1\",\"1\"]'),
(3, 1, 3, '[\"1\",\"1\",\"1\",\"1\"]'),
(4, 1, 4, '[\"1\",\"1\",\"1\",\"1\"]'),
(5, 1, 5, '[\"1\",\"1\",\"1\",\"1\"]'),
(6, 2, 1, '[\"1\",\"1\",\"1\",\"1\"]'),
(7, 2, 2, '[\"1\",\"1\",\"1\",\"1\"]'),
(8, 2, 3, '[\"1\",\"1\",\"1\",\"1\"]'),
(9, 2, 4, '[\"1\",\"1\",\"1\",\"1\"]'),
(10, 2, 5, '[\"1\",\"1\",\"1\",\"1\"]');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_trash`) VALUES
(1, 'Admin', 0),
(2, 'HR', 0),
(3, 'Employee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acr`
--

CREATE TABLE `tbl_acr` (
  `acr_id` int(11) NOT NULL,
  `acr` text DEFAULT NULL,
  `acr_detail` text DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `acr_file` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_acr`
--

INSERT INTO `tbl_acr` (`acr_id`, `acr`, `acr_detail`, `employee_id`, `acr_file`, `user_id`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(1, 'sas11', 'sa11', 1, 'les/lnuvZWUjPafoOt4Dy0UPFN3uz7P2sNs6n6n6Yjku.webp', NULL, 1, '2023-11-23 10:44:33', 1, '2023-12-02 15:29:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `app_id` int(11) NOT NULL,
  `reporting_date` date DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `service_status` text DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `age_of_retirement` text DEFAULT NULL,
  `cader_service_group` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `appointment_through` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`app_id`, `reporting_date`, `employee_id`, `service_status`, `appointment_date`, `age_of_retirement`, `cader_service_group`, `department`, `appointment_through`, `user_id`, `created_by`, `created_date`, `updated_by`, `updated_at`, `is_trash`) VALUES
(1, '1970-01-01', 1, 'sas11', '1970-01-01', 'saaa111', 'sa11', 'sa11', 'sasa11', NULL, 1, '2023-11-23 13:53:21', NULL, '2023-12-02 10:09:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dams`
--

CREATE TABLE `tbl_dams` (
  `dam_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `x_coordinates` varchar(100) DEFAULT NULL,
  `y_coordinates` varchar(200) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  `length_of_dam` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fish_details`
--

CREATE TABLE `tbl_fish_details` (
  `fish_detail_id` int(11) NOT NULL,
  `fish_type` int(200) DEFAULT NULL,
  `daily_catch` date DEFAULT NULL,
  `number_of_fish` varchar(200) DEFAULT NULL,
  `weight` varchar(200) DEFAULT NULL,
  `water_bodies_id` int(11) DEFAULT NULL,
  `gear_type` int(11) DEFAULT NULL,
  `water_bodies_type` varchar(200) NOT NULL,
  `fish_population_pattern` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fish_licenses`
--

CREATE TABLE `tbl_fish_licenses` (
  `fish_license_id` int(11) NOT NULL,
  `license_type` int(11) DEFAULT NULL,
  `fish_detail_id` int(11) DEFAULT NULL,
  `water_bodies_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_trash` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `leave_id` int(11) NOT NULL,
  `dep_leave` int(11) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `not_dep_leave` int(11) DEFAULT NULL,
  `dep_file` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`leave_id`, `dep_leave`, `employee_id`, `not_dep_leave`, `dep_file`, `user_id`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(1, 1, 1, 1, 'files/LJ5OzlY2okgm1xif5I6xTuuRryn67xO88NjWsUy6.webp', NULL, 1, '2023-11-23 10:54:16', 1, '2023-12-02 16:16:32', 0),
(2, 2, 1, 5, 'y3vLvPLUyCiLivc1ep3pI5dhNPxVXGOe8y5VNKA4.webp', NULL, 1, '2023-12-02 15:55:20', NULL, '2023-12-02 15:55:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marital`
--

CREATE TABLE `tbl_marital` (
  `mar_id` int(11) NOT NULL,
  `dependency_name` text DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `relationship` text DEFAULT NULL,
  `marital_status` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_marital`
--

INSERT INTO `tbl_marital` (`mar_id`, `dependency_name`, `employee_id`, `relationship`, `marital_status`, `dob`, `user_id`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(2, 'sas121', 1, 'daughter', 'un-married', '1970-01-01', NULL, 1, '2023-12-01', NULL, '2023-12-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotions`
--

CREATE TABLE `tbl_promotions` (
  `pro_id` int(11) NOT NULL,
  `from_designation` int(11) DEFAULT NULL,
  `to_designation` int(11) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `from_bps` int(11) DEFAULT NULL,
  `to_bps` int(11) DEFAULT NULL,
  `promotion_date` date DEFAULT NULL,
  `promotion_number` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `acting` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `notification_file` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_promotions`
--

INSERT INTO `tbl_promotions` (`pro_id`, `from_designation`, `to_designation`, `employee_id`, `from_bps`, `to_bps`, `promotion_date`, `promotion_number`, `department`, `acting`, `remarks`, `user_id`, `notification_file`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(1, 56, 54, 1, 16, 20, '1970-01-01', 'sas1122', 'sa11', 'regular', 'sasa11', NULL, 'cation_files/Glianxl8kUoaqTGUvdq7x6BewiOrRy3y81v0rbHA.webp', 1, '2023-11-23 11:00:43', 1, '2023-12-02 14:34:14', 0),
(2, 1, 1, 1, NULL, NULL, '2023-11-23', '1212', 'sas', 'Regular', 'sasa', NULL, 'cation_files/OWdykV5aIH8saS803nBCTimpKXfbIonT3NUegzaD.webp', 1, '2023-11-23 11:01:42', NULL, NULL, 0),
(3, 1, 1, 1, NULL, NULL, '2023-11-02', '121', 'asasa', 'Regular', 'sasa', NULL, 'cation_files/efTuEi8K5UcEeLGBa0ebu0SFzgzazYjXCRXGbXcE.webp', 1, '2023-11-23 11:28:38', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qualifications`
--

CREATE TABLE `tbl_qualifications` (
  `qul_id` int(11) NOT NULL,
  `qualification` text DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `grade_division` varchar(255) DEFAULT NULL,
  `degree_passing_year` varchar(255) DEFAULT NULL,
  `last_institute` text DEFAULT NULL,
  `institute_address` text DEFAULT NULL,
  `major_subject` varchar(255) DEFAULT NULL,
  `degree` text DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_qualifications`
--

INSERT INTO `tbl_qualifications` (`qul_id`, `qualification`, `employee_id`, `grade_division`, `degree_passing_year`, `last_institute`, `institute_address`, `major_subject`, `degree`, `Remarks`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(1, 'sas', 1, 'sa', 'sa', 'sa', 'sa', 'sa', 'CgB0CNZU1P7AeGpagK0t5vk1PLMWBdUvAinEOezg.webp', 'sa', 1, '2023-12-02 10:08:20', 1, '2023-12-06 10:04:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rivers`
--

CREATE TABLE `tbl_rivers` (
  `river_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `x_coordinates` varchar(100) DEFAULT NULL,
  `y_coordinates` varchar(200) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  `length_of_river` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `serv_id` int(11) NOT NULL,
  `serv_status` text DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `bps_id` int(11) DEFAULT NULL,
  `place_of_duty` text DEFAULT NULL,
  `station` text DEFAULT NULL,
  `running_basic_pay` text DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `office_order_file` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`serv_id`, `serv_status`, `employee_id`, `designation_id`, `bps_id`, `place_of_duty`, `station`, `running_basic_pay`, `joining_date`, `user_id`, `office_order_file`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(1, 'sas11', 1, 54, 17, 'sas11', 'sasa11', 'sa11', '2023-12-02', NULL, 'e_files/hNT3Mh6731g3ixyu8uzFLboZVEbiXEdFaUxjxkJD.jpg', 1, '2023-11-23 14:15:09', 1, '2023-12-02 11:37:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spouce`
--

CREATE TABLE `tbl_spouce` (
  `spou_id` int(11) NOT NULL,
  `spouce` text DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `name_of_spouce` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `no_of_children` text DEFAULT NULL,
  `spouce_file` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_spouce`
--

INSERT INTO `tbl_spouce` (`spou_id`, `spouce`, `employee_id`, `name_of_spouce`, `dob`, `no_of_children`, `spouce_file`, `user_id`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(1, 'sa121', 1, 'sa111', '2024-01-01', '1211', 'zayU5h7elBxl3LOkIo1lcpQR0U83OgHnYs7flz.webp', NULL, 1, '2023-12-01 09:27:19', 1, '2023-12-06 10:04:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_streams`
--

CREATE TABLE `tbl_streams` (
  `stream_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `x_coordinates` varchar(100) DEFAULT NULL,
  `y_coordinates` varchar(200) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  `length_of_stream` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE `tbl_training` (
  `t_id` int(11) NOT NULL,
  `training_name` text DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `serial_number` text DEFAULT NULL,
  `Institute` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `institute_address` text DEFAULT NULL,
  `oblige_sponsor` text DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_training`
--

INSERT INTO `tbl_training` (`t_id`, `training_name`, `employee_id`, `serial_number`, `Institute`, `city`, `institute_address`, `oblige_sponsor`, `from_date`, `to_date`, `duration`, `user_id`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(1, 'sa111', 1, 'sa11', 'sa11', 'sa11', 'sa11', 'sa11', '1970-01-01', '1970-01-01', '1100', NULL, 1, '2023-11-23', 1, '2023-12-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfers`
--

CREATE TABLE `tbl_transfers` (
  `tra_id` int(11) NOT NULL,
  `order_number` text DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `bps_id` int(11) DEFAULT NULL,
  `from_department` text DEFAULT NULL,
  `to_department` text DEFAULT NULL,
  `from_station` text DEFAULT NULL,
  `to_station` text DEFAULT NULL,
  `worked_from` text DEFAULT NULL,
  `order_file` text DEFAULT NULL,
  `transfer_date` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transfers`
--

INSERT INTO `tbl_transfers` (`tra_id`, `order_number`, `employee_id`, `designation_id`, `bps_id`, `from_department`, `to_department`, `from_station`, `to_station`, `worked_from`, `order_file`, `transfer_date`, `user_id`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`) VALUES
(2, '12121', 1, 54, 17, 'sas11', 'sa11', 'sas11', 'sas11', '11sa', NULL, '1970-01-01', NULL, 1, '2023-12-02 15:11:19', 1, '2023-12-02 15:14:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` text DEFAULT NULL,
  `middle_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `father_name` text DEFAULT NULL,
  `cnic` text DEFAULT NULL,
  `email_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `current_address` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `postal_address` text DEFAULT NULL,
  `mobile_number` text DEFAULT NULL,
  `office_phone_number` text DEFAULT NULL,
  `alternate_number` text DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `user_img` varchar(255) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `marital_status` text DEFAULT NULL,
  `domicile` text DEFAULT NULL,
  `bps_id` int(11) DEFAULT NULL,
  `personal_number` text DEFAULT NULL,
  `personal_cv` text DEFAULT NULL,
  `first_service_entry` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_trash` tinyint(4) NOT NULL DEFAULT 0,
  `service_type` text DEFAULT NULL,
  `gpf_number` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `middle_name`, `last_name`, `father_name`, `cnic`, `email_address`, `permanent_address`, `current_address`, `city`, `postal_address`, `mobile_number`, `office_phone_number`, `alternate_number`, `dob`, `religion`, `gender`, `user_img`, `designation_id`, `marital_status`, `domicile`, `bps_id`, `personal_number`, `personal_cv`, `first_service_entry`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_trash`, `service_type`, `gpf_number`, `username`, `password`, `user_role`) VALUES
(1, 'Hammad khan1', 'khan1', 'Ahmed1', 'Ghulam Sabir1', '11111-1111111-2', 'hamad2123.hk@gmail.com', 'Peshawar1', 'Peshawar1', 'Peshawar1', 'peshawar1', '03119924411', '1212121212', '03119924411', '13-11-2021', 'Islam1', 'female', 'SVbXe1r0PUmAeUsd19Tcjr9UJYHkcVFWhHyDqaDH.jpg', 3, 'married', 'Peshawar1', 5, '03119924411', 'R5oAS3uwJ4wx0tjlX8CvgdANNbYpGtRAtlAMrBel.jpg', 'Peshawar1', 1, '2023-12-26 09:58:06', NULL, '2023-12-26 09:58:06', 0, 'pay', 'Peshawar1', 'hammadahmed', '$2y$12$tgpkK7BZ48yBg4wkQ07KyO9c1boMzMRcDFlN8dPEWnFlQ.7.S9zfW', 2),
(2, 'salman', 'usman', 'zafar', 'zafar khan', '76765-7587587-8', 'salman@gmail.com', 'test address', 'adress', 'peshawar', 'peshawar', '87638152618', NULL, '81761628182', '04-12-2023', 'islam', 'male', 'O1O4n394vk2Mm2enO2uGmFzImxjD2hl6DNFyLbhF.png', 1, 'married', 'sasa', 4, '12121212121', 'gsQ2HSeCPRmnGzDQR9To3jUikl1CUhttfVckgqMl.png', '12121', NULL, '2023-12-26 09:56:06', 1, '2023-12-26 09:56:06', 0, 'contract', '12121', NULL, NULL, 3),
(3, 'usman khan', 'usman', 'zafar', 'zafar khan', '76765-7587587-8', 'salman@gmail.com', 'test address', 'adress', 'peshawar', 'peshawar', '87638152618', NULL, '81761628182', '04-12-2023', 'islam', 'male', 'O1O4n394vk2Mm2enO2uGmFzImxjD2hl6DNFyLbhF.png', 1, 'married', 'sasa', 4, '12121212121', 'gsQ2HSeCPRmnGzDQR9To3jUikl1CUhttfVckgqMl.png', '12121', NULL, '2023-12-26 09:56:06', 1, '2023-12-26 09:56:06', 0, 'contract', '12121', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_water_bodies_leases`
--

CREATE TABLE `tbl_water_bodies_leases` (
  `fish_license_id` int(11) NOT NULL,
  `lease_value` varchar(200) DEFAULT NULL,
  `amount_realized_date` date DEFAULT NULL,
  `amount` int(200) DEFAULT NULL,
  `water_bodies_id` int(11) DEFAULT NULL,
  `water_body_type` varchar(200) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_trash` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `entities`
--
ALTER TABLE `entities`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `entities_taxonomy`
--
ALTER TABLE `entities_taxonomy`
  ADD PRIMARY KEY (`e_taxonomy_id`);

--
-- Indexes for table `entity_groups`
--
ALTER TABLE `entity_groups`
  ADD PRIMARY KEY (`eg_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_acr`
--
ALTER TABLE `tbl_acr`
  ADD PRIMARY KEY (`acr_id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tbl_dams`
--
ALTER TABLE `tbl_dams`
  ADD PRIMARY KEY (`dam_id`);

--
-- Indexes for table `tbl_fish_details`
--
ALTER TABLE `tbl_fish_details`
  ADD PRIMARY KEY (`fish_detail_id`);

--
-- Indexes for table `tbl_fish_licenses`
--
ALTER TABLE `tbl_fish_licenses`
  ADD PRIMARY KEY (`fish_license_id`);

--
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `tbl_marital`
--
ALTER TABLE `tbl_marital`
  ADD PRIMARY KEY (`mar_id`);

--
-- Indexes for table `tbl_promotions`
--
ALTER TABLE `tbl_promotions`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_qualifications`
--
ALTER TABLE `tbl_qualifications`
  ADD PRIMARY KEY (`qul_id`);

--
-- Indexes for table `tbl_rivers`
--
ALTER TABLE `tbl_rivers`
  ADD PRIMARY KEY (`river_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `tbl_spouce`
--
ALTER TABLE `tbl_spouce`
  ADD PRIMARY KEY (`spou_id`);

--
-- Indexes for table `tbl_streams`
--
ALTER TABLE `tbl_streams`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_transfers`
--
ALTER TABLE `tbl_transfers`
  ADD PRIMARY KEY (`tra_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_water_bodies_leases`
--
ALTER TABLE `tbl_water_bodies_leases`
  ADD PRIMARY KEY (`fish_license_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `entities`
--
ALTER TABLE `entities`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `entities_taxonomy`
--
ALTER TABLE `entities_taxonomy`
  MODIFY `e_taxonomy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entity_groups`
--
ALTER TABLE `entity_groups`
  MODIFY `eg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_acr`
--
ALTER TABLE `tbl_acr`
  MODIFY `acr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dams`
--
ALTER TABLE `tbl_dams`
  MODIFY `dam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fish_details`
--
ALTER TABLE `tbl_fish_details`
  MODIFY `fish_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fish_licenses`
--
ALTER TABLE `tbl_fish_licenses`
  MODIFY `fish_license_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_marital`
--
ALTER TABLE `tbl_marital`
  MODIFY `mar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_promotions`
--
ALTER TABLE `tbl_promotions`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_qualifications`
--
ALTER TABLE `tbl_qualifications`
  MODIFY `qul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rivers`
--
ALTER TABLE `tbl_rivers`
  MODIFY `river_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_spouce`
--
ALTER TABLE `tbl_spouce`
  MODIFY `spou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_streams`
--
ALTER TABLE `tbl_streams`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transfers`
--
ALTER TABLE `tbl_transfers`
  MODIFY `tra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_water_bodies_leases`
--
ALTER TABLE `tbl_water_bodies_leases`
  MODIFY `fish_license_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
