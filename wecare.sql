-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 03:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_info` int(11) NOT NULL,
  `patient_info` int(11) NOT NULL,
  `relative_info` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `admission_no` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `user_id`, `survey_info`, `patient_info`, `relative_info`, `staff_id`, `admission_no`, `status`, `created_at`, `updated_at`) VALUES
(6, 1, 6, 7, 7, 1, 37245855, 'Accepted', '2023-04-07 11:50:01', '2023-04-12 19:00:39'),
(10, 6, 7, 9, 8, 1, 1125331485, 'Pending', '2023-04-12 15:05:36', '2023-04-12 19:36:58'),
(11, 1, 8, 10, 9, 1, 664919643, 'Pending', '2023-04-12 16:20:32', '2023-04-12 16:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `staff_schedule_id` int(11) NOT NULL,
  `appointment_number` int(11) NOT NULL,
  `purpose_for_appointment` int(11) NOT NULL,
  `other_purpose` mediumtext NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(30) NOT NULL,
  `client_came` enum('No','Yes','Pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `staff_id`, `user_id`, `staff_schedule_id`, `appointment_number`, `purpose_for_appointment`, `other_purpose`, `appointment_date`, `appointment_time`, `status`, `client_came`) VALUES
(1, 1, 1, 1, 1, 3, '', '2023-04-17', '12:09:00', 'Canceled', 'Pending'),
(2, 1, 1, 1, 2, 2, '', '2023-04-24', '20:25:00', 'Completed', 'Yes'),
(3, 1, 1, 7, 3, 1, '', '2023-04-15', '17:14:00', 'Completed', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_purpose`
--

CREATE TABLE `appointment_purpose` (
  `id` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_purpose`
--

INSERT INTO `appointment_purpose` (`id`, `purpose`) VALUES
(1, 'OJT'),
(2, 'Inquire'),
(3, 'Caregiving'),
(4, 'Rehabilitation'),
(5, 'Consultation'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `shift_type` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `relative_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `patient_id`, `relative_id`, `staff_id`, `updated_at`) VALUES
(5, 42, 10, 1, '2023-04-12 19:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_app_detail`
--

CREATE TABLE `monitoring_app_detail` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `date` date NOT NULL,
  `current_problem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitoring_app_detail`
--

INSERT INTO `monitoring_app_detail` (`id`, `patient_id`, `time_start`, `time_end`, `date`, `current_problem`) VALUES
(6, 42, '11:02:00', '13:02:00', '2023-04-29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_detail`
--

CREATE TABLE `monitoring_detail` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `health_status` varchar(100) NOT NULL,
  `blood_pressure` varchar(50) NOT NULL,
  `condition_1` varchar(50) NOT NULL,
  `condition_2` varchar(50) NOT NULL,
  `condition_3` varchar(50) NOT NULL,
  `last_checked` varchar(255) NOT NULL,
  `checked_date` date NOT NULL,
  `observation` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitoring_detail`
--

INSERT INTO `monitoring_detail` (`id`, `patient_id`, `health_status`, `blood_pressure`, `condition_1`, `condition_2`, `condition_3`, `last_checked`, `checked_date`, `observation`, `updated_at`) VALUES
(6, 42, 'Very Good', 'High BP', 'Bedridden', 'Depress', 'Sad', 'Eljen Mae Augusto', '2023-04-26', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2023-04-26 11:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_hyiegne`
--

CREATE TABLE `monitoring_hyiegne` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_medecine`
--

CREATE TABLE `monitoring_medecine` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dose` varchar(100) NOT NULL,
  `started_at` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_nutrition`
--

CREATE TABLE `monitoring_nutrition` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_photo_update`
--

CREATE TABLE `monitoring_photo_update` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_report`
--

CREATE TABLE `monitoring_report` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `report_type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` longtext NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `patient_id`, `user_id`, `type`, `subject`, `message`, `status`, `created_at`) VALUES
(28, 0, 1, 'Admission', 'Thank you for submitting and completing an admission.', 'We hope this message finds you well. We would like to take this opportunity to remind you about the admission that you made. \nWe\'re expecting to see you on Apr 22nd, 2023 to discuss the admission further. \n Please provide the documents that you\'re going to need. Thank you for your cooperation.', 1, '2023-04-13 21:17:21'),
(38, 42, 1, 'Admission', 'Your admission regarding Lola D. Cruz has been accepted.', 'We hope this message finds you well. We would like to take this opportunity to remind you about your admission regarding Lola D. Cruz have been accepted. \nYou can now access family monitoring for this patient. We appreciate your commitment to providing the best care for your loved one, and we are dedicated to supporting you in any way we can. Thank you for choosing WeCare Nursing Home as your loved one\'s home, and we look forward to continuing to provide exceptional care for them.', 1, '2023-04-13 21:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `date_birth` date NOT NULL,
  `place_birth` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `street` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal` int(11) NOT NULL,
  `background_history` longtext NOT NULL,
  `doctors_diagnosis` longtext NOT NULL,
  `allergies` longtext NOT NULL,
  `status` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `admission_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `staff_id`, `fname`, `mname`, `lname`, `suffix`, `date_birth`, `place_birth`, `gender`, `street`, `province`, `barangay`, `city`, `postal`, `background_history`, `doctors_diagnosis`, `allergies`, `status`, `room`, `image`, `admission_no`) VALUES
(42, 1, 'Lola', 'Dela', 'Cruz', '', '2023-04-16', 'Zamboanga', 'Female', 'Cdcp', 'ZAMBOANGA DEL SUR', 'Sta.Catalina', 'ZAMBOANGA CITY', 7000, 'Lola ni Panday', '', '', 'Active', 'Room 1', 'yuta.jpg', 37245855);

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal` int(50) NOT NULL,
  `background_history` mediumtext NOT NULL,
  `doctors_diagnosis` mediumtext NOT NULL,
  `allergies` mediumtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `patient_info_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`id`, `user_id`, `firstname`, `middlename`, `lastname`, `suffix`, `date_of_birth`, `place_of_birth`, `gender`, `province`, `street`, `barangay`, `city`, `postal`, `background_history`, `doctors_diagnosis`, `allergies`, `picture`, `patient_info_no`) VALUES
(7, 1, 'Lola', 'Dela', 'Cruz', '', '2023-04-16', 'Zamboanga', 'Female', 'ZAMBOANGA DEL SUR', 'Cdcp', 'Sta.Catalina', 'ZAMBOANGA CITY', 7000, 'Lola ni Panday', '', '', 'Patient_1680868200Vanitas-19.jpg', 37245855),
(9, 6, 'Test', 'Test', 'Test', '', '2023-04-12', 'Test', 'Female', 'ABRA', 'Test', 'Test', 'ABORLAN', 7000, 'Test', 'Test', 'Test', 'Patient_1681311935500849a6e2e651d374ce0f4049e43afe.jpg', 1125331485),
(10, 1, 'Testing', 'Testing', 'Testing', '', '2023-04-13', 'Testing', 'Female', 'ABRA', 'Testing', 'Testing', 'ABORLAN', 7000, 'Testing', 'Testing', 'Testing', 'Patient_1681316432yuta.jpg', 664919643);

-- --------------------------------------------------------

--
-- Table structure for table `patient_services`
--

CREATE TABLE `patient_services` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `services` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_services`
--

INSERT INTO `patient_services` (`id`, `patient_id`, `services`) VALUES
(68, 42, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `start_due` date NOT NULL,
  `end_due` date NOT NULL,
  `services` varchar(255) NOT NULL,
  `services_total` varchar(100) NOT NULL,
  `fee_total` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `fee_note` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment_method` varchar(100) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `receipt` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refcitymun`
--

CREATE TABLE `refcitymun` (
  `id` int(255) NOT NULL,
  `psgcCode` varchar(255) DEFAULT NULL,
  `citymunDesc` text DEFAULT NULL,
  `regDesc` varchar(255) DEFAULT NULL,
  `provCode` varchar(255) DEFAULT NULL,
  `citymunCode` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `refcitymun`
--

INSERT INTO `refcitymun` (`id`, `psgcCode`, `citymunDesc`, `regDesc`, `provCode`, `citymunCode`) VALUES
(1, '012801000', 'ADAMS', '01', '0128', '012801'),
(2, '012802000', 'BACARRA', '01', '0128', '012802'),
(3, '012803000', 'BADOC', '01', '0128', '012803'),
(4, '012804000', 'BANGUI', '01', '0128', '012804'),
(5, '012805000', 'CITY OF BATAC', '01', '0128', '012805'),
(6, '012806000', 'BURGOS', '01', '0128', '012806'),
(7, '012807000', 'CARASI', '01', '0128', '012807'),
(8, '012808000', 'CURRIMAO', '01', '0128', '012808'),
(9, '012809000', 'DINGRAS', '01', '0128', '012809'),
(10, '012810000', 'DUMALNEG', '01', '0128', '012810'),
(11, '012811000', 'BANNA (ESPIRITU)', '01', '0128', '012811'),
(12, '012812000', 'LAOAG CITY (Capital)', '01', '0128', '012812'),
(13, '012813000', 'MARCOS', '01', '0128', '012813'),
(14, '012814000', 'NUEVA ERA', '01', '0128', '012814'),
(15, '012815000', 'PAGUDPUD', '01', '0128', '012815'),
(16, '012816000', 'PAOAY', '01', '0128', '012816'),
(17, '012817000', 'PASUQUIN', '01', '0128', '012817'),
(18, '012818000', 'PIDDIG', '01', '0128', '012818'),
(19, '012819000', 'PINILI', '01', '0128', '012819'),
(20, '012820000', 'SAN NICOLAS', '01', '0128', '012820'),
(21, '012821000', 'SARRAT', '01', '0128', '012821'),
(22, '012822000', 'SOLSONA', '01', '0128', '012822'),
(23, '012823000', 'VINTAR', '01', '0128', '012823'),
(24, '012901000', 'ALILEM', '01', '0129', '012901'),
(25, '012902000', 'BANAYOYO', '01', '0129', '012902'),
(26, '012903000', 'BANTAY', '01', '0129', '012903'),
(27, '012904000', 'BURGOS', '01', '0129', '012904'),
(28, '012905000', 'CABUGAO', '01', '0129', '012905'),
(29, '012906000', 'CITY OF CANDON', '01', '0129', '012906'),
(30, '012907000', 'CAOAYAN', '01', '0129', '012907'),
(31, '012908000', 'CERVANTES', '01', '0129', '012908'),
(32, '012909000', 'GALIMUYOD', '01', '0129', '012909'),
(33, '012910000', 'GREGORIO DEL PILAR (CONCEPCION)', '01', '0129', '012910'),
(34, '012911000', 'LIDLIDDA', '01', '0129', '012911'),
(35, '012912000', 'MAGSINGAL', '01', '0129', '012912'),
(36, '012913000', 'NAGBUKEL', '01', '0129', '012913'),
(37, '012914000', 'NARVACAN', '01', '0129', '012914'),
(38, '012915000', 'QUIRINO (ANGKAKI)', '01', '0129', '012915'),
(39, '012916000', 'SALCEDO (BAUGEN)', '01', '0129', '012916'),
(40, '012917000', 'SAN EMILIO', '01', '0129', '012917'),
(41, '012918000', 'SAN ESTEBAN', '01', '0129', '012918'),
(42, '012919000', 'SAN ILDEFONSO', '01', '0129', '012919'),
(43, '012920000', 'SAN JUAN (LAPOG)', '01', '0129', '012920'),
(44, '012921000', 'SAN VICENTE', '01', '0129', '012921'),
(45, '012922000', 'SANTA', '01', '0129', '012922'),
(46, '012923000', 'SANTA CATALINA', '01', '0129', '012923'),
(47, '012924000', 'SANTA CRUZ', '01', '0129', '012924'),
(48, '012925000', 'SANTA LUCIA', '01', '0129', '012925'),
(49, '012926000', 'SANTA MARIA', '01', '0129', '012926'),
(50, '012927000', 'SANTIAGO', '01', '0129', '012927'),
(51, '012928000', 'SANTO DOMINGO', '01', '0129', '012928'),
(52, '012929000', 'SIGAY', '01', '0129', '012929'),
(53, '012930000', 'SINAIT', '01', '0129', '012930'),
(54, '012931000', 'SUGPON', '01', '0129', '012931'),
(55, '012932000', 'SUYO', '01', '0129', '012932'),
(56, '012933000', 'TAGUDIN', '01', '0129', '012933'),
(57, '012934000', 'CITY OF VIGAN (Capital)', '01', '0129', '012934'),
(58, '013301000', 'AGOO', '01', '0133', '013301'),
(59, '013302000', 'ARINGAY', '01', '0133', '013302'),
(60, '013303000', 'BACNOTAN', '01', '0133', '013303'),
(61, '013304000', 'BAGULIN', '01', '0133', '013304'),
(62, '013305000', 'BALAOAN', '01', '0133', '013305'),
(63, '013306000', 'BANGAR', '01', '0133', '013306'),
(64, '013307000', 'BAUANG', '01', '0133', '013307'),
(65, '013308000', 'BURGOS', '01', '0133', '013308'),
(66, '013309000', 'CABA', '01', '0133', '013309'),
(67, '013310000', 'LUNA', '01', '0133', '013310'),
(68, '013311000', 'NAGUILIAN', '01', '0133', '013311'),
(69, '013312000', 'PUGO', '01', '0133', '013312'),
(70, '013313000', 'ROSARIO', '01', '0133', '013313'),
(71, '013314000', 'CITY OF SAN FERNANDO (Capital)', '01', '0133', '013314'),
(72, '013315000', 'SAN GABRIEL', '01', '0133', '013315'),
(73, '013316000', 'SAN JUAN', '01', '0133', '013316'),
(74, '013317000', 'SANTO TOMAS', '01', '0133', '013317'),
(75, '013318000', 'SANTOL', '01', '0133', '013318'),
(76, '013319000', 'SUDIPEN', '01', '0133', '013319'),
(77, '013320000', 'TUBAO', '01', '0133', '013320'),
(78, '015501000', 'AGNO', '01', '0155', '015501'),
(79, '015502000', 'AGUILAR', '01', '0155', '015502'),
(80, '015503000', 'CITY OF ALAMINOS', '01', '0155', '015503'),
(81, '015504000', 'ALCALA', '01', '0155', '015504'),
(82, '015505000', 'ANDA', '01', '0155', '015505'),
(83, '015506000', 'ASINGAN', '01', '0155', '015506'),
(84, '015507000', 'BALUNGAO', '01', '0155', '015507'),
(85, '015508000', 'BANI', '01', '0155', '015508'),
(86, '015509000', 'BASISTA', '01', '0155', '015509'),
(87, '015510000', 'BAUTISTA', '01', '0155', '015510'),
(88, '015511000', 'BAYAMBANG', '01', '0155', '015511'),
(89, '015512000', 'BINALONAN', '01', '0155', '015512'),
(90, '015513000', 'BINMALEY', '01', '0155', '015513'),
(91, '015514000', 'BOLINAO', '01', '0155', '015514'),
(92, '015515000', 'BUGALLON', '01', '0155', '015515'),
(93, '015516000', 'BURGOS', '01', '0155', '015516'),
(94, '015517000', 'CALASIAO', '01', '0155', '015517'),
(95, '015518000', 'DAGUPAN CITY', '01', '0155', '015518'),
(96, '015519000', 'DASOL', '01', '0155', '015519'),
(97, '015520000', 'INFANTA', '01', '0155', '015520'),
(98, '015521000', 'LABRADOR', '01', '0155', '015521'),
(99, '015522000', 'LINGAYEN (Capital)', '01', '0155', '015522'),
(100, '015523000', 'MABINI', '01', '0155', '015523'),
(101, '015524000', 'MALASIQUI', '01', '0155', '015524'),
(102, '015525000', 'MANAOAG', '01', '0155', '015525'),
(103, '015526000', 'MANGALDAN', '01', '0155', '015526'),
(104, '015527000', 'MANGATAREM', '01', '0155', '015527'),
(105, '015528000', 'MAPANDAN', '01', '0155', '015528'),
(106, '015529000', 'NATIVIDAD', '01', '0155', '015529'),
(107, '015530000', 'POZORRUBIO', '01', '0155', '015530'),
(108, '015531000', 'ROSALES', '01', '0155', '015531'),
(109, '015532000', 'SAN CARLOS CITY', '01', '0155', '015532'),
(110, '015533000', 'SAN FABIAN', '01', '0155', '015533'),
(111, '015534000', 'SAN JACINTO', '01', '0155', '015534'),
(112, '015535000', 'SAN MANUEL', '01', '0155', '015535'),
(113, '015536000', 'SAN NICOLAS', '01', '0155', '015536'),
(114, '015537000', 'SAN QUINTIN', '01', '0155', '015537'),
(115, '015538000', 'SANTA BARBARA', '01', '0155', '015538'),
(116, '015539000', 'SANTA MARIA', '01', '0155', '015539'),
(117, '015540000', 'SANTO TOMAS', '01', '0155', '015540'),
(118, '015541000', 'SISON', '01', '0155', '015541'),
(119, '015542000', 'SUAL', '01', '0155', '015542'),
(120, '015543000', 'TAYUG', '01', '0155', '015543'),
(121, '015544000', 'UMINGAN', '01', '0155', '015544'),
(122, '015545000', 'URBIZTONDO', '01', '0155', '015545'),
(123, '015546000', 'CITY OF URDANETA', '01', '0155', '015546'),
(124, '015547000', 'VILLASIS', '01', '0155', '015547'),
(125, '015548000', 'LAOAC', '01', '0155', '015548'),
(126, '020901000', 'BASCO (Capital)', '02', '0209', '020901'),
(127, '020902000', 'ITBAYAT', '02', '0209', '020902'),
(128, '020903000', 'IVANA', '02', '0209', '020903'),
(129, '020904000', 'MAHATAO', '02', '0209', '020904'),
(130, '020905000', 'SABTANG', '02', '0209', '020905'),
(131, '020906000', 'UYUGAN', '02', '0209', '020906'),
(132, '021501000', 'ABULUG', '02', '0215', '021501'),
(133, '021502000', 'ALCALA', '02', '0215', '021502'),
(134, '021503000', 'ALLACAPAN', '02', '0215', '021503'),
(135, '021504000', 'AMULUNG', '02', '0215', '021504'),
(136, '021505000', 'APARRI', '02', '0215', '021505'),
(137, '021506000', 'BAGGAO', '02', '0215', '021506'),
(138, '021507000', 'BALLESTEROS', '02', '0215', '021507'),
(139, '021508000', 'BUGUEY', '02', '0215', '021508'),
(140, '021509000', 'CALAYAN', '02', '0215', '021509'),
(141, '021510000', 'CAMALANIUGAN', '02', '0215', '021510'),
(142, '021511000', 'CLAVERIA', '02', '0215', '021511'),
(143, '021512000', 'ENRILE', '02', '0215', '021512'),
(144, '021513000', 'GATTARAN', '02', '0215', '021513'),
(145, '021514000', 'GONZAGA', '02', '0215', '021514'),
(146, '021515000', 'IGUIG', '02', '0215', '021515'),
(147, '021516000', 'LAL-LO', '02', '0215', '021516'),
(148, '021517000', 'LASAM', '02', '0215', '021517'),
(149, '021518000', 'PAMPLONA', '02', '0215', '021518'),
(150, '021519000', 'PEÑABLANCA', '02', '0215', '021519'),
(151, '021520000', 'PIAT', '02', '0215', '021520'),
(152, '021521000', 'RIZAL', '02', '0215', '021521'),
(153, '021522000', 'SANCHEZ-MIRA', '02', '0215', '021522'),
(154, '021523000', 'SANTA ANA', '02', '0215', '021523'),
(155, '021524000', 'SANTA PRAXEDES', '02', '0215', '021524'),
(156, '021525000', 'SANTA TERESITA', '02', '0215', '021525'),
(157, '021526000', 'SANTO NIÑO (FAIRE)', '02', '0215', '021526'),
(158, '021527000', 'SOLANA', '02', '0215', '021527'),
(159, '021528000', 'TUAO', '02', '0215', '021528'),
(160, '021529000', 'TUGUEGARAO CITY (Capital)', '02', '0215', '021529'),
(161, '023101000', 'ALICIA', '02', '0231', '023101'),
(162, '023102000', 'ANGADANAN', '02', '0231', '023102'),
(163, '023103000', 'AURORA', '02', '0231', '023103'),
(164, '023104000', 'BENITO SOLIVEN', '02', '0231', '023104'),
(165, '023105000', 'BURGOS', '02', '0231', '023105'),
(166, '023106000', 'CABAGAN', '02', '0231', '023106'),
(167, '023107000', 'CABATUAN', '02', '0231', '023107'),
(168, '023108000', 'CITY OF CAUAYAN', '02', '0231', '023108'),
(169, '023109000', 'CORDON', '02', '0231', '023109'),
(170, '023110000', 'DINAPIGUE', '02', '0231', '023110'),
(171, '023111000', 'DIVILACAN', '02', '0231', '023111'),
(172, '023112000', 'ECHAGUE', '02', '0231', '023112'),
(173, '023113000', 'GAMU', '02', '0231', '023113'),
(174, '023114000', 'ILAGAN CITY (Capital)', '02', '0231', '023114'),
(175, '023115000', 'JONES', '02', '0231', '023115'),
(176, '023116000', 'LUNA', '02', '0231', '023116'),
(177, '023117000', 'MACONACON', '02', '0231', '023117'),
(178, '023118000', 'DELFIN ALBANO (MAGSAYSAY)', '02', '0231', '023118'),
(179, '023119000', 'MALLIG', '02', '0231', '023119'),
(180, '023120000', 'NAGUILIAN', '02', '0231', '023120'),
(181, '023121000', 'PALANAN', '02', '0231', '023121'),
(182, '023122000', 'QUEZON', '02', '0231', '023122'),
(183, '023123000', 'QUIRINO', '02', '0231', '023123'),
(184, '023124000', 'RAMON', '02', '0231', '023124'),
(185, '023125000', 'REINA MERCEDES', '02', '0231', '023125'),
(186, '023126000', 'ROXAS', '02', '0231', '023126'),
(187, '023127000', 'SAN AGUSTIN', '02', '0231', '023127'),
(188, '023128000', 'SAN GUILLERMO', '02', '0231', '023128'),
(189, '023129000', 'SAN ISIDRO', '02', '0231', '023129'),
(190, '023130000', 'SAN MANUEL', '02', '0231', '023130'),
(191, '023131000', 'SAN MARIANO', '02', '0231', '023131'),
(192, '023132000', 'SAN MATEO', '02', '0231', '023132'),
(193, '023133000', 'SAN PABLO', '02', '0231', '023133'),
(194, '023134000', 'SANTA MARIA', '02', '0231', '023134'),
(195, '023135000', 'CITY OF SANTIAGO', '02', '0231', '023135'),
(196, '023136000', 'SANTO TOMAS', '02', '0231', '023136'),
(197, '023137000', 'TUMAUINI', '02', '0231', '023137'),
(198, '025001000', 'AMBAGUIO', '02', '0250', '025001'),
(199, '025002000', 'ARITAO', '02', '0250', '025002'),
(200, '025003000', 'BAGABAG', '02', '0250', '025003'),
(201, '025004000', 'BAMBANG', '02', '0250', '025004'),
(202, '025005000', 'BAYOMBONG (Capital)', '02', '0250', '025005'),
(203, '025006000', 'DIADI', '02', '0250', '025006'),
(204, '025007000', 'DUPAX DEL NORTE', '02', '0250', '025007'),
(205, '025008000', 'DUPAX DEL SUR', '02', '0250', '025008'),
(206, '025009000', 'KASIBU', '02', '0250', '025009'),
(207, '025010000', 'KAYAPA', '02', '0250', '025010'),
(208, '025011000', 'QUEZON', '02', '0250', '025011'),
(209, '025012000', 'SANTA FE', '02', '0250', '025012'),
(210, '025013000', 'SOLANO', '02', '0250', '025013'),
(211, '025014000', 'VILLAVERDE', '02', '0250', '025014'),
(212, '025015000', 'ALFONSO CASTANEDA', '02', '0250', '025015'),
(213, '025701000', 'AGLIPAY', '02', '0257', '025701'),
(214, '025702000', 'CABARROGUIS (Capital)', '02', '0257', '025702'),
(215, '025703000', 'DIFFUN', '02', '0257', '025703'),
(216, '025704000', 'MADDELA', '02', '0257', '025704'),
(217, '025705000', 'SAGUDAY', '02', '0257', '025705'),
(218, '025706000', 'NAGTIPUNAN', '02', '0257', '025706'),
(219, '030801000', 'ABUCAY', '03', '0308', '030801'),
(220, '030802000', 'BAGAC', '03', '0308', '030802'),
(221, '030803000', 'CITY OF BALANGA (Capital)', '03', '0308', '030803'),
(222, '030804000', 'DINALUPIHAN', '03', '0308', '030804'),
(223, '030805000', 'HERMOSA', '03', '0308', '030805'),
(224, '030806000', 'LIMAY', '03', '0308', '030806'),
(225, '030807000', 'MARIVELES', '03', '0308', '030807'),
(226, '030808000', 'MORONG', '03', '0308', '030808'),
(227, '030809000', 'ORANI', '03', '0308', '030809'),
(228, '030810000', 'ORION', '03', '0308', '030810'),
(229, '030811000', 'PILAR', '03', '0308', '030811'),
(230, '030812000', 'SAMAL', '03', '0308', '030812'),
(231, '031401000', 'ANGAT', '03', '0314', '031401'),
(232, '031402000', 'BALAGTAS (BIGAA)', '03', '0314', '031402'),
(233, '031403000', 'BALIUAG', '03', '0314', '031403'),
(234, '031404000', 'BOCAUE', '03', '0314', '031404'),
(235, '031405000', 'BULACAN', '03', '0314', '031405'),
(236, '031406000', 'BUSTOS', '03', '0314', '031406'),
(237, '031407000', 'CALUMPIT', '03', '0314', '031407'),
(238, '031408000', 'GUIGUINTO', '03', '0314', '031408'),
(239, '031409000', 'HAGONOY', '03', '0314', '031409'),
(240, '031410000', 'CITY OF MALOLOS (Capital)', '03', '0314', '031410'),
(241, '031411000', 'MARILAO', '03', '0314', '031411'),
(242, '031412000', 'CITY OF MEYCAUAYAN', '03', '0314', '031412'),
(243, '031413000', 'NORZAGARAY', '03', '0314', '031413'),
(244, '031414000', 'OBANDO', '03', '0314', '031414'),
(245, '031415000', 'PANDI', '03', '0314', '031415'),
(246, '031416000', 'PAOMBONG', '03', '0314', '031416'),
(247, '031417000', 'PLARIDEL', '03', '0314', '031417'),
(248, '031418000', 'PULILAN', '03', '0314', '031418'),
(249, '031419000', 'SAN ILDEFONSO', '03', '0314', '031419'),
(250, '031420000', 'CITY OF SAN JOSE DEL MONTE', '03', '0314', '031420'),
(251, '031421000', 'SAN MIGUEL', '03', '0314', '031421'),
(252, '031422000', 'SAN RAFAEL', '03', '0314', '031422'),
(253, '031423000', 'SANTA MARIA', '03', '0314', '031423'),
(254, '031424000', 'DOÑA REMEDIOS TRINIDAD', '03', '0314', '031424'),
(255, '034901000', 'ALIAGA', '03', '0349', '034901'),
(256, '034902000', 'BONGABON', '03', '0349', '034902'),
(257, '034903000', 'CABANATUAN CITY', '03', '0349', '034903'),
(258, '034904000', 'CABIAO', '03', '0349', '034904'),
(259, '034905000', 'CARRANGLAN', '03', '0349', '034905'),
(260, '034906000', 'CUYAPO', '03', '0349', '034906'),
(261, '034907000', 'GABALDON (BITULOK & SABANI)', '03', '0349', '034907'),
(262, '034908000', 'CITY OF GAPAN', '03', '0349', '034908'),
(263, '034909000', 'GENERAL MAMERTO NATIVIDAD', '03', '0349', '034909'),
(264, '034910000', 'GENERAL TINIO (PAPAYA)', '03', '0349', '034910'),
(265, '034911000', 'GUIMBA', '03', '0349', '034911'),
(266, '034912000', 'JAEN', '03', '0349', '034912'),
(267, '034913000', 'LAUR', '03', '0349', '034913'),
(268, '034914000', 'LICAB', '03', '0349', '034914'),
(269, '034915000', 'LLANERA', '03', '0349', '034915'),
(270, '034916000', 'LUPAO', '03', '0349', '034916'),
(271, '034917000', 'SCIENCE CITY OF MUÑOZ', '03', '0349', '034917'),
(272, '034918000', 'NAMPICUAN', '03', '0349', '034918'),
(273, '034919000', 'PALAYAN CITY (Capital)', '03', '0349', '034919'),
(274, '034920000', 'PANTABANGAN', '03', '0349', '034920'),
(275, '034921000', 'PEÑARANDA', '03', '0349', '034921'),
(276, '034922000', 'QUEZON', '03', '0349', '034922'),
(277, '034923000', 'RIZAL', '03', '0349', '034923'),
(278, '034924000', 'SAN ANTONIO', '03', '0349', '034924'),
(279, '034925000', 'SAN ISIDRO', '03', '0349', '034925'),
(280, '034926000', 'SAN JOSE CITY', '03', '0349', '034926'),
(281, '034927000', 'SAN LEONARDO', '03', '0349', '034927'),
(282, '034928000', 'SANTA ROSA', '03', '0349', '034928'),
(283, '034929000', 'SANTO DOMINGO', '03', '0349', '034929'),
(284, '034930000', 'TALAVERA', '03', '0349', '034930'),
(285, '034931000', 'TALUGTUG', '03', '0349', '034931'),
(286, '034932000', 'ZARAGOZA', '03', '0349', '034932'),
(287, '035401000', 'ANGELES CITY', '03', '0354', '035401'),
(288, '035402000', 'APALIT', '03', '0354', '035402'),
(289, '035403000', 'ARAYAT', '03', '0354', '035403'),
(290, '035404000', 'BACOLOR', '03', '0354', '035404'),
(291, '035405000', 'CANDABA', '03', '0354', '035405'),
(292, '035406000', 'FLORIDABLANCA', '03', '0354', '035406'),
(293, '035407000', 'GUAGUA', '03', '0354', '035407'),
(294, '035408000', 'LUBAO', '03', '0354', '035408'),
(295, '035409000', 'MABALACAT CITY', '03', '0354', '035409'),
(296, '035410000', 'MACABEBE', '03', '0354', '035410'),
(297, '035411000', 'MAGALANG', '03', '0354', '035411'),
(298, '035412000', 'MASANTOL', '03', '0354', '035412'),
(299, '035413000', 'MEXICO', '03', '0354', '035413'),
(300, '035414000', 'MINALIN', '03', '0354', '035414'),
(301, '035415000', 'PORAC', '03', '0354', '035415'),
(302, '035416000', 'CITY OF SAN FERNANDO (Capital)', '03', '0354', '035416'),
(303, '035417000', 'SAN LUIS', '03', '0354', '035417'),
(304, '035418000', 'SAN SIMON', '03', '0354', '035418'),
(305, '035419000', 'SANTA ANA', '03', '0354', '035419'),
(306, '035420000', 'SANTA RITA', '03', '0354', '035420'),
(307, '035421000', 'SANTO TOMAS', '03', '0354', '035421'),
(308, '035422000', 'SASMUAN (Sexmoan)', '03', '0354', '035422'),
(309, '036901000', 'ANAO', '03', '0369', '036901'),
(310, '036902000', 'BAMBAN', '03', '0369', '036902'),
(311, '036903000', 'CAMILING', '03', '0369', '036903'),
(312, '036904000', 'CAPAS', '03', '0369', '036904'),
(313, '036905000', 'CONCEPCION', '03', '0369', '036905'),
(314, '036906000', 'GERONA', '03', '0369', '036906'),
(315, '036907000', 'LA PAZ', '03', '0369', '036907'),
(316, '036908000', 'MAYANTOC', '03', '0369', '036908'),
(317, '036909000', 'MONCADA', '03', '0369', '036909'),
(318, '036910000', 'PANIQUI', '03', '0369', '036910'),
(319, '036911000', 'PURA', '03', '0369', '036911'),
(320, '036912000', 'RAMOS', '03', '0369', '036912'),
(321, '036913000', 'SAN CLEMENTE', '03', '0369', '036913'),
(322, '036914000', 'SAN MANUEL', '03', '0369', '036914'),
(323, '036915000', 'SANTA IGNACIA', '03', '0369', '036915'),
(324, '036916000', 'CITY OF TARLAC (Capital)', '03', '0369', '036916'),
(325, '036917000', 'VICTORIA', '03', '0369', '036917'),
(326, '036918000', 'SAN JOSE', '03', '0369', '036918'),
(327, '037101000', 'BOTOLAN', '03', '0371', '037101'),
(328, '037102000', 'CABANGAN', '03', '0371', '037102'),
(329, '037103000', 'CANDELARIA', '03', '0371', '037103'),
(330, '037104000', 'CASTILLEJOS', '03', '0371', '037104'),
(331, '037105000', 'IBA (Capital)', '03', '0371', '037105'),
(332, '037106000', 'MASINLOC', '03', '0371', '037106'),
(333, '037107000', 'OLONGAPO CITY', '03', '0371', '037107'),
(334, '037108000', 'PALAUIG', '03', '0371', '037108'),
(335, '037109000', 'SAN ANTONIO', '03', '0371', '037109'),
(336, '037110000', 'SAN FELIPE', '03', '0371', '037110'),
(337, '037111000', 'SAN MARCELINO', '03', '0371', '037111'),
(338, '037112000', 'SAN NARCISO', '03', '0371', '037112'),
(339, '037113000', 'SANTA CRUZ', '03', '0371', '037113'),
(340, '037114000', 'SUBIC', '03', '0371', '037114'),
(341, '037701000', 'BALER (Capital)', '03', '0377', '037701'),
(342, '037702000', 'CASIGURAN', '03', '0377', '037702'),
(343, '037703000', 'DILASAG', '03', '0377', '037703'),
(344, '037704000', 'DINALUNGAN', '03', '0377', '037704'),
(345, '037705000', 'DINGALAN', '03', '0377', '037705'),
(346, '037706000', 'DIPACULAO', '03', '0377', '037706'),
(347, '037707000', 'MARIA AURORA', '03', '0377', '037707'),
(348, '037708000', 'SAN LUIS', '03', '0377', '037708'),
(349, '041001000', 'AGONCILLO', '04', '0410', '041001'),
(350, '041002000', 'ALITAGTAG', '04', '0410', '041002'),
(351, '041003000', 'BALAYAN', '04', '0410', '041003'),
(352, '041004000', 'BALETE', '04', '0410', '041004'),
(353, '041005000', 'BATANGAS CITY (Capital)', '04', '0410', '041005'),
(354, '041006000', 'BAUAN', '04', '0410', '041006'),
(355, '041007000', 'CALACA', '04', '0410', '041007'),
(356, '041008000', 'CALATAGAN', '04', '0410', '041008'),
(357, '041009000', 'CUENCA', '04', '0410', '041009'),
(358, '041010000', 'IBAAN', '04', '0410', '041010'),
(359, '041011000', 'LAUREL', '04', '0410', '041011'),
(360, '041012000', 'LEMERY', '04', '0410', '041012'),
(361, '041013000', 'LIAN', '04', '0410', '041013'),
(362, '041014000', 'LIPA CITY', '04', '0410', '041014'),
(363, '041015000', 'LOBO', '04', '0410', '041015'),
(364, '041016000', 'MABINI', '04', '0410', '041016'),
(365, '041017000', 'MALVAR', '04', '0410', '041017'),
(366, '041018000', 'MATAASNAKAHOY', '04', '0410', '041018'),
(367, '041019000', 'NASUGBU', '04', '0410', '041019'),
(368, '041020000', 'PADRE GARCIA', '04', '0410', '041020'),
(369, '041021000', 'ROSARIO', '04', '0410', '041021'),
(370, '041022000', 'SAN JOSE', '04', '0410', '041022'),
(371, '041023000', 'SAN JUAN', '04', '0410', '041023'),
(372, '041024000', 'SAN LUIS', '04', '0410', '041024'),
(373, '041025000', 'SAN NICOLAS', '04', '0410', '041025'),
(374, '041026000', 'SAN PASCUAL', '04', '0410', '041026'),
(375, '041027000', 'SANTA TERESITA', '04', '0410', '041027'),
(376, '041028000', 'SANTO TOMAS', '04', '0410', '041028'),
(377, '041029000', 'TAAL', '04', '0410', '041029'),
(378, '041030000', 'TALISAY', '04', '0410', '041030'),
(379, '041031000', 'CITY OF TANAUAN', '04', '0410', '041031'),
(380, '041032000', 'TAYSAN', '04', '0410', '041032'),
(381, '041033000', 'TINGLOY', '04', '0410', '041033'),
(382, '041034000', 'TUY', '04', '0410', '041034'),
(383, '042101000', 'ALFONSO', '04', '0421', '042101'),
(384, '042102000', 'AMADEO', '04', '0421', '042102'),
(385, '042103000', 'BACOOR CITY', '04', '0421', '042103'),
(386, '042104000', 'CARMONA', '04', '0421', '042104'),
(387, '042105000', 'CAVITE CITY', '04', '0421', '042105'),
(388, '042106000', 'CITY OF DASMARIÑAS', '04', '0421', '042106'),
(389, '042107000', 'GENERAL EMILIO AGUINALDO', '04', '0421', '042107'),
(390, '042108000', 'GENERAL TRIAS', '04', '0421', '042108'),
(391, '042109000', 'IMUS CITY', '04', '0421', '042109'),
(392, '042110000', 'INDANG', '04', '0421', '042110'),
(393, '042111000', 'KAWIT', '04', '0421', '042111'),
(394, '042112000', 'MAGALLANES', '04', '0421', '042112'),
(395, '042113000', 'MARAGONDON', '04', '0421', '042113'),
(396, '042114000', 'MENDEZ (MENDEZ-NUÑEZ)', '04', '0421', '042114'),
(397, '042115000', 'NAIC', '04', '0421', '042115'),
(398, '042116000', 'NOVELETA', '04', '0421', '042116'),
(399, '042117000', 'ROSARIO', '04', '0421', '042117'),
(400, '042118000', 'SILANG', '04', '0421', '042118'),
(401, '042119000', 'TAGAYTAY CITY', '04', '0421', '042119'),
(402, '042120000', 'TANZA', '04', '0421', '042120'),
(403, '042121000', 'TERNATE', '04', '0421', '042121'),
(404, '042122000', 'TRECE MARTIRES CITY (Capital)', '04', '0421', '042122'),
(405, '042123000', 'GEN. MARIANO ALVAREZ', '04', '0421', '042123'),
(406, '043401000', 'ALAMINOS', '04', '0434', '043401'),
(407, '043402000', 'BAY', '04', '0434', '043402'),
(408, '043403000', 'CITY OF BIÑAN', '04', '0434', '043403'),
(409, '043404000', 'CABUYAO CITY', '04', '0434', '043404'),
(410, '043405000', 'CITY OF CALAMBA', '04', '0434', '043405'),
(411, '043406000', 'CALAUAN', '04', '0434', '043406'),
(412, '043407000', 'CAVINTI', '04', '0434', '043407'),
(413, '043408000', 'FAMY', '04', '0434', '043408'),
(414, '043409000', 'KALAYAAN', '04', '0434', '043409'),
(415, '043410000', 'LILIW', '04', '0434', '043410'),
(416, '043411000', 'LOS BAÑOS', '04', '0434', '043411'),
(417, '043412000', 'LUISIANA', '04', '0434', '043412'),
(418, '043413000', 'LUMBAN', '04', '0434', '043413'),
(419, '043414000', 'MABITAC', '04', '0434', '043414'),
(420, '043415000', 'MAGDALENA', '04', '0434', '043415'),
(421, '043416000', 'MAJAYJAY', '04', '0434', '043416'),
(422, '043417000', 'NAGCARLAN', '04', '0434', '043417'),
(423, '043418000', 'PAETE', '04', '0434', '043418'),
(424, '043419000', 'PAGSANJAN', '04', '0434', '043419'),
(425, '043420000', 'PAKIL', '04', '0434', '043420'),
(426, '043421000', 'PANGIL', '04', '0434', '043421'),
(427, '043422000', 'PILA', '04', '0434', '043422'),
(428, '043423000', 'RIZAL', '04', '0434', '043423'),
(429, '043424000', 'SAN PABLO CITY', '04', '0434', '043424'),
(430, '043425000', 'CITY OF SAN PEDRO', '04', '0434', '043425'),
(431, '043426000', 'SANTA CRUZ (Capital)', '04', '0434', '043426'),
(432, '043427000', 'SANTA MARIA', '04', '0434', '043427'),
(433, '043428000', 'CITY OF SANTA ROSA', '04', '0434', '043428'),
(434, '043429000', 'SINILOAN', '04', '0434', '043429'),
(435, '043430000', 'VICTORIA', '04', '0434', '043430'),
(436, '045601000', 'AGDANGAN', '04', '0456', '045601'),
(437, '045602000', 'ALABAT', '04', '0456', '045602'),
(438, '045603000', 'ATIMONAN', '04', '0456', '045603'),
(439, '045605000', 'BUENAVISTA', '04', '0456', '045605'),
(440, '045606000', 'BURDEOS', '04', '0456', '045606'),
(441, '045607000', 'CALAUAG', '04', '0456', '045607'),
(442, '045608000', 'CANDELARIA', '04', '0456', '045608'),
(443, '045610000', 'CATANAUAN', '04', '0456', '045610'),
(444, '045615000', 'DOLORES', '04', '0456', '045615'),
(445, '045616000', 'GENERAL LUNA', '04', '0456', '045616'),
(446, '045617000', 'GENERAL NAKAR', '04', '0456', '045617'),
(447, '045618000', 'GUINAYANGAN', '04', '0456', '045618'),
(448, '045619000', 'GUMACA', '04', '0456', '045619'),
(449, '045620000', 'INFANTA', '04', '0456', '045620'),
(450, '045621000', 'JOMALIG', '04', '0456', '045621'),
(451, '045622000', 'LOPEZ', '04', '0456', '045622'),
(452, '045623000', 'LUCBAN', '04', '0456', '045623'),
(453, '045624000', 'LUCENA CITY (Capital)', '04', '0456', '045624'),
(454, '045625000', 'MACALELON', '04', '0456', '045625'),
(455, '045627000', 'MAUBAN', '04', '0456', '045627'),
(456, '045628000', 'MULANAY', '04', '0456', '045628'),
(457, '045629000', 'PADRE BURGOS', '04', '0456', '045629'),
(458, '045630000', 'PAGBILAO', '04', '0456', '045630'),
(459, '045631000', 'PANUKULAN', '04', '0456', '045631'),
(460, '045632000', 'PATNANUNGAN', '04', '0456', '045632'),
(461, '045633000', 'PEREZ', '04', '0456', '045633'),
(462, '045634000', 'PITOGO', '04', '0456', '045634'),
(463, '045635000', 'PLARIDEL', '04', '0456', '045635'),
(464, '045636000', 'POLILLO', '04', '0456', '045636'),
(465, '045637000', 'QUEZON', '04', '0456', '045637'),
(466, '045638000', 'REAL', '04', '0456', '045638'),
(467, '045639000', 'SAMPALOC', '04', '0456', '045639'),
(468, '045640000', 'SAN ANDRES', '04', '0456', '045640'),
(469, '045641000', 'SAN ANTONIO', '04', '0456', '045641'),
(470, '045642000', 'SAN FRANCISCO (AURORA)', '04', '0456', '045642'),
(471, '045644000', 'SAN NARCISO', '04', '0456', '045644'),
(472, '045645000', 'SARIAYA', '04', '0456', '045645'),
(473, '045646000', 'TAGKAWAYAN', '04', '0456', '045646'),
(474, '045647000', 'CITY OF TAYABAS', '04', '0456', '045647'),
(475, '045648000', 'TIAONG', '04', '0456', '045648'),
(476, '045649000', 'UNISAN', '04', '0456', '045649'),
(477, '045801000', 'ANGONO', '04', '0458', '045801'),
(478, '045802000', 'CITY OF ANTIPOLO', '04', '0458', '045802'),
(479, '045803000', 'BARAS', '04', '0458', '045803'),
(480, '045804000', 'BINANGONAN', '04', '0458', '045804'),
(481, '045805000', 'CAINTA', '04', '0458', '045805'),
(482, '045806000', 'CARDONA', '04', '0458', '045806'),
(483, '045807000', 'JALA-JALA', '04', '0458', '045807'),
(484, '045808000', 'RODRIGUEZ (MONTALBAN)', '04', '0458', '045808'),
(485, '045809000', 'MORONG', '04', '0458', '045809'),
(486, '045810000', 'PILILLA', '04', '0458', '045810'),
(487, '045811000', 'SAN MATEO', '04', '0458', '045811'),
(488, '045812000', 'TANAY', '04', '0458', '045812'),
(489, '045813000', 'TAYTAY', '04', '0458', '045813'),
(490, '045814000', 'TERESA', '04', '0458', '045814'),
(491, '174001000', 'BOAC (Capital)', '17', '1740', '174001'),
(492, '174002000', 'BUENAVISTA', '17', '1740', '174002'),
(493, '174003000', 'GASAN', '17', '1740', '174003'),
(494, '174004000', 'MOGPOG', '17', '1740', '174004'),
(495, '174005000', 'SANTA CRUZ', '17', '1740', '174005'),
(496, '174006000', 'TORRIJOS', '17', '1740', '174006'),
(497, '175101000', 'ABRA DE ILOG', '17', '1751', '175101'),
(498, '175102000', 'CALINTAAN', '17', '1751', '175102'),
(499, '175103000', 'LOOC', '17', '1751', '175103'),
(500, '175104000', 'LUBANG', '17', '1751', '175104'),
(501, '175105000', 'MAGSAYSAY', '17', '1751', '175105'),
(502, '175106000', 'MAMBURAO (Capital)', '17', '1751', '175106'),
(503, '175107000', 'PALUAN', '17', '1751', '175107'),
(504, '175108000', 'RIZAL', '17', '1751', '175108'),
(505, '175109000', 'SABLAYAN', '17', '1751', '175109'),
(506, '175110000', 'SAN JOSE', '17', '1751', '175110'),
(507, '175111000', 'SANTA CRUZ', '17', '1751', '175111'),
(508, '175201000', 'BACO', '17', '1752', '175201'),
(509, '175202000', 'BANSUD', '17', '1752', '175202'),
(510, '175203000', 'BONGABONG', '17', '1752', '175203'),
(511, '175204000', 'BULALACAO (SAN PEDRO)', '17', '1752', '175204'),
(512, '175205000', 'CITY OF CALAPAN (Capital)', '17', '1752', '175205'),
(513, '175206000', 'GLORIA', '17', '1752', '175206'),
(514, '175207000', 'MANSALAY', '17', '1752', '175207'),
(515, '175208000', 'NAUJAN', '17', '1752', '175208'),
(516, '175209000', 'PINAMALAYAN', '17', '1752', '175209'),
(517, '175210000', 'POLA', '17', '1752', '175210'),
(518, '175211000', 'PUERTO GALERA', '17', '1752', '175211'),
(519, '175212000', 'ROXAS', '17', '1752', '175212'),
(520, '175213000', 'SAN TEODORO', '17', '1752', '175213'),
(521, '175214000', 'SOCORRO', '17', '1752', '175214'),
(522, '175215000', 'VICTORIA', '17', '1752', '175215'),
(523, '175301000', 'ABORLAN', '17', '1753', '175301'),
(524, '175302000', 'AGUTAYA', '17', '1753', '175302'),
(525, '175303000', 'ARACELI', '17', '1753', '175303'),
(526, '175304000', 'BALABAC', '17', '1753', '175304'),
(527, '175305000', 'BATARAZA', '17', '1753', '175305'),
(528, '175306000', 'BROOKE\'S POINT', '17', '1753', '175306'),
(529, '175307000', 'BUSUANGA', '17', '1753', '175307'),
(530, '175308000', 'CAGAYANCILLO', '17', '1753', '175308'),
(531, '175309000', 'CORON', '17', '1753', '175309'),
(532, '175310000', 'CUYO', '17', '1753', '175310'),
(533, '175311000', 'DUMARAN', '17', '1753', '175311'),
(534, '175312000', 'EL NIDO (BACUIT)', '17', '1753', '175312'),
(535, '175313000', 'LINAPACAN', '17', '1753', '175313'),
(536, '175314000', 'MAGSAYSAY', '17', '1753', '175314'),
(537, '175315000', 'NARRA', '17', '1753', '175315'),
(538, '175316000', 'PUERTO PRINCESA CITY (Capital)', '17', '1753', '175316'),
(539, '175317000', 'QUEZON', '17', '1753', '175317'),
(540, '175318000', 'ROXAS', '17', '1753', '175318'),
(541, '175319000', 'SAN VICENTE', '17', '1753', '175319'),
(542, '175320000', 'TAYTAY', '17', '1753', '175320'),
(543, '175321000', 'KALAYAAN', '17', '1753', '175321'),
(544, '175322000', 'CULION', '17', '1753', '175322'),
(545, '175323000', 'RIZAL (MARCOS)', '17', '1753', '175323'),
(546, '175324000', 'SOFRONIO ESPAÑOLA', '17', '1753', '175324'),
(547, '175901000', 'ALCANTARA', '17', '1759', '175901'),
(548, '175902000', 'BANTON', '17', '1759', '175902'),
(549, '175903000', 'CAJIDIOCAN', '17', '1759', '175903'),
(550, '175904000', 'CALATRAVA', '17', '1759', '175904'),
(551, '175905000', 'CONCEPCION', '17', '1759', '175905'),
(552, '175906000', 'CORCUERA', '17', '1759', '175906'),
(553, '175907000', 'LOOC', '17', '1759', '175907'),
(554, '175908000', 'MAGDIWANG', '17', '1759', '175908'),
(555, '175909000', 'ODIONGAN', '17', '1759', '175909'),
(556, '175910000', 'ROMBLON (Capital)', '17', '1759', '175910'),
(557, '175911000', 'SAN AGUSTIN', '17', '1759', '175911'),
(558, '175912000', 'SAN ANDRES', '17', '1759', '175912'),
(559, '175913000', 'SAN FERNANDO', '17', '1759', '175913'),
(560, '175914000', 'SAN JOSE', '17', '1759', '175914'),
(561, '175915000', 'SANTA FE', '17', '1759', '175915'),
(562, '175916000', 'FERROL', '17', '1759', '175916'),
(563, '175917000', 'SANTA MARIA (IMELDA)', '17', '1759', '175917'),
(564, '050501000', 'BACACAY', '05', '0505', '050501'),
(565, '050502000', 'CAMALIG', '05', '0505', '050502'),
(566, '050503000', 'DARAGA (LOCSIN)', '05', '0505', '050503'),
(567, '050504000', 'GUINOBATAN', '05', '0505', '050504'),
(568, '050505000', 'JOVELLAR', '05', '0505', '050505'),
(569, '050506000', 'LEGAZPI CITY (Capital)', '05', '0505', '050506'),
(570, '050507000', 'LIBON', '05', '0505', '050507'),
(571, '050508000', 'CITY OF LIGAO', '05', '0505', '050508'),
(572, '050509000', 'MALILIPOT', '05', '0505', '050509'),
(573, '050510000', 'MALINAO', '05', '0505', '050510'),
(574, '050511000', 'MANITO', '05', '0505', '050511'),
(575, '050512000', 'OAS', '05', '0505', '050512'),
(576, '050513000', 'PIO DURAN', '05', '0505', '050513'),
(577, '050514000', 'POLANGUI', '05', '0505', '050514'),
(578, '050515000', 'RAPU-RAPU', '05', '0505', '050515'),
(579, '050516000', 'SANTO DOMINGO (LIBOG)', '05', '0505', '050516'),
(580, '050517000', 'CITY OF TABACO', '05', '0505', '050517'),
(581, '050518000', 'TIWI', '05', '0505', '050518'),
(582, '051601000', 'BASUD', '05', '0516', '051601'),
(583, '051602000', 'CAPALONGA', '05', '0516', '051602'),
(584, '051603000', 'DAET (Capital)', '05', '0516', '051603'),
(585, '051604000', 'SAN LORENZO RUIZ (IMELDA)', '05', '0516', '051604'),
(586, '051605000', 'JOSE PANGANIBAN', '05', '0516', '051605'),
(587, '051606000', 'LABO', '05', '0516', '051606'),
(588, '051607000', 'MERCEDES', '05', '0516', '051607'),
(589, '051608000', 'PARACALE', '05', '0516', '051608'),
(590, '051609000', 'SAN VICENTE', '05', '0516', '051609'),
(591, '051610000', 'SANTA ELENA', '05', '0516', '051610'),
(592, '051611000', 'TALISAY', '05', '0516', '051611'),
(593, '051612000', 'VINZONS', '05', '0516', '051612'),
(594, '051701000', 'BAAO', '05', '0517', '051701'),
(595, '051702000', 'BALATAN', '05', '0517', '051702'),
(596, '051703000', 'BATO', '05', '0517', '051703'),
(597, '051704000', 'BOMBON', '05', '0517', '051704'),
(598, '051705000', 'BUHI', '05', '0517', '051705'),
(599, '051706000', 'BULA', '05', '0517', '051706'),
(600, '051707000', 'CABUSAO', '05', '0517', '051707'),
(601, '051708000', 'CALABANGA', '05', '0517', '051708'),
(602, '051709000', 'CAMALIGAN', '05', '0517', '051709'),
(603, '051710000', 'CANAMAN', '05', '0517', '051710'),
(604, '051711000', 'CARAMOAN', '05', '0517', '051711'),
(605, '051712000', 'DEL GALLEGO', '05', '0517', '051712'),
(606, '051713000', 'GAINZA', '05', '0517', '051713'),
(607, '051714000', 'GARCHITORENA', '05', '0517', '051714'),
(608, '051715000', 'GOA', '05', '0517', '051715'),
(609, '051716000', 'IRIGA CITY', '05', '0517', '051716'),
(610, '051717000', 'LAGONOY', '05', '0517', '051717'),
(611, '051718000', 'LIBMANAN', '05', '0517', '051718'),
(612, '051719000', 'LUPI', '05', '0517', '051719'),
(613, '051720000', 'MAGARAO', '05', '0517', '051720'),
(614, '051721000', 'MILAOR', '05', '0517', '051721'),
(615, '051722000', 'MINALABAC', '05', '0517', '051722'),
(616, '051723000', 'NABUA', '05', '0517', '051723'),
(617, '051724000', 'NAGA CITY', '05', '0517', '051724'),
(618, '051725000', 'OCAMPO', '05', '0517', '051725'),
(619, '051726000', 'PAMPLONA', '05', '0517', '051726'),
(620, '051727000', 'PASACAO', '05', '0517', '051727'),
(621, '051728000', 'PILI (Capital)', '05', '0517', '051728'),
(622, '051729000', 'PRESENTACION (PARUBCAN)', '05', '0517', '051729'),
(623, '051730000', 'RAGAY', '05', '0517', '051730'),
(624, '051731000', 'SAGÑAY', '05', '0517', '051731'),
(625, '051732000', 'SAN FERNANDO', '05', '0517', '051732'),
(626, '051733000', 'SAN JOSE', '05', '0517', '051733'),
(627, '051734000', 'SIPOCOT', '05', '0517', '051734'),
(628, '051735000', 'SIRUMA', '05', '0517', '051735'),
(629, '051736000', 'TIGAON', '05', '0517', '051736'),
(630, '051737000', 'TINAMBAC', '05', '0517', '051737'),
(631, '052001000', 'BAGAMANOC', '05', '0520', '052001'),
(632, '052002000', 'BARAS', '05', '0520', '052002'),
(633, '052003000', 'BATO', '05', '0520', '052003'),
(634, '052004000', 'CARAMORAN', '05', '0520', '052004'),
(635, '052005000', 'GIGMOTO', '05', '0520', '052005'),
(636, '052006000', 'PANDAN', '05', '0520', '052006'),
(637, '052007000', 'PANGANIBAN (PAYO)', '05', '0520', '052007'),
(638, '052008000', 'SAN ANDRES (CALOLBON)', '05', '0520', '052008'),
(639, '052009000', 'SAN MIGUEL', '05', '0520', '052009'),
(640, '052010000', 'VIGA', '05', '0520', '052010'),
(641, '052011000', 'VIRAC (Capital)', '05', '0520', '052011'),
(642, '054101000', 'AROROY', '05', '0541', '054101'),
(643, '054102000', 'BALENO', '05', '0541', '054102'),
(644, '054103000', 'BALUD', '05', '0541', '054103'),
(645, '054104000', 'BATUAN', '05', '0541', '054104'),
(646, '054105000', 'CATAINGAN', '05', '0541', '054105'),
(647, '054106000', 'CAWAYAN', '05', '0541', '054106'),
(648, '054107000', 'CLAVERIA', '05', '0541', '054107'),
(649, '054108000', 'DIMASALANG', '05', '0541', '054108'),
(650, '054109000', 'ESPERANZA', '05', '0541', '054109'),
(651, '054110000', 'MANDAON', '05', '0541', '054110'),
(652, '054111000', 'CITY OF MASBATE (Capital)', '05', '0541', '054111'),
(653, '054112000', 'MILAGROS', '05', '0541', '054112'),
(654, '054113000', 'MOBO', '05', '0541', '054113'),
(655, '054114000', 'MONREAL', '05', '0541', '054114'),
(656, '054115000', 'PALANAS', '05', '0541', '054115'),
(657, '054116000', 'PIO V. CORPUZ (LIMBUHAN)', '05', '0541', '054116'),
(658, '054117000', 'PLACER', '05', '0541', '054117'),
(659, '054118000', 'SAN FERNANDO', '05', '0541', '054118'),
(660, '054119000', 'SAN JACINTO', '05', '0541', '054119'),
(661, '054120000', 'SAN PASCUAL', '05', '0541', '054120'),
(662, '054121000', 'USON', '05', '0541', '054121'),
(663, '056202000', 'BARCELONA', '05', '0562', '056202'),
(664, '056203000', 'BULAN', '05', '0562', '056203'),
(665, '056204000', 'BULUSAN', '05', '0562', '056204'),
(666, '056205000', 'CASIGURAN', '05', '0562', '056205'),
(667, '056206000', 'CASTILLA', '05', '0562', '056206'),
(668, '056207000', 'DONSOL', '05', '0562', '056207'),
(669, '056208000', 'GUBAT', '05', '0562', '056208'),
(670, '056209000', 'IROSIN', '05', '0562', '056209'),
(671, '056210000', 'JUBAN', '05', '0562', '056210'),
(672, '056211000', 'MAGALLANES', '05', '0562', '056211'),
(673, '056212000', 'MATNOG', '05', '0562', '056212'),
(674, '056213000', 'PILAR', '05', '0562', '056213'),
(675, '056214000', 'PRIETO DIAZ', '05', '0562', '056214'),
(676, '056215000', 'SANTA MAGDALENA', '05', '0562', '056215'),
(677, '056216000', 'CITY OF SORSOGON (Capital)', '05', '0562', '056216'),
(678, '060401000', 'ALTAVAS', '06', '0604', '060401'),
(679, '060402000', 'BALETE', '06', '0604', '060402'),
(680, '060403000', 'BANGA', '06', '0604', '060403'),
(681, '060404000', 'BATAN', '06', '0604', '060404'),
(682, '060405000', 'BURUANGA', '06', '0604', '060405'),
(683, '060406000', 'IBAJAY', '06', '0604', '060406'),
(684, '060407000', 'KALIBO (Capital)', '06', '0604', '060407'),
(685, '060408000', 'LEZO', '06', '0604', '060408'),
(686, '060409000', 'LIBACAO', '06', '0604', '060409'),
(687, '060410000', 'MADALAG', '06', '0604', '060410'),
(688, '060411000', 'MAKATO', '06', '0604', '060411'),
(689, '060412000', 'MALAY', '06', '0604', '060412'),
(690, '060413000', 'MALINAO', '06', '0604', '060413'),
(691, '060414000', 'NABAS', '06', '0604', '060414'),
(692, '060415000', 'NEW WASHINGTON', '06', '0604', '060415'),
(693, '060416000', 'NUMANCIA', '06', '0604', '060416'),
(694, '060417000', 'TANGALAN', '06', '0604', '060417'),
(695, '060601000', 'ANINI-Y', '06', '0606', '060601'),
(696, '060602000', 'BARBAZA', '06', '0606', '060602'),
(697, '060603000', 'BELISON', '06', '0606', '060603'),
(698, '060604000', 'BUGASONG', '06', '0606', '060604'),
(699, '060605000', 'CALUYA', '06', '0606', '060605'),
(700, '060606000', 'CULASI', '06', '0606', '060606'),
(701, '060607000', 'TOBIAS FORNIER (DAO)', '06', '0606', '060607'),
(702, '060608000', 'HAMTIC', '06', '0606', '060608'),
(703, '060609000', 'LAUA-AN', '06', '0606', '060609'),
(704, '060610000', 'LIBERTAD', '06', '0606', '060610'),
(705, '060611000', 'PANDAN', '06', '0606', '060611'),
(706, '060612000', 'PATNONGON', '06', '0606', '060612'),
(707, '060613000', 'SAN JOSE (Capital)', '06', '0606', '060613'),
(708, '060614000', 'SAN REMIGIO', '06', '0606', '060614'),
(709, '060615000', 'SEBASTE', '06', '0606', '060615'),
(710, '060616000', 'SIBALOM', '06', '0606', '060616'),
(711, '060617000', 'TIBIAO', '06', '0606', '060617'),
(712, '060618000', 'VALDERRAMA', '06', '0606', '060618'),
(713, '061901000', 'CUARTERO', '06', '0619', '061901'),
(714, '061902000', 'DAO', '06', '0619', '061902'),
(715, '061903000', 'DUMALAG', '06', '0619', '061903'),
(716, '061904000', 'DUMARAO', '06', '0619', '061904'),
(717, '061905000', 'IVISAN', '06', '0619', '061905'),
(718, '061906000', 'JAMINDAN', '06', '0619', '061906'),
(719, '061907000', 'MA-AYON', '06', '0619', '061907'),
(720, '061908000', 'MAMBUSAO', '06', '0619', '061908'),
(721, '061909000', 'PANAY', '06', '0619', '061909'),
(722, '061910000', 'PANITAN', '06', '0619', '061910'),
(723, '061911000', 'PILAR', '06', '0619', '061911'),
(724, '061912000', 'PONTEVEDRA', '06', '0619', '061912'),
(725, '061913000', 'PRESIDENT ROXAS', '06', '0619', '061913'),
(726, '061914000', 'ROXAS CITY (Capital)', '06', '0619', '061914'),
(727, '061915000', 'SAPI-AN', '06', '0619', '061915'),
(728, '061916000', 'SIGMA', '06', '0619', '061916'),
(729, '061917000', 'TAPAZ', '06', '0619', '061917'),
(730, '063001000', 'AJUY', '06', '0630', '063001'),
(731, '063002000', 'ALIMODIAN', '06', '0630', '063002'),
(732, '063003000', 'ANILAO', '06', '0630', '063003'),
(733, '063004000', 'BADIANGAN', '06', '0630', '063004'),
(734, '063005000', 'BALASAN', '06', '0630', '063005'),
(735, '063006000', 'BANATE', '06', '0630', '063006'),
(736, '063007000', 'BAROTAC NUEVO', '06', '0630', '063007'),
(737, '063008000', 'BAROTAC VIEJO', '06', '0630', '063008'),
(738, '063009000', 'BATAD', '06', '0630', '063009'),
(739, '063010000', 'BINGAWAN', '06', '0630', '063010'),
(740, '063012000', 'CABATUAN', '06', '0630', '063012'),
(741, '063013000', 'CALINOG', '06', '0630', '063013'),
(742, '063014000', 'CARLES', '06', '0630', '063014'),
(743, '063015000', 'CONCEPCION', '06', '0630', '063015'),
(744, '063016000', 'DINGLE', '06', '0630', '063016'),
(745, '063017000', 'DUEÑAS', '06', '0630', '063017'),
(746, '063018000', 'DUMANGAS', '06', '0630', '063018'),
(747, '063019000', 'ESTANCIA', '06', '0630', '063019'),
(748, '063020000', 'GUIMBAL', '06', '0630', '063020'),
(749, '063021000', 'IGBARAS', '06', '0630', '063021'),
(750, '063022000', 'ILOILO CITY (Capital)', '06', '0630', '063022'),
(751, '063023000', 'JANIUAY', '06', '0630', '063023'),
(752, '063025000', 'LAMBUNAO', '06', '0630', '063025'),
(753, '063026000', 'LEGANES', '06', '0630', '063026'),
(754, '063027000', 'LEMERY', '06', '0630', '063027'),
(755, '063028000', 'LEON', '06', '0630', '063028'),
(756, '063029000', 'MAASIN', '06', '0630', '063029'),
(757, '063030000', 'MIAGAO', '06', '0630', '063030'),
(758, '063031000', 'MINA', '06', '0630', '063031'),
(759, '063032000', 'NEW LUCENA', '06', '0630', '063032'),
(760, '063034000', 'OTON', '06', '0630', '063034'),
(761, '063035000', 'CITY OF PASSI', '06', '0630', '063035'),
(762, '063036000', 'PAVIA', '06', '0630', '063036'),
(763, '063037000', 'POTOTAN', '06', '0630', '063037'),
(764, '063038000', 'SAN DIONISIO', '06', '0630', '063038'),
(765, '063039000', 'SAN ENRIQUE', '06', '0630', '063039'),
(766, '063040000', 'SAN JOAQUIN', '06', '0630', '063040'),
(767, '063041000', 'SAN MIGUEL', '06', '0630', '063041'),
(768, '063042000', 'SAN RAFAEL', '06', '0630', '063042'),
(769, '063043000', 'SANTA BARBARA', '06', '0630', '063043'),
(770, '063044000', 'SARA', '06', '0630', '063044'),
(771, '063045000', 'TIGBAUAN', '06', '0630', '063045'),
(772, '063046000', 'TUBUNGAN', '06', '0630', '063046'),
(773, '063047000', 'ZARRAGA', '06', '0630', '063047'),
(774, '064501000', 'BACOLOD CITY (Capital)', '06', '0645', '064501'),
(775, '064502000', 'BAGO CITY', '06', '0645', '064502'),
(776, '064503000', 'BINALBAGAN', '06', '0645', '064503'),
(777, '064504000', 'CADIZ CITY', '06', '0645', '064504'),
(778, '064505000', 'CALATRAVA', '06', '0645', '064505'),
(779, '064506000', 'CANDONI', '06', '0645', '064506'),
(780, '064507000', 'CAUAYAN', '06', '0645', '064507'),
(781, '064508000', 'ENRIQUE B. MAGALONA (SARAVIA)', '06', '0645', '064508'),
(782, '064509000', 'CITY OF ESCALANTE', '06', '0645', '064509'),
(783, '064510000', 'CITY OF HIMAMAYLAN', '06', '0645', '064510'),
(784, '064511000', 'HINIGARAN', '06', '0645', '064511'),
(785, '064512000', 'HINOBA-AN (ASIA)', '06', '0645', '064512'),
(786, '064513000', 'ILOG', '06', '0645', '064513'),
(787, '064514000', 'ISABELA', '06', '0645', '064514'),
(788, '064515000', 'CITY OF KABANKALAN', '06', '0645', '064515'),
(789, '064516000', 'LA CARLOTA CITY', '06', '0645', '064516'),
(790, '064517000', 'LA CASTELLANA', '06', '0645', '064517'),
(791, '064518000', 'MANAPLA', '06', '0645', '064518'),
(792, '064519000', 'MOISES PADILLA (MAGALLON)', '06', '0645', '064519'),
(793, '064520000', 'MURCIA', '06', '0645', '064520'),
(794, '064521000', 'PONTEVEDRA', '06', '0645', '064521'),
(795, '064522000', 'PULUPANDAN', '06', '0645', '064522'),
(796, '064523000', 'SAGAY CITY', '06', '0645', '064523'),
(797, '064524000', 'SAN CARLOS CITY', '06', '0645', '064524'),
(798, '064525000', 'SAN ENRIQUE', '06', '0645', '064525'),
(799, '064526000', 'SILAY CITY', '06', '0645', '064526'),
(800, '064527000', 'CITY OF SIPALAY', '06', '0645', '064527'),
(801, '064528000', 'CITY OF TALISAY', '06', '0645', '064528'),
(802, '064529000', 'TOBOSO', '06', '0645', '064529'),
(803, '064530000', 'VALLADOLID', '06', '0645', '064530'),
(804, '064531000', 'CITY OF VICTORIAS', '06', '0645', '064531'),
(805, '064532000', 'SALVADOR BENEDICTO', '06', '0645', '064532'),
(806, '067901000', 'BUENAVISTA', '06', '0679', '067901'),
(807, '067902000', 'JORDAN (Capital)', '06', '0679', '067902'),
(808, '067903000', 'NUEVA VALENCIA', '06', '0679', '067903'),
(809, '067904000', 'SAN LORENZO', '06', '0679', '067904'),
(810, '067905000', 'SIBUNAG', '06', '0679', '067905'),
(811, '071201000', 'ALBURQUERQUE', '07', '0712', '071201'),
(812, '071202000', 'ALICIA', '07', '0712', '071202'),
(813, '071203000', 'ANDA', '07', '0712', '071203'),
(814, '071204000', 'ANTEQUERA', '07', '0712', '071204'),
(815, '071205000', 'BACLAYON', '07', '0712', '071205'),
(816, '071206000', 'BALILIHAN', '07', '0712', '071206'),
(817, '071207000', 'BATUAN', '07', '0712', '071207'),
(818, '071208000', 'BILAR', '07', '0712', '071208'),
(819, '071209000', 'BUENAVISTA', '07', '0712', '071209'),
(820, '071210000', 'CALAPE', '07', '0712', '071210'),
(821, '071211000', 'CANDIJAY', '07', '0712', '071211'),
(822, '071212000', 'CARMEN', '07', '0712', '071212'),
(823, '071213000', 'CATIGBIAN', '07', '0712', '071213'),
(824, '071214000', 'CLARIN', '07', '0712', '071214'),
(825, '071215000', 'CORELLA', '07', '0712', '071215'),
(826, '071216000', 'CORTES', '07', '0712', '071216'),
(827, '071217000', 'DAGOHOY', '07', '0712', '071217'),
(828, '071218000', 'DANAO', '07', '0712', '071218'),
(829, '071219000', 'DAUIS', '07', '0712', '071219'),
(830, '071220000', 'DIMIAO', '07', '0712', '071220'),
(831, '071221000', 'DUERO', '07', '0712', '071221'),
(832, '071222000', 'GARCIA HERNANDEZ', '07', '0712', '071222'),
(833, '071223000', 'GUINDULMAN', '07', '0712', '071223'),
(834, '071224000', 'INABANGA', '07', '0712', '071224'),
(835, '071225000', 'JAGNA', '07', '0712', '071225'),
(836, '071226000', 'JETAFE', '07', '0712', '071226'),
(837, '071227000', 'LILA', '07', '0712', '071227'),
(838, '071228000', 'LOAY', '07', '0712', '071228'),
(839, '071229000', 'LOBOC', '07', '0712', '071229'),
(840, '071230000', 'LOON', '07', '0712', '071230'),
(841, '071231000', 'MABINI', '07', '0712', '071231'),
(842, '071232000', 'MARIBOJOC', '07', '0712', '071232'),
(843, '071233000', 'PANGLAO', '07', '0712', '071233'),
(844, '071234000', 'PILAR', '07', '0712', '071234'),
(845, '071235000', 'PRES. CARLOS P. GARCIA (PITOGO)', '07', '0712', '071235'),
(846, '071236000', 'SAGBAYAN (BORJA)', '07', '0712', '071236'),
(847, '071237000', 'SAN ISIDRO', '07', '0712', '071237'),
(848, '071238000', 'SAN MIGUEL', '07', '0712', '071238'),
(849, '071239000', 'SEVILLA', '07', '0712', '071239'),
(850, '071240000', 'SIERRA BULLONES', '07', '0712', '071240'),
(851, '071241000', 'SIKATUNA', '07', '0712', '071241'),
(852, '071242000', 'TAGBILARAN CITY (Capital)', '07', '0712', '071242'),
(853, '071243000', 'TALIBON', '07', '0712', '071243'),
(854, '071244000', 'TRINIDAD', '07', '0712', '071244'),
(855, '071245000', 'TUBIGON', '07', '0712', '071245'),
(856, '071246000', 'UBAY', '07', '0712', '071246'),
(857, '071247000', 'VALENCIA', '07', '0712', '071247'),
(858, '071248000', 'BIEN UNIDO', '07', '0712', '071248'),
(859, '072201000', 'ALCANTARA', '07', '0722', '072201'),
(860, '072202000', 'ALCOY', '07', '0722', '072202'),
(861, '072203000', 'ALEGRIA', '07', '0722', '072203'),
(862, '072204000', 'ALOGUINSAN', '07', '0722', '072204'),
(863, '072205000', 'ARGAO', '07', '0722', '072205'),
(864, '072206000', 'ASTURIAS', '07', '0722', '072206'),
(865, '072207000', 'BADIAN', '07', '0722', '072207'),
(866, '072208000', 'BALAMBAN', '07', '0722', '072208'),
(867, '072209000', 'BANTAYAN', '07', '0722', '072209'),
(868, '072210000', 'BARILI', '07', '0722', '072210'),
(869, '072211000', 'CITY OF BOGO', '07', '0722', '072211'),
(870, '072212000', 'BOLJOON', '07', '0722', '072212'),
(871, '072213000', 'BORBON', '07', '0722', '072213'),
(872, '072214000', 'CITY OF CARCAR', '07', '0722', '072214'),
(873, '072215000', 'CARMEN', '07', '0722', '072215'),
(874, '072216000', 'CATMON', '07', '0722', '072216'),
(875, '072217000', 'CEBU CITY (Capital)', '07', '0722', '072217'),
(876, '072218000', 'COMPOSTELA', '07', '0722', '072218'),
(877, '072219000', 'CONSOLACION', '07', '0722', '072219'),
(878, '072220000', 'CORDOVA', '07', '0722', '072220'),
(879, '072221000', 'DAANBANTAYAN', '07', '0722', '072221'),
(880, '072222000', 'DALAGUETE', '07', '0722', '072222'),
(881, '072223000', 'DANAO CITY', '07', '0722', '072223'),
(882, '072224000', 'DUMANJUG', '07', '0722', '072224'),
(883, '072225000', 'GINATILAN', '07', '0722', '072225'),
(884, '072226000', 'LAPU-LAPU CITY (OPON)', '07', '0722', '072226'),
(885, '072227000', 'LILOAN', '07', '0722', '072227'),
(886, '072228000', 'MADRIDEJOS', '07', '0722', '072228'),
(887, '072229000', 'MALABUYOC', '07', '0722', '072229'),
(888, '072230000', 'MANDAUE CITY', '07', '0722', '072230'),
(889, '072231000', 'MEDELLIN', '07', '0722', '072231'),
(890, '072232000', 'MINGLANILLA', '07', '0722', '072232'),
(891, '072233000', 'MOALBOAL', '07', '0722', '072233'),
(892, '072234000', 'CITY OF NAGA', '07', '0722', '072234'),
(893, '072235000', 'OSLOB', '07', '0722', '072235'),
(894, '072236000', 'PILAR', '07', '0722', '072236'),
(895, '072237000', 'PINAMUNGAHAN', '07', '0722', '072237'),
(896, '072238000', 'PORO', '07', '0722', '072238'),
(897, '072239000', 'RONDA', '07', '0722', '072239'),
(898, '072240000', 'SAMBOAN', '07', '0722', '072240'),
(899, '072241000', 'SAN FERNANDO', '07', '0722', '072241'),
(900, '072242000', 'SAN FRANCISCO', '07', '0722', '072242'),
(901, '072243000', 'SAN REMIGIO', '07', '0722', '072243'),
(902, '072244000', 'SANTA FE', '07', '0722', '072244'),
(903, '072245000', 'SANTANDER', '07', '0722', '072245'),
(904, '072246000', 'SIBONGA', '07', '0722', '072246'),
(905, '072247000', 'SOGOD', '07', '0722', '072247'),
(906, '072248000', 'TABOGON', '07', '0722', '072248'),
(907, '072249000', 'TABUELAN', '07', '0722', '072249');
INSERT INTO `refcitymun` (`id`, `psgcCode`, `citymunDesc`, `regDesc`, `provCode`, `citymunCode`) VALUES
(908, '072250000', 'CITY OF TALISAY', '07', '0722', '072250'),
(909, '072251000', 'TOLEDO CITY', '07', '0722', '072251'),
(910, '072252000', 'TUBURAN', '07', '0722', '072252'),
(911, '072253000', 'TUDELA', '07', '0722', '072253'),
(912, '074601000', 'AMLAN (AYUQUITAN)', '07', '0746', '074601'),
(913, '074602000', 'AYUNGON', '07', '0746', '074602'),
(914, '074603000', 'BACONG', '07', '0746', '074603'),
(915, '074604000', 'BAIS CITY', '07', '0746', '074604'),
(916, '074605000', 'BASAY', '07', '0746', '074605'),
(917, '074606000', 'CITY OF BAYAWAN (TULONG)', '07', '0746', '074606'),
(918, '074607000', 'BINDOY (PAYABON)', '07', '0746', '074607'),
(919, '074608000', 'CANLAON CITY', '07', '0746', '074608'),
(920, '074609000', 'DAUIN', '07', '0746', '074609'),
(921, '074610000', 'DUMAGUETE CITY (Capital)', '07', '0746', '074610'),
(922, '074611000', 'CITY OF GUIHULNGAN', '07', '0746', '074611'),
(923, '074612000', 'JIMALALUD', '07', '0746', '074612'),
(924, '074613000', 'LA LIBERTAD', '07', '0746', '074613'),
(925, '074614000', 'MABINAY', '07', '0746', '074614'),
(926, '074615000', 'MANJUYOD', '07', '0746', '074615'),
(927, '074616000', 'PAMPLONA', '07', '0746', '074616'),
(928, '074617000', 'SAN JOSE', '07', '0746', '074617'),
(929, '074618000', 'SANTA CATALINA', '07', '0746', '074618'),
(930, '074619000', 'SIATON', '07', '0746', '074619'),
(931, '074620000', 'SIBULAN', '07', '0746', '074620'),
(932, '074621000', 'CITY OF TANJAY', '07', '0746', '074621'),
(933, '074622000', 'TAYASAN', '07', '0746', '074622'),
(934, '074623000', 'VALENCIA (LUZURRIAGA)', '07', '0746', '074623'),
(935, '074624000', 'VALLEHERMOSO', '07', '0746', '074624'),
(936, '074625000', 'ZAMBOANGUITA', '07', '0746', '074625'),
(937, '076101000', 'ENRIQUE VILLANUEVA', '07', '0761', '076101'),
(938, '076102000', 'LARENA', '07', '0761', '076102'),
(939, '076103000', 'LAZI', '07', '0761', '076103'),
(940, '076104000', 'MARIA', '07', '0761', '076104'),
(941, '076105000', 'SAN JUAN', '07', '0761', '076105'),
(942, '076106000', 'SIQUIJOR (Capital)', '07', '0761', '076106'),
(943, '082601000', 'ARTECHE', '08', '0826', '082601'),
(944, '082602000', 'BALANGIGA', '08', '0826', '082602'),
(945, '082603000', 'BALANGKAYAN', '08', '0826', '082603'),
(946, '082604000', 'CITY OF BORONGAN (Capital)', '08', '0826', '082604'),
(947, '082605000', 'CAN-AVID', '08', '0826', '082605'),
(948, '082606000', 'DOLORES', '08', '0826', '082606'),
(949, '082607000', 'GENERAL MACARTHUR', '08', '0826', '082607'),
(950, '082608000', 'GIPORLOS', '08', '0826', '082608'),
(951, '082609000', 'GUIUAN', '08', '0826', '082609'),
(952, '082610000', 'HERNANI', '08', '0826', '082610'),
(953, '082611000', 'JIPAPAD', '08', '0826', '082611'),
(954, '082612000', 'LAWAAN', '08', '0826', '082612'),
(955, '082613000', 'LLORENTE', '08', '0826', '082613'),
(956, '082614000', 'MASLOG', '08', '0826', '082614'),
(957, '082615000', 'MAYDOLONG', '08', '0826', '082615'),
(958, '082616000', 'MERCEDES', '08', '0826', '082616'),
(959, '082617000', 'ORAS', '08', '0826', '082617'),
(960, '082618000', 'QUINAPONDAN', '08', '0826', '082618'),
(961, '082619000', 'SALCEDO', '08', '0826', '082619'),
(962, '082620000', 'SAN JULIAN', '08', '0826', '082620'),
(963, '082621000', 'SAN POLICARPO', '08', '0826', '082621'),
(964, '082622000', 'SULAT', '08', '0826', '082622'),
(965, '082623000', 'TAFT', '08', '0826', '082623'),
(966, '083701000', 'ABUYOG', '08', '0837', '083701'),
(967, '083702000', 'ALANGALANG', '08', '0837', '083702'),
(968, '083703000', 'ALBUERA', '08', '0837', '083703'),
(969, '083705000', 'BABATNGON', '08', '0837', '083705'),
(970, '083706000', 'BARUGO', '08', '0837', '083706'),
(971, '083707000', 'BATO', '08', '0837', '083707'),
(972, '083708000', 'CITY OF BAYBAY', '08', '0837', '083708'),
(973, '083710000', 'BURAUEN', '08', '0837', '083710'),
(974, '083713000', 'CALUBIAN', '08', '0837', '083713'),
(975, '083714000', 'CAPOOCAN', '08', '0837', '083714'),
(976, '083715000', 'CARIGARA', '08', '0837', '083715'),
(977, '083717000', 'DAGAMI', '08', '0837', '083717'),
(978, '083718000', 'DULAG', '08', '0837', '083718'),
(979, '083719000', 'HILONGOS', '08', '0837', '083719'),
(980, '083720000', 'HINDANG', '08', '0837', '083720'),
(981, '083721000', 'INOPACAN', '08', '0837', '083721'),
(982, '083722000', 'ISABEL', '08', '0837', '083722'),
(983, '083723000', 'JARO', '08', '0837', '083723'),
(984, '083724000', 'JAVIER (BUGHO)', '08', '0837', '083724'),
(985, '083725000', 'JULITA', '08', '0837', '083725'),
(986, '083726000', 'KANANGA', '08', '0837', '083726'),
(987, '083728000', 'LA PAZ', '08', '0837', '083728'),
(988, '083729000', 'LEYTE', '08', '0837', '083729'),
(989, '083730000', 'MACARTHUR', '08', '0837', '083730'),
(990, '083731000', 'MAHAPLAG', '08', '0837', '083731'),
(991, '083733000', 'MATAG-OB', '08', '0837', '083733'),
(992, '083734000', 'MATALOM', '08', '0837', '083734'),
(993, '083735000', 'MAYORGA', '08', '0837', '083735'),
(994, '083736000', 'MERIDA', '08', '0837', '083736'),
(995, '083738000', 'ORMOC CITY', '08', '0837', '083738'),
(996, '083739000', 'PALO', '08', '0837', '083739'),
(997, '083740000', 'PALOMPON', '08', '0837', '083740'),
(998, '083741000', 'PASTRANA', '08', '0837', '083741'),
(999, '083742000', 'SAN ISIDRO', '08', '0837', '083742'),
(1000, '083743000', 'SAN MIGUEL', '08', '0837', '083743'),
(1001, '083744000', 'SANTA FE', '08', '0837', '083744'),
(1002, '083745000', 'TABANGO', '08', '0837', '083745'),
(1003, '083746000', 'TABONTABON', '08', '0837', '083746'),
(1004, '083747000', 'TACLOBAN CITY (Capital)', '08', '0837', '083747'),
(1005, '083748000', 'TANAUAN', '08', '0837', '083748'),
(1006, '083749000', 'TOLOSA', '08', '0837', '083749'),
(1007, '083750000', 'TUNGA', '08', '0837', '083750'),
(1008, '083751000', 'VILLABA', '08', '0837', '083751'),
(1009, '084801000', 'ALLEN', '08', '0848', '084801'),
(1010, '084802000', 'BIRI', '08', '0848', '084802'),
(1011, '084803000', 'BOBON', '08', '0848', '084803'),
(1012, '084804000', 'CAPUL', '08', '0848', '084804'),
(1013, '084805000', 'CATARMAN (Capital)', '08', '0848', '084805'),
(1014, '084806000', 'CATUBIG', '08', '0848', '084806'),
(1015, '084807000', 'GAMAY', '08', '0848', '084807'),
(1016, '084808000', 'LAOANG', '08', '0848', '084808'),
(1017, '084809000', 'LAPINIG', '08', '0848', '084809'),
(1018, '084810000', 'LAS NAVAS', '08', '0848', '084810'),
(1019, '084811000', 'LAVEZARES', '08', '0848', '084811'),
(1020, '084812000', 'MAPANAS', '08', '0848', '084812'),
(1021, '084813000', 'MONDRAGON', '08', '0848', '084813'),
(1022, '084814000', 'PALAPAG', '08', '0848', '084814'),
(1023, '084815000', 'PAMBUJAN', '08', '0848', '084815'),
(1024, '084816000', 'ROSARIO', '08', '0848', '084816'),
(1025, '084817000', 'SAN ANTONIO', '08', '0848', '084817'),
(1026, '084818000', 'SAN ISIDRO', '08', '0848', '084818'),
(1027, '084819000', 'SAN JOSE', '08', '0848', '084819'),
(1028, '084820000', 'SAN ROQUE', '08', '0848', '084820'),
(1029, '084821000', 'SAN VICENTE', '08', '0848', '084821'),
(1030, '084822000', 'SILVINO LOBOS', '08', '0848', '084822'),
(1031, '084823000', 'VICTORIA', '08', '0848', '084823'),
(1032, '084824000', 'LOPE DE VEGA', '08', '0848', '084824'),
(1033, '086001000', 'ALMAGRO', '08', '0860', '086001'),
(1034, '086002000', 'BASEY', '08', '0860', '086002'),
(1035, '086003000', 'CALBAYOG CITY', '08', '0860', '086003'),
(1036, '086004000', 'CALBIGA', '08', '0860', '086004'),
(1037, '086005000', 'CITY OF CATBALOGAN (Capital)', '08', '0860', '086005'),
(1038, '086006000', 'DARAM', '08', '0860', '086006'),
(1039, '086007000', 'GANDARA', '08', '0860', '086007'),
(1040, '086008000', 'HINABANGAN', '08', '0860', '086008'),
(1041, '086009000', 'JIABONG', '08', '0860', '086009'),
(1042, '086010000', 'MARABUT', '08', '0860', '086010'),
(1043, '086011000', 'MATUGUINAO', '08', '0860', '086011'),
(1044, '086012000', 'MOTIONG', '08', '0860', '086012'),
(1045, '086013000', 'PINABACDAO', '08', '0860', '086013'),
(1046, '086014000', 'SAN JOSE DE BUAN', '08', '0860', '086014'),
(1047, '086015000', 'SAN SEBASTIAN', '08', '0860', '086015'),
(1048, '086016000', 'SANTA MARGARITA', '08', '0860', '086016'),
(1049, '086017000', 'SANTA RITA', '08', '0860', '086017'),
(1050, '086018000', 'SANTO NIÑO', '08', '0860', '086018'),
(1051, '086019000', 'TALALORA', '08', '0860', '086019'),
(1052, '086020000', 'TARANGNAN', '08', '0860', '086020'),
(1053, '086021000', 'VILLAREAL', '08', '0860', '086021'),
(1054, '086022000', 'PARANAS (WRIGHT)', '08', '0860', '086022'),
(1055, '086023000', 'ZUMARRAGA', '08', '0860', '086023'),
(1056, '086024000', 'TAGAPUL-AN', '08', '0860', '086024'),
(1057, '086025000', 'SAN JORGE', '08', '0860', '086025'),
(1058, '086026000', 'PAGSANGHAN', '08', '0860', '086026'),
(1059, '086401000', 'ANAHAWAN', '08', '0864', '086401'),
(1060, '086402000', 'BONTOC', '08', '0864', '086402'),
(1061, '086403000', 'HINUNANGAN', '08', '0864', '086403'),
(1062, '086404000', 'HINUNDAYAN', '08', '0864', '086404'),
(1063, '086405000', 'LIBAGON', '08', '0864', '086405'),
(1064, '086406000', 'LILOAN', '08', '0864', '086406'),
(1065, '086407000', 'CITY OF MAASIN (Capital)', '08', '0864', '086407'),
(1066, '086408000', 'MACROHON', '08', '0864', '086408'),
(1067, '086409000', 'MALITBOG', '08', '0864', '086409'),
(1068, '086410000', 'PADRE BURGOS', '08', '0864', '086410'),
(1069, '086411000', 'PINTUYAN', '08', '0864', '086411'),
(1070, '086412000', 'SAINT BERNARD', '08', '0864', '086412'),
(1071, '086413000', 'SAN FRANCISCO', '08', '0864', '086413'),
(1072, '086414000', 'SAN JUAN (CABALIAN)', '08', '0864', '086414'),
(1073, '086415000', 'SAN RICARDO', '08', '0864', '086415'),
(1074, '086416000', 'SILAGO', '08', '0864', '086416'),
(1075, '086417000', 'SOGOD', '08', '0864', '086417'),
(1076, '086418000', 'TOMAS OPPUS', '08', '0864', '086418'),
(1077, '086419000', 'LIMASAWA', '08', '0864', '086419'),
(1078, '087801000', 'ALMERIA', '08', '0878', '087801'),
(1079, '087802000', 'BILIRAN', '08', '0878', '087802'),
(1080, '087803000', 'CABUCGAYAN', '08', '0878', '087803'),
(1081, '087804000', 'CAIBIRAN', '08', '0878', '087804'),
(1082, '087805000', 'CULABA', '08', '0878', '087805'),
(1083, '087806000', 'KAWAYAN', '08', '0878', '087806'),
(1084, '087807000', 'MARIPIPI', '08', '0878', '087807'),
(1085, '087808000', 'NAVAL (Capital)', '08', '0878', '087808'),
(1086, '097201000', 'DAPITAN CITY', '09', '0972', '097201'),
(1087, '097202000', 'DIPOLOG CITY (Capital)', '09', '0972', '097202'),
(1088, '097203000', 'KATIPUNAN', '09', '0972', '097203'),
(1089, '097204000', 'LA LIBERTAD', '09', '0972', '097204'),
(1090, '097205000', 'LABASON', '09', '0972', '097205'),
(1091, '097206000', 'LILOY', '09', '0972', '097206'),
(1092, '097207000', 'MANUKAN', '09', '0972', '097207'),
(1093, '097208000', 'MUTIA', '09', '0972', '097208'),
(1094, '097209000', 'PIÑAN (NEW PIÑAN)', '09', '0972', '097209'),
(1095, '097210000', 'POLANCO', '09', '0972', '097210'),
(1096, '097211000', 'PRES. MANUEL A. ROXAS', '09', '0972', '097211'),
(1097, '097212000', 'RIZAL', '09', '0972', '097212'),
(1098, '097213000', 'SALUG', '09', '0972', '097213'),
(1099, '097214000', 'SERGIO OSMEÑA SR.', '09', '0972', '097214'),
(1100, '097215000', 'SIAYAN', '09', '0972', '097215'),
(1101, '097216000', 'SIBUCO', '09', '0972', '097216'),
(1102, '097217000', 'SIBUTAD', '09', '0972', '097217'),
(1103, '097218000', 'SINDANGAN', '09', '0972', '097218'),
(1104, '097219000', 'SIOCON', '09', '0972', '097219'),
(1105, '097220000', 'SIRAWAI', '09', '0972', '097220'),
(1106, '097221000', 'TAMPILISAN', '09', '0972', '097221'),
(1107, '097222000', 'JOSE DALMAN (PONOT)', '09', '0972', '097222'),
(1108, '097223000', 'GUTALAC', '09', '0972', '097223'),
(1109, '097224000', 'BALIGUIAN', '09', '0972', '097224'),
(1110, '097225000', 'GODOD', '09', '0972', '097225'),
(1111, '097226000', 'BACUNGAN (Leon T. Postigo)', '09', '0972', '097226'),
(1112, '097227000', 'KALAWIT', '09', '0972', '097227'),
(1113, '097302000', 'AURORA', '09', '0973', '097302'),
(1114, '097303000', 'BAYOG', '09', '0973', '097303'),
(1115, '097305000', 'DIMATALING', '09', '0973', '097305'),
(1116, '097306000', 'DINAS', '09', '0973', '097306'),
(1117, '097307000', 'DUMALINAO', '09', '0973', '097307'),
(1118, '097308000', 'DUMINGAG', '09', '0973', '097308'),
(1119, '097311000', 'KUMALARANG', '09', '0973', '097311'),
(1120, '097312000', 'LABANGAN', '09', '0973', '097312'),
(1121, '097313000', 'LAPUYAN', '09', '0973', '097313'),
(1122, '097315000', 'MAHAYAG', '09', '0973', '097315'),
(1123, '097317000', 'MARGOSATUBIG', '09', '0973', '097317'),
(1124, '097318000', 'MIDSALIP', '09', '0973', '097318'),
(1125, '097319000', 'MOLAVE', '09', '0973', '097319'),
(1126, '097322000', 'PAGADIAN CITY (Capital)', '09', '0973', '097322'),
(1127, '097323000', 'RAMON MAGSAYSAY (LIARGO)', '09', '0973', '097323'),
(1128, '097324000', 'SAN MIGUEL', '09', '0973', '097324'),
(1129, '097325000', 'SAN PABLO', '09', '0973', '097325'),
(1130, '097327000', 'TABINA', '09', '0973', '097327'),
(1131, '097328000', 'TAMBULIG', '09', '0973', '097328'),
(1132, '097330000', 'TUKURAN', '09', '0973', '097330'),
(1133, '097332000', 'ZAMBOANGA CITY', '09', '0973', '097332'),
(1134, '097333000', 'LAKEWOOD', '09', '0973', '097333'),
(1135, '097337000', 'JOSEFINA', '09', '0973', '097337'),
(1136, '097338000', 'PITOGO', '09', '0973', '097338'),
(1137, '097340000', 'SOMINOT (DON MARIANO MARCOS)', '09', '0973', '097340'),
(1138, '097341000', 'VINCENZO A. SAGUN', '09', '0973', '097341'),
(1139, '097343000', 'GUIPOS', '09', '0973', '097343'),
(1140, '097344000', 'TIGBAO', '09', '0973', '097344'),
(1141, '098301000', 'ALICIA', '09', '0983', '098301'),
(1142, '098302000', 'BUUG', '09', '0983', '098302'),
(1143, '098303000', 'DIPLAHAN', '09', '0983', '098303'),
(1144, '098304000', 'IMELDA', '09', '0983', '098304'),
(1145, '098305000', 'IPIL (Capital)', '09', '0983', '098305'),
(1146, '098306000', 'KABASALAN', '09', '0983', '098306'),
(1147, '098307000', 'MABUHAY', '09', '0983', '098307'),
(1148, '098308000', 'MALANGAS', '09', '0983', '098308'),
(1149, '098309000', 'NAGA', '09', '0983', '098309'),
(1150, '098310000', 'OLUTANGA', '09', '0983', '098310'),
(1151, '098311000', 'PAYAO', '09', '0983', '098311'),
(1152, '098312000', 'ROSELLER LIM', '09', '0983', '098312'),
(1153, '098313000', 'SIAY', '09', '0983', '098313'),
(1154, '098314000', 'TALUSAN', '09', '0983', '098314'),
(1155, '098315000', 'TITAY', '09', '0983', '098315'),
(1156, '098316000', 'TUNGAWAN', '09', '0983', '098316'),
(1157, '099701000', 'CITY OF ISABELA', '09', '0997', '099701'),
(1158, '101301000', 'BAUNGON', '10', '1013', '101301'),
(1159, '101302000', 'DAMULOG', '10', '1013', '101302'),
(1160, '101303000', 'DANGCAGAN', '10', '1013', '101303'),
(1161, '101304000', 'DON CARLOS', '10', '1013', '101304'),
(1162, '101305000', 'IMPASUG-ONG', '10', '1013', '101305'),
(1163, '101306000', 'KADINGILAN', '10', '1013', '101306'),
(1164, '101307000', 'KALILANGAN', '10', '1013', '101307'),
(1165, '101308000', 'KIBAWE', '10', '1013', '101308'),
(1166, '101309000', 'KITAOTAO', '10', '1013', '101309'),
(1167, '101310000', 'LANTAPAN', '10', '1013', '101310'),
(1168, '101311000', 'LIBONA', '10', '1013', '101311'),
(1169, '101312000', 'CITY OF MALAYBALAY (Capital)', '10', '1013', '101312'),
(1170, '101313000', 'MALITBOG', '10', '1013', '101313'),
(1171, '101314000', 'MANOLO FORTICH', '10', '1013', '101314'),
(1172, '101315000', 'MARAMAG', '10', '1013', '101315'),
(1173, '101316000', 'PANGANTUCAN', '10', '1013', '101316'),
(1174, '101317000', 'QUEZON', '10', '1013', '101317'),
(1175, '101318000', 'SAN FERNANDO', '10', '1013', '101318'),
(1176, '101319000', 'SUMILAO', '10', '1013', '101319'),
(1177, '101320000', 'TALAKAG', '10', '1013', '101320'),
(1178, '101321000', 'CITY OF VALENCIA', '10', '1013', '101321'),
(1179, '101322000', 'CABANGLASAN', '10', '1013', '101322'),
(1180, '101801000', 'CATARMAN', '10', '1018', '101801'),
(1181, '101802000', 'GUINSILIBAN', '10', '1018', '101802'),
(1182, '101803000', 'MAHINOG', '10', '1018', '101803'),
(1183, '101804000', 'MAMBAJAO (Capital)', '10', '1018', '101804'),
(1184, '101805000', 'SAGAY', '10', '1018', '101805'),
(1185, '103501000', 'BACOLOD', '10', '1035', '103501'),
(1186, '103502000', 'BALOI', '10', '1035', '103502'),
(1187, '103503000', 'BAROY', '10', '1035', '103503'),
(1188, '103504000', 'ILIGAN CITY', '10', '1035', '103504'),
(1189, '103505000', 'KAPATAGAN', '10', '1035', '103505'),
(1190, '103506000', 'SULTAN NAGA DIMAPORO (KAROMATAN)', '10', '1035', '103506'),
(1191, '103507000', 'KAUSWAGAN', '10', '1035', '103507'),
(1192, '103508000', 'KOLAMBUGAN', '10', '1035', '103508'),
(1193, '103509000', 'LALA', '10', '1035', '103509'),
(1194, '103510000', 'LINAMON', '10', '1035', '103510'),
(1195, '103511000', 'MAGSAYSAY', '10', '1035', '103511'),
(1196, '103512000', 'MAIGO', '10', '1035', '103512'),
(1197, '103513000', 'MATUNGAO', '10', '1035', '103513'),
(1198, '103514000', 'MUNAI', '10', '1035', '103514'),
(1199, '103515000', 'NUNUNGAN', '10', '1035', '103515'),
(1200, '103516000', 'PANTAO RAGAT', '10', '1035', '103516'),
(1201, '103517000', 'POONA PIAGAPO', '10', '1035', '103517'),
(1202, '103518000', 'SALVADOR', '10', '1035', '103518'),
(1203, '103519000', 'SAPAD', '10', '1035', '103519'),
(1204, '103520000', 'TAGOLOAN', '10', '1035', '103520'),
(1205, '103521000', 'TANGCAL', '10', '1035', '103521'),
(1206, '103522000', 'TUBOD (Capital)', '10', '1035', '103522'),
(1207, '103523000', 'PANTAR', '10', '1035', '103523'),
(1208, '104201000', 'ALORAN', '10', '1042', '104201'),
(1209, '104202000', 'BALIANGAO', '10', '1042', '104202'),
(1210, '104203000', 'BONIFACIO', '10', '1042', '104203'),
(1211, '104204000', 'CALAMBA', '10', '1042', '104204'),
(1212, '104205000', 'CLARIN', '10', '1042', '104205'),
(1213, '104206000', 'CONCEPCION', '10', '1042', '104206'),
(1214, '104207000', 'JIMENEZ', '10', '1042', '104207'),
(1215, '104208000', 'LOPEZ JAENA', '10', '1042', '104208'),
(1216, '104209000', 'OROQUIETA CITY (Capital)', '10', '1042', '104209'),
(1217, '104210000', 'OZAMIS CITY', '10', '1042', '104210'),
(1218, '104211000', 'PANAON', '10', '1042', '104211'),
(1219, '104212000', 'PLARIDEL', '10', '1042', '104212'),
(1220, '104213000', 'SAPANG DALAGA', '10', '1042', '104213'),
(1221, '104214000', 'SINACABAN', '10', '1042', '104214'),
(1222, '104215000', 'TANGUB CITY', '10', '1042', '104215'),
(1223, '104216000', 'TUDELA', '10', '1042', '104216'),
(1224, '104217000', 'DON VICTORIANO CHIONGBIAN  (DON MARIANO MARCOS)', '10', '1042', '104217'),
(1225, '104301000', 'ALUBIJID', '10', '1043', '104301'),
(1226, '104302000', 'BALINGASAG', '10', '1043', '104302'),
(1227, '104303000', 'BALINGOAN', '10', '1043', '104303'),
(1228, '104304000', 'BINUANGAN', '10', '1043', '104304'),
(1229, '104305000', 'CAGAYAN DE ORO CITY (Capital)', '10', '1043', '104305'),
(1230, '104306000', 'CLAVERIA', '10', '1043', '104306'),
(1231, '104307000', 'CITY OF EL SALVADOR', '10', '1043', '104307'),
(1232, '104308000', 'GINGOOG CITY', '10', '1043', '104308'),
(1233, '104309000', 'GITAGUM', '10', '1043', '104309'),
(1234, '104310000', 'INITAO', '10', '1043', '104310'),
(1235, '104311000', 'JASAAN', '10', '1043', '104311'),
(1236, '104312000', 'KINOGUITAN', '10', '1043', '104312'),
(1237, '104313000', 'LAGONGLONG', '10', '1043', '104313'),
(1238, '104314000', 'LAGUINDINGAN', '10', '1043', '104314'),
(1239, '104315000', 'LIBERTAD', '10', '1043', '104315'),
(1240, '104316000', 'LUGAIT', '10', '1043', '104316'),
(1241, '104317000', 'MAGSAYSAY (LINUGOS)', '10', '1043', '104317'),
(1242, '104318000', 'MANTICAO', '10', '1043', '104318'),
(1243, '104319000', 'MEDINA', '10', '1043', '104319'),
(1244, '104320000', 'NAAWAN', '10', '1043', '104320'),
(1245, '104321000', 'OPOL', '10', '1043', '104321'),
(1246, '104322000', 'SALAY', '10', '1043', '104322'),
(1247, '104323000', 'SUGBONGCOGON', '10', '1043', '104323'),
(1248, '104324000', 'TAGOLOAN', '10', '1043', '104324'),
(1249, '104325000', 'TALISAYAN', '10', '1043', '104325'),
(1250, '104326000', 'VILLANUEVA', '10', '1043', '104326'),
(1251, '112301000', 'ASUNCION (SAUG)', '11', '1123', '112301'),
(1252, '112303000', 'CARMEN', '11', '1123', '112303'),
(1253, '112305000', 'KAPALONG', '11', '1123', '112305'),
(1254, '112314000', 'NEW CORELLA', '11', '1123', '112314'),
(1255, '112315000', 'CITY OF PANABO', '11', '1123', '112315'),
(1256, '112317000', 'ISLAND GARDEN CITY OF SAMAL', '11', '1123', '112317'),
(1257, '112318000', 'SANTO TOMAS', '11', '1123', '112318'),
(1258, '112319000', 'CITY OF TAGUM (Capital)', '11', '1123', '112319'),
(1259, '112322000', 'TALAINGOD', '11', '1123', '112322'),
(1260, '112323000', 'BRAULIO E. DUJALI', '11', '1123', '112323'),
(1261, '112324000', 'SAN ISIDRO', '11', '1123', '112324'),
(1262, '112401000', 'BANSALAN', '11', '1124', '112401'),
(1263, '112402000', 'DAVAO CITY', '11', '1124', '112402'),
(1264, '112403000', 'CITY OF DIGOS (Capital)', '11', '1124', '112403'),
(1265, '112404000', 'HAGONOY', '11', '1124', '112404'),
(1266, '112406000', 'KIBLAWAN', '11', '1124', '112406'),
(1267, '112407000', 'MAGSAYSAY', '11', '1124', '112407'),
(1268, '112408000', 'MALALAG', '11', '1124', '112408'),
(1269, '112410000', 'MATANAO', '11', '1124', '112410'),
(1270, '112411000', 'PADADA', '11', '1124', '112411'),
(1271, '112412000', 'SANTA CRUZ', '11', '1124', '112412'),
(1272, '112414000', 'SULOP', '11', '1124', '112414'),
(1273, '112501000', 'BAGANGA', '11', '1125', '112501'),
(1274, '112502000', 'BANAYBANAY', '11', '1125', '112502'),
(1275, '112503000', 'BOSTON', '11', '1125', '112503'),
(1276, '112504000', 'CARAGA', '11', '1125', '112504'),
(1277, '112505000', 'CATEEL', '11', '1125', '112505'),
(1278, '112506000', 'GOVERNOR GENEROSO', '11', '1125', '112506'),
(1279, '112507000', 'LUPON', '11', '1125', '112507'),
(1280, '112508000', 'MANAY', '11', '1125', '112508'),
(1281, '112509000', 'CITY OF MATI (Capital)', '11', '1125', '112509'),
(1282, '112510000', 'SAN ISIDRO', '11', '1125', '112510'),
(1283, '112511000', 'TARRAGONA', '11', '1125', '112511'),
(1284, '118201000', 'COMPOSTELA', '11', '1182', '118201'),
(1285, '118202000', 'LAAK (SAN VICENTE)', '11', '1182', '118202'),
(1286, '118203000', 'MABINI (DOÑA ALICIA)', '11', '1182', '118203'),
(1287, '118204000', 'MACO', '11', '1182', '118204'),
(1288, '118205000', 'MARAGUSAN (SAN MARIANO)', '11', '1182', '118205'),
(1289, '118206000', 'MAWAB', '11', '1182', '118206'),
(1290, '118207000', 'MONKAYO', '11', '1182', '118207'),
(1291, '118208000', 'MONTEVISTA', '11', '1182', '118208'),
(1292, '118209000', 'NABUNTURAN (Capital)', '11', '1182', '118209'),
(1293, '118210000', 'NEW BATAAN', '11', '1182', '118210'),
(1294, '118211000', 'PANTUKAN', '11', '1182', '118211'),
(1295, '118601000', 'DON MARCELINO', '11', '1186', '118601'),
(1296, '118602000', 'JOSE ABAD SANTOS (TRINIDAD)', '11', '1186', '118602'),
(1297, '118603000', 'MALITA', '11', '1186', '118603'),
(1298, '118604000', 'SANTA MARIA', '11', '1186', '118604'),
(1299, '118605000', 'SARANGANI', '11', '1186', '118605'),
(1300, '124701000', 'ALAMADA', '12', '1247', '124701'),
(1301, '124702000', 'CARMEN', '12', '1247', '124702'),
(1302, '124703000', 'KABACAN', '12', '1247', '124703'),
(1303, '124704000', 'CITY OF KIDAPAWAN (Capital)', '12', '1247', '124704'),
(1304, '124705000', 'LIBUNGAN', '12', '1247', '124705'),
(1305, '124706000', 'MAGPET', '12', '1247', '124706'),
(1306, '124707000', 'MAKILALA', '12', '1247', '124707'),
(1307, '124708000', 'MATALAM', '12', '1247', '124708'),
(1308, '124709000', 'MIDSAYAP', '12', '1247', '124709'),
(1309, '124710000', 'M\'LANG', '12', '1247', '124710'),
(1310, '124711000', 'PIGKAWAYAN', '12', '1247', '124711'),
(1311, '124712000', 'PIKIT', '12', '1247', '124712'),
(1312, '124713000', 'PRESIDENT ROXAS', '12', '1247', '124713'),
(1313, '124714000', 'TULUNAN', '12', '1247', '124714'),
(1314, '124715000', 'ANTIPAS', '12', '1247', '124715'),
(1315, '124716000', 'BANISILAN', '12', '1247', '124716'),
(1316, '124717000', 'ALEOSAN', '12', '1247', '124717'),
(1317, '124718000', 'ARAKAN', '12', '1247', '124718'),
(1318, '126302000', 'BANGA', '12', '1263', '126302'),
(1319, '126303000', 'GENERAL SANTOS CITY (DADIANGAS)', '12', '1263', '126303'),
(1320, '126306000', 'CITY OF KORONADAL (Capital)', '12', '1263', '126306'),
(1321, '126311000', 'NORALA', '12', '1263', '126311'),
(1322, '126312000', 'POLOMOLOK', '12', '1263', '126312'),
(1323, '126313000', 'SURALLAH', '12', '1263', '126313'),
(1324, '126314000', 'TAMPAKAN', '12', '1263', '126314'),
(1325, '126315000', 'TANTANGAN', '12', '1263', '126315'),
(1326, '126316000', 'T\'BOLI', '12', '1263', '126316'),
(1327, '126317000', 'TUPI', '12', '1263', '126317'),
(1328, '126318000', 'SANTO NIÑO', '12', '1263', '126318'),
(1329, '126319000', 'LAKE SEBU', '12', '1263', '126319'),
(1330, '126501000', 'BAGUMBAYAN', '12', '1265', '126501'),
(1331, '126502000', 'COLUMBIO', '12', '1265', '126502'),
(1332, '126503000', 'ESPERANZA', '12', '1265', '126503'),
(1333, '126504000', 'ISULAN (Capital)', '12', '1265', '126504'),
(1334, '126505000', 'KALAMANSIG', '12', '1265', '126505'),
(1335, '126506000', 'LEBAK', '12', '1265', '126506'),
(1336, '126507000', 'LUTAYAN', '12', '1265', '126507'),
(1337, '126508000', 'LAMBAYONG (MARIANO MARCOS)', '12', '1265', '126508'),
(1338, '126509000', 'PALIMBANG', '12', '1265', '126509'),
(1339, '126510000', 'PRESIDENT QUIRINO', '12', '1265', '126510'),
(1340, '126511000', 'CITY OF TACURONG', '12', '1265', '126511'),
(1341, '126512000', 'SEN. NINOY AQUINO', '12', '1265', '126512'),
(1342, '128001000', 'ALABEL (Capital)', '12', '1280', '128001'),
(1343, '128002000', 'GLAN', '12', '1280', '128002'),
(1344, '128003000', 'KIAMBA', '12', '1280', '128003'),
(1345, '128004000', 'MAASIM', '12', '1280', '128004'),
(1346, '128005000', 'MAITUM', '12', '1280', '128005'),
(1347, '128006000', 'MALAPATAN', '12', '1280', '128006'),
(1348, '128007000', 'MALUNGON', '12', '1280', '128007'),
(1349, '129804000', 'COTABATO CITY', '12', '1298', '129804'),
(1350, '133901000', 'TONDO I / II', '13', '1339', '133901'),
(1351, '133902000', 'BINONDO', '13', '1339', '133902'),
(1352, '133903000', 'QUIAPO', '13', '1339', '133903'),
(1353, '133904000', 'SAN NICOLAS', '13', '1339', '133904'),
(1354, '133905000', 'SANTA CRUZ', '13', '1339', '133905'),
(1355, '133906000', 'SAMPALOC', '13', '1339', '133906'),
(1356, '133907000', 'SAN MIGUEL', '13', '1339', '133907'),
(1357, '133908000', 'ERMITA', '13', '1339', '133908'),
(1358, '133909000', 'INTRAMUROS', '13', '1339', '133909'),
(1359, '133910000', 'MALATE', '13', '1339', '133910'),
(1360, '133911000', 'PACO', '13', '1339', '133911'),
(1361, '133912000', 'PANDACAN', '13', '1339', '133912'),
(1362, '133913000', 'PORT AREA', '13', '1339', '133913'),
(1363, '133914000', 'SANTA ANA', '13', '1339', '133914'),
(1364, '137401000', 'CITY OF MANDALUYONG', '13', '1374', '137401'),
(1365, '137402000', 'CITY OF MARIKINA', '13', '1374', '137402'),
(1366, '137403000', 'CITY OF PASIG', '13', '1374', '137403'),
(1367, '137404000', 'QUEZON CITY', '13', '1374', '137404'),
(1368, '137405000', 'CITY OF SAN JUAN', '13', '1374', '137405'),
(1369, '137501000', 'CALOOCAN CITY', '13', '1375', '137501'),
(1370, '137502000', 'CITY OF MALABON', '13', '1375', '137502'),
(1371, '137503000', 'CITY OF NAVOTAS', '13', '1375', '137503'),
(1372, '137504000', 'CITY OF VALENZUELA', '13', '1375', '137504'),
(1373, '137601000', 'CITY OF LAS PIÑAS', '13', '1376', '137601'),
(1374, '137602000', 'CITY OF MAKATI', '13', '1376', '137602'),
(1375, '137603000', 'CITY OF MUNTINLUPA', '13', '1376', '137603'),
(1376, '137604000', 'CITY OF PARAÑAQUE', '13', '1376', '137604'),
(1377, '137605000', 'PASAY CITY', '13', '1376', '137605'),
(1378, '137606000', 'PATEROS', '13', '1376', '137606'),
(1379, '137607000', 'TAGUIG CITY', '13', '1376', '137607'),
(1380, '140101000', 'BANGUED (Capital)', '14', '1401', '140101'),
(1381, '140102000', 'BOLINEY', '14', '1401', '140102'),
(1382, '140103000', 'BUCAY', '14', '1401', '140103'),
(1383, '140104000', 'BUCLOC', '14', '1401', '140104'),
(1384, '140105000', 'DAGUIOMAN', '14', '1401', '140105'),
(1385, '140106000', 'DANGLAS', '14', '1401', '140106'),
(1386, '140107000', 'DOLORES', '14', '1401', '140107'),
(1387, '140108000', 'LA PAZ', '14', '1401', '140108'),
(1388, '140109000', 'LACUB', '14', '1401', '140109'),
(1389, '140110000', 'LAGANGILANG', '14', '1401', '140110'),
(1390, '140111000', 'LAGAYAN', '14', '1401', '140111'),
(1391, '140112000', 'LANGIDEN', '14', '1401', '140112'),
(1392, '140113000', 'LICUAN-BAAY (LICUAN)', '14', '1401', '140113'),
(1393, '140114000', 'LUBA', '14', '1401', '140114'),
(1394, '140115000', 'MALIBCONG', '14', '1401', '140115'),
(1395, '140116000', 'MANABO', '14', '1401', '140116'),
(1396, '140117000', 'PEÑARRUBIA', '14', '1401', '140117'),
(1397, '140118000', 'PIDIGAN', '14', '1401', '140118'),
(1398, '140119000', 'PILAR', '14', '1401', '140119'),
(1399, '140120000', 'SALLAPADAN', '14', '1401', '140120'),
(1400, '140121000', 'SAN ISIDRO', '14', '1401', '140121'),
(1401, '140122000', 'SAN JUAN', '14', '1401', '140122'),
(1402, '140123000', 'SAN QUINTIN', '14', '1401', '140123'),
(1403, '140124000', 'TAYUM', '14', '1401', '140124'),
(1404, '140125000', 'TINEG', '14', '1401', '140125'),
(1405, '140126000', 'TUBO', '14', '1401', '140126'),
(1406, '140127000', 'VILLAVICIOSA', '14', '1401', '140127'),
(1407, '141101000', 'ATOK', '14', '1411', '141101'),
(1408, '141102000', 'BAGUIO CITY', '14', '1411', '141102'),
(1409, '141103000', 'BAKUN', '14', '1411', '141103'),
(1410, '141104000', 'BOKOD', '14', '1411', '141104'),
(1411, '141105000', 'BUGUIAS', '14', '1411', '141105'),
(1412, '141106000', 'ITOGON', '14', '1411', '141106'),
(1413, '141107000', 'KABAYAN', '14', '1411', '141107'),
(1414, '141108000', 'KAPANGAN', '14', '1411', '141108'),
(1415, '141109000', 'KIBUNGAN', '14', '1411', '141109'),
(1416, '141110000', 'LA TRINIDAD (Capital)', '14', '1411', '141110'),
(1417, '141111000', 'MANKAYAN', '14', '1411', '141111'),
(1418, '141112000', 'SABLAN', '14', '1411', '141112'),
(1419, '141113000', 'TUBA', '14', '1411', '141113'),
(1420, '141114000', 'TUBLAY', '14', '1411', '141114'),
(1421, '142701000', 'BANAUE', '14', '1427', '142701'),
(1422, '142702000', 'HUNGDUAN', '14', '1427', '142702'),
(1423, '142703000', 'KIANGAN', '14', '1427', '142703'),
(1424, '142704000', 'LAGAWE (Capital)', '14', '1427', '142704'),
(1425, '142705000', 'LAMUT', '14', '1427', '142705'),
(1426, '142706000', 'MAYOYAO', '14', '1427', '142706'),
(1427, '142707000', 'ALFONSO LISTA (POTIA)', '14', '1427', '142707'),
(1428, '142708000', 'AGUINALDO', '14', '1427', '142708'),
(1429, '142709000', 'HINGYON', '14', '1427', '142709'),
(1430, '142710000', 'TINOC', '14', '1427', '142710'),
(1431, '142711000', 'ASIPULO', '14', '1427', '142711'),
(1432, '143201000', 'BALBALAN', '14', '1432', '143201'),
(1433, '143206000', 'LUBUAGAN', '14', '1432', '143206'),
(1434, '143208000', 'PASIL', '14', '1432', '143208'),
(1435, '143209000', 'PINUKPUK', '14', '1432', '143209'),
(1436, '143211000', 'RIZAL (LIWAN)', '14', '1432', '143211'),
(1437, '143213000', 'CITY OF TABUK (Capital)', '14', '1432', '143213'),
(1438, '143214000', 'TANUDAN', '14', '1432', '143214'),
(1439, '143215000', 'TINGLAYAN', '14', '1432', '143215'),
(1440, '144401000', 'BARLIG', '14', '1444', '144401'),
(1441, '144402000', 'BAUKO', '14', '1444', '144402'),
(1442, '144403000', 'BESAO', '14', '1444', '144403'),
(1443, '144404000', 'BONTOC (Capital)', '14', '1444', '144404'),
(1444, '144405000', 'NATONIN', '14', '1444', '144405'),
(1445, '144406000', 'PARACELIS', '14', '1444', '144406'),
(1446, '144407000', 'SABANGAN', '14', '1444', '144407'),
(1447, '144408000', 'SADANGA', '14', '1444', '144408'),
(1448, '144409000', 'SAGADA', '14', '1444', '144409'),
(1449, '144410000', 'TADIAN', '14', '1444', '144410'),
(1450, '148101000', 'CALANASAN (BAYAG)', '14', '1481', '148101'),
(1451, '148102000', 'CONNER', '14', '1481', '148102'),
(1452, '148103000', 'FLORA', '14', '1481', '148103'),
(1453, '148104000', 'KABUGAO (Capital)', '14', '1481', '148104'),
(1454, '148105000', 'LUNA', '14', '1481', '148105'),
(1455, '148106000', 'PUDTOL', '14', '1481', '148106'),
(1456, '148107000', 'SANTA MARCELA', '14', '1481', '148107'),
(1457, '150702000', 'CITY OF LAMITAN', '15', '1507', '150702'),
(1458, '150703000', 'LANTAWAN', '15', '1507', '150703'),
(1459, '150704000', 'MALUSO', '15', '1507', '150704'),
(1460, '150705000', 'SUMISIP', '15', '1507', '150705'),
(1461, '150706000', 'TIPO-TIPO', '15', '1507', '150706'),
(1462, '150707000', 'TUBURAN', '15', '1507', '150707'),
(1463, '150708000', 'AKBAR', '15', '1507', '150708'),
(1464, '150709000', 'AL-BARKA', '15', '1507', '150709'),
(1465, '150710000', 'HADJI MOHAMMAD AJUL', '15', '1507', '150710'),
(1466, '150711000', 'UNGKAYA PUKAN', '15', '1507', '150711'),
(1467, '150712000', 'HADJI MUHTAMAD', '15', '1507', '150712'),
(1468, '150713000', 'TABUAN-LASA', '15', '1507', '150713'),
(1469, '153601000', 'BACOLOD-KALAWI (BACOLOD GRANDE)', '15', '1536', '153601'),
(1470, '153602000', 'BALABAGAN', '15', '1536', '153602'),
(1471, '153603000', 'BALINDONG (WATU)', '15', '1536', '153603'),
(1472, '153604000', 'BAYANG', '15', '1536', '153604'),
(1473, '153605000', 'BINIDAYAN', '15', '1536', '153605'),
(1474, '153606000', 'BUBONG', '15', '1536', '153606'),
(1475, '153607000', 'BUTIG', '15', '1536', '153607'),
(1476, '153609000', 'GANASSI', '15', '1536', '153609'),
(1477, '153610000', 'KAPAI', '15', '1536', '153610'),
(1478, '153611000', 'LUMBA-BAYABAO (MAGUING)', '15', '1536', '153611'),
(1479, '153612000', 'LUMBATAN', '15', '1536', '153612'),
(1480, '153613000', 'MADALUM', '15', '1536', '153613'),
(1481, '153614000', 'MADAMBA', '15', '1536', '153614'),
(1482, '153615000', 'MALABANG', '15', '1536', '153615'),
(1483, '153616000', 'MARANTAO', '15', '1536', '153616'),
(1484, '153617000', 'MARAWI CITY (Capital)', '15', '1536', '153617'),
(1485, '153618000', 'MASIU', '15', '1536', '153618'),
(1486, '153619000', 'MULONDO', '15', '1536', '153619'),
(1487, '153620000', 'PAGAYAWAN (TATARIKAN)', '15', '1536', '153620'),
(1488, '153621000', 'PIAGAPO', '15', '1536', '153621'),
(1489, '153622000', 'POONA BAYABAO (GATA)', '15', '1536', '153622'),
(1490, '153623000', 'PUALAS', '15', '1536', '153623'),
(1491, '153624000', 'DITSAAN-RAMAIN', '15', '1536', '153624'),
(1492, '153625000', 'SAGUIARAN', '15', '1536', '153625'),
(1493, '153626000', 'TAMPARAN', '15', '1536', '153626'),
(1494, '153627000', 'TARAKA', '15', '1536', '153627'),
(1495, '153628000', 'TUBARAN', '15', '1536', '153628'),
(1496, '153629000', 'TUGAYA', '15', '1536', '153629'),
(1497, '153630000', 'WAO', '15', '1536', '153630'),
(1498, '153631000', 'MAROGONG', '15', '1536', '153631'),
(1499, '153632000', 'CALANOGAS', '15', '1536', '153632'),
(1500, '153633000', 'BUADIPOSO-BUNTONG', '15', '1536', '153633'),
(1501, '153634000', 'MAGUING', '15', '1536', '153634'),
(1502, '153635000', 'PICONG (SULTAN GUMANDER)', '15', '1536', '153635'),
(1503, '153636000', 'LUMBAYANAGUE', '15', '1536', '153636'),
(1504, '153637000', 'BUMBARAN', '15', '1536', '153637'),
(1505, '153638000', 'TAGOLOAN II', '15', '1536', '153638'),
(1506, '153639000', 'KAPATAGAN', '15', '1536', '153639'),
(1507, '153640000', 'SULTAN DUMALONDONG', '15', '1536', '153640'),
(1508, '153641000', 'LUMBACA-UNAYAN', '15', '1536', '153641'),
(1509, '153801000', 'AMPATUAN', '15', '1538', '153801'),
(1510, '153802000', 'BULDON', '15', '1538', '153802'),
(1511, '153803000', 'BULUAN', '15', '1538', '153803'),
(1512, '153805000', 'DATU PAGLAS', '15', '1538', '153805'),
(1513, '153806000', 'DATU PIANG', '15', '1538', '153806'),
(1514, '153807000', 'DATU ODIN SINSUAT (DINAIG)', '15', '1538', '153807'),
(1515, '153808000', 'SHARIFF AGUAK (MAGANOY) (Capital)', '15', '1538', '153808'),
(1516, '153809000', 'MATANOG', '15', '1538', '153809'),
(1517, '153810000', 'PAGALUNGAN', '15', '1538', '153810'),
(1518, '153811000', 'PARANG', '15', '1538', '153811'),
(1519, '153812000', 'SULTAN KUDARAT (NULING)', '15', '1538', '153812'),
(1520, '153813000', 'SULTAN SA BARONGIS (LAMBAYONG)', '15', '1538', '153813'),
(1521, '153814000', 'KABUNTALAN (TUMBAO)', '15', '1538', '153814'),
(1522, '153815000', 'UPI', '15', '1538', '153815'),
(1523, '153816000', 'TALAYAN', '15', '1538', '153816'),
(1524, '153817000', 'SOUTH UPI', '15', '1538', '153817'),
(1525, '153818000', 'BARIRA', '15', '1538', '153818'),
(1526, '153819000', 'GEN. S. K. PENDATUN', '15', '1538', '153819'),
(1527, '153820000', 'MAMASAPANO', '15', '1538', '153820'),
(1528, '153821000', 'TALITAY', '15', '1538', '153821'),
(1529, '153822000', 'PAGAGAWAN', '15', '1538', '153822'),
(1530, '153823000', 'PAGLAT', '15', '1538', '153823'),
(1531, '153824000', 'SULTAN MASTURA', '15', '1538', '153824'),
(1532, '153825000', 'GUINDULUNGAN', '15', '1538', '153825'),
(1533, '153826000', 'DATU SAUDI-AMPATUAN', '15', '1538', '153826'),
(1534, '153827000', 'DATU UNSAY', '15', '1538', '153827'),
(1535, '153828000', 'DATU ABDULLAH SANGKI', '15', '1538', '153828'),
(1536, '153829000', 'RAJAH BUAYAN', '15', '1538', '153829'),
(1537, '153830000', 'DATU BLAH T. SINSUAT', '15', '1538', '153830'),
(1538, '153831000', 'DATU ANGGAL MIDTIMBANG', '15', '1538', '153831'),
(1539, '153832000', 'MANGUDADATU', '15', '1538', '153832'),
(1540, '153833000', 'PANDAG', '15', '1538', '153833'),
(1541, '153834000', 'NORTHERN KABUNTALAN', '15', '1538', '153834'),
(1542, '153835000', 'DATU HOFFER AMPATUAN', '15', '1538', '153835'),
(1543, '153836000', 'DATU SALIBO', '15', '1538', '153836'),
(1544, '153837000', 'SHARIFF SAYDONA MUSTAPHA', '15', '1538', '153837'),
(1545, '156601000', 'INDANAN', '15', '1566', '156601'),
(1546, '156602000', 'JOLO (Capital)', '15', '1566', '156602'),
(1547, '156603000', 'KALINGALAN CALUANG', '15', '1566', '156603'),
(1548, '156604000', 'LUUK', '15', '1566', '156604'),
(1549, '156605000', 'MAIMBUNG', '15', '1566', '156605'),
(1550, '156606000', 'HADJI PANGLIMA TAHIL (MARUNGGAS)', '15', '1566', '156606'),
(1551, '156607000', 'OLD PANAMAO', '15', '1566', '156607'),
(1552, '156608000', 'PANGUTARAN', '15', '1566', '156608'),
(1553, '156609000', 'PARANG', '15', '1566', '156609'),
(1554, '156610000', 'PATA', '15', '1566', '156610'),
(1555, '156611000', 'PATIKUL', '15', '1566', '156611'),
(1556, '156612000', 'SIASI', '15', '1566', '156612'),
(1557, '156613000', 'TALIPAO', '15', '1566', '156613'),
(1558, '156614000', 'TAPUL', '15', '1566', '156614'),
(1559, '156615000', 'TONGKIL', '15', '1566', '156615'),
(1560, '156616000', 'PANGLIMA ESTINO (NEW PANAMAO)', '15', '1566', '156616'),
(1561, '156617000', 'LUGUS', '15', '1566', '156617'),
(1562, '156618000', 'PANDAMI', '15', '1566', '156618'),
(1563, '156619000', 'OMAR', '15', '1566', '156619'),
(1564, '157001000', 'PANGLIMA SUGALA (BALIMBING)', '15', '1570', '157001'),
(1565, '157002000', 'BONGAO (Capital)', '15', '1570', '157002'),
(1566, '157003000', 'MAPUN (CAGAYAN DE TAWI-TAWI)', '15', '1570', '157003'),
(1567, '157004000', 'SIMUNUL', '15', '1570', '157004'),
(1568, '157005000', 'SITANGKAI', '15', '1570', '157005'),
(1569, '157006000', 'SOUTH UBIAN', '15', '1570', '157006'),
(1570, '157007000', 'TANDUBAS', '15', '1570', '157007'),
(1571, '157008000', 'TURTLE ISLANDS', '15', '1570', '157008'),
(1572, '157009000', 'LANGUYAN', '15', '1570', '157009'),
(1573, '157010000', 'SAPA-SAPA', '15', '1570', '157010'),
(1574, '157011000', 'SIBUTU', '15', '1570', '157011'),
(1575, '160201000', 'BUENAVISTA', '16', '1602', '160201'),
(1576, '160202000', 'BUTUAN CITY (Capital)', '16', '1602', '160202'),
(1577, '160203000', 'CITY OF CABADBARAN', '16', '1602', '160203'),
(1578, '160204000', 'CARMEN', '16', '1602', '160204'),
(1579, '160205000', 'JABONGA', '16', '1602', '160205'),
(1580, '160206000', 'KITCHARAO', '16', '1602', '160206'),
(1581, '160207000', 'LAS NIEVES', '16', '1602', '160207'),
(1582, '160208000', 'MAGALLANES', '16', '1602', '160208'),
(1583, '160209000', 'NASIPIT', '16', '1602', '160209'),
(1584, '160210000', 'SANTIAGO', '16', '1602', '160210'),
(1585, '160211000', 'TUBAY', '16', '1602', '160211'),
(1586, '160212000', 'REMEDIOS T. ROMUALDEZ', '16', '1602', '160212'),
(1587, '160301000', 'CITY OF BAYUGAN', '16', '1603', '160301'),
(1588, '160302000', 'BUNAWAN', '16', '1603', '160302'),
(1589, '160303000', 'ESPERANZA', '16', '1603', '160303'),
(1590, '160304000', 'LA PAZ', '16', '1603', '160304'),
(1591, '160305000', 'LORETO', '16', '1603', '160305'),
(1592, '160306000', 'PROSPERIDAD (Capital)', '16', '1603', '160306'),
(1593, '160307000', 'ROSARIO', '16', '1603', '160307'),
(1594, '160308000', 'SAN FRANCISCO', '16', '1603', '160308'),
(1595, '160309000', 'SAN LUIS', '16', '1603', '160309'),
(1596, '160310000', 'SANTA JOSEFA', '16', '1603', '160310'),
(1597, '160311000', 'TALACOGON', '16', '1603', '160311'),
(1598, '160312000', 'TRENTO', '16', '1603', '160312'),
(1599, '160313000', 'VERUELA', '16', '1603', '160313'),
(1600, '160314000', 'SIBAGAT', '16', '1603', '160314'),
(1601, '166701000', 'ALEGRIA', '16', '1667', '166701'),
(1602, '166702000', 'BACUAG', '16', '1667', '166702'),
(1603, '166704000', 'BURGOS', '16', '1667', '166704'),
(1604, '166706000', 'CLAVER', '16', '1667', '166706'),
(1605, '166707000', 'DAPA', '16', '1667', '166707'),
(1606, '166708000', 'DEL CARMEN', '16', '1667', '166708'),
(1607, '166710000', 'GENERAL LUNA', '16', '1667', '166710'),
(1608, '166711000', 'GIGAQUIT', '16', '1667', '166711'),
(1609, '166714000', 'MAINIT', '16', '1667', '166714'),
(1610, '166715000', 'MALIMONO', '16', '1667', '166715'),
(1611, '166716000', 'PILAR', '16', '1667', '166716'),
(1612, '166717000', 'PLACER', '16', '1667', '166717'),
(1613, '166718000', 'SAN BENITO', '16', '1667', '166718'),
(1614, '166719000', 'SAN FRANCISCO (ANAO-AON)', '16', '1667', '166719'),
(1615, '166720000', 'SAN ISIDRO', '16', '1667', '166720'),
(1616, '166721000', 'SANTA MONICA (SAPAO)', '16', '1667', '166721'),
(1617, '166722000', 'SISON', '16', '1667', '166722'),
(1618, '166723000', 'SOCORRO', '16', '1667', '166723'),
(1619, '166724000', 'SURIGAO CITY (Capital)', '16', '1667', '166724'),
(1620, '166725000', 'TAGANA-AN', '16', '1667', '166725'),
(1621, '166727000', 'TUBOD', '16', '1667', '166727'),
(1622, '166801000', 'BAROBO', '16', '1668', '166801'),
(1623, '166802000', 'BAYABAS', '16', '1668', '166802'),
(1624, '166803000', 'CITY OF BISLIG', '16', '1668', '166803'),
(1625, '166804000', 'CAGWAIT', '16', '1668', '166804'),
(1626, '166805000', 'CANTILAN', '16', '1668', '166805'),
(1627, '166806000', 'CARMEN', '16', '1668', '166806'),
(1628, '166807000', 'CARRASCAL', '16', '1668', '166807'),
(1629, '166808000', 'CORTES', '16', '1668', '166808'),
(1630, '166809000', 'HINATUAN', '16', '1668', '166809'),
(1631, '166810000', 'LANUZA', '16', '1668', '166810'),
(1632, '166811000', 'LIANGA', '16', '1668', '166811'),
(1633, '166812000', 'LINGIG', '16', '1668', '166812'),
(1634, '166813000', 'MADRID', '16', '1668', '166813'),
(1635, '166814000', 'MARIHATAG', '16', '1668', '166814'),
(1636, '166815000', 'SAN AGUSTIN', '16', '1668', '166815'),
(1637, '166816000', 'SAN MIGUEL', '16', '1668', '166816'),
(1638, '166817000', 'TAGBINA', '16', '1668', '166817'),
(1639, '166818000', 'TAGO', '16', '1668', '166818'),
(1640, '166819000', 'CITY OF TANDAG (Capital)', '16', '1668', '166819'),
(1641, '168501000', 'BASILISA (RIZAL)', '16', '1685', '168501'),
(1642, '168502000', 'CAGDIANAO', '16', '1685', '168502'),
(1643, '168503000', 'DINAGAT', '16', '1685', '168503'),
(1644, '168504000', 'LIBJO (ALBOR)', '16', '1685', '168504'),
(1645, '168505000', 'LORETO', '16', '1685', '168505'),
(1646, '168506000', 'SAN JOSE (Capital)', '16', '1685', '168506'),
(1647, '168507000', 'TUBAJON', '16', '1685', '168507');

-- --------------------------------------------------------

--
-- Table structure for table `refprovince`
--

CREATE TABLE `refprovince` (
  `id` int(11) NOT NULL,
  `psgcCode` varchar(255) DEFAULT NULL,
  `provDesc` text DEFAULT NULL,
  `regCode` varchar(255) DEFAULT NULL,
  `provCode` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `refprovince`
--

INSERT INTO `refprovince` (`id`, `psgcCode`, `provDesc`, `regCode`, `provCode`) VALUES
(1, '012800000', 'ILOCOS NORTE', '01', '0128'),
(2, '012900000', 'ILOCOS SUR', '01', '0129'),
(3, '013300000', 'LA UNION', '01', '0133'),
(4, '015500000', 'PANGASINAN', '01', '0155'),
(5, '020900000', 'BATANES', '02', '0209'),
(6, '021500000', 'CAGAYAN', '02', '0215'),
(7, '023100000', 'ISABELA', '02', '0231'),
(8, '025000000', 'NUEVA VIZCAYA', '02', '0250'),
(9, '025700000', 'QUIRINO', '02', '0257'),
(10, '030800000', 'BATAAN', '03', '0308'),
(11, '031400000', 'BULACAN', '03', '0314'),
(12, '034900000', 'NUEVA ECIJA', '03', '0349'),
(13, '035400000', 'PAMPANGA', '03', '0354'),
(14, '036900000', 'TARLAC', '03', '0369'),
(15, '037100000', 'ZAMBALES', '03', '0371'),
(16, '037700000', 'AURORA', '03', '0377'),
(17, '041000000', 'BATANGAS', '04', '0410'),
(18, '042100000', 'CAVITE', '04', '0421'),
(19, '043400000', 'LAGUNA', '04', '0434'),
(20, '045600000', 'QUEZON', '04', '0456'),
(21, '045800000', 'RIZAL', '04', '0458'),
(22, '174000000', 'MARINDUQUE', '17', '1740'),
(23, '175100000', 'OCCIDENTAL MINDORO', '17', '1751'),
(24, '175200000', 'ORIENTAL MINDORO', '17', '1752'),
(25, '175300000', 'PALAWAN', '17', '1753'),
(26, '175900000', 'ROMBLON', '17', '1759'),
(27, '050500000', 'ALBAY', '05', '0505'),
(28, '051600000', 'CAMARINES NORTE', '05', '0516'),
(29, '051700000', 'CAMARINES SUR', '05', '0517'),
(30, '052000000', 'CATANDUANES', '05', '0520'),
(31, '054100000', 'MASBATE', '05', '0541'),
(32, '056200000', 'SORSOGON', '05', '0562'),
(33, '060400000', 'AKLAN', '06', '0604'),
(34, '060600000', 'ANTIQUE', '06', '0606'),
(35, '061900000', 'CAPIZ', '06', '0619'),
(36, '063000000', 'ILOILO', '06', '0630'),
(37, '064500000', 'NEGROS OCCIDENTAL', '06', '0645'),
(38, '067900000', 'GUIMARAS', '06', '0679'),
(39, '071200000', 'BOHOL', '07', '0712'),
(40, '072200000', 'CEBU', '07', '0722'),
(41, '074600000', 'NEGROS ORIENTAL', '07', '0746'),
(42, '076100000', 'SIQUIJOR', '07', '0761'),
(43, '082600000', 'EASTERN SAMAR', '08', '0826'),
(44, '083700000', 'LEYTE', '08', '0837'),
(45, '084800000', 'NORTHERN SAMAR', '08', '0848'),
(46, '086000000', 'SAMAR (WESTERN SAMAR)', '08', '0860'),
(47, '086400000', 'SOUTHERN LEYTE', '08', '0864'),
(48, '087800000', 'BILIRAN', '08', '0878'),
(49, '097200000', 'ZAMBOANGA DEL NORTE', '09', '0972'),
(50, '097300000', 'ZAMBOANGA DEL SUR', '09', '0973'),
(51, '098300000', 'ZAMBOANGA SIBUGAY', '09', '0983'),
(52, '099700000', 'CITY OF ISABELA', '09', '0997'),
(53, '101300000', 'BUKIDNON', '10', '1013'),
(54, '101800000', 'CAMIGUIN', '10', '1018'),
(55, '103500000', 'LANAO DEL NORTE', '10', '1035'),
(56, '104200000', 'MISAMIS OCCIDENTAL', '10', '1042'),
(57, '104300000', 'MISAMIS ORIENTAL', '10', '1043'),
(58, '112300000', 'DAVAO DEL NORTE', '11', '1123'),
(59, '112400000', 'DAVAO DEL SUR', '11', '1124'),
(60, '112500000', 'DAVAO ORIENTAL', '11', '1125'),
(61, '118200000', 'COMPOSTELA VALLEY', '11', '1182'),
(62, '118600000', 'DAVAO OCCIDENTAL', '11', '1186'),
(63, '124700000', 'COTABATO (NORTH COTABATO)', '12', '1247'),
(64, '126300000', 'SOUTH COTABATO', '12', '1263'),
(65, '126500000', 'SULTAN KUDARAT', '12', '1265'),
(66, '128000000', 'SARANGANI', '12', '1280'),
(67, '129800000', 'COTABATO CITY', '12', '1298'),
(68, '133900000', 'NCR, CITY OF MANILA, FIRST DISTRICT', '13', '1339'),
(69, '133900000', 'CITY OF MANILA', '13', '1339'),
(70, '137400000', 'NCR, SECOND DISTRICT', '13', '1374'),
(71, '137500000', 'NCR, THIRD DISTRICT', '13', '1375'),
(72, '137600000', 'NCR, FOURTH DISTRICT', '13', '1376'),
(73, '140100000', 'ABRA', '14', '1401'),
(74, '141100000', 'BENGUET', '14', '1411'),
(75, '142700000', 'IFUGAO', '14', '1427'),
(76, '143200000', 'KALINGA', '14', '1432'),
(77, '144400000', 'MOUNTAIN PROVINCE', '14', '1444'),
(78, '148100000', 'APAYAO', '14', '1481'),
(79, '150700000', 'BASILAN', '15', '1507'),
(80, '153600000', 'LANAO DEL SUR', '15', '1536'),
(81, '153800000', 'MAGUINDANAO', '15', '1538'),
(82, '156600000', 'SULU', '15', '1566'),
(83, '157000000', 'TAWI-TAWI', '15', '1570'),
(84, '160200000', 'AGUSAN DEL NORTE', '16', '1602'),
(85, '160300000', 'AGUSAN DEL SUR', '16', '1603'),
(86, '166700000', 'SURIGAO DEL NORTE', '16', '1667'),
(87, '166800000', 'SURIGAO DEL SUR', '16', '1668'),
(88, '168500000', 'DINAGAT ISLANDS', '16', '1685');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE `relationship` (
  `id` int(11) NOT NULL,
  `relationship` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`id`, `relationship`) VALUES
(1, 'Mother'),
(2, 'Father'),
(3, 'Parents'),
(4, 'Grandmother'),
(5, 'Grandfather'),
(6, 'Grandparents'),
(7, 'Mother In Law'),
(8, 'Father In Law'),
(9, 'Aunt'),
(10, 'Uncle'),
(11, 'Other Relative'),
(12, 'Friend');

-- --------------------------------------------------------

--
-- Table structure for table `relative`
--

CREATE TABLE `relative` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `relationship` varchar(80) NOT NULL,
  `proof` varchar(255) NOT NULL,
  `patient_fname` varchar(255) NOT NULL,
  `patient_mname` varchar(255) NOT NULL,
  `patient_lname` varchar(255) NOT NULL,
  `patient_suffix` varchar(255) NOT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relative`
--

INSERT INTO `relative` (`id`, `user_id`, `relationship`, `proof`, `patient_fname`, `patient_mname`, `patient_lname`, `patient_suffix`, `patient_id`) VALUES
(10, 1, 'Mother', 'Relative', 'Lola', 'Dela', 'Cruz', '', 42);

-- --------------------------------------------------------

--
-- Table structure for table `relative_info`
--

CREATE TABLE `relative_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal` int(11) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `relative_info_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relative_info`
--

INSERT INTO `relative_info` (`id`, `user_id`, `firstname`, `middlename`, `lastname`, `suffix`, `date_of_birth`, `place_of_birth`, `province`, `gender`, `street`, `barangay`, `city`, `postal`, `relationship`, `phone`, `telephone`, `email`, `picture`, `relative_info_no`) VALUES
(7, 1, 'Juan', 'Dela', 'Cruz', '', '2023-04-15', 'Jolo', 'SULU', 'Male', 'Hill', 'Kasanyangan', 'ZAMBOANGA CITY', 7000, 'Mother', '09152354148', '', 'khasmirbasaluddin@gmail.com', 'Relative_1680868200Vanitas-19.jpg', 37245855),
(8, 6, 'Test', 'Test', 'Test', '', '2023-04-12', 'Test', 'ABRA', 'Female', 'Test', 'Test', 'ABORLAN', 7000, 'Mother', '09152354148', '', 'test@gmail.com', 'Relative_1681311935500849a6e2e651d374ce0f4049e43afe.jpg', 1125331485),
(9, 1, 'Testing', 'Testing', 'Testing', '', '2023-04-13', 'Testing', 'BOHOL', 'Female', 'Testing', 'Testing', 'ABORLAN', 7000, 'Mother', '09152354148', '', 'test@gmail.com', 'Relative_1681316432yuta.jpg', 664919643);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`) VALUES
(1, 'Room 1'),
(2, 'Room 2'),
(3, 'Room 3'),
(4, 'Room 4'),
(5, 'Room 5');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services`, `price`) VALUES
(1, 'Bundle', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `suffix` enum('Sr','Jr','I','II','III') NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `degree` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `added_on` datetime NOT NULL,
  `retired_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `firstname`, `middlename`, `lastname`, `suffix`, `address`, `date_of_birth`, `degree`, `position`, `status`, `added_on`, `retired_on`) VALUES
(1, 2, 'Alice', 'Johnson', 'Yue', 'Jr', 'Sta Catalina', '2023-02-16', 'Graduate', 'Nurse', 'Active', '2023-02-20 07:25:37', NULL),
(2, 4, 'Jessica', 'Bottom', 'Apple', 'Sr', 'Staff2', '2012-04-13', 'Staff2', 'Staff2', 'Active', '2023-03-15 11:54:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_schedule`
--

CREATE TABLE `staff_schedule` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `day` enum('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') NOT NULL,
  `shift_type` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_schedule`
--

INSERT INTO `staff_schedule` (`id`, `staff_id`, `day`, `shift_type`, `status`) VALUES
(1, 1, 'Monday', 'Day Shift', 'Active'),
(4, 1, 'Wednesday', 'Day Shift', 'Active'),
(9, 2, 'Friday', 'Day Shift', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `survey_answer`
--

CREATE TABLE `survey_answer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_question` int(11) NOT NULL,
  `answers` varchar(255) NOT NULL,
  `survey_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_answer`
--

INSERT INTO `survey_answer` (`id`, `user_id`, `survey_question`, `answers`, `survey_no`) VALUES
(55, 1, 1, 'Yes', 37245855),
(56, 1, 2, 'Yes', 37245855),
(57, 1, 3, 'Yes', 37245855),
(58, 1, 4, 'Yes', 37245855),
(59, 1, 5, 'Yes', 37245855),
(60, 1, 6, 'Yes', 37245855),
(61, 1, 7, 'Yes', 37245855),
(62, 1, 8, 'Yes', 37245855),
(63, 1, 9, '', 37245855),
(64, 6, 1, 'Yes', 1125331485),
(65, 6, 2, 'Yes', 1125331485),
(66, 6, 3, 'Yes', 1125331485),
(67, 6, 4, 'Yes', 1125331485),
(68, 6, 5, 'Yes', 1125331485),
(69, 6, 6, 'Yes', 1125331485),
(70, 6, 7, 'Yes', 1125331485),
(71, 6, 8, 'Yes', 1125331485),
(72, 6, 9, '', 1125331485),
(73, 1, 1, 'No', 664919643),
(74, 1, 2, 'No', 664919643),
(75, 1, 3, 'No', 664919643),
(76, 1, 4, 'No', 664919643),
(77, 1, 5, 'No', 664919643),
(78, 1, 6, 'No', 664919643),
(79, 1, 7, 'No', 664919643),
(80, 1, 8, 'No', 664919643),
(81, 1, 9, '', 664919643);

-- --------------------------------------------------------

--
-- Table structure for table `survey_info`
--

CREATE TABLE `survey_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_no` int(11) NOT NULL,
  `add_date` date NOT NULL,
  `inquire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_info`
--

INSERT INTO `survey_info` (`id`, `user_id`, `survey_no`, `add_date`, `inquire`) VALUES
(6, 1, 37245855, '2023-04-04', 'Mother'),
(7, 6, 1125331485, '2023-04-15', 'Mother'),
(8, 1, 664919643, '2023-04-22', 'Mother');

-- --------------------------------------------------------

--
-- Table structure for table `survey_question`
--

CREATE TABLE `survey_question` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_question`
--

INSERT INTO `survey_question` (`id`, `question`) VALUES
(1, 'Does the resident walk with assistance?'),
(2, 'Is the resident is Wheelchair-bound?'),
(3, 'Is the resident is bedridden?'),
(4, 'Is the resident experiencing memory loss or difficulty remembering the time, date, place, other people, or themselves?'),
(5, 'Does the resident need assistance when taking a bath?'),
(6, 'Does the resident need assistance when eating?'),
(7, 'Does the resident feel restless and walk around?'),
(8, 'Does the resident have a peg/feeding tube/contraption?'),
(9, 'Is there is something we need to know?');

-- --------------------------------------------------------

--
-- Table structure for table `survey_services`
--

CREATE TABLE `survey_services` (
  `id` int(11) NOT NULL,
  `services` int(11) NOT NULL,
  `survey_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_services`
--

INSERT INTO `survey_services` (`id`, `services`, `survey_no`) VALUES
(3, 1, 37245855),
(4, 3, 37245855),
(5, 1, 1125331485),
(6, 2, 1125331485),
(7, 1, 664919643),
(8, 3, 664919643);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` int(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` int(50) NOT NULL,
  `verification_status` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `fname`, `mname`, `lname`, `email`, `phone`, `birthdate`, `address`, `image`, `password`, `otp`, `verification_status`, `type`, `created_at`, `updated_at`) VALUES
(1, 1039537853, 'Khasmir', 'Mahadali', 'Basaluddin', 'khasmirbasaluddin@gmail.com', '09152354148', '2023-03-26', 'Sta. Catalina', 'yuta.jpg', '123', 0, 'Verified', 'client', '2023-02-20 06:23:07', '2023-04-26 13:08:29'),
(2, 42139240, 'Staff', 'Staff', 'Staff', 'staff@gmail.com', '09152354148', NULL, NULL, 'yuta.jpg', '123', 0, 'Verified', 'staff', '2023-02-20 06:24:31', '2023-04-12 15:18:41'),
(3, 1039537853, 'admin', 'admin', 'admin', 'admin@gmail.com', '09152354148', NULL, NULL, 'yuta.jpg', '123', 0, 'Verified', 'admin', '2023-03-07 14:33:48', '2023-04-12 15:18:51'),
(4, 1039537821, 'Staff2', 'Staff2', 'Staff2', 'staff2@gmail.com', '09152354148', NULL, NULL, 'yuta.jpg', '123', 0, 'Verified', 'staff', '2023-03-15 10:54:37', '2023-04-12 15:19:01'),
(6, 648167998, 'El', 'Car', 'Res', 'test@gmail.com', '09094731567', NULL, NULL, 'Profile_1680057603IMG20220326200018.jpg', '123', 0, 'Verified', 'client', '2023-03-29 02:40:03', '2023-04-11 16:29:14'),
(7, 247813239, 'Eljen', 'Briones', 'Augusto', 'xt202001173@wmsu.edu.ph', '09563350760', NULL, NULL, 'Profile_1680069818eljen.jpg', 'Khasmir123', 0, 'Verified', 'client', '2023-03-29 06:03:38', '2023-03-29 06:03:59'),
(8, 1145276372, 'Machel', 'Briones', 'Augusto', 'maejen019@gmail.com', '09554616786', NULL, NULL, 'Profile_1680151552e2a0f80716cea9f444bbdec4da54a13e-removebg-preview.png', 'El-El12554680', 0, 'Verified', 'client', '2023-03-30 04:45:52', '2023-03-30 04:46:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_info` (`patient_info`),
  ADD KEY `relative_info` (`relative_info`),
  ADD KEY `survey_info` (`survey_info`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `client_id` (`user_id`),
  ADD KEY `staff_schedule_id` (`staff_schedule_id`),
  ADD KEY `purpose_for_appointment` (`purpose_for_appointment`);

--
-- Indexes for table `appointment_purpose`
--
ALTER TABLE `appointment_purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_app_detail`
--
ALTER TABLE `monitoring_app_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_detail`
--
ALTER TABLE `monitoring_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_hyiegne`
--
ALTER TABLE `monitoring_hyiegne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_medecine`
--
ALTER TABLE `monitoring_medecine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_nutrition`
--
ALTER TABLE `monitoring_nutrition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_photo_update`
--
ALTER TABLE `monitoring_photo_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_report`
--
ALTER TABLE `monitoring_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_services`
--
ALTER TABLE `patient_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refcitymun`
--
ALTER TABLE `refcitymun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refprovince`
--
ALTER TABLE `refprovince`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relative`
--
ALTER TABLE `relative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relative_info`
--
ALTER TABLE `relative_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_staff` (`user_id`);

--
-- Indexes for table `staff_schedule`
--
ALTER TABLE `staff_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_sched` (`staff_id`);

--
-- Indexes for table `survey_answer`
--
ALTER TABLE `survey_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_info`
--
ALTER TABLE `survey_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_question`
--
ALTER TABLE `survey_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_services`
--
ALTER TABLE `survey_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment_purpose`
--
ALTER TABLE `appointment_purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `monitoring_app_detail`
--
ALTER TABLE `monitoring_app_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `monitoring_detail`
--
ALTER TABLE `monitoring_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `monitoring_hyiegne`
--
ALTER TABLE `monitoring_hyiegne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitoring_medecine`
--
ALTER TABLE `monitoring_medecine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitoring_nutrition`
--
ALTER TABLE `monitoring_nutrition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitoring_photo_update`
--
ALTER TABLE `monitoring_photo_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitoring_report`
--
ALTER TABLE `monitoring_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_services`
--
ALTER TABLE `patient_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `refcitymun`
--
ALTER TABLE `refcitymun`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1648;

--
-- AUTO_INCREMENT for table `refprovince`
--
ALTER TABLE `refprovince`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `relationship`
--
ALTER TABLE `relationship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `relative`
--
ALTER TABLE `relative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `relative_info`
--
ALTER TABLE `relative_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_schedule`
--
ALTER TABLE `staff_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `survey_answer`
--
ALTER TABLE `survey_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `survey_info`
--
ALTER TABLE `survey_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `survey_question`
--
ALTER TABLE `survey_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `survey_services`
--
ALTER TABLE `survey_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission`
--
ALTER TABLE `admission`
  ADD CONSTRAINT `admission_ibfk_1` FOREIGN KEY (`patient_info`) REFERENCES `patient_info` (`id`),
  ADD CONSTRAINT `admission_ibfk_2` FOREIGN KEY (`relative_info`) REFERENCES `relative_info` (`id`),
  ADD CONSTRAINT `admission_ibfk_3` FOREIGN KEY (`survey_info`) REFERENCES `survey_info` (`id`),
  ADD CONSTRAINT `admission_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `user_staff` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `staff_schedule`
--
ALTER TABLE `staff_schedule`
  ADD CONSTRAINT `staff_sched` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
